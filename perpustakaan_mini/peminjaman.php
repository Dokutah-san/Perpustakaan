<?php
require_once("koneksi.php");
?>

<html>

<head>
    <title>Form Peminjaman</title>
</head>

<body>
    <h1>FORM PEMINJAMAN</h1>
    <hr>
    <form action="" method="post">
        <table>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis" value="">
                    <input type="submit" name="cari" value="CARI">
                </td>
            </tr>
        </table>
    </form>
    <form action="proses_simpan_peminjaman.php" method="post">
        <table>
            <tr>
                <td>Siswa</td>
                <td>:</td>
                <td>
                    <?php
                    if (isset($_POST['nis'])) {
                        $nis = $_POST['nis'];
                        $query_nis = mysqli_query($koneksi, "select * from siswa where nis='$nis'");
                        $data_siswa = mysqli_fetch_object($query_nis);
                        if ($nis = !$data_siswa || $nis == null) {
                            echo '<input type="text" value="" placeholder="data salah/tidak ditemukan" readonly>';
                        } else {
                    ?>
                            <input type="text" value="<?= $data_siswa->nama; ?>" readonly>
                            <input type="hidden" value="<?= $data_siswa->nis; ?>" name="id">
                    <?php
                        }
                    } else {
                        echo '<input type="text" value="" placeholder="masukkan nis anda" readonly>';
                    };
                    ?>
                </td>
            </tr>
            <tr>
                <td>Buku</td>
                <td>:</td>
                <td>
                    <select name="buku">
                        <?php
                        $query_buku = mysqli_query($koneksi, "select * from buku");
                        while ($data_buku = mysqli_fetch_object($query_buku)) {
                        ?>
                            <option value="
                            <?= $data_buku->buku_id; ?>">
                                <?= $data_buku->judul_buku; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tgl Kembali</td>
                <td>:</td>
                <td><input type="date" name="tgl_kembali"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <?php

    ?>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td>No</td>
            <td>No Peminjam</td>
            <td>Nis</td>
            <td>Nama Siswa</td>
            <td>Judul Buku</td>
            <td>Tgl Pinjam</td>
            <td>Tgl Kembali</td>
        </tr>
        <?php
        $no = 1;
        $query_peminjaman = mysqli_query($koneksi, " 
        select * from peminjaman
        inner join buku on buku.buku_id = peminjaman.buku_id
        inner join siswa on siswa.nis = peminjaman.nis
    ");
        while ($data_peminjaman = mysqli_fetch_object($query_peminjaman)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data_peminjaman->no_peminjaman; ?></td>
                <td><?= $data_peminjaman->nis; ?></td>
                <td><?= $data_peminjaman->nama; ?></td>
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