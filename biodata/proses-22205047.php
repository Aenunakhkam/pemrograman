<?php
// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari form
    $identitas = $_POST["identitas"];
    $nama = $_POST["nama"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $bulan_lahir = $_POST["bulan_lahir"];
    $tahun_lahir = $_POST["tahun_lahir"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    
    // Tangkap data hobby (jika ada)
    if (isset($_POST["hobby"])) {
        $hobby = implode(", ", $_POST["hobby"]);
    } else {
        $hobby = "Tidak ada hobby yang dipilih";
    }
    
    $alamat = $_POST["alamat"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Handle upload pas foto
    if ($_FILES["pas_foto"]["error"] == 0) {
        $file_name = $_FILES["pas_foto"]["name"];
        $file_tmp = $_FILES["pas_foto"]["tmp_name"];
        move_uploaded_file($file_tmp, "uploads/" . $file_name);
        $pas_foto = "uploads/" . $file_name;
    } else {
        $pas_foto = "Tidak ada foto yang diunggah";
    }
    
    // Tampilkan hasil data yang diolah
    echo "<h2>Data yang Anda masukkan:</h2>";
    echo "<p>No. Identitas: $identitas</p>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Tempat Lahir: $tempat_lahir</p>";
    echo "<p>Tanggal Lahir: $tanggal_lahir-$bulan_lahir-$tahun_lahir</p>";
    echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
    echo "<p>Hobby: $hobby</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<p>Username: $username</p>";
    echo "<p>Password: $password</p>";
    echo "<p>Pas Foto: <img src='$pas_foto' alt='Pas Foto'></p>";
} else {
    echo "Akses ke halaman ini tidak valid.";
}
?>
