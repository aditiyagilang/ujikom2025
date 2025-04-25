@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Data Mata Kuliah</h2>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary shadow-sm">+ Tambah Mata Kuliah</a>
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
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>SKS</th>
                        <th>Semester</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($matakuliah as $index => $mk)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $mk->Kode_mk }}</td>
                            <td>{{ $mk->Nama_mk }}</td>
                            <td>{{ $mk->sks }}</td>
                            <td>{{ $mk->semester }}</td>
                            <td>
                                <a href="{{ route('matakuliah.edit', $mk->Kode_mk) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="{{ route('matakuliah.destroy', $mk->Kode_mk) }}" method="POST" style="display:inline-block">
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
