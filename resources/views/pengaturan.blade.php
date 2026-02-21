<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan</title>
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

<div class="container mt-3">
    <h5 class="text-left"><strong>PENGATURAN ADMIN</strong></h5>
    <form>
        <!-- Bagian 1: Nama, Nomor Telepon, dan Email -->
        <div class="mb-3 row">
            <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-9 col-md-6">
                <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukkan Nama Lengkap">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nomor_telepon" class="col-sm-3 col-form-label">Nomor Telepon</label>
            <div class="col-sm-9 col-md-6">
                <input type="text" class="form-control" id="nomor_telepon" placeholder="Masukkan Nomor Telepon">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9 col-md-6">
                <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
            </div>
        </div>

        <!-- Tombol Proses untuk Bagian 1 (Nama, Nomor Telepon, Email) -->
        <div class="text-center">
            <button type="button" class="btn btn-primary">Proses</button>
        </div>

        <hr style="width: 50%; margin: 20px auto;"> <!-- Garis pemisah antar bagian -->

        <!-- Bagian 2: Username dan Password -->
        <div class="mb-3 row">
            <label for="username" class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-9 col-md-6">
                <input type="text" class="form-control" id="username" placeholder="Masukkan Username">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9 col-md-6">
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
            </div>
        </div>

        <!-- Tombol Proses untuk Bagian 2 (Username dan Password) -->
        <div class="text-center">
            <button type="button" class="btn btn-primary">Proses</button>
        </div>
    </form>
</div>



<!-- Footer -->
<div class="footer">
    <p>Sistem Kondisi Kesehatan Mental c2025 Nabila</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
