@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            {{-- (Opsional) Search header akan tetap jalan, tapi DataTables sudah punya search sendiri --}}
            <div class="search-box d-none d-md-flex">
                <i class="uil uil-search"></i>
                <input type="text" id="dt-global-search" placeholder="Search Here..">
            </div>

            <img src="/images/profil.png" alt="">
        </div>

        <div class="dash-content">
            <div class="activity">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="title">
                        <i class="uil uil-book-open"></i>
                        <span class="text fs-5">Data Responder</span>
                    </div>
                </div>
                <div class="d-flex gap-2">
                    {{-- Jika pakai search q, ikutkan di link agar hasil PDF terfilter sama --}}
                    <a href="{{ route('responder.export.pdf', ['q' => $q]) }}" class="btn btn-outline-primary">
                        <i class="bi bi-file-pdf"></i> Download PDF
                    </a>
                </div>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive">
                    <table id="responderTable" class="table table-bordered table-striped align-middle display nowrap"
                        style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Usia</th>
                                <th>Gender</th>
                                <th>Skor Total</th>
                                <th>Jumlah Jawaban</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                // Jika controller masih paginate(), pakai $responses->items() untuk ambil item halaman ini
                                $rows = method_exists($responses, 'items') ? $responses->items() : $responses;
                                $startNo = method_exists($responses, 'firstItem') ? $responses->firstItem() ?? 1 : 1;
                            @endphp

                            @forelse ($rows as $i => $r)
                                @php
                                    $genderLabel = match ($r->gender) {
                                        'male' => 'Laki-laki',
                                        'female' => 'Perempuan',
                                        default => 'Lainnya',
                                    };
                                    $rowNo = $startNo + $i;
                                @endphp
                                <tr>
                                    <td>{{ $rowNo }}</td>
                                    <td class="fw-semibold">
                                        <a href="{{ route('questioner.result', $r->id) }}" class="text-decoration-none">
                                            {{ $r->name }}
                                        </a>
                                    </td>
                                    <td>{{ $r->age }}</td>
                                    <td>{{ $genderLabel }}</td>
                                    <td>{{ $r->total_score ?? 0 }}</td>
                                    <td><span
                                            class="badge bg-primary">{{ $r->answers_count ?? ($r->answers_count ?? 0) }}</span>
                                    </td>
                                    <td>{{ optional($r->created_at)->format('d M Y, H:i') }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a class="btn btn-sm btn-outline-secondary"
                                                href="{{ route('questioner.result', $r->id) }}" title="Lihat detail">
                                                <i class="bi bi-box-arrow-up-right"></i> Lihat
                                            </a>
                                            <form action="{{ route('responder.destroy', $r->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus responder ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash3"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center text-muted py-4">Belum ada data responder.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>

    {{-- jQuery + DataTables --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <script>
        $(function() {
            const dt = $('#responderTable').DataTable({
                responsive: true,
                pageLength: 10,
                lengthMenu: [5, 10, 25, 50, 100],
                order: [
                    [0, 'asc']
                ],
                columnDefs: [{
                        orderable: false,
                        targets: [7]
                    } // kolom Aksi non-sort
                ],
                language: {
                    lengthMenu: 'Tampilkan _MENU_ data per halaman',
                    zeroRecords: 'Tidak ada data yang ditemukan',
                    info: 'Menampilkan _START_ sampai _END_ dari _TOTAL_ data',
                    infoEmpty: 'Tidak ada data tersedia',
                    infoFiltered: '(difilter dari total _MAX_ data)',
                    search: 'Cari:',
                    paginate: {
                        first: 'Awal',
                        last: 'Akhir',
                        next: 'Selanjutnya',
                        previous: 'Sebelumnya'
                    }
                }
            });

            // Sinkronkan search header (opsional)
            $('#dt-global-search').on('keyup', function() {
                dt.search(this.value).draw();
            });
        });
    </script>
@endsection
