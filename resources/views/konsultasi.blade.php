<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin-bottom: 0px;
        }
        .container {
            flex: 1;
            max-width: 600px; /* Lebar maksimal form */
            margin-left: 20px; /* Menambahkan margin kiri untuk menyelaraskan dengan navbar */
        }
        .footer {
            background-color: #00aaff;
            color: white;
            padding: 5px 0;
            font-size: 12px;
            text-align: center;
            position: relative;
            width: 100%;
            bottom: 0;
            margin-top: 20px;
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
        .navbar-nav {
            margin-right: auto;
        }
        /* Menambahkan padding pada input dan membuatnya lebih rapi */
        .form-control {
            width: 100%; /* Menyesuaikan lebar input */
        }.transparent-table {
    width: 1000%; /* Membuat tabel memenuhi lebar kontainer */
    max-width: 1000px; /* Membatasi lebar maksimum tabel */
    margin: 20px auto; /* Membuat tabel berada di tengah dengan margin atas dan bawah */
    background-color: #f0f8ff; /* Transparansi latar belakang */
    color: black; /* Teks berwarna hitam */
    text-align: justify; /* Meratakan teks ke kiri */
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
button[type="submit"] {
    margin-bottom: 20px; /* Menambahkan spasi di bawah tombol */
}
.transparent-table td input[type="radio"] {
            display: inline; /* Menyusun radio button sejajar secara horizontal */
            margin-right: 10px; /* Memberikan jarak antara YA dan TIDAK */
}
.transparent-table td:last-child {
    width: 150px;  /* Menentukan lebar kolom Pilihan */
    text-align: justify; /* Rata tengah */
    padding-left: 5px; /* Menambah jarak di sebelah kiri untuk ruang lebih banyak */
    padding-right: 5px; /* Menambah jarak di sebelah kanan */
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
                    <a class="nav-link active" href="{{ route('index') }}">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tentang_kesehatan_mental') }}">TENTANG KESEHATAN MENTAL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('konsultasi') }}">KONSULTASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login_admin') }}">LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
        <h5 class="text-justify mt-5"><strong>PILIH INDIKASI YANG DIALAMI</strong></h5>
        <table class="table table-bordered transparent-table">
    <thead>
        <tr class="highlight-row">
            <th>No</th>
            <th>Kode Indikasi</th>
            <th>Indikasi</th>
            <th>Pilihan</th>
        </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>I01</td>
                    <td>Merasakan kesedihan yang berlangsung lama</td>
                    <td>
                        <input type="radio" id="indikasi1_ya" name="indikasi1" value="YA"> YA
                        <input type="radio" id="indikasi1_tidak" name="indikasi1" value="TIDAK"> TIDAK
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>I02</td>
                    <td>Mengalami suasana hati yang jauh lebih bersemangat dari kondisi biasanya</td>
                    <td>
                        <input type="radio" id="indikasi2_ya" name="indikasi2" value="YA"> YA
                        <input type="radio" id="indikasi2_tidak" name="indikasi2" value="TIDAK"> TIDAK
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>I03</td>
                    <td>Memiliki ketakutan yang berlebihan</td>
                    <td>
                        <input type="radio" id="indikasi3_ya" name="indikasi3" value="YA"> YA
                        <input type="radio" id="indikasi3_tidak" name="indikasi3" value="TIDAK"> TIDAK
                    </td>
                 <tr>
                    <td>4</td>
                    <td>I04</td>
                    <td>Merasa cemas, khawatir, atau gelisah hampir sepanjang waktu</td>
                    <td>
                        <input type="radio" id="indikasi4_ya" name="indikasi4" value="YA"> YA
                        <input type="radio" id="indikasi4_tidak" name="indikasi4" value="TIDAK"> TIDAK
                    </td>
                 <tr>
                    <td>5</td>
                    <td>I05</td>
                    <td>Cenderung menghindari interaksi sosial dan lebih memilih menyendiri</td>
                    <td>
                        <input type="radio" id="indikasi5_ya" name="indikasi5" value="YA"> YA
                        <input type="radio" id="indikasi5_tidak" name="indikasi5" value="TIDAK"> TIDAK
                    </td>
                 <tr>
                    <td>6</td>
                    <td>I06</td>
                    <td>Mengalami gangguan pola tidur, seperti sulit tidur, sering terbangun, mimpi buruk, atau tidur berlebihan</td>
                    <td>
                        <input type="radio" id="indikasi6_ya" name="indikasi6" value="YA"> YA
                        <input type="radio" id="indikasi6_tidak" name="indikasi6" value="TIDAK"> TIDAK
                    </td>
                 <tr>
                    <td>7</td>
                    <td>I07</td>
                    <td>Terjadi perubahan pola makan, baik peningkatan maupun penurunan nafsu makan</td>
                    <td>
                        <input type="radio" id="indikasi7_ya" name="indikasi7" value="YA"> YA
                        <input type="radio" id="indikasi7_tidak" name="indikasi7" value="TIDAK"> TIDAK
                    </td>
                 <tr>
                    <td>8</td>
                    <td>I08</td>
                    <td>Menjadi lebih mudah marah atau tersinggung</td>
                    <td>
                        <input type="radio" id="indikasi8_ya" name="indikasi8" value="YA"> YA
                        <input type="radio" id="indikasi8_tidak" name="indikasi8" value="TIDAK"> TIDAK
                    </td>
                 <tr>
                    <td>9</td>
                    <td>I09</td>
                    <td>Merasa tidak berharga, tidak mampu, atau tidak berguna</td>
                    <td>
                        <input type="radio" id="indikasi9_ya" name="indikasi9" value="YA"> YA
                        <input type="radio" id="indikasi9_tidak" name="indikasi9" value="TIDAK"> TIDAK
                    </td>
                 <tr>
                    <td>10</td>
                    <td>I010</td>
                    <td>Mengalami penurunan rasa percaya diri</td>
                    <td>
                        <input type="radio" id="indikasi10_ya" name="indikasi10" value="YA"> YA
                        <input type="radio" id="indikasi10_tidak" name="indikasi10" value="TIDAK"> TIDAK
                    </td>
                 <tr>
                    <td>11</td>
                    <td>I011</td>
                    <td>Takut berbuat kesalahan, kesulitan mengambil keputusan, atau merasa bersalah secara berlebihan</td>
                    <td>
                        <input type="radio" id="indikasi11_ya" name="indikasi11" value="YA"> YA
                        <input type="radio" id="indikasi11_tidak" name="indikasi11" value="TIDAK"> TIDAK
                    </td>
                 <tr>
                    <td>12</td>
                    <td>I012</td>
                    <td>Sulit fokus atau mengalami hambatan saat melakukan aktivitas</td>
                    <td>
                        <input type="radio" id="indikasi12_ya" name="indikasi12" value="YA"> YA
                        <input type="radio" id="indikasi12_tidak" name="indikasi12" value="TIDAK"> TIDAK
                    </td>
                </tr>
            <tr>
                    <td>13</td>
                    <td>I013</td>
                    <td>Kehilangan ketertarikan terhadap hal-hal yang sebelumnya disukai</td>
                    <td>
                        <input type="radio" id="indikasi13_ya" name="indikasi13" value="YA"> YA
                        <input type="radio" id="indikasi13_tidak" name="indikasi13" value="TIDAK"> TIDAK
                    </td>
                </tr>
            <tr>
    <td>14</td>
    <td>I014</td>
    <td>Mengalami keringat dingin</td> 
    <td>
        <input type="radio" id="indikasi14_ya" name="indikasi14" value="YA"> YA 
        <input type="radio" id="indikasi14_tidak" name="indikasi14" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>15</td>
    <td>I015</td>
    <td>Merasakan nyeri atau ketidaknyamanan pada perut </td> 
    <td>
        <input type="radio" id="indikasi15_ya" name="indikasi15" value="YA"> YA 
        <input type="radio" id="indikasi15_tidak" name="indikasi15" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>16</td>
    <td>I016</td>
    <td>Mengalami sakit kepala secara mendadak</td> 
    <td>
        <input type="radio" id="indikasi16_ya" name="indikasi16" value="YA"> YA 
        <input type="radio" id="indikasi16_tidak" name="indikasi16" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>17</td>
    <td>I017</td>
    <td>Pandangan berkunang-kunang atau merasa hampir pingsan</td> 
    <td>
        <input type="radio" id="indikasi17_ya" name="indikasi17" value="YA"> YA 
        <input type="radio" id="indikasi17_tidak" name="indikasi17" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>18</td>
    <td>I018</td>
    <td>Merasa mual</td> 
    <td>
        <input type="radio" id="indikasi18_ya" name="indikasi18" value="YA"> YA 
        <input type="radio" id="indikasi18_tidak" name="indikasi18" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>19</td>
    <td>I019</td>
    <td>Mengalami muntah</td> 
    <td>
        <input type="radio" id="indikasi19_ya" name="indikasi19" value="YA"> YA 
        <input type="radio" id="indikasi19_tidak" name="indikasi19" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>20</td>
    <td>I020</td>
    <td>Jantung berdebar, tubuh gemetar, atau kesulitan bernapas</td> 
    <td>
        <input type="radio" id="indikasi20_ya" name="indikasi20" value="YA"> YA 
        <input type="radio" id="indikasi20_tidak" name="indikasi20" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>21</td>
    <td>I021</td>
    <td>Mudah menangis tanpa sebab yang jelas</td> 
    <td>
        <input type="radio" id="indikasi21_ya" name="indikasi21" value="YA"> YA 
        <input type="radio" id="indikasi21_tidak" name="indikasi21" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>22</td>
    <td>I022</td>
    <td>Merasa putus asa</td> 
    <td>
        <input type="radio" id="indikasi22_ya" name="indikasi22" value="YA"> YA 
        <input type="radio" id="indikasi22_tidak" name="indikasi22" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>23</td>
    <td>I023</td>
    <td>Sering muncul pikiran tentang kematian atau keinginan untuk mengakhiri hidup</td> 
    <td>
        <input type="radio" id="indikasi23_ya" name="indikasi23" value="YA"> YA 
        <input type="radio" id="indikasi23_tidak" name="indikasi23" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>24</td>
    <td>I024</td>
    <td>Melakukan tindakan yang membahayakan diri sendiri maupun orang lain</td> 
    <td>
        <input type="radio" id="indikasi24_ya" name="indikasi24" value="YA"> YA 
        <input type="radio" id="indikasi24_tidak" name="indikasi24" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>25</td>
    <td>I025</td>
    <td>Mengalami penurunan energi, mudah lelah, atau sebaliknya tidak mudah merasa lelah</td> 
    <td>
        <input type="radio" id="indikasi25_ya" name="indikasi25" value="YA"> YA 
        <input type="radio" id="indikasi25_tidak" name="indikasi25" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>26</td>
    <td>I026</td>
    <td>Terjadi perubahan berat badan yang signifikan, baik naik maupun turun</td> 
    <td>
        <input type="radio" id="indikasi26_ya" name="indikasi26" value="YA"> YA 
        <input type="radio" id="indikasi26_tidak" name="indikasi26" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>27</td>
    <td>I027</td>
    <td>Sering melamun</td> 
    <td>
        <input type="radio" id="indikasi27_ya" name="indikasi27" value="YA"> YA 
        <input type="radio" id="indikasi27_tidak" name="indikasi27" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>28</td>
    <td>I028</td>
    <td>Mengalami peningkatan energi yang jauh lebih tinggi dari biasanya</td> 
    <td>
        <input type="radio" id="indikasi28_ya" name="indikasi28" value="YA"> YA 
        <input type="radio" id="indikasi28_tidak" name="indikasi28" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>29</td>
    <td>I029</td>
    <td>Memiliki banyak ide yang muncul secara berlebihan</td> 
    <td>
        <input type="radio" id="indikasi29_ya" name="indikasi29" value="YA"> YA 
        <input type="radio" id="indikasi29_tidak" name="indikasi29" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>30</td>
    <td>I030</td>
    <td>Kebutuhan tidur berkurang atau merasa tidak memerlukan tidur</td> 
    <td>
        <input type="radio" id="indikasi30_ya" name="indikasi30" value="YA"> YA 
        <input type="radio" id="indikasi30_tidak" name="indikasi30" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>31</td>
    <td>I031</td>
    <td>Berbicara lebih sering, lebih cepat, sulit dihentikan, dan sering memotong pembicaraan orang lain</td> 
    <td>
        <input type="radio" id="indikasi31_ya" name="indikasi31" value="YA"> YA 
        <input type="radio" id="indikasi31_tidak" name="indikasi31" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>32</td>
    <td>I032</td>
    <td>Mengalami peningkatan dorongan atau pikiran seksual</td> 
    <td>
        <input type="radio" id="indikasi32_ya" name="indikasi32" value="YA"> YA 
        <input type="radio" id="indikasi32_tidak" name="indikasi32" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>33</td>
    <td>I033</td>
    <td>Sulit mengendalikan diri dan cenderung bersikap impulsif</td> 
    <td>
        <input type="radio" id="indikasi33_ya" name="indikasi33" value="YA"> YA 
        <input type="radio" id="indikasi33_tidak" name="indikasi33" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>34</td>
    <td>I034</td>
    <td>Menunjukkan perilaku tidak teratur atau sering bergerak tanpa tujuan (tidak bisa diam)</td> 
    <td>
        <input type="radio" id="indikasi34_ya" name="indikasi34" value="YA"> YA 
        <input type="radio" id="indikasi34_tidak" name="indikasi34" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>35</td>
    <td>I035</td>
    <td>Mengalami waham, yaitu keyakinan yang keliru atau tidak sesuai dengan kenyataan</td> 
    <td>
        <input type="radio" id="indikasi35_ya" name="indikasi35" value="YA"> YA 
        <input type="radio" id="indikasi35_tidak" name="indikasi35" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>36</td>
    <td>I036</td>
    <td>Mengalami halusinasi, seperti mendengar suara atau melihat sesuatu tanpa sumber nyata</td> 
    <td>
        <input type="radio" id="indikasi36_ya" name="indikasi36" value="YA"> YA 
        <input type="radio" id="indikasi36_tidak" name="indikasi36" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>37</td>
    <td>I037</td>
    <td>Cara berbicara menjadi tidak jelas atau sulit dipahami</td> 
    <td>
        <input type="radio" id="indikasi37_ya" name="indikasi37" value="YA"> YA 
        <input type="radio" id="indikasi37_tidak" name="indikasi37" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>38</td>
    <td>I038</td>
    <td>Mengalami gangguan dalam fungsi sosial, kegiatan sekolah, atau pekerjaan</td> 
    <td>
        <input type="radio" id="indikasi38_ya" name="indikasi38" value="YA"> YA 
        <input type="radio" id="indikasi38_tidak" name="indikasi38" value="TIDAK"> TIDAK 
    </td>
</tr>
<tr>
    <td>39</td>
    <td>I039</td>
    <td>Merasa curiga berlebihan atau yakin bahwa orang lain akan menyakiti dirinya</td> 
    <td>
        <input type="radio" id="indikasi39_ya" name="indikasi39" value="YA"> YA 
        <input type="radio" id="indikasi39_tidak" name="indikasi39" value="TIDAK"> TIDAK 
    </td>
</tr>
            </tbody>
        </table>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">CEK</button>
        </div>
    </form>
</div>

<!-- Footer -->
<div class="footer">
    <p class="text-center">Sistem Kondisi Kesehatan Mental c2026 Nabila</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
