<?php
session_start();

// Fungsi untuk penjumlahan
function tambah($a, $b)
{
    return $a + $b;
}

// Fungsi untuk pengurangan
function kurang($a, $b)
{
    return $a - $b;
}

// Fungsi untuk perkalian
function kali($a, $b)
{
    return $a * $b;
}

// Fungsi untuk pembagian
function bagi($a, $b)
{
    if ($b != 0) {
        return $a / $b;
    } else {
        return "Error: Pembagian dengan nol.";
    }
}

// Fungsi untuk menampilkan pesan sukses
function showSuccessMessage($message)
{
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            ' . $message . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}

// Fungsi untuk menampilkan pesan kesalahan
function showErrorMessage($message)
{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            ' . $message . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    // Gantilah logika autentikasi sesuai kebutuhan Anda
    if ($username === 'aenun' && $password === 'akhkam') {
        $_SESSION['username'] = $username;

        // Set cookie jika opsi "Ingat Saya" dicentang
        if ($remember) {
            setcookie('remember_username', $username, time() + 3600 * 24 * 30); // Cookie berlaku selama 30 hari
        }

        // Redirect ke halaman selamat datang atau halaman lain yang diinginkan
        header('Location: calculator.php');
        exit();
    } else {
        showErrorMessage('Username atau password salah');
    }
}

// Menyiapkan nilai awal untuk formulir
$defaultUsername = isset($_COOKIE['remember_username']) ? $_COOKIE['remember_username'] : '';
?>

<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Tambahkan gaya CSS di sini */
        body {
            background-color: #f8f9fa; /* Warna abu-abu muda untuk latar belakang body */
        }

        .container-login {
            margin-top: 50px;
        }

        .login-form {
            max-width: 400px; /* Menetapkan lebar maksimum formulir */
            margin: auto; /* Menengahkan formulir */
            padding: 30px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            background-color: #ffffff; /* Warna putih untuk latar belakang formulir */
        }

        .login-heading {
            text-align: center; /* Menengahkan teks */
            margin-bottom: 20px; /* Memberikan ruang antara teks dan formulir */
        }

        .btn-primary {
            background-color: #007bff; /* Warna biru untuk tombol login */
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Warna biru yang sedikit lebih tua untuk efek hover pada tombol login */
            border-color: #0056b3;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container mt-5 container-login">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Tambahkan container untuk logo -->
            <div class="logo-container">
                <img src="/uas/img/logo.png" alt="Logo" style="max-width: 15%;">
            </div>
            <h2 class="mb-4 login-heading">Silahkan Login</h2>
            <form method="post" class="login-form">
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Ingat Saya</label>
                </div>

                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </form>
        </div>
    </div>
</div>

<!-- Teks Copy Right -->
<div style="text-align: center; margin-top: 190px;">
    <p>© Aenun Akhkam_22205047</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


