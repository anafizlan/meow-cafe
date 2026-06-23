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
    <link href="{{ asset('assets/css/fonts.css') }}" rel="stylesheet">

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

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Meow Cafe ☕</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/home') }}" class="active">Home<br></a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/services') }}">Services</a></li>
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

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="{{ asset('assets/img/' . $hero->image1) }}" alt="">

            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <h1>{{ $hero->title }}</h1>

                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="#about" class="btn-get-started">Get Started</a>
                            <a href="{{ $hero->video_url }}" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>{{ $hero->button_text }}</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Why Us Section -->
        <section id="why-us" class="why-us section">

            <div class="container">

                <div class="row g-0">

                    <div class="col-xl-5 img-bg" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/img/' . $hero->image2) }}" alt="">

                    </div>

                    <div class="col-xl-7 slides position-relative" data-aos="fade-up" data-aos-delay="200">

                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "centeredSlides": true,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                  }
                }
              </script>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">
                                            {{ $whyUs->slide1_title }}
                                        </h3>
                                        <p>{{ $whyUs->slide1_description }}</p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Book a Visit</h3>
                                        <p>Where every cup of coffee comes with warm purrs and tiny paws. Relax, play, and spend time with our adorable rescue cats in a cozy little paradise made for cat lovers.</p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Adopt Happiness</h3>
                                        <p>Some of our cats are looking for forever homes. Who knows? Your perfect companion might be waiting here.</p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Sip. Relax. Meow.</h3>
                                        <p>Enjoy a peaceful atmosphere filled with fluffy friends, soft music, and endless cuddles.</p>
                                    </div>
                                </div><!-- End slide item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                </div>

            </div>

        </section><!-- /Why Us Section -->

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

         <div class="container section-title" data-aos="fade-up">
                <h2>{{ $cta->title }}</h2>

            </div>

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

           

            <img src="{{ asset('assets/img/' . $cta->image) }}" alt="">


            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">


                            <a class="cta-btn" href="{{ $cta->button_link }}">
                                {{ $cta->button_text }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <div class="container">
                <div class="row">
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="mb-0">Share Your Cat Moments</h3>
                        <h3>Here With Us</h3>

                        <p>Every cat has a story worth sharing. Capture your cutest, funniest, and most heartwarming moments with your furry companion and become part of our growing cat-loving community.</p>
                    </div>
                    <div class="col-lg-5 position-relative" data-aos="zoom-out" data-aos-delay="200">
                        <div class="phone-wrap">
                            <img src="{{ asset('assets/img/cat main pg4.jpg') }}" alt="Image" class="img-fluid">

                        </div>
                    </div>
                </div>

            </div>



        </section><!-- /Features Section -->

        <!-- Recent Posts Section -->
        <section id="recent-posts" class="recent-posts section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Recent Blog Posts</h2>

            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/{{ $hero->recent_blog1 }}" class="img-fluid" alt=""></div>
                            <div class="meta">
                                <span class="post-date">{{ $hero->rb_date1 }} </span>
                                <span class="post-author">{{ $hero->rb_name1 }} </span>
                            </div>
                            <h3 class="post-title">{{ $hero->rb_title1 }}</h3>
                            <p>{{ $hero->rb_desc1 }}</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/{{ $hero->recent_blog2 }}" class="img-fluid" alt=""></div>
                            <div class="meta">
                                <span class="post-date">{{ $hero->rb_date2 }} </span>
                                <span class="post-author">{{ $hero->rb_name2 }} </span>
                            </div>
                            <h3 class="post-title">{{ $hero->rb_title2 }}</h3>
                            <p>{{ $hero->rb_desc2 }}</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/{{ $hero->recent_blog3 }}" class="img-fluid" alt=""></div>
                            <div class="meta">
                                <span class="post-date">{{ $hero->rb_date3 }} </span>
                                <span class="post-author">{{ $hero->rb_name3 }} </span>
                            </div>
                            <h3 class="post-title">{{ $hero->rb_title3 }}</h3>
                            <p>{{ $hero->rb_desc3 }}</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/{{ $hero->recent_blog4 }}" class="img-fluid" alt=""></div>
                            <div class="meta">
                                <span class="post-date">{{ $hero->rb_date4 }} </span>
                                <span class="post-author">{{ $hero->rb_name4 }} </span>
                            </div>
                            <h3 class="post-title">{{ $hero->rb_title4 }}</h3>
                            <p>{{ $hero->rb_desc4 }}</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Recent Posts Section -->

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
                            <li><a href="/home">Home</a></li>
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
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
