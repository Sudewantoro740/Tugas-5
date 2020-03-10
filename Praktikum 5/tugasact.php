<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
			background-color: #34D8C4;
		}
	</style></head>
</html>
<?php 
if (empty($_POST['nama'])) {
	header('Location:linkkosong.php');
}
elseif (empty($_POST['alamat'])) {
	header('Location:linkkosong.php');
}
elseif (empty($_POST['ttl'])) {
	header('Location:linkkosong.php');
}
elseif (empty($_POST['gender'])) {
	header('Location:linkkosong.php');
}
elseif (empty($_POST['email'])) {
	header('Location:linkkosong.php');
}
elseif (empty($_POST['notelp'])) {
	header('Location:linkkosong.php');
}
else {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$ttl = $_POST['ttl'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$notelp = $_POST['notelp'];

	echo "<center>Nama = ".$nama."</center><br>";
	echo "<center>Alamat = ".$alamat."</center><br>";
	echo "<center>Tempat Tgl Lahir = ".$ttl."</center><br>";
	echo "<center>J. Kelamin = ".$gender."</center><br>";
	echo "<center>Email = ".$email."</center><br>";
	echo "<center>No. HP = ".$notelp."</center><br>";
	date_default_timezone_set("Asia/jakarta");
	echo "<center>Day : ".date("l")."</center><br>";
	echo "<center>Date : ".date("d-m-yy")."</center><br>";
	echo "<center>Time : ".date("g:i:s a")."</center><br>";
}
?>