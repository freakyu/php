<?php
require 'fungsi.php';

$id = $_GET["id"];
if (hapus($id) > 0){
	echo "<script>
		alert('Data kamu sudah di hapus ya!');
		document.location.href= 'daftarsukses.php';
					
	</script>";
} else {
	echo "<script>
		alert('Aduh gagal nih');
		document.location.href= 'daftarsukses.php';
					
	</script>";
}
?>