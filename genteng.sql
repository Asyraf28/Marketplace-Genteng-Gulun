-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 09:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genteng`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `alamat`, `email`, `no_telp`, `instagram`) VALUES
(1, 'Ds. Gulun, Kec. Maospati, Kab. Magetan, Jawa Timur, Indonesia (63392)', 'gentenggulun@gmail.com', '+62 696 6984 6969', '@gentenggulun');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `waktu_pesan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `pesan`, `waktu_pesan`) VALUES
(1, 'Bagus Bojonegoro', 'Baboj123@gmail.com', 'Haloo min, boleh tanya\" sesuatu?', '2024-06-05 09:14:37'),
(2, 'Denny Caknan', 'dennikuy34@gmail.com', 'Min mau tanya, buat pasokan gentengnya bakal direstock setiap kapan ya? Terimakasih!!', '2024-06-05 09:29:19'),
(0, 'Yudist Penceng', 'yucengkreteng@student.penceng.ac.id', 'Beli genteng satu bang, varian maridional kirim ke surabaya. Free ongkir ya bangh. Klo nggak gw viralin bintang satu!!', '2024-06-12 06:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `panjang` decimal(10,2) DEFAULT NULL,
  `lebar` decimal(10,2) DEFAULT NULL,
  `jarak` decimal(10,2) DEFAULT NULL,
  `berat` decimal(10,2) DEFAULT NULL,
  `sudutmiring` decimal(10,2) DEFAULT NULL,
  `gambar` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('tersedia','pre-order') NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `gambar2` varchar(255) DEFAULT NULL,
  `gambar3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `deskripsi`, `panjang`, `lebar`, `jarak`, `berat`, `sudutmiring`, `gambar`, `harga`, `status`, `stok`, `kategori`, `gambar2`, `gambar3`) VALUES
(11, 'Genteng Ovale', 'Produk untuk atap ditaman-taman kecil pekarangan rumah. Dengan harga yang relatif murah serta kuat menjadikan produk ini menjadi best seller dari penjualan genteng kami.', '26.00', '16.00', '10.00', '1.00', '30.00', 'gambar/Ovale-1.jpg', 1000, 'tersedia', 12000, 'Small Size', 'gambar/Ovale-2.jpg', 'gambar/Ovale-3.jpg'),
(12, 'Genteng Alto', 'Salah satu best seller dimana kualitas dan harga sepadan. Biasa digunakan sebagai atap rumah pada umumnya. Kualitas dapat dijamin terjaga hingga lebih dari 5 tahun penggunaan. Telah diuji oleh berbagai konsumen kami.', '23.00', '20.00', '24.00', '1.80', '30.00', 'gambar/Alto-1.jpg', 2500, 'pre-order', 0, 'Small Size', 'gambar/Alto-2.jpg', 'gambar/Alto-3.jpg'),
(13, ' Genteng Fidesienne', 'Kombinasi sempurna antara estetika klasik Eropa dan daya tahan superior. Genteng yang akan melindungi hunian Anda dari segala cuaca, sekaligus ramah lingkungan. Genteng Fidesienne untuk investasi jangka panjang yang menggabungkan kemewahan, ketahanan, dan keberlanjutan.', '40.00', '26.00', '32.00', '3.30', '30.00', 'gambar/Fidesienne-1.jpg', 6000, 'tersedia', 12, 'Medium Size', 'gambar/Fidesienne-2.jpg', 'gambar/Fidesienne-3.jpg'),
(14, 'Genteng Fossano', 'Pilihan unggulan bagi yang menginginkan pesona klasik dan ketahanan luar biasa. Didesain dengan detail artistik dan sentuhan elegan, Genteng Fossano menambahkan nuansa mewah dan otentik pada setiap hunian. Dengan daya tahan tinggi terhadap berbagai kondisi cuaca, genteng ini memastikan perlindungan jangka panjang sekaligus estetika yang tak lekang oleh waktu.', '34.00', '33.00', '27.00', '3.40', '30.00', 'gambar/Fossano-1.jpg', 2500, 'tersedia', 1253, 'Medium Size', 'gambar/Fossano-2.jpg', 'gambar/Fossano-3.jpg'),
(15, 'Genteng Maridional', 'Pilihan sempurna untuk tampilan yang anggun dan ketahanan luar biasa. Dengan desain yang terinspirasi dari gaya arsitektur klasik, Genteng Maridional menawarkan warna-warna hangat dan tekstur yang menawan, menciptakan atmosfer yang penuh keindahan dan karakter. Dirancang untuk melawan segala kondisi cuaca, genteng ini memberikan perlindungan optimal dan daya tahan yang tak tertandingi. \r\n', '41.00', '26.00', '35.10', '3.40', '30.00', 'gambar/Maridional-1.jpg', 5000, 'tersedia', 12789, 'Medium Size', 'gambar/Maridional-2.jpg', 'gambar/Maridional-3.jpg'),
(17, 'Genteng Rustik', 'Memiliki tekstur dan warna yang autentik, genteng ini memberikan sentuhan tradisional yang memikat sambil menawarkan ketahanan luar biasa terhadap segala cuaca. Cocok untuk hunian dan bangunan bergaya klasik maupun modern, Genteng Rustik menjadikan setiap atap sebagai pernyataan gaya yang penuh karakter.', '26.50', '13.50', '10.00', '0.80', '30.00', 'gambar/Rustik-1.jpg', 6000, 'tersedia', 12536, 'Small Size', 'gambar/Rustik-2.jpg', 'gambar/Rustik-3.jpg'),
(18, 'Genteng Morando', 'Solusi sempurna untuk gaya dan ketahanan yang tiada duanya, dengan desain khas yang menggabungkan estetika tradisional dan inovasi modern, Genteng Morando memberikan tampilan yang anggun dan daya tahan luar biasa terhadap berbagai kondisi cuaca. Tersedia dalam berbagai pilihan warna alami yang memikat, genteng ini dirancang untuk menjaga keindahan dan keutuhan bangunan Anda selama bertahun-tahun.', '34.50', '26.00', '27.50', '2.40', '30.00', 'gambar/Morando-1.jpg', 2900, 'tersedia', 2458, 'Small Size', 'gambar/Morando-2.jpg', 'gambar/Morando-3.jpg'),
(19, 'Genteng Marseilles', 'Genteng ini menawarkan desain klasik dengan detail yang memikat, sempurna untuk menciptakan tampilan yang menawan dan abadi. Dengan berbagai pilihan warna yang menawan, Genteng Marseilles dirancang untuk tahan terhadap segala kondisi cuaca, memberikan perlindungan optimal dan keindahan yang tahan lama.', '40.00', '21.00', '32.00', '33.00', '30.00', 'gambar/Marseilles-1.jpg', 7500, 'tersedia', 560, 'Medium Size', 'gambar/Marseilles-2.jpg', 'gambar/Marseilles-3.jpg'),
(20, 'Genteng Romane Canal', 'Terinspirasi dari keindahan arsitektur tradisional Romawi, genteng ini menawarkan desain kanal yang khas dengan detail yang memukau, menciptakan tampilan yang elegan dan berkarakter. Dengan kemampuan untuk menghadapi berbagai kondisi cuaca ekstrem, Genteng Romane Canal memastikan perlindungan maksimal dan keindahan yang bertahan lama.\r\n', '44.50', '28.00', '38.00', '45.00', '20.00', 'gambar/Romane Canal-1.jpg', 9000, 'tersedia', 230, 'Big Size', 'gambar/Romane Canal-2.jpg', 'gambar/Romane Canal-3.jpg'),
(21, 'Genteng Piatto', 'Solusi ideal bagi yang mencari kombinasi antara keindahan minimalis dan ketahanan tinggi. Dengan desain yang ramping dan permukaan halus, Genteng Piatto menghadirkan tampilan modern yang elegan, cocok untuk berbagai gaya arsitektur. Diciptakan untuk bertahan di segala kondisi cuaca, genteng ini menawarkan perlindungan maksimal dan keindahan yang tahan lama.', '40.00', '26.00', '32.00', '3.30', '30.00', 'gambar/Piatto-1.jpg', 7500, 'tersedia', 445, 'Medium Size', 'gambar/Piatto-2.jpg', 'gambar/Piatto-3.jpg'),
(22, 'Genteng Romane 12', 'Genteng dengan desain yang terinspirasi dari arsitektur Romawi, Genteng Romane 12 menghadirkan detail yang kaya dan tampilan yang mewah, cocok untuk hunian bergaya tradisional maupun modern. Diciptakan untuk menghadapi segala kondisi cuaca, genteng ini memastikan perlindungan jangka panjang dan keindahan yang abadi.', '45.00', '27.50', '37.70', '45.00', '20.00', 'gambar/Romane12-1.jpg', 8500, 'tersedia', 2457, 'Big Size', 'gambar/Romane12-2.jpg', 'gambar/Romane12-3.jpg'),
(23, 'Genteng Romane Max', 'Genteng dengan desain yang terinspirasi dari keagungan arsitektur Romawi, Genteng Romane Max menampilkan profil yang tegas dan detail yang memukau, menciptakan tampilan yang elegan dan berkelas. Dirancang untuk menghadapi segala kondisi cuaca, genteng ini menawarkan perlindungan optimal dan daya tahan luar biasa.', '45.40', '28.00', '39.00', '43.80', '20.00', 'gambar/RomaneMax-1.jpg', 8500, 'tersedia', 560, 'Big Size', 'gambar/RomaneMax-2.jpg', 'gambar/RomaneMax-3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
