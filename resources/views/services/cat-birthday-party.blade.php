<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cat Birthday Party - Meow Cafe</title>

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
            <h1>🐾 Cat Birthday Party</h1>
            <p class="lead">
                Celebrate your cat's special day with unforgettable memories.
            </p>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">

            <div class="col-lg-6">
                <img src="{{ asset('assets/img/cat service3.jpg') }}"
                     class="img-fluid rounded">
            </div>

            <div class="col-lg-6">
                <h3>About Our Birthday Party</h3>

                <p>
                    Make your cat's birthday extra special with a custom party experience. From decorations and treats to games and photo sessions, we'll help create a celebration your furry friend deserves.
                </p>

                <h4>Party Packages</h4>

                <ul>
                    <li>✔ Birthday Decorations</li>
                    <li>✔ Cat-Friendly Cake</li>
                    <li>✔ Party Games</li>
                    <li>✔ Photo Session</li>
                    <li>✔ Custom Party favors</li>
                </ul>

                <h4>Pricing</h4>

                <p>Mini Party — $50</p>
                <p>Standard Party — $100</p>
                <p>Premium Party — $150</p>

                <a href="{{ url('/contact') }}" class="btn btn-primary">
                    Book Appointment
                </a>

            </div>

        </div>
    </section>

</main>

</body>
</html>