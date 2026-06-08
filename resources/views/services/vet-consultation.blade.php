<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cat Veterinary Consultation - Meow Cafe</title>

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
            <h1>🐾 Cat Veterinary Consultation</h1>
            <p class="lead">
                Professional health advice and preventive care for your cat.
            </p>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">

            <div class="col-lg-6">
                <img src="{{ asset('assets/img/portfolio/branding1.jpg') }}"
                     class="img-fluid rounded">
            </div>

            <div class="col-lg-6">
                <h3>About Our Veterinary Consultation</h3>

                <p>
                    Your cat's health is our priority. Our veterinary consultation service provides expert guidance on nutrition, vaccinations, routine health checks, and common feline health concerns.
                </p>

                <h4>Services Available</h4>

                <ul>
                    <li>✔ Health Assessments</li>
                    <li>✔ Vaccination Consultations</li>
                    <li>✔ Nutritional Guidance</li>
                    <li>✔ Weight Management</li>
                    <li>✔ Behavioral Consultation</li>
                    <li>✔ Preventive Care</li>
                </ul>

                <h4>Pricing</h4>

                <p>Basic Consultation - $25</p>
                <p>Premium Consultation - $40</p>
                <p>Luxury Consultation - $60</p>

                <a href="{{ url('/contact') }}" class="btn btn-primary">
                    Book Appointment
                </a>

            </div>

        </div>
    </section>

</main>

</body>
</html>