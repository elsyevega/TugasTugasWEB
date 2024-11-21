<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Casting Tipe</title>
</head>
<body>
	<?php
	$str = '123abc';
	// Casting nilai vaiabel $str ke integer
	$bil = (int) $str; // $bil = 123
	echo gettype($str);
	// Output: string
	echo gettype($bil);
	// Output: integer
	?>
</body>
</html>