<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>SI-PENTAL</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-5.0.0-beta2.min.css" />
    <link rel="stylesheet" href="/assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="/assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/lindy-uikit.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />




</head>

<body>

    <button class="chatbot-toggler">
        <span class="material-symbols-rounded">mode_comment</span>
        <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot">
        <header>
            <h2>SI PENTAL</h2>
            <span class="close-btn material-symbols-outlined">close</span>
        </header>
        <ul class="chatbox">
        </ul>
        <div class="chat-input">
            <textarea placeholder="Ketik pesan anda disini..." spellcheck="false" required></textarea>
            <span id="send-btn" class="material-symbols-rounded">send</span>
        </div>
    </div>

    <nav id="nav" class="shadow-sm">
        <div class="logo">
            <img src="/assets/img/logo.png" alt="">
        </div>
        <ul class="top-nav">
            <li>
                <a href="#">Beranda</a>
            </li>
            <li>
                <a href="#informasi">Informasi</a>
            </li>

            <li>
                <a href="#ruang">Ruang Curhat</a>
            </li>
            <li>
                <a href="#cek">Cek Kesehatan Mental</a>
            </li>
            <li>
                <a href="#konseling">Ruang Konseling</a>
            </li>
            <li>
                <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
            </li>
        </ul>

        <div class="profile">


            <img class="rounded-circle" src="/assets/img/account.png" alt="" style="width: 35px; height: 35px;">

        </div>

    </nav>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="/" class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Login Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    @if ($errors->has('login'))
                        <div class="alert alert-danger">{{ $errors->first('login') }}</div>
                    @endif
                    <div class="mb-3">
                        <label>Username:</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>

    <div class="navbar bottom-nav">
        <ul>
            <li>
                <a href="javascript:void(0)" onclick="window.location.href='/'">
                    <i class='bi bi-grid icon'></i>
                    <i class='bi bi-grid-fill activeIcon'></i>
                </a>
            </li>

            <li>
                <a href="javascript:void(0)" onclick="window.location.href='/'">
                    <i class='bi bi-layers icon'></i>
                    <i class='bi bi-layers-fill activeIcon'></i>
                </a>
            </li>

            <li>
                <a href="javascript:void(0)">
                    <img class="icon-home" src="/assets/img/icon-home2.png" alt="">
                </a>
            </li>

            <li>
                <a href="javascript:void(0)" onclick="window.location.href='/'">
                    <i class='bi bi-chat-square-text icon'></i>
                    <i class='bi bi-chat-square-text-fill activeIcon'></i>
                </a>
            </li>

            <li>
                <a href="javascript:void(0)" onclick="window.location.href='/'">
                    <i class='bi bi-person icon'></i>
                    <i class='bi bi-person-fill activeIcon'></i>
                </a>
            </li>



        </ul>
    </div>

    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content animate__animated animate__fadeInLeft wow" data-wow-duration="2s">
                        <span class="fs-5 text-dark"> Cek Kesehatan Mental Kamu</span>
                        <div class="image-container">
                            <img id="myuinsu" src="/assets/img/logo2.png" alt="Logo Si Pental">
                        </div>

                        <p>
                            <b>Si Pental</b> (Sistem Informasi Pendampingan Kesehatan Mental) adalah platform edukasi
                            dan layanan konseling online yang membantu pengguna memahami, menjaga,
                            dan meningkatkan kesehatan mental melalui informasi, tips, ruang curhat,
                            cek kondisi mental, hingga konsultasi dengan konselor.
                        </p>


                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-img animate__animated animate__fadeInRight wow" data-wow-duration="1.5s">
                        <div class="hero-figure-box hero-figure-box-09"></div>
                        <div class="hero-figure-box hero-figure-box-07"></div>
                        <div class="hero-figure-box hero-figure-box-08 " data-wow-delay=".5s" data-rotation="-22deg"
                            style="transform: rotate(-22deg) scale(1); opacity: 1;"></div>
                        <img src="/assets/img/vector/11.png" alt="" class="wave-animation-2">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="kuesioner" class="about-section pt-10 pb-10 mb-4">
        <div id="cek" class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1 class="mb-25 mt-5">Cek Kesehatan Mental Kamu</h1>
                    <p class="mb-40 h5 text-secondary">Jawab pertanyaan berikut sesuai kondisi kamu akhir-akhir ini.
                    </p>
                </div>

                @if ($errors->any())
                    <div class="col-12">
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <div class="col-xl-12 col-lg-12">
                    <form method="POST" action="{{ route('questioner.store') }}">
                        @csrf

                        {{-- Identitas Pengisi --}}
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Identitas</h5>
                                <div class="row g-3">
                                    <div class="col-12 col-md-4">
                                        <label class="form-label">Nama</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name') }}" required maxlength="100">
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <label class="form-label">Usia</label>
                                        <input type="number" name="age" class="form-control"
                                            value="{{ old('age') }}" min="10" max="100" required>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <select name="gender" class="form-select" required>
                                            <option value="" disabled {{ old('gender') ? '' : 'selected' }}>--
                                                Pilih --</option>
                                            <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>
                                                Laki-laki
                                            </option>
                                            <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>
                                                Perempuan</option>
                                            <option value="other" {{ old('gender') === 'other' ? 'selected' : '' }}>
                                                Lainnya
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Grid pertanyaan (1 kolom di mobile, 2 kolom di desktop) --}}
                        {{-- Grid pertanyaan (kelompok kategori, 1 kolom di mobile, 2 kolom di desktop) --}}
                        @php
                            $classes = ['angry', 'sad', 'ok', 'good', 'happy'];

                            // Urutan & label kategori
                            $catOrder = ['emotional', 'stress', 'social', 'self_control'];
                            $catLabels = [
                                'emotional' => 'Kesejahteraan Emosional',
                                'stress' => 'Stres dan Kecemasan',
                                'social' => 'Hubungan Sosial',
                                'self_control' => 'Pengendalian Diri & Perilaku',
                            ];
                            $catLetters = [
                                'emotional' => 'A',
                                'stress' => 'B',
                                'social' => 'C',
                                'self_control' => 'D',
                            ];
                        @endphp

                        @if ($questions->isEmpty())
                            <div class="alert alert-warning">
                                Pertanyaan belum tersedia. Silakan coba lagi nanti.
                            </div>
                        @else
                            @foreach ($catOrder as $cat)
                                @php $group = $questions->where('category', $cat)->sortBy('number'); @endphp
                                @if ($group->isNotEmpty())
                                    <div class="mt-4">
                                        <h5 class="mb-3">
                                            <span class="me-2 fw-bold">{{ $catLetters[$cat] }}.</span>
                                            {{ $catLabels[$cat] }}
                                        </h5>
                                    </div>

                                    <div class="row g-4">
                                        @foreach ($group as $q)
                                            <div class="col-12 col-md-6">
                                                <div class="question">
                                                    <p class="h6 my-2">{{ $q->number }}. {{ $q->text }}</p>
                                                    <div class="feedback">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @php $cls = $classes[$i-1]; @endphp
                                                            <label class="{{ $cls }}">
                                                                <input name="answers[{{ $q->number }}]"
                                                                    value="{{ $i }}" type="radio"
                                                                    {{ old("answers.{$q->number}") == $i ? 'checked' : '' }}
                                                                    required />
                                                                <div>
                                                                    @if (in_array($cls, ['angry', 'sad', 'good', 'happy']))
                                                                        <svg class="eye left"></svg>
                                                                        <svg class="eye right"></svg>
                                                                    @endif
                                                                    @if (in_array($cls, ['angry', 'sad', 'good']))
                                                                        <svg class="mouth"></svg>
                                                                    @endif
                                                                </div>
                                                            </label>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach

                            <div class="d-flex gap-2 flex-wrap">
                                <button type="submit" class="button mt-20 radius-10">
                                    Kirim Jawaban <i class="lni lni-angle-double-right"></i>
                                </button>
                            </div>
                        @endif


                        {{-- SVG defs (ikon emotikon) --}}
                        <svg style="display:none;" xmlns="http://www.w3.org/2000/svg">
                            <symbol id="eye" viewBox="0 0 7 4">
                                <path
                                    d="M1,1 C1.83333333,2.16666667 2.66666667,2.75 3.5,2.75 C4.33333333,2.75 5.16666667,2.16666667 6,1">
                                </path>
                            </symbol>
                            <symbol id="mouth" viewBox="0 0 18 7">
                                <path d="M1,5.5 C3.66666667,2.5 6.33333333,1 9,1 C11.6666667,1 14.3333333,2.5 17,5.5">
                                </path>
                            </symbol>
                        </svg>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @if (session('result'))
        @php $r = session('result'); @endphp

        <!-- Modal Hasil -->
        <div class="modal fade" id="resultModal" tabindex="-1" aria-labelledby="resultLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header">
                        <h5 class="modal-title" id="resultLabel">Hasil Cek Kesehatan Mental</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Tutup" onclick="window.location.href='/questioner'"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-2">
                            <div class="small text-muted">Nama</div>
                            <div class="fw-semibold">{{ $r['name'] }} &middot; {{ $r['age'] }} th &middot;
                                @switch($r['gender'])
                                    @case('male')
                                        Laki-laki
                                    @break

                                    @case('female')
                                        Perempuan
                                    @break

                                    @default
                                        Lainnya
                                @endswitch
                            </div>
                        </div>

                        <div class="card border-0 mb-3">
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="small text-muted">Skor Total</div>
                                        <div class="h5 mb-0">{{ $r['total'] }} <span class="text-muted">/
                                                {{ $r['max'] }}</span></div>
                                    </div>
                                    <span
                                        class="badge
                  @if ($r['interpret'] === 'Kesehatan mental baik') bg-success
                  @elseif($r['interpret'] === 'Kesehatan mental sedang') bg-warning text-dark
                  @else bg-danger @endif">
                                        {{ $r['interpret'] }}
                                    </span>
                                </div>
                                @php
                                    $percent = $r['max'] > 0 ? round(($r['total'] / $r['max']) * 100) : 0;
                                @endphp
                                <div class="progress mt-3" role="progressbar" aria-valuenow="{{ $percent }}"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: {{ $percent }}%">
                                        {{ $percent }}%</div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-2 small text-muted">Rincian Skor per Kategori</div>
                        <div class="table-responsive">
                            <table class="table table-sm align-middle">
                                <thead>
                                    <tr>
                                        <th>Kategori</th>
                                        <th class="text-end">Skor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $labels = [
                                            'emotional' => 'Kesejahteraan Emosional',
                                            'stress' => 'Stres & Kecemasan',
                                            'social' => 'Hubungan Sosial',
                                            'self_control' => 'Pengendalian Diri & Perilaku',
                                        ];
                                    @endphp
                                    @foreach ($r['category_scores'] as $k => $v)
                                        <tr>
                                            <td>{{ $labels[$k] ?? ucfirst($k) }}</td>
                                            <td class="text-end">{{ $v }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <p class="text-muted small mb-0">
                            Hasil ini bersifat skrining awal, bukan diagnosis medis. Jika merasa perlu, pertimbangkan
                            untuk berkonsultasi dengan profesional.
                        </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <a href="#konseling" class="btn btn-outline-primary">Hubungi Konselor</a>
                        {{-- Jika ingin halaman detail di masa depan, bisa gunakan route result --}}
                        {{-- <a href="{{ route('questioner.result', $r['id']) }}" class="btn btn-light">Detail</a> --}}
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="window.location.href='/questioner'">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Auto-open modal setelah submit --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var el = document.getElementById('resultModal');
                if (!el) return;
                try {
                    var modal = new bootstrap.Modal(el);
                    modal.show();
                } catch (e) {
                    // fallback jika namespace bootstrap berbeda
                    if (window.bootstrap && window.bootstrap.Modal) {
                        var modal2 = new window.bootstrap.Modal(el);
                        modal2.show();
                    }
                }
            });
        </script>
    @endif

    <footer class="footer">
        <div class="container">
            <div class="widget-wrapper">
                <div class="row">

                    <!-- Logo & Deskripsi -->
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget">
                            <div class="logo mb-35">
                                <a href="index.html">
                                    <img src="/assets/img/logo2.png" width="200px" alt="Logo Si Pental">
                                </a>
                            </div>
                            <p class="desc mb-35">
                                <b>Si Pental</b> (Sistem Informasi Pendampingan Kesehatan Mental) adalah platform yang
                                menyediakan
                                informasi, tips, ruang curhat (chat bot), cek kesehatan mental, hingga akses konseling
                                online.
                                Tujuannya untuk mendukung mahasiswa dan masyarakat dalam menjaga kesehatan mental.
                            </p>
                            <ul class="socials">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Navigasi Cepat -->
                    <div class="col-xl-2 offset-xl-1 col-md-5 offset-md-1 col-sm-6">
                        <div class="footer-widget">
                            <h3>Menu</h3>
                            <ul class="links">
                                <li><a href="#hero">Beranda</a></li>
                                <li><a href="#content-2">Informasi</a></li>
                                <li><a href="#penyebab">Penyebab</a></li>
                                <li><a href="#tanda">Tanda-Tanda</a></li>
                                <li><a href="#tips">Tips & Trik</a></li>
                                <li><a href="#tentang">Ruang Curhat</a></li>
                                <li><a href="#kuesioner">Cek Kesehatan Mental</a></li>
                                <li><a href="#konseling">Ruang Konseling</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Fitur Utama -->
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3>Fitur Utama</h3>
                            <ul class="links">
                                <li><a href="#content-2">Informasi Kesehatan Mental</a></li>
                                <li><a href="#penyebab">Penyebab Gangguan Mental</a></li>
                                <li><a href="#tanda">Tanda-Tanda Gangguan</a></li>
                                <li><a href="#tips">Tips Menjaga Mental</a></li>
                                <li><a href="#tentang">Ruang Curhat (Chat Bot)</a></li>
                                <li><a href="#kuesioner">Cek Kesehatan Mental</a></li>
                                <li><a href="#konseling">Konseling Online</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Galeri Mini -->
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Galeri</h3>
                            <div class="d-flex flex-wrap gap-2">
                                <img src="https://uinsu.ac.id/wp-content/uploads/2024/02/uin.png" alt="Galeri 1"
                                    style="width:200px; height:auto; object-fit:contain;">
                                <img src="https://uinsu.ac.id/wp-content/uploads/2024/05/Gambar-WhatsApp-2024-05-02-pukul-15.53.09_3a0cc0eb.jpg"
                                    alt="Galeri 2" style="width:200px; height:auto; object-fit:cover;">
                                <img src="https://uinsu.ac.id/wp-content/uploads/2024/02/2-11.jpg" alt="Galeri 3"
                                    style="width:200px; height:auto; object-fit:cover;">
                                <img src="https://tracerstudy.uinsu.ac.id/img/logo.png" alt="Galeri 4"
                                    style="width:200px; height:auto; object-fit:contain;">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Flag Counter lama -->
            <a href="https://info.flagcounter.com/a6uQ"><img
                    src="https://s01.flagcounter.com/count2/a6uQ/bg_FFFFFF/txt_000000/border_FFFFFF/columns_2/maxflags_10/viewers_Pengunjung/labels_0/pageviews_0/flags_0/percent_0/"
                    alt="Flag Counter" border="0"></a>

            <div class="copy-right">
                <p>Copyright © 2025 <a href="#">Si Pental</a> | Sistem Informasi Pendampingan Kesehatan Mental
                </p>
            </div>
        </div>
    </footer>



    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- Ganti semua JS bootstrap lama -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <script src="/assets/js/count-up.min.js"></script>
    <script src="/assets/js/glightbox.min.js"></script>
    <script src="/assets/js/tiny-slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="/assets/js/chatbot.js"></script>
    <script src="/assets/js/card.js"></script>
    <script src="/assets/js/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.modal').forEach(function(m) {
                // kalau modal bukan child langsung body, pindahkan
                if (m.parentElement !== document.body) document.body.appendChild(m);
            });
        });
    </script>
    <script>
        document.addEventListener('click', function(e) {
            const trigger = e.target.closest('[data-bs-toggle="modal"]');
            if (!trigger) return;
            const sel = trigger.getAttribute('data-bs-target');
            const el = sel && document.querySelector(sel);
            if (!el) return;
            const modal = bootstrap.Modal.getOrCreateInstance(el);
            modal.show();
        }, true);
    </script>


</body>

</html>
