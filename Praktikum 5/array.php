<!DOCTYPE html>
<html>
<head>
	<title>Pemrogrmanan PHP dengan Array</title>
</head>
<body>
<?php
//penulisan array 
$nama[] = "Agung Teguh";
$nama[] = "Wibowo";
$nama[] = "Almais";
echo $nama[1] . $nama[2] . $nama[0];
echo "<br>";
//menghitung array
$jum_array = count($nama);
echo "jumlah elemen array = ". $jum_array;
?>
</body>
</html>