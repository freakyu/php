

<!-- array yang var sama isi datanya kalau gak sesuai gpp -->
<!-- enggak akan error sama php, tapi nanti user tahu kalau salah -->

<?php
$angka = [["Diah paramitha", "201402004", "Teknologi Informasi", "USU"],
			["Diah paramitha", "201402004", "Teknologi Informasi", "USU"]]
?>


<!DOCTYPE html>
<html>
<head>
	<title>angka</title>
</head>
<body>

<?php foreach ($angka as $a) : ?>	
<ul>
	<li style="color: salmon"> <?php echo $a [0]; ?></li>
	<li style="color: green"> <?php echo $a [1]; ?></li>
	<li style="color: coral"> <?php echo $a [2]; ?></li>
	<li style="color: brown"> <?php echo $a [3]; ?></li>
</ul>
<?php endforeach; ?>




</body>
</html>