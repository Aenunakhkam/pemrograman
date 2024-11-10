<html>
    <head><title>Grade Nilai</title></head>
<body>
    <table align="left" border="0" cellpadding="1" cellspacing="1" rowpadding="0">
        <tr height="20">
        <td width="32%"></td>
            <tr>
                <td colspan="2" align="center"><h5>GRADE NILAI MAHASISWA</h5></td>
            </tr>
        <pre>
<?php
    // Fungsi untuk menghitung grade
    function hitungGrade($nilai) {
        if ($nilai >= 81.00) {
            return 'A, Lulus';
        } elseif ($nilai >= 61.00) {
            return 'B, Lulus';
        } elseif ($nilai >= 41.00) {
            return 'C, Lulus';
        } elseif ($nilai >= 21.00) {
            return 'D, Tidak Lulus';
        } elseif ($nilai >= 1.00) {
            return 'E, Tidak Lulus';
        } elseif ($nilai >= 0.00) {
            return 'F, Tidak Lulus';
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $nilai = $_POST["nilai"];

        // Memastikan input nilai adalah angka
        if (is_numeric($nilai)) {
            $grade = hitungGrade($nilai);
        echo "<tr height=35>
                <td>&emsp;NIM</td><td>: <b>$nim<br></b></td>
            </tr>
            <tr height=35>
                <td>&emsp;Nama Mahasiswa</td><td>: <b>$nama<br></b></td>
            </tr>
            <tr height=35>
                <td>&emsp;Nilai</td><td>: <b>$grade</b></td>
            </tr>";
        } else {
            echo "Masukkan nilai yang valid.";
    }
}
?>
        <tr height="50">
           <td>&emsp;<a href="input10.php"><input type="submit" name="submit" value="Ulangi">   
            </table>
        </pre>
    </body>
</html>