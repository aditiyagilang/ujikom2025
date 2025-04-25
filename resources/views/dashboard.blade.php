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

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title mb-4">Jumlah Mahasiswa per Golongan</h5>
                    <canvas id="mahasiswaGolonganChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title mb-4">Presensi Kehadiran</h5>
                    <canvas id="presensiChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const golonganChart = new Chart(document.getElementById('mahasiswaGolonganChart'), {
        type: 'bar',
        data: {
            labels: {!! json_encode($labelsGolongan) !!},
            datasets: [{
                label: 'Jumlah Mahasiswa',
                data: {!! json_encode($dataGolongan) !!},
                backgroundColor: '#105cd4'
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            }
        }
    });

    const presensiChart = new Chart(document.getElementById('presensiChart'), {
        type: 'pie',
        data: {
            labels: ['Hadir', 'Izin', 'Sakit', 'Alpa'],
            datasets: [{
                data: {!! json_encode($dataPresensi) !!},
                backgroundColor: ['#28a745', '#ffc107', '#17a2b8', '#dc3545']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });
</script>
@endpush