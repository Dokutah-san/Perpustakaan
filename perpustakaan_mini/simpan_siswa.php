<?php
require_once("koneksi.php");
if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $query = mysqli_query($koneksi, "insert into siswa values(null,'$nis','$nama','$kelas')");
    if ($query) {
        mysqli_query($koneksi, "insert into users values(null,'$nama',md5('$nis'),'Siswa','$nis')");
        header('location:list_siswa.php');
    } else {
        echo 'data gagal terhapus';
    }
}
