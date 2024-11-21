<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengolahan form</title>
</head>
<body>
	<form action=""method="post" name="myform">
		Nama : <input type="text" name="nm" size="25">
		<input type="submit" value="simpan" name="spn">
	</form>
	<?php
	//pemroses data inputan form
		if (isset($_POST['spn'])){
			$nama=$_POST['nm'];
			echo "Nama Anda:<b>$nama</b>";}
	?>
</body>
</html>