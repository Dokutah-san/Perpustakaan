<?php
$id = $_GET['id'];
require_once("koneksi.php");

$query = mysqli_query($koneksi, "select * from siswa where id_siswa='$id'");
while ($data = mysqli_fetch_object($query)) {

?>
    <html>

    <head>
        <title>Form Ubah Siswa</title>
    </head>

    <body>
        <h1>Ubah Data Siswa</h1>
        <hr>
        <form action="proses_siswa.php" method="post">
            <table>
                <tr>
                    <input type="hidden" name="id" value="<?= $data->id_siswa; ?>">

                    <td>Nis</td>
                    <td>:</td>
                    <td><input type="text" name="nis" value="<?= $data->nis; ?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $data->nama; ?>"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" value="<?= $data->kelas; ?>"></td>
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