<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Page</title>
    <link rel="stylesheet" href="katalog.css">
</head>
<body>
   <!-- Header -->
   <header id="header">
        <div class="row">
            <a href="index.php" class="navbar-brand">
            <img src="images/logo_kuning.png" alt="logo" style="width:auto; height:60px;">
            </a>
            <div class="search-container">
                <form action="katalog.php" method="GET">
                    <input type="text" name="search" placeholder="Search...">
                    <button type="submit" class="search-button">
                        <img src="images/asset/search.jpg" alt="Search">
                    </button>
                </form>
            </div>            
        </div>
    </header>
    <main>
        <section id="katalog" class="section">
            <div class="container" style="padding: 32px 0;">
                <div class="row">
                    <div style="text-align: left;">
                        <h1>KATALOG PRODUK</h1>
                    </div>
                    <div class="produk">
                        <?php
                        // Menghubungkan ke database
                        include 'admin/koneksi.php';

                        // Ambil data pencarian jika ada
                        $search = isset($_GET['search']) ? $_GET['search'] : '';

                        // Query untuk mengambil data produk
                        $sql = "SELECT id, nama_produk, harga, status, gambar FROM produk";
                        if (!empty($search)) {
                            $sql .= " WHERE nama_produk LIKE '%" . $conn->real_escape_string($search) . "%'";
                        }
                        $result = $conn->query($sql);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $nama = $row['nama_produk'];
                                $harga = $row['harga'];
                                $status = $row['status'];
                                $gambar = $row['gambar'];
                                $status_color = ($status == "tersedia") ? "#008000" : "#FFA500";
                                $status_display = $status == "tersedia" ? "Tersedia" : "Pre-order";
                        
                                // Update the path to the image
                                echo "
                                <div class='produk-items'>
                                    <div>
                                        <a href='produk.php?id=" . $row['id'] . "' style='text-decoration: none; color: black;'>
                                            <img src='admin/$gambar' alt='$nama'> 
                                            <hr style='margin: 0%; margin-left: 0%; margin-right: 0%; width: 100%; border: 1px solid #ccc;'>
                                            <h3>$nama</h3>
                                            <p>Rp. $harga</p>
                                            <p class='status' style='color: $status_color;'>$status_display</p>
                                        </a>
                                    </div>
                                </div>";
                            }
                        } else {
                            echo "Tidak ada produk yang ditemukan.";
                        }                    

                        $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'?>
</body>
</html>
