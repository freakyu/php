<!-- variabel superglobals ada 7 --> 
<!-- $_GET -->
<!-- $_POST -->
<!-- $_REQUEST -->
<!-- $_SESSION -->
<!-- $_COOKIE -->
<!-- $_SERVER -->
<!-- $_ENV -->

<?php
//SUPERGLOBALS
//superglobals semuanya pakai array associative
//variabel global milik php

//$_GET
//$_GET ["nama"] = "Diah Paramitha";
//echo $_GET ["nama"]; //jangan lupa key nya.


$mahasiswa = [
	[
	"nama" => "Diah Paramitha",
	"Nim" => "201402004",
	"Jurusan" => "Teknologi Informasi",
	"Universitas" => "USU" 
    ],
    [
	"nama" => "Dian Puspita Sari",
	"Nim" => "201402066",
	"Jurusan" => "Ekonomi Pembangunan",
	"Universitas" => "UMSU" 
	]
];
?>

<!DOCTYPE html>
<html>
<head>
	<title>get</title>
</head>
<body>
 <h4>data mahasiswa</h4>

 <ul>
 	<?php foreach ($mahasiswa as $mhs) : ?>
 		<li>
 			<a href="get.php?nama=<?php echo $mhs ["nama"]; ?>&Nim=<?php echo $mhs ["Nim"]; ?>&
 			Jurusan=<?php echo $mhs ["Jurusan"]; ?>&Universitas=<?php echo $mhs ["Universitas"]; ?>">
 			<?php echo $mhs ["nama"]; ?></a>
 			
 		</li>
 	<?php endforeach; ?>
 </ul>
</body>
</html>

<!-- <!DOCTYPE html> -->
<!-- <html> -->
<!-- <head> -->
	<!-- <title>angka</title> -->
<!-- </head> -->
<!-- <body> -->

<!-- <?php foreach ($mahasiswa as $mhs) : ?>	 -->
<!-- <ul> -->
	<!-- <li style="color: purple;">Nama : <?php echo $mhs ["nama"]; ?></li> -->
	<!-- <li style="color: purple;">Nim : <?php echo $mhs ["Nim"]; ?></li> -->
	<!-- <li style="color: purple;">Jurusan : <?php echo $mhs ["Jurusan"]; ?></li> -->
	<!-- <li style="color: purple;">Universitas : <?php echo $mhs ["Universitas"]; ?></li> -->
	<!-- <br/><br/> -->
<!-- </ul> -->
<!-- <?php endforeach; ?> -->
<!-- </body> -->
<!-- </html>

