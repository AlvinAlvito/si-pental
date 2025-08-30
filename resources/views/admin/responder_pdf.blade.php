<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Laporan Data Responder</title>
  <style>
    * { font-family: DejaVu Sans, Arial, sans-serif; }
    body { font-size: 12px; color: #222; }
    h2 { margin: 0 0 8px 0; }
    .meta { margin-bottom: 12px; }
    table { width: 100%; border-collapse: collapse; }
    th, td { border: 1px solid #888; padding: 6px 8px; vertical-align: top; }
    thead th { background: #f0f0f0; }
    .text-center { text-align: center; }
    .text-right { text-align: right; }
    .small { font-size: 11px; color: #666; }
  </style>
</head>
<body>
  <h2>Laporan Data Responder</h2>
  <div class="meta">
    <div class="small">Dibuat: {{ $generated }}</div>
    @if($q)
      <div class="small">Filter: "{{ $q }}"</div>
    @endif
  </div>

  <table>
    <thead>
      <tr>
        <th style="width:40px;">No</th>
        <th>Nama</th>
        <th style="width:55px;">Usia</th>
        <th style="width:85px;">Gender</th>
        <th style="width:80px;">Skor</th>
        <th style="width:90px;">Jawaban</th>
        <th style="width:120px;">Tanggal</th>
      </tr>
    </thead>
    <tbody>
      @php
        $genderText = function($g) {
          return $g === 'male' ? 'Laki-laki' : ($g === 'female' ? 'Perempuan' : 'Lainnya');
        };
      @endphp
      @forelse ($responses as $i => $r)
        <tr>
          <td class="text-center">{{ $i + 1 }}</td>
          <td>{{ $r->name }}</td>
          <td class="text-center">{{ $r->age }}</td>
          <td>{{ $genderText($r->gender) }}</td>
          <td class="text-center">{{ $r->total_score ?? 0 }}</td>
          <td class="text-center">{{ $r->answers_count ?? 0 }}</td>
          <td>{{ optional($r->created_at)->format('d M Y, H:i') }}</td>
        </tr>
      @empty
        <tr>
          <td colspan="7" class="text-center small">Tidak ada data.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</body>
</html>
