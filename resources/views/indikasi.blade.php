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
    <h5 class="text-left"><strong>DAFTAR INDIKASI</strong></h5>
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
        <tbody>
            <!-- Contoh Baris -->
             <tr>
                <td>1</td>
                <td>I01</td>
                <td>Merasakan kesedihan yang berlangsung lama</td>
                <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I01', 'Merasakan kesedihan yang berlangsung lama')">Edit</button></td>
                <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I01', 'Merasakan kesedihan yang berlangsung lama')">Hapus</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>I02</td>
                <td>Mengalami suasana hati yang jauh lebih bersemangat dari kondisi biasanya</td>
                <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I02', 'Mengalami suasana hati yang jauh lebih bersemangat dari kondisi biasanya')">Edit</button></td>
                <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I02', 'Mengalami suasana hati yang jauh lebih bersemangat dari kondisi biasanya')">Hapus</button></td>
            </tr>
            <!-- Repeat for all other rows from I03 to I39 -->
            <tr>
                <td>3</td>
                <td>I03</td>
                <td>Memiliki ketakutan yang berlebihan</td>
                <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I03', 'Memiliki ketakutan yang berlebihan')">Edit</button></td>
                <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I03', 'Memiliki ketakutan yang berlebihan')">Hapus</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>I04</td>
                <td>Merasa cemas, khawatir, atau gelisah hampir sepanjang waktu</td>
                <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I04', 'Merasa cemas, khawatir, atau gelisah hampir sepanjang waktu')">Edit</button></td>
                <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I04', 'Merasa cemas, khawatir, atau gelisah hampir sepanjang waktu')">Hapus</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>I05</td>
                <td>Cenderung menghindari interaksi sosial dan lebih memilih menyendiri</td>
                <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I05', 'Cenderung menghindari interaksi sosial dan lebih memilih menyendiri')">Edit</button></td>
                <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I05', 'Cenderung menghindari interaksi sosial dan lebih memilih menyendiri')">Hapus</button></td>
            </tr>
            <tr>
                <td>6</td>
                <td>I06</td>
                <td>Mengalami gangguan pola tidur, seperti sulit tidur, sering terbangun, mimpi buruk, atau tidur berlebihan</td>
                <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I06', 'Mengalami gangguan pola tidur, seperti sulit tidur, sering terbangun, mimpi buruk, atau tidur berlebihan')">Edit</button></td>
                <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I06', 'Mengalami gangguan pola tidur, seperti sulit tidur, sering terbangun, mimpi buruk, atau tidur berlebihan')">Hapus</button></td>
            </tr>
            <tr>
    <td>7</td>
    <td>I07</td>
    <td>Terjadi perubahan pola makan, baik peningkatan maupun penurunan nafsu makan</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I07', 'Terjadi perubahan pola makan, baik peningkatan maupun penurunan nafsu makan')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I07', 'Terjadi perubahan pola makan, baik peningkatan maupun penurunan nafsu makan')">Hapus</button></td>
</tr>
<tr>
    <td>8</td>
    <td>I08</td>
    <td>Menjadi lebih mudah marah atau tersinggung</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I08', 'Menjadi lebih mudah marah atau tersinggung')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I08', 'Menjadi lebih mudah marah atau tersinggung')">Hapus</button></td>
</tr>
<tr>
    <td>9</td>
    <td>I09</td>
    <td>Merasa tidak berharga, tidak mampu, atau tidak berguna</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I09', 'Merasa tidak berharga, tidak mampu, atau tidak berguna')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I09', 'Merasa tidak berharga, tidak mampu, atau tidak berguna')">Hapus</button></td>
</tr>
<tr>
    <td>10</td>
    <td>I10</td>
    <td>Mengalami penurunan rasa percaya diri</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I10', 'Mengalami penurunan rasa percaya diri')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I10', 'Mengalami penurunan rasa percaya diri')">Hapus</button></td>
</tr>
<tr>
    <td>11</td>
    <td>I11</td>
    <td>Takut berbuat kesalahan, kesulitan mengambil keputusan, atau merasa bersalah secara berlebihan</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I11', 'Takut berbuat kesalahan, kesulitan mengambil keputusan, atau merasa bersalah secara berlebihan')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I11', 'Takut berbuat kesalahan, kesulitan mengambil keputusan, atau merasa bersalah secara berlebihan')">Hapus</button></td>
</tr>
<tr>
    <td>12</td>
    <td>I12</td>
    <td>Sulit fokus atau mengalami hambatan saat melakukan aktivitas</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I12', 'Sulit fokus atau mengalami hambatan saat melakukan aktivitas')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I12', 'Sulit fokus atau mengalami hambatan saat melakukan aktivitas')">Hapus</button></td>
</tr>
<tr>
    <td>13</td>
    <td>I13</td>
    <td>Kehilangan ketertarikan terhadap hal-hal yang sebelumnya disukai</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I13', 'Kehilangan ketertarikan terhadap hal-hal yang sebelumnya disukai')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I13', 'Kehilangan ketertarikan terhadap hal-hal yang sebelumnya disukai')">Hapus</button></td>
</tr>
<tr>
    <td>14</td>
    <td>I14</td>
    <td>Mengalami keringat dingin</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I14', 'Mengalami keringat dingin')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I14', 'Mengalami keringat dingin')">Hapus</button></td>
</tr>
<tr>
    <td>15</td>
    <td>I15</td>
    <td>Merasakan nyeri atau ketidaknyamanan pada perut</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I15', 'Merasakan nyeri atau ketidaknyamanan pada perut')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I15', 'Merasakan nyeri atau ketidaknyamanan pada perut')">Hapus</button></td>
</tr>
<tr>
    <td>16</td>
    <td>I16</td>
    <td>Mengalami sakit kepala secara mendadak</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I16', 'Mengalami sakit kepala secara mendadak')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I16', 'Mengalami sakit kepala secara mendadak')">Hapus</button></td>
</tr>
<tr>
    <td>17</td>
    <td>I17</td>
    <td>Pandangan berkunang-kunang atau merasa hampir pingsan</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I17', 'Pandangan berkunang-kunang atau merasa hampir pingsan')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I17', 'Pandangan berkunang-kunang atau merasa hampir pingsan')">Hapus</button></td>
</tr>
<tr>
    <td>18</td>
    <td>I18</td>
    <td>Merasa mual</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I18', 'Merasa mual')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I18', 'Merasa mual')">Hapus</button></td>
</tr>
<tr>
    <td>19</td>
    <td>I19</td>
    <td>Mengalami muntah</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I19', 'Mengalami muntah')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I19', 'Mengalami muntah')">Hapus</button></td>
</tr>
<tr>
    <td>20</td>
    <td>I20</td>
    <td>Jantung berdebar, tubuh gemetar, atau kesulitan bernapas</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I20', 'Jantung berdebar, tubuh gemetar, atau kesulitan bernapas')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I20', 'Jantung berdebar, tubuh gemetar, atau kesulitan bernapas')">Hapus</button></td>
</tr>
<tr>
    <td>21</td>
    <td>I21</td>
    <td>Mudah menangis tanpa sebab yang jelas</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I21', 'Mudah menangis tanpa sebab yang jelas')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I21', 'Mudah menangis tanpa sebab yang jelas')">Hapus</button></td>
</tr>
<tr>
    <td>22</td>
    <td>I22</td>
    <td>Merasa putus asa</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I22', 'Merasa putus asa')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I22', 'Merasa putus asa')">Hapus</button></td>
</tr>
<tr>
    <td>23</td>
    <td>I23</td>
    <td>Sering muncul pikiran tentang kematian atau keinginan untuk mengakhiri hidup</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I23', 'Sering muncul pikiran tentang kematian atau keinginan untuk mengakhiri hidup')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I23', 'Sering muncul pikiran tentang kematian atau keinginan untuk mengakhiri hidup')">Hapus</button></td>
</tr>
<tr>
    <td>24</td>
    <td>I24</td>
    <td>Melakukan tindakan yang membahayakan diri sendiri maupun orang lain</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I24', 'Melakukan tindakan yang membahayakan diri sendiri maupun orang lain')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I24', 'Melakukan tindakan yang membahayakan diri sendiri maupun orang lain')">Hapus</button></td>
</tr>
<tr>
    <td>25</td>
    <td>I25</td>
    <td>Mengalami penurunan energi, mudah lelah, atau sebaliknya tidak mudah merasa lelah</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I25', 'Mengalami penurunan energi, mudah lelah, atau sebaliknya tidak mudah merasa lelah')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I25', 'Mengalami penurunan energi, mudah lelah, atau sebaliknya tidak mudah merasa lelah')">Hapus</button></td>
</tr>
<tr>
    <td>26</td>
    <td>I26</td>
    <td>Terjadi perubahan berat badan yang signifikan, baik naik maupun turun</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I26', 'Terjadi perubahan berat badan yang signifikan, baik naik maupun turun')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I26', 'Terjadi perubahan berat badan yang signifikan, baik naik maupun turun')">Hapus</button></td>
</tr>
<tr>
    <td>27</td>
    <td>I27</td>
    <td>Sering melamun</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I27', 'Sering melamun')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I27', 'Sering melamun')">Hapus</button></td>
</tr>
<tr>
    <td>28</td>
    <td>I28</td>
    <td>Mengalami peningkatan energi yang jauh lebih tinggi dari biasanya</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I28', 'Mengalami peningkatan energi yang jauh lebih tinggi dari biasanya')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I28', 'Mengalami peningkatan energi yang jauh lebih tinggi dari biasanya')">Hapus</button></td>
</tr>
<tr>
    <td>29</td>
    <td>I29</td>
    <td>Memiliki banyak ide yang muncul secara berlebihan</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I29', 'Memiliki banyak ide yang muncul secara berlebihan')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I29', 'Memiliki banyak ide yang muncul secara berlebihan')">Hapus</button></td>
</tr>
<tr>
    <td>30</td>
    <td>I30</td>
    <td>Kebutuhan tidur berkurang atau merasa tidak memerlukan tidur</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I30', 'Kebutuhan tidur berkurang atau merasa tidak memerlukan tidur')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I30', 'Kebutuhan tidur berkurang atau merasa tidak memerlukan tidur')">Hapus</button></td>
</tr>
<tr>
    <td>31</td>
    <td>I31</td>
    <td>Berbicara lebih sering, lebih cepat, sulit dihentikan, dan sering memotong pembicaraan orang lain</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I31', 'Berbicara lebih sering, lebih cepat, sulit dihentikan, dan sering memotong pembicaraan orang lain')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I31', 'Berbicara lebih sering, lebih cepat, sulit dihentikan, dan sering memotong pembicaraan orang lain')">Hapus</button></td>
</tr>
<tr>
    <td>32</td>
    <td>I32</td>
    <td>Mengalami peningkatan dorongan atau pikiran seksual</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I32', 'Mengalami peningkatan dorongan atau pikiran seksual')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I32', 'Mengalami peningkatan dorongan atau pikiran seksual')">Hapus</button></td>
</tr>
<tr>
    <td>33</td>
    <td>I33</td>
    <td>Sulit mengendalikan diri dan cenderung bersikap impulsif</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I33', 'Sulit mengendalikan diri dan cenderung bersikap impulsif')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I33', 'Sulit mengendalikan diri dan cenderung bersikap impulsif')">Hapus</button></td>
</tr>
<tr>
    <td>34</td>
    <td>I34</td>
    <td>Menunjukkan perilaku tidak teratur atau sering bergerak tanpa tujuan (tidak bisa diam)</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I34', 'Menunjukkan perilaku tidak teratur atau sering bergerak tanpa tujuan (tidak bisa diam)')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I34', 'Menunjukkan perilaku tidak teratur atau sering bergerak tanpa tujuan (tidak bisa diam)')">Hapus</button></td>
</tr>
<tr>
    <td>35</td>
    <td>I35</td>
    <td>Mengalami waham, yaitu keyakinan yang keliru atau tidak sesuai dengan kenyataan</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I35', 'Mengalami waham, yaitu keyakinan yang keliru atau tidak sesuai dengan kenyataan')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I35', 'Mengalami waham, yaitu keyakinan yang keliru atau tidak sesuai dengan kenyataan')">Hapus</button></td>
</tr>
<tr>
    <td>36</td>
    <td>I36</td>
    <td>Mengalami halusinasi, seperti mendengar suara atau melihat sesuatu tanpa sumber nyata</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I36', 'Mengalami halusinasi, seperti mendengar suara atau melihat sesuatu tanpa sumber nyata')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I36', 'Mengalami halusinasi, seperti mendengar suara atau melihat sesuatu tanpa sumber nyata')">Hapus</button></td>
</tr>
<tr>
    <td>37</td>
    <td>I37</td>
    <td>Cara berbicara menjadi tidak jelas atau sulit dipahami</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I37', 'Cara berbicara menjadi tidak jelas atau sulit dipahami')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I37', 'Cara berbicara menjadi tidak jelas atau sulit dipahami')">Hapus</button></td>
</tr>
<tr>
    <td>38</td>
    <td>I38</td>
    <td>Mengalami gangguan dalam fungsi sosial, kegiatan sekolah, atau pekerjaan</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I38', 'Mengalami gangguan dalam fungsi sosial, kegiatan sekolah, atau pekerjaan')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I38', 'Mengalami gangguan dalam fungsi sosial, kegiatan sekolah, atau pekerjaan')">Hapus</button></td>
</tr>
<tr>
    <td>39</td>
    <td>I39</td>
    <td>Merasa curiga berlebihan atau yakin bahwa orang lain akan menyakiti dirinya</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditIndikasi" onclick="editIndikasi('I39', 'Merasa curiga berlebihan atau yakin bahwa orang lain akan menyakiti dirinya')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusIndikasi" onclick="setIndikasiToDelete('I39', 'Merasa curiga berlebihan atau yakin bahwa orang lain akan menyakiti dirinya')">Hapus</button></td>
</tr>


        </tbody>
    </table>

    <!-- Modal Tambah Data Indikasi -->
<div class="modal fade" id="modalTambahIndikasi" tabindex="-1" aria-labelledby="modalTambahIndikasiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #00aaff; color: white;">
                <h5 class="modal-title" id="modalTambahIndikasiLabel">Tambah Indikasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="kodeIndikasi" class="form-label">Kode Indikasi</label>
                        <input type="text" class="form-control" id="kodeIndikasi" placeholder="Masukkan Kode Indikasi">
                    </div>
                    <div class="mb-3">
                        <label for="namaIndikasi" class="form-label">Nama Indikasi</label>
                        <input type="text" class="form-control" id="namaIndikasi" placeholder="Masukkan Nama Indikasi">
                    </div>
                    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit Data Indikasi -->
<div class="modal fade" id="modalEditIndikasi" tabindex="-1" aria-labelledby="modalEditIndikasiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #00aaff; color: white;">
                <h5 class="modal-title" id="modalEditIndikasiLabel">Edit Indikasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editIndikasiForm">
                    <div class="mb-3">
                        <label for="kodeIndikasiEdit" class="form-label">Kode Indikasi</label>
                        <input type="text" class="form-control" id="kodeIndikasiEdit" placeholder="Masukkan Kode Indikasi" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="namaIndikasiEdit" class="form-label">Nama Indikasi</label>
                        <input type="text" class="form-control" id="namaIndikasiEdit" placeholder="Masukkan Nama Indikasi">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Konfirmasi Hapus Indikasi -->
<div class="modal fade" id="modalHapusIndikasi" tabindex="-1" aria-labelledby="modalHapusIndikasiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #ff4d4d; color: white;">
                <h5 class="modal-title" id="modalHapusIndikasiLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data ini?</p>
                <p><strong id="indikasiToDelete"></strong></p>
                <button class="btn btn-danger" id="confirmDeleteButton">Hapus</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<!-- Tombol untuk membuka modal -->
<div class="text-center mt-3">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahIndikasi">Tambah Data Indikasi</button>
</div>

<!-- Footer -->
<div class="footer">
    <p>Sistem Kondisi Kesehatan Mental c2025 Nabila</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
