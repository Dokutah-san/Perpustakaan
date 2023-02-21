<?php

require_once("koneksi.php");
$query = mysqli_query($koneksi, "select*from users");
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
    <h1>DAFTAR LIST USER</h1>
    <center><a href="tambahusers.php" class=' toll'>TAMBAH</a></center>
    <table border=1 align='center' cellpadding='3' cellspacing='0'>
        <tr style="background-color:gray" ;>
            <td>No</td>
            <td>Username</td>
            <td>Password</td>
            <td>Level</td>
            <td>Aksi</td>
        </tr>
        <tr>
            <?php
            $i = 1;
            while ($data = mysqli_fetch_object($query)) {
                echo "<tr>
                <td>" . $i++ . "</td>
                <td>$data->username</td>
                <td>$data->password</td>
                <td>$data->level</td>
                <td>
                <a href='ubahusers.php?id=$data->user_id' class='tombol1'>Ubah</a>
                <a onClick='return ok()' href='hapususers.php?id=$data->user_id' class='tombol2'>Hapus</a>
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