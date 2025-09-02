@extends('layouts.main')

@section('content')
<section class="dashboard">
  <div class="top">
    <i class="uil uil-bars sidebar-toggle"></i>
    <div class="search-box">
      <i class="uil uil-search"></i>
      <input type="text" placeholder="Search here...">
    </div>
    <img src="/images/uinsu.jpg" alt="">
  </div>

  <div class="dash-content">
    <div class="overview">
      <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
        <div class="title d-flex align-items-center gap-2">
          <i class="uil uil-user"></i>
          <span class="text">Detail Responder</span>
        </div>
        <a href="{{ route('responder.index') }}" class="btn btn-sm btn-outline-secondary">
          &larr; Kembali ke daftar responder
        </a>
      </div>
    </div>

    <div class="row mt-3 g-3">
      {{-- Identitas & Ringkasan --}}
      <div class="col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="rounded-circle bg-primary-subtle d-flex align-items-center justify-content-center" style="width:56px;height:56px;">
                <i class="uil uil-user text-primary fs-4"></i>
              </div>
              <div>
                <h5 class="mb-0">{{ $responder->name }}</h5>
                <small class="text-muted">ID: #{{ $responder->id }}</small>
              </div>
            </div>

            <div class="row g-2">
              <div class="col-6">
                <div class="p-2 rounded border bg-light">
                  <div class="small text-muted">Usia</div>
                  <div class="fw-semibold">{{ $responder->age }}</div>
                </div>
              </div>
              <div class="col-6">
                <div class="p-2 rounded border bg-light">
                  <div class="small text-muted">Gender</div>
                  <div class="fw-semibold">{{ $genderLabel }}</div>
                </div>
              </div>
              <div class="col-12">
                <div class="p-2 rounded border bg-light">
                  <div class="small text-muted">Waktu Submit</div>
                  <div class="fw-semibold">{{ optional($responder->created_at)->format('d M Y, H:i') }}</div>
                </div>
              </div>
            </div>

            <hr class="my-3">

            <h6 class="mb-2">Ringkasan Skor</h6>
            <div class="row g-2">
              <div class="col-6">
                <div class="p-2 rounded border">
                  <div class="small text-muted">Total Skor</div>
                  <div class="fw-bold fs-5">{{ $responder->total_score ?? 0 }}</div>
                  <small class="text-muted">Min {{ $min }} • Max {{ $max }}</small>
                </div>
              </div>
              <div class="col-6">
                <div class="p-2 rounded border">
                  <div class="small text-muted">Interpretasi</div>
                  <span class="badge bg-primary">{{ $interpret }}</span>
                </div>
              </div>
              <div class="col-12">
                <div class="p-2 rounded border">
                  <div class="small text-muted">Jumlah Pertanyaan Dijawab</div>
                  <div class="fw-semibold">{{ $n }}</div>
                </div>
              </div>
            </div>

            <div class="d-flex gap-2 mt-3">
              <form action="{{ route('responder.destroy', $responder->id) }}" method="POST"
                    onsubmit="return confirm('Yakin ingin menghapus responder ini?')">
                @csrf
                @method('DELETE')

              </form>
              <a href="{{ route('responder.index') }}" class="btn btn-outline-secondary btn-sm">Kembali</a>
            </div>
          </div>
        </div>
      </div>

      {{-- Chart: Radar + Donut Kategori --}}
      <div class="col-lg-8">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
              <h5 class="card-title mb-0">Profil Kategori</h5>
              <small class="text-muted">Skala rata-rata 1–5</small>
            </div>
            <div class="row mt-3 g-3">
              <div class="col-md-7">
                <div id="radarChart"></div>
              </div>
              <div class="col-md-5">
                <div class="border rounded p-2">
                  <div id="donutChart"></div>
                </div>
              </div>
            </div>

            <div class="row mt-3 g-2">
              @foreach ($catOrder as $cat)
                @php
                  $label = $catLabelsMap[$cat];
                  $countCat = $responder->answers->where('category', $cat)->count();
                  $avg = $countCat ? round($catTotals[$cat] / $countCat, 2) : 0;
                @endphp
                <div class="col-sm-6 col-xl-3">
                  <div class="p-2 rounded border bg-light h-100">
                    <div class="small text-muted mb-1">{{ $label }}</div>
                    <div class="d-flex justify-content-between align-items-end">
                      <div>
                        <div class="small text-muted">Soal</div>
                        <div class="fw-semibold">{{ $countCat }}</div>
                      </div>
                      <div class="text-end">
                        <div class="small text-muted">Total</div>
                        <div class="fw-semibold">{{ $catTotals[$cat] }}</div>
                        <div class="small text-muted">Rata-rata</div>
                        <div class="fw-semibold">{{ $avg }}</div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>

          </div>
        </div>
      </div>

      {{-- Tabel Jawaban --}}
      <div class="col-12">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
              <h5 class="card-title mb-0">Jawaban per Pertanyaan</h5>
              <small class="text-muted">Klik header untuk urutkan • gunakan kotak cari di bawah</small>
            </div>
            <div class="table-responsive">
              <table id="answersTable" class="table table-bordered table-striped align-middle w-100">
                <thead class="table-light">
                  <tr>
                    <th style="width:80px;">No</th>
                    <th>Kategori</th>
                    <th style="width:120px;">Skor</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($responder->answers as $ans)
                    <tr>
                      <td>{{ $ans->question_no }}</td>
                      <td>{{ $catLabelsMap[$ans->category] ?? $ans->category }}</td>
                      <td>{{ $ans->score }}</td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="3" class="text-center text-muted">Tidak ada jawaban.</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- Styles kecil agar chart pas --}}
<style>
  #radarChart, #donutChart { min-height: 300px; }
</style>

{{-- Vendor: ApexCharts & DataTables --}}
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

@php
  $donutLabels = array_map(fn($c) => $catLabelsMap[$c], $catOrder);
  $donutSeries = array_map(fn($c) => (int)($catTotals[$c] ?? 0), $catOrder);
@endphp

<script>
  // Radar Chart (rata-rata per kategori, skala 1–5)
  new ApexCharts(document.querySelector("#radarChart"), {
    chart: { type: 'radar', height: 320, toolbar: { show: false } },
    series: [{ name: 'Rata-rata', data: @json($radarSeries) }],
    xaxis: { categories: @json($radarCategories) },
    yaxis: { min: 0, max: 5, tickAmount: 5 },
    dataLabels: { enabled: true },
    stroke: { width: 2 },
    fill: { opacity: 0.2 },
    markers: { size: 3 }
  }).render();

  // Donut Chart (kontribusi total skor per kategori)
  new ApexCharts(document.querySelector("#donutChart"), {
    chart: { type: 'donut', height: 300, toolbar: { show: false } },
    labels: @json($donutLabels),
    series: @json($donutSeries),
    legend: { position: 'bottom' },
    dataLabels: { enabled: true },
    tooltip: { y: { formatter: v => `${v} poin` } }
  }).render();

  // DataTables untuk tabel jawaban
  $(function () {
    $('#answersTable').DataTable({
      paging: true,
      searching: true,
      ordering: true,
      info: true,
      pageLength: 10,
      lengthMenu: [5, 10, 25, 50, 100],
      language: {
        lengthMenu: "Tampilkan _MENU_ data",
        zeroRecords: "Tidak ada data",
        info: "Menampilkan _START_–_END_ dari _TOTAL_ data",
        infoEmpty: "Tidak ada data tersedia",
        search: "Cari:",
        paginate: { first: "Awal", last: "Akhir", next: "Berikutnya", previous: "Sebelumnya" }
      },
      columnDefs: [
        { targets: [0,2], className: 'text-center' }
      ]
    });
  });
</script>
@endsection
