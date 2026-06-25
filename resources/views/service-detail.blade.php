<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>
        {{ $service->title }} - Meow Cafe
    </title>

    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">

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

    {{-- HERO --}}
    <section class="py-5 text-center bg-light">

        <div class="container">

            <h1 class="fw-bold">
                🐾 {{ $service->title }}
            </h1>

            <p class="lead mt-3">
                {{ $service->short_desc }}
            </p>

        </div>

    </section>

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
                            ✔ {{ trim($feature) }}
                        </li>

                    @endforeach

                </ul>

                {{-- PRICING --}}
                <h4 class="fw-semibold mb-3">
                    Pricing
                </h4>

                @foreach(explode('|', $service->pricing) as $price)

                    <p class="mb-2">
                        {{ trim($price) }}
                    </p>

                @endforeach

                {{-- BUTTON --}}
                <a href="{{ url('/contact') }}"
                   class="btn btn-primary mt-3">

                    Book Appointment

                </a>

            </div>

        </div>

    </section>

</main>

</body>

</html>