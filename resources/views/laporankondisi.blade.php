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
        <li class="nav-item"><a class="nav-link active" href="/dashboardadmin">DASHBOARD ADMIN</a></li>
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
<div class="container mt-3">
    <h5><strong>DAFTAR LAPORAN KONDISI</strong></h5>

    <div class="row mt-3">
        <div class="col-md-6 mb-3">
            <label for="dariTanggal" class="form-label">Dari Tanggal</label>
            <input type="date" id="dariTanggal" class="form-control">
        </div>

        <div class="col-md-6 mb-3">
            <label for="sampaiTanggal" class="form-label">S/D Tanggal</label>
            <input type="date" id="sampaiTanggal" class="form-control">
        </div>
    </div>

    <div class="text-center mt-2 mb-3">
        <button class="btn btn-primary" onclick="loadKondisi()">Proses</button>
    </div>

    <hr>

    <h5><strong>DAFTAR KONDISI TERAKHIR</strong></h5>

    <table class="table table-bordered transparent-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Gangguan</th>
                <th>Nama Gangguan</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="tabel-kondisi">
            <tr>
                <td colspan="9" class="text-center">Memuat data...</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="footer">Sistem Kesehatan Mental &copy; 2025 Nabila</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
async function loadKondisi() {
    try {
        const dari = document.getElementById('dariTanggal').value;
        const sampai = document.getElementById('sampaiTanggal').value;

        const response = await fetch('/api/kondisi');
        const data = await response.json();

        const tbody = document.getElementById('tabel-kondisi');
        tbody.innerHTML = '';

        let filtered = data;

        if (dari && sampai) {
            filtered = data.filter(item => {
                return item.tanggal >= dari && item.tanggal <= sampai;
            });
        }

        if (filtered.length === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="9" class="text-center">Data tidak ditemukan</td>
                </tr>
            `;
            return;
        }

        filtered.forEach((item, index) => {
            tbody.innerHTML += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${item.gangguan?.kd_gangguan ?? '-'}</td>
                    <td>${item.gangguan?.nama_gangguan ?? '-'}</td>
                    <td>${item.siswa?.nis ?? '-'}</td>
                    <td>${item.siswa?.nama ?? '-'}</td>
                    <td>${item.siswa?.usia ?? '-'}</td>
                    <td>${item.siswa?.jenis_kelamin ?? '-'}</td>
                    <td>${item.tanggal ?? '-'}</td>
                    <td>
                        <div class="aksi-btn">
                            <button class="btn btn-info btn-sm" onclick="lihatDetail(${item.id_kondisi})">
                                Lihat
                            </button>
                            <button class="btn btn-danger btn-sm" onclick="hapusData(${item.id_kondisi})">
                                Hapus
                            </button>
                        </div>
                    </td>
                </tr>
            `;
        });

    } catch (error) {
        document.getElementById('tabel-kondisi').innerHTML = `
            <tr>
                <td colspan="9" class="text-danger text-center">Gagal memuat data</td>
            </tr>
        `;
        console.error(error);
    }
}

function lihatDetail(id) {
    window.location.href = `/detailkondisi/${id}`;
}

async function hapusData(id) {
    const konfirmasi = confirm('Yakin ingin menghapus data ini?');

    if (!konfirmasi) return;

    try {
        const response = await fetch(`/api/kondisi/${id}`, {
            method: 'DELETE',
            headers: {
                'Accept': 'application/json'
            }
        });

        if (!response.ok) {
            throw new Error('Gagal menghapus data');
        }

        alert('Data berhasil dihapus');
        loadKondisi();

    } catch (error) {
        alert('Data gagal dihapus');
        console.error(error);
    }
}

loadKondisi();
</script>

</body>
</html>