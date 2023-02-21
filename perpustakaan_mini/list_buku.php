<?php
//koneksi ke database
require_once("koneksi.php");

//query ke database(mengambil data)
$query = mysqli_query($koneksi, "select*from buku");
// $data = mysqli_fetch_array($query);
// echo "<img src='images/$data[gambar]' />";
// while ($data = mysqli_fetch_object($query)) {
//     echo $data->judul_buku . "<br>";
// }
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
    <h1>DAFTAR LIST BUKU</h1>
    <center><a href="tambah_buku.php" class=' toll'>TAMBAH</a></center>
    <table border=1 align='center' cellpadding='3' cellspacing='0'>
        <tr style="background-color:gray" ;>
            <td>No</td>
            <td>Judul Buku</td>
            <td>Deskripsi</td>
            <td>Penulis</td>
            <td>Penerbit</td>
            <td>Cover</td>
            <td>Aksi</td>
        </tr>
        <tr>
            <?php
            $i = 1;
            while ($data = mysqli_fetch_object($query)) {
                echo "<tr>
                <td>" . $i++ . "</td>
                <td>$data->judul_buku</td>
                <td>$data->deskripsi</td>
                <td>$data->penulis</td>
                <td>$data->penerbit</td>
                <td style='height=100';>
                <img src='images/$data->gambar' height='100'/>
                </td>
                <td>
                <a href='ubah_buku.php?id=$data->buku_id' class='tombol1'>Ubah</a>
                <a onClick='return ok()' href='hapus_buku.php?id=$data->buku_id' class='tombol2'>Hapus</a>
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