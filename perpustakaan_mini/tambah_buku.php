<html>

<head>
    <title>Form Tambah Buku</title>
</head>

<body>
    <h1>Tambah Data Buku</h1>
    <hr>
    <form action="proses_simpan.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><textarea name="deskripsi" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td>:</td>
                <td><input type="text" name="penulis"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>:</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="file" name="gambar"></td>
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