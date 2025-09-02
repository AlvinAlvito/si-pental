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


        <div data-bs-toggle="modal" data-bs-target="#loginModal" class="profile">


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
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <img class="icon-home" src="/assets/img/icon-home2.png" alt="">
                </a>
            </li>

            <li>
                <a href="javascript:void(0)" onclick="window.location.href='/questioner'">
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
                        <span class="fs-5 text-dark">Profil Pendiri SI-PENTAL</span>
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
                    <h1 class="mb-25 mt-5">Profil SI-Pental</h1>

                    <section id="tentang" class="about-section pt-50 pb-50">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-4 order-1" id="content-1">
                                    <div class="about-img text-lg-right animate__animated animate__fadeInUp wow"
                                        data-wow-duration="1.5s">
                                        <div class="image-container">
                                            <img id="foto-rektor" src="/images/uinsu.jpg" alt=""
                                                style="width:100%;height:100%;object-fit:contain;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8" id="content-2">
                                    <div id="#informasi" class="about-content animate__animated animate__fadeInUp wow"
                                        data-wow-duration="1.5s">
                                        <div class="section-title">
                                            <h1 class="mb-25">UIN Sumatera Utara</h1>
                                            <p>
                                                Universitas Islam Negeri Sumatera Utara (UIN-SU) Medan adalah perguruan tinggi Islam negeri yang berdiri sejak 1973 dan resmi bertransformasi menjadi universitas pada tahun 2014. Berlokasi di Kota Medan, UIN-SU mengembangkan pendidikan tinggi yang memadukan ilmu keislaman, sains, teknologi, dan sosial-humaniora. Dengan delapan fakultas serta program pascasarjana, UIN-SU berkomitmen melahirkan lulusan unggul, berkarakter, dan berdaya saing di tingkat nasional maupun internasional.
                                            </p>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>

                    <section id="tentang" class="about-section pt-50 pb-50">
                        <div class="container">
                            <div class="row align-items-center">
                                
                                <div class="col-xl-8 col-lg-8" id="content-2">
                                    <div id="#informasi" class="about-content animate__animated animate__fadeInUp wow"
                                        data-wow-duration="1.5s">
                                        <div class="section-title">
                                            <h1 class="mb-25">Abdul Aziz Rusman, Lc., M.Si., Ph.D</h1>
                                            <p>
                                                Abdul Aziz Rusman, Lc., M.Si., Ph.D adalah akademisi sekaligus dosen pada Program Studi Pendidikan Profesi Guru di Fakultas Ilmu Tarbiyah dan Keguruan, Universitas Islam Negeri Sumatera Utara (UIN Sumut) Medan. Ia menjabat sebagai Lektor Kepala (Golongan IV/a). Dengan gelar sarjana pada bidang ilmu Islam (Lc.), dilanjutkan dengan gelar Master (M.Si.) dan gelar Doktor (Ph.D.), beliau memiliki kompetensi dalam pendidikan dan pengembangan profesional guru. Saat ini, Abdul Aziz Rusman mengambil peran penting dalam menyelenggarakan Program Profesi Guru (PPG) di UIN Sumut, berkontribusi dalam meningkatkan kualitas kompetensi akademik dan pedagogik calon guru melalui pelatihan dan pengelolaan program-program pendidikan profesi
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 order-1" id="content-1">
                                    <div class="about-img text-lg-right animate__animated animate__fadeInUp wow"
                                        data-wow-duration="1.5s">
                                        <div class="image-container">
                                            <img id="foto-rektor" src="/images/abdul.jpg" alt=""
                                                style="width:120%;height:120%;object-fit:contain;">
                                        </div>
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
                                            <img id="foto-rektor" src="/images/fauziah.jpg" alt=""
                                                style="width:70%;height:70%;object-fit:contain;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8" id="content-2">
                                    <div id="#informasi" class="about-content animate__animated animate__fadeInUp wow"
                                        data-wow-duration="1.5s">
                                        <div class="section-title">
                                            <h1 class="mb-25">Dr. Fauziah Nasution, M.Psi</h1>
                                            <p>
                                               Dr. Fauziah Nasution, M.Psi. merupakan dosen di Universitas Islam Negeri Sumatera Utara (UINSU) Medan, dengan latar belakang pendidikan di bidang Psikologi (M.Psi.). Beliau merupakan akademisi di Program Studi Pendidikan Anak Usia Dini (PIAUD) FITK UINSU Medan dan  Ia aktif terlibat dalam berbagai kegiatan akademik dan pengabdian di lingkungan fakultas, termasuk sebagai fasilitator dalam Program PKDP PTP UINSU Medan yang menekankan pentingnya moderasi beragama, toleransi, dan kebangsaan.
                                            </p>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>

                    <section id="tentang" class="about-section pt-50 pb-50">
                        <div class="container">
                            <div class="row align-items-center">
                                
                                <div class="col-xl-8 col-lg-8" id="content-2">
                                    <div id="#informasi" class="about-content animate__animated animate__fadeInUp wow"
                                        data-wow-duration="1.5s">
                                        <div class="section-title">
                                            <h1 class="mb-25">Fitriani Pramita Gurning, S.K.M., M.Kes</h1>
                                            <p>
                                                Fitriani Pramita Gurning, S.K.M., M.Kes. merupakan dosen Fakultas Kesehatan Masyarakat UIN Sumatera Utara, dengan konsentrasi pada Peminatan Administrasi dan Kebijakan Kesehatan, beliau aktif terlibat dalam berbagai kegiatan akademjk dan pengabdian masyarakat dalam bidang jesehatan masyarakat yang berkonsentrasi dalam masalah kebijakan program kesehatan.
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 order-1" id="content-1">
                                    <div class="about-img text-lg-right animate__animated animate__fadeInUp wow"
                                        data-wow-duration="1.5s">
                                        <div class="image-container">
                                            <img id="foto-rektor" src="/images/fitri.jpg" alt=""
                                                style="width:50%;height:50%;object-fit:contain;">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>


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
