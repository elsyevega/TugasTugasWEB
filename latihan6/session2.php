<?php
session_start();
$idsession = session_id();  // Mendapatkan ID session

if (isset($_SESSION['count'])) {
    $count = $_SESSION['count'];  // Ambil nilai dari session
} else {
    $count = 0;  // Jika belum ada, set ke 0
}

session_destroy();  // Hancurkan session
?>
<html>
<head>
    <title>Demo session – destroy</title>
</head>
<body>
    <h1>Demo Session – reset nilai</h1>
    <?php
    echo "<br> ID Session: " . $idsession;
    echo "<br> Anda mengakses server ini sebanyak: " . $count . " kali";
    ?>
</body>
</html>
