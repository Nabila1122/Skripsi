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

        .container {
            margin-left: 10px;
            padding-bottom: 80px;
        }

        .transparent-table th {
            background-color: #6478af;
            color: white;
            text-align: center;
        }

        .transparent-table td {
            vertical-align: middle;
        }

        .aksi-btn {
            display: flex;
            gap: 5px;
            justify-content: center;
        }

        .custom-logout {
            background-color: #f44336;
            color: white;
            padding: 5px 15px;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .custom-logout:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/gangguan">GANGGUAN</a></li>
            <li class="nav-item"><a class="nav-link" href="/indikasi">INDIKASI</a></li>
            <li class="nav-item"><a class="nav-link" href="/hasilkonsultasi">HASIL KONSULTASI</a></li>
            <li class="nav-item"><a class="nav-link" href="/basis">BASIS</a></li>
            <li class="nav-item"><a class="nav-link active" href="/laporankondisi">LAPORAN KONDISI</a></li>
            <li class="nav-item"><a class="nav-link" href="/pengaturan">PENGATURAN</a></li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="btn btn-danger btn-sm custom-logout" href="{{ route('logout_admin') }}">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <h4><strong>DAFTAR LAPORAN KONDISI</strong></h4>

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