@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Data Pengampu</h2>
        <a href="{{ route('pengampu.create') }}" class="btn btn-primary shadow-sm">+ Tambah Pengampu</a>
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
                        <th>Mata Kuliah</th>
                        <th>Dosen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengampu as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->matakuliah->Nama_mk ?? '-' }}</td>
                            <td>{{ $item->dosen->Nama ?? '-' }}</td>
                            <td>
                                <a href="{{ route('pengampu.edit', $item->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="{{ route('pengampu.destroy', $item->id) }}" method="POST" style="display:inline-block">
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
