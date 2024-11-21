<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Koneksi database php mysql</title>
</head>
<body>

<h2>Akses tabel dosen menggunakan mysqli_fetch_array()</h2>
	<?php
		// Koneksi ke database
		$conn = mysqli_connect('localhost', 'root', '', 'kampus2');
		
		// Cek koneksi
		if (!$conn) {
			die('Koneksi gagal: ' . mysqli_connect_error());
		}
		
		// Query ke tabel dosen
		$hasil = mysqli_query($conn, 'SELECT npp, nmdosen FROM dosen');
		
		// Tampilkan data dari hasil query
		while ($row = mysqli_fetch_array($hasil)) {
			echo 'npp: ' . $row['npp'];
			echo ' dengan nama: ' . $row['nmdosen'];
			echo '<br>';
		}

		// Tutup koneksi
		mysqli_close($conn);
	?>
</body>
</html>

</body>
</html>
