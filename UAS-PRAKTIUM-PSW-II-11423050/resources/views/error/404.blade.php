[6/7/2024 10:57 AM] : <!-- resources/views/errors/404.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>404 - Not Found</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Atau gunakan link ke file CSS Bootstrap yang sudah diunduh di proyek Anda -->
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .error-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .error-content {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-content">
            <h1 class="display-1">404 - Not Found</h1>
            <p class="lead">Maaf, halaman yang Anda cari tidak ditemukan.</p>
            <a href="/" class="btn btn-primary">Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>
[6/7/2024 10:57 AM] : <!-- resources/views/custom_error.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 403</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Atau gunakan link ke file CSS Bootstrap yang sudah diunduh di proyek Anda -->
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .error-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .error-content {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-content">
            <h1 class="display-1">403 - TIDAK DIIZINKAN</h1>
            <p class="lead">Anda tidak ada akses untuk mengakses halaman ini.</p>
            <a href="/" class="btn btn-primary">Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>