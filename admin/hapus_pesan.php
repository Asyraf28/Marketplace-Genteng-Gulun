<?php
// Koneksi ke database
include 'koneksi.php';

// Ambil ID pesan dari URL
$id_pesan = $_GET['id'];

// Query untuk menghapus pesan
$query = "DELETE FROM pesan WHERE id_pesan = $id_pesan";
$result = mysqli_query($conn, $query);

if ($result) {
    // Redirect kembali ke halaman pesan.php dengan status success
    header("Location: pesan.php?status=success");
    exit();
} else {
    // Redirect kembali ke halaman pesan.php dengan status fail
    header("Location: pesan.php?status=fail");
    exit();
}
?>
