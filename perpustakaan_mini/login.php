 <html>

 <head>
     <title>LOGIN</title>
 </head>

 <body>
     <h1>FORM LOGIN To Perpustakaan Mini</h1>
     <hr>
     <?php
        if (isset($_GET['err'])) {
            $pesan = $_GET['err'];
            if ($pesan == 'logout') {
                echo "Anda berhasil logout";
            }
            if ($pesan == 'gagal') {
                echo "Anda gagal login";
            }
            if ($pesan == 'penyusup') {
                echo "Deteksi hengker";
            }
        }
        ?>
     <form action="proses_login.php" method="post">
         <table>
             <tr>
                 <td>Username</td>
                 <td>:</td>
                 <td><input type="text" name="username"></td>
             </tr>
             <tr>
                 <td>Password</td>
                 <td>:</td>
                 <td><input type="password" name="password"></td>
             </tr>
             <tr>
                 <td></td>
                 <td></td>
                 <td><input type="submit" value="LOGIN"></td>
             </tr>
         </table>
     </form>
 </body>

 </html>