<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        th { background-color: #105cd4; color: #fff; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Data Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $index => $mhs)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $mhs->NIM }}</td>
                    <td>{{ $mhs->Nama }}</td>
                    <td>{{ $mhs->Alamat }}</td>
                    <td>{{ $mhs->Nohp }}</td>
                    <td>{{ $mhs->Semester }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
