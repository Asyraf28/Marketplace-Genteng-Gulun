<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $jarak = $_POST['jarak'];
    $berat = $_POST['berat'];
    $sudutmiring = $_POST['sudutmiring'];
    
    $target_dir = "gambar/";
    
    // Handle first image
    $target_file1 = $target_dir . basename($_FILES["gambar"]["name"]);
    $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
    
    // Handle second image
    $target_file2 = $target_dir . basename($_FILES["gambar2"]["name"]);
    $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
    
    // Handle third image
    $target_file3 = $target_dir . basename($_FILES["gambar3"]["name"]);
    $imageFileType3 = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));
    
    $uploadOk = 1;

    // Check if image files are actual images or fake images
    $check1 = getimagesize($_FILES["gambar"]["tmp_name"]);
    $check2 = getimagesize($_FILES["gambar2"]["tmp_name"]);
    $check3 = getimagesize($_FILES["gambar3"]["tmp_name"]);
    
    if ($check1 !== false && $check2 !== false && $check3 !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }

    // Check if files already exist
    if (file_exists($target_file1) || file_exists($target_file2) || file_exists($target_file3)) {
        $uploadOk = 0;
    }

    // Check file sizes
    if ($_FILES["gambar"]["size"] > 500000 || $_FILES["gambar2"]["size"] > 500000 || $_FILES["gambar3"]["size"] > 500000) {
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" && $imageFileType1 != "gif") ||
        ($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" && $imageFileType2 != "gif") ||
        ($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg" && $imageFileType3 != "gif")) {
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $status = "fail";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file1) &&
            move_uploaded_file($_FILES["gambar2"]["tmp_name"], $target_file2) &&
            move_uploaded_file($_FILES["gambar3"]["tmp_name"], $target_file3)) {
            
            $sql = "INSERT INTO produk (nama_produk, deskripsi, harga, status, stok, kategori, panjang, lebar, jarak, berat, sudutmiring, gambar, gambar2, gambar3) 
                    VALUES ('$nama', '$deskripsi', '$harga', '$status', '$stok', '$kategori', '$panjang', '$lebar', '$jarak', '$berat', '$sudutmiring',  '$target_file1', '$target_file2', '$target_file3')";
            
            if (mysqli_query($conn, $sql)) {
                $status = "success";
            } else {
                $status = "fail";
            }
        } else {
            $status = "fail";
        }
    }
    header("Location: tambah_produk.php?status=" . $status);
    exit();
}
?>
