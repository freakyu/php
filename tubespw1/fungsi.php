<?php 

	//Koneksi database
	$koneksi = mysqli_connect("localhost", "root", "", "tubeskelompok1pw");



	function query($query) {
		global $koneksi;
		$result = mysqli_query($koneksi, $query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}



	function tambah($data) {
		global $koneksi;

		$username = htmlspecialchars($data["username"]);
		$password = md5($data["password"]);
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);


	$query = "INSERT INTO data1
				VALUES 
				('', '$username', '$password', '$nama', '$email')
			";
			mysqli_query($koneksi, $query);

			return mysqli_affected_rows($koneksi);
	}


	function hapus($id){
		global $koneksi;
		mysqli_query($koneksi, "DELETE FROM data1 WHERE id = $id");

		return mysqli_affected_rows($koneksi);
	}

	function ubah($data){
		global $koneksi;
		$id = $data["id"];
		$username = htmlspecialchars($data["username"]);
		$password = md5($data["password"]);
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);

	$query = "UPDATE data1 SET 
				username = '$username', 
				password = '$password',
				nama = '$nama',
				email = '$email' 
				WHERE id = $id
			";
			mysqli_query($koneksi, $query);

			return mysqli_affected_rows($koneksi);
	}

	function cari($keyword){
		$query = "SELECT * FROM data1 
					WHERE
				username LIKE '%$keyword%' OR
				password LIKE '%$keyword%' OR
				nama LIKE '%$keyword%' OR
				email LIKE '%$keyword%' 
					";
		return query($query);
	}
	


?>

	