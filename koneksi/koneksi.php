<?php

//Koneksi database
	$koneksi = mysqli_connect("localhost", "root", "", "test");

?>

<!Doctype html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- Small modal -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form method="POST" style="background-image: url(images/a.jpeg);">
            <table>
                <tr>
                <th></th>
                <th></th>
                <th>Menu Login</th>
                </tr>
                <tr>
                    <th style="text-align: center;">Nama</th><td>:</td><td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th style="text-align: center;">Nim</th><td>:</td><td><input type="number" name="nama" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" class="btn btn-primary" name="btnlogin">Login</button></td>
                </tr>
            </table>
            <p style="text-align: center;"> Belum punya akun? Daftar <a href="daftar.php">disini!</a></p>
        </form>
    </div>
  </div>
</div>
</body>
</html>