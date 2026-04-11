<!-- resources/views/loginadmin.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }
        .card {
            border-bottom: 5px solid #1E90FF;
        }
        .footer-text {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            font-size: 14px;
            color: #ffffff;
            background-color: #00aaff;
            padding: 10px 0;
        }
        .error-message {
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
    <div class="card shadow" style="width:400px; background-color: #00aaff;">
        <div class="card-body">
            <h4 class="text-center mb-4 text-white">SILAHKAN LOGIN</h4>

            <form id="loginForm">
                <div class="mb-3">
                    <label for="username" class="text-white">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Username" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="text-white">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>

                <div class="mt-3 text-center text-danger error-message" id="error"></div>
            </form>
        </div>
    </div>
</div>

<div class="footer-text">
    <p>Sistem Kondisi Kesehatan Mental &copy;2026 Nabila</p>
</div>

<script>
const loginForm = document.querySelector('#loginForm');
const errorMessage = document.querySelector('#error');

loginForm.addEventListener('submit', async (e) => {
    e.preventDefault();

    const formData = {
        username: document.querySelector('#username').value,
        password: document.querySelector('#password').value
    };

    try {
        const response = await fetch('/api/loginadmin', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(formData)
        });

        const result = await response.json();

        if(result.success){
            // redirect ke halaman gangguan
            window.location.href = '/gangguan';
        } else {
            errorMessage.textContent = result.message || 'Login gagal';
        }
    } catch (err) {
        errorMessage.textContent = 'Terjadi kesalahan, coba lagi';
    }
});
</script>

</body>
</html>