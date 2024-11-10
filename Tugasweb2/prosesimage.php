<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["gambar"]) && $_FILES["gambar"]["error"] == 0) {
        
        // Directory penyimpanan gambar
        $target_dir = "uploads/";

        // Path lengkap file
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);

        // Periksa apakah file sebagai gambar
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($imageFileType, $allowedExtensions)) {
           
            // Coba unggah file
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "Gambar berhasil diunggah: <br>";
                echo "<img src='$target_file' alt='Gambar yang diunggah'>";
            } else {
                echo "Gagal mengunggah gambar.";
            }
        } else {
            echo "File yang diunggah bukan gambar.";
        }
    } else {
        echo "Terjadi kesalahan saat mengunggah gambar.";
    }
}
?>