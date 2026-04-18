<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
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
    .hero-image {
        height: 2px;
        background-image: url('https://via.placeholder.com/150');
        background-size: cover;
        background-position: center;
        padding-bottom: 20px;
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
    .container {
        margin-top: 15px;
        margin-left: 10px;
        padding-bottom: 70px;
    }
    .transparent-table th {
        background-color: #6478af;
        color: white;
        text-align: center;
    }
    .custom-logout {
        background-color: #f44336;
        color: white;
        padding: 5px 15px;
        border-radius: 5px;
        text-transform: uppercase;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .custom-logout:hover {
        background-color: #d32f2f;
    }
    /* Style untuk card chart */
    .card-chart {
        max-width: 600px;
        margin-bottom: 30px;
    }
    #gangguanChart {
        width: 100%;
        height: 400px;
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

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active" href="/dashboardadmin">DASHBOARD ADMIN</a></li>
            <li class="nav-item"><a class="nav-link active" href="/gangguan">GANGGUAN</a></li>
            <li class="nav-item"><a class="nav-link" href="/indikasi">INDIKASI</a></li>
            <li class="nav-item"><a class="nav-link" href="/hasilkonsultasi">HASIL KONSULTASI</a></li>
            <li class="nav-item"><a class="nav-link" href="/basis">BASIS</a></li>
            <li class="nav-item"><a class="nav-link" href="/laporankondisi">LAPORAN KONDISI</a></li>
            <li class="nav-item"><a class="nav-link" href="/pengaturan">PENGATURAN</a></li>
        </ul>

        <!-- Tombol Logout -->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="btn btn-danger btn-sm custom-logout" href="{{ route('logout_admin') }}">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Persentase Gangguan Siswa -->
<div class="container">
    <div class="card card-chart p-3">
        <h5 class="fw-bold mb-3">PRESENTASE GANGGUAN SISWA</h5>
        <canvas id="gangguanChart"></canvas>
    </div>
</div>
<!-- Footer -->
<div class="footer">Sistem Kesehatan Mental &copy; 2025 Nabila</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const dataGangguan = {
    labels: ['Kecemasan', 'Stres', 'Depresi'],
    datasets: [{
        label: 'Persentase Siswa (%)',
        data: [40, 35, 25],
        backgroundColor: [
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)',
            'rgba(255, 99, 132, 0.7)'
        ],
        borderColor: [
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(255, 99, 132, 1)'
        ],
        borderWidth: 1
    }]
};

const config = {
    type: 'doughnut',
    data: dataGangguan,
    options: {
        responsive: true,
        plugins: {
            legend: { position: 'bottom' },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        return context.label + ': ' + context.raw + '%';
                    }
                }
            }
        }
    },
};

new Chart(document.getElementById('gangguanChart'), config);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>