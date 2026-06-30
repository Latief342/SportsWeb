<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login SportsApp</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body>

<div class="login-page">

    <div class="overlay">

        <div class="login-box">

            <div class="text-center mb-4">

                <i class="bi bi-trophy-fill login-icon"></i>

                <h2 class="mt-3">SportsApp</h2>

                <p>Selamat Datang Kembali</p>

            </div>

            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">

                @csrf

                <div class="mb-3">
                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        required>
                </div>

                <div class="mb-3">
                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        required>
                </div>

                <div class="form-check mb-4">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="remember">

                    <label class="form-check-label">

                        Ingat Saya

                    </label>

                </div>

                <button class="btn btn-login">

                    Masuk

                </button>

            </form>

            <div class="text-center mt-4">

                Belum punya akun?

                <a href="{{ route('register') }}">

                    Daftar

                </a>

            </div>

        </div>

    </div>

</div>

</body>

</html>