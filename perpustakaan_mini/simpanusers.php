<?php
require_once("koneksi.php");
if (isset($_POST['simpan'])) {
    //mengambil data dari inputan form
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = mysqli_query($koneksi, "insert into users values(null,'$username','$password','Petugas','')");
    if ($query) {
        header('location:listusers.php');
    } else {
        echo 'data gagal terhapus';
    }
}
