<?php

// variabel scope / lingkup variabel
$x = "diah paramitha"; //variabel lokal untuk halaman get.php

function tampil()
{
	global $x; //variabel lokal untuk fungsi tampil()
	echo $x;
}
tampil(); //mencetak hasil fungsi yaitu diah paramitha (pakai global)

echo "<br/>";

echo $x; //mencetak variabel yang untuk halaman get.php
?>