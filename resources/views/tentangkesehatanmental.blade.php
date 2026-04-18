<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kesehatan Mental</title>
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
            position: absolute;
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
        }

        /* Tabel gangguan, warna latar belakang putih dan rata kiri */
        .transparent-table {
            width: 50%;
            max-width: 300px; /* Menentukan lebar tabel agar tidak memenuhi layar */
            margin-top: 20px; /* Memberikan jarak antara tabel dan teks sebelumnya */
            margin-left: 40px; /* Menyelaraskan dengan teks sebelumnya */
            background-color: #f0f8ff; /* Transparansi latar belakang */
            color: black; /* Teks berwarna hitam */
            text-align: justify; /* Rata kiri */
        }

        .transparent-table th,
        .transparent-table td {
            border: 1px solid #0d0808; /* Memberikan border tipis pada tabel */
            padding: 8px; /* Memberikan padding pada sel */
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
        /* Teks informasi tambahan tidak terlalu mepet */
        .info-text {
            margin-left: 0px; /* Memberikan margin kiri */
            margin-right: -300px; /* Memberikan margin kanan */
            text-align: justify; /* Meratakan teks */
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
                    <a class="nav-link active" href="{{ route('index') }}">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tentang_kesehatan_mental') }}">TENTANG KESEHATAN MENTAL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('konsultasi') }}">KONSULTASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login_admin') }}">LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Data Gangguan yang Terdaftar -->
<div class="container mt-4">
    <h5 class="text-start"><strong>DATA GANGGUAN YANG TERDAFTAR</strong></h5>
</div>

<!-- Tabel Gangguan -->
<table class="table table-bordered transparent-table">
    <thead>
        <tr class="highlight-row">
            <th>No</th>
            <th>Nama Gangguan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Kecemasan</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Stres</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Depresi</td>
        </tr>
    </tbody>
</table>

<!-- Informasi tambahan tentang kesehatan mental -->
<div class="container mt-4">
    <h5 class="text-start fw-bold">INFORMASI TAMBAHAN MENGENAI KESEHATAN MENTAL</h5>
    <p class="mt-4 info-text">
        Kesehatan mental adalah kondisi emosional, psikologis, dan sosial seseorang yang
        mempengaruhi cara berpikir, merasa, dan bertindak. Gangguan kesehatan mental dapat
        mempengaruhi bagaimana seseorang menangani stres, berhubungan dengan orang lain,
        dan membuat keputusan. Penanganan yang tepat seperti terapi, konseling, dan
        kadang-kadang obat dapat membantu seseorang mengelola kondisi ini dan menjalani
        kehidupan yang lebih baik.
    </p>
</div>

<div class="footer">Sistem Kesehatan Mental &copy; 2025 Nabila</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
