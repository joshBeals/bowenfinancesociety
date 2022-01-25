@php
use Illuminate\Support\Facades\URL;
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BFS - Team</title>

    <!-- Favicons -->
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" style="background: black;">
        <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="index.html"><img style="height: 100px;" src="../../img/logo.png" alt="logo"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a class="nav-link scrollto" href="/">Home</a></li>
            <li><a class="nav-link scrollto" href="/#about">About</a></li>
            <li><a class="nav-link scrollto active" href="/team">Team</a></li>
            <li><a class="nav-link scrollto" href="/gallery">Gallery</a></li>
            <li><a class="nav-link scrollto" href="/publications">Publications</a></li>
            <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        
        @if($user == null)
        <a href="/signin" class="get-started-btn">Sign In</a>
        @else
        <nav class="navbar1 order-last order-lg-0">
            <ul>
                <li class="dropdown"><a href="#"><span>{{ $user['name'] }}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                    <li><a href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        @endif

        </div>
    </header><!-- End Header -->

    <main id="main" class="" style="padding-top: 150px;">
         <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Team</h2>
                <p>Executive Team</p>
                </div>

                <div class="row">

                <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team1.jpeg') }}" class="img-fluid" alt="">
                            <div class="social">
                            <a href="https://twitter.com/iamEmeruwa"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.instagram.com/emeruwa_emeka/"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/chukwuemeka-emeruwa-065551196/"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Emeka Emeruwa</h4>
                            <span>President</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('img/team/girl.png') }}" class="img-fluid" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href="https://www.instagram.com/xo_stephaniie_"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/stephanie-eze-0b412a214/"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Eze Stephanie</h4>
                            <span>Vice President</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ asset('img/team/img2.jpeg') }}" class="img-fluid" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href="https://www.instagram.com/invites/contact/?i=jeyl0de14j8b&utm_content=4wq0hhx"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/yomi-oshatimi-david-2130171a2"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Yomi-Oshatimi David</h4>
                            <span>General Secretary</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ asset('img/team/boy.png') }}" class="" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Bajowa Adeleke</h4>
                            <span>Attorney General</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('img/team/girl.png') }}" class="img-fluid" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href="https://www.instagram.com/_w.h.u.r.r.a.h_/"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/kolade-omoniwuraola-a0919519b"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Kolade Wuraola</h4>
                            <span>Director of finance</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ asset('img/team/boy.png') }}" class="img-fluid" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href="https://www.instagram.com/ope_joba/"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/opeyemi-oyelakin-31899022a"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Oyelakin Opemipo</h4>
                            <span>Assistant Director of finance</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('img/team/boy.png') }}" class="img-fluid" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Pelumi Ajayi</h4>
                            <span>Director publications</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ asset('img/team/girl.png') }}" class="img-fluid" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Deborah Gorge</h4>
                            <span>Public relations officer</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ asset('img/team/boy.png') }}" class="" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href="https://www.instagram.com/tofarati_a"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/tofarati-alabi-3b723421b/"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Tofarati Alabi</h4>
                            <span>Careers in Finance</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('img/team/boy.png') }}" class="img-fluid" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/ajayi-ebunoluwa-924b7320b"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Ebun Ajayi</h4>
                            <span>Head of programmes </span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('img/team/boy.png') }}" class="img-fluid" alt="">
                            <div class="social">
                            <a href="https://mobile.twitter.com/jesutomiwaa"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.instagram.com/jesutomiwaa/ "><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/jesutomiwasolomon/"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Jesutomiwa Solomon</h4>
                            <span>Creative Director</span>
                        </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-5">

                    <div class="section-title">
                    <h2>Team</h2>
                    <p>Patrons and Adivisers</p>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team15.jpeg') }}" class="img-fluid" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/oluropo-olugbemi/"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>OLUROPO OLUGBEMI</h4>
                            <span>PATRON</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team14.png') }}" style="height: 300px;" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>ABRAHAM DUROSAWO</h4>
                            <span>PATRON</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team16.png') }}" style="height: 300px;" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>DR. FEMI OLADELE</h4>
                            <span>STAFF ADVISER</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team17.png') }}" style="height: 300px;" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>MISS TEMI AKINSOLA</h4>
                            <span>STAFF ADVISER</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team18.png') }}" style="height: 300px;" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>MR. DAVID OGUNOJO</h4>
                            <span>STAFF ADVISER</span>
                        </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-5">

                    <div class="section-title">
                    <h2>Team</h2>
                    <p>Founders</p>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team19.jpeg') }}" class="img-fluid" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/elim-ishola/"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>ISHOLA ELIM</h4>
                            <span>FOUNDER</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team20.jpeg') }}" style="height: 300px;" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/michealmartins87/"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>MICHAEL MARTINS</h4>
                            <span>FOUNDER</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team21.png') }}" style="height: 300px;" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href="https://instagram.com/btife_e"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/ebunoluwa-ahove/"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>AHOVE EBUNOLUWA</h4>
                            <span>FOUNDER</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team21.jpeg') }}" style="height: 300px;" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/busayoaduloju/"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>ADULOJU BUSAYO</h4>
                            <span>FOUNDER</span>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team23.png') }}" style="height: 300px;" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/moyosore-taiwo/"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>TAIWO MOYOSORE</h4>
                            <span>FOUNDER</span>
                        </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->
    </main><!-- End #main -->

    @include('partials.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
