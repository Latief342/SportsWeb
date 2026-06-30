<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sports App</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">

    <div class="container">

        <a href="/" class="navbar-brand fw-bold fs-3">

            🏆 SportsApp

        </a>

        <button class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">

                    <a class="nav-link" href="/">Home</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="/profile">Profile</a>

                </li>

                @guest

                <li class="nav-item">

                    <a class="nav-link" href="{{ route('login') }}">

                        Login

                    </a>

                </li>

                @endguest

                @auth

                <li class="nav-item">

                    <a class="nav-link" href="/admin">

                        Dashboard

                    </a>

                </li>

                <li class="nav-item">

                    <form method="POST"
                          action="{{ route('logout') }}">

                        @csrf

                        <button class="btn btn-link nav-link">

                            Logout

                        </button>

                    </form>

                </li>

                @endauth

            </ul>

        </div>

    </div>

</nav>

<div class="container py-5">

    @yield('content')

</div>

<footer class="bg-primary text-white py-3 mt-5">

    <div class="container text-center">

        Sports App © 2026

    </div>

</footer>

</body>

</html>