<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><a href="index.html"><img style="height: 100px;" src="../../img/logo.png" alt="logo"></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="/team">Team</a></li>
        <li><a class="nav-link scrollto" href="/gallery">Gallery</a></li>
        <li><a class="nav-link scrollto" href="/publications">Publications</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
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