<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="produk.php">Produk</a></li>
            <li><a href="pesan.php">Pesan</a></li>
            <li><a class="logout" href="../logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content" style="padding: 20px 30px 20px 30px;">
        <h2>Edit Produk</h2>
        <?php
        // Koneksi ke database
        include 'koneksi.php';

        // Periksa apakah ID produk telah diterima
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Query untuk mengambil data produk berdasarkan ID
            $query = "SELECT * FROM produk WHERE id = $id";
            $result = mysqli_query($conn, $query);

            if ($row = mysqli_fetch_assoc($result)) {
                // Tampilkan form dengan data produk
                ?>
                <form action="update_produk.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <label for="main">Nama Produk:</label>
                    <input type="text" id="nama_produk" name="nama_produk" value="<?php echo $row['nama_produk']; ?>" required><br>
                    <label for="main">Deskripsi:</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" required><?php echo $row['deskripsi']; ?></textarea><br>
                    
                    <label for="main">Spesifikasi:</label>
                    <label for="sub">Panjang Body: </label>
                    <input type="text" id="panjang" name="panjang" value="<?php echo $row['panjang']; ?>" required><br>
                    <label for="sub">Lebar Body: :</label>
                    <input type="text" id="lebar" name="lebar" value="<?php echo $row['lebar']; ?>" required><br>
                    <label for="sub">Jarak Reng: </label>
                    <input type="text" id="jarak" name="jarak" value="<?php echo $row['jarak']; ?>" required><br>
                    <label for="sub">Berat: </label>
                    <input type="text" id="berat" name="berat" value="<?php echo $row['berat']; ?>" required><br>
                    <label for="sub">Sudut Kemiringan Min: </label>
                    <input type="text" id="sudutmiring" name="sudutmiring" value="<?php echo $row['sudutmiring']; ?>" required><br>

                    <label for="main">Harga:</label>
                    <input type="number" name="harga" id="harga" value="<?php echo $row['harga']; ?>" required><br>
                    
                    <label for="main">Status:</label>
                    <select name="status" id="status" required>
                        <option value="tersedia" <?php if ($row['status'] == 'tersedia') echo 'selected'; ?>>Tersedia</option>
                        <option value="pre-order" <?php if ($row['status'] == 'pre-order') echo 'selected'; ?>>Pre-order</option>
                    </select><br>
                    
                    <label for="main">Stok:</label>
                    <input type="number" name="stok" id="stok" value="<?php echo $row['stok']; ?>" required><br>
                    
                    <label for="main">Kategori:</label>
                    <input type="text" name="kategori" id="kategori" value="<?php echo $row['kategori']; ?>" required><br>

                    <label for="main">Pilih Gambar 1:</label>
                    <input type="file" name="gambar" id="gambar"><br>
                    <img src="<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama_produk']; ?>" style="max-width: 100px;"><br>

                    <label for="main">Pilih Gambar 2:</label>
                    <input type="file" name="gambar2" id="gambar2"><br>
                    <img src="<?php echo $row['gambar2']; ?>" alt="<?php echo $row['nama_produk']; ?>" style="max-width: 100px;"><br>

                    <label for="main">Pilih Gambar 3:</label>
                    <input type="file" name="gambar3" id="gambar3"><br>
                    <img src="<?php echo $row['gambar3']; ?>" alt="<?php echo $row['nama_produk']; ?>" style="max-width: 100px;"><br>

                    <input type="submit" name="update">
                </form>
                <?php
            } else {
                echo "Produk tidak ditemukan.";
            }
        } else {
            echo "ID produk tidak disediakan.";
        }
        ?>
    </div>
</body>
</html>
