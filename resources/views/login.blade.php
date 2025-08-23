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
    <!-- <div class="loader-container" id="loader-container">
        <div class="loader"></div>
        <div class="text-loader">My UINSU </div>
    </div> -->

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
            <li><a class="{{ request()->is('/') ? 'active-nav' : '' }}"
                    onclick="window.location.href='index.html';">Beranda</a>
            </li>
            <li><a class="{{ request()->is('arsip') ? 'active-nav' : '' }}"
                    onclick="window.location.href='informasi.html';">Informasi</a></li>
            <li><a class="{{ request()->is('pencarian') ? 'active-nav' : '' }}"
                    onclick="window.location.href='layanan.html';">Layanan</a></li>
            <li><a class="{{ request()->is('unggah') ? 'active-nav' : '' }}"
                    onclick="window.location.href='/dukungan.html';">Dukungan</a></li>

            <li>
                <a class="{{ request()->is('dashboard') ? 'active-nav' : '' }}"
                    onclick="window.location.href='profil.html';">Profil</a>
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
                                style="width:500px;height:500px;object-fit:contain;">
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
                <div class="col-xl-7 col-lg-6">
                    <div class="pricing-active-wrapper animate__animated animate__fadeInUp wow"
                        data-wow-duration="1.5s">
                        <div class="pricing-active">

                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Bullying</h4>
                                    <img src="/assets/img/vector/3.png" alt="Bullying"
                                        style="width:200px;height:200px;object-fit:contain;">

                                    <p>Kekerasan verbal, fisik, maupun cyber yang dialami berulang kali.</p>
                                    <a href="#detail-bullying" class="button radius-30 mt-2">Lihat Informasi <i
                                            class="bi bi-box-arrow-up-right"></i></a>
                                </div>
                            </div>

                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Homesick</h4>
                                    <img src="/assets/img/vector/19.png" alt="Homesick"
                                        style="width:200px;height:200px;object-fit:contain;">
                                    <p>Rasa rindu berlebihan terhadap rumah dan keluarga.</p>
                                    <a href="#detail-homesick" class="button radius-30 mt-2">Lihat Informasi <i
                                            class="bi bi-box-arrow-up-right"></i></a>
                                </div>
                            </div>

                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Stres Belajar</h4>
                                    <img src="/assets/img/vector/12.png" alt="Stres Belajar"
                                        style="width:200px;height:200px;object-fit:contain;">
                                    <p>Tekanan akademik atau pekerjaan yang berlebihan.</p>
                                    <a href="#detail-stres-belajar" class="button radius-30 mt-2">Lihat Informasi <i
                                            class="bi bi-box-arrow-up-right"></i></a>
                                </div>
                            </div>

                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Tekanan Sosial</h4>
                                    <img src="/assets/img/vector/16.png" alt="Tekanan Sosial"
                                        style="width:200px;height:200px;object-fit:contain;">
                                    <p>Overthinking dan membandingkan diri dengan orang lain.</p>
                                    <a href="#detail-tekanan-sosial" class="button radius-30 mt-2">Lihat Informasi <i
                                            class="bi bi-box-arrow-up-right"></i></a>
                                </div>
                            </div>

                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Trauma Masa Lalu</h4>
                                    <img src="/assets/img/vector/18.png" alt="Trauma Masa Lalu"
                                        style="width:200px;height:200px;object-fit:contain;">
                                    <p>Pengalaman buruk seperti kekerasan, kecelakaan, atau kehilangan.</p>
                                    <a href="#detail-trauma" class="button radius-30 mt-2">Lihat Informasi <i
                                            class="bi bi-box-arrow-up-right"></i></a>
                                </div>
                            </div>

                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Penyalahgunaan Zat</h4>
                                    <img src="/assets/img/vector/5.webp" alt="Penyalahgunaan Zat"
                                        style="width:200px;height:200px;object-fit:contain;">
                                    <p>Penggunaan alkohol atau narkoba yang memicu depresi dan kecemasan.</p>
                                    <a href="#detail-zat" class="button radius-30 mt-2">Lihat Informasi <i
                                            class="bi bi-box-arrow-up-right"></i></a>
                                </div>
                            </div>

                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Lingkungan Tidak Sehat</h4>
                                    <img src="/assets/img/vector/20.png" alt="Lingkungan Tidak Sehat"
                                        style="width:200px;height:200px;object-fit:contain;">
                                    <p>Hubungan keluarga atau pertemanan yang toxic.</p>
                                    <a href="#detail-lingkungan" class="button radius-30 mt-2">Lihat Informasi <i
                                            class="bi bi-box-arrow-up-right"></i></a>
                                </div>
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
                        <a href="https://wa.me/6281234567890" target="_blank" class="button mt-20 radius-10">
                            Hubungi Konselor via WhatsApp <i class="lni lni-whatsapp"></i>
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
                                <span class="badge bg-light text-dark me-2 mb-2">“Aku sering overthinking, harus
                                    gimana?”</span>
                                <span class="badge bg-light text-dark me-2 mb-2">“Tips biar ga homesick?”</span>
                                <span class="badge bg-light text-dark me-2 mb-2">“Cara atur tidur dan stres
                                    belajar?”</span>
                                <span class="badge bg-light text-dark me-2 mb-2">“Aku pengen curhat.”</span>
                            </div>

                            <!-- CTA -->
                            <div class="d-flex gap-2 flex-wrap">
                                <a  href="#chat" class="button mt-20 radius-10">Mulai Chat Bot <i
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
                                style="width:500px;height:500px;object-fit:contain;">
                        </div>
                    </div>
                </div>

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
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget">
                            <div class="logo mb-35">
                                <a href="index.html"> <img src="/assets/img/logo2.png" width="200px"
                                        alt="">
                                </a>
                            </div>
                            <p class="desc mb-35">UIN Sumatera Utara memiliki 8 Fakultas dan 1 Program Pascasarjana.
                                UINSU adalah kampus islam yang memiliki moto “Smart Islamic University”</p>
                            <ul class="socials">
                                <li>
                                    <a href="https://www.facebook.com/uinsuofficial/"> <i
                                            class="lni lni-facebook-filled"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/UINSumutMedan"> <i
                                            class="lni lni-twitter-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/uinsu_official/"> <i
                                            class="lni lni-instagram-filled"></i> </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCu-kpT7tJfg6y2tJ71e1vtQ"> <i
                                            class="lni lni-youtube"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 offset-xl-1 col-md-5 offset-md-1 col-sm-6">
                        <div class="footer-widget">
                            <h3>Link</h3>
                            <ul class="links">
                                <li> <a href="javascript:void(0)">Beranda</a> </li>
                                <li> <a href="javascript:void(0)">Informasi</a> </li>
                                <li> <a href="javascript:void(0)">Layanan</a> </li>
                                <li> <a href="javascript:void(0)">Dukungan</a> </li>
                                <li> <a href="javascript:void(0)">Tentang Kami</a> </li>
                                <li> <a href="javascript:void(0)">Login</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3>Layanan</h3>
                            <ul class="links">
                                <li> <a href="javascript:void(0)">Portal SIA</a> </li>
                                <li> <a href="javascript:void(0)">SI-SELMA</a> </li>
                                <li> <a href="javascript:void(0)">E-LEARNING</a> </li>
                                <li> <a href="javascript:void(0)">SI-JURNAL</a> </li>
                                <li> <a href="javascript:void(0)">Repository</a> </li>
                                <li> <a href="javascript:void(0)">SI-DAHLIA</a> </li>
                                <li> <a href="javascript:void(0)">SI-PERPUS</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Kontak</h3>
                            <ul>

                                <li>humas@uinsu.ac.id</li>
                                <li>Jl. Willem Iskandar Pasar V, Medan Estate</li>
                            </ul>
                            <div class="contact_map" style="width: 100%; height: 150px; margin-top: 25px;">
                                <div class="gmap_canvas">
                                    <iframe id="gmap_canvas"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.923855729958!2d98.71849827371673!3d3.604906850184647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031316be49d74e9%3A0x2f82fd7c9bd27f!2sUniversitas%20Islam%20Negeri%20Sumatera%20Utara%20Medan!5e0!3m2!1sid!2sid!4v1711774604762!5m2!1sid!2sid"
                                        style="width: 100%;"></iframe>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="copy-right">
                <p>Copyright © 2025 <a href="https://uinsu.ac.id/" rel="nofollow" target="_blank"> UIN Sumatera Utara
                        Medan </a></p>
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
