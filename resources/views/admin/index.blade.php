@extends('layouts.main')

@section('content')
<section class="dashboard">
  <div class="top">
    <i class="uil uil-bars sidebar-toggle"></i>
    <div class="search-box">
      <i class="uil uil-search"></i>
      <input type="text" placeholder="Search here...">
    </div>
    <img src="/images/profil.png" alt="">
  </div>

  <div class="dash-content">
    <div class="overview">
      <div class="title">
        <i class="uil uil-chart-line"></i>
        <span class="text">Dashboard Kesehatan Mental (Si Pental)</span>
      </div>
    </div>

    {{-- Boxes ringkas --}}
    <div class="boxes">
      <div class="box box1">
        <i class="uil uil-user"></i>
        <span class="text">Total Responder</span>
        <span class="number">{{ $summary['total_responder'] ?? 0 }}</span>
      </div>
      <div class="box box2">
        <i class="uil uil-schedule"></i>
        <span class="text">Periode Ditampilkan</span>
        <span class="number">6 Bulan</span>
      </div>
      <div class="box box3">
        <i class="uil uil-time"></i>
        <span class="text">Terakhir Diisi</span>
        <span class="number">
          {{ optional($summary['latest_at'] ?? null)->format('d M Y, H:i') ?? '—' }}
        </span>
      </div>
    </div>

    <div class="activity">
      <div class="title mb-3">
        <i class="uil uil-chart-bar"></i>
        <span class="text">Analitik Responder</span>
      </div>

      <div class="row">
        {{-- Chart 1: Donut Distribusi Hasil (Rendah/Sedang/Baik) --}}
        <div class="col-md-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h6 class="mb-3">Distribusi Kategori Hasil</h6>
              <div id="chart1"></div>
            </div>
          </div>
        </div>

        {{-- Chart 2: Bar Rata-rata Skor per Kategori (1–5) --}}
        <div class="col-md-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h6 class="mb-3">Rata-rata Skor per Kategori</h6>
              <div id="chart2"></div>
            </div>
          </div>
        </div>

        {{-- Chart 3: Column Distribusi Usia --}}
        <div class="col-md-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h6 class="mb-3">Distribusi Usia Responder</h6>
              <div id="chart3"></div>
            </div>
          </div>
        </div>

        {{-- Chart 4: Donut Gender --}}
        <div class="col-md-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h6 class="mb-3">Perbandingan Gender</h6>
              <div id="chart4"></div>
            </div>
          </div>
        </div>

        {{-- Chart 5: Line Tren Responder per Bulan (6 bulan) --}}
        <div class="col-md-12 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h6 class="mb-3">Tren Responden per Bulan (6 Bulan Terakhir)</h6>
              <div id="chart5"></div>
            </div>
          </div>
        </div>

        {{-- Chart 6: Radar Profil Kategori (1–5) --}}
        <div class="col-md-12 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h6 class="mb-3">Profil Kategori (Radar)</h6>
              <div id="chart6"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ApexCharts CDN --}}
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
  // Helper: jika data kosong, isi nol biar chart tetap render
  const safeSeries = (arr, len = null, fill = 0) => {
    if (!Array.isArray(arr)) return [];
    if (len === null) return arr;
    const out = arr.slice(0, len);
    while (out.length < len) out.push(fill);
    return out;
  };

  // 1) Donut: Distribusi Hasil
  new ApexCharts(document.querySelector("#chart1"), {
    chart: { type: 'donut', height: 320 },
    labels: @json($chart1['labels'] ?? []),
    series: @json($chart1['series'] ?? []),
    legend: { position: 'bottom' },
    dataLabels: { enabled: true },
    tooltip: { y: { formatter: val => `${val} responden` } }
  }).render();

  // 2) Bar: Rata-rata per Kategori (1–5)
  new ApexCharts(document.querySelector("#chart2"), {
    chart: { type: 'bar', height: 320 },
    series: [{
      name: 'Rata-rata',
      data: @json($chart2['series'] ?? [])
    }],
    xaxis: { categories: @json($chart2['categories'] ?? []) },
    yaxis: { min: 0, max: 5, tickAmount: 5 },
    plotOptions: { bar: { columnWidth: '45%' } },
    dataLabels: { enabled: true }
  }).render();

  // 3) Column: Distribusi Usia
  new ApexCharts(document.querySelector("#chart3"), {
    chart: { type: 'bar', height: 320 },
    series: [{
      name: 'Jumlah',
      data: @json($chart3['series'] ?? [])
    }],
    xaxis: { categories: @json($chart3['categories'] ?? []) },
    dataLabels: { enabled: true }
  }).render();

  // 4) Donut: Gender
  new ApexCharts(document.querySelector("#chart4"), {
    chart: { type: 'donut', height: 320 },
    labels: @json($chart4['labels'] ?? []),
    series: @json($chart4['series'] ?? []),
    legend: { position: 'bottom' },
    dataLabels: { enabled: true },
    tooltip: { y: { formatter: val => `${val} responden` } }
  }).render();

  // 5) Line: Tren per Bulan (6 bulan)
  new ApexCharts(document.querySelector("#chart5"), {
    chart: { type: 'line', height: 340, toolbar: { show: false } },
    series: [{
      name: 'Responder',
      data: @json($chart5['series'] ?? [])
    }],
    xaxis: { categories: @json($chart5['categories'] ?? []) },
    stroke: { curve: 'smooth', width: 3 },
    markers: { size: 4 },
    dataLabels: { enabled: true }
  }).render();

  // 6) Radar: Profil Kategori (1–5)
  new ApexCharts(document.querySelector("#chart6"), {
    chart: { type: 'radar', height: 360, toolbar: { show: false } },
    series: [{
      name: 'Rata-rata',
      data: @json($chart6['series'] ?? [])
    }],
    xaxis: { categories: @json($chart6['categories'] ?? []) },
    yaxis: { min: 0, max: 5, tickAmount: 5 },
    dataLabels: { enabled: true },
    stroke: { width: 2 },
    fill: { opacity: 0.2 }
  }).render();
</script>
@endsection
