<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seleksi switch</title>
</head>
<body>
	<?php
	$i = 0;
	if ($i == 0) {
	echo "i equals 0";
	} elseif ($i == 1) {
	echo "i equals 1";
	} elseif ($i == 2) {
	echo "i equals 2";
	}
	// Ekuivalen, dengan pendekatan switch
	switch ($i) {
	case 0:
	echo "i equals 0";
	break;
	case 1:
	echo "i equals 1";
	break;
	case 2:
	echo "i equals 2";
	break;
	}
	?>

</body>
</html>