<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>
        {{ $service->title }} - Meow Cafe
    </title>

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

    <section class="py-5 text-center">

        <div class="container">

            <h1>
                🐾 {{ $service->title }}
            </h1>

            <p class="lead">
                {{ $service->short_desc }}
            </p>

        </div>

    </section>

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
                            ✔ {{ trim($feature) }}
                        </li>

                    @endforeach

                </ul>

                <h4>
                    Pricing
                </h4>

                @foreach(explode('|', $service->pricing) as $price)

                    <p>
                        {{ trim($price) }}
                    </p>

                @endforeach

                <a href="/contact"
                   class="btn btn-primary">

                    Book Appointment

                </a>

            </div>

        </div>

    </section>

</main>

</body>

</html>
