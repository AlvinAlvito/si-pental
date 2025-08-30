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

        // Ambil semua data (tanpa paginate) sesuai filter pencarian
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
