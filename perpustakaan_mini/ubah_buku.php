<?php
//proses seleksi data buku 
$id = $_GET['id'];
require_once("koneksi.php");

$query = mysqli_query($koneksi,"select * from buku where buku_id='$id'");
while ($data = mysqli_fetch_object($query)) {

?>
<html>

<head>
    <title>Form Ubah Buku</title>
</head>

<body>
    <h1>Ubah Data Buku</h1>
    <hr>
    <form action="proses_ubah.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
        <input type="hidden" name="id" value="<?= $data->buku_id; ?>">

                <td>Judul Buku</td>
                <td>:</td>
                <td><input type="text" name="judul" value="<?= $data->judul_buku; ?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><textarea name="deskripsi" id="" cols="30" rows="10"><?= $data->deskripsi; ?></textarea></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td>:</td>
                <td><input type="text" name="penulis" value="<?= $data->penulis; ?>"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>:</td>
                <td><input type="text" name="penerbit" value="<?= $data->penerbit; ?>"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="file" name="gambar" ><br><img src="images/<?= $data->gambar; ?>" width="100"></td>
                <td><input type="text" name="gambardefault" value="<?= $data->gambar; ?>" hidden></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <br>
</body>

</html>
<?php
}
?>