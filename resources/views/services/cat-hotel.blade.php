<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cat Hotel - Meow Cafe</title>

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
            <h1>🐾 Cat Hotel</h1>
            <p class="lead">
                A safe and cozy temporary home for your cat while you're away.
            </p>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">

            <div class="col-lg-6">
                <img src="{{ asset('assets/img/cat service4.jpg') }}"
                     class="img-fluid rounded">
            </div>

            <div class="col-lg-6">
                <h3>About Our Cat Hotel</h3>

                <p>
                    Whether you're traveling for work or vacation, our Cat Hotel provides a comfortable and secure environment for your beloved pet. Each guest receives daily care, feeding, playtime, and plenty of attention from our dedicated team.
                </p>

                <h4>Facilities</h4>

                <ul>
                    <li>✔ Private sleeping areas</li>
                    <li>✔ Daily feeding schedule</li>
                    <li>✔ Play sessions</li>
                    <li>✔ Comfortable bedding</li>
                    <li>✔ 24/7 monitoring</li>
                    <li>✔ Climate-controlled rooms</li>
                </ul>

                <h4>Pricing</h4>

                <p>Standard Room — $20/night</p>
                <p>Deluxe Room — $35/night</p>
                <p>Luxury Suite — $50/night</p>

                <a href="{{ url('/contact') }}" class="btn btn-primary">
                    Book Appointment
                </a>

            </div>

        </div>
    </section>

</main>

</body>
</html>