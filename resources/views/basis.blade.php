<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Basis</title>
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
.modal-header .modal-title { text-align: center; width: 100%; }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
<div class="container-fluid">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="#">BASIS</a></li>
        <!-- Tambah menu lain jika perlu -->
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

<div class="footer">Sistem Kesehatan Mental</div>

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