<?php
require_once("koneksi.php");
$id_siswa = $_GET['id'];
$query = mysqli_query($koneksi, "delete from siswa where id_siswa='$id_siswa'");
if ($query) {
    header('location:list_siswa.php');
} else {
    echo 'data gagal terhapus';
}
