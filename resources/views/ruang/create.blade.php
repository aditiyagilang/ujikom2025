@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Tambah Ruang</h2>

    <form action="{{ route('ruang.store') }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        <div class="mb-3">
            <label for="nama_ruang" class="form-label">Nama Ruang</label>
            <input type="text" name="nama_ruang" id="nama_ruang" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('ruang.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection