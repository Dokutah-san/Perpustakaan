<?php

require_once("koneksi.php");
$query = mysqli_query($koneksi, "select*from siswa");
?>

<html>

<head>
    <style>
        a {
            text-decoration: none;
            color: white;
        }

        .toll {
            background-color: green;
            padding: 10px;
        }

        .tombol1 {
            background-color: blue;
            padding: 7px;
        }

        .tombol2 {
            background-color: red;
            padding: 7px;
        }

        table {
            margin-top: 20px;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <h1>DAFTAR SISWA</h1>
    <center><a href="tambah_siswa.php" class=' toll'>TAMBAH</a></center>
    <table border=1 align='center' cellpadding='3' cellspacing='0'>
        <tr style="background-color:gray" ;>
            <td>No</td>
            <td>Nis</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Aksi</td>
        </tr>
        <tr>
            <?php
            $i = 1;
            while ($data = mysqli_fetch_object($query)) {
                echo "<tr>
                <td>" . $i++ . "</td>
                <td>$data->nis</td>
                <td>$data->nama</td>
                <td>$data->kelas</td>
                <td>
                <a href='ubah_siswa.php?id=$data->id_siswa' class='tombol1'>Ubah</a>
                <a onClick='return ok()' href='hapus_siswa.php?id=$data->id_siswa' class='tombol2'>Hapus</a>
                </td>
            </tr>";
            }
            ?>
    </table>
    <br><br>
    <center><a href="index.php" class=' toll'>Menu</a></center>
</body>
<script>
    function ok() {
        return confirm('Konfirmasi Aksi Anda!');
    }
</script>


</html>