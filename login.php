<?php
// Mulai session
session_start();

// Cek apakah form login dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username dan password benar (Anda dapat menggantinya dengan sistem autentikasi yang sesuai)
    if ($username === "admin" && $password === "admin123") {
        // Jika benar, set session sebagai tanda login berhasil
        $_SESSION['admin_logged_in'] = true;
        // Redirect ke halaman admin setelah login berhasil
        header("Location: admin/index.php");
        exit(); // Pastikan kode selanjutnya tidak dijalankan setelah redirect
    } else {
        // Jika username atau password salah, tampilkan pesan error
        $error_message = "Username or password is incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <!-- Tampilkan pesan error jika ada -->
        <?php if (isset($error_message)): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
