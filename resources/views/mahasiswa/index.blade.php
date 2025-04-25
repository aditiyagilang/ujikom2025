@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Data Mahasiswa</h2>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary shadow-sm">+ Tambah Mahasiswa</a>
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
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Semester</th>
                        <th>Golongan</th>
                        <th>Aksi</th>
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
                            <td>{{ $mhs->golongan->nama_Gol ?? '-' }}</td>
                            <td>
                                <a href="{{ route('mahasiswa.edit', $mhs->NIM) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="{{ route('mahasiswa.destroy', $mhs->NIM) }}" method="POST" style="display:inline-block">
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
