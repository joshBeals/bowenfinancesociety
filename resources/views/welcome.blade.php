<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BFS - Home</title>

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

</head>

<body>

    @include('partials.header', ['user' => $user])
    
    @include('partials.hero')

    <main id="main" class="">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Bowen Finance Society</h2>
                    <p>Who are we?</p>
                </div>

                <div class="row mt-5">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="../../img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <h3>Mission</h3>
                    <p>
                    Our mission is to help develop both the technical and soft skills necessary for building a new career in finance.
                    </p>
                    <h3>Vision</h3>
                    <p>To facilitate an environment that fosters learning by integrating industry, academia and alumni whilst refining members to be experts in finance.</p>
                    <h3>Core Values</h3>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Leadership.</li>
                        <li><i class="ri-check-double-line"></i> Discipline.</li>
                        <li><i class="ri-check-double-line"></i> Professionalism.</li>
                        <li><i class="ri-check-double-line"></i> Responsibility.</li>
                        <li><i class="ri-check-double-line"></i> Due-Dilligence.</li>
                    </ul>
                </div>
            </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{ asset('img/clients/img1.jpg') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/clients/img2.png') }}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/clients/img3.png') }}" class="img-fluid" alt=""></div>
                </div>
                <!-- <div class="swiper-pagination"></div> -->
                </div>

            </div>
        </section><!-- End Clients Section -->


        <!-- ======= Desk Section ======= -->
        <section id="desk" class="desk">
            <div class="container" data-aos="fade-up">
                <div class="section-title mt-5 ">
                    <h2>Bowen Finance Society</h2>
                    <p class="text-white">President's desk</p>
                </div>
                <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                    <!-- <i class="bx bx-volume-full" style="font-size: 70px;"></i><br><br> -->
                    <p class="mb-5">
                        “In a world filled with problems and problem drivers, choose to be a solution provider.” This is the ideology that served as the bedrock of the Society and continues to be a true testament of what we stand for. We have risen from the gaps found within our educational system, seeking to be the linking bridge that fills in for these gaps.
                        <br><br>
                        Our story would not be told today without the initiative and bold steps of our founders; daring to see beyond mere eyes could and make a change that would be spoken about from now till eternity. They passed on the baton to the founding executives who then actualized the dream and created a structure to run by. This structure by the grace of God has only gotten better from inception to date.
                        <br><br>
                        We are currently running the race, baton in hand, seeking to develop and improve on every area possible. In the ups and downs that come with service and responsibility, we are thankful for the opportunity to serve and make an impact. This is keeping in mind, our mission to sustain and extend beyond the level of greatness Bowen Finance Society has attained today.
                        <br><br>
                        God bless Bowen Finance Society!
                    </p>
                </div>
            </div>
        </section><!-- End Desk Section -->

            
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Bowen Finance Society</h2>
                <p>What we offer</p>
                </div>

                <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                    <div class="icon"><i class="bx bx-money"></i></div>
                    <h4><a href=""> Finance and Economic skills</a></h4>
                    <p>We help students and individuals gain finance and other economic skills.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                    <div class="icon"><i class="bx bx-news"></i></div>
                    <h4><a href="">Finance Updates</a></h4>
                    <p>Follow us for latest information on issues relating to finance.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                    <div class="icon"><i class="bx bx-network-chart"></i></div>
                    <h4><a href="">Networking Opportunities</a></h4>
                    <p>We offer solid networking opportunities. Join us and be part of an informed community.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                    <div class="icon"><i class="bx bx-briefcase-alt"></i></div>
                    <h4><a href="">Job Postings</a></h4>
                    <p>We provide members with regular job postings (Fulltime, Remote, Internships e.t.c).</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                    <div class="icon"><i class="bx bx-user-voice"></i></div>
                    <h4><a href="">Access to Mentorship</a></h4>
                    <p>We offer solid mentorship opportunities to our members.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                    <div class="icon"><i class="bx bx-shape-circle"></i></div>
                    <h4><a href="">Soft Skills</a></h4>
                    <p>Skills gained as a member is not limited to finance but soft skill trainings are also part of the package.</p>
                    </div>
                </div>

                </div>

            </div>
        </section><!-- End Services Section -->



        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                <h3>Become a Member</h3>
                <p>We are a society comprised of members across various academic disciplines with one thing in common - a passion for finance. Follow this page for job postings, tips, networking opportunities and many more!</p>

                @if($user == null)
                    <p>Already a member?</p>
                        <a class="cta-btn" href="/signin">Sign In</a>
                    </div>
                @endif

            </div>
        </section><!-- End Cta Section -->


        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Team</h2>
                <p>Check our Team</p>
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
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
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
                            <img src="{{ asset('img/team/boy.png') }}" class="img-fluid" alt="">
                            <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
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

                </div>
                <a href="/team">View Complete Team <i class="bi bi-arrow-right-circle-fill"></i></a>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Us</p>
                </div>

                <!-- <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                </div> -->

                <div class="row mt-5">

                <div class="col-lg-4">

                    <div class="info">

                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Bowen University, Iwo, Osun State.</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>bowenfinancesociety@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-linkedin"></i>
                            <h4>LinkedIn:</h4>
                            <p><a href="https://www.linkedin.com/company/bowen-finance-society/">Click Here</a></p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
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
