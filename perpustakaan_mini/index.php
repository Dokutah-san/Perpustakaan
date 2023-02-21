<?php
session_start();
$nis = $_SESSION['nis'];
if ($_SESSION['login'] == null) {
    header('location:login.php?err=penyusup');
} else {
?>
    <html>

    <head>
        <title>Perpustakaan Mini</title>
        <style>
            h1 {
                text-align: center;
            }

            a {
                background-color: red;
                color: white;
                padding: 7px;
                text-decoration: none;
            }
        </style>
    </head>

    <body>
        <h1>PERPUSTAKAAN MINI</h1>
        <center>
            selamat datang,<b><?= $_SESSION['nama']; ?></b><a href="logout.php">Logout</a>
            <hr>
            <?php
            if ($_SESSION['level'] == 'Petugas') {
            ?>
                <!--PETUGAS-->
                <a href="listusers.php">User</a>
                <a href="list_buku.php">Buku</a>
                <a href="peminjaman.php">Peminjaman</a>
                <a href="list_siswa.php">Siswa</a>
            <?php
            }
            if ($_SESSION['level'] == 'Siswa') {
            ?>
                <!--SISWA-->
                <a href="data_peminjaman.php?nis=<?= $nis ?>">Data Peminjaman</a>
            <?php
            }
            ?>
        </center>
    </body>

    </html>
<?php  }
?>