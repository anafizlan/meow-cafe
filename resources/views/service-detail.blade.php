<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>
        {{ $service->title }} - Meow Cafe
    </title>

<<<<<<< Updated upstream
=======
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">

>>>>>>> Stashed changes
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}"
          rel="stylesheet">

    <link href="{{ asset('assets/css/main.css') }}"
          rel="stylesheet">

</head>

<body>

<header class="header d-flex align-items-center fixed-top">

    <div class="container d-flex justify-content-between">

        <h2>
            🐾 Meow Cafe
        </h2>

        <a href="{{ url('/services') }}">
            Back to Services
        </a>

    </div>

</header>

<main style="margin-top:100px;">

<<<<<<< Updated upstream
    <section class="py-5 text-center">

        <div class="container">

            <h1>
                🐾 {{ $service->title }}
            </h1>

            <p class="lead">
=======
    {{-- HERO --}}
    <section class="py-5 text-center bg-light">

        <div class="container">

            <h1 class="fw-bold">
                🐾 {{ $service->title }}
            </h1>

            <p class="lead mt-3">
>>>>>>> Stashed changes
                {{ $service->short_desc }}
            </p>

        </div>

    </section>

<<<<<<< Updated upstream
    <section class="container py-5">

        <div class="row">

            <div class="col-lg-6">

                <img src="{{ asset('assets/img/' . $service->image) }}"
                     class="img-fluid rounded">

            </div>

            <div class="col-lg-6">

                <h3>
                    {{ $service->about_title }}
                </h3>

                <p>
                    {{ $service->about_desc }}
                </p>

                <h4>
                    Features
                </h4>

                <ul>

                    @foreach(explode('|', $service->features) as $feature)

                        <li>
=======
    {{-- MAIN CONTENT --}}
    <section class="container py-5">

        <div class="row align-items-center g-5">

            {{-- IMAGE --}}
            <div class="col-lg-6">

                <img
                    src="{{ asset('assets/img/' . $service->image) }}"
                    class="img-fluid rounded shadow-sm w-100">

            </div>

            {{-- CONTENT --}}
            <div class="col-lg-6">

                {{-- ABOUT --}}
                <h3 class="fw-bold mb-3">
                    {{ $service->about_title }}
                </h3>

                <p class="mb-4">
                    {{ $service->about_desc }}
                </p>

                {{-- FEATURES --}}
                <h4 class="fw-semibold mb-3">
                    Features
                </h4>

                <ul class="mb-4">

                    @foreach(explode('|', $service->features) as $feature)

                        <li class="mb-2">
>>>>>>> Stashed changes
                            ✔ {{ trim($feature) }}
                        </li>

                    @endforeach

                </ul>

<<<<<<< Updated upstream
                <h4>
=======
                {{-- PRICING --}}
                <h4 class="fw-semibold mb-3">
>>>>>>> Stashed changes
                    Pricing
                </h4>

                @foreach(explode('|', $service->pricing) as $price)

<<<<<<< Updated upstream
                    <p>
=======
                    <p class="mb-2">
>>>>>>> Stashed changes
                        {{ trim($price) }}
                    </p>

                @endforeach

<<<<<<< Updated upstream
                <a href="/contact"
                   class="btn btn-primary">
=======
                {{-- BUTTON --}}
                <a href="{{ url('/contact') }}"
                   class="btn btn-primary mt-3">
>>>>>>> Stashed changes

                    Book Appointment

                </a>

            </div>

        </div>

    </section>

<<<<<<< Updated upstream
</main>

</body>

</html>
=======
    {{-- FOOTER --}}
    <footer class="bg-dark text-white py-4 mt-5">

        <div class="container text-center">

            <p class="mb-1">
                © {{ date('Y') }} Meow Cafe
            </p>

            <p class="mb-0">
                All Rights Reserved
            </p>

        </div>

    </footer>

</main>

</body>
</html>

>>>>>>> Stashed changes
