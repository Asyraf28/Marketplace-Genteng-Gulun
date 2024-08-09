<?php
// Koneksi ke database
include 'koneksi.php';

// Periksa apakah ID produk telah diterima
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Dapatkan nama file gambar dari database
    $result = mysqli_query($conn, "SELECT gambar, gambar2, gambar3 FROM produk WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // Hapus gambar dari folder
    if ($row) {
        if (!empty($row['gambar']) && file_exists($row['gambar'])) {
            unlink($row['gambar']);
        }
        if (!empty($row['gambar2']) && file_exists($row['gambar2'])) {
            unlink($row['gambar2']);
        }
        if (!empty($row['gambar3']) && file_exists($row['gambar3'])) {
            unlink($row['gambar3']);
        }
    }

    // Query untuk menghapus data produk berdasarkan ID
    $query = "DELETE FROM produk WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: produk.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
} else {
    echo "ID produk tidak disediakan.";
}
?>
