<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kondisi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial;
        }

        .navbar {
            background-color: #00aaff;
        }

        .navbar-nav .nav-link {
            color: white !important;
        }

        .container {
            padding-bottom: 80px;
        }

        .footer {
            background-color: #00aaff;
            color: white;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 5px;
        }

        .info-label {
            font-weight: bold;
            width: 180px;
            display: inline-block;
        }

        .card-custom {
            border-radius: 10px;
            padding: 20px;
            background: white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/laporankondisi">← Kembali</a></li>
        </ul>
    </div>
</nav>

<div class="container mt-4">

    <h4><strong>DETAIL KONDISI</strong></h4>
    <hr>

    <div class="card-custom">

        <!-- DATA SISWA -->
        <h5><strong>DATA SISWA</strong></h5>

        <p><span class="info-label">NIS</span>: {{ $data->siswa->nis }}</p>
        <p><span class="info-label">Nama</span>: {{ $data->siswa->nama }}</p>
        <p><span class="info-label">Jenis Kelamin</span>: {{ $data->siswa->jenis_kelamin }}</p>
        <p><span class="info-label">Usia</span>: {{ $data->siswa->usia }} Tahun</p>

        <hr>

        <!-- HASIL DIAGNOSA -->
        <h5><strong>HASIL DIAGNOSA</strong></h5>

        <p>
            Berdasarkan hasil konsultasi, siswa mengalami 
            <strong>{{ $data->gangguan->nama_gangguan }}</strong>.
        </p>

        <p><span class="info-label">Kode Gangguan</span>: {{ $data->gangguan->kd_gangguan }}</p>
        <p><span class="info-label">Tanggal</span>: {{ $data->tanggal }}</p>

        <hr>

        <!-- SOLUSI -->
        <h5><strong>Solusi</strong></h5>
        <p>{{ $data->gangguan->solusi }}</p>

        <hr>

        <!-- MITIGASI -->
        <h5><strong>Mitigasi</strong></h5>
        <p>{{ $data->gangguan->mitigasi }}</p>

    </div>

    <div class="text-center mt-4">
        <a href="/laporankondisi" class="btn btn-primary">Kembali</a>
    </div>

</div>

<div class="footer">
    Sistem Kesehatan Mental &copy; 2025 Nabila
</div>

</body>
</html>