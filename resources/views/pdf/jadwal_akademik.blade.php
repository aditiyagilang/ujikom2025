<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Jadwal Akademik</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        th { background-color: #105cd4; color: #fff; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Data Jadwal Akademik</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Mata Kuliah</th>
                <th>Ruang</th>
                <th>Golongan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwal as $index => $jdw)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $jdw->hari }}</td>
                    <td>{{ $jdw->matakuliah->Nama_mk ?? '-' }}</td>
                    <td>{{ $jdw->ruang->nama_ruang ?? '-' }}</td>
                    <td>{{ $jdw->golongan->nama_Gol ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
