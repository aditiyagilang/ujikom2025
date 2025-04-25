@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Edit Golongan</h2>

    <form action="{{ route('golongan.update', $golongan->id_Gol) }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_Gol" class="form-label">Nama Golongan</label>
            <input type="text" name="nama_Gol" id="nama_Gol" class="form-control" value="{{ $golongan->nama_Gol }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('golongan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
