<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Konsultasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f0f8ff; font-family: Arial; }
        .navbar { background-color: #00aaff; }
        .navbar-nav .nav-link { color: white !important; }
        .container { padding-bottom: 80px; }
        .footer {
            background-color: #00aaff;
            color: white;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 5px;
        }
        .info-label { width: 150px; font-weight: bold; display: inline-block; }
    </style>
</head>

<body>

<div class="container mt-4">

    <h4><strong>HASIL KONSULTASI</strong></h4>
    <hr>

    <!-- DATA SISWA -->
    <h5><strong>DATA SISWA</strong></h5>

    <p><span class="info-label">NIS</span>: {{ $siswa->nis }}</p>
    <p><span class="info-label">Nama</span>: {{ $siswa->nama }}</p>
    <p><span class="info-label">Jenis Kelamin</span>: {{ $siswa->jenis_kelamin }}</p>
    <p><span class="info-label">Usia</span>: {{ $siswa->usia }} Tahun</p>

    <hr>

    <!-- HASIL DIAGNOSA -->
    <h5><strong>HASIL KONDISI</strong></h5>

    <p>
        Berdasarkan hasil konsultasi, Anda mengalami 
        <strong>{{ $gangguan->nama_gangguan }}</strong> 
        dengan nilai <strong>{{ $nilai }}</strong>.
    </p>

    <hr>

    <h6><strong>Solusi:</strong></h6>
    <p>{{ $gangguan->solusi }}</p>

    <h6><strong>Mitigasi:</strong></h6>
    <p>{{ $gangguan->mitigasi }}</p>

    <hr>

    <div class="text-center mt-4">
        <a href="{{ route('konsultasi') }}" class="btn btn-primary">
            Konsultasi Ulang
        </a>
    </div>

</div>

<div class="footer">
    Sistem Kesehatan Mental &copy; 2025 Nabila
</div>

</body>
</html>