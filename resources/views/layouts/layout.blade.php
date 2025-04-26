<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Edukasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f8fc;
            margin: 0;
        }
        .sidebar {
            width: 250px;
            background-color: #105cd4;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 2rem 1rem;
            color: white;
        }
        .sidebar h2 {
            font-weight: 600;
            font-size: 1.5rem;
        }
        .sidebar a {
            display: block;
            margin-top: 1rem;
            color: white;
            text-decoration: none;
            padding: 0.5rem;
            border-radius: 0.5rem;
        }
        .sidebar a:hover {
            background-color: #0d4cb3;
        }
        .appbar {
            height: 60px;
            background-color: #ffffff;
            border-bottom: 1px solid #e0e0e0;
            padding: 0 1.5rem;
            margin-left: 250px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .main-content {
            margin-left: 250px;
            padding: 2rem;
        }
        .btn-primary {
            background-color: #105cd4;
            border-color: #105cd4;
        }
        .btn-primary:hover {
            background-color: #0d4cb3;
            border-color: #0d4cb3;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>EduApp</h2>
        <a href="/dashboard">Dashboard</a>
        <a href="/golongan">Golongan</a>
        <a href="/mahasiswa">Mahasiswa</a>
        <a href="/dosen">Dosen</a>
        <a href="/ruang">Ruangan</a>
        <a href="/matakuliah">Matakuliah</a>
        <a href="/jadwal-akademik">Jadwal Akademik</a>
        <a href="/pengampu">Pengampu</a>
        <a href="/krs">KRS</a>
        <a href="/presensi-akademik">Presensi</a>
    </div>

    <div class="appbar">
        <h5>Selamat Datang</h5>
        <div>
        <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-outline-light">Logout</button>
</form>

        </div>
    </div>

    <div class="main-content">
        @yield('content')
    </div>
</body>
</html>
