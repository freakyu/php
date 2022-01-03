<!DOCTYPE html>
<html>
<head>
	<title>MAHASISWA</title>
</head>
<body>
<h3> detail mahasiswa</h3>

<table border="1">
<tr>
	<th>Nama</th>
	<th>NIM</th>
	<th>Jurusan</th>
	<th>Universitas</th>
</tr>
<tr>
	<td><?php echo $_GET ["nama"]; ?></td>
	<td><?php echo $_GET ["Nim"]; ?></td>
	<td><?php echo $_GET ["Jurusan"]; ?></td>
	<td><?php echo $_GET ["Universitas"]; ?></td>
</tr>
</table>
</body>
</html>