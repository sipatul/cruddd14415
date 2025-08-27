<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Data Siswa</h1>
    <?php
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id=$id");
    $data = mysqli_fetch_assoc($result);
    ?>
    <form method="POST">
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required>
        <input type="text" name="nis" value="<?= $data['nis'] ?>" required>
        <textarea name="alamat" required><?= $data['alamat'] ?></textarea>
        <input type="submit" name="update" value="Update">
    </form>

    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $nis = $_POST['nis'];
        $alamat = $_POST['alamat'];

        $query = "UPDATE siswa SET nama='$nama', nis='$nis', alamat='$alamat' WHERE id=$id";
        mysqli_query($koneksi, $query);

        echo "<script>window.location='index.php';</script>";
    }
    ?>
</body>
</html>
