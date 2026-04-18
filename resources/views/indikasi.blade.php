<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indikasi</title>
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

<!-- CONTENT -->
<div class="container mt-3">
    <h5><strong>DAFTAR INDIKASI</strong></h5>

    <table class="table table-bordered transparent-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Indikasi</th>
                <th>Nama Indikasi</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody id="indikasiBody"></tbody>
    </table>

    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahIndikasi">
        Tambah Data
    </button>
</div>

<!-- MODAL TAMBAH -->
<div class="modal fade" id="modalTambahIndikasi">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5>Tambah Indikasi</h5>
      </div>
      <div class="modal-body">
        <input type="text" id="kodeIndikasi" class="form-control mb-2" placeholder="Kode">
        <input type="text" id="namaIndikasi" class="form-control mb-2" placeholder="Nama">
        <button class="btn btn-primary" onclick="tambahIndikasi()">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL EDIT -->
<div class="modal fade" id="modalEditIndikasi">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-warning text-white">
        <h5>Edit Indikasi</h5>
      </div>
      <div class="modal-body">
        <input type="hidden" id="editIdIndikasi">
        <input type="text" id="editKodeIndikasi" class="form-control mb-2" readonly>
        <input type="text" id="editNamaIndikasi" class="form-control mb-2">
        <button class="btn btn-primary" onclick="editIndikasiSubmit()">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL HAPUS -->
<div class="modal fade" id="modalHapusIndikasi">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5>Hapus Indikasi</h5>
      </div>
      <div class="modal-body">
        <p>Yakin hapus <strong id="hapusNamaIndikasi"></strong>?</p>
        <button class="btn btn-danger" onclick="hapusIndikasiConfirm()">Hapus</button>
      </div>
    </div>
  </div>
</div>

<div class="footer">Sistem Kesehatan Mental &copy; 2025 Nabila</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
const apiUrl = 'http://127.0.0.1:8000/api/indikasi';
let currentDeleteId = null;

/* ================== LOAD DATA ================== */
function fetchIndikasi() {
    fetch(apiUrl)
    .then(res => res.json())
    .then(data => {
        const tbody = document.getElementById('indikasiBody');
        tbody.innerHTML = '';

        data.forEach((item,index)=>{
            tbody.innerHTML += `
            <tr>
                <td>${index+1}</td>
                <td>${item.kd_indikasi}</td>
                <td>${item.nama_indikasi}</td>
                <td>
                    <button class="btn btn-warning btn-sm"
                        onclick="openEditModal('${item.id_indikasi}','${item.kd_indikasi}','${item.nama_indikasi}')">
                        Edit
                    </button>
                </td>
                <td>
                    <button class="btn btn-danger btn-sm"
                        onclick="openDeleteModal('${item.id_indikasi}','${item.nama_indikasi}')">
                        Hapus
                    </button>
                </td>
            </tr>`;
        });
    });
}

/* ================== TAMBAH ================== */
function tambahIndikasi(){
    const kode = document.getElementById('kodeIndikasi').value;
    const nama = document.getElementById('namaIndikasi').value;

    fetch(apiUrl,{
        method:'POST',
        headers:{'Content-Type':'application/json'},
        body: JSON.stringify({
            kd_indikasi: kode,
            nama_indikasi: nama
        })
    }).then(()=>{
        fetchIndikasi();
        bootstrap.Modal.getInstance(document.getElementById('modalTambahIndikasi')).hide();
    });
}

/* ================== EDIT ================== */
function openEditModal(id,kode,nama){
    document.getElementById('editIdIndikasi').value=id;
    document.getElementById('editKodeIndikasi').value=kode;
    document.getElementById('editNamaIndikasi').value=nama;

    new bootstrap.Modal(document.getElementById('modalEditIndikasi')).show();
}

function editIndikasiSubmit(){
    const id = document.getElementById('editIdIndikasi').value;
    const kode = document.getElementById('editKodeIndikasi').value;
    const nama = document.getElementById('editNamaIndikasi').value;

    fetch(`${apiUrl}/${id}`,{
        method:'PUT',
        headers:{'Content-Type':'application/json'},
        body: JSON.stringify({
            kd_indikasi: kode,
            nama_indikasi: nama
        })
    }).then(()=>{
        fetchIndikasi();
        bootstrap.Modal.getInstance(document.getElementById('modalEditIndikasi')).hide();
    });
}

/* ================== HAPUS ================== */
function openDeleteModal(id,nama){
    currentDeleteId = id;
    document.getElementById('hapusNamaIndikasi').innerText = nama;

    new bootstrap.Modal(document.getElementById('modalHapusIndikasi')).show();
}

function hapusIndikasiConfirm(){
    fetch(`${apiUrl}/${currentDeleteId}`,{method:'DELETE'})
    .then(()=>{
        fetchIndikasi();
        bootstrap.Modal.getInstance(document.getElementById('modalHapusIndikasi')).hide();
    });
}

/* ================== INIT ================== */
document.addEventListener('DOMContentLoaded', fetchIndikasi);
</script>

</body>
</html>