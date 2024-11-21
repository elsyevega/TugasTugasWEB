<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seleksi if-elseif</title>
</head>
<body>
	<?php
	$a = 10;
	$b = 5;
	if ($a > $b) {
	echo 'a lebih besar dari b';
	} elseif ($a == $b) {
	echo 'a sama dengan b';
	} else {
	echo 'a kurang dari b';
	}
	?>
</body>
</html>