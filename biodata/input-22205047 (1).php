<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="https://pkkmb.stmik-tegal.ac.id/images/logo/favicon-16x16.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Form Biodata</h2>
        <form action="proses-22205047.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="identitas">No. Identitas</label>
                <input type="text" class="form-control" id="identitas" name="identitas" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
            </div>
            <div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir</label>
    <select class="form-control" id="tanggal_lahir" name="tanggal_lahir">
        <option value="">Pilih Tanggal</option>
        <?php
        for ($i = 1; $i <= 31; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
</div>
<div class="form-group">
    <label for="bulan_lahir">Bulan Lahir</label>
    <select class="form-control" id="bulan_lahir" name="bulan_lahir">
        <option value="">Pilih Bulan</option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
    </select>
</div>
<div class="form-group">
    <label for="tahun_lahir">Tahun Lahir</label>
    <select class="form-control" id="tahun_lahir" name="tahun_lahir">
        <option value="">Pilih Tahun</option>
        <?php
        for ($i = 1980; $i <= 2005; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
</div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="jenis_kelamin_l" name="jenis_kelamin" value="Laki-laki" required>
                    <label class="form-check-label" for="jenis_kelamin_l">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="jenis_kelamin_p" name="jenis_kelamin" value="Perempuan" required>
                    <label class="form-check-label" for="jenis_kelamin_p">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label>Hobby</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="hobby_olahraga" name="hobby[]" value="Olahraga">
                    <label class="form-check-label" for="hobby_olahraga">Olahraga</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="hobby_musik" name="hobby[]" value="Musik">
                    <label class="form-check-label" for="hobby_musik">Musik</label>
                </div>
                <!-- Tambahkan opsi hobby lainnya -->
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="pas_foto">Pas Foto</label>
                <input type="file" class="form-control-file" id="pas_foto" name="pas_foto" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <!-- Tambahkan link Bootstrap JS dan jQuery jika diperlukan -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
