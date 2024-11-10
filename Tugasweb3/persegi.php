<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aenun Akhkam | Program Menghitung</title>
    <!-- FAVICON -->
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        header {
            flex-shrink: 0;
        }
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            margin-top: 20px;
        }
        .form-box {
            text-align: left;
            width: 100%;
            max-width: 400px;
            margin-top: 20px;
        }
        .form-box label {
            display: block;
            margin-bottom: 5px;
        }
        .form-box input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ced4da;
        }
        .form-box input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff; /* Warna biru Bootstrap */
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
        }

        .form-box input[type="submit"]:hover {
            background-color: #0056b3; /* Warna biru lebih gelap saat hover */
        }

        .result-box {
            margin-top: 20px;
            text-align: left;
            width: 100%;
            max-width: 400px;
        }
        footer {
            color: #000000;
            
            padding: 10px 0;
            text-align: center;
            width: 100%;
            flex-shrink: 0;
        }
    </style>
</head>
<body>

   
    <div class="container">
        <div class="form-box">
            <form method="post" action="">
                <label for="sisi">Masukkan Panjang Sisi:</label>
                <input type="number" name="sisi" id="sisi" step="0.01" min="0" required>
                <input type="submit" name="hitung" value="HITUNG">
            </form>
        </div>
        
        <?php
        // Fungsi untuk menghitung luas persegi
        function hitungLuas($sisi) {
            return $sisi * $sisi;
        }

        // Fungsi untuk menghitung keliling persegi
        function hitungKeliling($sisi) {
            return 4 * $sisi;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['hitung'])) {
            $sisi = htmlspecialchars($_POST['sisi']);

            // Memastikan input adalah bilangan positif
            if (is_numeric($sisi) && $sisi > 0) {
                $luas = hitungLuas($sisi);
                $keliling = hitungKeliling($sisi);

                // Membulatkan hasil ke 2 angka desimal
                $luas = number_format($luas, 2);
                $keliling = number_format($keliling, 2);

                echo "<div class='result-box'>";
                echo "<h4>HASIL PERHITUNGAN</h4>";
                echo "<p>Luas = $luas cm<sup>2</sup></p>";
                echo "<p>Keliling = $keliling cm</p>";
                echo "</div>";
            } else {
                echo "<div class='result-box'>";
                echo "<p>Masukkan panjang sisi dengan bilangan positif!</p>";
                echo "</div>";
            }
        }
        ?>
    </div>

    <!-- Footer -->
    <footer>
        <p>© 2024 Aenun Akhkam | NIS 17082001 | All Rights Reserved</p>
    </footer>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
