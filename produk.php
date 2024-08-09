<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman produk</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="produk.css">
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
            <!-- <nav>
                <a href="#favorite" class="custom-hyperlink">
                <img src="favorite1.png" style="height: 43px;"></a>
                <a href="#profile" class="custom-hyperlink">
                <img src="images/asset/profile1.png" style="height: 45px; margin-left: 10px;"></a>
            </nav> -->
        </div>
    </header>

    <!-- Produk -->
    <div class="container">
        <div class="access">    
            <a href="index.php" style="text-decoration: none; color:black;">
                <p style="cursor: pointer;">Beranda</p>
            </a>
            <p>/</p>
            <a href="katalog.php" style="text-decoration: none; color:black;">
                <p style="cursor: pointer;">Katalog</p>
            </a>
            <p>/</p>
            <p style="cursor: pointer;">Produk</p>
        </div>

        <?php
    include 'admin/koneksi.php';

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);

        $query = "SELECT * FROM produk WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            ?>
        
        <div class="grid">
            <div style="padding-left: 150px;">
                <div class="product">
                    <img id="mainProductImage" src="<?php echo 'admin/' . $row['gambar']; ?>" alt="<?php echo $row['nama_produk']; ?>">
                </div>
                <div class="detail">
                    <a style="cursor: pointer;"><img src="<?php echo 'admin/' . $row['gambar']; ?>" alt="<?php echo $row['nama_produk']; ?>"></a>
                    <a style="cursor: pointer;"><img src="<?php echo 'admin/' . $row['gambar2']; ?>" alt="<?php echo $row['nama_produk']; ?>"></a>
                    <a style="cursor: pointer;"><img src="<?php echo 'admin/' . $row['gambar3']; ?>" alt="<?php echo $row['nama_produk']; ?>"></a>
                </div>
            </div>

            <div class="description">
                <p style="margin-top: 0; margin-bottom: 3px; font-size: 18pt;"><?php echo $row['nama_produk']; ?></p>
                <p style="font-size: 14pt;">Rp. <?php echo $row['harga']; ?> / pcs</p>
                <hr style="width: 530px; margin-top: 3px; margin-left: 0;">
                <div class="description-table">
                    <?php
                        $status = $row['status'];
                        $color = ($status == 'pre-order') ? '#FFA500' : (($status == 'tersedia') ? '#008000' : '#000000');
                    ?>
                    <p class="description-item">Status</p>
                    <p class="description-item" style="color: <?php echo $color; ?>"><?php echo $row['status']; ?></p>
                    <p class="description-item">Stok</p>
                    <p class="description-item"><?php echo $row['stok']; ?> pcs</p>
                    <p class="description-item">Kategori</p>
                    <p class="description-item"><?php echo $row['kategori']; ?></p>
                </div>
                <br>
                <!-- <div class="kuantitas">
                    <p style="padding-bottom: 20px; padding-left: 10px;">Kuantitas</p>
                    <div class="kuantitas-button">
                        <button id="decrease">-</button>
                        <span id="kuantitas">1</span>
                        <button id="increase">+</button>
                    </div>
                </div> -->
                <div class="row-button" style="padding-right: 90px;">
                    <!-- <div class="favorite">
                        <button class="favorite-button" style="align-items: center;"><img src="favorite2.png" style="height: 16px;">Favorite</button>
                    </div> -->
                    <div class="beli-sekarang">
                        <a href="https://wa.me/+6285736706053?text=Saya%20tertarik%20mau%20beli%20produk%20<?php echo $row['nama_produk']; ?>" class="beli-sekarang-button" target="#blank">Beli Sekarang</a>
                    </div>
                </div>
                <div class="row-bagikan" style="padding-right: 90px;">
                    <div class="bagikan">
                        <p style="margin-right: 2px;">Bagikan ke:</p>
                    </div>
                    <div class="icon">
                        <img src="images/asset/facebook.png" style="height: 20px;">
                        <img src="images/asset/instagram1.png" style="height: 20px;">
                        <img src="images/asset/whatsapp1.png" style="height: 20px;">
                        <img src="images/asset/twitter.png" style="height: 20px;">                        
                    </div>                                              
                </div>
            </div>
        </div>
        
        <!-- Deskripsi Produk -->
        <div class="tab-container">
            <div class="tab">
                <span class="tab-title-deskripsi" onclick="showDeskripsi()" style="color: black;">Deskripsi</span>
                <span class="tab-title-ulasan" onclick="showUlasan()" style="color: gray;">Ulasan (2)</span>
                <!-- <hr style="margin: 0; margin-left: 10px; width: 70px; border: 1.2px solid black"> -->
            </div>
        </div>
        <hr style="margin-left: 10px; border: 1px solid rgb(219, 219, 219); margin-top: 0;">
        <div class="deskripsi">
            <p style="padding-left: 10px; justify-content: auto; margin-top: 10px; text-align: justify; font-size: 10pt;">
            <?php echo $row['deskripsi']; ?>  
            </p>
            <div class="deskripsi-detail">
                <p style="font-weight: bold; text-align: left; margin-top: 0; margin-bottom: 5px;">Spesifikasi:</p>
                <div class="deskripsi-spesifikasi">
                    <div class="spec-item">
                        <span class="spec-title">Panjang body</span>
                        <span class="spec-value">: <?php echo $row['panjang']; ?> cm</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-title">Lebar body</span>
                        <span class="spec-value">: <?php echo $row['lebar']; ?> cm</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-title">Jarak reng</span>
                        <span class="spec-value">: <?php echo $row['jarak']; ?> cm</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-title">Berat</span>
                        <span class="spec-value">: <?php echo $row['berat']; ?> kg</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-title">Sudut kemiringan min.</span>
                        <span class="spec-value">: <?php echo $row['sudutmiring']; ?> &deg;</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="ulasan" style="display: none;">
            <!-- <p style="padding-left: 10px; font-size: 12pt;">Ulasan:</p> -->
            <div class="ulasan-item" style="padding-left: 10px;  margin-bottom: 20px;">
                <div class="row-ulasan">
                    <img src="images/asset/profile1.png" style="height: 30px">
                    <p style="margin-left: 10px;">Supriadi Hendra</p>
                </div>
                <div class="box-ulasan">
                    <p style="font-size: 11pt;">Produknya bagus sekali!!<br>
                        Setelah menggunakan Genteng Ganteng, perlahan diri saya ikut menjadi ganteng. Mungkin sedikit
                        terdengar tidak masuk akal, tapi setelah membuktikannya secara langsung, genteng ini beneran ngefek.
                    </p>
                </div>                                
            </div>
            <div class="ulasan-item" style="padding-left: 10px; margin-bottom: 20px;">
                <div class="row-ulasan">
                    <img src="images/asset/profile1.png" style="height: 30px">
                    <p style="margin-left: 10px;">Bagus setiawan</p>
                </div>
                <div class="box-ulasan">
                    <p style="font-size: 11pt;">Kak, aku perempuan usia 31 Tahun dan berencana buat membangun rumah impianku.
                        Melihat pamflet yang beredar tentang Genteng Ganteng, saya mulai penasaran sama kualitas produknya. Tapi,
                        entah mengapa kok tidak ngefek ke kecantikan saya ya? Apa emang genteng ini khusus buat bikin orang jadi ganteng saja?
                        Mohon jawabannya ya Kak. 
                    </p>
                </div> 
            </div>
            <div class="ulasan-item" style="padding-left: 10px; margin-bottom: 20px;">
                <div class="row-ulasan">
                    <img src="images/asset/profile1.png" style="height: 30px">
                    <input type="text" placeholder="Tuliskan komentar Anda">
                    <button id="send"><img src="images/asset/send.png" style="height: 20px; padding-top: 4px; padding-left: 3px;"></button> 
                </div>                
            </div>
        </div>

        <p style="padding: 20px 0 20px 10px; font-size: 14pt;">Produk Terkait</p>
        <div class="row-products" style="padding-left: 10px;">

            <?php
            // IDs produk terkait
            $related_ids = [12, 13, 14, 15, 17];

            foreach ($related_ids as $related_id) {
                $related_query = "SELECT * FROM produk WHERE id = $related_id";
                $related_result = mysqli_query($conn, $related_query);

                if ($related_result && mysqli_num_rows($related_result) > 0) {
                    $related_row = mysqli_fetch_assoc($related_result);
            ?>

            <!-- Produk -->
            <div class="col-5">
                <div class="card">
                    <a href="produk.php?id=<?php echo $related_id; ?>" style="text-decoration: none; color: black;">
                        <img src="<?php echo 'admin/' . $related_row['gambar']; ?>" class="card-image-top">
                        <div class="card-body">
                            <p><?php echo $related_row['nama_produk']; ?></p>
                            <p>Rp. <?php echo $related_row['harga']; ?></p>
                            <?php
                                $status = $related_row['status'];
                                $color = ($status == 'pre-order') ? '#FFA500' : (($status == 'tersedia') ? '#008000' : '#000000');
                            ?>
                            <p style="color: <?php echo $color; ?>; font-size: 10pt; margin-bottom: 7px;"><?php echo $status; ?></p>
                        </div>
                    </a>
                </div>
            </div>

        <?php
            }
        }
        ?>
        </div>

        <?php
            } else {
                echo "<p>Produk tidak ditemukan.</p>";
            }
        } else {
            echo "<p>ID produk tidak diberikan.</p>";
        }
        ?>
    </div>
    <?php include 'footer.php'?>
    <script src="script.js"></script>
</body>
</html>
