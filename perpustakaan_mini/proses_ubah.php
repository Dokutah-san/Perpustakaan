<?php
require_once("koneksi.php");
if (isset($_POST['simpan'])) {
    //mengambil data dari inputan form
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    //mengambil gambar dari inputan form
    $namafile = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $default = $_POST['gambardefault'];

    //bila ukuran file lebih besar dari 0 dan tidak error
    if ($ukuran > 0 || $error == 0) {
        //pindahkan file gambar dari temporary folder ke folder gambar
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/' . $namafile);
        mysqli_query($koneksi,"update buku set gambar='$namafile' where buku_id='$id'");
        //pesan bila gambar berhasil diupload
        // if ($move) {
        //     echo "<br>file '$namafile' dengan ukuran $ukuran sudah terupload";
        // } else {
        //     echo "terjadi kesalahan saat mengupload file";
        
        // }
    } else if($default){
        mysqli_query($koneksi, "update buku set gambar='$default' where buku_id='$id'");

    }
    $query = mysqli_query($koneksi, "update buku set 
    judul_buku='$judul',
    deskripsi='$deskripsi',
    penulis='$penulis',
    penerbit='$penerbit'
    where buku_id='$id'
    ");
    if ($query) {
        header('location:list_buku.php');
    } else {
        echo 'data gagal terhapus';
    }
}
