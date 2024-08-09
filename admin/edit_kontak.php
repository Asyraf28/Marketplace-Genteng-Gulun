<?php
// Sertakan file koneksi database
include 'koneksi.php';

// Periksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $instagram = $_POST['instagram'];

    // Update data di tabel kontak
    $query = "UPDATE kontak SET alamat='$alamat', email='$email', no_telp='$no_telp', instagram='$instagram' WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        $status = "success";
    } else {
        $status = "fail";
    }

    header("Location: index.php?status=" . $status);
    exit();
}
?>
