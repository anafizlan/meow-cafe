<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register - Meow Cafe</title>

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <style>
        body{
            background:url('{{ asset("assets/img/cat main pg1.jpg") }}');
            background-size:cover;
            background-position:center;
            min-height:100vh;
        }

        .overlay{
            background:rgba(0,0,0,0.6);
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .register-card{
            background:white;
            padding:40px;
            border-radius:20px;
            width:500px;
        }

        .btn-meow{
            background:#0ea5e9;
            color:white;
        }
    </style>
</head>

<body>

<div class="overlay">

    <div class="register-card">

        <div class="text-center mb-4">
            <h2>🐱 Meow Cafe</h2>
            <p>Create Your Account</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text"
                       name="name"
                       class="form-control"
                       required>
            </div>

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

            <div class="mb-3">
                <label>Confirm Password</label>
                <input type="password"
                       name="password_confirmation"
                       class="form-control"
                       required>
            </div>

            <button type="submit" class="btn btn-meow w-100">
                Register
            </button>
        </form>

        <div class="text-center mt-3">
            <a href="/login">Already have an account?</a>
        </div>

        <div class="text-center mt-2">
            <a href="/">← Back to Landing Page</a>
        </div>

    </div>

</div>

</body>
</html>