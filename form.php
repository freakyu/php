<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form php</title>
</head>
<body>
    <form method="POST">
        <table>
        <tr>
        <td>Nama lengkap</td><td>:</td><td><input type="text" name="inputnama"></td>
        </tr>
        
        <tr>
        <td>Umur</td><td>:</td><td><input type="number" name="Umur"></td>
        </tr>
        <tr>
        <td><input type="submit" value="cek nama" name="ceknama"></td>
        </tr>
        </table>
    </form>
        <?php
            if(isset($_POST['ceknama'])){
                $nama = $_POST['inputnama'];
                
                if ($nama == ""){
                    echo "<h4 style='color : red'>Silahkan isi nama anda! </h4>";
                }
                else if($nama == "Diah"){
                    echo "Selamat <b>$nama</b> kamu lulus!";
                }
                else{
                    echo "<b>$nama</b> tidak lulus!";
                }

            }
        ?>
</body>
</html>