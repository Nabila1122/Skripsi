<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Basis</title>
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
<h5><strong>DAFTAR BASIS</strong></h5>
<table class="table table-bordered transparent-table">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Gangguan</th>
            <th>Kode Indikasi</th>
            <th>Nilai Peluang</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody id="basis-table-body">
        <!-- Data akan dimuat dari API -->
    </tbody>
</table>
<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddBasis">Tambah Basis</button>
</div>

<!-- Modal Tambah / Edit Basis -->
<div class="modal fade" id="modalAddBasis" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header" style="background-color:#00aaff;color:white;">
        <h5 class="modal-title" id="modalTitle">Tambah Basis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
        <form id="basisForm">
            <input type="hidden" id="basisId">
            <div class="mb-3">
                <label>Kode Gangguan</label>
                <input type="text" id="kdGangguan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Kode Indikasi</label>
                <input type="text" id="kdIndikasi" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Bobot</label>
                <input type="number" id="bobot" class="form-control" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary" id="saveButton">Simpan</button>
        </form>
    </div>
</div>
</div>
</div>

<div class="footer">Sistem Kesehatan Mental &copy; 2025 Nabila</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
const endpoint = "http://127.0.0.1:8000/api/basis";

async function loadBasis() {
    try {
        const res = await fetch(endpoint);
        const data = await res.json();
        const tbody = document.getElementById('basis-table-body');
        tbody.innerHTML = '';
        data.forEach((item, index) => {
            tbody.innerHTML += `
                <tr>
                    <td>${index+1}</td>
                    <td>${item.kd_gangguan}</td>
                    <td>${item.kd_indikasi}</td>
                    <td>${item.bobot}</td>
                    <td><button class="btn btn-warning btn-sm" onclick="editBasis(${item.id_basis}, '${item.kd_gangguan}', '${item.kd_indikasi}', ${item.bobot})">Edit</button></td>
                    <td><button class="btn btn-danger btn-sm" onclick="deleteBasis(${item.id_basis})">Hapus</button></td>
                </tr>
            `;
        });
    } catch(e) { console.error(e); }
}

function editBasis(id, kdG, kdI, bobot){
    document.getElementById('modalTitle').innerText = 'Edit Basis';
    document.getElementById('basisId').value = id;
    document.getElementById('kdGangguan').value = kdG;
    document.getElementById('kdIndikasi').value = kdI;
    document.getElementById('bobot').value = bobot;
    new bootstrap.Modal(document.getElementById('modalAddBasis')).show();
}

async function deleteBasis(id){
    if(confirm('Yakin ingin menghapus?')){
        await fetch(`${endpoint}/${id}`, { method: 'DELETE' });
        loadBasis();
    }
}

document.getElementById('basisForm').addEventListener('submit', async function(e){
    e.preventDefault();
    const id = document.getElementById('basisId').value;
    const payload = {
        kd_gangguan: document.getElementById('kdGangguan').value,
        kd_indikasi: document.getElementById('kdIndikasi').value,
        bobot: parseFloat(document.getElementById('bobot').value)
    };
    if(id){ // edit
        await fetch(`${endpoint}/${id}`, { 
            method:'PUT', 
            headers:{'Content-Type':'application/json'},
            body: JSON.stringify(payload)
        });
    } else { // tambah
        await fetch(endpoint, { 
            method:'POST', 
            headers:{'Content-Type':'application/json'},
            body: JSON.stringify(payload)
        });
    }
    new bootstrap.Modal(document.getElementById('modalAddBasis')).hide();
    loadBasis();
});

window.onload = loadBasis;
</script>
</body>
</html>