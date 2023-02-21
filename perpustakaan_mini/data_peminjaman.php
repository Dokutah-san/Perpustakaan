<?php
require_once("koneksi.php");
$nis = $_GET['nis'];
?>

<html>

<head>
    <title>Form Peminjaman</title>
</head>

<body>
    <h1>DATA PEMINJAMAN</h1>
    <hr>
    <?php

    ?>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td>No</td>
            <td>Judul Buku</td>
            <td>Tgl Pinjam</td>
            <td>Tgl Kembali</td>
        </tr>
        <?php
        $no = 1;
        $query_peminjaman = mysqli_query($koneksi, " 
        select * from peminjaman
        inner join buku on buku.buku_id = peminjaman.buku_id where nis='$nis'
    ");
        while ($data_peminjaman = mysqli_fetch_object($query_peminjaman)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data_peminjaman->judul_buku; ?></td>
                <td><?= $data_peminjaman->tgl_peminjaman; ?></td>
                <td><?= $data_peminjaman->tgl_kembali; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <a href="index.php" class=' toll'>Menu</a>
</body>

</html>