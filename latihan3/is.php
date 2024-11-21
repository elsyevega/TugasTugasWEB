<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cek Tipe</title>
</head>
<body>
	<?php
	$bil = 3;
	var_dump(is_int($bil));
	// Output: bool(true)
	$var = "";
	var_dump(is_string($var));
	// Output: bool(true)
	?>
</body>
</html>