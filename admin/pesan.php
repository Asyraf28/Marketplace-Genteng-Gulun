<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="produk.php">Produk</a></li>
            <li><a href="pesan.php" class="active">Pesan</a></li>
            <li><a class="logout" href="../logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content" style="padding: 20px 30px 20px 30px;">
        <h2>Pesan</h2>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
            <?php
            // Koneksi ke database
            include 'koneksi.php';

            // Query untuk mengambil data produk
            $query = "SELECT * FROM pesan order by id_pesan ASC";
            $result = mysqli_query($conn, $query);

            // Tampilkan data produk
            $no = 1; // Menambah nomor urut
            while ($row = mysqli_fetch_assoc($result)) {
                // Batasi deskripsi hingga 100 karakter
                $pesan = $row['pesan'];
                if (strlen($pesan) > 100) {
                    $pesan = substr($pesan, 0, 100) . "...";
                }

                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $pesan . "</td>";
                echo "<td>" . $row['waktu_pesan'] . "</td>";
                echo "<td>";
                echo "<div class='aksi-buttons'>";
                echo "<button class='edit'><a href='lihat_pesan.php?id=" . $row['id_pesan'] . "'>Lihat</a></button>";
                echo "<button class='delete'><a href='hapus_pesan.php?id=" . $row['id_pesan'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus pesan ini?\");'>Delete</a></button>";
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
