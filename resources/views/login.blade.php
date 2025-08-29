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
                <a href="javascript:void(0)" onclick="window.location.href='#informasi'">
                    <i class='bi bi-grid icon'></i>
                    <i class='bi bi-grid-fill activeIcon'></i>
                </a>
            </li>

            <li>
                <a href="javascript:void(0)" onclick="window.location.href='#ruang'">
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
                <a href="javascript:void(0)" onclick="window.location.href='#cek'">
                    <i class='bi bi-chat-square-text icon'></i>
                    <i class='bi bi-chat-square-text-fill activeIcon'></i>
                </a>
            </li>

            <li>
                <a href="javascript:void(0)" onclick="window.location.href='#profil'">
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
                        <span class="fs-5 text-dark"> Selamat Datang di Website</span>
                        <div class="image-container">
                            <img id="myuinsu" src="/assets/img/logo2.png" alt="Logo Si Pental">
                        </div>

                        <p>
                            <b>Si Pental</b> (Sistem Informasi Pendampingan Kesehatan Mental) adalah platform edukasi
                            dan layanan konseling online yang membantu pengguna memahami, menjaga,
                            dan meningkatkan kesehatan mental melalui informasi, tips, ruang curhat,
                            cek kondisi mental, hingga konsultasi dengan konselor.
                        </p>

                        <!-- <div class="about-counter mt-50">
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
                                    </div> 
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
                                    </div> 
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
                        </div> -->

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
                    <div id="#informasi" class="about-content animate__animated animate__fadeInUp wow"
                        data-wow-duration="1.5s">
                        <div class="section-title">
                            <h1 class="mb-25">Informasi Tentang Pendampingan Kesehatan Mental</h1>
                            <p>
                                Kesehatan mental adalah kondisi ketika pikiran, perasaan, dan perilaku berada dalam
                                keadaan seimbang, sehingga seseorang mampu mengelola stres, belajar atau bekerja secara
                                produktif, menjalin hubungan yang baik, serta berkontribusi positif bagi lingkungannya.
                            </p>
                            <p>
                                Menjaga kesehatan mental sama pentingnya dengan menjaga kesehatan fisik. Beberapa faktor
                                yang
                                memengaruhi antara lain: pola tidur, pola makan, aktivitas fisik, lingkungan keluarga
                                dan sosial,
                                cara mengelola emosi, serta penggunaan media sosial.
                            </p>

                            <!-- GANTI: tombol buka modal -->
                            <button type="button" class="button mt-20 radius-10" data-bs-toggle="modal"
                                data-bs-target="#modalSiPental">
                                Pelajari Lebih Lanjut <i class="lni lni-angle-double-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- ===== Modal Bootstrap: Informasi Lebih Lanjut Si Pental ===== -->
                <div class="modal fade" id="modalSiPental" tabindex="-1" aria-labelledby="labelSiPental"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelSiPental">Sistem Informasi Pendampingan Kesehatan
                                    Mental (Si Pental)</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>

                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <!-- Opsional: ilustrasi kecil -->
                                    <img src="/assets/img/vector/9.png" class="card-img-top" alt="Ilustrasi Si Pental"
                                        style="max-height:220px; object-fit:contain; padding:12px;">
                                    <div class="card-body">
                                        <p class="mb-3">
                                            <b>Si Pental</b> adalah platform pendampingan kesehatan mental yang
                                            menyediakan edukasi, self-check,
                                            ruang curhat (chat bot), serta akses konseling. Dirancang ramah pengguna,
                                            empatik, dan menjaga privasi.
                                        </p>
                                        <div class="row g-3">
                                            <div class="col-12 col-md-6">
                                                <div class="card h-100">
                                                    <div class="card-body">
                                                        <h6 class="card-title mb-2">Fitur Utama</h6>
                                                        <ul class="mb-0">
                                                            <li>Informasi & edukasi kesehatan mental</li>
                                                            <li>Penyebab & tanda-tanda gangguan</li>
                                                            <li>Tips & trik menjaga kesehatan mental</li>
                                                            <li>Ruang Curhat (Chat Bot) empatik</li>
                                                            <li>Kuesioner cek kondisi (indikatif)</li>
                                                            <li>Konseling via WhatsApp BK</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="card h-100">
                                                    <div class="card-body">
                                                        <h6 class="card-title mb-2">Prinsip & Keamanan</h6>
                                                        <ul class="mb-0">
                                                            <li>Non-menghakimi & berpusat pada pengguna</li>
                                                            <li>Privasi dijaga, hindari data sensitif</li>
                                                            <li>Hasil kuesioner bersifat indikatif</li>
                                                            <li>Rujukan ke konselor bila perlu</li>
                                                            <li>Dukungan saat krisis: 112 / SEJIWA 119 ext.8</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="my-3">
                                        <p class="mb-0" style="font-size:.95rem; opacity:.9;">
                                            Catatan: Informasi pada Si Pental bersifat edukasi umum dan <i>bukan</i>
                                            pengganti konsultasi profesional.
                                            Jika gejala mengganggu aktivitas harian, pertimbangkan konseling.
                                        </p>
                                    </div>
                                </div>
                            </div>


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
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelBullying">Bullying</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>

                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/3.png" class="card-img-top p-3" alt="Bullying"
                                        style="max-height:180px; object-fit:contain;">
                                    <div class="card-body">

                                        <!-- Definisi -->
                                        <h6 class="card-subtitle mb-2 text-muted">Apa itu Bullying?</h6>
                                        <p class="card-text">
                                            Bullying adalah tindakan kekerasan atau intimidasi yang dilakukan secara
                                            berulang oleh individu
                                            atau kelompok terhadap orang lain yang dianggap lebih lemah. Bullying bisa
                                            terjadi secara
                                            <b>verbal</b> (menghina, mengejek), <b>fisik</b> (memukul, mendorong),
                                            maupun <b>cyber</b>
                                            (melecehkan lewat media sosial).
                                        </p>

                                        <!-- Jenis -->
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Jenis-Jenis Bullying</h6>
                                        <ul>
                                            <li><b>Bullying Verbal:</b> ejekan, hinaan, ancaman.</li>
                                            <li><b>Bullying Fisik:</b> menampar, menendang, merusak barang.</li>
                                            <li><b>Bullying Sosial:</b> mengucilkan, menyebar gosip.</li>
                                            <li><b>Cyberbullying:</b> serangan melalui media sosial atau pesan online.
                                            </li>
                                        </ul>

                                        <!-- Dampak -->
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Dampak Bullying</h6>
                                        <p>
                                            Dampaknya bisa serius, mulai dari rasa rendah diri, kesulitan berinteraksi
                                            sosial, menurunnya
                                            prestasi akademik, hingga masalah kesehatan mental seperti kecemasan,
                                            depresi, bahkan
                                            keinginan untuk menyakiti diri sendiri.
                                        </p>

                                        <!-- Solusi -->
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Apa yang Bisa Dilakukan?</h6>
                                        <ul>
                                            <li><b>Simpan bukti</b> bullying (screenshot, rekaman) dan laporkan ke pihak
                                                berwenang atau kampus.</li>
                                            <li><b>Ceritakan</b> kepada orang terpercaya: teman, keluarga, konselor.
                                            </li>
                                            <li><b>Bangun rasa percaya diri</b> dengan kegiatan positif & komunitas
                                                suportif.</li>
                                            <li><b>Batasi kontak</b> dengan pelaku, baik secara langsung maupun di media
                                                sosial.</li>
                                            <li><b>Dapatkan bantuan profesional</b> jika dampak psikologis terasa berat.
                                            </li>
                                        </ul>

                                        <!-- Catatan -->
                                        <div class="alert alert-info mt-3 mb-0" style="font-size:.9rem;">
                                            <b>Catatan:</b> Bullying bukan kesalahan korban. Tidak ada alasan yang
                                            membenarkan perilaku
                                            merendahkan orang lain. Jangan ragu mencari bantuan bila diperlukan.
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Homesick -->
                <div class="modal fade" id="modalHomesick" tabindex="-1" aria-labelledby="labelHomesick"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelHomesick">Homesick</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>

                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/19.png" class="card-img-top p-3" alt="Homesick"
                                        style="max-height:180px; object-fit:contain;">
                                    <div class="card-body">

                                        <!-- Definisi -->
                                        <h6 class="card-subtitle mb-2 text-muted">Apa itu Homesick?</h6>
                                        <p class="card-text">
                                            Homesick adalah perasaan rindu rumah atau keluarga secara berlebihan yang
                                            biasanya dialami ketika seseorang
                                            tinggal jauh dari rumah untuk waktu tertentu, misalnya saat merantau kuliah,
                                            bekerja, atau mengikuti kegiatan
                                            tertentu. Rasa ini wajar, tetapi bila dibiarkan bisa memengaruhi konsentrasi
                                            dan kestabilan emosi.
                                        </p>

                                        <!-- Penyebab -->
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Penyebab Umum</h6>
                                        <ul>
                                            <li>Perubahan lingkungan yang drastis (kampus baru, tempat kos, kota asing).
                                            </li>
                                            <li>Kurangnya dukungan sosial di lingkungan baru.</li>
                                            <li>Ikatan emosional yang sangat kuat dengan keluarga atau rumah.</li>
                                            <li>Keterbatasan dalam beradaptasi dengan budaya atau kebiasaan baru.</li>
                                        </ul>

                                        <!-- Dampak -->
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Dampak yang Mungkin Terjadi</h6>
                                        <p>
                                            Homesick dapat menurunkan semangat belajar/kerja, membuat sulit fokus,
                                            gangguan tidur, rasa cemas, bahkan
                                            menarik diri dari lingkungan sosial. Jika berkepanjangan, dapat memicu stres
                                            atau depresi ringan.
                                        </p>

                                        <!-- Solusi -->
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Apa yang Bisa Dilakukan?</h6>
                                        <ul>
                                            <li><b>Buat rutinitas harian:</b> olahraga ringan, belajar, waktu istirahat.
                                            </li>
                                            <li><b>Atur komunikasi:</b> jadwal video call dengan keluarga agar tetap
                                                terhubung.</li>
                                            <li><b>Ciptakan suasana nyaman:</b> hias kamar dengan foto, aroma, atau
                                                barang yang mengingatkan rumah.</li>
                                            <li><b>Bangun relasi baru:</b> ikut komunitas, organisasi kampus, atau
                                                kegiatan sosial.</li>
                                            <li><b>Kelola emosi:</b> gunakan teknik pernapasan atau menulis jurnal saat
                                                rindu melanda.</li>
                                        </ul>

                                        <!-- Catatan -->
                                        <div class="alert alert-info mt-3 mb-0" style="font-size:.9rem;">
                                            <b>Catatan:</b> Homesick adalah hal wajar yang dialami banyak orang. Dengan
                                            dukungan sosial dan kebiasaan
                                            positif, perasaan ini bisa berkurang seiring waktu. Jangan ragu mencari
                                            bantuan jika homesick terasa berat.
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Stres Belajar -->
                <div class="modal fade" id="modalStresBelajar" tabindex="-1" aria-labelledby="labelStresBelajar"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelStresBelajar">Stres Belajar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>

                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/12.png" class="card-img-top p-3" alt="Stres Belajar"
                                        style="max-height:180px; object-fit:contain;">
                                    <div class="card-body">

                                        <!-- Definisi -->
                                        <h6 class="card-subtitle mb-2 text-muted">Apa itu Stres Belajar?</h6>
                                        <p class="card-text">
                                            Stres belajar adalah kondisi ketika tekanan akademik, beban tugas, atau
                                            tuntutan prestasi
                                            menyebabkan kelelahan mental, sulit konsentrasi, dan turunnya motivasi.
                                            Stres ini umum dialami
                                            mahasiswa maupun pelajar, terutama menjelang ujian atau saat menghadapi
                                            deadline tugas.
                                        </p>

                                        <!-- Penyebab -->
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Penyebab Umum</h6>
                                        <ul>
                                            <li>Tugas menumpuk dan tenggat waktu yang ketat.</li>
                                            <li>Kurangnya manajemen waktu dan strategi belajar.</li>
                                            <li>Tekanan dari orang tua, guru, atau lingkungan.</li>
                                            <li>Kurang tidur dan pola hidup tidak seimbang.</li>
                                            <li>Perfeksionisme atau rasa takut gagal.</li>
                                        </ul>

                                        <!-- Dampak -->
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Dampak Stres Belajar</h6>
                                        <p>
                                            Jika tidak ditangani, stres belajar dapat menimbulkan kelelahan mental,
                                            gangguan tidur, penurunan
                                            prestasi akademik, mudah marah, bahkan gangguan kesehatan fisik seperti
                                            sakit kepala atau maag.
                                            Dalam jangka panjang, bisa memicu kecemasan dan depresi.
                                        </p>

                                        <!-- Solusi -->
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Apa yang Bisa Dilakukan?</h6>
                                        <ul>
                                            <li><b>Gunakan teknik Pomodoro:</b> belajar 25 menit, istirahat 5 menit.
                                            </li>
                                            <li><b>Pecah target besar</b> menjadi tugas-tugas kecil yang lebih mudah
                                                dicapai.</li>
                                            <li><b>Jaga gaya hidup sehat:</b> tidur cukup, olahraga ringan, dan makan
                                                seimbang.</li>
                                            <li><b>Kelola pikiran:</b> gunakan teknik relaksasi, napas 4-7-8, atau
                                                meditasi singkat.</li>
                                            <li><b>Cari bantuan:</b> diskusi dengan teman, dosen, atau konselor bila
                                                beban terasa berat.</li>
                                        </ul>

                                        <!-- Catatan -->
                                        <div class="alert alert-info mt-3 mb-0" style="font-size:.9rem;">
                                            <b>Catatan:</b> Stres belajar adalah hal normal, tetapi jangan sampai
                                            dibiarkan berlarut-larut.
                                            Dengan manajemen waktu dan dukungan yang tepat, stres bisa diubah menjadi
                                            motivasi positif.
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


                <!-- Tekanan Sosial -->
                <div class="modal fade" id="modalTekananSosial" tabindex="-1" aria-labelledby="labelTekananSosial"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelTekananSosial">Tekanan Sosial</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>

                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/16.png" class="card-img-top p-3" alt="Tekanan Sosial"
                                        style="max-height:180px; object-fit:contain;">
                                    <div class="card-body">

                                        <h6 class="card-subtitle mb-2 text-muted">Apa itu Tekanan Sosial?</h6>
                                        <p class="card-text">
                                            Tekanan sosial adalah kondisi ketika seseorang merasa terpaksa menyesuaikan
                                            diri dengan standar,
                                            ekspektasi, atau perbandingan dari lingkungan sekitar, terutama di media
                                            sosial.
                                            Hal ini sering menimbulkan rasa tidak puas diri, cemas, dan rendah diri.
                                        </p>

                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Penyebab</h6>
                                        <ul>
                                            <li>Perbandingan diri dengan teman atau publik figur di media sosial.</li>
                                            <li>Tuntutan prestasi akademik, pekerjaan, atau penampilan.</li>
                                            <li>Lingkungan pertemanan yang kompetitif atau tidak suportif.</li>
                                        </ul>

                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Dampak</h6>
                                        <p>
                                            Tekanan sosial dapat menyebabkan overthinking, berkurangnya rasa percaya
                                            diri,
                                            stres berkepanjangan, hingga depresi.
                                            Dalam jangka panjang bisa memengaruhi relasi sosial dan kesehatan mental
                                            secara keseluruhan.
                                        </p>

                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Apa yang Bisa Dilakukan?</h6>
                                        <ul>
                                            <li>Batasi waktu penggunaan media sosial & atur screen time.</li>
                                            <li>Fokus pada perkembangan diri sendiri, bukan hasil orang lain.</li>
                                            <li>Tulis 3 hal yang disyukuri setiap hari untuk meningkatkan rasa positif.
                                            </li>
                                            <li>Cari lingkungan pertemanan yang suportif.</li>
                                        </ul>

                                        <div class="alert alert-info mt-3 mb-0" style="font-size:.9rem;">
                                            <b>Catatan:</b> Tidak ada standar "sempurna" yang harus dipenuhi.
                                            Setiap orang punya jalannya masing-masing.
                                        </div>

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
                <div class="modal fade" id="modalTrauma" tabindex="-1" aria-labelledby="labelTrauma" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelTrauma">Trauma Masa Lalu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>

                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/18.png" class="card-img-top p-3" alt="Trauma Masa Lalu"
                                        style="max-height:180px; object-fit:contain;">
                                    <div class="card-body">

                                        <h6 class="card-subtitle mb-2 text-muted">Apa itu Trauma Masa Lalu?</h6>
                                        <p class="card-text">
                                            Trauma masa lalu adalah respons emosional yang mendalam akibat pengalaman
                                            buruk seperti kekerasan,
                                            kecelakaan, kehilangan orang tercinta, atau peristiwa traumatis lainnya.
                                            Trauma bisa muncul kembali dalam bentuk flashback, mimpi buruk, atau rasa
                                            cemas berlebihan.
                                        </p>

                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Dampak</h6>
                                        <p>
                                            Jika tidak ditangani, trauma dapat mengganggu kehidupan sehari-hari,
                                            menyebabkan gangguan tidur,
                                            mudah panik, menarik diri dari lingkungan sosial, hingga gangguan stres
                                            pascatrauma (PTSD).
                                        </p>

                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Apa yang Bisa Dilakukan?</h6>
                                        <ul>
                                            <li>Gunakan teknik <b>grounding 5-4-3-2-1</b> untuk menenangkan diri saat
                                                flashback.</li>
                                            <li>Tulis jurnal emosi 5–10 menit per hari.</li>
                                            <li>Bicarakan pengalaman dengan orang terpercaya atau konselor.</li>
                                            <li>Pertimbangkan terapi profesional berbasis trauma-informed.</li>
                                        </ul>

                                        <div class="alert alert-info mt-3 mb-0" style="font-size:.9rem;">
                                            <b>Catatan:</b> Trauma bukan kelemahan, melainkan respon alami tubuh.
                                            Bantuan profesional sangat disarankan bila gejala makin berat.
                                        </div>

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
                <div class="modal fade" id="modalZat" tabindex="-1" aria-labelledby="labelZat" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelZat">Penyalahgunaan Zat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>

                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/5.webp" class="card-img-top p-3"
                                        alt="Penyalahgunaan Zat" style="max-height:180px; object-fit:contain;">
                                    <div class="card-body">

                                        <h6 class="card-subtitle mb-2 text-muted">Apa itu Penyalahgunaan Zat?</h6>
                                        <p class="card-text">
                                            Penyalahgunaan zat meliputi penggunaan berlebihan atau tidak tepat terhadap
                                            alkohol, narkoba,
                                            atau obat-obatan tertentu yang dapat menyebabkan kerusakan fisik, mental,
                                            dan sosial.
                                        </p>

                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Penyebab</h6>
                                        <ul>
                                            <li>Stres berkepanjangan dan keinginan melarikan diri dari masalah.</li>
                                            <li>Pengaruh pergaulan atau lingkungan sekitar.</li>
                                            <li>Kurangnya kontrol diri dan akses mudah terhadap zat terlarang.</li>
                                        </ul>

                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Dampak</h6>
                                        <p>
                                            Penggunaan zat terlarang dapat memperparah depresi dan kecemasan,
                                            menimbulkan kecanduan,
                                            kerusakan organ tubuh, masalah akademik/pekerjaan, bahkan risiko kematian.
                                        </p>

                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Apa yang Bisa Dilakukan?</h6>
                                        <ul>
                                            <li>Kenali pemicu (situasi/lingkungan) dan hindari.</li>
                                            <li>Minta dukungan sahabat, keluarga, atau komunitas rehabilitasi.</li>
                                            <li>Ikuti program konseling atau rehabilitasi profesional.</li>
                                            <li>Bangun rutinitas sehat sebagai pengganti.</li>
                                        </ul>

                                        <div class="alert alert-info mt-3 mb-0" style="font-size:.9rem;">
                                            <b>Catatan:</b> Ketergantungan adalah masalah medis, bukan sekadar kurang
                                            niat.
                                            Jangan ragu mencari bantuan profesional.
                                        </div>

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
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelLingkungan">Lingkungan Tidak Sehat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>

                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/20.png" class="card-img-top p-3"
                                        alt="Lingkungan Tidak Sehat" style="max-height:180px; object-fit:contain;">
                                    <div class="card-body">

                                        <h6 class="card-subtitle mb-2 text-muted">Apa itu Lingkungan Tidak Sehat?</h6>
                                        <p class="card-text">
                                            Lingkungan tidak sehat adalah kondisi ketika interaksi dalam keluarga,
                                            pertemanan,
                                            atau tempat kerja didominasi oleh sikap toxic seperti manipulasi,
                                            meremehkan,
                                            atau kekerasan verbal/fisik.
                                            Hal ini dapat menggerus rasa aman dan harga diri.
                                        </p>

                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Tanda Lingkungan Tidak Sehat</h6>
                                        <ul>
                                            <li>Sering merasa takut, cemas, atau tidak nyaman saat berinteraksi.</li>
                                            <li>Dikritik atau diremehkan secara berlebihan.</li>
                                            <li>Tidak ada rasa saling menghargai atau mendukung.</li>
                                        </ul>

                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Apa yang Bisa Dilakukan?</h6>
                                        <ul>
                                            <li>Tetapkan batasan (boundaries) yang jelas terhadap orang toxic.</li>
                                            <li>Batasi interaksi dan pilih lingkungan yang suportif.</li>
                                            <li>Cari bantuan bila terjadi kekerasan atau pelecehan.</li>
                                            <li>Fokus pada self-care dan aktivitas positif.</li>
                                        </ul>

                                        <div class="alert alert-info mt-3 mb-0" style="font-size:.9rem;">
                                            <b>Catatan:</b> Anda berhak mendapatkan lingkungan yang aman dan sehat.
                                            Jangan ragu untuk keluar dari lingkungan toxic meskipun sulit.
                                        </div>

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

                <!-- ===== Card Carousel (klik card => buka modal) ===== -->
                <div class="col-xl-8 col-lg-8" id="content-3">
                    <div class="containers">
                        <div class="card-carousel">

                            <!-- Cemas Berlebihan -->
                            <div class="card" id="1" role="button" tabindex="0" data-bs-toggle="modal"
                                data-bs-target="#modalCemas">
                                <div class="image-containers">
                                    <img class="icon-card" src="/assets/img/vector/3.png" alt="cemas">
                                </div>
                                <p>
                                <h6>Cemas Berlebihan</h6>
                                Merasa gelisah, takut, atau khawatir secara berlebihan tanpa alasan jelas.
                                </p>
                            </div>

                            <!-- Gangguan Tidur -->
                            <div class="card" id="2" role="button" tabindex="0" data-bs-toggle="modal"
                                data-bs-target="#modalTidur">
                                <div class="image-containers">
                                    <img class="icon-card" src="/assets/img/vector/7.webp" alt="gangguan tidur">
                                </div>
                                <p>
                                <h6>Gangguan Tidur</h6>
                                Sulit tidur, tidur terlalu sedikit/terlalu lama, atau sering mimpi buruk.
                                </p>
                            </div>

                            <!-- Kehilangan Minat -->
                            <div class="card" id="3" role="button" tabindex="0" data-bs-toggle="modal"
                                data-bs-target="#modalMinat">
                                <div class="image-containers">
                                    <img class="icon-card" src="/assets/img/vector/12.png" alt="kehilangan minat">
                                </div>
                                <p>
                                <h6>Kehilangan Minat</h6>
                                Tidak lagi bersemangat melakukan aktivitas yang biasanya disukai.
                                </p>
                            </div>

                            <!-- Menarik Diri -->
                            <div class="card" id="4" role="button" tabindex="0" data-bs-toggle="modal"
                                data-bs-target="#modalMenarikDiri">
                                <div class="image-containers">
                                    <img class="icon-card" src="/assets/img/vector/16.png" alt="menarik diri">
                                </div>
                                <p>
                                <h6>Menarik Diri</h6>
                                Menghindari interaksi sosial dan merasa ingin sendirian terus-menerus.
                                </p>
                            </div>

                            <!-- Emosi Tidak Stabil -->
                            <div class="card" id="5" role="button" tabindex="0" data-bs-toggle="modal"
                                data-bs-target="#modalEmosi">
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

                <!-- Sedikit CSS agar pointer & gambar modal tidak kebesaran -->
                <style>
                    .card-carousel .card {
                        cursor: pointer;
                    }

                    .modal .card-img-top {
                        max-height: 180px;
                        object-fit: contain;
                        padding: 12px;
                    }
                </style>

                <!-- ===== MODALS (letakkan di akhir body untuk menghindari z-index issues) ===== -->

                <!-- Modal: Cemas Berlebihan -->
                <div class="modal fade" id="modalCemas" tabindex="-1" aria-labelledby="labelCemas" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelCemas">Cemas Berlebihan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/3.png" class="card-img-top" alt="Cemas Berlebihan">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Ringkasan</h6>
                                        <p>
                                            Kecemasan berlebihan ditandai rasa khawatir terus-menerus, gelisah, sulit
                                            tenang, disertai gejala fisik
                                            seperti jantung berdebar atau keringat dingin. Bila berkepanjangan, dapat
                                            mengganggu aktivitas harian.
                                        </p>
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Apa Penyebab Umum?</h6>
                                        <ul>
                                            <li>Overthinking, beban akademik/kerja, atau masalah relasi.</li>
                                            <li>Kebiasaan tidur kurang, konsumsi kafein berlebih.</li>
                                            <li>Riwayat kecemasan dalam keluarga (faktor biologis).</li>
                                        </ul>
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Langkah yang Bisa Dilakukan</h6>
                                        <ul>
                                            <li>Latihan napas 4-7-8 / relaksasi otot progresif 5–10 menit.</li>
                                            <li>Batasi kafein, atur tidur, kurangi paparan stresor.</li>
                                            <li>Ceritakan pada teman/konselor jika mulai mengganggu.</li>
                                        </ul>
                                        <div class="alert alert-info mt-3 mb-0" style="font-size:.9rem;">
                                            <b>Catatan:</b> Cemas itu wajar; cari bantuan bila cemas mengganggu kegiatan
                                            sehari-hari.
                                        </div>
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

                <!-- Modal: Gangguan Tidur -->
                <div class="modal fade" id="modalTidur" tabindex="-1" aria-labelledby="labelTidur" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelTidur">Gangguan Tidur</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/7.webp" class="card-img-top" alt="Gangguan Tidur">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Ringkasan</h6>
                                        <p>
                                            Kesulitan tidur, tidur terlalu singkat/panjang, atau mimpi buruk berulang
                                            dapat memengaruhi emosi,
                                            konsentrasi, dan kesehatan fisik.
                                        </p>
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Kebiasaan yang Memicu</h6>
                                        <ul>
                                            <li>Gadget sebelum tidur, kafein malam hari, pola tidur tidak konsisten.
                                            </li>
                                            <li>Stres, kecemasan, atau lingkungan kamar yang kurang nyaman.</li>
                                        </ul>
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Sleep Hygiene</h6>
                                        <ul>
                                            <li>Jadwal tidur-bangun konsisten, kurangi layar 1 jam sebelum tidur.</li>
                                            <li>Ciptakan kamar gelap/tenang/sejuk; batasi kafein sore-malam.</li>
                                            <li>Ritual relaksasi (mandi hangat, baca buku santai).</li>
                                        </ul>
                                        <div class="alert alert-info mt-3 mb-0" style="font-size:.9rem;">
                                            <b>Catatan:</b> Jika gangguan tidur berlangsung >2 minggu, pertimbangkan
                                            konsultasi.
                                        </div>
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

                <!-- Modal: Kehilangan Minat -->
                <div class="modal fade" id="modalMinat" tabindex="-1" aria-labelledby="labelMinat" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelMinat">Kehilangan Minat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/12.png" class="card-img-top" alt="Kehilangan Minat">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Ringkasan</h6>
                                        <p>
                                            Hilangnya ketertarikan pada aktivitas yang biasanya disukai (anhedonia) bisa
                                            berkaitan dengan stres,
                                            kelelahan, atau gejala depresi.
                                        </p>
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Tanda yang Sering Muncul</h6>
                                        <ul>
                                            <li>Enggan memulai kegiatan, semangat turun, lebih banyak menunda.</li>
                                            <li>Rasa “kosong” atau tidak menikmati hal yang biasanya menyenangkan.</li>
                                        </ul>
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Langkah Pemulihan</h6>
                                        <ul>
                                            <li>Mulai dari langkah kecil (micro-steps) & buat jadwal ringan.</li>
                                            <li>Aktivitas bermakna: olahraga ringan, paparan sinar matahari pagi.</li>
                                            <li>Bicara dengan teman/konselor bila berlangsung lama.</li>
                                        </ul>
                                        <div class="alert alert-info mt-3 mb-0" style="font-size:.9rem;">
                                            <b>Catatan:</b> Validasi perasaanmu—ini bisa ditangani bertahap dengan
                                            dukungan yang tepat.
                                        </div>
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

                <!-- Modal: Menarik Diri -->
                <div class="modal fade" id="modalMenarikDiri" tabindex="-1" aria-labelledby="labelMenarikDiri"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelMenarikDiri">Menarik Diri</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/16.png" class="card-img-top" alt="Menarik Diri">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Ringkasan</h6>
                                        <p>
                                            Cenderung menghindari interaksi sosial karena cemas, lelah mental, atau
                                            pengalaman negatif.
                                            Bila dibiarkan, bisa memperparah kesepian dan mood rendah.
                                        </p>
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Mengapa Terjadi?</h6>
                                        <ul>
                                            <li>Kecewa/trauma relasi, perfeksionisme sosial, overthinking.</li>
                                            <li>Kecemasan sosial, takut dinilai, atau pengalaman di-bully.</li>
                                        </ul>
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Strategi Bertahap</h6>
                                        <ul>
                                            <li>Mulai dari lingkar kecil: satu teman/komunitas yang aman.</li>
                                            <li>Latih keterampilan sosial: role-play, perkenalan singkat.</li>
                                            <li>Atur ekspektasi; fokus pada progres, bukan sempurna.</li>
                                        </ul>
                                        <div class="alert alert-info mt-3 mb-0" style="font-size:.9rem;">
                                            <b>Catatan:</b> Carilah lingkungan suportif dan aman; kamu tidak harus
                                            melewati ini sendirian.
                                        </div>
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

                <!-- Modal: Emosi Tidak Stabil -->
                <div class="modal fade" id="modalEmosi" tabindex="-1" aria-labelledby="labelEmosi" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelEmosi">Emosi Tidak Stabil</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/20.png" class="card-img-top" alt="Emosi Tidak Stabil">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Ringkasan</h6>
                                        <p>
                                            Perubahan emosi mendadak (mudah marah/menangis) bisa dipicu stres, kurang
                                            tidur, masalah hormonal,
                                            atau konflik relasi.
                                        </p>
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Pemicu yang Sering Terjadi</h6>
                                        <ul>
                                            <li>Tidur tidak teratur, pola makan kurang baik.</li>
                                            <li>Tekanan akademik/kerja, konflik interpersonal.</li>
                                        </ul>
                                        <h6 class="card-subtitle mt-3 mb-2 text-muted">Regulasi Emosi</h6>
                                        <ul>
                                            <li>Teknik napas & jeda 10 detik sebelum merespon.</li>
                                            <li>Journaling perasaan; identifikasi pemicu & pola.</li>
                                            <li>Aktivitas penenang: jalan santai, peregangan, doa/meditasi.</li>
                                        </ul>
                                        <div class="alert alert-info mt-3 mb-0" style="font-size:.9rem;">
                                            <b>Catatan:</b> Bila emosi tidak stabil berkepanjangan, konsultasi
                                            profesional dianjurkan.
                                        </div>
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

                        <!-- Tombol trigger modal -->
                        <a href="javascript:void(0)" class="button mt-12 radius-10" data-bs-toggle="modal"
                            data-bs-target="#modalTips">
                            Pelajari Tips Menjaga Mental <i class="lni lni-angle-double-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Modal Tips -->
                <div class="modal fade" id="modalTips" tabindex="-1" aria-labelledby="labelTips" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="labelTips">Tips Menjaga Kesehatan Mental</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/15.png" class="card-img-top p-3" alt="Tips Mental"
                                        style="max-height:180px; object-fit:contain;">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Tips Praktis Sehari-hari</h6>
                                        <ul>
                                            <li><b>Atur pola tidur:</b> tidur cukup & konsisten setiap hari.</li>
                                            <li><b>Olahraga ringan:</b> 15–30 menit aktivitas fisik rutin.</li>
                                            <li><b>Kurangi overthinking:</b> coba teknik napas dalam / meditasi singkat.
                                            </li>
                                            <li><b>Bangun koneksi sosial:</b> jalin komunikasi dengan keluarga/teman.
                                            </li>
                                            <li><b>Tulis jurnal:</b> catat 3 hal positif yang disyukuri setiap hari.
                                            </li>
                                            <li><b>Kelola waktu belajar/kerja:</b> gunakan teknik Pomodoro atau
                                                istirahat terjadwal.</li>
                                            <li><b>Batasi media sosial:</b> atur screen time agar tidak memicu
                                                perbandingan sosial.</li>
                                            <li><b>Minta bantuan:</b> jangan ragu hubungi konselor atau tenaga
                                                profesional bila perlu.</li>
                                        </ul>

                                        <div class="alert alert-success mt-3 mb-0" style="font-size:.9rem;">
                                            <b>Catatan:</b> Menjaga kesehatan mental sama pentingnya dengan menjaga
                                            kesehatan fisik.
                                            Mulai dari langkah kecil setiap hari.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-end">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="konseling" class="about-section pt-10 pb-10" style="background: url('/assets/img/bg3.jpg');">
        <div id="ruang" class="container">
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
                        <a href="https://wa.me/13135550002?s=5" target="_blank" class="button mt-20 radius-10">
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
                            <div class="mt-3 quick-prompts d-flex flex-wrap gap-2" aria-label="Contoh pertanyaan cepat">
                                <span class="badge bg-light text-dark mb-2">“Aku sering overthinking, harus
                                    gimana?”</span>
                                <span class="badge bg-light text-dark mb-2">“Tips biar ga homesick?”</span>
                                <span class="badge bg-light text-dark mb-2">“Cara atur tidur dan stres belajar?”</span>
                                <span class="badge bg-light text-dark mb-2">“Aku pengen curhat.”</span>
                            </div>


                            <!-- CTA -->
                            <div class="d-flex gap-2 flex-wrap">

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
                            <img id="foto-rektor" src="/assets/img/vector/11.png" alt="Ilustrasi Ruang Curhat Si Pental"
                                style="width:100%;height:100%;object-fit:contain;">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="kuesioner" class="about-section pt-10 pb-10 mb-4">
        <div id="cek" class="container">
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
                    <h1 class="mb-25 text-center">Berbagai Jenis Penyakit Kesehatan Mental</h1>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="about-content animate__animated animate__fadeInUp wow d-flex flex-wrap justify-content-center gap-4"
                        data-wow-duration="1.5s">

                        <!-- Loop 16 card -->
                        <!-- 1. Gangguan Depresi -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal1">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/1.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/1.png" class="character" />
                            </div>
                            <p class="h5 m-2">Gangguan Depresi</p>
                        </a>

                        <!-- 2. Gangguan Kecemasan Umum -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal2">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/2.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/2.png" class="character" />
                            </div>
                            <p class="h5 m-2">Kecemasan Umum</p>
                        </a>

                        <!-- 3. Gangguan Bipolar -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal3">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/3.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/3.png" class="character" />
                            </div>
                            <p class="h5 m-2">Gangguan Bipolar</p>
                        </a>

                        <!-- 4. Skizofrenia -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal4">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/4.webp" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/4.webp" class="character" />
                            </div>
                            <p class="h5 m-2">Skizofrenia</p>
                        </a>

                        <!-- 5. PTSD -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal5">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/5.webp" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/5.webp" class="character" />
                            </div>
                            <p class="h5 m-2">PTSD</p>
                        </a>

                        <!-- 6. OCD -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal6">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/6.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/6.png" class="character" />
                            </div>
                            <p class="h5 m-2">OCD</p>
                        </a>

                        <!-- 7. Gangguan Makan -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal7">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/7.webp" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/7.webp" class="character" />
                            </div>
                            <p class="h5 m-2">Gangguan Makan</p>
                        </a>

                        <!-- 8. Fobia Spesifik -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal8">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/8.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/8.png" class="character" />
                            </div>
                            <p class="h5 m-2">Fobia Spesifik</p>
                        </a>

                        <!-- 9. Panic Disorder -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal9">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/9.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/9.png" class="character" />
                            </div>
                            <p class="h5 m-2">Panic Disorder</p>
                        </a>

                        <!-- 10. ADHD -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal10">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/10.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/10.png" class="character" />
                            </div>
                            <p class="h5 m-2">ADHD</p>
                        </a>

                        <!-- 11. Gangguan Kepribadian Ambang -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal11">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/11.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/11.png" class="character" />
                            </div>
                            <p class="h5 m-2">BPD</p>
                        </a>

                        <!-- 12. Autisme -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal12">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/12.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/12.png" class="character" />
                            </div>
                            <p class="h5 m-2">Autisme</p>
                        </a>

                        <!-- 13. Gangguan Tidur -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal13">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/13.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/13.png" class="character" />
                            </div>
                            <p class="h5 m-2">Gangguan Tidur</p>
                        </a>

                        <!-- 14. Demensia -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal14">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/14.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/14.png" class="character" />
                            </div>
                            <p class="h5 m-2">Demensia</p>
                        </a>

                        <!-- 15. Gangguan Psikotik -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal15">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/15.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/15.png" class="character" />
                            </div>
                            <p class="h5 m-2">Gangguan Psikotik</p>
                        </a>

                        <!-- 16. Gangguan Disosiatif -->
                        <a href="javascript:void(0)" class="text-center" data-bs-toggle="modal"
                            data-bs-target="#modal16">
                            <div class="cards">
                                <div class="wrapper">
                                    <img src="/assets/img/vector/16.png" class="cover-image" />
                                </div>
                                <img src="/assets/img/vector/16.png" class="character" />
                            </div>
                            <p class="h5 m-2">Disosiatif</p>
                        </a>

                    </div>
                </div>

                <!-- ====== Modal 1: Gangguan Depresi ====== -->
                <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="label1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label1">Gangguan Depresi (Major Depressive Disorder)</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/1.png" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="Depresi">
                                    <div class="card-body">
                                        <p>Depresi ditandai suasana hati sedih mendalam, kehilangan minat, kelelahan,
                                            dan putus asa selama ≥2 minggu.</p>
                                        <h6 class="text-muted mb-1">Gejala</h6>
                                        <ul class="mb-2">
                                            <li>Mood rendah, anhedonia (kehilangan minat), gangguan tidur/appetit.</li>
                                            <li>Konsentrasi menurun, rasa bersalah, ide bunuh diri (butuh bantuan
                                                darurat).</li>
                                        </ul>
                                        <h6 class="text-muted mb-1">Penanganan</h6>
                                        <ul class="mb-0">
                                            <li>Psikoterapi (CBT/interpersonal), gaya hidup sehat.</li>
                                            <li>Farmakoterapi sesuai resep dokter bila diperlukan.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 2: Gangguan Kecemasan Umum ====== -->
                <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="label2" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label2">Gangguan Kecemasan Umum (GAD)</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/2.png" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="GAD">
                                    <div class="card-body">
                                        <p>Kekhawatiran berlebihan tentang berbagai hal yang sulit dikendalikan,
                                            berlangsung ≥6 bulan.</p>
                                        <h6 class="text-muted mb-1">Gejala</h6>
                                        <ul class="mb-2">
                                            <li>Gelisah, otot tegang, mudah lelah, iritabel.</li>
                                            <li>Gangguan tidur, sulit konsentrasi.</li>
                                        </ul>
                                        <h6 class="text-muted mb-1">Penanganan</h6>
                                        <ul class="mb-0">
                                            <li>CBT, teknik relaksasi/napas, mindfulness.</li>
                                            <li>Obat antiansietas/SSRI sesuai evaluasi dokter.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 3: Gangguan Bipolar ====== -->
                <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="label3" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label3">Gangguan Bipolar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/3.png" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="Bipolar">
                                    <div class="card-body">
                                        <p>Perubahan mood ekstrem antara fase mania/hipomania dan depresi.</p>
                                        <h6 class="text-muted mb-1">Ciri Fase Mania</h6>
                                        <ul class="mb-2">
                                            <li>Sangat berenergi, tidur sedikit, ide berlompatan, perilaku berisiko.
                                            </li>
                                        </ul>
                                        <h6 class="text-muted mb-1">Penanganan</h6>
                                        <ul class="mb-0">
                                            <li>Stabilisator mood, psikoterapi, edukasi keluarga.</li>
                                            <li>Pemantauan ketat oleh profesional.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 4: Skizofrenia ====== -->
                <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="label4" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label4">Skizofrenia</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/4.webp" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="Skizofrenia">
                                    <div class="card-body">
                                        <p>Gangguan psikotik kronik dengan halusinasi, delusi, dan disorganisasi
                                            pikir/perilaku.</p>
                                        <h6 class="text-muted mb-1">Gejala</h6>
                                        <ul class="mb-2">
                                            <li>Halusinasi (seringnya suara), delusi, penarikan sosial.</li>
                                        </ul>
                                        <h6 class="text-muted mb-1">Penanganan</h6>
                                        <ul class="mb-0">
                                            <li>Antipsikotik, rehabilitasi psikososial, dukungan keluarga jangka
                                                panjang.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 5: PTSD ====== -->
                <div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="label5" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label5">Gangguan Stres Pascatrauma (PTSD)</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/5.webp" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="PTSD">
                                    <div class="card-body">
                                        <p>Muncul setelah paparan peristiwa traumatis: flashback, mimpi buruk,
                                            hipervigilans, hindari pemicu.</p>
                                        <h6 class="text-muted mb-1">Dukungan</h6>
                                        <ul class="mb-2">
                                            <li>Terapi berbasis trauma (EMDR/CBT), teknik grounding, dukungan sosial.
                                            </li>
                                        </ul>
                                        <h6 class="text-muted mb-1">Catatan</h6>
                                        <ul class="mb-0">
                                            <li>Evaluasi profesional penting bila gejala menetap/mengganggu fungsi.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 6: OCD ====== -->
                <div class="modal fade" id="modal6" tabindex="-1" aria-labelledby="label6" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label6">Gangguan Obsesif-Kompulsif (OCD)</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/6.png" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="OCD">
                                    <div class="card-body">
                                        <p>Obsesi (pikiran berulang dan mengganggu) + kompulsi (ritual) untuk menurunkan
                                            kecemasan.</p>
                                        <h6 class="text-muted mb-1">Contoh</h6>
                                        <ul class="mb-2">
                                            <li>Takut kuman → cuci tangan berlebihan; cek berulang.</li>
                                        </ul>
                                        <h6 class="text-muted mb-1">Penanganan</h6>
                                        <ul class="mb-0">
                                            <li>CBT-ERP (Exposure & Response Prevention), SSRI sesuai indikasi.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 7: Gangguan Makan ====== -->
                <div class="modal fade" id="modal7" tabindex="-1" aria-labelledby="label7" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label7">Gangguan Makan (Anoreksia/Bulimia/BED)</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/7.webp" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="Gangguan Makan">
                                    <div class="card-body">
                                        <p>Masalah perilaku makan & citra tubuh yang berdampak pada fisik dan
                                            psikologis.</p>
                                        <h6 class="text-muted mb-1">Gejala</h6>
                                        <ul class="mb-2">
                                            <li>Pembatasan ekstrem, makan berlebihan (binge), muntah paksa, rasa
                                                bersalah makan.</li>
                                        </ul>
                                        <h6 class="text-muted mb-1">Penanganan</h6>
                                        <ul class="mb-0">
                                            <li>Terapi gizi + psikoterapi, pemantauan medis, dukungan keluarga.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 8: Fobia Spesifik ====== -->
                <div class="modal fade" id="modal8" tabindex="-1" aria-labelledby="label8" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label8">Fobia Spesifik</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/8.png" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="Fobia Spesifik">
                                    <div class="card-body">
                                        <p>Ketakutan intens pada objek/situasi tertentu (mis. ketinggian, ular, darah) →
                                            hindari berlebihan.</p>
                                        <h6 class="text-muted mb-1">Penanganan</h6>
                                        <ul class="mb-0">
                                            <li>Terapi paparan bertahap, CBT, latihan relaksasi.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 9: Panic Disorder ====== -->
                <div class="modal fade" id="modal9" tabindex="-1" aria-labelledby="label9" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label9">Panic Disorder (Serangan Panik Berulang)</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/9.png" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="Panic Disorder">
                                    <div class="card-body">
                                        <p>Serangan panik mendadak: jantung berdebar, sesak, pusing, takut
                                            mati/kehilangan kendali.</p>
                                        <h6 class="text-muted mb-1">Penanganan</h6>
                                        <ul class="mb-0">
                                            <li>CBT (reframing, paparan sensasi), teknik napas, SSRI/ansiolitik sesuai
                                                indikasi.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 10: ADHD ====== -->
                <div class="modal fade" id="modal10" tabindex="-1" aria-labelledby="label10" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label10">ADHD (Attention-Deficit/Hyperactivity Disorder)
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/10.png" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="ADHD">
                                    <div class="card-body">
                                        <p>Kesulitan fokus, impulsif, dan/atau hiperaktif yang mengganggu fungsi
                                            akademik/sosial.</p>
                                        <h6 class="text-muted mb-1">Dukungan</h6>
                                        <ul class="mb-2">
                                            <li>Psikoedukasi, strategi organisasi/waktu, dukungan sekolah/kampus/kerja.
                                            </li>
                                        </ul>
                                        <h6 class="text-muted mb-1">Terapi</h6>
                                        <ul class="mb-0">
                                            <li>Terapi perilaku; medikasi (stimulan/non-stimulan) sesuai dokter
                                                spesialis.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 11: BPD ====== -->
                <div class="modal fade" id="modal11" tabindex="-1" aria-labelledby="label11" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label11">Gangguan Kepribadian Ambang (Borderline / BPD)</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/11.png" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="BPD">
                                    <div class="card-body">
                                        <p>Ketidakstabilan emosi, relasi, self-image, impulsivitas; sensitif terhadap
                                            penolakan/perpisahan.</p>
                                        <h6 class="text-muted mb-1">Pendekatan</h6>
                                        <ul class="mb-0">
                                            <li>Terapi DBT/CBT, psikoedukasi, rencana keamanan krisis, dukungan
                                                keluarga.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 12: Autisme (ASD) ====== -->
                <div class="modal fade" id="modal12" tabindex="-1" aria-labelledby="label12" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label12">Autism Spectrum Disorder (ASD)</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/12.png" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="ASD">
                                    <div class="card-body">
                                        <p>Kondisi neurodevelopmental: tantangan komunikasi/interaksi sosial serta pola
                                            minat/perilaku terbatas.</p>
                                        <h6 class="text-muted mb-1">Dukungan</h6>
                                        <ul class="mb-0">
                                            <li>Intervensi dini, terapi okupasi/wicara, dukungan berbasis kekuatan
                                                (strength-based).</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#kuesioner" class="btn btn-light">Cek Kondisi</a><a
                                    href="#konseling" class="btn btn-primary">Konseling</a></div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 13: Gangguan Tidur ====== -->
                <div class="modal fade" id="modal13" tabindex="-1" aria-labelledby="label13" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label13">Gangguan Tidur</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/13.png" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="Gangguan Tidur">
                                    <div class="card-body">
                                        <p>Insomnia/hipersomnia/mimpi buruk yang memengaruhi fungsi siang hari.</p>
                                        <h6 class="text-muted mb-1">Perbaiki Sleep Hygiene</h6>
                                        <ul class="mb-0">
                                            <li>Jadwal tidur konsisten, kurangi layar & kafein malam, lingkungan kamar
                                                nyaman.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#tips" class="btn btn-light">Tips Tidur</a><a
                                    href="#konseling" class="btn btn-primary">Konseling</a></div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 14: Demensia ====== -->
                <div class="modal fade" id="modal14" tabindex="-1" aria-labelledby="label14" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label14">Demensia</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/14.png" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="Demensia">
                                    <div class="card-body">
                                        <p>Penurunan progresif fungsi kognitif (memori, bahasa, pemecahan masalah) yang
                                            mengganggu kemandirian.</p>
                                        <h6 class="text-muted mb-1">Dukungan</h6>
                                        <ul class="mb-0">
                                            <li>Stimulasi kognitif, aktivitas terstruktur, edukasi caregiver, manajemen
                                                medis komorbid.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#konseling" class="btn btn-primary">Konsultasi</a></div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 15: Gangguan Psikotik Lainnya ====== -->
                <div class="modal fade" id="modal15" tabindex="-1" aria-labelledby="label15" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label15">Gangguan Psikotik (Non-Skizofrenia)</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/15.png" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="Gangguan Psikotik">
                                    <div class="card-body">
                                        <p>Episode psikotik singkat/dipicu zat/medis: delusi, halusinasi, disorganisasi.
                                        </p>
                                        <h6 class="text-muted mb-1">Penanganan</h6>
                                        <ul class="mb-0">
                                            <li>Evaluasi medis komprehensif, antipsikotik, eliminasi zat pemicu,
                                                follow-up ketat.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#konseling" class="btn btn-primary">Hubungi Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ====== Modal 16: Gangguan Disosiatif ====== -->
                <div class="modal fade" id="modal16" tabindex="-1" aria-labelledby="label16" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="label16">Gangguan Disosiatif</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0">
                                    <img src="/assets/img/vector/16.png" class="card-img-top p-3"
                                        style="max-height:180px;object-fit:contain" alt="Disosiatif">
                                    <div class="card-body">
                                        <p>Gangguan integrasi kesadaran/identitas/ingatan (mis. depersonalisasi,
                                            derealisasi), sering terkait trauma.</p>
                                        <h6 class="text-muted mb-1">Pendekatan</h6>
                                        <ul class="mb-0">
                                            <li>Terapi berbasis trauma, stabilisasi emosi, teknik grounding, dukungan
                                                sosial aman.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><a href="#konseling" class="btn btn-primary">Konseling</a></div>
                        </div>
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
                <p>Copyright © 2025 <a href="#">Si Pental</a> | Sistem Informasi Pendampingan Kesehatan Mental</p>
            </div>
        </div>
    </footer>



    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- Ganti semua JS bootstrap lama -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

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
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.modal').forEach(function (m) {
                // kalau modal bukan child langsung body, pindahkan
                if (m.parentElement !== document.body) document.body.appendChild(m);
            });
        });
    </script>
    <script>
        document.addEventListener('click', function (e) {
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