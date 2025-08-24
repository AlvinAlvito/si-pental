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
    <div class="loader-container" id="loader-container">
        <div class="loader"></div>
        <div class="text-loader">Si Pental </div>
    </div>

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
                <a class="{{ request()->is('/') ? 'active-nav' : '' }}"
                    onclick="window.location.href='index.html';">Beranda</a>
            </li>
            <li>
                <a class="{{ request()->is('informasi') ? 'active-nav' : '' }}"
                    onclick="window.location.href='#content-2';">Informasi</a>
            </li>

            <li>
                <a class="{{ request()->is('curhat') ? 'active-nav' : '' }}"
                    onclick="window.location.href='#tentang';">Ruang Curhat</a>
            </li>
            <li>
                <a class="{{ request()->is('kuesioner') ? 'active-nav' : '' }}"
                    onclick="window.location.href='#kuesioner';">Cek Kesehatan Mental</a>
            </li>
            <li>
                <a class="{{ request()->is('konseling') ? 'active-nav' : '' }}"
                    onclick="window.location.href='#arsip';">Ruang Konseling</a>
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
                <a onclick="window.location.href='informasi.html'">
                    <i class='bi bi-grid icon'></i>
                    <span class="titles">Informasi</span>
                    <i class='bi bi-grid-fill activeIcon'></i>
                </a>
            </li>
            <li>
                <a onclick="window.location.href='layanan.html'">
                    <i class='bi bi-layers icon'></i>
                    <span class="titles">Layanan</span>
                    <i class='bi bi-layers-fill activeIcon'></i>
                </a>
            </li>
            <li>
                <a onclick="window.location.href='index.html'">
                    <img class="icon-home" src="/assets/img/icon-home2.png" alt="">
                </a>
            </li>
            <li>
                <a onclick="window.location.href='dukungan.html'">
                    <i class='bi bi-chat-square-text icon'></i>
                    <span class="titles">Dukungan</span>
                    <i class='bi bi-chat-square-text-fill activeIcon'></i>
                </a>
            </li>
            <li>
                <a onclick="window.location.href='login.html'">
                    <i class='bi bi-person icon'></i>
                    <span class="titles">Profil</span>
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
                        <span class="fs-5 text-dark"> Selamat Datang di Website</span>
                        <div class="image-container">
                            <img id="myuinsu" src="/assets/img/logo2.png" alt="Logo Si Pental">
                        </div>

                        <p>
                            <b>Si Pental</b> (Sistem Informasi Kesehatan Mental) adalah platform edukasi
                            dan layanan konseling online yang membantu pengguna memahami, menjaga,
                            dan meningkatkan kesehatan mental melalui informasi, tips, ruang curhat,
                            cek kondisi mental, hingga konsultasi dengan konselor.
                        </p>

                        <div class="about-counter mt-50">
                            <div class="row">
                                <div class="col-sm-4 ">
                                    <div class="single-counter counter-color-1 d-flex wow fadeInUp"
                                        data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <div class="counter-count">
                                                <div class="counter" id="clientsCount">20</div>
                                            </div>
                                            <p class="text">Penyebab Gangguan</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-counter counter-color-2 d-flex wow fadeInUp"
                                        data-wow-duration="1s" data-wow-delay="0.6s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <div class="counter-count">
                                                <div class="counter" id="satisfactionCount">10</div>
                                            </div>
                                            <p class="text">Tanda-Tanda</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-counter counter-color-3 d-flex wow fadeInUp"
                                        data-wow-duration="1s" data-wow-delay="0.9s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <div class="counter-count">
                                                <div class="counter" id="projectsCount">3</div>
                                            </div>
                                            <p class="text">Konselor Aktif</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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

    <section id="tentang" class="about-section pt-50 pb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-4 order-1" id="content-1">
                    <div class="about-img text-lg-right animate__animated animate__fadeInUp wow"
                        data-wow-duration="1.5s">
                        <div class="image-container">
                            <img id="foto-rektor" src="/assets/img/vector/13.png" alt=""
                                style="width:100%;height:100%;object-fit:contain;">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8" id="content-2">
                    <div class="about-content animate__animated animate__fadeInUp wow" data-wow-duration="1.5s">
                        <div class="section-title">
                            <h1 class="mb-25">Informasi Tentang Kesehatan Mental</h1>
                            <p>
                                Kesehatan mental adalah kondisi ketika pikiran, perasaan, dan perilaku berada dalam
                                keadaan seimbang,
                                sehingga seseorang mampu mengelola stres, belajar atau bekerja secara produktif,
                                menjalin hubungan yang baik,
                                serta berkontribusi positif bagi lingkungannya.
                            </p>
                            <p>
                                Menjaga kesehatan mental sama pentingnya dengan menjaga kesehatan fisik. Beberapa faktor
                                yang memengaruhi
                                kesehatan mental antara lain: pola tidur, pola makan, aktivitas fisik, lingkungan
                                keluarga dan sosial,
                                cara mengelola emosi, serta penggunaan media sosial.
                            </p>
                            <a href="#penyebab" class="button mt-20 radius-10">Pelajari Lebih Lanjut <i
                                    class="lni lni-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="penyebab" class="pricing-section pricing-style-4" style="background: url('/assets/img/bg2.jpg');">
        <div class="container content">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title mb-60 animate__animated animate__fadeInUp wow" data-wow-duration="1.5s">
                        <h3 class="mb-15">Penyebab Gangguan Mental</h3>
                        <p>
                            Gangguan mental dapat dipengaruhi oleh banyak faktor, baik dari lingkungan, psikologis,
                            maupun biologis.
                            Berikut beberapa penyebab umum yang perlu dikenali:
                        </p>
                    </div>
                </div>
                <!-- ========== SECTION KARTU (dengan tombol buka modal) ========== -->
                <div class="col-xl-7 col-lg-6">
                    <div class="pricing-active-wrapper animate__animated animate__fadeInUp wow"
                        data-wow-duration="1.5s">
                        <div class="pricing-active">

                            <!-- Bullying -->
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Bullying</h4>
                                    <img src="/assets/img/vector/3.png" alt="Bullying"
                                        style="width:200px;height:200px;object-fit:contain;">
                                    <p>Kekerasan verbal, fisik, maupun cyber yang dialami berulang kali.</p>
                                    <button type="button" class="button radius-30 mt-2" data-bs-toggle="modal"
                                        data-bs-target="#modalBullying">
                                        Lihat Informasi <i class="bi bi-box-arrow-up-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Homesick -->
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Homesick</h4>
                                    <img src="/assets/img/vector/19.png" alt="Homesick"
                                        style="width:200px;height:200px;object-fit:contain;">
                                    <p>Rasa rindu berlebihan terhadap rumah dan keluarga.</p>
                                    <button type="button" class="button radius-30 mt-2" data-bs-toggle="modal"
                                        data-bs-target="#modalHomesick">
                                        Lihat Informasi <i class="bi bi-box-arrow-up-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Stres Belajar -->
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Stres Belajar</h4>
                                    <img src="/assets/img/vector/12.png" alt="Stres Belajar"
                                        style="width:200px;height:200px;object-fit:contain;">
                                    <p>Tekanan akademik atau pekerjaan yang berlebihan.</p>
                                    <button type="button" class="button radius-30 mt-2" data-bs-toggle="modal"
                                        data-bs-target="#modalStresBelajar">
                                        Lihat Informasi <i class="bi bi-box-arrow-up-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Tekanan Sosial -->
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Tekanan Sosial</h4>
                                    <img src="/assets/img/vector/16.png" alt="Tekanan Sosial"
                                        style="width:200px;height:200px;object-fit:contain;">
                                    <p>Overthinking dan membandingkan diri dengan orang lain.</p>
                                    <button type="button" class="button radius-30 mt-2" data-bs-toggle="modal"
                                        data-bs-target="#modalTekananSosial">
                                        Lihat Informasi <i class="bi bi-box-arrow-up-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Trauma Masa Lalu -->
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Trauma Masa Lalu</h4>
                                    <img src="/assets/img/vector/18.png" alt="Trauma Masa Lalu"
                                        style="width:200px;height:200px;object-fit:contain;">
                                    <p>Pengalaman buruk seperti kekerasan, kecelakaan, atau kehilangan.</p>
                                    <button type="button" class="button radius-30 mt-2" data-bs-toggle="modal"
                                        data-bs-target="#modalTrauma">
                                        Lihat Informasi <i class="bi bi-box-arrow-up-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Penyalahgunaan Zat -->
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Penyalahgunaan Zat</h4>
                                    <img src="/assets/img/vector/5.webp" alt="Penyalahgunaan Zat"
                                        style="width:200px;height:200px;object-fit:contain;">
                                    <p>Penggunaan alkohol atau narkoba yang memicu depresi dan kecemasan.</p>
                                    <button type="button" class="button radius-30 mt-2" data-bs-toggle="modal"
                                        data-bs-target="#modalZat">
                                        Lihat Informasi <i class="bi bi-box-arrow-up-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Lingkungan Tidak Sehat -->
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Lingkungan Tidak Sehat</h4>
                                    <img src="/assets/img/vector/20.png" alt="Lingkungan Tidak Sehat"
                                        style="width:200px;height:200px;object-fit:contain;">
                                    <p>Hubungan keluarga atau pertemanan yang toxic.</p>
                                    <button type="button" class="button radius-30 mt-2" data-bs-toggle="modal"
                                        data-bs-target="#modalLingkungan">
                                        Lihat Informasi <i class="bi bi-box-arrow-up-right"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- ========== MODALS (Bootstrap) ========== -->
                <!-- Bullying -->
                <div class="modal fade" id="modalBullying" tabindex="-1" aria-labelledby="labelBullying"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelBullying">Bullying</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/3.png" class="card-img-top" alt="Bullying">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Ringkasan</h6>
                                        <p class="card-text">Kekerasan verbal, fisik, maupun cyber yang berulang dapat
                                            memicu kecemasan, depresi, dan menarik diri.</p>
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Apa yang bisa dilakukan?</h6>
                                        <ul class="mb-0">
                                            <li>Simpan bukti dan laporkan ke pihak berwenang/kampus.</li>
                                            <li>Bangun support system: teman/keluarga/konselor.</li>
                                            <li>Latihan self-compassion & batasi paparan pelaku di media sosial.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a href="#tips" class="btn btn-light">Lihat Tips</a>
                                <a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Homesick -->
                <div class="modal fade" id="modalHomesick" tabindex="-1" aria-labelledby="labelHomesick"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelHomesick">Homesick</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/19.png" class="card-img-top" alt="Homesick">
                                    <div class="card-body">
                                        <p class="card-text">Rindu rumah berlebihan bisa memengaruhi fokus dan mood.
                                        </p>
                                        <ul class="mb-0">
                                            <li>Buat rutinitas harian sederhana & jadwal video call.</li>
                                            <li>Hias kamar/ruang dengan hal yang mengingatkan rumah (aroma, foto).</li>
                                            <li>Ikut komunitas/kegiatan kampus untuk relasi baru.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a href="#tips" class="btn btn-light">Lihat Tips</a>
                                <a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stres Belajar -->
                <div class="modal fade" id="modalStresBelajar" tabindex="-1" aria-labelledby="labelStresBelajar"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelStresBelajar">Stres Belajar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/12.png" class="card-img-top" alt="Stres Belajar">
                                    <div class="card-body">
                                        <p class="card-text">Tekanan akademik berlebih memicu kelelahan mental dan
                                            sulit konsentrasi.</p>
                                        <ul class="mb-0">
                                            <li>Pakai teknik Pomodoro & jeda napas 4-7-8.</li>
                                            <li>Pecah target besar jadi tugas kecil harian.</li>
                                            <li>Jaga tidur/olahraga ringan 15–20 menit.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a href="#tips" class="btn btn-light">Lihat Tips</a>
                                <a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tekanan Sosial -->
                <div class="modal fade" id="modalTekananSosial" tabindex="-1" aria-labelledby="labelTekananSosial"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelTekananSosial">Tekanan Sosial</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/16.png" class="card-img-top" alt="Tekanan Sosial">
                                    <div class="card-body">
                                        <p class="card-text">Perbandingan sosial & overthinking menggerus kepercayaan
                                            diri.</p>
                                        <ul class="mb-0">
                                            <li>Batasi scroll media sosial, atur screen time.</li>
                                            <li>Fokus ke progres diri, bukan hasil orang lain.</li>
                                            <li>Tulis 3 hal yang disyukuri tiap hari.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a href="#tips" class="btn btn-light">Lihat Tips</a>
                                <a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trauma Masa Lalu -->
                <div class="modal fade" id="modalTrauma" tabindex="-1" aria-labelledby="labelTrauma"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelTrauma">Trauma Masa Lalu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/18.png" class="card-img-top" alt="Trauma Masa Lalu">
                                    <div class="card-body">
                                        <p class="card-text">Trauma bisa memunculkan flashback/mimpi buruk, butuh
                                            penanganan bertahap.</p>
                                        <ul class="mb-0">
                                            <li>Grounding: 5-4-3-2-1 (indra) saat cemas muncul.</li>
                                            <li>Jurnal emosi singkat, 5–10 menit per hari.</li>
                                            <li>Pertimbangkan konseling trauma-informed.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a href="#tips" class="btn btn-light">Lihat Tips</a>
                                <a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Penyalahgunaan Zat -->
                <div class="modal fade" id="modalZat" tabindex="-1" aria-labelledby="labelZat"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelZat">Penyalahgunaan Zat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/5.webp" class="card-img-top"
                                        alt="Penyalahgunaan Zat">
                                    <div class="card-body">
                                        <p class="card-text">Alkohol/narkoba dapat memperparah depresi & kecemasan, dan
                                            menimbulkan ketergantungan.</p>
                                        <ul class="mb-0">
                                            <li>Kenali pemicu (situasi/lingkungan) dan jauhi.</li>
                                            <li>Minta dukungan sahabat/keluarga dan komunitas.</li>
                                            <li>Dapatkan bantuan profesional jika sulit berhenti.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a href="#tips" class="btn btn-light">Lihat Tips</a>
                                <a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lingkungan Tidak Sehat -->
                <div class="modal fade" id="modalLingkungan" tabindex="-1" aria-labelledby="labelLingkungan"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelLingkungan">Lingkungan Tidak Sehat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/20.png" class="card-img-top"
                                        alt="Lingkungan Tidak Sehat">
                                    <div class="card-body">
                                        <p class="card-text">Relasi toxic menurunkan harga diri dan meningkatkan stres.
                                        </p>
                                        <ul class="mb-0">
                                            <li>Tetapkan batasan (boundaries) yang jelas.</li>
                                            <li>Batasi interaksi, pilih lingkungan suportif.</li>
                                            <li>Cari bantuan jika terjadi kekerasan/abuse.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a href="#tips" class="btn btn-light">Lihat Tips</a>
                                <a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="tanda" class="about-section pt-50 pb-70">
        <div class="container">
            <div class="row align-items-center">

                <!-- Card Carousel -->
                <div class="col-xl-8 col-lg-8" id="content-3">
                    <div class="containers">
                        <div class="card-carousel">

                            <div class="card" id="1">
                                <div class="image-containers">
                                    <img class="icon-card" src="/assets/img/vector/3.png" alt="cemas">
                                </div>
                                <p>
                                <h6>Cemas Berlebihan</h6>
                                Merasa gelisah, takut, atau khawatir secara berlebihan tanpa alasan jelas.
                                </p>
                            </div>

                            <div class="card" id="2">
                                <div class="image-containers">
                                    <img class="icon-card" src="/assets/img/vector/7.webp" alt="gangguan tidur">
                                </div>
                                <p>
                                <h6>Gangguan Tidur</h6>
                                Sulit tidur, tidur terlalu sedikit/terlalu lama, atau sering mimpi buruk.
                                </p>
                            </div>

                            <div class="card" id="3">
                                <div class="image-containers">
                                    <img class="icon-card" src="/assets/img/vector/12.png" alt="kehilangan minat">
                                </div>
                                <p>
                                <h6>Kehilangan Minat</h6>
                                Tidak lagi bersemangat melakukan aktivitas yang biasanya disukai.
                                </p>
                            </div>

                            <div class="card" id="4">
                                <div class="image-containers">
                                    <img class="icon-card" src="/assets/img/vector/16.png" alt="menarik diri">
                                </div>
                                <p>
                                <h6>Menarik Diri</h6>
                                Menghindari interaksi sosial dan merasa ingin sendirian terus-menerus.
                                </p>
                            </div>

                            <div class="card" id="5">
                                <div class="image-containers">
                                    <img class="icon-card" src="/assets/img/vector/20.png" alt="emosi tidak stabil">
                                </div>
                                <p>
                                <h6>Emosi Tidak Stabil</h6>
                                Mudah marah, menangis, atau sedih tanpa sebab yang jelas.
                                </p>
                            </div>

                        </div>
                        <a href="#" class="visuallyhidden card-controller">Carousel controller</a>
                    </div>
                </div>

                <!-- Content samping -->
                <div class="col-xl-4 col-lg-4" id="content-4">
                    <div class="about-content animate__animated animate__fadeInUp wow" data-wow-duration="1.5s">
                        <div class="section-title">
                            <h1 class="">Tanda-Tanda Gangguan Mental</h1>
                            <p>
                                Gangguan mental dapat dikenali sejak dini melalui perubahan pikiran, emosi, dan
                                perilaku.
                                Beberapa tanda umum di antaranya: cemas berlebihan, sulit tidur, kehilangan minat,
                                menarik diri dari lingkungan sosial, serta emosi yang tidak stabil.
                            </p>
                        </div>

                        <a href="#tips" class="button mt-12 radius-10">Pelajari Tips Menjaga Mental <i
                                class="lni lni-angle-double-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="konseling" class="about-section pt-10 pb-10" style="background: url('/assets/img/bg3.jpg');">
        <div class="container">
            <div class="row align-items-center">

                <!-- Konten Konseling -->
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content animate__animated animate__fadeInUp wow" data-wow-duration="1.5s">
                        <div class="section-title mb-30">
                            <h1 class="mb-25">Ruang Konseling</h1>
                            <p class="">
                                Si Pental menyediakan layanan konseling untuk membantu kamu yang sedang menghadapi
                                masalah
                                kesehatan mental, seperti stres belajar, kecemasan, atau tekanan sosial.
                                Kamu bisa terhubung langsung dengan konselor melalui WhatsApp.
                            </p>
                        </div>

                        <ul>
                            <li class=""><i class="lni lni-checkmark-circle"></i> Konseling privat dengan
                                konselor</li>
                            <li class=""><i class="lni lni-checkmark-circle"></i> Diskusi ringan untuk kelola
                                stres & emosi</li>
                            <li class=""><i class="lni lni-checkmark-circle"></i> Rekomendasi langkah lanjutan
                            </li>
                            <li class=""><i class="lni lni-checkmark-circle"></i> Gratis & rahasia terjaga</li>
                        </ul>

                        <!-- Tombol ke WhatsApp -->
                        <a href="https://faq.whatsapp.com/203220822537614" target="_blank"
                            class="button mt-20 radius-10">
                            Chat dengan Meta AI di WhatsApp <i class="lni lni-whatsapp"></i>
                        </a>

                        </a>
                    </div>
                </div>

                <!-- Gambar Samping -->
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img text-lg-right animate__animated animate__fadeInUp wow"
                        data-wow-duration="1.5s">
                        <div class="image-container">
                            <img id="support" src="/assets/img/support.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="tentang" class="about-section pt-50 pb-50">
        <div class="container">
            <div class="row align-items-center">

                <!-- Konten Ruang Curhat -->
                <div class="col-xl-8 col-lg-8" id="content-2">
                    <div class="about-content animate__animated animate__fadeInUp wow" data-wow-duration="1.5s">
                        <div class="section-title">
                            <h1 class="mb-25">Ruang Curhat</h1>
                            <p>
                                Ruang Curhat adalah <b>chat bot Si Pental</b> yang siap mendengarkan ceritamu dengan
                                empati.
                                Kamu bisa berbagi tentang stres belajar, cemas, homesick, atau apa pun yang sedang kamu
                                rasakan.
                                Bot akan memberi dukungan ringan, tips praktis, dan mengarahkanmu ke konten terkait.
                                <i>Catatan: ini bukan pengganti konsultasi profesional.</i>
                            </p>

                            <ul style="margin-top:10px;">
                                <li>🧩 <b>Dengarkan & Validasi</b> — tanggapan hangat, non-menghakimi.</li>
                                <li>🧭 <b>Arahkan</b> — ke bagian Penyebab, Tanda-Tanda, dan Tips.</li>
                                <li>🧪 <b>Cek Kondisi</b> — ajak isi kuesioner (#kuesioner) bila diperlukan.</li>
                                <li>🤝 <b>Krisis?</b> — arahkan ke konselor/WA BK dan bantuan cepat.</li>
                            </ul>

                            <!-- Quick Prompts -->
                            <div class="mt-3" aria-label="Contoh pertanyaan cepat">
                                <span class="badge bg-light text-dark  mb-2">“Aku sering overthinking, harus
                                    gimana?”</span>
                                <span class="badge bg-light text-dark  mb-2">“Tips biar ga homesick?”</span>
                                <span class="badge bg-light text-dark  mb-2">“Cara atur tidur dan stres
                                    belajar?”</span>
                                <span class="badge bg-light text-dark  mb-2">“Aku pengen curhat.”</span>
                            </div>

                            <!-- CTA -->
                            <div class="d-flex gap-2 flex-wrap">
                                <a href="#chat" class="button mt-20 radius-10">Mulai Chat Bot <i
                                        class="lni lni-angle-double-right"></i></a>
                                <a href="#kuesioner" class="button mt-20 radius-10"
                                    style="background:#f1f1f1;color:#111;">
                                    Cek Kesehatan Mental <i class="lni lni-checkmark-circle"></i>
                                </a>
                            </div>

                            <!-- Privasi -->
                            <p class="mt-3" style="font-size:.95rem;opacity:.9;">
                                🔒 Privasi kamu penting. Hindari membagikan data sensitif (NIK, password). Jika merasa
                                tidak aman atau ingin bicara dengan manusia,
                                silakan <a href="#konseling">hubungi konselor</a>.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Ilustrasi -->
                <div class="col-xl-4 col-lg-4 order-1" id="content-1">
                    <div class="about-img text-lg-right animate__animated animate__fadeInUp wow"
                        data-wow-duration="1.5s">
                        <div class="image-container">
                            <img id="foto-rektor" src="/assets/img/vector/11.png"
                                alt="Ilustrasi Ruang Curhat Si Pental"
                                style="width:100%;height:100%;object-fit:contain;">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="kuesioner" class="about-section pt-10 pb-10 mb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1 class="mb-25 text-center">Cek Kesehatan Mental Kamu</h1>
                    <p class="text-center mb-40 h4 text-secondary">Jawab pertanyaan berikut sesuai kondisi kamu
                        akhir-akhir ini.</p>
                </div>

                <div class="col-xl-12 col-lg-12">
                    <!-- Grid pertanyaan -->
                    <div class="row g-4">

                        <!-- Pertanyaan 1 -->
                        <div class="col-12 col-md-6">
                            <div class="question">
                                <p class="h6 my-2">1. Saya merasa cemas atau khawatir berlebihan tanpa alasan yang
                                    jelas.</p>
                                <div class="feedback">
                                    <label class="angry"><input name="q1" value="1" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="sad"><input name="q1" value="2" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="ok"><input name="q1" value="3" type="radio" />
                                        <div></div>
                                    </label>
                                    <label class="good"><input name="q1" value="4" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="happy"><input name="q1" value="5" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg></div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Pertanyaan 2 -->
                        <div class="col-12 col-md-6">
                            <div class="question">
                                <p class="h6 my-2">2. Saya sering merasa sedih atau kehilangan semangat dalam
                                    beraktivitas.</p>
                                <div class="feedback">
                                    <label class="angry"><input name="q2" value="1" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="sad"><input name="q2" value="2" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="ok"><input name="q2" value="3" type="radio" />
                                        <div></div>
                                    </label>
                                    <label class="good"><input name="q2" value="4" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="happy"><input name="q2" value="5" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg></div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Pertanyaan 3 -->
                        <div class="col-12 col-md-6">
                            <div class="question">
                                <p class="h6 my-2">3. Saya sulit tidur atau sering terbangun di malam hari.</p>
                                <div class="feedback">
                                    <label class="angry"><input name="q3" value="1" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="sad"><input name="q3" value="2" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="ok"><input name="q3" value="3" type="radio" />
                                        <div></div>
                                    </label>
                                    <label class="good"><input name="q3" value="4" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="happy"><input name="q3" value="5" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg></div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Pertanyaan 4 -->
                        <div class="col-12 col-md-6">
                            <div class="question">
                                <p class="h6 my-2">4. Saya sering merasa lelah atau kurang energi meskipun tidak banyak
                                    aktivitas.</p>
                                <div class="feedback">
                                    <label class="angry"><input name="q4" value="1" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="sad"><input name="q4" value="2" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="ok"><input name="q4" value="3" type="radio" />
                                        <div></div>
                                    </label>
                                    <label class="good"><input name="q4" value="4" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="happy"><input name="q4" value="5" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg></div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Pertanyaan 5 -->
                        <div class="col-12 col-md-6">
                            <div class="question">
                                <p class="h6 my-2">5. Saya merasa sulit berkonsentrasi atau fokus pada tugas.</p>
                                <div class="feedback">
                                    <label class="angry"><input name="q5" value="1" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="sad"><input name="q5" value="2" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="ok"><input name="q5" value="3" type="radio" />
                                        <div></div>
                                    </label>
                                    <label class="good"><input name="q5" value="4" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="happy"><input name="q5" value="5" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg></div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Pertanyaan 5 -->
                        <div class="col-12 col-md-6">
                            <div class="question">
                                <p class="h6 my-2">6. Saya merasa sulit berkonsentrasi atau fokus pada pembicaraan.</p>
                                <div class="feedback">
                                    <label class="angry"><input name="q6" value="1" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="sad"><input name="q6" value="2" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="ok"><input name="q6" value="3" type="radio" />
                                        <div></div>
                                    </label>
                                    <label class="good"><input name="q6" value="4" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg><svg
                                                class="mouth"></svg></div>
                                    </label>
                                    <label class="happy"><input name="q6" value="5" type="radio" />
                                        <div><svg class="eye left"></svg><svg class="eye right"></svg></div>
                                    </label>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="#chat" class="button mt-20 radius-10">Kirim Jawaban <i
                            class="lni lni-angle-double-right"></i></a>
                </div>
                <!-- SVG defs tetap -->
                <svg style="display:none;" xmlns="http://www.w3.org/2000/svg">
                    <symbol id="eye" viewBox="0 0 7 4">
                        <path
                            d="M1,1 C1.83333333,2.16666667 2.66666667,2.75 3.5,2.75 C4.33333333,2.75 5.16666667,2.16666667 6,1">
                        </path>
                    </symbol>
                    <symbol id="mouth" viewBox="0 0 18 7">
                        <path d="M1,5.5 C3.66666667,2.5 6.33333333,1 9,1 C11.6666667,1 14.3333333,2.5 17,5.5"></path>
                    </symbol>
                </svg>

            </div>
        </div>
    </section>



    <section id="" class="about-section pt-10 pb-10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1 class="mb-25 text-center">Illustrasi Kesehatan Mental</h1>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="about-content animate__animated animate__fadeInUp wow" data-wow-duration="1.5s">

                        <a href="#" alt="Mythrill" target="_blank">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/1.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/1.png" class="character" />
                            </div>
                        </a>

                        <a href="#" alt="Mythrill" target="_blank">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/2.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/2.png" class="character" />
                            </div>
                        </a>

                        <a href="#" alt="Mythrill" target="_blank">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/3.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/3.png" class="character" />
                            </div>
                        </a>

                        <a href="#" alt="Mythrill" target="_blank">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/19.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/19.png" class="character" />
                            </div>
                        </a>

                        <a href="#" alt="Mythrill" target="_blank">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/20.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/20.png" class="character" />
                            </div>
                        </a>

                        <a href="#" alt="Mythrill" target="_blank">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/8.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/8.png" class="character" />
                            </div>
                        </a>

                        <a href="#" alt="Mythrill" target="_blank">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/9.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/9.png" class="character" />
                            </div>
                        </a>

                        <a href="#" alt="Mythrill" target="_blank">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/18.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/18.png" class="character" />
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>



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
                                <b>Si Pental</b> (Sistem Informasi Kesehatan Mental) adalah platform yang menyediakan
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
                <p>Copyright © 2025 <a href="#">Si Pental</a> | Sistem Informasi Kesehatan Mental</p>
            </div>
        </div>
    </footer>



    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>


    <script src="/assets/js/bootstrap-5.0.0-beta2.min.js"></script>
    <script src="/assets/js/count-up.min.js"></script>
    <script src="/assets/js/glightbox.min.js"></script>
    <script src="/assets/js/tiny-slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="/assets/js/chatbot.js"></script>
    <script src="/assets/js/card.js"></script>
    <script src="/assets/js/main.js"></script>


</body>

</html>
