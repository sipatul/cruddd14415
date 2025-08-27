<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah Data Siswa</h1>
    <form method="POST">
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="text" name="nis" placeholder="NIS" required>
        <textarea name="alamat" placeholder="Alamat" required></textarea>
        <input type="submit" name="simpan" value="Simpan">
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $nis = $_POST['nis'];
        $alamat = $_POST['alamat'];

        $query = "INSERT INTO siswa (nama, nis, alamat) VALUES ('$nama', '$nis', '$alamat')";
        mysqli_query($koneksi, $query);

        echo "<script>window.location='index.php';</script>";
    }
    ?>
</body>
</html>
