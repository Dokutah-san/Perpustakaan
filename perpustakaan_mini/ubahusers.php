<?php
$id = $_GET['id'];
require_once("koneksi.php");

$query = mysqli_query($koneksi,"select * from users where user_id='$id'");
while ($data = mysqli_fetch_object($query)) {

?>
<html>

<head>
    <title>Form Ubah User</title>
</head>

<body>
    <h1>Ubah Data User</h1>
    <hr>
    <form action="prosesusers.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
        <input type="hidden" name="id" value="<?= $data->user_id; ?>">

                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" value="<?= $data->username; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" value="<?= $data->password; ?>"></td>
            </tr>
            <tr>
                <td>level</td>
                <td>:</td>
                <td><input type="text" name="level" value="<?= $data->level; ?>"></td>
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