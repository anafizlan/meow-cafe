<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login - Meow Cafe</title>

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <style>
        body{
            background: url('{{ asset("assets/img/cat main pg1.jpg") }}');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }

        .overlay{
            background: rgba(0,0,0,0.6);
            min-height: 100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .login-card{
            background:white;
            padding:40px;
            border-radius:20px;
            width:450px;
            box-shadow:0 0 30px rgba(0,0,0,.2);
        }

        .btn-meow{
            background:#0ea5e9;
            color:white;
        }
    </style>
</head>

<body>

<div class="overlay">

    <div class="login-card">

        <div class="text-center mb-4">
            <h2>🐱 Meow Cafe</h2>
            <p>Login to your account</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label>Email</label>
                <input type="email"
                       name="email"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       required>
            </div>

            <button type="submit" class="btn btn-meow w-100">
                Login
            </button>
        </form>

        <div class="text-center mt-3">
            <a href="/register">Create Account</a>
        </div>

        <div class="text-center mt-2">
            <a href="/">← Back to Landing Page</a>
        </div>

    </div>

</div>

</body>
</html>