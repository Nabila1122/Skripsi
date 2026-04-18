<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kondisi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #00aaff;
            padding: 5px 0;
        }
        .navbar-nav .nav-link {
            color: white !important;
            font-size: 14px;
            padding: 8px 12px;
        }
        .navbar-brand img {
            width: 20px;
            height: 20px;
        }
        .footer {
            background-color: #00aaff;
            color: white;
            padding: 5px 0;
            font-size: 12px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 20px;
            gap: 200px;
        }
        .image-container img {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        .hero-image {
            height: 2px;
            background-image: url('https://via.placeholder.com/150');
            background-size: cover;
            background-position: center;
            padding-bottom: 20px;
        }
        .navbar-nav {
            margin-right: right;
        }
        .container {
            margin-left: 10px;
            padding-bottom: 70px;
        }
        hr {
            border-top: 3px solid black;
            margin-top: 15px;
            margin-bottom: 15px;
            width: 117%;
        }
        .consultation-btn {
            position: fixed;
            bottom: 60px; /* Memberikan ruang agar tombol tidak tumpang tindih dengan footer */
            left: 50%;
            transform: translateX(-50%);
            z-index: 999;
        }
        .content-section {
            margin-left: 0;
            width: 100%;
        }
        /* Memberikan ruang antara tombol dan hr */
        .space-bottom {
            margin-bottom: 50px; /* Memberikan ruang antara <hr> dan tombol */
        }
        .info-container {
            display: grid;
            grid-template-columns: auto 1fr; /* Membuat dua kolom, kolom pertama untuk label dan kedua untuk nilai */
            gap: 10px; /* Menambahkan jarak antar kolom */
            margin-bottom: 10px;
        }
        .info-container strong {
            text-align: left; /* Menjaga agar label kiri rata */
            white-space: nowrap; /* Mencegah teks label terputus */
        }
        .info-container span {
            word-wrap: break-word;
        }
        .info-label {
            display: inline-block;
            width: 150px; /* Menentukan lebar label untuk menjaga keseragaman */
            font-weight: bold;
        }
        .info-value {
            display: inline-block;
        } 
        .transparent-table th { background-color: #6478af; color: white; text-align: center; }
        .custom-logout {
            background-color: #f44336;  /* Warna latar belakang tombol */
            color: white;               /* Warna teks tombol */
            padding: 5px 15px;          /* Menambahkan padding untuk tombol */
            border-radius: 5px;         /* Membuat sudut tombol melengkung */
            text-transform: uppercase;  /* Membuat teks menjadi huruf kapital */
            border: none;               /* Menghapus border tombol */
            cursor: pointer;            /* Menambahkan kursor pointer saat hover */
            transition: background-color 0.3s ease; /* Efek transisi saat hover */
        }
        .custom-logout:hover {
            background-color: #d32f2f;  /* Warna latar belakang saat hover */
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<div class="hero-image"></div>

<!-- Gambar Sejajar -->
<div class="image-container">
    <img src="images/icon4.png" alt="Gambar 1">
    <img src="images/icon5.png" alt="Gambar 2">
    <img src="images/icon2.png" alt="Gambar 3">
</div>

</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="/gangguan">GANGGUAN</a></li>
        <li class="nav-item"><a class="nav-link" href="/indikasi">INDIKASI</a></li>
        <li class="nav-item"><a class="nav-link" href="/hasilkonsultasi">HASIL KONSULTASI</a></li>
        <li class="nav-item"><a class="nav-link" href="/basis">BASIS</a></li>
        <li class="nav-item"><a class="nav-link" href="/laporankondisi">LAPORAN KONDISI</a></li>
        <li class="nav-item"><a class="nav-link" href="/pengaturan">PENGATURAN</a></li>
      </ul>

      <!-- Tombol Logout di kanan -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="btn btn-danger btn-sm custom-logout" href="{{ route('logout_admin') }}">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

<!-- Hero Section -->
<div class="hero-image"></div>

<!-- Main Content -->
<div class="container mt-3">
    <h5 class="text-left"><strong>DAFTAR LAPORAN KONDISI</strong></h5>
    <div class="container mt-4">
    <div class="row">
        <!-- Kolom untuk input "Dari Tanggal" -->
        <div class="col-md-6 mb-4">
            <label for="dariTanggal" class="form-label">Dari Tanggal</label>
            <input type="date" class="form-control" id="dariTanggal">
        </div>

        <!-- Kolom untuk input "S/D Tanggal" -->
        <div class="col-md-6 mb-4">
            <label for="sampaiTanggal" class="form-label">S/D Tanggal</label>
            <input type="date" class="form-control" id="sampaiTanggal">
        </div>
    </div>
</div>
 <div class="container d-flex justify-content-center align-items-center" style="height: 0px; padding: 0;">
    <div class="mb-0">
        <button class="btn btn-primary" onclick="prosesLaporan()">Proses</button>
    </div>
</div>


   <div class="col-md-10 mb-10">
            <h5 class="text-left"><strong>DAFTAR KONDISI TERAKHIR</strong></h5>
            <table class="table table-bordered transparent-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Gangguan</th>
                        <th>Nama Gangguan</th>
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal</th>
                        <th>Lihat Kondisi</th>
                    </tr>
                </thead>
        <tbody>
            <!-- Contoh Baris -->
            <tr>
                <td>1</td>
                <td>G001</td>
                <td>Kecemasan</td>
                <td>Ahmad</td>
                <td>12</td>
                <td>Laki-laki</td>
                <td>2026-01-17</td>
                <td><button class="btn btn-info btn-sm">Lihat</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>G002</td>
                <td>Stres</td>
                <td>Ancila</td>
                <td>15</td>
                <td>Perempuan</td>
                <td>2026-01-16</td>
                <td><button class="btn btn-info btn-sm">Lihat</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>G003</td>
                <td>Depresi</td>
                <td>Suaib</td>
                <td>13</td>
                <td>Laki-laki</td>
                <td>2026-01-15</td>
                <td><button class="btn btn-info btn-sm">Lihat</button></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="footer">Sistem Kesehatan Mental &copy; 2025 Nabila</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function prosesLaporan() {
        alert("Proses laporan berdasarkan tanggal yang dipilih.");
    }
</script>

</body>
</html>
