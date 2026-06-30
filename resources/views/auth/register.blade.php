<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar SportsApp</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body>

<div class="login-page">

    <div class="overlay">

        <div class="login-box">

            <div class="text-center mb-4">

                <i class="bi bi-person-plus-fill login-icon"></i>

                <h2 class="mt-3">
                    Daftar SportsApp
                </h2>

                <p>
                    Buat akun baru untuk mulai menjelajahi dunia olahraga.
                </p>

            </div>

            <form method="POST" action="{{ route('register') }}">

                @csrf

                <div class="mb-3">

                    <label>Nama Lengkap</label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ old('name') }}"
                        required>

                    @error('name')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="mb-3">

                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        required>

                    @error('email')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="mb-3">

                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        required>

                    @error('password')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="mb-4">

                    <label>Konfirmasi Password</label>

                    <input
                        type="password"
                        name="password_confirmation"
                        class="form-control"
                        required>

                </div>

                <button type="submit" class="btn btn-login">

                    Daftar

                </button>

            </form>

            <div class="text-center mt-4">

                Sudah punya akun?

                <a href="{{ route('login') }}">

                    Masuk

                </a>

            </div>

        </div>

    </div>

</div>

</body>

</html>