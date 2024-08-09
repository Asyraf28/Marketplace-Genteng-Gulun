<?php
include 'admin/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $pesan = trim($_POST['pesan']);

    // Validasi input
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = "fail";
        header("Location: index.php?status=" . $status);
        exit();
    }

    // Pastikan checkbox agreement dicentang
    if (!isset($_POST['agreement'])) {
        $status = "fail";
        header("Location: index.php?status=" . $status);
        exit();
    }

    // Menggunakan prepared statements untuk menghindari SQL Injection
    $sql = "INSERT INTO pesan (nama, email, pesan) VALUES (?, ?, ?)";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "sss", $nama, $email, $pesan);
        
        if (mysqli_stmt_execute($stmt)) {
            $status = "success";
        } else {
            $status = "fail";
        }
        
        mysqli_stmt_close($stmt);
    } else {
        $status = "fail";
    }

    header("Location: index.php?status=" . $status . "#kontak");
    exit();
}
?>
