<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang</title>
    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    {{-- Aos --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{-- Font Awasome --}}
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.2-web/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.2-web/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.2-web/css/solid.css') }}">
</head>

<body>
    {{-- Header --}}
    <header>
        <nav class="navbar navbar-expand-lg bg-transparent py-4 px-4 navbar-dark">
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
                            <a class="nav-link" aria-current="page" href="{{ url('') }}">Beranda</a>
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
                            <a class="nav-link active " href="{{ url('hubungi') }}">Hubungi</a>
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
        <div class="jumbotron jumbotron-fluid bg-jumbo text-white" style="margin-top: -100px; padding-bottom: 230px;">
            <div class="container text-center" style="font-family: 'Poppins', sans-serif;">
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
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill-opacity="1" fill="#fff">
                    <animate attributeName="d" dur="20000ms" repeatCount="indefinite"
                        values="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,197.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;												 M0,64L48,74.7C96,85,192,107,288,133.3C384,160,480,192,576,170.7C672,149,768,75,864,80C960,85,1056,171,1152,181.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
                                                 M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;" />
                </path>
            </svg>
        </div>
    </section>
    {{-- Jumbotron End --}}


    <div class="contact-info pt-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="position-relative">
                <h3 class="title-style text-center mb-sm-5 mb-4">Hubungi Kami</h3>
                <div class="title-paw-style">
                    <i class="fas fa-paw"></i>
                    <i class="fas fa-paw paw-2"></i>
                    <i class="fas fa-paw paw-3"></i>
                </div>
            </div>
            <div class="align-self pt-4">
                <div class="contact-infos">
                    <div class="single-contact-infos">
                        <div class="icon-box"><i class="fas fa-map-marker-alt color-1"></i></div>
                        <div class="text-box">
                            <h3 class="mb-3">Informasi alamat</h3>
                            <p>Coffee bean, 343 cafe coffee lane, #2214 cravel street, NY.</p>
                        </div>
                    </div>
                    <div class="single-contact-infos">
                        <div class="icon-box"><i class="fas fa-clock color-2"></i></div>
                        <div class="text-box">
                            <h3 class="mb-3">Jam buka</h3>
                            <p class=""> Monday – Friday : 9am - 6pm</p>
                            <p class=""> Saturday : 10am - 4pm</p>
                        </div>
                    </div>
                    <div class="single-contact-infos">
                        <div class="icon-box"><i class="fas fa-envelope-open-text color-3"></i></div>
                        <div class="text-box">
                            <h3 class="mb-3">Info kontak</h3>
                            <p class=""><a href="tel:+1(21) 234 4567">+1(21) 234 4567</a></p>
                            <p class=""> <a href="mailto:info@support.com">info@support.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-md-5">
                <div class="col-lg-6 map order-lg-1 order-2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001161.424489281!2d-78.01909140705047!3d42.72866436845163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sin!4v1570786994395!5m2!1sen!2sin"
                        frameborder="0" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-6 form-inner-cont order-lg-2 order-1 mb-lg-0 mb-5 ps-lg-4">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                        <div class="form-input">
                            <input type="text" placeholder="Masukkan nama anda" required>
                        </div>
                        <div class="form-input">
                            <input type="email" placeholder="Masukkan email anda" required="">
                        </div>
                        <div class="form-input">
                            <textarea placeholder="Tulis pesan anda" required=""></textarea>
                        </div>
                        <div class="text-start">
                            <button type="submit" class="btn-style btn-success">Kirim <span><i
                                        class="fa-solid fa-paper-plane me-1"></i></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
</body>

</html>
