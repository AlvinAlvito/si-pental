<?php

namespace App\Http\Controllers;

use App\Models\Response;
use App\Models\ResponseAnswer;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // =========================================================
        // 1) Distribusi Kategori Hasil (Rendah/Sedang/Baik)
        //    Threshold dinamis per responden (berdasarkan jumlah soal yg dia jawab)
        // =========================================================
        $dist = ['Rendah' => 0, 'Sedang' => 0, 'Baik' => 0];

        $responses = Response::withCount('answers')
            ->select('id','total_score','created_at')
            ->get();

        foreach ($responses as $r) {
            $n = (int) $r->answers_count;
            if ($n <= 0) continue;
            $min = 1 * $n;
            $max = 5 * $n;
            $range = $max - $min;
            $lowMax    = (int) floor($min + 0.40 * $range);
            $mediumMax = (int) floor($min + 0.60 * $range);

            if ($r->total_score <= $lowMax)      $dist['Rendah']++;
            elseif ($r->total_score <= $mediumMax) $dist['Sedang']++;
            else                                   $dist['Baik']++;
        }
        $chart1 = [
            'labels' => array_keys($dist),
            'series' => array_values($dist),
        ];

        // =========================================================
        // 2) Rata-rata Skor per Kategori (pakai ResponseAnswer biar akurat)
        //    keluarannya skala 1–5
        // =========================================================
        $avgPerCat = ResponseAnswer::select('category', DB::raw('AVG(score) as avg_score'))
            ->groupBy('category')
            ->pluck('avg_score','category')
            ->toArray();

        $catLabelsMap = [
            'emotional'    => 'Kesejahteraan Emosional',
            'stress'       => 'Stres & Kecemasan',
            'social'       => 'Hubungan Sosial',
            'self_control' => 'Pengendalian Diri & Perilaku',
        ];
        $catOrder = ['emotional','stress','social','self_control'];

        $chart2 = [
            'categories' => array_map(fn($c) => $catLabelsMap[$c], $catOrder),
            'series'     => [ round($avgPerCat['emotional'] ?? 0, 2),
                              round($avgPerCat['stress'] ?? 0, 2),
                              round($avgPerCat['social'] ?? 0, 2),
                              round($avgPerCat['self_control'] ?? 0, 2) ],
        ];

        // =========================================================
        // 3) Distribusi Usia (bucket)
        // =========================================================
        $ageBuckets = [
            '<18'   => 0,
            '18–24' => 0,
            '25–30' => 0,
            '31–40' => 0,
            '>40'   => 0,
        ];
        $ages = Response::select('age')->whereNotNull('age')->get();
        foreach ($ages as $a) {
            $age = (int) $a->age;
            if ($age < 18)           $ageBuckets['<18']++;
            elseif ($age <= 24)      $ageBuckets['18–24']++;
            elseif ($age <= 30)      $ageBuckets['25–30']++;
            elseif ($age <= 40)      $ageBuckets['31–40']++;
            else                     $ageBuckets['>40']++;
        }
        $chart3 = [
            'categories' => array_keys($ageBuckets),
            'series'     => array_values($ageBuckets),
        ];

        // =========================================================
        // 4) Perbandingan Gender
        // =========================================================
        $genderCounts = Response::select('gender', DB::raw('COUNT(*) as total'))
            ->groupBy('gender')
            ->pluck('total','gender')
            ->toArray();

        $genderLabelsMap = ['male'=>'Laki-laki','female'=>'Perempuan','other'=>'Lainnya', null=>'—'];
        $genderLabels = [];
        $genderSeries = [];
        foreach (['male','female','other'] as $g) {
            $genderLabels[] = $genderLabelsMap[$g];
            $genderSeries[] = (int) ($genderCounts[$g] ?? 0);
        }
        $chart4 = [
            'labels' => $genderLabels,
            'series' => $genderSeries,
        ];

        // =========================================================
        // 5) Tren Responden per Bulan (6 bulan terakhir)
        // =========================================================
        $start = Carbon::now()->startOfMonth()->subMonths(5); // termasuk bulan ini
        $end   = Carbon::now()->endOfMonth();

        $byMonth = Response::selectRaw("DATE_FORMAT(created_at, '%Y-%m') as ym, COUNT(*) as total")
            ->whereBetween('created_at', [$start, $end])
            ->groupBy('ym')
            ->orderBy('ym')
            ->pluck('total','ym')
            ->toArray();

        // normalisasi 6 label bulan berurutan
        $months = [];
        $counts = [];
        $cursor = $start->copy();
        for ($i=0; $i<6; $i++) {
            $key = $cursor->format('Y-m');
            $months[] = $cursor->isoFormat('MMM YYYY'); // eks: "Jan 2025"
            $counts[] = (int) ($byMonth[$key] ?? 0);
            $cursor->addMonth();
        }
        $chart5 = [
            'categories' => $months,
            'series'     => $counts,
        ];

        // =========================================================
        // 6) Radar Chart (pakai rata-rata per kategori yg sama dgn chart2)
        // =========================================================
        $chart6 = [
            'categories' => $chart2['categories'],
            'series'     => $chart2['series'], // skala 1–5
        ];

        // (Opsional) total ringkas
        $summary = [
            'total_responder' => $responses->count(),
            'latest_at'       => optional(Response::latest('created_at')->first())->created_at,
        ];

        return view('admin.index', compact(
            'chart1', // Donut: Distribusi hasil (Rendah/Sedang/Baik)
            'chart2', // Bar: Rata-rata skor per kategori (1–5)
            'chart3', // Column: Distribusi usia
            'chart4', // Donut: Gender
            'chart5', // Line: Tren per bulan (6 bulan)
            'chart6', // Radar: Profil kategori (1–5)
            'summary'
        ));
    }
}
