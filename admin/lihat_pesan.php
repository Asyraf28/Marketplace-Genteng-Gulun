<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesan</title>
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
        <h2>Detail Pesan</h2>
        <?php
        // Koneksi ke database
        include 'koneksi.php';

        // Ambil ID pesan dari URL
        $id_pesan = $_GET['id'];

        // Query untuk mengambil detail pesan
        $query = "SELECT * FROM pesan WHERE id_pesan = $id_pesan";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
        
            echo "<p><strong>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ensp;: </strong>" . $row['nama'] . "</p>";
            echo "<p><strong>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ensp;: </strong>" . $row['email'] . "</p>";
            echo "<p><strong>Pesan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong>" . $row['pesan'] . "</p>";
            echo "<p><strong>Waktu Pesan &nbsp;&nbsp;: </strong>" . $row['waktu_pesan'] . "</p>";
        } else {
            echo "Pesan tidak ditemukan.";
        }        
        ?>
        <a href="pesan.php" style="margin-left:-5px;">
            <button> Kembali </button></a>
    </div>
</body>
</html>
