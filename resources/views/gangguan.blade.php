<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gangguan</title>
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
    .transparent-table td:nth-child(2), .transparent-table td:nth-child(3), .transparent-table td:nth-child(4), .transparent-table td:nth-child(5) { text-align: left; word-wrap: break-word; }
    .transparent-table td:last-child { width: 150px; text-align: justify; padding: 0 5px; }
</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link active" href="#">GANGGUAN</a></li>
      <li class="nav-item"><a class="nav-link" href="#">INDIKASI</a></li>
      <li class="nav-item"><a class="nav-link" href="#">HASIL KONSULTASI</a></li>
    </ul>
    <!-- Tombol Logout di kanan -->
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="btn btn-danger btn-sm" href="{{ route('logout_admin') }}">Logout</a>
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

<div class="footer">Sistem Kesehatan Mental &copy; 2025</div>

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