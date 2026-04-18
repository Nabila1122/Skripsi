<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #00aaff;
        }
        .navbar-nav .nav-link {
            color: white !important;
        }
        .transparent-table {
            width: 70%;
            margin-left: 20px;
            background-color: #f0f8ff;
        }
        .transparent-table th {
            background-color: #6478af;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('index') }}">BERANDA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('konsultasi') }}">KONSULTASI</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <h5><strong>PILIH INDIKASI YANG DIALAMI</strong></h5>
</div>

<form action="{{ route('konsultasi.proses') }}" method="POST">
    @csrf
    <div class="container mb-3">
    <label><strong>Masukkan NIS:</strong></label>
    <input type="text" name="nis" class="form-control" required>
</div>

    <table class="table table-bordered transparent-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Indikasi</th>
                <th>Pilihan</th>
            </tr>
        </thead>

        <tbody id="tabel-indikasi">
            <tr>
                <td colspan="4" class="text-center">Memuat data...</td>
            </tr>
        </tbody>
    </table>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">CEK</button>
    </div>
<div class="footer">Sistem Kesehatan Mental &copy; 2025 Nabila</div>
</form>

<script>
async function loadIndikasi() {
    try {
        const response = await fetch('/api/indikasi');
        const data = await response.json();

        const tbody = document.getElementById('tabel-indikasi');
        tbody.innerHTML = '';

        data.forEach((indikasi, index) => {
            tbody.innerHTML += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${indikasi.kd_indikasi}</td>
                    <td>${indikasi.nama_indikasi}</td>
                    <td>
                        <input type="radio" 
                            name="jawaban[${indikasi.kd_indikasi}]" 
                            value="YA"> YA

                        <input type="radio" 
                            name="jawaban[${indikasi.kd_indikasi}]" 
                            value="TIDAK"> TIDAK
                    </td>
                </tr>
            `;
        });

    } catch (error) {
        document.getElementById('tabel-indikasi').innerHTML = `
            <tr>
                <td colspan="4" class="text-center text-danger">
                    Gagal load data
                </td>
            </tr>
        `;
        console.error(error);
    }
}

loadIndikasi();
</script>

</body>
</html>