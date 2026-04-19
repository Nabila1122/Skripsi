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
            margin-left: 10px;
            padding-bottom: 10px;
        }

        .form-control.nis-input {
            max-width: 250px;
        }

        .transparent-table th {
            background-color: #6478af;
            color: white;
            text-align: center;
        }

        .transparent-table {
            width: 50%;
            max-width: 3000px;
            margin-top: 20px;
            margin-left: 20px;
            background-color: #f0f8ff;
            color: black;
            text-align: justify;
        }

        /* Styling kolom pilihan YA/TIDAK */
        .radio-choice {
            white-space: nowrap;
        }

        .radio-choice label {
            display: inline-block;
            margin-right: 15px;
            cursor: pointer;
            font-weight: normal;
        }

        .radio-choice input[type="radio"] {
            margin-right: 5px;
            vertical-align: middle;
            transform: scale(1.1);
        }

        /* Tombol CEK jarak dari footer */
        .submit-btn {
            margin-bottom: 70px;
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
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">BERANDA</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('tentang_kesehatan_mental') }}">TENTANG KESEHATAN MENTAL</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('konsultasi') }}">KONSULTASI</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login_admin') }}">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h5><strong>PILIH INDIKASI YANG DIALAMI</strong></h5>
    </div>

    <form action="{{ route('konsultasi.proses') }}" method="POST">
        @csrf
        <!-- Input NIS -->
        <div class="container mb-3">
            <label><strong>Masukkan NIS:</strong></label>
            <input type="text" name="nis" class="form-control nis-input" required>
        </div>

        <!-- Tabel Indikasi -->
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

        <!-- Tombol CEK -->
        <div class="text-center submit-btn">
            <button type="submit" class="btn btn-primary">CEK</button>
        </div>
    </form>

    <div class="footer">Sistem Kesehatan Mental &copy; 2025 Nabila</div>

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
                            <td class="radio-choice">
                                <label>
                                    <input type="radio" name="jawaban[${indikasi.kd_indikasi}]" value="YA"> YA
                                </label>
                                <label>
                                    <input type="radio" name="jawaban[${indikasi.kd_indikasi}]" value="TIDAK"> TIDAK
                                </label>
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