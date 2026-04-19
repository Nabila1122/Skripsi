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
    .navbar {
    position: relative;
    z-index: 1000;
}
#infoBox {
    font-size: 16px;
}

#infoBox p {
    margin-bottom: 10px;
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
  <div class="card p-3">
    <h5 class="fw-bold mb-3">PRESENTASE GANGGUAN SISWA</h5>

    <div class="row">
      
      <!-- KIRI: CHART -->
      <div class="col-md-6">
        <canvas id="gangguanChart"></canvas>
      </div>

      <!-- KANAN: INFO -->
      <div class="col-md-6 d-flex align-items-center">
        <div id="infoBox"></div>
      </div>

    </div>

  </div>
</div>
<!-- Footer -->
<div class="footer">Sistem Kesehatan Mental &copy; 2025 Nabila</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
fetch('http://127.0.0.1:8000/api/kondisi')
.then(res => res.json())
.then(data => {

    let count = {};
    let total = data.length;

    // hitung per gangguan
    data.forEach(item => {
        let nama = item.gangguan.nama_gangguan;

        if (!count[nama]) count[nama] = 0;
        count[nama]++;
    });

    const labels = Object.keys(count);
    const values = Object.values(count);

    // HITUNG PERSEN
    const persen = values.map(v => ((v / total) * 100).toFixed(1));

    // CHART
    new Chart(document.getElementById('gangguanChart'), {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: values,
                backgroundColor: [
                    'rgba(54,162,235,0.7)',
                    'rgba(255,206,86,0.7)',
                    'rgba(255,99,132,0.7)'
                ]
            }]
        },
        options: {
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(ctx) {
                            let i = ctx.dataIndex;
                            return `${labels[i]}: ${values[i]} orang (${persen[i]}%)`;
                        }
                    }
                }
            }
        }
    });

    // INFO BOX (KANAN)
    let html = `<h6>Total Siswa: <b>${total}</b></h6><hr>`;

    labels.forEach((label, i) => {
        html += `
            <p>
                <b>${label}</b><br>
                ${values[i]} siswa (${persen[i]}%)
            </p>
        `;
    });

    document.getElementById('infoBox').innerHTML = html;

});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>