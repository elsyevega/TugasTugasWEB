<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menggunakan Variabel Dinamis</title>
</head>
<body>
	<form action="latihan2.php" method="POST">
		Masukkan nama anda = <input type="text" name="nama"><br>
		<input type ="submit" name="kirim" value="simpan">
	</form>
	<?php
		if(isset($_POST ['kirim'])){
			echo "Nama Anda : $_POST[nama]";
		}
	?>

</body>
</html>