@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Tambah Dosen</h2>

    <form action="{{ route('dosen.store') }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="NIP" class="form-label">NIP</label>
                <input type="text" name="NIP" id="NIP" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" name="Nama" id="Nama" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" name="Alamat" id="Alamat" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="Nohp" class="form-label">No HP</label>
                <input type="text" name="Nohp" id="Nohp" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection