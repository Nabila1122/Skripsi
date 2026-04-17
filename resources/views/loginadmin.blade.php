<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f0f8ff; font-family: Arial, sans-serif; }
        .card { border-bottom: 5px solid #1E90FF; }
        .footer-text { position: absolute; bottom: 0; width: 100%; text-align: center; font-size: 14px; color: #ffffff; background-color: #00aaff; padding: 10px 0; }
        .error-message { font-size: 14px; }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
    <div class="card shadow" style="width:400px; background-color: #00aaff;">
        <div class="card-body">
            <h4 class="text-center mb-4 text-white">SILAHKAN LOGIN</h4>

            <form action="{{ url('/loginadmin') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="text-white">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Username" value="{{ old('username') }}" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="text-white">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>

                @if ($errors->has('login_error'))
                    <div class="mt-3 text-center text-danger error-message">
                        {{ $errors->first('login_error') }}
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>

<div class="footer-text">
    <p>Sistem Kondisi Kesehatan Mental &copy;2026 Nabila</p>
</div>

</body>
</html>