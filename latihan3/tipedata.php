<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menggunakan Tipe Data</title>
</head>
<body>
<?php
	//mendefinisikan variabel dengan berbagai macam tipedata
	$nim = "2302019";
	$nama = "Elsye Vegadinata";
	$umur = "19";
	$nilai = "92.250";
	$status = "TRUE";

	//menampilkan data
	echo "NIM : " .$nim. "<br>";
	echo "Nama : " .$nama. "<br>";
	echo "Umur : " .$umur. "<br>";
	printf("Nilai : %.3f<br>",$nilai);
	if ($status)
		echo "Status : Aktif";
	else
		echo "Status : Tidak Aktif";
?>

</body>
</html>