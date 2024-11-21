<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Mahasiswa Baru</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Formulir Pendaftaran Mahasiswa Baru</h1>
        <?php

        // Cek apakah form telah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data dari form
            $nama = htmlspecialchars($_POST['nama']);
            $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
            $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
            $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
            $no_hp = htmlspecialchars($_POST['no_hp']);
            $email = htmlspecialchars($_POST['email']);
            $nama_ortu = htmlspecialchars($_POST['nama_ortu']);
            $no_hp_ortu = htmlspecialchars($_POST['no_hp_ortu']);
            $alamat_ortu = htmlspecialchars($_POST['alamat_ortu']);
            $sekolah_asal = htmlspecialchars($_POST['sekolah_asal']);
            $tahun_lulus = htmlspecialchars($_POST['tahun_lulus']);

            // Tampilkan data yang telah diinput
            echo "<h2>Terima Kasih, $nama!</h2>";
            echo "<p>Data berhasil diinput:</p>";
            echo "<ul>
                    <li>Nama: $nama</li>
                    <li>Tempat Lahir: $tempat_lahir</li>
                    <li>Tanggal Lahir: $tanggal_lahir</li>
                    <li>Jenis Kelamin: $jenis_kelamin</li>
                    <li>Nama Orang Tua: $nama_ortu</li>
                    <li>No. Telepon: $no_hp_ortu</li>
                    <li>Alamat: $alamat_ortu</li>
                    <li>Sekolah Asal: $sekolah_asal</li>
                    <li>Tahun Lulus: $tahun_lulus</li>
                  </ul>";
                
include 'db.php'; // Sertakan file koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $nama_ortu = htmlspecialchars($_POST['nama_ortu']);
    $no_hp_ortu = htmlspecialchars($_POST['no_hp_ortu']);
    $alamat_ortu = htmlspecialchars($_POST['alamat_ortu']);
    $sekolah_asal = htmlspecialchars($_POST['sekolah_asal']);
     $tahun_lulus = htmlspecialchars($_POST['tahun_lulus']);


    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO tbl_reg (nama, tanggal_lahir, jenis_kelamin, nama_ortu, no_hp_ortu, alamat_ortu, sekolah_asal, tahun_lulus) 
            VALUES ('$nama', '$tanggal_lahir', '$jenis_kelamin', '$nama_ortu', '$no_hp_ortu', '$alamat_ortu', '$sekolah_asal', '$tahun_lulus')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Terima Kasih, $nama!</h2>";
        echo "<p>Data berhasil disimpan ke database.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close(); // Tutup koneksi
}


        } else {
            // Jika belum disubmit, tampilkan form
        ?>


            <form method="POST" id="registrationForm">
                <!-- Data Diri -->
                <fieldset>
                    <legend>Data Diri</legend>
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" name="nama" required>
                    
                    <label for="tempat_lahir'">Tempat Lahir</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir anda...">
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

                    
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                
                    <label for="no_hp">No. Telepon:</label>
                    <input type="tel" id="no_hp" name="no_hp" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </fieldset>    
                    

                <!-- Data Orang Tua -->
                <fieldset>
                    <legend>Data Orang Tua</legend>
                    <label for="nama_ortu">Nama Orang Tua:</label>
                    <input type="text" id="nama_ortu" name="nama_ortu" required>
                    
                    <label for="no_hp_ortu">No. Telepon:</label>
                    <input type="tel" id="no_hp_ortu" name="no_hp_ortu" required>
                    
                    <label for="alamat_ortu">Alamat:</label>
                    <textarea id="alamat_ortu" name="alamat_ortu" required></textarea>
                </fieldset>

                <!-- Data Asal Sekolah -->
                <fieldset>
                    <legend>Data Asal Sekolah</legend>
                    <label for="sekolah_asal">Nama Sekolah:</label>
                    <input type="text" id="sekolah_asal" name="sekolah_asal" required>
                    
                    <label for="tahun_lulus">Tahun Lulus:</label>
                    <input type="number" id="tahun_lulus" name="tahun_lulus" required>
                </fieldset>

                <button type="submit">Daftar</button>
            </form>
        <?php

        }
        ?>
    </div>
    <script src="script.js" defer></script>
</body>
</html>