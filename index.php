<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Siswa</h1>
    <a href="tambah.php">+ Tambah Siswa</a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $result = mysqli_query($koneksi, "SELECT * FROM siswa");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$no}</td>
                <td>{$row['nama']}</td>
                <td>{$row['nis']}</td>
                <td>{$row['alamat']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> |
                    <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"Yakin ingin hapus?\")'>Hapus</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
