<?php
// Mulai session
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['admin_logged_in'])) {
    // Jika tidak, redirect ke halaman login
    header("Location: ../login.php");
    exit(); // Pastikan kode selanjutnya tidak dijalankan setelah redirect
}

include 'koneksi.php';

// Ambil data kontak
$query = "SELECT * FROM kontak where id='1'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $alamat = $row['alamat'];
    $email = $row['email'];
    $no_telp = $row['no_telp'];
    $instagram = $row['instagram'];
} else {
    echo "Kontak tidak ditemukan.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        .alert {
            max-width: 500px;
            margin: 20px auto;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

        .alert.success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert.fail {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="index.php" class="active">Dashboard</a></li>
            <li><a href="produk.php">Produk</a></li>
            <li><a href="pesan.php">Pesan</a></li>
            <li><a class="logout" href="../logout.php">Logout</a></li>
        </ul>
    </div>
    <div style="padding-left:10px;">
    <div class="content">
        <div>
        <h2>Dashboard</h2>
        <p>Selamat datang di Halaman Admin <b>Website Genteng Gulun</b>.<br>
           Kamu bisa mengedit daftar genteng, profil, dan pesan dari pengguna. <br>
           Manfaatkan halaman admin dengan bijak Genteng Gulun <br>
        </p>

        </div>
        <div >
            <h2>Informasi Kontak</h2>
            <form action="edit_kontak.php" method="POST">
            <?php if (isset($_GET['status'])): ?>
                <?php if ($_GET['status'] == 'success'): ?>
                    <div class="alert success">Kontak Berhasil Diubah.</div>
                <?php else: ?>
                    <div class="alert fail">Terjadi kesalahan saat mengubah kontak.</div>
                <?php endif; ?>
            <?php endif; ?>
            <input type="hidden" name="id" value="1">
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" value="<?php echo $alamat; ?>" style="color: gray;" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" style="color: gray;" required><br>
            <label for="no_telp">No Telp:</label>
            <input type="text" id="no_telp" name="no_telp" value="<?php echo $no_telp; ?>" style="color: gray;" required><br>
            <label for="instagram">Instagram:</label>
            <input type="text" id="instagram" name="instagram" value="<?php echo $instagram; ?>" style="color: gray;" required><br><br>
            <input type="submit" value="Simpan">
        </form>
        </div>
    </div>
                </div>
</body>
</html>
