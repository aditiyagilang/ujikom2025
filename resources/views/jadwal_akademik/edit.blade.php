@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="fw-bold text-primary mb-4">Edit Jadwal Akademik</h2>

    <form action="{{ route('jadwal-akademik.update', $jadwal->id) }}" method="POST" class="card p-4 shadow-sm rounded-4 border-0 bg-white">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="hari" class="form-label">Hari</label>
            <select name="hari" id="hari" class="form-select" required>
                <option value="Senin" {{ $jadwal->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                <option value="Selasa" {{ $jadwal->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                <option value="Rabu" {{ $jadwal->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                <option value="Kamis" {{ $jadwal->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                <option value="Jumat" {{ $jadwal->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
               
            </select>
        </div>
        <div class="mb-3">
            <label for="Kode_mk" class="form-label">Mata Kuliah</label>
            <select name="Kode_mk" id="Kode_mk" class="form-select" required>
                @foreach($matakuliah as $mk)
                    <option value="{{ $mk->Kode_mk }}" {{ $jadwal->Kode_mk == $mk->Kode_mk ? 'selected' : '' }}>
                        {{ $mk->Nama_mk }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_ruang" class="form-label">Ruang</label>
            <select name="id_ruang" id="id_ruang" class="form-select" required>
                @foreach($ruang as $r)
                    <option value="{{ $r->id_ruang }}" {{ $jadwal->id_ruang == $r->id_ruang ? 'selected' : '' }}>
                        {{ $r->nama_ruang }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_Gol" class="form-label">Golongan</label>
            <select name="id_Gol" id="id_Gol" class="form-select" required>
                @foreach($golongan as $g)
                    <option value="{{ $g->id_Gol }}" {{ $jadwal->id_Gol == $g->id_Gol ? 'selected' : '' }}>
                        {{ $g->nama_Gol }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('jadwal-akademik.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection