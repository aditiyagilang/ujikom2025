@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Edit Dosen</h2>

    <form action="{{ route('dosen.update', $dosen->NIP) }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" name="Nama" id="Nama" class="form-control" value="{{ $dosen->Nama }}" required>
            </div>
            <div class="col-md-6">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" name="Alamat" id="Alamat" class="form-control" value="{{ $dosen->Alamat }}" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="Nohp" class="form-label">No HP</label>
            <input type="text" name="Nohp" id="Nohp" class="form-control" value="{{ $dosen->Nohp }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
