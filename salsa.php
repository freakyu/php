<?php

  require 'salsa1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Luck in the Ox Year</title>
    
</head>
<body>
    <form action="salsa1.php" method="POST">
        <table>    
                <tr>
                    <td>Name <td>:</td> </td>
                    <!-- Required memastikan bahwa jika tombol submit ditekan ,akan mengeluarkan output yang menyatakan bagian input ini harus diisi -->
                    <td><input type="text"name="name"value=""required></td>
                </tr>
                <tr>
                    <td>Year of birth <td> :</td></td>
                    <!-- Required memastikan bahwa jika tombol submit ditekan ,akan mengeluarkan output yang menyatakan bagian input ini harus diisi -->
                    <td><input type="number"name="year"value=""required></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <!-- Jika tombol submit ditekan ,maka data akan diproses ke php-->
                    <td><input type="submit"name="submit"></td>
                </tr>
        </table>
    </form>
    
    
</body>
</html>