<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="home.css">
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
    <!-- Header -->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <a href="#home">
                <img src="images/logo_kuning.png" alt="logo" style="width:auto; height:60px;">        
                </a>
                </div>
                <div class="col text-center">
                    <a class="sub" href="#tentang">Tentang</a>
                    <a class="sub" href="#katalog">Katalog</a>
                    <a class="sub" href="#kontak">Kontak</a>
                </div>
                <!-- <div class="col text-center">
                    <a href="#">Sign In</a>
                    <a href="#">
                        <button>Sign Up</button>
                    </a>
                </div> -->
            </div>
        </div>
    </header>

    <!-- Home -->
    <section id="home" class="section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div style="text-align: left;">
                        <h1 style="font-size:28px;">Tahan Lama, Tahan Segala Cuaca</h1>
                        <p style="text-align:justify; padding-right:52px;">
                        Genteng kami dirancang khusus untuk menghadapi segala tantangan cuaca, mulai dari teriknya matahari hingga derasnya hujan. Dengan teknologi canggih dan bahan berkualitas tinggi, genteng kami memastikan rumah Anda tetap aman, nyaman, dan terlindungi sepanjang tahun.
                        </p>
                        <a href="katalog.php">
                            <button type="button" class="btn">Mulai Di Sini</button>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <img src="images/landingpage.png" alt="Action Figure" class="tentang-img">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Tentang -->
    <section id="tentang" class="section" style="padding-top: 70px;">
        <div class="container" style="padding: 32px 0;">
            <div class="row">
                <div class="col" style="padding-right:20px;">
                    <div style="text-align: left;">
                        <h2>Pilihan utama konsumen untuk mendapatkan genteng berkualitas</h2>
                        <div class="row-kontak" style="text-align: justify;">
                            <div class="col-kontak" style="padding-right:60px;">
                                <h1 style="font-size: 45px;">26+</h1>
                            </div>
                            <div class="col-kontak">
                                <p><b>Puluhan Tahun Dipercaya</b> <br>
                                <p style="font-size:small;"><!-- Yang jual aja ganteng dan cantik, <br>apalagi produknya, ganteng banget.</p>   -->
                                Sudah lebih dari dua puluh tahun kami melayani para kostumer pembeli. Kami selalu menjaga kualitas dari genteng secara turun temurun serta selalu meningkatkan produksi sesuai dengan teknologi yang lebih canggih.
                            </p>
                            </div>
                        </div>
                        <div class="row-kontak" style="text-align: justify;">
                            <div class="col-kontak" style="padding-right:60px;">
                                <h1 style="font-size: 45px;">50+</h1>
                            </div>
                            <div class="col-kontak">
                                <p><b>Bekerja Sama Dengan Berbagai Lembaga</b><br>
                                <p style="font-size:small;"><!-- Produk Genteng Ganteng bekerja sama <br>
                                dengan komunitas ganteng se-Indonesia.
                             -->
                             Kami bangga bekerja sama dengan perusahaan konstruksi, arsitek, dan pemerintah. Kolaborasi ini memungkinkan kami menyediakan produk berkualitas tinggi dan membangun hubungan jangka panjang.
                            </p>
                            </div>
                        </div>
                        <div class="row-kontak" style="text-align: justify;">
                            <div class="col-kontak "style="padding-right:60px;">
                                <h1 style="font-size: 45px;">3k+</h1>
                            </div>
                            <div class="col-kontak">
                                <p><b>Menjadi Pusat Pembelian Customer</b><br>
                                <p style="font-size:small;"><!-- Selain memberikan manfaat pada rumah <br>
                                Genteng Ganteng juga bermanfaat kecantikan. -->
                                Sebagai pusat pembelian genteng terpercaya, kami menyediakan berbagai jenis genteng berkualitas tinggi. Dengan pelayanan ramah dan profesional, kami memastikan pengalaman berbelanja Anda mudah dan menyenangkan.
                            </p>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="col" style="padding-top:90px;">
                    <div class="row-kontak">
                        <div class="col-kontak">
                            <img src="images/tentang1.jpg" alt="Action Figure" class="tentang-img" style="width: 250px; padding: 10px;">
                        </div>    
                        <div class="col-kontak">
                            <div class="row-kontak">
                                <img src="images/tentang2.jpg" alt="Action Figure" class="tentang-img" style="width: 210px; padding: 10px;">
                            </div>
                            <div class="row-kontak">
                                <img src="images/tentang3.jpg" alt="Action Figure" class="tentang-img" style="width: 210px; padding: 10px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Katalog -->
    <section id="katalog" class="section" style="padding-top: 120px;">
        <div class="container">
            <h2>Katalog Produk</h2>
            <p>Lihat berbagai pilihan genteng berkualitas yang kami tawarkan. <br>Temukan produk yang sesuai dengan kebutuhan dan gaya rumah Anda.</p>
            <?php
            include 'admin/koneksi.php';
            // Lakukan query untuk mengambil data gambar dari database
            $query = "SELECT id,nama_produk,gambar FROM produk"; // Ubah 'images' menjadi nama tabel Anda
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                // Carousel pertama
                echo "<div class='carousel'>
                        <div class='carousel-inner'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    $image_path = 'admin/' . $row['gambar']; // Ubah 'image_path' menjadi nama kolom yang sesuai
                    $alt_text = $row['nama_produk']; // Ubah 'alt_text' menjadi nama kolom yang sesuai
                    echo "<a href='katalog.php'><img src='$image_path' alt='$alt_text' class='image-carousel'></a>";
                }
                echo "  </div>
                    </div>";

                // Reset hasil query untuk digunakan lagi
                mysqli_data_seek($result, 0);

                // Carousel kedua dengan arah berlawanan
                echo "<div class='carousel' style='padding: 25px 0 0 0;'>
                        <div class='carousel-inner-reverse'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    $image_path = 'admin/' . $row['gambar'];
                    $alt_text = $row['nama_produk'];
                    echo "<a href='katalog.php'><img src='$image_path' alt='$alt_text' class='image-carousel'></a>";
                }
                echo "  </div>
                    </div>";
            } else {
                echo "Tidak ada gambar yang ditemukan.";
            }
            ?>
            <a href="katalog.php" style="text-align: right ; color: black;">Lebih Banyak</a>
        </div>
    </section>
    
    <!-- Kontak -->
    <section id="kontak" class="section">
        <div class="container" style="padding: 80px;">
            <?php
            $sql = "SELECT * FROM kontak WHERE id = '1'";
            $hasil = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($hasil) > 0) {
                $row = mysqli_fetch_assoc($hasil);
                $alamat = $row['alamat'];
                $email = $row['email'];
                $no_telp = $row['no_telp'];
                $instagram = $row['instagram'];
            } else {
                echo "Kontak tidak ditemukan.";
                exit();
            }
            ?>
            <h1>Kontak Kami</h1>
            <p>Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami.
            </p>
            <hr>
            <div class="row" style="padding: 20px 0 0 0;">
                <div class="col">
                    <div style="text-align: left;">
                        <h1>Lebih Dekat</h1>
                        <p  style="text-align:justify; padding-right: 30px;">Kunjungi lokasi kami atau hubungi kami melalui nomor telepon dan email berikut untuk segala kebutuhan Anda. Kami selalu siap untuk memberikan layanan terbaik.
                        </p>
                        <div class="row-kontak">
                            <div class="col-kontak">
                                <img src="images/asset/Logo Maps.png" alt="ins" class="icons-img" style="width: 42px;">
                            </div>
                            <div class="col-kontak">
                                <ul>
                                    <p><b>Alamat </b> <br><?php echo $alamat; ?></p>
                                </ul>
                            </div>
                        </div>
                        <div class="row-kontak">
                            <div class="col-kontak">
                                <img src="images/asset/Logo Telephone.png" alt="ins" class="icons-img" style="width: 42px;">
                            </div>
                            <div class="col-kontak">
                                <ul>
                                    <p><b>Nomor Telepon </b><br><?php echo $no_telp; ?></p>
                                </ul>
                            </div>
                        </div>
                        <div class="row-kontak">
                            <div class="col-kontak">
                                <img src="images/asset/Logo E-mail.png" alt="ins" class="icons-img" style="width: 42px;">
                            </div>
                            <div class="col-kontak">
                                <ul>
                                    <p><b>Email </b><br><?php echo $email; ?></p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3 style="text-align: left;">Ikuti Kami</h3>
                    <div class="row-kontak">
                        <div class="col-kontak">
                            <img src="images/asset/Logo Youtube.png" alt="ins" class="icons-img" style="padding-right:5px; width: 35px;">
                        </div>
                        <div class="col-kontak">
                            <img src="images/asset/Logo Facebook.png" alt="ins" class="icons-img" style="padding-right:5px; width: 35px;">
                        </div>
                        <div class="col-kontak">
                            <img src="images/asset/Logo Instagram.png" alt="ins" class="icons-img" style="padding-right:5px; width: 35px;">    
                        </div>
                        <div class="col-kontak">
                            <img src="images/asset/Logo X.png" alt="ins" class="icons-img" style="padding-right:5px; width: 35px;">    
                        </div>
                    </div>
                </div>
                <!-- Form -->
                <div class="col" style="background-color: #e2e2e2; border-radius: 20px; padding:20px 50px;">
                    <h3 style="text-align: left;">Kirim Pesan</h3>
                    <?php if (isset($_GET['status'])): ?>
                        <?php if ($_GET['status'] == 'success'): ?>
                            <div class="alert success">Pesan berhasil Terkirim.</div>
                        <?php else: ?>
                            <div class="alert fail">Terjadi kesalahan saat mengirim pesan.</div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <form action="proses_pesan.php#kontak" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan:</label>
                            <textarea id="pesan" name="pesan" rows="5" required></textarea>
                        </div>
                        <div style="display: flex; align-items: center; padding-left: 10px; padding-bottom: 10px;">
                            <input type="checkbox" id="agreement" name="agreement" style="margin-right: 10px;" required>
                            <label for="agreement" style="text-align: left; font-size: small;">Dengan mengisi formulir ini, saya telah paham dengan aturan dan persyaratan yang telah tercantum</label>
                        </div>
                        <button type="submit" class="btn" style="width:500px;">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'?>
    <script src="script.js"></script>
</body>
</html>
