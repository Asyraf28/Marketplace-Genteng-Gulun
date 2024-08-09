<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
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
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="produk.php">Produk</a></li>
            <li><a href="pesan.php">Pesan</a></li>
            <li><a class="logout" href="../logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content" style="padding: 20px 30px 20px 30px;">
        <h2>Upload Produk Baru</h2>
        <?php if (isset($_GET['status'])): ?>
            <?php if ($_GET['status'] == 'success'): ?>
                <div class="alert success">Produk berhasil ditambahkan.</div>
            <?php else: ?>
                <div class="alert fail">Terjadi kesalahan saat menambahkan produk.</div>
            <?php endif; ?>
        <?php endif; ?>
        <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
            <label for="main">Nama Produk:</label>
            <input type="text" name="nama" id="nama" required><br>
            <label for="main">Deskripsi Produk:</label>
            <textarea name="deskripsi" id="deskripsi"></textarea><br>
            <label for="main">Spesifikasi:</label>
            
            <label for="sub">Panjang Body: </label>
            <input type="text" name="panjang" id="panjang"><br>
            <label for="sub">Lebar Body: :</label>
            <input type="text" name="lebar" id="lebar"><br>
            <label for="sub">Jarak Reng: </label>
            <input type="text" name="jarak" id="jarak"><br>
            <label for="sub">Berat: </label>
            <input type="text" name="berat" id="berat"><br>
            <label for="sub">Sudut Kemiringan Min: </label>
            <input type="text" name="sudutmiring" id="sudutmiring"><br>

            <label for="main">Harga:</label>
            <input type="number" name="harga" id="harga" required><br>
            <label for="main">Status:</label>
            <select name="status" id="status" required>
                <option value="tersedia">Tersedia</option>
                <option value="pre-order">Pre-order</option>
            </select><br>
            <label for="main">Stok:</label>
            <input type="number" name="stok" id="stok" required><br>
            <label for="main">Kategori:</label>
            <input type="text" name="kategori" id="kategori" required><br>
            <label for="main">Pilih Gambar 1:</label>
            <input type="file" name="gambar" id="gambar" required><br>
            <label for="main">Pilih Gambar 2:</label>
            <input type="file" name="gambar2" id="gambar2" required><br>
            <label for="main">Pilih Gambar 3:</label>
            <input type="file" name="gambar3" id="gambar3" required><br><br>
            <input type="submit" value="Upload Produk">
        </form>
    </div>
</body>
</html>
