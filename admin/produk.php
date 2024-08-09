<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="produk.php" class="active">Produk</a></li>
            <li><a href="pesan.php">Pesan</a></li>
            <li><a class="logout" href="../logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content" style="padding: 20px 30px 20px 30px;">
        <h2>Produk</h2>
        <button class="tambah"><a href="tambah_produk.php">Tambah</a></button>
        <table>
                <th>No</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            <?php
            // Koneksi ke database
            include 'koneksi.php';

            // Query untuk mengambil data produk
            $query = "SELECT * FROM produk";
            $result = mysqli_query($conn, $query);

            // Tampilkan data produk
            $no = 1; // Menambah nomor urut
            while ($row = mysqli_fetch_assoc($result)) {
                $status_color = ($row['status'] == "tersedia") ? "#008000" : "#FFA500";
                // Batasi deskripsi hingga 100 karakter
                $deskripsi = $row['deskripsi']; 
                if (strlen($deskripsi) > 100) {
                    $deskripsi = substr($deskripsi, 0, 100) . "...";
                }

                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['nama_produk'] . "</td>";
                echo "<td style='color: $status_color;'>" . $row['status'] . "</td>";
                echo "<td>" . $row['stok'] . "</td>";
                echo "<td>" . $deskripsi . "</td>";
                echo "<td><img src='" . $row['gambar'] . "' alt='" . $row['nama_produk'] . "'></td>";
                echo "<td>";
                echo "<div class='aksi-buttons'>";
                echo "<button class='edit'><a href='edit_produk.php?id=" . $row['id'] . "'>Edit</a></button>";
                echo "<button class='delete'><a href='hapus_produk.php?id=" . $row['id'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus produk ini?\");'>Delete</a></button>";
                echo "</div>";
                echo "</td>";
                echo "</tr>";
                $no++;
            }
            ?>
        </table>
    </div>
</body>
</html>
