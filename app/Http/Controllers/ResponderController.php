<?php

namespace App\Http\Controllers;


use App\Models\Response;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;



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
            'emotional' => 'Kesejahteraan Emosional',
            'stress' => 'Stres & Kecemasan',
            'social' => 'Hubungan Sosial',
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
            $avg = $count ? round($catTotals[$cat] / $count, 2) : 0;
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
            'q' => $q,
            'generated' => now()->format('d M Y, H:i'),
        ])->setPaper('a4', 'portrait');

        return $pdf->download("responder-{$today}.pdf");
    }
    public function exportCsv(Request $request): StreamedResponse
    {
        $q = $request->q;

        $filename = 'responder-' . now()->format('Y-m-d_H-i') . '.csv';
        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        $callback = function () use ($q) {
            $out = fopen('php://output', 'w');

            // Tambahkan BOM supaya Excel membaca UTF-8 dengan benar
            fprintf($out, chr(0xEF) . chr(0xBB) . chr(0xBF));

            // Header kolom
            fputcsv($out, [
                'ID',
                'Nama',
                'Usia',
                'Gender',
                'Total Skor',
                'Jumlah Jawaban',
                'Waktu Submit',
                // Opsi 1 (ringkas):
                'Skor per Kategori (JSON)',
                // -- ATAU kalau mau kolom terpisah, ganti 1 kolom di atas dengan 4 kolom di bawah:
                // 'Emosional','Stres & Kecemasan','Hubungan Sosial','Pengendalian Diri'
            ]);

            // Stream data hemat memori
            $rows = Response::withCount('answers')
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
                ->cursor();

            foreach ($rows as $r) {
                $genderLabel = $r->gender === 'male' ? 'Laki-laki' : ($r->gender === 'female' ? 'Perempuan' : 'Lainnya');

                // Opsi 1: simpan skor kategori sebagai JSON ringkas
                $catJson = is_array($r->category_scores)
                    ? json_encode($r->category_scores, JSON_UNESCAPED_UNICODE)
                    : (string) $r->category_scores;

                fputcsv($out, [
                    $r->id,
                    $r->name,
                    $r->age,
                    $genderLabel,
                    (int) ($r->total_score ?? 0),
                    (int) ($r->answers_count ?? 0),
                    optional($r->created_at)->format('Y-m-d H:i:s'),
                    $catJson,
                ]);

                /* 
                // Opsi 2: kolom terpisah—gunakan ini kalau mau 4 kolom kategori
                $cat = is_array($r->category_scores) ? $r->category_scores : [];
                $emotional    = (int) ($cat['emotional']    ?? 0);
                $stress       = (int) ($cat['stress']       ?? 0);
                $social       = (int) ($cat['social']       ?? 0);
                $selfControl  = (int) ($cat['self_control'] ?? 0);

                fputcsv($out, [
                    $r->id,
                    $r->name,
                    $r->age,
                    $genderLabel,
                    (int) ($r->total_score ?? 0),
                    (int) ($r->answers_count ?? 0),
                    optional($r->created_at)->format('Y-m-d H:i:s'),
                    $emotional, $stress, $social, $selfControl,
                ]);
                */
            }

            fclose($out);
        };

        return response()->stream($callback, 200, $headers);
    }


}
