@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Data Jadwal Akademik</h2>
        <div>
            <a href="{{ route('cetak.jadwalakademik') }}" class="btn btn-outline-primary shadow-sm me-2">
                Download PDF
            </a>
        <a href="{{ route('jadwal-akademik.create') }}" class="btn btn-primary shadow-sm">+ Tambah Jadwal</a>
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
                        <th>Mata Kuliah</th>
                        <th>Ruang</th>
                        <th>Golongan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwal as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->hari }}</td>
                            <td>{{ $item->matakuliah->Nama_mk ?? '-' }}</td>
                            <td>{{ $item->ruang->nama_ruang ?? '-' }}</td>
                            <td>{{ $item->golongan->nama_Gol ?? '-' }}</td>
                            <td>
                                <a href="{{ route('jadwal-akademik.edit', $item->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="{{ route('jadwal-akademik.destroy', $item->id) }}" method="POST" style="display:inline-block">
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
