@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Data Dosen</h2>
        <a href="{{ route('dosen.create') }}" class="btn btn-primary shadow-sm">+ Tambah Dosen</a>
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
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Aksi</th>
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
                            <td>
                                <a href="{{ route('dosen.edit', $dsn->NIP) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="{{ route('dosen.destroy', $dsn->NIP) }}" method="POST" style="display:inline-block">
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
