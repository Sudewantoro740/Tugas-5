<!DOCTYPE html>
<html>
<head>
	<title>Tugas</title>
	<style type="text/css">
		body {
			background-color: #34D8C4;
		}
	</style>
</head>
<body>
	<center><H1>Login</H1></center><br>
	<form method="POST" action="tugasact.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
			<td>Nama</td>
			<td> :</td>
			<td><input type="text" name="nama"></input></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td> :</td>
			<td><input type="text" name="alamat"></input></td>
		</tr>
		<tr>
			<td>Tempat Tgl Lahir</td>
			<td> :</td>
			<td><input type="text" name="ttl"></input></td>
		</tr>
		<tr>
			<td>J.Kelamin</td>
			<td> :</td>
			<td>
				<input type="radio" name="gender" value="laki-laki">Laki - Laki</input>
				<input type="radio" name="gender" value="perempuan">Perempuan</input><br>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td> :</td>
			<td><input type="email" name="email"></input></td>
		</tr>
		<tr>
			<td>No HP</td>
			<td> :</td>
			<td><input type="number" name="notelp"></input></td>
		</tr>
		<tr>
			<tr>
				<td>
					<input type="submit" name="login" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>