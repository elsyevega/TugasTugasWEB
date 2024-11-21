<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Gambar</title>
</head>
<body>
    <form method="post" action="script_proses.php" enctype="multipart/form-data">
        <table border="1" cellpadding="5" cellspacing="0" style="width: 50%; margin: auto; text-align: left;">
            <tr>
                <th colspan="2" style="text-align: center;">SIMPAN & TAMPIL GAMBAR</th>
            </tr>
            <tr>
                <td><label for="nama">Masukkan Nama:</label></td>
                <td><input type="text" name="nama" id="nama" placeholder="Masukkan nama" required></td>
            </tr>
            <tr>
                <td><label for="foto">Pilih Foto:</label></td>
                <td><input type="file" name="foto" id="foto" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit" name="kirim" id="kirim">SIMPAN</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
s