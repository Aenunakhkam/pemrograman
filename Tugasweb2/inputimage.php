<!DOCTYPE html>
<html>
<head>
    <title>Form Upload Gambar</title>
</head>
<body>
    <h2>Upload Gambar</h2>
    <form action="prosesimage.php" method="post" enctype="multipart/form-data">
        <label>Pilih Gambar:</label>
        <input type="file" name="gambar" accept="image/*" required>
        <br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>