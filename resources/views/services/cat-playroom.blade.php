<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cat Playroom - Meow Cafe</title>

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
            <h1>🐾 Cat Playroom</h1>
            <p class="lead">
                A fun-filled playground designed for curious and energetic cats.
            </p>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">

            <div class="col-lg-6">
                <img src="{{ asset('assets/img/portfolio/product1.jpg') }}"
                     class="img-fluid rounded">
            </div>

            <div class="col-lg-6">
                <h3>About Our Playroom</h3>

                <p>
                    Our Cat Playroom is the perfect place for cats to exercise, explore, and socialize. Filled with climbing towers, tunnels, toys, and interactive games, it's a feline paradise for every playful kitty.
                </p>

                <h4>Features</h4>

                <ul>
                    <li>✔ Climbing Towers</li>
                    <li>✔ Cat Tunnels</li>
                    <li>✔ Interactive Toys</li>
                    <li>✔ Safe Environment</li>
                    <li>✔ Supervised Playtime</li>
                    <li>✔ Clean & Hygienic</li>
                </ul>

                <h4>Pricing</h4>

                <p>$10/hour</p>
                <a href="{{ url('/contact') }}" class="btn btn-primary">
                    Book Appointment
                </a>

            </div>

        </div>
    </section>

</main>

</body>
</html>