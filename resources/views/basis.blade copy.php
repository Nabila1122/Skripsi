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
    <h5 class="text-left"><strong>DAFTAR BASIS</strong></h5>
    <table class="table table-bordered transparent-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Gangguan</th>
                <th>Nama Gangguan</th>
                <th>Kode Indikasi</th>
                <th>Nama Indikasi</th>
                <th>Nilai Peluang</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
    <td>1</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I001</td>
    <td>Merasakan kesedihan yang berlangsung lama</td>
    <td>0.7</td>
    <td>
        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" 
                onclick="editData(1, 'G001', 'Kecemasan', 'I001', 'Merasakan kesedihan yang berlangsung lama', '0.7')">Edit</button>
    </td>
    <td>
        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" 
                onclick="setDeleteData(1, 'Merasakan kesedihan yang berlangsung lama')">Hapus</button>
    </td>
</tr>

    <td>2</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I002</td>
    <td>Mengalami suasana hati yang jauh lebih bersemangat dari kondisi biasanya</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('2', 'G001', 'Kecemasan', 'I002', 'Mengalami suasana hati yang jauh lebih bersemangat dari kondisi biasanya', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('2', 'Mengalami suasana hati yang jauh lebih bersemangat dari kondisi biasanya')">Hapus</button></td>
</tr>
<tr>
    <td>3</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I003</td>
    <td>Memiliki ketakutan yang berlebihan</td>
    <td>0.7</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('3', 'G001', 'Kecemasan', 'I003', 'Memiliki ketakutan yang berlebihan', '0.7')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('3', 'Memiliki ketakutan yang berlebihan')">Hapus</button></td>
</tr>
<tr>
    <td>4</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I004</td>
    <td>Merasa cemas, khawatir, atau gelisah hampir sepanjang waktu</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('4', 'G001', 'Kecemasan', 'I004', 'Merasa cemas, khawatir, atau gelisah hampir sepanjang waktu', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('4', 'Merasa cemas, khawatir, atau gelisah hampir sepanjang waktu')">Hapus</button></td>
</tr>
<tr>
    <td>5</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I005</td>
    <td>Cenderung menghindari interaksi sosial dan lebih memilih menyendiri</td>
    <td>0.6</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('5', 'G001', 'Kecemasan', 'I005', 'Cenderung menghindari interaksi sosial dan lebih memilih menyendiri', '0.6')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('5', 'Cenderung menghindari interaksi sosial dan lebih memilih menyendiri')">Hapus</button></td>
</tr>
<tr>
    <td>6</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I006</td>
    <td>Mengalami gangguan pola tidur, seperti sulit tidur, sering terbangun, mimpi buruk, atau tidur berlebihan</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('6', 'G001', 'Kecemasan', 'I006', 'Mengalami gangguan pola tidur, seperti sulit tidur, sering terbangun, mimpi buruk, atau tidur berlebihan', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('6', 'Mengalami gangguan pola tidur, seperti sulit tidur, sering terbangun, mimpi buruk, atau tidur berlebihan')">Hapus</button></td>
</tr>
<tr>
    <td>7</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I007</td>
    <td>Terjadi perubahan pola makan, baik peningkatan maupun penurunan nafsu makan</td>
    <td>0.5</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('7', 'G001', 'Kecemasan', 'I007', 'Terjadi perubahan pola makan, baik peningkatan maupun penurunan nafsu makan', '0.5')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('7', 'Terjadi perubahan pola makan, baik peningkatan maupun penurunan nafsu makan')">Hapus</button></td>
</tr>
<tr>
    <td>8</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I008</td>
    <td>Menjadi lebih mudah marah atau tersinggung</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('8', 'G001', 'Kecemasan', 'I008', 'Menjadi lebih mudah marah atau tersinggung', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('8', 'Menjadi lebih mudah marah atau tersinggung')">Hapus</button></td>
</tr>
<tr>
    <td>9</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I009</td>
    <td>Merasa tidak berharga, tidak mampu, atau tidak berguna</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('9', 'G001', 'Kecemasan', 'I009', 'Merasa tidak berharga, tidak mampu, atau tidak berguna', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('9', 'Merasa tidak berharga, tidak mampu, atau tidak berguna')">Hapus</button></td>
</tr>
<tr>
    <td>10</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I010</td>
    <td>Mengalami penurunan rasa percaya diri</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('10', 'G001', 'Kecemasan', 'I010', 'Mengalami penurunan rasa percaya diri', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('10', 'Mengalami penurunan rasa percaya diri')">Hapus</button></td>
</tr>
<tr>
    <td>11</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I011</td>
    <td>Takut berbuat kesalahan, kesulitan mengambil keputusan, atau merasa bersalah secara berlebihan</td>
    <td>0.5</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('11', 'G001', 'Kecemasan', 'I011', 'Takut berbuat kesalahan, kesulitan mengambil keputusan, atau merasa bersalah secara berlebihan', '0.5')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('11', 'Takut berbuat kesalahan, kesulitan mengambil keputusan, atau merasa bersalah secara berlebihan')">Hapus</button></td>
</tr>
<tr>
    <td>12</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I012</td>
    <td>Sulit fokus atau mengalami hambatan saat melakukan aktivitas</td>
    <td>0.5</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('12', 'G001', 'Kecemasan', 'I012', 'Sulit fokus atau mengalami hambatan saat melakukan aktivitas', '0.5')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('12', 'Sulit fokus atau mengalami hambatan saat melakukan aktivitas')">Hapus</button></td>
</tr>
<tr>
    <td>13</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I013</td>
    <td>Kehilangan ketertarikan terhadap hal-hal yang sebelumnya disukai</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('13', 'G001', 'Kecemasan', 'I013', 'Kehilangan ketertarikan terhadap hal-hal yang sebelumnya disukai', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('13', 'Kehilangan ketertarikan terhadap hal-hal yang sebelumnya disukai')">Hapus</button></td>
</tr>
<tr>
    <td>14</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I014</td>
    <td>Mengalami keringat dingin</td>
    <td>0.7</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('14', 'G001', 'Kecemasan', 'I014', 'Mengalami keringat dingin', '0.7')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('14', 'Mengalami keringat dingin')">Hapus</button></td>
</tr>
<tr>
    <td>15</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I015</td>
    <td>Merasakan nyeri atau ketidaknyamanan pada perut</td>
    <td>0.7</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('15', 'G001', 'Kecemasan', 'I015', 'Merasakan nyeri atau ketidaknyamanan pada perut', '0.7')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('15', 'Merasakan nyeri atau ketidaknyamanan pada perut')">Hapus</button></td>
</tr>
<tr>
    <td>16</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I016</td>
    <td>Mengalami sakit kepala secara mendadak</td>
    <td>0.7</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('16', 'G001', 'Kecemasan', 'I016', 'Mengalami sakit kepala secara mendadak', '0.7')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('16', 'Mengalami sakit kepala secara mendadak')">Hapus</button></td>
</tr>
<tr>
    <td>17</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I017</td>
    <td>Pandangan berkunang-kunang atau merasa hampir pingsan</td>
    <td>0.7</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('17', 'G001', 'Kecemasan', 'I017', 'Pandangan berkunang-kunang atau merasa hampir pingsan', '0.7')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('17', 'Pandangan berkunang-kunang atau merasa hampir pingsan')">Hapus</button></td>
</tr>
<tr>
    <td>18</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I018</td>
    <td>Merasa mual</td>
    <td>0.7</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('18', 'G001', 'Kecemasan', 'I018', 'Merasa mual', '0.7')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('18', 'Merasa mual')">Hapus</button></td>
</tr>
<tr>
    <td>19</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I019</td>
    <td>Mengalami muntah</td>
    <td>0.7</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('19', 'G001', 'Kecemasan', 'I019', 'Mengalami muntah', '0.7')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('19', 'Mengalami muntah')">Hapus</button></td>
</tr>
<tr>
    <td>20</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I020</td>
    <td>Jantung berdebar, tubuh gemetar, atau kesulitan bernapas</td>
    <td>0.7</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('20', 'G001', 'Kecemasan', 'I020', 'Jantung berdebar, tubuh gemetar, atau kesulitan bernapas', '0.7')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('20', 'Jantung berdebar, tubuh gemetar, atau kesulitan bernapas')">Hapus</button></td>
</tr>
<tr>
    <td>21</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I021</td>
    <td>Mudah menangis tanpa sebab yang jelas</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('21', 'G001', 'Kecemasan', 'I021', 'Mudah menangis tanpa sebab yang jelas', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('21', 'Mudah menangis tanpa sebab yang jelas')">Hapus</button></td>
</tr>
<tr>
    <td>22</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I022</td>
    <td>Merasa putus asa</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('22', 'G001', 'Kecemasan', 'I022', 'Merasa putus asa', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('22', 'Merasa putus asa')">Hapus</button></td>
</tr>
<tr>
    <td>23</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I023</td>
    <td>Sering muncul pikiran tentang kematian atau keinginan untuk mengakhiri hidup</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('23', 'G001', 'Kecemasan', 'I023', 'Sering muncul pikiran tentang kematian atau keinginan untuk mengakhiri hidup', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('23', 'Sering muncul pikiran tentang kematian atau keinginan untuk mengakhiri hidup')">Hapus</button></td>
</tr>
<tr>
    <td>24</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I024</td>
    <td>Melakukan tindakan yang membahayakan diri sendiri maupun orang lain</td>
    <td>0.2</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('24', 'G001', 'Kecemasan', 'I024', 'Melakukan tindakan yang membahayakan diri sendiri maupun orang lain', '0.2')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('24', 'Melakukan tindakan yang membahayakan diri sendiri maupun orang lain')">Hapus</button></td>
</tr>
<tr>
    <td>25</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I025</td>
    <td>Mengalami penurunan energi, mudah lelah, atau sebaliknya tidak mudah merasa lelah</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('25', 'G001', 'Kecemasan', 'I025', 'Mengalami penurunan energi, mudah lelah, atau sebaliknya tidak mudah merasa lelah', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('25', 'Mengalami penurunan energi, mudah lelah, atau sebaliknya tidak mudah merasa lelah')">Hapus</button></td>
</tr>
<tr>
    <td>26</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I026</td>
    <td>Terjadi perubahan berat badan yang signifikan, baik naik maupun turun</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('26', 'G001', 'Kecemasan', 'I026', 'Terjadi perubahan berat badan yang signifikan, baik naik maupun turun', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('26', 'Terjadi perubahan berat badan yang signifikan, baik naik maupun turun')">Hapus</button></td>
</tr>
<tr>
    <td>27</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I027</td>
    <td>Sering melamun</td>
    <td>0.4</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('27', 'G001', 'Kecemasan', 'I027', 'Sering melamun', '0.4')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('27', 'Sering melamun')">Hapus</button></td>
</tr>
<tr>
    <td>28</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I028</td>
    <td>Mengalami peningkatan energi yang jauh lebih tinggi dari biasanya</td>
    <td>0.2</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('28', 'G001', 'Kecemasan', 'I028', 'Mengalami peningkatan energi yang jauh lebih tinggi dari biasanya', '0.2')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('28', 'Mengalami peningkatan energi yang jauh lebih tinggi dari biasanya')">Hapus</button></td>
</tr>
<tr>
    <td>29</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I029</td>
    <td>Memiliki banyak ide yang muncul secara berlebihan</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('29', 'G001', 'Kecemasan', 'I029', 'Memiliki banyak ide yang muncul secara berlebihan', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('29', 'Memiliki banyak ide yang muncul secara berlebihan')">Hapus</button></td>
</tr>
<tr>
    <td>30</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I030</td>
    <td>Kebutuhan tidur berkurang atau merasa tidak memerlukan tidur</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('30', 'G001', 'Kecemasan', 'I030', 'Kebutuhan tidur berkurang atau merasa tidak memerlukan tidur', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('30', 'Kebutuhan tidur berkurang atau merasa tidak memerlukan tidur')">Hapus</button></td>
</tr>
<tr>
    <td>31</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I031</td>
    <td>Berbicara lebih sering, lebih cepat, sulit dihentikan, dan sering memotong pembicaraan orang lain</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('31', 'G001', 'Kecemasan', 'I031', 'Berbicara lebih sering, lebih cepat, sulit dihentikan, dan sering memotong pembicaraan orang lain', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('31', 'Berbicara lebih sering, lebih cepat, sulit dihentikan, dan sering memotong pembicaraan orang lain')">Hapus</button></td>
</tr>
<tr>
    <td>32</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I032</td>
    <td>Mengalami peningkatan dorongan atau pikiran seksual</td>
    <td>0.2</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('32', 'G001', 'Kecemasan', 'I032', 'Mengalami peningkatan dorongan atau pikiran seksual', '0.2')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('32', 'Mengalami peningkatan dorongan atau pikiran seksual')">Hapus</button></td>
</tr>
<tr>
    <td>33</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I033</td>
    <td>Sulit mengendalikan diri dan cenderung bersikap impulsif</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('33', 'G001', 'Kecemasan', 'I033', 'Sulit mengendalikan diri dan cenderung bersikap impulsif', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('33', 'Sulit mengendalikan diri dan cenderung bersikap impulsif')">Hapus</button></td>
</tr>
<tr>
    <td>34</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I034</td>
    <td>Menunjukkan perilaku tidak teratur atau sering bergerak tanpa tujuan (tidak bisa diam)</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('34', 'G001', 'Kecemasan', 'I034', 'Menunjukkan perilaku tidak teratur atau sering bergerak tanpa tujuan (tidak bisa diam)', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('34', 'Menunjukkan perilaku tidak teratur atau sering bergerak tanpa tujuan (tidak bisa diam)')">Hapus</button></td>
</tr>
<tr>
    <td>35</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I035</td>
    <td>Mengalami waham, yaitu keyakinan yang keliru atau tidak sesuai dengan kenyataan</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('35', 'G001', 'Kecemasan', 'I035', 'Mengalami waham, yaitu keyakinan yang keliru atau tidak sesuai dengan kenyataan', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('35', 'Mengalami waham, yaitu keyakinan yang keliru atau tidak sesuai dengan kenyataan')">Hapus</button></td>
</tr>
<tr>
    <td>36</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I036</td>
    <td>Mengalami halusinasi, seperti mendengar suara atau melihat sesuatu tanpa sumber nyata</td>
    <td>0.5</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('36', 'G001', 'Kecemasan', 'I036', 'Mengalami halusinasi, seperti mendengar suara atau melihat sesuatu tanpa sumber nyata', '0.5')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('36', 'Mengalami halusinasi, seperti mendengar suara atau melihat sesuatu tanpa sumber nyata')">Hapus</button></td>
</tr>
<tr>
    <td>37</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I037</td>
    <td>Cara berbicara menjadi tidak jelas atau sulit dipahami</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('37', 'G001', 'Kecemasan', 'I037', 'Cara berbicara menjadi tidak jelas atau sulit dipahami', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('37', 'Cara berbicara menjadi tidak jelas atau sulit dipahami')">Hapus</button></td>
</tr>
<tr>
    <td>38</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I038</td>
    <td>Mengalami gangguan dalam fungsi sosial, kegiatan sekolah, atau pekerjaan</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('38', 'G001', 'Kecemasan', 'I038', 'Mengalami gangguan dalam fungsi sosial, kegiatan sekolah, atau pekerjaan', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('38', 'Mengalami gangguan dalam fungsi sosial, kegiatan sekolah, atau pekerjaan')">Hapus</button></td>
</tr>
<tr>
    <td>39</td>
    <td>G001</td>
    <td>Kecemasan</td>
    <td>I039</td>
    <td>Merasa curiga berlebihan atau yakin bahwa orang lain akan menyakiti dirinya</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('39', 'G001', 'Kecemasan', 'I039', 'Merasa curiga berlebihan atau yakin bahwa orang lain akan menyakiti dirinya', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('39', 'Merasa curiga berlebihan atau yakin bahwa orang lain akan menyakiti dirinya')">Hapus</button></td>
</tr>
<tr>
    <td>40</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I001</td>
    <td>Merasakan kesedihan yang berlangsung lama</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('40', 'G002', 'Stres', 'I001', 'Merasakan kesedihan yang berlangsung lama', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('40', 'Merasakan kesedihan yang berlangsung lama')">Hapus</button></td>
</tr>
<tr>
    <td>41</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I002</td>
    <td>Mengalami suasana hati yang jauh lebih bersemangat dari kondisi biasanya</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('41', 'G002', 'Stres', 'I002', 'Mengalami suasana hati yang jauh lebih bersemangat dari kondisi biasanya', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('41', 'Mengalami suasana hati yang jauh lebih bersemangat dari kondisi biasanya')">Hapus</button></td>
</tr>
<tr>
    <td>42</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I003</td>
    <td>Memiliki ketakutan yang berlebihan</td>
    <td>0.7</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('42', 'G002', 'Stres', 'I003', 'Memiliki ketakutan yang berlebihan', '0.7')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('42', 'Memiliki ketakutan yang berlebihan')">Hapus</button></td>
</tr>
<tr>
    <td>43</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I004</td>
    <td>Merasa cemas, khawatir, atau gelisah hampir sepanjang waktu</td>
    <td>0.2</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('43', 'G002', 'Stres', 'I004', 'Merasa cemas, khawatir, atau gelisah hampir sepanjang waktu', '0.2')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('43', 'Merasa cemas, khawatir, atau gelisah hampir sepanjang waktu')">Hapus</button></td>
</tr>
<tr>
    <td>44</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I005</td>
    <td>Cenderung menghindari interaksi sosial dan lebih memilih menyendiri</td>
    <td>0.6</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('44', 'G002', 'Stres', 'I005', 'Cenderung menghindari interaksi sosial dan lebih memilih menyendiri', '0.6')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('44', 'Cenderung menghindari interaksi sosial dan lebih memilih menyendiri')">Hapus</button></td>
</tr>
<tr>
    <td>45</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I006</td>
    <td>Mengalami gangguan pola tidur, seperti sulit tidur, sering terbangun, mimpi buruk, atau tidur berlebihan</td>
    <td>0.9</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('45', 'G002', 'Stres', 'I006', 'Mengalami gangguan pola tidur, seperti sulit tidur, sering terbangun, mimpi buruk, atau tidur berlebihan', '0.9')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('45', 'Mengalami gangguan pola tidur, seperti sulit tidur, sering terbangun, mimpi buruk, atau tidur berlebihan')">Hapus</button></td>
</tr>
<tr>
    <td>46</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I007</td>
    <td>Terjadi perubahan pola makan, baik peningkatan maupun penurunan nafsu makan</td>
    <td>0.5</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('46', 'G002', 'Stres', 'I007', 'Terjadi perubahan pola makan, baik peningkatan maupun penurunan nafsu makan', '0.5')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('46', 'Terjadi perubahan pola makan, baik peningkatan maupun penurunan nafsu makan')">Hapus</button></td>
</tr>
<tr>
    <td>47</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I008</td>
    <td>Menjadi lebih mudah marah atau tersinggung</td>
    <td>0.6</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('47', 'G002', 'Stres', 'I008', 'Menjadi lebih mudah marah atau tersinggung', '0.6')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('47', 'Menjadi lebih mudah marah atau tersinggung')">Hapus</button></td>
</tr>
<tr>
    <td>48</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I009</td>
    <td>Merasa tidak berharga, tidak mampu, atau tidak berguna</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('48', 'G002', 'Stres', 'I009', 'Merasa tidak berharga, tidak mampu, atau tidak berguna', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('48', 'Merasa tidak berharga, tidak mampu, atau tidak berguna')">Hapus</button></td>
</tr>
<tr>
    <td>49</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I010</td>
    <td>Mengalami penurunan rasa percaya diri</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('49', 'G002', 'Stres', 'I010', 'Mengalami penurunan rasa percaya diri', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('49', 'Mengalami penurunan rasa percaya diri')">Hapus</button></td>
</tr>
<tr>
    <td>50</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I011</td>
    <td>Takut berbuat kesalahan, kesulitan mengambil keputusan, atau merasa bersalah secara berlebihan</td>
    <td>0.5</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('50', 'G002', 'Stres', 'I011', 'Takut berbuat kesalahan, kesulitan mengambil keputusan, atau merasa bersalah secara berlebihan', '0.5')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('50', 'Takut berbuat kesalahan, kesulitan mengambil keputusan, atau merasa bersalah secara berlebihan')">Hapus</button></td>
</tr>
<tr>
    <td>51</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I012</td>
    <td>Sulit fokus atau mengalami hambatan saat melakukan aktivitas</td>
    <td>0.6</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('51', 'G002', 'Stres', 'I012', 'Sulit fokus atau mengalami hambatan saat melakukan aktivitas', '0.6')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('51', 'Sulit fokus atau mengalami hambatan saat melakukan aktivitas')">Hapus</button></td>
</tr>
<tr>
    <td>52</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I014</td>
    <td>Mengalami keringat dingin</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('52', 'G002', 'Stres', 'I014', 'Mengalami keringat dingin', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('52', 'Mengalami keringat dingin')">Hapus</button></td>
</tr>
<tr>
    <td>53</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I015</td>
    <td>Merasakan nyeri atau ketidaknyamanan pada perut</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('53', 'G002', 'Stres', 'I015', 'Merasakan nyeri atau ketidaknyamanan pada perut', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('53', 'Merasakan nyeri atau ketidaknyamanan pada perut')">Hapus</button></td>
</tr>
<tr>
    <td>54</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I016</td>
    <td>Mengalami sakit kepala secara mendadak</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('54', 'G002', 'Stres', 'I016', 'Mengalami sakit kepala secara mendadak', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('54', 'Mengalami sakit kepala secara mendadak')">Hapus</button></td>
</tr>
<tr>
    <td>55</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I017</td>
    <td>Pandangan berkunang-kunang atau merasa hampir pingsan</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('55', 'G002', 'Stres', 'I017', 'Pandangan berkunang-kunang atau merasa hampir pingsan', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('55', 'Pandangan berkunang-kunang atau merasa hampir pingsan')">Hapus</button></td>
</tr>
<tr>
    <td>56</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I018</td>
    <td>Merasa mual</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('56', 'G002', 'Stres', 'I018', 'Merasa mual', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('56', 'Merasa mual')">Hapus</button></td>
</tr>
<tr>
    <td>57</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I019</td>
    <td>Mengalami muntah</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('57', 'G002', 'Stres', 'I019', 'Mengalami muntah', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('57', 'Mengalami muntah')">Hapus</button></td>
</tr>
<tr>
    <td>58</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I020</td>
    <td>Jantung berdebar, tubuh gemetar, atau kesulitan bernapas</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('58', 'G002', 'Stres', 'I020', 'Jantung berdebar, tubuh gemetar, atau kesulitan bernapas', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('58', 'Jantung berdebar, tubuh gemetar, atau kesulitan bernapas')">Hapus</button></td>
</tr>
<tr>
    <td>59</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I021</td>
    <td>Mudah menangis tanpa sebab yang jelas</td>
    <td>0.5</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('59', 'G002', 'Stres', 'I021', 'Mudah menangis tanpa sebab yang jelas', '0.5')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('59', 'Mudah menangis tanpa sebab yang jelas')">Hapus</button></td>
</tr>
<tr>
    <td>60</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I022</td>
    <td>Merasa putus asa</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('60', 'G002', 'Stres', 'I022', 'Merasa putus asa', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('60', 'Merasa putus asa')">Hapus</button></td>
</tr>
<tr>
    <td>61</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I023</td>
    <td>Sering muncul pikiran tentang kematian atau keinginan untuk mengakhiri hidup</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('61', 'G002', 'Stres', 'I023', 'Sering muncul pikiran tentang kematian atau keinginan untuk mengakhiri hidup', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('61', 'Sering muncul pikiran tentang kematian atau keinginan untuk mengakhiri hidup')">Hapus</button></td>
</tr>
<tr>
    <td>62</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I024</td>
    <td>Melakukan tindakan yang membahayakan diri sendiri maupun orang lain</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('62', 'G002', 'Stres', 'I024', 'Melakukan tindakan yang membahayakan diri sendiri maupun orang lain', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('62', 'Melakukan tindakan yang membahayakan diri sendiri maupun orang lain')">Hapus</button></td>
</tr>
<tr>
    <td>63</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I025</td>
    <td>Mengalami penurunan energi, mudah lelah, atau sebaliknya tidak mudah merasa lelah</td>
    <td>0.2</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('63', 'G002', 'Stres', 'I025', 'Mengalami penurunan energi, mudah lelah, atau sebaliknya tidak mudah merasa lelah', '0.2')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('63', 'Mengalami penurunan energi, mudah lelah, atau sebaliknya tidak mudah merasa lelah')">Hapus</button></td>
</tr>
<tr>
    <td>64</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I026</td>
    <td>Terjadi perubahan berat badan yang signifikan, baik naik maupun turun</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('64', 'G002', 'Stres', 'I026', 'Terjadi perubahan berat badan yang signifikan, baik naik maupun turun', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('64', 'Terjadi perubahan berat badan yang signifikan, baik naik maupun turun')">Hapus</button></td>
</tr>
<tr>
    <td>65</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I027</td>
    <td>Sering melamun</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('65', 'G002', 'Stres', 'I027', 'Sering melamun', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('65', 'Sering melamun')">Hapus</button></td>
</tr>
<tr>
    <td>66</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I028</td>
    <td>Mengalami peningkatan energi yang jauh lebih tinggi dari biasanya</td>
    <td>0.7</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('66', 'G002', 'Stres', 'I028', 'Mengalami peningkatan energi yang jauh lebih tinggi dari biasanya', '0.7')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('66', 'Mengalami peningkatan energi yang jauh lebih tinggi dari biasanya')">Hapus</button></td>
</tr>
<tr>
    <td>67</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I029</td>
    <td>Memiliki banyak ide yang muncul secara berlebihan</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('67', 'G002', 'Stres', 'I029', 'Memiliki banyak ide yang muncul secara berlebihan', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('67', 'Memiliki banyak ide yang muncul secara berlebihan')">Hapus</button></td>
</tr>
<tr>
    <td>68</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I030</td>
    <td>Kebutuhan tidur berkurang atau merasa tidak memerlukan tidur</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('68', 'G002', 'Stres', 'I030', 'Kebutuhan tidur berkurang atau merasa tidak memerlukan tidur', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('68', 'Kebutuhan tidur berkurang atau merasa tidak memerlukan tidur')">Hapus</button></td>
</tr>
<tr>
    <td>69</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I031</td>
    <td>Berbicara lebih sering, lebih cepat, sulit dihentikan, dan sering memotong pembicaraan orang lain</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('69', 'G002', 'Stres', 'I031', 'Berbicara lebih sering, lebih cepat, sulit dihentikan, dan sering memotong pembicaraan orang lain', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('69', 'Berbicara lebih sering, lebih cepat, sulit dihentikan, dan sering memotong pembicaraan orang lain')">Hapus</button></td>
</tr>
<tr>
    <td>70</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I032</td>
    <td>Mengalami peningkatan dorongan atau pikiran seksual</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('70', 'G002', 'Stres', 'I032', 'Mengalami peningkatan dorongan atau pikiran seksual', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('70', 'Mengalami peningkatan dorongan atau pikiran seksual')">Hapus</button></td>
</tr>
<tr>
    <td>71</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I033</td>
    <td>Sulit mengendalikan diri dan cenderung bersikap impulsif</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('71', 'G002', 'Stres', 'I033', 'Sulit mengendalikan diri dan cenderung bersikap impulsif', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('71', 'Sulit mengendalikan diri dan cenderung bersikap impulsif')">Hapus</button></td>
</tr>
<tr>
    <td>72</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I034</td>
    <td>Menunjukkan perilaku tidak teratur atau sering bergerak tanpa tujuan (tidak bisa diam)</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('72', 'G002', 'Stres', 'I034', 'Menunjukkan perilaku tidak teratur atau sering bergerak tanpa tujuan (tidak bisa diam)', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('72', 'Menunjukkan perilaku tidak teratur atau sering bergerak tanpa tujuan (tidak bisa diam)')">Hapus</button></td>
</tr>
<tr>
    <td>73</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I035</td>
    <td>Mengalami waham, yaitu keyakinan yang keliru atau tidak sesuai dengan kenyataan</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('73', 'G002', 'Stres', 'I035', 'Mengalami waham, yaitu keyakinan yang keliru atau tidak sesuai dengan kenyataan', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('73', 'Mengalami waham, yaitu keyakinan yang keliru atau tidak sesuai dengan kenyataan')">Hapus</button></td>
</tr>
<tr>
    <td>74</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I036</td>
    <td>Mengalami halusinasi, seperti mendengar suara atau melihat sesuatu tanpa sumber nyata</td>
    <td>0.5</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('74', 'G002', 'Stres', 'I036', 'Mengalami halusinasi, seperti mendengar suara atau melihat sesuatu tanpa sumber nyata', '0.5')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('74', 'Mengalami halusinasi, seperti mendengar suara atau melihat sesuatu tanpa sumber nyata')">Hapus</button></td>
</tr>
<tr>
    <td>75</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I037</td>
    <td>Cara berbicara menjadi tidak jelas atau sulit dipahami</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('75', 'G002', 'Stres', 'I037', 'Cara berbicara menjadi tidak jelas atau sulit dipahami', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('75', 'Cara berbicara menjadi tidak jelas atau sulit dipahami')">Hapus</button></td>
</tr>
<tr>
    <td>76</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I038</td>
    <td>Mengalami gangguan dalam fungsi sosial, kegiatan sekolah, atau pekerjaan</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('76', 'G002', 'Stres', 'I038', 'Mengalami gangguan dalam fungsi sosial, kegiatan sekolah, atau pekerjaan', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('76', 'Mengalami gangguan dalam fungsi sosial, kegiatan sekolah, atau pekerjaan')">Hapus</button></td>
</tr>
<tr>
    <td>77</td>
    <td>G002</td>
    <td>Stres</td>
    <td>I039</td>
    <td>Merasa curiga berlebihan atau yakin bahwa orang lain akan menyakiti dirinya</td>
    <td>0.4</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('77', 'G002', 'Stres', 'I039', 'Merasa curiga berlebihan atau yakin bahwa orang lain akan menyakiti dirinya', '0.4')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('77', 'Merasa curiga berlebihan atau yakin bahwa orang lain akan menyakiti dirinya')">Hapus</button></td>
</tr>
<tr>
    <td>78</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I001</td>
    <td>Merasakan kesedihan yang berlangsung lama</td>
    <td>0.9</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('78', 'G003', 'Depresi', 'I001', 'Merasakan kesedihan yang berlangsung lama', '0.9')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('78', 'Merasakan kesedihan yang berlangsung lama')">Hapus</button></td>
</tr>
<tr>
    <td>79</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I002</td>
    <td>Mengalami suasana hati yang jauh lebih bersemangat dari kondisi biasanya</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('79', 'G003', 'Depresi', 'I002', 'Mengalami suasana hati yang jauh lebih bersemangat dari kondisi biasanya', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('79', 'Mengalami suasana hati yang jauh lebih bersemangat dari kondisi biasanya')">Hapus</button></td>
</tr>
<tr>
    <td>80</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I003</td>
    <td>Memiliki ketakutan yang berlebihan</td>
    <td>0.6</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('80', 'G003', 'Depresi', 'I003', 'Memiliki ketakutan yang berlebihan', '0.6')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('80', 'Memiliki ketakutan yang berlebihan')">Hapus</button></td>
</tr>
<tr>
    <td>81</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I004</td>
    <td>Merasa cemas, khawatir, atau gelisah hampir sepanjang waktu</td>
    <td>0.5</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('81', 'G003', 'Depresi', 'I004', 'Merasa cemas, khawatir, atau gelisah hampir sepanjang waktu', '0.5')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('81', 'Merasa cemas, khawatir, atau gelisah hampir sepanjang waktu')">Hapus</button></td>
</tr>
<tr>
    <td>82</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I005</td>
    <td>Cenderung menghindari interaksi sosial dan lebih memilih menyendiri</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('82', 'G003', 'Depresi', 'I005', 'Cenderung menghindari interaksi sosial dan lebih memilih menyendiri', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('82', 'Cenderung menghindari interaksi sosial dan lebih memilih menyendiri')">Hapus</button></td>
</tr>
<tr>
    <td>83</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I006</td>
    <td>Mengalami gangguan pola tidur, seperti sulit tidur, sering terbangun, mimpi buruk, atau tidur berlebihan</td>
    <td>0.9</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('83', 'G003', 'Depresi', 'I006', 'Mengalami gangguan pola tidur, seperti sulit tidur, sering terbangun, mimpi buruk, atau tidur berlebihan', '0.9')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('83', 'Mengalami gangguan pola tidur, seperti sulit tidur, sering terbangun, mimpi buruk, atau tidur berlebihan')">Hapus</button></td>
</tr>
<tr>
    <td>84</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I007</td>
    <td>Terjadi perubahan pola makan, baik peningkatan maupun penurunan nafsu makan</td>
    <td>0.6</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('84', 'G003', 'Depresi', 'I007', 'Terjadi perubahan pola makan, baik peningkatan maupun penurunan nafsu makan', '0.6')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('84', 'Terjadi perubahan pola makan, baik peningkatan maupun penurunan nafsu makan')">Hapus</button></td>
</tr>
<tr>
    <td>85</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I008</td>
    <td>Menjadi lebih mudah marah atau tersinggung</td>
    <td>0.6</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('85', 'G003', 'Depresi', 'I008', 'Menjadi lebih mudah marah atau tersinggung', '0.6')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('85', 'Menjadi lebih mudah marah atau tersinggung')">Hapus</button></td>
</tr>
<tr>
    <td>86</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I009</td>
    <td>Merasa tidak berharga, tidak mampu, atau tidak berguna</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('86', 'G003', 'Depresi', 'I009', 'Merasa tidak berharga, tidak mampu, atau tidak berguna', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('86', 'Merasa tidak berharga, tidak mampu, atau tidak berguna')">Hapus</button></td>
</tr>
<tr>
    <td>87</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I010</td>
    <td>Mengalami penurunan rasa percaya diri</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('87', 'G003', 'Depresi', 'I010', 'Mengalami penurunan rasa percaya diri', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('87', 'Mengalami penurunan rasa percaya diri')">Hapus</button></td>
</tr>
<tr>
    <td>88</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I011</td>
    <td>Takut berbuat kesalahan, kesulitan mengambil keputusan, atau merasa bersalah secara berlebihan</td>
    <td>0.6</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('88', 'G003', 'Depresi', 'I011', 'Takut berbuat kesalahan, kesulitan mengambil keputusan, atau merasa bersalah secara berlebihan', '0.6')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('88', 'Takut berbuat kesalahan, kesulitan mengambil keputusan, atau merasa bersalah secara berlebihan')">Hapus</button></td>
</tr>
<tr>
    <td>89</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I012</td>
    <td>Sulit fokus atau mengalami hambatan saat melakukan aktivitas</td>
    <td>0.7</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('89', 'G003', 'Depresi', 'I012', 'Sulit fokus atau mengalami hambatan saat melakukan aktivitas', '0.7')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('89', 'Sulit fokus atau mengalami hambatan saat melakukan aktivitas')">Hapus</button></td>
</tr>
<tr>
    <td>90</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I013</td>
    <td>Kehilangan ketertarikan terhadap hal-hal yang sebelumnya disukai</td>
    <td>0.7</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('90', 'G003', 'Depresi', 'I013', 'Kehilangan ketertarikan terhadap hal-hal yang sebelumnya disukai', '0.7')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('90', 'Kehilangan ketertarikan terhadap hal-hal yang sebelumnya disukai')">Hapus</button></td>
</tr>
<tr>
    <td>91</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I014</td>
    <td>Mengalami keringat dingin</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('91', 'G003', 'Depresi', 'I014', 'Mengalami keringat dingin', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('91', 'Mengalami keringat dingin')">Hapus</button></td>
</tr>
<tr>
    <td>92</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I015</td>
    <td>Merasakan nyeri atau ketidaknyamanan pada perut</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('92', 'G003', 'Depresi', 'I015', 'Merasakan nyeri atau ketidaknyamanan pada perut', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('92', 'Merasakan nyeri atau ketidaknyamanan pada perut')">Hapus</button></td>
</tr>
<tr>
    <td>93</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I016</td>
    <td>Mengalami sakit kepala secara mendadak</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('93', 'G003', 'Depresi', 'I016', 'Mengalami sakit kepala secara mendadak', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('93', 'Mengalami sakit kepala secara mendadak')">Hapus</button></td>
</tr>
<tr>
    <td>94</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I017</td>
    <td>Pandangan berkunang-kunang atau merasa hampir pingsan</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('94', 'G003', 'Depresi', 'I017', 'Pandangan berkunang-kunang atau merasa hampir pingsan', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('94', 'Pandangan berkunang-kunang atau merasa hampir pingsan')">Hapus</button></td>
</tr>
<tr>
    <td>95</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I018</td>
    <td>Merasa mual</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('95', 'G003', 'Depresi', 'I018', 'Merasa mual', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('95', 'Merasa mual')">Hapus</button></td>
</tr>
<tr>
    <td>96</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I019</td>
    <td>Mengalami muntah</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('96', 'G003', 'Depresi', 'I019', 'Mengalami muntah', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('96', 'Mengalami muntah')">Hapus</button></td>
</tr>
<tr>
    <td>97</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I020</td>
    <td>Jantung berdebar, tubuh gemetar, atau kesulitan bernapas</td>
    <td>0.3</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('97', 'G003', 'Depresi', 'I020', 'Jantung berdebar, tubuh gemetar, atau kesulitan bernapas', '0.3')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('97', 'Jantung berdebar, tubuh gemetar, atau kesulitan bernapas')">Hapus</button></td>
</tr>
<tr>
    <td>98</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I021</td>
    <td>Mudah menangis tanpa sebab yang jelas</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('98', 'G003', 'Depresi', 'I021', 'Mudah menangis tanpa sebab yang jelas', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('98', 'Mudah menangis tanpa sebab yang jelas')">Hapus</button></td>
</tr>
<tr>
    <td>99</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I022</td>
    <td>Merasa putus asa</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('99', 'G003', 'Depresi', 'I022', 'Merasa putus asa', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('99', 'Merasa putus asa')">Hapus</button></td>
</tr>
<tr>
    <td>100</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I023</td>
    <td>Sering muncul pikiran tentang kematian atau keinginan untuk mengakhiri hidup</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('100', 'G003', 'Depresi', 'I023', 'Sering muncul pikiran tentang kematian atau keinginan untuk mengakhiri hidup', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('100', 'Sering muncul pikiran tentang kematian atau keinginan untuk mengakhiri hidup')">Hapus</button></td>
</tr>
<tr>
    <td>101</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I024</td>
    <td>Melakukan tindakan yang membahayakan diri sendiri maupun orang lain</td>
    <td>0.5</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('101', 'G003', 'Depresi', 'I024', 'Melakukan tindakan yang membahayakan diri sendiri maupun orang lain', '0.5')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('101', 'Melakukan tindakan yang membahayakan diri sendiri maupun orang lain')">Hapus</button></td>
</tr>
<tr>
    <td>102</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I025</td>
    <td>Mengalami penurunan energi, mudah lelah, atau sebaliknya tidak mudah merasa lelah</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('102', 'G003', 'Depresi', 'I025', 'Mengalami penurunan energi, mudah lelah, atau sebaliknya tidak mudah merasa lelah', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('102', 'Mengalami penurunan energi, mudah lelah, atau sebaliknya tidak mudah merasa lelah')">Hapus</button></td>
</tr>
<tr>
    <td>103</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I026</td>
    <td>Terjadi perubahan berat badan yang signifikan, baik naik maupun turun</td>
    <td>0.7</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('103', 'G003', 'Depresi', 'I026', 'Terjadi perubahan berat badan yang signifikan, baik naik maupun turun', '0.7')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('103', 'Terjadi perubahan berat badan yang signifikan, baik naik maupun turun')">Hapus</button></td>
</tr>
<tr>
    <td>104</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I027</td>
    <td>Sering melamun</td>
    <td>0.7</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('104', 'G003', 'Depresi', 'I027', 'Sering melamun', '0.7')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('104', 'Sering melamun')">Hapus</button></td>
</tr>
<tr>
    <td>105</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I028</td>
    <td>Mengalami peningkatan energi yang jauh lebih tinggi dari biasanya</td>
    <td>0.2</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('105', 'G003', 'Depresi', 'I028', 'Mengalami peningkatan energi yang jauh lebih tinggi dari biasanya', '0.2')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('105', 'Mengalami peningkatan energi yang jauh lebih tinggi dari biasanya')">Hapus</button></td>
</tr>
<tr>
    <td>106</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I029</td>
    <td>Memiliki banyak ide yang muncul secara berlebihan</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('106', 'G003', 'Depresi', 'I029', 'Memiliki banyak ide yang muncul secara berlebihan', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('106', 'Memiliki banyak ide yang muncul secara berlebihan')">Hapus</button></td>
</tr>
<tr>
    <td>107</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I030</td>
    <td>Kebutuhan tidur berkurang atau merasa tidak memerlukan tidur</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('107', 'G003', 'Depresi', 'I030', 'Kebutuhan tidur berkurang atau merasa tidak memerlukan tidur', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('107', 'Kebutuhan tidur berkurang atau merasa tidak memerlukan tidur')">Hapus</button></td>
</tr>
<tr>
    <td>108</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I031</td>
    <td>Berbicara lebih sering, lebih cepat, sulit dihentikan, dan sering memotong pembicaraan orang lain</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('108', 'G003', 'Depresi', 'I031', 'Berbicara lebih sering, lebih cepat, sulit dihentikan, dan sering memotong pembicaraan orang lain', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('108', 'Berbicara lebih sering, lebih cepat, sulit dihentikan, dan sering memotong pembicaraan orang lain')">Hapus</button></td>
</tr>
<tr>
    <td>109</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I032</td>
    <td>Mengalami peningkatan dorongan atau pikiran seksual</td>
    <td>0.2</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('109', 'G003', 'Depresi', 'I032', 'Mengalami peningkatan dorongan atau pikiran seksual', '0.2')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('109', 'Mengalami peningkatan dorongan atau pikiran seksual')">Hapus</button></td>
</tr>
<tr>
    <td>110</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I033</td>
    <td>Sulit mengendalikan diri dan cenderung bersikap impulsif</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('110', 'G003', 'Depresi', 'I033', 'Sulit mengendalikan diri dan cenderung bersikap impulsif', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('110', 'Sulit mengendalikan diri dan cenderung bersikap impulsif')">Hapus</button></td>
</tr>
<tr>
    <td>111</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I034</td>
    <td>Menunjukkan perilaku tidak teratur atau sering bergerak tanpa tujuan (tidak bisa diam)</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('111', 'G003', 'Depresi', 'I034', 'Menunjukkan perilaku tidak teratur atau sering bergerak tanpa tujuan (tidak bisa diam)', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('111', 'Menunjukkan perilaku tidak teratur atau sering bergerak tanpa tujuan (tidak bisa diam)')">Hapus</button></td>
</tr>
<tr>
    <td>112</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I035</td>
    <td>Mengalami waham, yaitu keyakinan yang keliru atau tidak sesuai dengan kenyataan</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('112', 'G003', 'Depresi', 'I035', 'Mengalami waham, yaitu keyakinan yang keliru atau tidak sesuai dengan kenyataan', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('112', 'Mengalami waham, yaitu keyakinan yang keliru atau tidak sesuai dengan kenyataan')">Hapus</button></td>
</tr>
<tr>
    <td>113</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I036</td>
    <td>Mengalami halusinasi, seperti mendengar suara atau melihat sesuatu tanpa sumber nyata</td>
    <td>0.5</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('113', 'G003', 'Depresi', 'I036', 'Mengalami halusinasi, seperti mendengar suara atau melihat sesuatu tanpa sumber nyata', '0.5')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('113', 'Mengalami halusinasi, seperti mendengar suara atau melihat sesuatu tanpa sumber nyata')">Hapus</button></td>
</tr>
<tr>
    <td>114</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I037</td>
    <td>Cara berbicara menjadi tidak jelas atau sulit dipahami</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('114', 'G003', 'Depresi', 'I037', 'Cara berbicara menjadi tidak jelas atau sulit dipahami', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('114', 'Cara berbicara menjadi tidak jelas atau sulit dipahami')">Hapus</button></td>
</tr>
<tr>
    <td>115</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I038</td>
    <td>Mengalami gangguan dalam fungsi sosial, kegiatan sekolah, atau pekerjaan</td>
    <td>0.8</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('115', 'G003', 'Depresi', 'I038', 'Mengalami gangguan dalam fungsi sosial, kegiatan sekolah, atau pekerjaan', '0.8')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('115', 'Mengalami gangguan dalam fungsi sosial, kegiatan sekolah, atau pekerjaan')">Hapus</button></td>
</tr>
<tr>
    <td>116</td>
    <td>G003</td>
    <td>Depresi</td>
    <td>I039</td>
    <td>Merasa curiga berlebihan atau yakin bahwa orang lain akan menyakiti dirinya</td>
    <td>0.1</td>
    <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" onclick="editBasis('116', 'G003', 'Depresi', 'I039', 'Merasa curiga berlebihan atau yakin bahwa orang lain akan menyakiti dirinya', '0.1')">Edit</button></td>
    <td><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus" onclick="setBasisToDelete('116', 'Merasa curiga berlebihan atau yakin bahwa orang lain akan menyakiti dirinya')">Hapus</button></td>
</tr>

        </tbody>
    </table>
    <!-- Modal Edit Indikasi -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #00aaff; color: white;">
        <h5 class="modal-title" id="modalEditLabel">Edit Indikasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editForm">
          <div class="mb-3">
            <label for="kode" class="form-label">Kode Indikasi</label>
            <input type="text" class="form-control" id="kode" placeholder="Masukkan Kode Indikasi" readonly>
          </div>
          <div class="mb-3">
            <label for="nama_indikasi" class="form-label">Nama Indikasi</label>
            <input type="text" class="form-control" id="nama_indikasi" placeholder="Masukkan Nama Indikasi">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" onclick="saveEditData()">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalHapusLabel">Hapus Basis Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-danger" onclick="deleteData()">Hapus</button>
      </div>
    </div>
  </div>
</div>
   
    <!-- Tombol untuk membuka modal tambah basis -->
    <div class="text-center">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahBasisModal">Tambah Basis Data</button>
    </div>
</div>

<!-- Modal untuk tambah basis -->
<div class="modal fade" id="tambahBasisModal" tabindex="-1" aria-labelledby="tambahBasisModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #00aaff; color: white;">
        <h5 class="modal-title" id="tambahBasisModalLabel">Tambah Basis Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
  <label for="kode_gangguan_tambah" class="form-label">Kode Gangguan</label>
  <select class="form-select" id="kode_gangguan_tambah"
    onchange="toggleInput('kode_gangguan_tambah','input_kode_gangguan_tambah')">
    <option value="">PILIH</option>
    <option value="G001">G001</option>
    <option value="G002">G002</option>
    <option value="G003">G003</option>
    <option value="other">Lainnya</option>
  </select>

  <input type="text" class="form-control mt-2"
    id="input_kode_gangguan_tambah"
    placeholder="Masukkan Kode Gangguan manual..."
    style="display:none;">
</div>
<div class="modal-body">
  <label for="nama_gangguan_tambah" class="form-label">Nama Gangguan</label>
  <select class="form-select" id="nama_gangguan_tambah"
    onchange="toggleInput('nama_gangguan_tambah','input_gangguan_tambah')">
    <option value="">PILIH</option>
    <option value="Gangguan1">Kecemasan</option>
    <option value="Gangguan2">Stres</option>
    <option value="Gangguan3">Depresi</option>
    <option value="other">Lainnya</option>
  </select>

  <input type="text" class="form-control mt-2"
    id="input_gangguan_tambah"
    placeholder="Masukkan Nama Gangguan manual..."
    style="display:none;">
</div>
<div class="modal-body">
  <label for="kode_indikasi_tambah" class="form-label">Kode Indikasi</label>
  <select class="form-select" id="kode_indikasi_tambah"
    onchange="toggleInput('kode_indikasi_tambah','input_kode_indikasi_tambah')">

    <option value="">PILIH</option>
    <option value="Indikasi1">I001</option>
    <option value="Indikasi2">I002</option>
    <option value="Indikasi3">I003</option>
    <option value="Indikasi4">I004</option>
    <option value="Indikasi5">I005</option>
    <option value="Indikasi6">I006</option>
    <option value="Indikasi7">I007</option>
    <option value="Indikasi8">I008</option>
    <option value="Indikasi9">I009</option>
    <option value="Indikasi10">I010</option>
    <option value="Indikasi11">I011</option>
    <option value="Indikasi12">I012</option>
    <option value="Indikasi13">I013</option>
    <option value="Indikasi14">I014</option>
    <option value="Indikasi15">I015</option>
    <option value="Indikasi16">I016</option>
    <option value="Indikasi17">I017</option>
    <option value="Indikasi18">I018</option>
    <option value="Indikasi19">I019</option>
    <option value="Indikasi20">I020</option>
    <option value="Indikasi21">I021</option>
    <option value="Indikasi22">I022</option>
    <option value="Indikasi23">I023</option>
    <option value="Indikasi24">I024</option>
    <option value="Indikasi25">I025</option>
    <option value="Indikasi26">I026</option>
    <option value="Indikasi27">I027</option>
    <option value="Indikasi28">I028</option>
    <option value="Indikasi29">I029</option>
    <option value="Indikasi30">I030</option>
    <option value="Indikasi31">I031</option>
    <option value="Indikasi32">I032</option>
    <option value="Indikasi33">I033</option>
    <option value="Indikasi34">I034</option>
    <option value="Indikasi35">I035</option>
    <option value="Indikasi36">I036</option>
    <option value="Indikasi37">I037</option>
    <option value="Indikasi38">I038</option>
    <option value="Indikasi39">I039</option>

    <option value="other">Lainnya</option>
  </select>

  <input type="text" class="form-control mt-2"
    id="input_kode_indikasi_tambah"
    placeholder="Masukkan Kode Indikasi manual..."
    style="display:none;">
</div>
<div class="modal-body">
  <label for="nama_indikasi_tambah" class="form-label">Nama Indikasi</label>
  <select class="form-select" id="nama_indikasi_tambah"
  onchange="toggleInput('nama_indikasi_tambah','input_nama_indikasi_tambah')">
    <option value="">PILIH</option>
    <option value="Indikasi 1">I001</option>
    <option value="Indikasi 2">I002</option>
    <option value="Indikasi 3">I003</option>
    <option value="Indikasi 4">I004</option>
    <option value="Indikasi 5">I005</option>
    <option value="Indikasi 6">I006</option>
    <option value="Indikasi 7">I007</option>
    <option value="Indikasi 8">I008</option>
    <option value="Indikasi 9">I009</option>
    <option value="Indikasi 10">I010</option>
    <option value="Indikasi 11">I011</option>
    <option value="Indikasi 12">I012</option>
    <option value="Indikasi 13">I013</option>
    <option value="Indikasi 14">I014</option>
    <option value="Indikasi 15">I015</option>
    <option value="Indikasi 16">I016</option>
    <option value="Indikasi 17">I017</option>
    <option value="Indikasi 18">I018</option>
    <option value="Indikasi 19">I019</option>
    <option value="Indikasi 20">I020</option>
    <option value="Indikasi 21">I021</option>
    <option value="Indikasi 22">I022</option>
    <option value="Indikasi 23">I023</option>
    <option value="Indikasi 24">I024</option>
    <option value="Indikasi 25">I025</option>
    <option value="Indikasi 26">I026</option>
    <option value="Indikasi 27">I027</option>
    <option value="Indikasi 28">I028</option>
    <option value="Indikasi 29">I029</option>
    <option value="Indikasi 30">I030</option>
    <option value="Indikasi 31">I031</option>
    <option value="Indikasi 32">I032</option>
    <option value="Indikasi 33">I033</option>
    <option value="Indikasi 34">I034</option>
    <option value="Indikasi 35">I035</option>
    <option value="Indikasi 36">I036</option>
    <option value="Indikasi 37">I037</option>
    <option value="Indikasi 38">I038</option>
    <option value="Indikasi 39">I039</option>
    <option value="other">Lainnya</option>
  </select>
 <input type="text" class="form-control mt-2"
  id="input_nama_indikasi_tambah"
  placeholder="Masukkan Nama Indikasi manual..."
  style="display:none;">
</div>
<script>
    function toggleInput(selectId, inputId) {
        const select = document.getElementById(selectId);
        const input = document.getElementById(inputId);

        if (select.value === "other") {
            input.style.display = "block";
            input.required = true;
        } else {
            input.style.display = "none";
            input.required = false;
            input.value = "";
        }
    }
</script>
<div class="mb-3">
                <label for="nilai_peluang" class="form-label">Nilai Peluang</label>
                <input type="text" class="form-control" id="nilai_peluang" placeholder="Masukkan Nilai Peluang">
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



<!-- Footer -->
<div class="footer">
    <p>Sistem Kondisi Kesehatan Mental c2025 Nabila</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
