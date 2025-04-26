@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Data Ruang</h2>
        <div>
            <a href="{{ route('cetak.ruang') }}" class="btn btn-outline-primary shadow-sm me-2">
                Download PDF
            </a>
        <a href="{{ route('ruang.create') }}" class="btn btn-primary shadow-sm">+ Tambah Ruang</a>
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
                        <th>Nama Ruang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ruang as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama_ruang }}</td>
                            <td>
                                <a href="{{ route('ruang.edit', $item->id_ruang) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="{{ route('ruang.destroy', $item->id_ruang) }}" method="POST" style="display:inline-block">
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
