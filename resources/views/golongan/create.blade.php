@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Tambah Golongan</h2>

    <form action="{{ route('golongan.store') }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        <div class="mb-3">
            <label for="nama_Gol" class="form-label">Nama Golongan</label>
            <input type="text" name="nama_Gol" id="nama_Gol" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('golongan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
