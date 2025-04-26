@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Data Presensi Akademik</h2>
        <div>
            <a href="{{ route('cetak.presensiakademik') }}" class="btn btn-outline-primary shadow-sm me-2">
                Download PDF
            </a>
        <a href="{{ route('presensi-akademik.create') }}" class="btn btn-primary shadow-sm">+ Tambah Presensi</a>
</div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm rounded-4 border-0">
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Status Kehadiran</th>
                        <th>Mahasiswa</th>
                        <th>Mata Kuliah</th>
                        <th>Aksi</th>
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
                            <td>
                                <a href="{{ route('presensi-akademik.edit', $item->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="{{ route('presensi-akademik.destroy', $item->id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
