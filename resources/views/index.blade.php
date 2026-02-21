<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
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
                    <a class="nav-link active" href="#">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TENTANG KESEHATAN MENTAL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">KONSULTASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-4">
 <h5 class="text-start"><strong>SISTEM DIAGNOSA GEJALA GANGGUAN KESEHATAN MENTAL PADA REMAJA DI SMPN 2 KRONJO</strong></h5>
 <p class="text-start">Selamat datang di sistem konsultasi sederhana mengenai kesehatan mental, di sini kami menyediakan konsultasi sederhana terkait kondisi gangguan kesehatan mental pada remaja dengan objek remaja di SMPN 2 Kronjo.</p>
</div>

<!-- Footer -->
<div class="footer">
    <p class="text-center">Sistem Kondisi Kesehatan Mental c2026 Nabila</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
