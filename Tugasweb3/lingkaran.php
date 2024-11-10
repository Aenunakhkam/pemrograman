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
        }

        .form-box input[type="submit"] {
            width: 100%;
            padding: 8px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-box input[type="submit"]:hover {
            background-color: #0056b3;
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
                <label for="radius">Masukan Jari-Jari</label>
                <input type="number" name="radius" id="radius" required>
                <input type="submit" name="hitung" value="HITUNG">
            </form>
        </div>
        
        <?php
        // Fungsi untuk menghitung luas lingkaran
        function hitungLuas($radius) {
            return pi() * $radius * $radius;
        }

        // Fungsi untuk menghitung keliling lingkaran
        function hitungKeliling($radius) {
            return 2 * pi() * $radius;
        }

        if (isset($_POST['hitung'])) {
            $radius = $_POST['radius'];

            // Memastikan input adalah bilangan positif
            if ($radius > 0) {
                $luas = hitungLuas($radius);
                $keliling = hitungKeliling($radius);

                echo "<div class='result-box'>";
                echo "<h4>HASIL PERHITUNGAN</h4>";
                echo "<p>Luas = $luas</p>";
                echo "<p>Keliling = $keliling</p>";
                echo "</div>";
            } else {
                echo "<div class='result-box'>";
                echo "<p>Masukkan radius dengan bilangan positif!</p>";
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
