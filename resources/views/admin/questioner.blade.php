@extends('layouts.main')

@section('content')
<section class="dashboard">
  <div class="top">
    <i class="uil uil-bars sidebar-toggle"></i>

    <div class="search-box d-none d-md-flex">
      <i class="uil uil-search"></i>
      <input type="text" placeholder="Search here..." oninput="filterQuestions(this.value)">
    </div>

    <img src="/images/uinsu.jpg" alt="">
  </div>

  <div class="dash-content">
    <div class="activity">
      <div class="title">
        <i class="uil uil-book-open"></i>
        <span class="text">Data Pertanyaan Kuesioner</span>
      </div>

      @if (session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
      @endif
      @if ($errors->any())
        <div class="alert alert-danger mt-2">
          <ul class="mb-0">
            @foreach ($errors->all() as $err)
              <li>{{ $err }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="mb-3">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
          <i class="uil uil-plus"></i> Tambah Pertanyaan
        </button>
      </div>

      <div class="table-responsive">
        <table class="table table-hover align-middle" id="questionsTable">
          <thead class="table-light">
            <tr>
              <th style="width: 80px;">No.</th>
              <th>Pertanyaan</th>
              <th style="width: 180px;">Kategori</th>
              <th style="width: 120px;">Status</th>
              <th style="width: 200px;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($questions as $q)
              <tr>
                <td class="fw-bold">{{ $q->number }}</td>
                <td>{{ $q->text }}</td>
                <td>
                  @php
                    $labels = [
                      'emotional' => 'Kesejahteraan Emosional',
                      'stress' => 'Stres & Kecemasan',
                      'social' => 'Hubungan Sosial',
                      'self_control' => 'Pengendalian Diri'
                    ];
                    $badge = [
                      'emotional' => 'primary',
                      'stress' => 'warning',
                      'social' => 'info',
                      'self_control' => 'success'
                    ];
                  @endphp
                  <span class="badge bg-{{ $badge[$q->category] ?? 'secondary' }}">
                    {{ $labels[$q->category] ?? ucfirst($q->category) }}
                  </span>
                </td>
                <td>
                  @if($q->is_active)
                    <span class="badge bg-success">Aktif</span>
                  @else
                    <span class="badge bg-secondary">Nonaktif</span>
                  @endif
                </td>
                <td>
                  <div class="d-flex gap-2">
                    <button class="btn btn-sm btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#modalEdit{{ $q->id }}">
                      <i class="uil uil-edit"></i> Edit
                    </button>
                    <form action="{{ route('admin.questioner.destroy', $q->id) }}" method="POST"
                          onsubmit="return confirm('Yakin hapus pertanyaan ini?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">
                        <i class="uil uil-trash-alt"></i> Hapus
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="text-center text-muted py-4">Belum ada pertanyaan.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

    </div>
  </div>
</section>

{{-- Modal Tambah Pertanyaan --}}
<div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{ route('admin.questioner.store') }}" method="POST">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Pertanyaan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Nomor</label>
            <input type="number" name="number" class="form-control" min="1" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Teks Pertanyaan</label>
            <textarea name="text" class="form-control" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="category" class="form-select" required>
              <option value="" disabled selected>-- Pilih Kategori --</option>
              <option value="emotional">Kesejahteraan Emosional (A)</option>
              <option value="stress">Stres & Kecemasan (B)</option>
              <option value="social">Hubungan Sosial (C)</option>
              <option value="self_control">Pengendalian Diri (D)</option>
            </select>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="is_active_add" name="is_active" checked>
            <label class="form-check-label" for="is_active_add">
              Aktifkan pertanyaan ini
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </div>
    </form>
  </div>
</div>

{{-- Modal Edit (per item) --}}
@foreach ($questions as $q)
<div class="modal fade" id="modalEdit{{ $q->id }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{ route('admin.questioner.update', $q->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Pertanyaan #{{ $q->number }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Nomor</label>
            <input type="number" name="number" class="form-control" min="1" value="{{ $q->number }}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Teks Pertanyaan</label>
            <textarea name="text" class="form-control" rows="3" required>{{ $q->text }}</textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="category" class="form-select" required>
              <option value="emotional" {{ $q->category==='emotional' ? 'selected':'' }}>Kesejahteraan Emosional (A)</option>
              <option value="stress" {{ $q->category==='stress' ? 'selected':'' }}>Stres & Kecemasan (B)</option>
              <option value="social" {{ $q->category==='social' ? 'selected':'' }}>Hubungan Sosial (C)</option>
              <option value="self_control" {{ $q->category==='self_control' ? 'selected':'' }}>Pengendalian Diri (D)</option>
            </select>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="is_active_{{ $q->id }}" name="is_active" {{ $q->is_active ? 'checked':'' }}>
            <label class="form-check-label" for="is_active_{{ $q->id }}">
              Aktifkan pertanyaan ini
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary">Update</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endforeach

{{-- Optional: mini filter JS untuk search box di header --}}
<script>
  function filterQuestions(q='') {
    const rows = document.querySelectorAll('#questionsTable tbody tr');
    const term = q.toLowerCase();
    rows.forEach(tr => {
      const text = tr.innerText.toLowerCase();
      tr.style.display = text.includes(term) ? '' : 'none';
    });
  }
</script>
@endsection
