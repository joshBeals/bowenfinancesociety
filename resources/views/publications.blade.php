@php
use Illuminate\Support\Facades\URL;
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BFS - Publications</title>

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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
            <li><a class="nav-link scrollto" href="/team">Team</a></li>
            <li><a class="nav-link scrollto" href="/gallery">Gallery</a></li>
            <li><a class="nav-link scrollto active" href="/publications">Publications</a></li>
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
            <!-- ======= About Section ======= -->
            <section>
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Bowen Finance Society</h2>
                        <p>Publications</p>
                    </div>

                    @if ($publications->isEmpty())
                        @include('partials.empty_list', ['message' => 'No Publication Found'])
                    @else
                    <div class="row mt-5">
                        @foreach ($publications as $p)
                            @if($user == null)
                                @if($p->availability == 'free')
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon-box">
                                        <div class="icon mb-3">
                                            <img src="{{ asset('img/pdf.png') }}" alt="pdf" style="width: 60px;">
                                        </div>
                                        <h4><a href="{{ URL::to($p->file_path) }}"> {{ $p->name }}</a></h4>
                                        <p style="padding: 0; padding-bottom: 5px; margin: 0;">{{ $p->category }}</p>
                                        <p style="padding: 0; margin: 0;"><span style="font-weight: bold;">Uploaded</span> {{ $p->created_at->diffForHumans() }}</p>
                                        <div class="badge badge-success">{{ ucfirst($p->availability) }}</div>
                                    </div>
                                </div>
                                @endif
                            @else
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon-box">
                                        <div class="icon mb-3">
                                            <img src="{{ asset('img/pdf.png') }}" alt="pdf" style="width: 60px;">
                                        </div>
                                        <h4><a href="{{ URL::to($p->file_path) }}"> {{ $p->name }}</a></h4>
                                        <p style="padding: 0; padding-bottom: 5px; margin: 0;">{{ $category[$p->category] }}</p>
                                        <p style="padding: 0; margin: 0;">Uploaded: {{ $p->created_at->diffForHumans() }}</p>
                                        <div @if($p->availability == 'free') class="badge badge-success" @else class="badge badge-warning" @endif>{{ ucfirst($p->availability) }}</div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="mt-3 d-flex justify-content-start align-items center">
                        {{ $publications->links("pagination::bootstrap-4") }}
                    </div>
                    @endif


                </div>
            </section><!-- End About Section -->
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
