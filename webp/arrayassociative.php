<?php
//				["Diah paramitha", "201402004", "Teknologi Informasi", "USU"]]
//?>


<!-- array associative untuk beda nama var sama isi varnya. jadi harus sesuai nama sama isi. -->
<?php
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
	<title>angka</title>
</head>
<body>

<?php foreach ($mahasiswa as $mhs) : ?>	
<ul>
	<li style="color: purple; font-size: 70px">Nama : <?php echo $mhs ["nama"]; ?></li>
	<li style="color: purple; font-size: 70px">Nim : <?php echo $mhs ["Nim"]; ?></li>
	<li style="color: purple; font-size: 70px">Jurusan : <?php echo $mhs ["Jurusan"]; ?></li>
	<li style="color: purple; font-size: 70px">Universitas : <?php echo $mhs ["Universitas"]; ?></li>
	<br/><br/>
</ul>
<?php endforeach; ?>




</body>
</html>
