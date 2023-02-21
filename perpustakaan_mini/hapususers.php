<?php
require_once("koneksi.php");
$user_id = $_GET['id'];
$query = mysqli_query($koneksi, "delete from users where user_id='$user_id'");
if ($query) {
    header('location:listusers.php');
} else {
    echo 'data gagal terhapus';
}