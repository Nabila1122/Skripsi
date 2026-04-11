<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indikasi</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body { background-color: #f0f8ff; font-family: Arial, sans-serif; }
    .navbar { background-color: #00aaff; padding: 5px 0; }
    .navbar-nav .nav-link { color: white !important; font-size: 14px; padding: 8px 12px; }
    .footer { background-color: #00aaff; color: white; padding: 5px 0; font-size: 12px; text-align: center; position: fixed; width: 100%; bottom: 0; }
    .container { margin-left: 20px; margin-bottom: 50px; }
    .transparent-table th, .transparent-table td { border: 1px solid #0d0808; padding: 5px; }
    .transparent-table th { background-color: #6478af; color: white; text-align: center; }
    .transparent-table td:first-child { text-align: center; }
    .transparent-table td:nth-child(2) { text-align: left; word-wrap: break-word; }
    .transparent-table td:last-child { width: 150px; text-align: justify; padding: 0 5px; }
</style>
</head>
<body>

<!-- Navbar sederhana -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">GANGGUAN</a></li>
            <li class="nav-item"><a class="nav-link active" href="#">INDIKASI</a></li>
            <li class="nav-item"><a class="nav-link" href="#">HASIL KONSULTASI</a></li>
            <li class="nav-item"><a class="nav-link" href="#">BASIS</a></li>
            <li class="nav-item"><a class="nav-link" href="#">LAPORAN KONDISI</a></li>
            <li class="nav-item"><a class="nav-link" href="#">PENGATURAN</a></li>
            <li class="nav-item"><a class="nav-link" href="#">LOGOUT</a></li>
        </ul>
    </div>
</nav>

<!-- Main Content -->
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
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahIndikasi">Tambah Data Indikasi</button>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambahIndikasi" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#00aaff;color:white">
        <h5 class="modal-title">Tambah Indikasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="text" id="kodeIndikasi" class="form-control mb-2" placeholder="Kode Indikasi">
        <input type="text" id="namaIndikasi" class="form-control mb-2" placeholder="Nama Indikasi">
        <button class="btn btn-primary" onclick="tambahIndikasi()">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="modalEditIndikasi" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#00aaff;color:white">
        <h5 class="modal-title">Edit Indikasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="editIdIndikasi">
        <input type="text" id="editKodeIndikasi" class="form-control mb-2" placeholder="Kode Indikasi" readonly>
        <input type="text" id="editNamaIndikasi" class="form-control mb-2" placeholder="Nama Indikasi">
        <button class="btn btn-primary" onclick="editIndikasiSubmit()">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="modalHapusIndikasi" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#ff4d4d;color:white">
        <h5 class="modal-title">Hapus Indikasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus <strong id="hapusNamaIndikasi"></strong>?</p>
        <button class="btn btn-danger" onclick="hapusIndikasiConfirm()">Hapus</button>
      </div>
    </div>
  </div>
</div>

<div class="footer">Sistem Kesehatan Mental &copy; 2025</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
const apiUrl = 'http://127.0.0.1:8000/api/indikasi';
let currentDeleteId = null;

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
                    <td>${item.kode_indikasi}</td>
                    <td>${item.nama_indikasi}</td>
                    <td><button class="btn btn-warning btn-sm" onclick="openEditModal('${item.id_indikasi}','${item.kode_indikasi}','${item.nama_indikasi}')">Edit</button></td>
                    <td><button class="btn btn-danger btn-sm" onclick="openDeleteModal('${item.id_indikasi}','${item.nama_indikasi}')">Hapus</button></td>
                </tr>`;
            });
        });
}

// Tambah
function tambahIndikasi(){
    const kode = document.getElementById('kodeIndikasi').value;
    const nama = document.getElementById('namaIndikasi').value;
    fetch(apiUrl, {
        method:'POST',
        headers:{'Content-Type':'application/json'},
        body: JSON.stringify({kode_indikasi:kode,nama_indikasi:nama})
    }).then(()=>{ fetchIndikasi(); bootstrap.Modal.getInstance(document.getElementById('modalTambahIndikasi')).hide(); });
}

// Edit
function openEditModal(id,kode,nama){
    document.getElementById('editIdIndikasi').value=id;
    document.getElementById('editKodeIndikasi').value=kode;
    document.getElementById('editNamaIndikasi').value=nama;
    new bootstrap.Modal(document.getElementById('modalEditIndikasi')).show();
}
function editIndikasiSubmit(){
    const id = document.getElementById('editIdIndikasi').value;
    const nama = document.getElementById('editNamaIndikasi').value;
    fetch(`${apiUrl}/${id}`,{
        method:'PUT',
        headers:{'Content-Type':'application/json'},
        body: JSON.stringify({nama_indikasi:nama})
    }).then(()=>{ fetchIndikasi(); bootstrap.Modal.getInstance(document.getElementById('modalEditIndikasi')).hide(); });
}

// Hapus
function openDeleteModal(id,nama){
    currentDeleteId = id;
    document.getElementById('hapusNamaIndikasi').innerText = nama;
    new bootstrap.Modal(document.getElementById('modalHapusIndikasi')).show();
}
function hapusIndikasiConfirm(){
    fetch(`${apiUrl}/${currentDeleteId}`,{method:'DELETE'})
        .then(()=>{ fetchIndikasi(); bootstrap.Modal.getInstance(document.getElementById('modalHapusIndikasi')).hide(); });
}

// Load data saat halaman siap
document.addEventListener('DOMContentLoaded', fetchIndikasi);
</script>
</body>
</html>