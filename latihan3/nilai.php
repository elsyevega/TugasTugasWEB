<!-- Simpan file ini sebagai nilai.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Input Nilai</title>
</head>
<body>

    <form method="POST" action="">
        Masukkan Nilai: <input type="number" name="nilai" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari inputan form
        $nilai = $_POST["nilai"];

        // Menentukan nilai huruf berdasarkan nilai angka
        if ($nilai >= 90) {
            echo "Nilai Anda: A";
        } elseif ($nilai >= 80) {
            echo "Nilai Anda: B";
        } elseif ($nilai >= 70) {
            echo "Nilai Anda: C";
        } elseif ($nilai >= 60) {
            echo "Nilai Anda: D";
        } else {
            echo "Nilai Anda: E";
        }
    }
    ?>

</body>
</html>
