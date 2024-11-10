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
    justify-content: center; /* Menengahkan secara vertikal */
    align-items: center; /* Menengahkan secara horizontal */
}

.container {
    width: 100%;
    max-width: 500px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.form-box,
.result-box {
    width: 100%;
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.result-box {
    background-color: #e9ecef;
}

.footer {
    width: 100%;
    color: #000000;
    padding: 10px;
    text-align: center;
 
    position: fixed;
    bottom: 0;
}

    </style>
</head>
<body>
    <!-- Container -->
    <div class="container">
        <div class="form-box">
            <form method="post" action="">
                <div class="form-group">
                    <label for="panjang">Masukkan Panjang:</label>
                    <input type="number" class="form-control" name="panjang" id="panjang" required>
                </div>
                <div class="form-group">
                    <label for="lebar">Masukkan Lebar:</label>
                    <input type="number" class="form-control" name="lebar" id="lebar" required>
                </div>
                <input type="submit" class="btn btn-primary" name="hitung" value="HITUNG">
            </form>
        </div>

        <?php
        function hitungLuas($panjang, $lebar) {
            return $panjang * $lebar;
        }

        function hitungKeliling($panjang, $lebar) {
            return 2 * ($panjang + $lebar);
        }

        if (isset($_POST['hitung'])) {
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];

            if ($panjang > 0 && $lebar > 0) {
                $luas = hitungLuas($panjang, $lebar);
                $keliling = hitungKeliling($panjang, $lebar);

                echo "<div class='result-box'>";
                echo "<h4>Hasil Perhitungan:</h4>";
                echo "<p><strong>Luas:</strong> $luas cm<sup>2</sup></p>";
                echo "<p><strong>Keliling:</strong> $keliling cm</p>";
                echo "</div>";
            } else {
                echo "<div class='alert alert-danger mt-4' role='alert'>";
                echo "Masukkan panjang dan lebar dengan bilangan positif!";
                echo "</div>";
            }
        }
        ?>
    </div>

    <!-- Footer -->
    <footer class="footer">
        © 2024 Aenun Akhkam | NIS 22205047 | All Rights Reserved
    </footer>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
