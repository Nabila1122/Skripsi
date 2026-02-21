<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Menambahkan garis biru di bawah card */
        .card {
            border-bottom: 5px solid #1E90FF;
        }

        /* Menambahkan garis di bawah teks "SILAHKAN LOGIN" */
        .card-body h4 {
            border-bottom: 2px solid #1E90FF;
            padding-bottom: 10px;
        }

        /* Menambahkan margin dan style untuk teks footer */
        .footer-text {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            font-size: 14px;
            color: #ffffff;
            border-bottom: 2px solid #1E90FF; /* Menambahkan garis bawah pada footer */
            padding-bottom: 10px; /* Memberikan jarak antara teks dan garis */
            background-color: #00aaff; /* Menambahkan background biru */
        }
        
    </style>
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
    <div class="card shadow" style="width:400px; background-color: #00aaff;">
        <div class="card-body">
            <h4 class="text-center mb-4 text-white">SILAHKAN LOGIN</h4>

            <div class="mb-3">
                <label for="username" class="text-white">Username</label>
                <input type="text" id="username" class="form-control" placeholder="Masukkan Username">
            </div>

            <div class="mb-3">
                <label for="password" class="text-white">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Masukkan Password">
            </div>

            <button class="btn btn-primary w-100" onclick="login()">Login</button>

            <div class="mt-3 text-center text-danger" id="error"></div>
        </div>
    </div>
</div>

<!-- Footer Teks -->
<div class="footer-text">
    <p>Sistem Kondisi Kesehatan Mental c2026 Nabila</p>
</div>

<!-- JavaScript -->
<script>
function login() {
    // Melakukan permintaan ke API untuk login
    fetch('/api/admin/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            username: document.getElementById('username').value,
            password: document.getElementById('password').value
        })
    })
    .then(res => res.json())
    .then(data => {
        if (data.status) {
            // Menampilkan pesan login berhasil
            alert('Login berhasil');
            
            // Mengarahkan ke halaman beranda setelah login
            window.location.href = '/index';  // Ganti '/index' dengan URL beranda yang sesuai
        } else {
            // Menampilkan pesan error jika login gagal
            document.getElementById('error').innerText = data.message;
        }
    });
}
</script>

</body>
</html>
