@extends('layouts.layout')

@section('content')
<div class="container py-4">
    <h2 class="fw-bold text-primary mb-4">Dashboard Akademik</h2>

    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Total Mahasiswa</h5>
                    <h3 class="fw-bold">{{ $jumlahMahasiswa }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Total Dosen</h5>
                    <h3 class="fw-bold">{{ $jumlahDosen }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-white bg-info">
                <div class="card-body">
                    <h5 class="card-title">Mata Kuliah</h5>
                    <h3 class="fw-bold">{{ $jumlahMatakuliah }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">Golongan</h5>
                    <h3 class="fw-bold">{{ $jumlahGolongan }}</h3>
                </div>
            </div>
        </div>
    </div>

  
</div>
@endsection


