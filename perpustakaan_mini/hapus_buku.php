<?php
require_once("koneksi.php");
$buku_id = $_GET['id'];
$query = mysqli_query($koneksi, "delete from buku where buku_id='$buku_id'");
if ($query) {
    header('location:list_buku.php');
} else {
    echo 'data gagal terhapus';
}
