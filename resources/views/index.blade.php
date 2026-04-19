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
    padding-bottom: 100px; /* ruang untuk footer */
}

.navbar {
    background-color: #00aaff;
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
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
    padding: 10px 0;
    font-size: 14px;
}

.container {
    max-width: 750px;
    margin: 0 auto;
    padding-top: 20px;
}

.hero-image {
    height: 2px;
    background-image: url('https://via.placeholder.com/150');
    background-size: cover;
    background-position: center;
    margin-bottom: 20px;
}

.image-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 200px;
    margin-bottom: 20px;
}

.image-container img {
    width: 150px;
    height: 150px;
    object-fit: cover;
}

.card {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    margin-bottom: 20px;
}

.form-label {
    font-weight: bold;
}

.radio-inline {
    margin-right: 15px;
}

.transparent-table th {
    background-color: #6478af;
    color: white;
    text-align: center;
}
</style>
</head>
<body>

<!-- Hero -->
<div class="hero-image"></div>

<!-- Icon Section (foto/icon) -->
<div class="image-container">
    <img src="{{ asset('images/icon4.png') }}" alt="Gambar 1">
    <img src="{{ asset('images/icon5.png') }}" alt="Gambar 2">
    <img src="{{ asset('images/icon2.png') }}" alt="Gambar 3">
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">BERANDA</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('tentang_kesehatan_mental') }}">TENTANG KESEHATAN MENTAL</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('konsultasi') }}">KONSULTASI</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('login_admin') }}">LOGIN</a></li>
        </ul>
    </div>
</nav>

<div class="container mt-3">

<h5><strong>PENDAFTARAN SISWA</strong></h5>

<!-- Form tambah/edit -->
<div class="card">
<form id="siswaForm">
    <div class="row mb-3">
        <div class="col-md-4"><label for="nis" class="form-label">NIS</label></div>
        <div class="col-md-8"><input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" required></div>
    </div>

    <div class="row mb-3">
        <div class="col-md-4"><label for="nama" class="form-label">Nama</label></div>
        <div class="col-md-8"><input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required></div>
    </div>

    <div class="row mb-3">
        <div class="col-md-4"><label class="form-label">Jenis Kelamin</label></div>
        <div class="col-md-8">
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="laki-laki" name="jenis_kelamin" value="L" required>
                <label class="form-check-label" for="laki-laki">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="perempuan" name="jenis_kelamin" value="P" required>
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-4"><label for="usia" class="form-label">Usia</label></div>
        <div class="col-md-8"><input type="number" class="form-control" id="usia" placeholder="Masukkan Usia" required></div>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary" id="submitBtn">Tambah Siswa</button>
        <button type="button" class="btn btn-secondary" id="cancelBtn" style="display:none;">Batal Edit</button>
    </div>
</form>
</div>

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