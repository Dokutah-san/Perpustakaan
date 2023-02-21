<?php
require_once("koneksi.php");
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    $query = mysqli_query($koneksi, "update users set 
    username='$username',
    password='$password',
    level='$level'
    where user_id='$id'
    ");
    if ($query) {
        header('location:listusers.php');
    } else {
        echo 'data gagal terhapus';
    }
}
