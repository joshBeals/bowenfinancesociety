<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BFS - Login</title>

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
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>

    <div class="messages">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </div>

    <div class="main">
        <div class="half"></div>
        <div class="content">
            <div class="logo">
                <img src="../../img/logo.png" alt="Logo">
            </div>

            <h2>Sign In</h2>
            <form class="form" method="POST" action="/signin">
                @csrf
                <div class="form-group">
                        <div class="left-side"><img src="img/email.svg" alt="email"></div>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <div class="left-side"><img src="img/password.svg" alt="password"></div>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>   
                        <div class="right-side"><img src="img/eye.svg" id="password-icon" alt="password" onclick="tooglePassword()"></div>
                    </div>
                    <div class="form-group">
                        <a href="/forgot-password" class="hyperlink">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>

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
<script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>