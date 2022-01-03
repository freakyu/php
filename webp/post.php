<?php 
//cek apakah tombol submit sudah ditekan
if (isset($_POST ["submit"]))
{
	//cek username dan passsword
	if ($_POST ["username"] == "ayam" && $_POST ["password"] == "123")
	{
		//jika benar, maka akan ke halaman login.php
		header("Location: login.php");
		exit;
	}
	else 
	{
		// jika salah
		$error = true;
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>post</title>
</head>
<body>
<h4>post pake form</h4>

<?php if (isset($error)) :?>
	<p> salah! </p> 
<?php endif; ?>

<form action="login.php" method="post">
	<table>
		<tr>
			<td>
		<label for="username">username </label>
		<input type="text" name="username" id="username" >
			</td>
		</tr>

		<tr>
			<td>
		<label for="password">password </label>
		<input type="password" name="password" id="password" >
			</td>
		</tr>
		<tr>
			<td>
		<button type="submit">submit</button>
			</td>
		</tr>
    </table>
</form>
</body>
</html>