<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>My UINSU</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-beta2.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/lindy-uikit.css" />
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
            <h2>My UINSU</h2>
            <span class="close-btn material-symbols-outlined">close</span>
        </header>
        <ul class="chatbox">
            <li class="chat incoming">
                <span class="material-symbols-outlined">smart_toy</span>
                <p>Halo Sobat UINSU 👋<br />Ada yang bisa kami bantu?</p>
            </li>
        </ul>
        <div class="chat-input">
            <textarea placeholder="Ketik pesan anda disini..." spellcheck="false" required></textarea>
            <span id="send-btn" class="material-symbols-rounded">send</span>
        </div>
    </div>

    <nav id="nav" class="shadow-sm">
        <div class="logo">
            <img src="assets/img/logo.png" alt="">
        </div>
        <ul class="top-nav">
            <li><a class="{{ request()->is('/') ? 'active-nav' : '' }}" onclick="window.location.href='/';">Beranda</a>
            </li>
            <li><a class="{{ request()->is('arsip') ? 'active-nav' : '' }}"
                    onclick="window.location.href='index.html';">Informasi</a></li>
            <li><a class="{{ request()->is('pencarian') ? 'active-nav' : '' }}"
                    onclick="window.location.href='layanan.html';">Layanan</a></li>
            <li><a class="{{ request()->is('unggah') ? 'active-nav' : '' }}"
                    onclick="window.location.href='/dukungan.html';">Dukungan</a></li>

            <li>
                <a class="{{ request()->is('dashboard') ? 'active-nav' : '' }}"
                    onclick="window.location.href='profil.html';">Profil</a>
            </li>

            <li>
                <a onclick="window.location.href='login.html';">Login</a>
            </li>


        </ul>
        <div class="profile">


            <img class="rounded-circle" src="assets/img/account.png" alt="" style="width: 35px; height: 35px;">

        </div>

    </nav>
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
                    <img class="icon-home" src="assets/img/icon-home2.png" alt="">
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
                        <span class="  fs-5 text-dark"> Website & Layanan yang Tersedia Di
                        </span>
                        <div class="image-container">
                            <img id="myuinsu" src="assets/img/myuinsu.png" alt="">
                        </div>

                        </h1>
                        <p>MY UINSU telah menyediakan daftar layanan website yang tersedia untuk anda dan dapat diakses
                            langsung oleh anda tanpa perlu login lagi.</p>
                        <div class="about-counter mt-50 ">
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="single-counter counter-color-2 d-flex wow fadeInUp"
                                        data-wow-duration="1s" data-wow-delay="0.6s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <div class="counter-count">
                                                <div class="counter" id="satisfactionCount">12</div>
                                            </div>
                                            <p class="text">Website Untuk Anda</p>
                                        </div>
                                    </div> <!-- single counter -->
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
                        <img src="assets/img/gedung.png" alt="" class="wave-animation-2">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang" class="about-section pt-50 pb-50">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12 col-lg-12 ">
                    <div class="text-center text-lg-right animate__animated animate__fadeInUp wow"
                        data-wow-duration="1s">
                        <h2 class="mb-15  ">Aplikasi Layanan Untuk Mahasiswa</h2>
                        
                    </div>
                </div>
                <div class="row justify-content-center mt-10 mb-10">
                    <div class="col-lg-4 col-md-6 col-sm-12 animate__animated animate__fadeInUp wow"
                    data-wow-duration="1s">
                        <div class="search-box active">
                            <input type="text" placeholder="Cari Website.." class="active">
                            <div class="search-icon active">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="cancel-icon active">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="search-data"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                    <div class="card-layanan animate__animated animate__fadeInUp wow" data-wow-duration="1.1s">
                        <h4>Portal SIA</h4>
                        <h3><i class="bi bi-gear"></i></h3>
                        <p>Menangani Sistem Informasi Akademik Dosen dan Mahasiswa UINSU</p>
                        <a href="https://portalsia.uinsu.ac.id " target="_blank" class="btn-card mt-2">Kunjungi
                            <i class="lni lni-angle-double-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                    <div class="card-layanan animate__animated animate__fadeInUp wow" data-wow-duration="1.2s">
                        <h4>SI-PMB</h4>
                        <h3><i class="bi bi-person-bounding-box"></i></h3>
                        <p>Menangani Sistem Informasi Penerimaan Mahasiswa Baru UIN Sumatera Utara</p>
                        <a href="https://sipmb.uinsu.ac.id " target="_blank" class="btn-card mt-2">Kunjungi <i
                                class="lni lni-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                    <div class="card-layanan animate__animated animate__fadeInUp wow" data-wow-duration="1.3s">
                        <h4>SI-MABA</h4>
                        <h3><i class="bi bi-person-standing"></i></h3>
                        <p>Menangani Sistem Informasi Daftar Ulang Mahasiswa Baru UIN Sumatera Utara</p>
                        <a href="https://maba.uinsu.ac.id " target="_blank" class="btn-card mt-2">Kunjungi <i
                                class="lni lni-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                    <div class="card-layanan animate__animated animate__fadeInUp wow" data-wow-duration="1.4s">
                        <h4>SI-SELMA</h4>
                        <h3><i class="bi bi-person-circle"></i></h3>
                        <p>Menangani Sistem Informasi Surat Elektronik Mahasiswa UIN Sumatera Utara</p>
                        <a href="https:// .uinsu.ac.id " target="_blank" class="btn-card mt-2">Kunjungi <i
                                class="lni lni-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                    <div class="card-layanan animate__animated animate__fadeInUp wow" data-wow-duration="1.5s">
                        <h4>SI-LIANA</h4>
                        <h3><i class="bi bi-check2-all"></i></h3>
                        <p>Menangani Sistem Informasi Kuliah Kerja Nyata UIN Sumatera Utara</p>
                        <a href="https://siselma.uinsu.ac.id " target="_blank" class="btn-card mt-2">Kunjungi <i
                                class="lni lni-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                    <div class="card-layanan animate__animated animate__fadeInUp wow" data-wow-duration="1.6s">
                        <h4>E-LEARNING</h4>
                        <h3><i class="bi bi-mortarboard-fill"></i></h3>
                        <p>Menangani Sistem Informasi Pembelajaran Online UIN Sumatera Utara</p>
                        <a href="https://elearning.uinsu.ac.id " target="_blank" class="btn-card mt-2">Kunjungi
                            <i class="lni lni-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                    <div class="card-layanan animate__animated animate__fadeInUp wow" data-wow-duration="1.7s">

                        <h4>SI-JURNAL</h4>
                        <h3><i class="bi bi-journals"></i></h3>
                        <p>Menangani Tentang Sistem Informasi Jurnal UIN Sumatera Utara</p>
                        <a href="https://sijurnal.uinsu.ac.id " target="_blank" class="btn-card mt-2">Kunjungi
                            <i class="lni lni-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xl-3">
                    <div class="card-layanan animate__animated animate__fadeInUp wow" data-wow-duration="1.8s">
                        <h4>SI-LIBRARY</h4>
                        <h3><i class="bi bi-book-half"></i></h3>
                        <p>Menangani Website Perpustakaan UIN Sumatera Utara</p>
                        <a href="https://silibrary.uinsu.ac.id " target="_blank" class="btn-card mt-2">Kunjungi
                            <i class="lni lni-angle-double-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="pricing" class="pricing-section pricing-style-4 " style="background: url('assets/img/bg2.jpg');">
        <div class="container content">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title mb-60 animate__animated animate__fadeInUp wow" data-wow-duration="1.5s">
                        <h3 class="mb-15  ">Aplikasi Layanan Lainnya</h3>
                        <p class=" ">UIN Sumatera Utara Memiliki Banyak Layanan Aplikasi
                            Dalam Mengelola dan Memanajemen Sistem Yang Ada Dikampus</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="pricing-active-wrapper  animate__animated animate__fadeInUp wow"
                        data-wow-duration="1.5s">
                        <div class="pricing-active">
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>Portal SIA</h4>
                                    <h3><i class="bi bi-gear"></i></h3>
                                    <p>Menangani Sistem Informasi Akademik Dosen dan Mahasiswa UINSU</p>
                                    <a href="https://portalsia.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>SI-PMB</h4>
                                    <h3><i class="bi bi-person-bounding-box"></i></h3>
                                    <p>Menangani Sistem Informasi Penerimaan Mahasiswa Baru UIN Sumatera Utara</p>
                                    <a href="https://sipmb.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>SI-MABA</h4>
                                    <h3><i class="bi bi-person-standing"></i></h3>
                                    <p>Menangani Sistem Informasi Daftar Ulang Mahasiswa Baru UIN Sumatera Utara</p>
                                    <a href="https://maba.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>SI-SELMA</h4>
                                    <h3><i class="bi bi-person-circle"></i></h3>
                                    <p>Menangani Sistem Informasi Surat Elektronik Mahasiswa UIN Sumatera Utara</p>
                                    <a href="https:// .uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>SI-LIANA</h4>
                                    <h3><i class="bi bi-check2-all"></i></h3>
                                    <p>Menangani Sistem Informasi Kuliah Kerja Nyata UIN Sumatera Utara</p>
                                    <a href="https://siselma.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>E-LEARNING</h4>
                                    <h3><i class="bi bi-mortarboard-fill"></i></h3>
                                    <p>Menangani Sistem Informasi Pembelajaran Online UIN Sumatera Utara</p>
                                    <a href="https://elearning.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>SI-JURNAL</h4>
                                    <h3><i class="bi bi-journals"></i></h3>
                                    <p>Menangani Tentang Sistem Informasi Jurnal UIN Sumatera Utara</p>
                                    <a href="https://sijurnal.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>SI-LIBRARY</h4>
                                    <h3><i class="bi bi-book-half"></i></h3>
                                    <p>Menangani Website Perpustakaan UIN Sumatera Utara</p>
                                    <a href="https://silibrary.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>REPOSITORY</h4>
                                    <h3><i class="bi bi-bookmarks-fill"></i></h3>
                                    <p>Menangani Sistem Informasi My UIN Sumatera Utara</p>
                                    <a href="https://repository.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>SI-PUSAKA</h4>
                                    <h3><i class="bi bi-chat-square-dots-fill"></i></h3>
                                    <p>Menangani Sistem Informasi Pengajuan Surat Bebas Pustaka UIN Sumatera Utara</p>
                                    <a href="https://sipusaka.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>SI-RASIDA</h4>
                                    <h3><i class="bi bi-mortarboard"></i></h3>
                                    <p>Menangani Sistem Informasi Pendaftaran Sidang dan Wisuda UINSU</p>
                                    <a href="https://sirasida.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>SI-KIP</h4>
                                    <h3><i class="bi bi-person-vcard-fill"></i></h3>
                                    <p>Menangani Sistem Informasi Penjaringan Beasiswa KIP UIN Sumatera Utara</p>
                                    <a href="https://kip.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>UMM</h4>
                                    <h3><i class="bi bi-pencil-square"></i></h3>
                                    <p>Menangani Sistem Informasi Ujian Masuk Mandiri Online UIN Sumatera Utara</p>
                                    <a href="https://umm.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>SI-DAHLIA</h4>
                                    <h3><i class="bi bi-info-circle-fill"></i></h3>
                                    <p>Menangani Sistem Informasi Daftar Hadir Kuliah UIN Sumatera Utara</p>
                                    <a href="https://.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>SI-BEDJO</h4>
                                    <h3<i class="bi bi-person-video3"></i></h3>
                                        <p>Menangani Sistem Informasi Beban Kinerja Dosen UIN Sumatera Utara</p>
                                        <a href="https://sibedjo.uinsu.ac.id " target="_blank"
                                            class="button radius-30 mt-2">Kunjungi <i
                                                class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>SI-RALINE</h4>
                                    <h3><i class="bi bi-person-check"></i></h3>
                                    <p>Menangani Sistem Informasi Presensi Online UIN Sumatera Utara</p>
                                    <a href="https://siraline.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="single-pricing-wrapper">
                                <div class="single-pricing">
                                    <h4>LKP</h4>
                                    <h3><i class="bi bi-person-fill-gear"></i></h3>
                                    <p>Menangani Sistem Informasi Laporan Kinerja UIN Sumatera Utara</p>
                                    <a href="https://lkp.uinsu.ac.id " target="_blank"
                                        class="button radius-30 mt-2">Kunjungi <i
                                            class="lni lni-angle-double-right"></i></a>
                                </div>
                            </div>

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
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget">
                            <div class="logo mb-35">
                                <a href="index.html"> <img src="assets/img/logo.png" width="200px" alt=""> </a>
                            </div>
                            <p class="desc mb-35">UIN Sumatera Utara memiliki 8 Fakultas dan 1 Program Pascasarjana.
                                UINSU adalah kampus islam yang memiliki moto “Smart Islamic University”</p>
                            <ul class="socials">
                                <li>
                                    <a href="https://www.facebook.com/uinsuofficial/"> <i
                                            class="lni lni-facebook-filled"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/UINSumutMedan"> <i class="lni lni-twitter-filled"></i>
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


    <script src="assets/js/bootstrap-5.0.0-beta2.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="assets/js/chatbot.js"></script>
    <script src="assets/js/card.js"></script>
    <script src="assets/js/main.js"></script>
    


</body>

</html>