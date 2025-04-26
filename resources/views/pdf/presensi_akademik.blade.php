<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Presensi Akademik</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        th { background-color: #105cd4; color: #fff; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Data Presensi Akademik</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Mahasiswa</th>
                <th>Mata Kuliah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($presensi as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->hari }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->status_kehadiran }}</td>
                    <td>{{ $item->mahasiswa->Nama ?? '-' }}</td>
                    <td>{{ $item->matakuliah->Nama_mk ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
