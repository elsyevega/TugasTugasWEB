<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menggunakan Konstanta</title>
</head>
<body>
	<?php
		//mendefinisikan konstanta
		define("nilaimax", "100");
		define("pi", "3.14");

		//mencetak nilai konstanta
		print "Nilai Maksimal : ".nilaimax;
		//menggunakan konstanta dalam perhitungan
		$jarijari = 5;
		$luaslingkaran = pi * $jarijari * $jarijari;
		echo "<br>Luas Lingkaran = ".$luaslingkaran;
	?> 
</body>
</html>