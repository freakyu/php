<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form php</title>
</head>
<body>
    <form action="proses.php">
        <table>
        <tr>
        <td>Nama lengkap</td><td>:</td><td><input type="text" name="nama"></td>
        </tr>
        
        <tr>
        <td>Umur</td><td>:</td><td><input type="number" name="Umur"></td>
        </tr>
        <tr>
        <td><input type="submit" value="cek nama"></td>
        </tr>
        </table>
    </form>
        <?php
            if(isset($_POST['cek nama'])){
                $nama = $_POST['nama'];
                
                if ($nama == ""){
                    echo "Silahkan isi nama anda!";
                }
                else if($nama == Diah){
                    echo "Selamat $nama kamu lulus!";
                }
                else{
                    echo "Kamu tidak lulus!";
                }

            }
        ?>
</body>
</html>