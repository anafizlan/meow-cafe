<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cat Adoption - Meow Cafe</title>

    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body>

<header class="header d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
        <h2>🐾 Meow Cafe</h2>
        <a href="{{ url('/services') }}">Back to Services</a>
    </div>
</header>

<main style="margin-top:100px;">

    <section class="py-5 text-center">
        <div class="container">
            <h1>🐾 Cat Adoption</h1>
            <p class="lead">
                Give a loving cat a forever home and gain a loyal companion for life.
            </p>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">

            <div class="col-lg-6">
                <img src="{{ asset('assets/img/cat service2.jpg') }}"
                     class="img-fluid rounded">
            </div>

            <div class="col-lg-6">
                <h3>About Our Adoption Program</h3>

                <p>
                    Many of our rescue cats are waiting for someone special to call family. Our adoption program focuses on matching cats with responsible and caring owners. Every adopted cat receives proper health checks and socialization before joining their new home.
                </p>

                <h4>Adoption Process</h4>

                <ul>
                    <li>✔ Meet the cats</li>
                    <li>✔ Submit an adoption form</li>
                    <li>✔ Interview & suitability check</li>
                    <li>✔ Adoption approval</li>
                    <li>✔ Bring your new friend home</li>
                </ul>

                <h4>Benefits</h4>

                <p>Vaccinated cats</p>
                <p>Health checked</p>
                <p>Adoption support</p>

                <a href="{{ url('/contact') }}" class="btn btn-primary">
                    Book Appointment
                </a>

            </div>

        </div>
    </section>

</main>

</body>
</html>