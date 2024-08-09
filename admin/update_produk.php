<?php
// Koneksi ke database
include 'koneksi.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
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

    // Query untuk mendapatkan gambar yang ada saat ini
    $query = "SELECT gambar, gambar2, gambar3 FROM produk WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $update_images = [];
    $target_dir = "gambar/";

    // Handle first image
    if (!empty($_FILES['gambar']['name'])) {
        $target_file1 = $target_dir . basename($_FILES["gambar"]["name"]);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file1);
        $update_images[] = "gambar='$target_file1'";

        // Hapus gambar lama jika ada
        if (!empty($row['gambar']) && file_exists($row['gambar'])) {
            unlink($row['gambar']);
        }
    }

    // Handle second image
    if (!empty($_FILES['gambar2']['name'])) {
        $target_file2 = $target_dir . basename($_FILES["gambar2"]["name"]);
        move_uploaded_file($_FILES["gambar2"]["tmp_name"], $target_file2);
        $update_images[] = "gambar2='$target_file2'";

        // Hapus gambar lama jika ada
        if (!empty($row['gambar2']) && file_exists($row['gambar2'])) {
            unlink($row['gambar2']);
        }
    }

    // Handle third image
    if (!empty($_FILES['gambar3']['name'])) {
        $target_file3 = $target_dir . basename($_FILES["gambar3"]["name"]);
        move_uploaded_file($_FILES["gambar3"]["tmp_name"], $target_file3);
        $update_images[] = "gambar3='$target_file3'";

        // Hapus gambar lama jika ada
        if (!empty($row['gambar3']) && file_exists($row['gambar3'])) {
            unlink($row['gambar3']);
        }
    }

    // Construct the update query
    $query = "UPDATE produk SET 
                nama_produk='$nama_produk', 
                deskripsi='$deskripsi', 
                harga='$harga', 
                status='$status', 
                stok='$stok', 
                kategori='$kategori',
                panjang='$panjang',
                lebar='$lebar',
                jarak='$jarak',
                berat='$berat',
                sudutmiring='$sudutmiring'";
    
    if (!empty($update_images)) {
        $query .= ", " . implode(", ", $update_images);
    }

    $query .= " WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        header("Location: produk.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
