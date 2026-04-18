<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gangguan</title>
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
    <h5><strong>DAFTAR GANGGUAN</strong></h5>
    <table class="table table-bordered transparent-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Gangguan</th>
                <th>Nama Gangguan</th>
                <th>Mitigasi</th>
                <th>Solusi</th>
                <th>NP Sasaran</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody id="gangguanBody"></tbody>
    </table>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah Gangguan</button>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#00aaff;color:white">
        <h5 class="modal-title">Tambah Gangguan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="text" id="tambahKode" class="form-control mb-2" placeholder="Kode Gangguan">
        <input type="text" id="tambahNama" class="form-control mb-2" placeholder="Nama Gangguan">
        <textarea id="tambahMitigasi" class="form-control mb-2" placeholder="Mitigasi"></textarea>
        <textarea id="tambahSolusi" class="form-control mb-2" placeholder="Solusi"></textarea>
        <input type="text" id="tambahSasaran" class="form-control mb-2" placeholder="NP Sasaran">
        <button class="btn btn-primary" onclick="tambahGangguan()">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#00aaff;color:white">
        <h5 class="modal-title">Edit Gangguan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="editId">
        <input type="text" id="editKode" class="form-control mb-2" placeholder="Kode" readonly>
        <input type="text" id="editNama" class="form-control mb-2" placeholder="Nama Gangguan">
        <textarea id="editMitigasi" class="form-control mb-2" placeholder="Mitigasi"></textarea>
        <textarea id="editSolusi" class="form-control mb-2" placeholder="Solusi"></textarea>
        <input type="text" id="editSasaran" class="form-control mb-2" placeholder="NP Sasaran">
        <button class="btn btn-primary" onclick="editGangguan()">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f44336;color:white">
        <h5 class="modal-title">Hapus Gangguan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus gangguan ini?</p>
        <button class="btn btn-danger" id="confirmDelete">Hapus</button>
      </div>
    </div>
  </div>
</div>

<div class="footer">Sistem Kesehatan Mental &copy; 2025 Nabila</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
const apiUrl = 'http://127.0.0.1:8000/api/gangguan';
let deleteId = null;

// Fetch data dan tampilkan di tabel
function fetchGangguan(){
    fetch(apiUrl)
    .then(res=>res.json())
    .then(data=>{
        const tbody = document.getElementById('gangguanBody');
        tbody.innerHTML='';
        data.forEach((item,index)=>{
            tbody.innerHTML += `
            <tr>
                <td>${index+1}</td>
                <td>${item.kd_gangguan}</td>
                <td>${item.nama_gangguan}</td>
                <td>${item.mitigasi}</td>
                <td>${item.solusi}</td>
                <td>${item.np_sasaran}</td>
                <td><button class="btn btn-warning btn-sm" onclick="openEdit('${item.id_gangguan}','${item.kd_gangguan}','${item.nama_gangguan}','${item.mitigasi}','${item.solusi}','${item.np_sasaran}')">Edit</button></td>
                <td><button class="btn btn-danger btn-sm" onclick="openHapus('${item.id_gangguan}')">Hapus</button></td>
            </tr>`;
        });
    });
}

// Tambah Gangguan
function tambahGangguan(){
    const data = {
        kd_gangguan: document.getElementById('tambahKode').value,
        nama_gangguan: document.getElementById('tambahNama').value,
        mitigasi: document.getElementById('tambahMitigasi').value,
        solusi: document.getElementById('tambahSolusi').value,
        np_sasaran: document.getElementById('tambahSasaran').value
    };
    fetch(apiUrl,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify(data)})
    .then(()=>{ fetchGangguan(); bootstrap.Modal.getInstance(document.getElementById('tambahModal')).hide(); });
}

// Edit Gangguan
function openEdit(id,kode,nama,mitigasi,solusi,sasaran){
    document.getElementById('editId').value=id;
    document.getElementById('editKode').value=kode;
    document.getElementById('editNama').value=nama;
    document.getElementById('editMitigasi').value=mitigasi;
    document.getElementById('editSolusi').value=solusi;
    document.getElementById('editSasaran').value=sasaran;
    new bootstrap.Modal(document.getElementById('editModal')).show();
}

function editGangguan(){
    const id = document.getElementById('editId').value;
    const data = {
        nama_gangguan: document.getElementById('editNama').value,
        mitigasi: document.getElementById('editMitigasi').value,
        solusi: document.getElementById('editSolusi').value,
        np_sasaran: document.getElementById('editSasaran').value
    };
    fetch(`${apiUrl}/${id}`,{method:'PUT',headers:{'Content-Type':'application/json'},body:JSON.stringify(data)})
    .then(()=>{ fetchGangguan(); bootstrap.Modal.getInstance(document.getElementById('editModal')).hide(); });
}

// Hapus Gangguan
function openHapus(id){
    deleteId=id;
    new bootstrap.Modal(document.getElementById('hapusModal')).show();
}
document.getElementById('confirmDelete').addEventListener('click', ()=>{
    fetch(`${apiUrl}/${deleteId}`,{method:'DELETE'})
    .then(()=>{ fetchGangguan(); bootstrap.Modal.getInstance(document.getElementById('hapusModal')).hide(); });
});

// Load data saat halaman siap
document.addEventListener('DOMContentLoaded', fetchGangguan);
</script>
</body>
</html>