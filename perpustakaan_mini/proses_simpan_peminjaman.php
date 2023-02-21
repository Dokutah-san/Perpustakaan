<?php
require_once("koneksi.php");

$no_peminjaman = $_POST['id'] . "-" . date('Y-m-d');
$siswa = $_POST['id'];
$buku = $_POST['buku'];
$tgl_pinjam = date('y-m-d');
$tgl_kembali = $_POST['tgl_kembali'];

$query = mysqli_query($koneksi, "Insert into peminjaman values ('$no_peminjaman','$buku','$siswa','$tgl_pinjam','$tgl_kembali')");

if ($query) {
    header('location:peminjaman.php');
}
