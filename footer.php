<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
</head>
<body>
        <?php
            include 'admin/koneksi.php';
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
    <footer style="background-color:#007396;">
        <div style="text-align: left;">
            <div class="row-footer">
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15819.427641703634!2d111.40962766855033!3d-7.590548878783852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7994da4126810f%3A0xfc821d99eea93a7c!2sGulun%2C%20Kec.%20Maospati%2C%20Kabupaten%20Magetan%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1716543421306!5m2!1sid!2sid" width="230" height="230" style="border:0; border-radius: 10px;"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col">
                    <p><b>ALAMAT</b></p>
                    <hr>
                    <p><?php echo $alamat; ?></p>
                </div>
                <div class="col">
                    <p><b>KONTAK</b></p>
                    <hr>
                    <div class="row-kontak">
                        <div class="col-kontak">
                            <img src="images/asset/instagram.png" alt="ins" class="icons-img" style="padding-right: 10px; width: 20px;">
                        </div>
                        <div class="col-kontak">
                            <p style="font-size: small;"><?php echo $instagram; ?></p>
                        </div>
                    </div>
                    <div class="row-kontak">
                        <div class="col-kontak">
                            <img src="images/asset/whatsapp.png" alt="ins" class="icons-img" style="padding-right: 10px; width: 20px;">
                        </div>
                        <div class="col-kontak">
                            <p style="font-size: small;"><?php echo $no_telp; ?></p>
                        </div>
                    </div>
                    <div class="row-kontak">
                        <div class="col-kontak">
                            <img src="images/asset/email.png" alt="ins" class="icons-img" style="padding-right: 10px; width: 20px;">
                        </div>
                        <div class="col-kontak">
                            <p style="font-size: small;"><?php echo $email; ?></p>
                        </div>
                    </div>                
                </div>
                <div class="col">
                    <p><b>PEMBAYARAN</b></p>
                    <hr>
                    <div class="row-kontak">
                        <div class="col-kontak">
                            <img src="images/asset/BCA.png" alt="pay1" class="payment-img">
                            <img src="images/asset/BNI.png" alt="pay2" class="payment-img">
                            <img src="images/asset/BRI.png" alt="pay3" class="payment-img">
                            <img src="images/asset/Dana.png" alt="pay4" class="payment-img">
                        </div>
                        <div class="col-kontak">
                            <img src="images/asset/Alfamart.png" alt="pay5" class="payment-img">
                            <img src="images/asset/Indomaret.png" alt="pay6" class="payment-img">
                            <img src="images/asset/Gopay.png" alt="pay7" class="payment-img">
                            <img src="images/asset/OVO.png" alt="pay8" class="payment-img">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <p><b>JELAJAHI</b></p>
                    <hr>
                    <a href="index.php#tentang" style="color: white;">Tentang</a><br>
                    <a href="index.php#katalog" style="color: white;">Katalog</a><br>
                    <a href="index.php#kontak" style="color: white;">Kontak</a><br>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer -->
    <footer style="background-color:#006380;">
        <p style="font-size: medium;"><b>Genteng Gulun - </b> Jual Genteng Kualitas Super</p>
        <p style="font-size: small;">Copyright 2024 &copy; Genteng Gulun All right reserved</p>
    </footer>
</body>
</html>