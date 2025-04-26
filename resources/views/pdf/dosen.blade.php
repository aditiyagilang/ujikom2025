<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Dosen</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        th { background-color: #105cd4; color: #fff; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Data Dosen</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dosen as $index => $dsn)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $dsn->NIP }}</td>
                    <td>{{ $dsn->Nama }}</td>
                    <td>{{ $dsn->Alamat }}</td>
                    <td>{{ $dsn->Nohp }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
