<!DOCTYPE html>
<html>

<head>
    <title>Meow Cafe</title>

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        body {
            background: url('{{ asset('assets/img/cat main pg1.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-box {
            background: white;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            width: 500px;
        }

        .btn-custom {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="overlay">

        <div class="card-box">

            <h1>🐱 Meow Cafe ☕</h1>

            <p>Welcome to our Cat Cafe</p>

            <a href="/home" class="btn btn-primary btn-custom">
                Enter as Guest
            </a>
            </a>

            <a href="/login" class="btn btn-dark btn-custom">
                Login
            </a>



            <a href="/register" class="btn btn-outline-secondary btn-custom">
                Register
            </a>

        </div>

    </div>

</body>

</html>
