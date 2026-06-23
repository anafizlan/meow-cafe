<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Meow Cafe ☕</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,80OTHING:ital,wght@0,1００;０,２００;０,３００;０,４００;０,５００;０,６００;０,７００;０,８００;０,９００;１,１００;１,２００;１,３００;１,４００;１,５００;１,６００;１,７００;１,８０₀;１,９₀₀&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Nova
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="services-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Meow Cafe ☕</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/home') }}">Home<br></a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/services') }}" class="active">Services</a></li>
                    <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ url('/team') }}">Team</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>

                    @if (Auth::check())
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger" style="margin-top: 10px; margin-bottom: 10px;">
                                Logout
                            </button>
                        </form>
                    @else
                        <button type="button" class="btn btn-secondary" style="margin-top: 10px; margin-bottom: 10px;" onclick="window.location.href='/'">
                            Back
                        </button>
                    @endif
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/services1-page-title-bg.jpg') }});">
            <div class="container">
                <h1>Services</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li class="current">Services</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Services</h2>

            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">

                        <div>
                            <h4 class="title">{{ $service->service1_title }}</h4>
                            <p class="description">{{ $service->service1_desc }}</p>
                            <a href="/services/cat-grooming" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div>
                            <h4 class="title">{{ $service->service2_title }}</h4>
                            <p class="description">{{ $service->service2_desc }}</p>
                            <a href="/services/cat-adoption" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div>
                            <h4 class="title">{{ $service->service3_title }}</h4>
                            <p class="description">{{ $service->service3_desc }}</p>
                            <a href="/services/cat-hotel" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div>
                            <h4 class="title">{{ $service->service4_title }}</h4>
                            <p class="description">{{ $service->service4_desc }}</p>
                            <a href="/services/cat-playroom" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">

                        <div>
                            <h4 class="title">{{ $service->service5_title }}</h4>
                            <p class="description">{{ $service->service5_desc }}</p>
                            <a href="/services/vet-consultation" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div>
                            <h4 class="title">{{ $service->service6_title }}</h4>
                            <p class="description">{{ $service->service6_desc }}</p>
                            <a href="/services/cat-birthday-party" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>
            </div>

        </section><!-- /Services Section -->

        <!-- Service Cards Section -->
        <section id="service-cards" class="service-cards section">

            <div class="container-fluid">

                <div class="row gy-4">

                    @if ($service->service_img1 && $service->service1_title && $service->service_info1)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="post-img">
                                            <img src="{{ asset('assets/img/' . $service->service_img1) }}" class="img-fluid" alt=""></div>
                                    </div>

                                    <div class="col-xl-7 d-flex align-items-center">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $service->service1_title }}</h4>
                                            <p>{{ $service->service_info1 }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                    @if ($service->service_img2 && $service->service2_title && $service->service_info2)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="post-img">
                                            <img src="{{ asset('assets/img/' . $service->service_img2) }}" class="img-fluid" alt=""></div>
                                    </div>
                                    <div class="col-xl-7 d-flex align-items-center">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $service->service2_title }}</h4>
                                            <p>{{ $service->service_info2 }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                    @if ($service->service_img3 && $service->service3_title && $service->service_info3)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="post-img">
                                            <img src="{{ asset('assets/img/' . $service->service_img3) }}" class="img-fluid" alt=""></div>
                                    </div>
                                    <div class="col-xl-7 d-flex align-items-center">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $service->service3_title }} </h4>
                                            <p>{{ $service->service_info3 }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                    @if ($service->service_img4 && $service->service4_title && $service->service_info4)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="post-img">
                                            <img src="{{ asset('assets/img/' . $service->service_img4) }}" class="img-fluid" alt=""></div>
                                    </div>
                                    <div class="col-xl-7 d-flex align-items-center">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $service->service4_title }}</h4>
                                            <p>{{ $service->service_info4 }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                    @if ($service->service_img5 && $service->service5_title && $service->service_info5)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="post-img">
                                            <img src="{{ asset('assets/img/' . $service->service_img5) }}" class="img-fluid" alt=""></div>
                                    </div>
                                    <div class="col-xl-7 d-flex align-items-center">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $service->service5_title }}</h4>
                                            <p>{{ $service->service_info5 }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($service->service_img6 || $service->service_info6)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="post-img">
                                            <img src="{{ asset('assets/img/' . $service->service_img6) }}" class="img-fluid" alt=""></div>
                                    </div>
                                    <div class="col-xl-7 d-flex align-items-center">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $service->service6_title }}</h4>
                                            <p>{{ $service->service_info6 }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>

        </section><!-- /Service Cards Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>

            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    {{ $service->test_desc1 }}
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('assets/img/' . $service->test_img1) }}" class="testimonial-img" alt="">
                                    <h3>{{ $service->test_name1 }}</h3>
                                    <h4>{{ $service->test_pos1 }}</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    {{ $service->test_desc2 }}
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('assets/img/' . $service->test_img2) }}" class="testimonial-img" alt="">
                                    <h3>{{ $service->test_name2 }}</h3>
                                    <h4>{{ $service->test_pos2 }}</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    {{ $service->test_desc3 }}
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('assets/img/' . $service->test_img3) }}" class="testimonial-img" alt="">
                                    <h3>{{ $service->test_name3 }}</h3>
                                    <h4>{{ $service->test_pos3 }}</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    {{ $service->test_desc4 }}
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('assets/img/' . $service->test_img4) }}" class="testimonial-img" alt="">
                                    <h3>{{ $service->test_name4 }}</h3>
                                    <h4>{{ $service->test_pos4 }}</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    {{ $service->test_desc5 }}
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('assets/img/' . $service->test_img5) }}" class="testimonial-img" alt="">
                                    <h3>{{ $service->test_name5 }}</h3>
                                    <h4>{{ $service->test_pos5 }}</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

    </main>

    <footer id="footer" class="footer light-background">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">{{ $footer->site_name }}</span>
                        </a>
                        <p>{{ $footer->about_text }}</p>
                        <div class="social-links d-flex mt-4">
                            <a href="{{ $footer->twitter }}">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a href="{{ $footer->facebook }}">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="{{ $footer->instagram }}">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="{{ $footer->linkedin }}">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About us</a></li>
                            <li><a href="/services">Services</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="/services/cat-grooming">Cat Grooming</a></li>
                            <li><a href="/services/cat-adoption">Cat Adoption</a></li>
                            <li><a href="/services/cat-hotel">Cat Hotel</a></li>
                            <li><a href="/services/cat-playroom">Cat Playroom</a></li>
                            <li><a href="/services/vet-consultation">Vet Consultation</a></li>
                            <li><a href="/services/cat-birthday-party">Cat Birthday Party</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>{{ $footer->address }}</p>
                        <p class="mt-4"><strong>Phone:</strong> <span>{{ $footer->phone }}</span></p>
                        <p><strong>Email:</strong> <span>{{ $footer->email }}</span></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container copyright text-center">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">{{ $footer->site_name }}</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> | <a href="https://bootstrapmade.com/tools/">DevTools</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
