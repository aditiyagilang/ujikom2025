<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/images/bg-login.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            min-height: 100vh;
        }

        .overlay {
            background: linear-gradient(135deg, rgba(16,92,212,0.8), rgba(16,92,212,0.5));
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            z-index: 0;
        }

        .login-box {
            position: relative;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #105cd4;
        }

        .btn-primary {
            background-color: #105cd4;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0c47a1;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="login-box col-md-4">
            <h4 class="mb-4 text-center fw-bold text-primary">Login Sistem Akademik</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>
