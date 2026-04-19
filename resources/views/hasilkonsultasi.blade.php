<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Konsultasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            padding-bottom: 100px; /* agar footer tidak menutupi konten */
        }

        .footer {
            background-color: #00aaff;
            color: white;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 10px 0;
            font-size: 14px;
        }

        h4, h5, h6 {
            margin-top: 15px;
            margin-bottom: 10px;
        }

        hr {
            border-top: 2px solid #6478af;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .info-label {
            font-weight: bold;
            display: inline-block;
            width: 150px;
        }

        p {
            line-height: 1.5;
            margin-bottom: 8px;
        }

        .container {
            max-width: 750px;
            margin: 0 auto;
            padding-top: 20px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .btn-primary {
            min-width: 180px;
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>

<body>
<div class="container">

    <h4 class="text-center"><strong>HASIL KONSULTASI</strong></h4>
    <hr>

    <!-- CARD: DATA SISWA -->
    <div class="card">
        <h5><strong>DATA SISWA</strong></h5>
        <p><span class="info-label">NIS</span>: {{ $siswa->nis }}</p>
        <p><span class="info-label">Nama</span>: {{ $siswa->nama }}</p>
        <p><span class="info-label">Jenis Kelamin</span>: {{ $siswa->jenis_kelamin }}</p>
        <p><span class="info-label">Usia</span>: {{ $siswa->usia }} Tahun</p>
    </div>

    <!-- CARD: HASIL KONDISI -->
    <div class="card">
        <h5><strong>HASIL KONDISI</strong></h5>
        <p>
            Berdasarkan hasil konsultasi, Anda mengalami 
            <strong>{{ $gangguan->nama_gangguan }}</strong> 
            dengan nilai <strong>{{ $nilai }}</strong>.
        </p>
    </div>

    <!-- CARD: SOLUSI & MITIGASI -->
    <div class="card">
        <h6><strong>Solusi:</strong></h6>
        <p>{{ $gangguan->solusi }}</p>

        <h6><strong>Mitigasi:</strong></h6>
        <p>{{ $gangguan->mitigasi }}</p>
    </div>

    <!-- Tombol Konsultasi Ulang -->
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