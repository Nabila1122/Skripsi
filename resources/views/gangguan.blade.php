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
            padding: 5px 0; /* Mengurangi padding navbar untuk membuatnya lebih ramping */
        }
        .navbar-nav .nav-link {
            color: white !important;
            font-size: 14px; /* Mengurangi ukuran font di navbar */
            padding: 8px 12px; /* Mengurangi padding dalam setiap link navbar */
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
        /* Menyusun gambar secara sejajar */
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
            gap: 200px;
            object-fit: cover;
        }
        .hero-image {
            height: 2px;
            background-image: url('https://via.placeholder.com/150');
            background-size: cover;
            background-position: center;
            padding-bottom: 20px;
        }
        /* Menempatkan Navbar di kiri */
        .navbar-nav {
            margin-right: auto;
        }
        .container {
            margin-left: 20px; /* Menambah margin kiri untuk menyelaraskan dengan navbar */
            margin-bottom: 50px; /* Memberikan jarak bawah agar tombol tidak tertimpa footer */
        }

        .transparent-table th,
        .transparent-table td {
            border: 1px solid #0d0808; /* Memberikan border tipis pada tabel */
            padding: 5px; /* Memberikan padding pada sel */
        }

        .transparent-table th {
            background-color: #6478af; /* Latar belakang biru untuk header tabel */
            color: white; /* Teks header tabel menjadi putih */
            text-align: center;
        }

        /* Menambahkan warna latar belakang berbeda untuk baris pertama (nomor dan nama gangguan) */
        .transparent-table .highlight-row {
            background-color: #87CEEB; /* Latar belakang biru muda untuk baris pertama */
            color: black; /* Teks menjadi hitam pada baris pertama */
        }
        /* Rata kanan untuk kolom nomor */
        .transparent-table td:first-child {
            text-align: center; /* Rata tengah untuk kolom nomor */
        }

        /* Membuat kolom Nama Gangguan justify */
        .transparent-table td:nth-child(2) {
            text-align: left; /* Meratakan teks dalam kolom Nama Gangguan */
            word-wrap: break-word; /* Memastikan teks panjang tetap terpisah ke baris berikutnya */
        }
        .transparent-table td:last-child {
            width: 150px;  /* Menentukan lebar kolom Pilihan */
            text-align: justify; /* Rata tengah */
            padding-left: 5px; /* Menambah jarak di sebelah kiri untuk ruang lebih banyak */
            padding-right: 5px; /* Menambah jarak di sebelah kanan */
        }

        /* Mengatur teks di tengah pada modal header */
        .modal-header .modal-title {
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Hero Section (Gambar Teratas) -->
<div class="hero-image"></div>

<!-- Gambar Sejajar -->
<div class="image-container">
    <img src="images/icon4.png" alt="Gambar 1">
    <img src="images/icon5.png" alt="Gambar 2">
    <img src="images/icon2.png" alt="Gambar 3">
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">GANGGUAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">INDIKASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HASIL KONDISI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BASIS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LAPORAN KONDISI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PENGATURAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LOGOUT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero-image"></div>

<!-- Main Content -->
<div class="container mt-3">
    <h5 class="text-left"><strong>DAFTAR GANGGUAN</strong></h5>
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
        <tbody>
            <tr>
                <td>1</td>
                <td>G001</td>
                <td>Kecemasan</td>
                <td>
                    Mengidentifikasi pemicu, melatih relaksasi, mengalihkan fokus, menjaga pengendalian diri, berbicara dengan orang terpercaya, mencari bantuan profesional.
                </td>
                <td>
                    Untuk mengatasi kecemasan, penting untuk mengidentifikasi pemicu yang menyebabkan rasa cemas, melatih relaksasi, mengalihkan fokus, menjaga pengendalian diri, berbicara dengan orang terpercaya, dan mencari bantuan profesional jika diperlukan.
                </td>
                <td>0.3</td>
                <td><button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editModal" data-id="G001">Edit</button></td>
                <td><button class="btn btn-danger btn-sm delete-btn" data-bs-toggle="modal" data-bs-target="#hapusModal" data-id="G001">Hapus</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>G002</td>
                <td>Stres</td>
                <td>
                    Relaksasi mandiri, olahraga teratur, mengelola waktu, menciptakan lingkungan positif, menjaga pola makan sehat, konsultasi profesional.
                </td>
                <td>
                    Stres dapat dikelola dengan teknik relaksasi, berolahraga, mengelola waktu dengan baik, menciptakan lingkungan sosial yang positif, menjaga pola makan sehat, dan berkonsultasi dengan tenaga profesional untuk penanganan lebih lanjut.
                </td>
                <td>0.2</td>
                <td><button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editModal" data-id="G002">Edit</button></td>
                <td><button class="btn btn-danger btn-sm delete-btn" data-bs-toggle="modal" data-bs-target="#hapusModal" data-id="G002">Hapus</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>G003</td>
                <td>Depresi</td>
                <td>
                    Mengenali nilai diri, aktivitas positif, relaksasi, menghindari perilaku merugikan, berbagi perasaan, menjaga keseimbangan hidup, konsultasi profesional.
                </td>
                <td>
                    Mengatasi depresi membutuhkan pengelolaan emosi yang sehat, mengenali nilai diri, melakukan aktivitas positif, latihan pernapasan atau meditasi, menghindari perilaku merugikan, berbagi perasaan, menjaga keseimbangan hidup, dan mencari bantuan profesional.
                </td>
                <td>0.2</td>
                <td><button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editModal" data-id="G003">Edit</button></td>
                <td><button class="btn btn-danger btn-sm delete-btn" data-bs-toggle="modal" data-bs-target="#hapusModal" data-id="G003">Hapus</button></td>
            </tr>
            
        </tbody>
    </table>

    <!-- Tombol untuk membuka modal tambah gangguan -->
    <div class="text-center">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahGangguanModal">Tambah Data Gangguan</button>
    </div>
</div>

<!-- Modal Edit Gangguan -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #00aaff; color: white;">
        <h5 class="modal-title" id="editModalLabel">Edit Gangguan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="editKode" class="form-label">Kode</label>
                <input type="text" class="form-control" id="editKode" value="G001">
            </div>
            <div class="mb-3">
                <label for="editNama" class="form-label">Nama Gangguan</label>
                <input type="text" class="form-control" id="editNama" value="Kecemasan">
            </div>
            <div class="mb-3">
                <label for="editMitigasi" class="form-label">Mitigasi</label>
                <textarea class="form-control" id="editMitigasi" rows="3">Mengidentifikasi pemicu, melatih relaksasi, mengalihkan fokus, menjaga pengendalian diri, berbicara dengan orang terpercaya, mencari bantuan profesional.</textarea>
            </div>
            <div class="mb-3">
                <label for="editSolusi" class="form-label">Solusi</label>
                <textarea class="form-control" id="editSolusi" rows="3">Untuk mengatasi kecemasan, penting untuk mengidentifikasi pemicu yang menyebabkan rasa cemas, melatih relaksasi, mengalihkan fokus, menjaga pengendalian diri, berbicara dengan orang terpercaya, dan mencari bantuan profesional jika diperlukan.</textarea>
            </div>
            <div class="mb-3">
                <label for="editSasaran" class="form-label">Sasaran</label>
                <input type="text" class="form-control" id="editSasaran" value="0.3">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal untuk tambah gangguan -->
<div class="modal fade" id="tambahGangguanModal" tabindex="-1" aria-labelledby="tambahGangguanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #00aaff; color: white;">
        <h5 class="modal-title" id="tambahGangguanModalLabel">Tambah Gangguan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="kode" class="form-label">Kode Gangguan</label>
                <input type="text" class="form-control" id="kode" placeholder="Masukkan Kode Gangguan">
            </div>
            <div class="mb-3">
                <label for="nama_gangguan" class="form-label">Nama Gangguan</label>
                <input type="text" class="form-control" id="nama_gangguan" placeholder="Masukkan Nama Gangguan">
            </div>
            <div class="mb-3">
                <label for="mitigasi" class="form-label">Mitigasi</label>
                <input type="text" class="form-control" id="mitigasi" placeholder="Masukkan Mitigasi">
            </div>
            <div class="mb-3">
                <label for="solusi" class="form-label">Solusi</label>
                <input type="text" class="form-control" id="solusi" placeholder="Masukkan Solusi">
            </div>
            <div class="mb-3">
                <label for="sasaran" class="form-label">Sasaran</label>
                <input type="text" class="form-control" id="sasaran" placeholder="Masukkan Sasaran">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal Hapus Gangguan -->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f44336; color: white;">
        <h5 class="modal-title" id="hapusModalLabel">Hapus Gangguan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus gangguan ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>


<!-- Footer -->
<div class="footer">
    <p>Sistem Kondisi Kesehatan Mental c2025 Nabila</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Fungsi untuk menangani klik tombol Edit
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const nama = this.closest('tr').querySelector('td:nth-child(3)').textContent;
            const mitigasi = this.closest('tr').querySelector('td:nth-child(4)').textContent;
            const solusi = this.closest('tr').querySelector('td:nth-child(5)').textContent;
            const sasaran = this.closest('tr').querySelector('td:nth-child(6)').textContent;

            // Mengisi data ke dalam modal
            document.getElementById('editKode').value = id;
            document.getElementById('editNama').value = nama;
            document.getElementById('editMitigasi').value = mitigasi;
            document.getElementById('editSolusi').value = solusi;
            document.getElementById('editSasaran').value = sasaran;
        });
    });

    // Fungsi untuk menangani klik tombol Hapus
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');

            // Menyimpan ID gangguan yang akan dihapus
            const confirmDelete = document.querySelector('.modal-footer .btn-danger');
            confirmDelete.onclick = function() {
                // Logika untuk menghapus data gangguan, misalnya menghapus barisnya
                alert(`Gangguan dengan ID: ${id} akan dihapus`);
                // Anda dapat menambahkan kode di sini untuk menghapus data dari server atau tabel
            };
        });
    });
</script>

</body>
</html>
