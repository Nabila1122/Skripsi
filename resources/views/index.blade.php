<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa</title>
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
<<!-- Navbar -->
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
<div class="container mt-3">
    <h5><strong>PENDAFTARAN SISWA</strong></h5>

    <!-- Form tambah/edit -->
    <form id="siswaForm">
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="nis" class="form-label">NIS</label>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="nama" class="form-label">Nama</label>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label">Jenis Kelamin</label>
            </div>
            <div class="col-md-8">
                <input type="radio" id="laki-laki" name="jenis_kelamin" value="L" required>
                <label for="laki-laki">Laki-laki</label>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="P" required>
                <label for="perempuan">Perempuan</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="usia" class="form-label">Usia</label>
            </div>
            <div class="col-md-8">
                <input type="number" class="form-control" id="usia" placeholder="Masukkan Usia" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="submitBtn">Tambah Siswa</button>
        <button type="button" class="btn btn-secondary" id="cancelBtn" style="display:none;">Batal Edit</button>
    </form>

    <hr>

    <h5><strong>DAFTAR SISWA</strong></h5>
<table class="table table-bordered transparent-table" id="siswaTable">
    <thead class="table-primary">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Usia</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <!-- Data akan dimuat lewat JS -->
    </tbody>
</table>
</div>

<div class="footer">Sistem Kesehatan Mental &copy; 2025 Nabila</div>

<script>
const apiUrl = 'http://127.0.0.1:8000/api/siswa';
let editId = null;

function loadSiswa() {
    fetch(apiUrl)
    .then(res => res.json())
    .then(data => {
        const tbody = document.querySelector('#siswaTable tbody');
        tbody.innerHTML = '';
        data.forEach(s => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${s.nis}</td>
                <td>${s.nama}</td>
                <td>${s.jenis_kelamin}</td>
                <td>${s.usia}</td>
                <td>
                    <button class="btn btn-warning btn-sm" onclick="editSiswa(${s.id_siswa}, '${s.nis}', '${s.nama}', '${s.jenis_kelamin}', ${s.usia})">Edit</button>
                </td>
            `;
            tbody.appendChild(tr);
        });
    });
}

document.getElementById('siswaForm').addEventListener('submit', function(e){
    e.preventDefault();
    const payload = {
        nis: document.getElementById('nis').value,
        nama: document.getElementById('nama').value,
        jenis_kelamin: document.querySelector('input[name="jenis_kelamin"]:checked').value,
        usia: parseInt(document.getElementById('usia').value)
    };
    if(editId){
        fetch(`${apiUrl}/${editId}`, {
            method: 'PUT',
            headers: {'Content-Type':'application/json'},
            body: JSON.stringify(payload)
        }).then(()=> { resetForm(); loadSiswa(); });
    } else {
        fetch(apiUrl, {
            method: 'POST',
            headers: {'Content-Type':'application/json'},
            body: JSON.stringify(payload)
        }).then(()=> { resetForm(); loadSiswa(); });
    }
});

function editSiswa(id, nis, nama, jk, usia){
    editId = id;
    document.getElementById('nis').value = nis;
    document.getElementById('nama').value = nama;
    document.querySelector(`input[name="jenis_kelamin"][value="${jk}"]`).checked = true;
    document.getElementById('usia').value = usia;
    document.getElementById('submitBtn').textContent = 'Simpan Perubahan';
    document.getElementById('cancelBtn').style.display = 'inline-block';
}

document.getElementById('cancelBtn').addEventListener('click', resetForm);
function resetForm(){
    editId = null;
    document.getElementById('siswaForm').reset();
    document.getElementById('submitBtn').textContent = 'Tambah Siswa';
    document.getElementById('cancelBtn').style.display = 'none';
}

window.onload = loadSiswa;
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>