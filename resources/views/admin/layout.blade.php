<!DOCTYPE html>
<html>

<head>
    <title>Meow Cafe Admin</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <style>
        body {
            background: #f4f6f9;
        }

        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            background: #111827;
            color: white;
            padding: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 8px;
        }

        .sidebar a:hover {
            background: #1f2937;
        }

        .main {
            margin-left: 280px;
            padding: 30px;
        }

        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .08);
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h3>🐱 Meow Cafe</h3>
        <p>Admin Panel</p>
        <hr> <a href="/admin/hero"> <i class="bi bi-house"></i> Home </a>
        <a href="/admin/about"> <i class="bi bi-info-circle"></i> About </a>
        <a href="/admin/services"> <i class="bi bi-grid"></i> Services </a>
        <a href="/admin/service-detail">
            <i class="bi bi-grid"></i>
            Service Details
        </a>
        <a href="/admin/portfolio"> <i class="bi bi-briefcase"></i> Portfolio </a>
        <a href="/admin/team"> <i class="bi bi-people"></i> Team </a>
        <a href="/admin/contact"> <i class="bi bi-envelope"></i> Contact </a> <a href="/admin/cta">
            <i class="bi bi-megaphone"></i>
            Call To Action
        </a><a href="/admin/footer"> <i class="bi bi-telephone"></i> Footer </a>
        <form action="{{ route('logout') }}" method="POST"> @csrf <button class="btn btn-danger w-100 mt-4"> Logout </button> </form>
    </div>
    <div class="main">
        @if (session('success'))
            <div class="alert alert-success"> {{ session('success') }} </div>
        @endif @yield('content')
    </div>
</body>

</html>
