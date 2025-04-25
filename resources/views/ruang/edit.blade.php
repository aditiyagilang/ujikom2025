@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Edit Ruang</h2>

    <form action="{{ route('ruang.update', $ruang->id_ruang) }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_ruang" class="form-label">Nama Ruang</label>
            <input type="text" name="nama_ruang" id="nama_ruang" class="form-control" value="{{ $ruang->nama_ruang }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('ruang.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
