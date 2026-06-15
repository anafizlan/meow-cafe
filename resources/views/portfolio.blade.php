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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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

<body class="portfolio-page">

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
                    <li><a href="{{ url('/services') }}">Services</a></li>
                    <li><a href="{{ url('/portfolio') }}" class="active">Portfolio</a></li>
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
        <div class="page-title dark-background"
     data-aos="fade"
     style="background-image: url('{{ asset('assets/img/' . $portfolio->banner_image) }}');">

    <div class="container">
            <h1>{{ $portfolio->title }}</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li class="current">Portfolio</li>
                </ol>
            </nav>
        </div>
        </div><!-- End Page Title -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">

                        <li data-filter="*" class="filter-active">All</li>

                        <li data-filter=".filter-cats">
                            {{ $portfolio->cat_category }}
                        </li>

                        <li data-filter=".filter-moments">
                            {{ $portfolio->moment_category }}
                        </li>

                        <li data-filter=".filter-adoption">
                            {{ $portfolio->adoption_category }}
                        </li>

                        <li data-filter=".filter-cafe">
                            {{ $portfolio->cafe_category }}
                        </li>

                    </ul>



                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        @foreach ($portfolioItems as $item)
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $item->category }}">

                                <img src="{{ asset('assets/img/portfolio/' . $item->image) }}" class="img-fluid" alt="">

                                <div class="portfolio-info">

                                    <h4>{{ $item->title }}</h4>

                                    <p>{{ $item->description }}</p>

                                    <a href="{{ asset('assets/img/portfolio/' . $item->image) }}" class="glightbox preview-link">

                                        <i class="bi bi-zoom-in"></i>

                                    </a>

                                </div>

                            </div>
                        @endforeach

                    </div><!-- End Portfolio Container -->

                
            

            </div>

        </section><!-- /Portfolio Section -->

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
