<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cat Grooming - Meow Cafe</title>

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
            <h1>🐾 Cat Grooming</h1>
            <p class="lead">
                Keep your furry friend clean, healthy, and extra fluffy with our professional grooming services.
            </p>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">

            <div class="col-lg-6">
                <img src="{{ asset('assets/img/cat service1.jpg') }}"
                     class="img-fluid rounded">
            </div>

            <div class="col-lg-6">
                <h3>About Our Grooming Service</h3>

                <p>
                    Our experienced team provides gentle and stress-free grooming sessions
                    designed specifically for cats. We focus on comfort, cleanliness,
                    and overall wellbeing.
                </p>

                <h4>What's Included?</h4>

                <ul>
                    <li>✔ Full Body Brushing</li>
                    <li>✔ Nail Trimming</li>
                    <li>✔ Ear Cleaning</li>
                    <li>✔ Fur Detangling</li>
                    <li>✔ Flea Inspection</li>
                    <li>✔ Gentle Bath & Drying</li>
                </ul>

                <h4>Pricing</h4>

                <p>Basic Grooming - $15</p>
                <p>Premium Grooming - $25</p>
                <p>Luxury Grooming - $40</p>

                <a href="{{ url('/contact') }}" class="btn btn-primary">
                    Book Appointment
                </a>

            </div>

        </div>
    </section>

</main>

</body>
</html>