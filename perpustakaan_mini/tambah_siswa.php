<html>

<head>
    <title>Form Tambah Siswa</title>
</head>

<body>
    <h1>Tambah Data Siswa</h1>
    <hr>
    <form action="simpan_siswa.php" method="post">
        <table>
            <tr>
                <td>Nis</td>
                <td>:</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas"></td>
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