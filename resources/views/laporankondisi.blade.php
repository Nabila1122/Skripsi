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
            padding: 5px 0; /* Mengurangi padding navbar untuk membuatnya lebih ramping */
        }
        .navbar-nav .nav-link {
            color: white !important;
            font-size: 14px; /* Mengurangi ukuran font di navbar */
            padding: 8px 12px; /* Mengurangi padding dalam setiap link navbar */
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
    left: 0;  /* Pastikan posisi kiri footer tetap di 0 */
    margin-left: 0;  /* Hapus margin kiri jika ada */
    margin-right: 0; /* Hapus margin kanan jika ada */
}

        /* Menyusun gambar secara sejajar */
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
            gap: 200px;
            object-fit: cover;
        }
        .hero-image {
            height: 2px;
            background-image: url('https://via.placeholder.com/150');
            background-size: cover;
            background-position: center;
            padding-bottom: 20px;
        }
        /* Menempatkan Navbar di kiri */
        .navbar-nav {
            margin-right: auto;
        }
        .container {
            margin-left: 20px; /* Menambah margin kiri untuk menyelaraskan dengan navbar */
            margin-bottom: 50px; /* Memberikan jarak bawah agar tombol tidak tertimpa footer */
        }

        .transparent-table th,
        .transparent-table td {
            border: 1px solid #0d0808; /* Memberikan border tipis pada tabel */
            padding: 5px; /* Memberikan padding pada sel */
        }

        .transparent-table th {
            background-color: #6478af; /* Latar belakang biru untuk header tabel */
            color: white; /* Teks header tabel menjadi putih */
            text-align: center;
        }

        /* Menambahkan warna latar belakang berbeda untuk baris pertama (nomor dan nama gangguan) */
        .transparent-table .highlight-row {
            background-color: #87CEEB; /* Latar belakang biru muda untuk baris pertama */
            color: black; /* Teks menjadi hitam pada baris pertama */
        }
        /* Rata kanan untuk kolom nomor */
        .transparent-table td:first-child {
            text-align: center; /* Rata tengah untuk kolom nomor */
        }

        /* Membuat kolom Nama Gangguan justify */
        .transparent-table td:nth-child(2) {
            text-align: left; /* Meratakan teks dalam kolom Nama Gangguan */
            word-wrap: break-word; /* Memastikan teks panjang tetap terpisah ke baris berikutnya */
        }
        .transparent-table td:last-child {
            width: 150px;  /* Menentukan lebar kolom Pilihan */
            text-align: justify; /* Rata tengah */
            padding-left: 5px; /* Menambah jarak di sebelah kiri untuk ruang lebih banyak */
            padding-right: 5px; /* Menambah jarak di sebelah kanan */
        }

        /* Mengatur teks di tengah pada modal header */
        .modal-header .modal-title {
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Hero Section (Gambar Teratas) -->
<div class="hero-image"></div>

<!-- Gambar Sejajar -->
<div class="image-container">
    <img src="images/icon4.png" alt="Gambar 1">
    <img src="images/icon5.png" alt="Gambar 2">
    <img src="images/icon2.png" alt="Gambar 3">
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">GANGGUAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">INDIKASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HASIL KONDISI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BASIS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LAPORAN KONDISI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PENGATURAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LOGOUT</a>
                </li>
            </ul>
        </div>
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

<!-- Footer -->
<div class="footer">
    <p>Sistem Kondisi Kesehatan Mental c2025 Nabila</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function prosesLaporan() {
        alert("Proses laporan berdasarkan tanggal yang dipilih.");
    }
</script>

</body>
</html>
