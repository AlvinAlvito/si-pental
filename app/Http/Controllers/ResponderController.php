<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ResponderController extends Controller
{
    public function index()
    {
        $q = request('q');

        $responses = Response::withCount('answers')
            ->when($q, function ($query) use ($q) {
                $query->where(function ($w) use ($q) {
                    $w->where('name', 'like', "%{$q}%")
                      ->orWhere('gender', 'like', "%{$q}%")
                      ->orWhere('age', (int) $q ?: null)
                      ->orWhere('total_score', (int) $q ?: null)
                      ->orWhere('id', (int) $q ?: null);
                });
            })
            ->orderByDesc('created_at')
            ->paginate(20)
            ->withQueryString();

        return view('admin.responder', compact('responses', 'q'));
    }

public function show($id)
{
    $responder = Response::with('answers')->findOrFail($id);

    // Hitung skor kategori & jumlah pertanyaan
    $n = $responder->answers->count();
    $min = 1 * $n;
    $max = 5 * $n;

    // Interpretasi sederhana
    if ($responder->total_score <= $min + 0.4 * ($max - $min)) {
        $interpret = 'Kesehatan mental rendah';
    } elseif ($responder->total_score <= $min + 0.6 * ($max - $min)) {
        $interpret = 'Kesehatan mental sedang';
    } else {
        $interpret = 'Kesehatan mental baik';
    }

    // Mapping kategori (gunakan bahasa yang lebih rapi)
    $catLabelsMap = [
        'emotional'    => 'Kesejahteraan Emosional',
        'stress'       => 'Stres & Kecemasan',
        'social'       => 'Hubungan Sosial',
        'self_control' => 'Pengendalian Diri & Perilaku',
    ];

    // Urutan kategori
    $catOrder = array_keys($catLabelsMap);

    // Hitung total skor per kategori
    $catTotals = [];
    foreach ($catOrder as $cat) {
        $catTotals[$cat] = $responder->answers->where('category', $cat)->sum('score');
    }

    // Siapkan data untuk Radar Chart (rata-rata per kategori)
    $radarSeries = [];
    $radarCategories = [];
    foreach ($catOrder as $cat) {
        $count = $responder->answers->where('category', $cat)->count();
        $avg   = $count ? round($catTotals[$cat] / $count, 2) : 0;
        $radarSeries[] = $avg;
        $radarCategories[] = $catLabelsMap[$cat];
    }

    $genderLabel = $responder->gender === 'male' ? 'Laki-laki'
        : ($responder->gender === 'female' ? 'Perempuan' : 'Lainnya');

    return view('admin.responder_show', compact(
        'responder',
        'genderLabel',
        'interpret',
        'n',
        'min',
        'max',
        'catLabelsMap',
        'catOrder',
        'catTotals',
        'radarSeries',
        'radarCategories'
    ));
}


    public function destroy($id)
    {
        $response = Response::with('answers')->findOrFail($id);
        $response->answers()->delete();
        $response->delete();

        return back()->with('success', 'Data responder telah dihapus.');
    }

    public function exportPdf(Request $request)
    {
        $q = $request->q;

        $responses = Response::withCount('answers')
            ->when($q, function ($query) use ($q) {
                $query->where(function ($w) use ($q) {
                    $w->where('name', 'like', "%{$q}%")
                      ->orWhere('gender', 'like', "%{$q}%")
                      ->orWhere('age', (int) $q ?: null)
                      ->orWhere('total_score', (int) $q ?: null)
                      ->orWhere('id', (int) $q ?: null);
                });
            })
            ->orderByDesc('created_at')
            ->get();

        $today = now()->format('Y-m-d_H-i');

        $pdf = Pdf::loadView('admin.responder_pdf', [
            'responses' => $responses,
            'q'         => $q,
            'generated' => now()->format('d M Y, H:i'),
        ])->setPaper('a4', 'portrait');

        return $pdf->download("responder-{$today}.pdf");
    }
}
