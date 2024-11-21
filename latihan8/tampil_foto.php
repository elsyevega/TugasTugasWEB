<?php
include('koneksi.php');

// Menggunakan mysqli untuk koneksi modern
$perintah = "SELECT * FROM namasiswa ORDER BY id DESC";
$query = mysqli_query($koneksi, $perintah);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tampil Foto</title>
</head>
<body>
    <table width="500" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th colspan="4">MENAMPILKAN FOTO / <a href="input_foto.php">TAMBAH DATA</a></th>
        </tr>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>FOTO</th>
            <th>DELETE</th>
        </tr>
        <?php
        $no = 1; // Penomoran
        while ($data = mysqli_fetch_assoc($query)) { // Menggunakan mysqli_fetch_assoc untuk koneksi modern
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo htmlspecialchars($data['nama']); ?></td>
            <td align="center">
                <img src="gambar/<?php echo htmlspecialchars($data['gambar']); ?>" width="160" height="150" alt="gambar">
            </td>
            <td align="center">
                <a href="delete.php?del=<?php echo htmlspecialchars($data['id']); ?>">DELETE</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
