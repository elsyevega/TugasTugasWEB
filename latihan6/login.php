<?php
session_start();  // Memulai session
$conn = new mysqli("localhost", "root", "", "coba");  // Koneksi ke database

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses Pendaftaran
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password
    $gender = $_POST['gender'];

    $query = "INSERT INTO login (username, password, gender) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $username, $password, $gender);

    if ($stmt->execute()) {
        echo "<p>User berhasil terdaftar.</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }
}

// Proses Login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];  // Simpan username di session
            $_SESSION['gender'] = $user['gender'];      // Simpan gender di session
            header("Location: login.php");  // Arahkan ke halaman utama
            exit();
        } else {
            echo "<p>Password salah.</p>";
        }
    } else {
        echo "<p>User tidak ditemukan.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login dan Pendaftaran</title>
</head>
<body>
    <?php if (isset($_SESSION['username'])): ?>
        <p>Login anda: <?= htmlspecialchars($_SESSION['username']) ?></p>
        <p>Gender: <?= htmlspecialchars($_SESSION['gender']) ?></p>
        <p>Ini di halaman utama</p>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <h2>Proses Login</h2>
        <form method="POST" action="login.php">

            
            <label>Username:</label>
            <input type="text" name="username" required><br>
            <br>
            <label>Password:</label>
            <input type="password" name="password" required><br>
            <br>
            <button type="submit" name="login">Login</button>
        
        </form>

        <br>
        <hr>
        <p>=================================================================================================================================================================================</p>

        <h2>Pendaftaran User</h2>
        <form method="POST" action="login.php">
            <label>Username:</label>
            <input type="text" name="username" required><br>
            <br>
            <label>Password:</label>
            <input type="password" name="password" required><br>
            <br>
            <label>Re-type Password:</label>
            <input type="password" name="repassword" required><br>
            <br>
            <label>Gender:</label>
            <input type="radio" name="gender" value="Laki-laki" required> Laki-laki
            <input type="radio" name="gender" value="Perempuan" required> Perempuan<br>
            <br>
            <button type="submit" name="signup">Daftar</button>
        </form>
    <?php endif; ?>
</body>
</html>
