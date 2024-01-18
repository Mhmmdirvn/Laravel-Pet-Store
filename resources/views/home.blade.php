<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
     --}}
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap4.min.css') }}">
    {{-- Aos --}}
    <link rel="stylesheet" href="{{ asset('aos/dist/aos.css') }}">
    {{-- Font Awasome --}}
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.2-web/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.2-web/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.2-web/css/solid.css') }}">
</head>

<body>
    {{-- Header --}}
    <header>
        <nav class="navbar navbar-expand-lg bg-transparent py-4 px-4 navbar-dark mb-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="fa fa-paw me-3"></i>Pets Care</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3 fs-6 ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('tentang') }}">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('adopsi') }}">Adopsi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('aksesoris') }}">Aksesoris</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('hubungi') }}">Hubungi</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
                        <li class="nav-item">
                            <a class="nav-link " href="#">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-light rounded-5 py-2 px-4 fw-semibold" href="#">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    {{-- Header End --}}

    {{-- Jumbotron --}}
    <section class="">
        <div class="jumbotron jumbotron-fluid bg-jumbo text-white" style="margin-top: -140px; padding-bottom: 150px;">
            <div class="container text-center pt-4" style="font-family: 'Poppins', sans-serif;">
                <h1>Temukan Hewan kesayangan Anda Disini</h1>
                <p>Salah satu tempat adopsi hewan terbaik, banyak ragam jenis hewan yang bisa anda pilih <br> Tempat
                    penampungan hewan terbaik sekaligus perawatan hewan terbaik.</p>
            </div>
            <div class="container mt-4 text-center">
                <div class="row">
                    <form>
                        <input type="text"class="form-control mr-auto ml-auto col-md-6 rounded-4 icon-search"
                            placeholder="&#61442;">
                    </form>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <span>Trending Pets</span>
                        <span class="badge badge-light p-1 rounded-3">Anjing</span>
                        <span class="badge badge-light p-1 rounded-3">Kucing</span>
                        <span class="badge badge-light p-1 rounded-3">Hamster</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Jumbotron End --}}

    <section class="my-5">
        <div class="container py-md-5" >
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <div class="position-relative">
                        <h3 class="title-style mb-3">Bagaimana kami dapat membantu Anda dengan baik ?</h3>
                        <div class="title-paw-style">
                            <i class="fa fa-paw"></i>
                            <i class="fa fa-paw paw-2"></i>
                            <i class="fa fa-paw paw-3"></i>
                        </div>
                    </div>
                    <p>Kami melayani perawatan hewan peliharaan agar hewan peliharaan anda selalu sehat dan bugar, tidak
                        hanya perawatan kami juga melayani pembelian aksesoris hewan peliharaan dan lain lain.
                    </p>
                    <a style="font-family: 'Poppins', sans-serif;" href="{{ url('tentang') }}"
                        class="btn btn-success rounded-pill p-3 px-5 mt-2"><b>Lebih banyak</b></a>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-6 grids-1">
                            <h4 class="title-head mt-2 mb-3">Diagnosa</h4>
                            <p>Kami akan memastikan hewan anda sehat dan kami juga lembut ketika proses pemeriksaan.</p>
                        </div>
                        <div class="col-6 grids-1">
                            <h4 class="title-head mt-2 mb-3">Penghargaan</h4>
                            <p>Kami sudah mendapatkan beberapa penghargaan, jadi sudah menjadi pilihan yang tepat datang
                                ke tempat kami.</p>
                        </div>
                        <div class="col-6 grids-1 mt-5">
                            <h4 class="title-head mt-2 mb-3">Perkawinan</h4>
                            <p>Jika anda ingin mengawinkan hewan peliharaan anda, disini sudah disediakan agar hewan
                                anda dapat berkembang biak.</p>
                        </div>
                        <div class="col-6 grids-1 mt-5">
                            <h4 class="title-head mt-2 mb-3">Pelatihan</h4>
                            <p>Disini juga terdapat pelatihan untuk hewan, jadi hewan anda bisa aktif bergerak dan
                                bermain.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Card
    <div class="container-fluid mt-5" style="margin-top: auto">
        <div class="card-deck">
            <div class="card c1 border-0 rounded-4">
                <div class="card-body text-center">
                    <p class="card-text text-white"><strong>Adopsi hewan peliharaan</strong></p>
                </div>
            </div>
            <div class="card c2 border-0 rounded-4">
                <div class="card-body text-center">
                    <p class="card-text text-white"><strong>Perawatan hewan peliharaan</strong></p>
                </div>
            </div>
            <div class="card c3 border-0 rounded-4">
                <div class="card-body text-center">
                    <p class="card-text text-white"><strong>Aksesoris hewan peliharaan</strong></p>
                </div>
            </div>
        </div>
    </div>
    Card End --}}
    {{-- <section class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-5">
                    <div class="card p-4 bg-card" style="background: #f4f4f4; border-radius: 15px;">
                        <div class="card-body">
                            <span class="badge badge-pill badge-info p-3 mb-4">Adopsi hewan mu sendiri ?</span>
                            <h2>Hewan lucu ini ingin tempat tinggal barunya</h2>
                            <p class="py-2">Apakah anda tidak tertarik dengan hewan lucu ini ? <br> mereka ingin
                                tempat tinggal
                                barunya
                                bersama anda </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <div class="card p-4 bg-card" style="background: #f4f4f4; border-radius: 15px;">
                        <div class="card-body">
                            <span class="badge badge-pill badge-success p-3 mb-4 px-4">Hewan anda sakit ?</span>
                            <h2>Bawa hewan manis anda untuk perawatan</h2>
                            <p class="py-2">Tidak hanya adopsi, disini juga mempunyai tempat perawatan khusus untuk
                                hewan yang sakit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    <section class="my-5 py-5">
        <div class="container py-lg-5">
            <div class="row align-items-center">
                <div class="col-lg-7 pe-lg-5 order-lg-first order-last">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    01. Mengapa hewan peliharaan adalah bagian dari hidup kita?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Hewan peliharaan adalah bagian penting dari hidup kita dengan alasan-alasan yang
                                    beragam. Mereka memberikan kebahagiaan, kenyamanan, dan cinta tanpa syarat kepada
                                    pemiliknya. Interaksi dengan hewan peliharaan dapat meredakan stres, meningkatkan
                                    mood, dan mengurangi rasa kesepian. Mereka juga menjadi teman setia yang selalu ada
                                    untuk pemiliknya.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    02. Bagaimana kita merawat hewan peliharaan kita?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ol class="py-1">
                                        <li>Pemberian Makanan yang Tepat: Berikan makanan berkualitas sesuai dengan
                                            jenis hewan Anda, ikuti petunjuk porsi, dan selalu sediakan air segar.</li>
                                        <li>Perawatan Kesehatan Rutin: Jadwalkan kunjungan rutin ke dokter hewan untuk
                                            pemeriksaan, vaksinasi, dan obat-obatan yang dibutuhkan.</li>
                                        <li>Kebersihan: Jaga kebersihan kandang atau tempat tinggal hewan, serta merawat
                                            bulu atau bulu mereka sesuai jenisnya.</li>
                                        <li>Aktivitas dan Latihan: Pastikan hewan Anda mendapatkan cukup latihan fisik
                                            dan mental melalui bermain dan berjalan-jalan.</li>
                                        <li>Pelatihan dan Pendidikan: Latih hewan peliharaan Anda dengan cara yang
                                            positif dan konsisten.</li>
                                        <li>Keamanan: Pastikan lingkungan tempat tinggal aman dan hindari bahaya.</li>
                                        <li>Kasih Sayang dan Perhatian: Berikan cinta dan perhatian yang cukup kepada
                                            hewan peliharaan Anda.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    03. Kenapa harus memilih Pets care?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    kenapa anda harus memilih Pets care? <br>
                                    Tentu kami akan memberikan pelayanan dengan baik, kami juga menyayangi hewan hewan
                                    peliharaan yang lucu.
                                    <br>
                                    <br>
                                    Tentu bukan itu saja yang kami tawarkan, ada banyak program yang kami sediakan salah
                                    satunya:
                                    <ol>
                                        <li>Adopsi hewan</li>
                                        <li>Aksesoris hewan</li>
                                        <li>Diagnosa yang baik</li>
                                        <li>Perkawinan hewan</li>
                                        <li>Pelatihan hewan</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-lg-0 mb-5 order-lg-last order-first">
                    <div class="position-relative">
                        <h3 class="title-style mb-3">Kami bekerja untuk masyarakat</h3>
                        <div class="title-paw-style">
                            <i class="fa fa-paw"></i>
                            <i class="fa fa-paw paw-2"></i>
                            <i class="fa fa-paw paw-3"></i>
                        </div>
                    </div>
                    <p>Kami terbuka untuk semua orang</p>
                    <p class="mt-2 mb-sm-5 mb-4">Kami membantu orang yang memiliki hewan peliharaan yang sedang
                        membutuhkan perawatan.</p>
                    <a href="tel:+(21) 255 999 8888" class="call-style d-flex align-items-center"><i
                            class="fa fa-solid fa-phone me-2"></i> +62 8585 3221 849</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container pb-lg-5 pb-4">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="area-box">
                        <i class="fa fa-hand-holding-heart"></i>
                        <h4><a href="#" class="title-head">Perawatan hewan peliharaan</a></h4>
                        <p>Menjaga kesehatan hewan peliharaan agar tetap sehat dan ceria</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="area-box">
                        <i class="fa fa-paw"></i>
                        <h4><a href="#" class="title-head">Pelatihan hewan peliharaan</a></h4>
                        <p>Pelatihan hewan peliharaan bertujuan agar mereka aktif dalam beraktivitas</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="area-box">
                        <i class="fa fa-dog"></i>
                        <h4><a href="#" class="title-head">Liburan hewan peliharaan</a></h4>
                        <p>Liburan bertujuan agar hewan peliharaan mendapatkan waktu berlibur yang pas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="position-relative">
                        <h3 class="title-style mb-2">Aktivitas dan pengalaman kami</h3>
                        <div class="title-paw-style">
                            <i class="fas fa-paw"></i>
                            <i class="fas fa-paw paw-2"></i>
                            <i class="fas fa-paw paw-3"></i>
                        </div>
                    </div>
                    <p>Kami adalah tim yang memiliki pengalaman yang baik serta jam terbang yang baik dalam perawatan
                        hewan peliharaan.</p>
                    <div class="row mt-4 pt-2">
                        <div class="col-6">
                            <div class="counter color-bg-1">
                                <div class="count-title d-flex align-items-center">
                                    <div class="timer count-number">630</div>
                                    <span class="ms-2">+</span>
                                </div>
                                <p class="count-text">Klien puas</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="counter color-bg-2">
                                <div class="count-title d-flex align-items-center">
                                    <div class="timer count-number">80</div>
                                    <span class="ms-2">+</span>
                                </div>
                                <p class="count-text">profesional</p>
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <div class="counter color-bg-3">
                                <div class="count-title d-flex align-items-center">
                                    <div class="timer count-number">820</div>
                                    <span class="ms-2">+</span>
                                </div>
                                <p class="count-text">hewan diadopsi</p>
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <div class="counter color-bg-4">
                                <div class="count-title d-flex align-items-center">
                                    <div class="timer count-number">90</div>
                                    <span class="ms-2">+</span>
                                </div>
                                <p class="count-text">Penghargaan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 ps-xl-0 mt-lg-0 mt-5">
                    <img src="{{ asset('images/about1.jpg') }}" class="img-fluid rounded-4" alt=""
                        data-aos="fade-left">
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 py-3 blog-sec">
        <div class="container py-md-5 py-4">
            <div class="position-relative mb-lg-5 mb-4">
                <h3 class="title-style mb-2 text-center">Postingan Terbaru</h3>
                <div class="title-paw-style">
                    <i class="fas fa-paw"></i>
                    <i class="fas fa-paw paw-2"></i>
                    <i class="fas fa-paw paw-3"></i>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 grids5-info">
                    <a href="#blog"><img src="{{ url('images/blog1.jpg') }}" alt=""
                            class="img-fluid radius-image" /></a>
                    <div class="blog-info-grid">
                        <h5><span class="fa fa-clock-o"></span> 06 Nov 2023</h5>
                        <h4><a href="#blog">Hewan peliharaan dapat menyelamatkan Anda dari kesepian</a></h4>
                        <div class="blog-info mt-3">
                            <a href="#read">Selengkapnya <span class="fa fa-arrow-right ms-1"></span></a>
                            <a href="#comments"><span class="fa fa-comment-o"></span> 3 Komentar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids5-info mt-md-0 mt-5">
                    <a href="#blog"><img src="{{ url('images/blog2.jpg') }}" alt=""
                            class="img-fluid radius-image" /></a>
                    <div class="blog-info-grid">
                        <h5><span class="fa fa-clock-o"></span> 07 Nov 2023</h5>
                        <h4><a href="#blog">Bagaimana cara menjalin ikatan dengan peliharaan baru
                                Anda? </a></h4>
                        <div class="blog-info mt-3">
                            <a href="#read">Selengkapnya <span class="fa fa-arrow-right ms-1"></span></a>
                            <a href="#comments"><span class="fa fa-comment-o"></span> 3 Komentar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids5-info mt-lg-0 mt-5">
                    <a href="#blog"><img src="{{ url('images/blog3.jpg') }}" alt=""
                            class="img-fluid radius-image" /></a>
                    <div class="blog-info-grid">
                        <h5><span class="fa fa-clock-o"></span> 08 Nov 2023</h5>
                        <h4><a href="#blog">Apa yang terjadi jika seekor anjing tidak diadopsi?</a></h4>
                        <div class="blog-info mt-3">
                            <a href="#read">Selengkapnya <span class="fa fa-arrow-right ms-1"></span></a>
                            <a href="#comments"><span class="fa fa-comment-o"></span> 3 Komentar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-lg-6 homeaboutblock order-lg-first order-last">
                    <div class="position-relative img-border">
                        <img src="{{ asset('images/home.jpg') }}" class="img-fluid rounded-4" alt="happy_pets"
                            data-aos="fade-right">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5 mb-lg-0 mb-5 order-lg-last order-first">
                    <div class="position-relative">
                        <h3 class="title-style mb-3">Kami memastikan hewan anda senang</h3>
                        <div class="title-paw-style">
                            <i class="fa fa-paw"></i>
                            <i class="fa fa-paw paw-2"></i>
                            <i class="fa fa-paw paw-3"></i>
                        </div>
                    </div>
                    <p>Kami akan membuat hewan peliharaan anda benar benar senang.</p>
                    <div class="mt-4">
                        <ul class="service-list">
                            <li class="service-link"><a href="{{ url('tentang') }} "><i
                                        class="fa fa-check-circle"></i>Perawat bersertifikat</a></li>
                            <li class="service-link"><a href="{{ url('tentang') }} "><i
                                        class="fa fa-check-circle"></i>20 tahun pengalaman</a></li>
                            <li class="service-link"><a href="{{ url('tentang') }} "><i
                                        class="fa fa-check-circle"></i>Penyayang Hewan</a>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ url('tentang') }}" class="btn btn-success rounded-pill p-3 px-5 mt-2"
                        style="font-family: 'Poppins', sans-serif;"><b>Selengkapnya</b></a>
                </div>
            </div>
        </div>
    </section>





    {{-- Footer --}}
    <footer class="text-white">
        <div class="shape-footer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
                <path fill-opacity="1" fill="#131917">
                    <animate attributeName="d" dur="20000ms" repeatCount="indefinite"
                        values="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,197.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;												 M0,64L48,74.7C96,85,192,107,288,133.3C384,160,480,192,576,170.7C672,149,768,75,864,80C960,85,1056,171,1152,181.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
                                             M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;" />

                </path>
            </svg>
        </div>
        <div class="footer-color py-5">
            <div class="container">
                <div class="row footer-p">
                    <div class="col-lg-4 pe-lg-5">
                        <h3>Tentang Kami</h3>
                        <p class="mt-3">Ikuti kami dengan cara pantau terus hal-hal baru di sosial media kami. <br>
                            Jangan lupa follow ya agar staytune dengan hal-hal baru dari kami!!</p>
                        <div class="columns-2 mt-lg-5 mt-4">
                            <ul class="social">
                                <li><a href="#facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="#twitter"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li><a href="#google"><i class="fa-brands fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-5">
                        <div class="row">
                            <div class="col-6 column">
                                <h3>Kontak info</h3>
                                <ul class="footer-contact-list">
                                    <li class="">Alastengah Besuk Probolinggo Jawa Timur</li>
                                    <li class="mt-2"><a href="#">+6285853221849</a></li>
                                    <li class="mt-2"><a href="#">petscare@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-8 column mt-lg-0 mt-4 pl-xl-0">
                        <h3>Berlangganan</h3>
                        <div class="end-column">
                            <form action="#" class="subscribe" method="post" style="display: flex">
                                <input type="email" name="email" placeholder="Masukkan email" required="">
                                <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                            </form>
                            <p class="mt-4">Berlangganan ke milis kami dan dapatkan pembaruan di kotak masuk email
                                Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="below-section text-center pt-lg-4 mt-5">
                    <p class="copy-text">&copy; 2023 Design by Muhammad Irvan
                    </p>
                </div>
            </div>
        </div>
    </footer>
    {{-- Footer End --}}



    {{-- Bootstrap Js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- Bootstrap Js End --}}

    {{-- AOS --}}
    <script src="{{ asset('aos/dist/aos.js') }}"></script>
    <script>
        AOS.init({
            once: true,
            duration: 2000,
        });
    </script>
    {{-- AOS End --}}
</body>

</html>
