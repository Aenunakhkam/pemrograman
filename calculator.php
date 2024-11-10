<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum, redirect ke halaman login
    header('Location: login.php');
    exit();
}

// Menampilkan pesan selamat datang
$welcomeMessage = "Selamat datang, " . $_SESSION['username'] . "!";

// Menangani operasi kalkulator jika formulir dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $operator = $_POST['operator'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = calculate($operator, $num1, $num2);
}

// Fungsi kalkulator
function calculate($operator, $num1, $num2)
{
    switch ($operator) {
        case 'add':
            return tambah($num1, $num2);
        case 'subtract':
            return kurang($num1, $num2);
        case 'multiply':
            return kali($num1, $num2);
        case 'divide':
            return bagi($num1, $num2);
        default:
            return "Error: Operator tidak valid";
    }
}

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .form-calculation {
            padding: 10px; /* Adjust the padding value as needed */
            border: 1px solid #dee2e6;
            border-radius: 4px;
            background-color: #ffffff;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-success" role="alert">
                <?= $welcomeMessage ?>
            </div>

            <h4 class="mb-4">Kalkulator</h4>
            <form method="post" class="form-calculation" id="calculationForm">
                <div class="mb-3">
                    <label for="num1" class="form-label">Angka 1:</label>
                    <input type="text" class="form-control" id="num1" name="num1" required>
                </div>
                <div class="mb-3">
                    <label for="operator" class="form-label">Operator:</label>
                    <select class="form-control" id="operator" name="operator" required>
                        <option value="add">+</option>
                        <option value="subtract">-</option>
                        <option value="multiply">*</option>
                        <option value="divide">/</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="num2" class="form-label">Angka 2:</label>
                    <input type="text" class="form-control" id="num2" name="num2" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary" name="calculate">Hitung</button>
                    <?php if (isset($result)) : ?>
                        <button class="btn btn-success" onclick="reloadPage()">Hitung Lagi</button>
                    <?php endif; ?>
                </div>
            </form>

            <?php if (isset($result)) : ?>
                <div class="mt-3">
                    <h5>Hasil: <?= $result ?></h5>
                </div>
            <?php endif; ?>

            <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function reloadPage() {
        // Reset the result and form, then reload the current page
        document.getElementById('calculationForm').reset();
        <?php if (isset($result)) : ?>
            <?php unset($result); ?>
        <?php endif; ?>
        location.reload();
    }
</script>
</body>
</html>
