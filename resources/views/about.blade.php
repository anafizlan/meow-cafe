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

<body class="about-page">

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
                    <li><a href="{{ url('/about') }}" class="active">About</a></li>
                    <li><a href="{{ url('/services') }}">Services</a></li>
                    <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ url('/team') }}">Team</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                     @if (Auth::check() && Auth::user()->role == 'admin')
                        <a href="/admin/hero" class="btn btn-warning">
                            Admin Panel
                        </a>
                    @endif
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
        <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/about1-page-title-bg.jpg') }});">
            <div class="container">
                <h1>About</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li class="current">About</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-5">
                        <img src="{{ asset('assets/img/' . $about->image1) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>{{ $about->title }}</h3>
                            <p>
                                {{ $about->description }}
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> <span>{{ $about->bullet1 }}</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>{{ $about->bullet2 }}</span></li>
                                <li><i class="bi bi-check-circle-fill"></i> <span>{{ $about->bullet3 }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Why Us Section -->
        <section id="why-us" class="why-us section">

            <div class="container">

                <div class="row g-0">

                    <div class="col-xl-5 img-bg" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/img/' . $about->image2) }}" alt="">
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
                                        <h3 class="mb-3">🐾 Our Story</h3>
                                        <h4 class="mb-3">Meow Cafe began with a small idea inspired by a deep love for cats and a passion for creating a comforting space for people to unwind. We wanted to build more than just a cafe, we wanted a peaceful little home filled with warmth, coffee, and the soft sound of purring cats.</h4>
                                        <p>Many of the cats here were rescued and given a second chance to live happily and safely. Over time, they became part of our family and the heart of our cafe. Every corner of Meow Cafe was designed to make both humans and cats feel relaxed, comfortable, and loved.</p>
                                        </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">🐱 Meet Our Lovely Residents</h3>
                                        <h4 class="mb-3">Our cafe is home to many adorable cats with different personalities, colors, and stories. Some are playful and energetic, while others enjoy sleeping peacefully beside visitors all day long. No matter their personality, every cat here loves attention, gentle cuddles, and making new friends.</h4>
                                        <p>Many visitors come to Meow Cafe not only for coffee, but also to experience the calming and joyful energy our cats bring into the cafe. Watching them play, nap, or quietly sit beside you can instantly make your day feel brighter.</p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">☕ A Cozy Experience Like No Other</h3>
                                        <h4 class="mb-3">Meow Cafe was designed to create a warm and welcoming atmosphere for every guest who walks through our doors. Soft lighting, comfortable seating, relaxing music, and adorable cats wandering around freely create the perfect place to relax and recharge.</h4>
                                       <p>Whether you are studying, working, catching up with friends, or enjoying some quiet time alone, our cafe offers a peaceful environment away from the stress of everyday life. Many guests say the presence of our cats makes them feel calmer, happier, and more at ease.</p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">💖 Rescue, Love, and Adoption</h3>
                                        <h4 class="mb-3">Some of our cats arrived frightened, sick, or abandoned, but through patience and kindness, they slowly learned to trust again. Seeing them grow healthier, more playful, and more confident is one of the most rewarding parts of our journey.</h4>
                                        <p>Our mission goes beyond serving coffee and creating a beautiful cafe space. We are passionate about helping rescued cats find safety, care, and loving forever homes. We hope our cafe can inspire more people to understand the importance of animal rescue, adoption, and responsible pet care. Every visit, every coffee purchased, and every moment shared with our cats helps support their wellbeing and future.</p>
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

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="{{ asset('assets/img/cat main pg3.jpg') }}" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            
                            <a class="cta-btn" href="#">Call To Action</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Team</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/cat about3.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/cat about4.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Ethan Carter</h4>
                                <span>Product Manager</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/cat about5.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/cat about6.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Ryan Mitchell</h4>
                                <span>Accountant</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->

    </main>

    <footer id="footer" class="footer light-background">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">Meow Cafe ☕</span>
                        </a>
                        <p>We’re happy to share warm coffee, soft purrs, and cozy moments with every cat lover who walks through our doors.</p>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
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
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p>United States</p>
                        <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container copyright text-center">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Meow Cafe ☕</strong> <span>All Rights Reserved</span></p>
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
