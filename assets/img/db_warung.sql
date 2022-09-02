-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 10:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wahyoo_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stock`, `gambar`) VALUES
(1, 'Ayam Rusak Segar Berat 1100 gr - 1200 gr', 'Daging', 'Daging', 41500, 94, 'a.jpeg'),
(2, 'Beras Lahap Bal 50 kg', 'Beras', 'Bahan', 594100, 15, 'b.jpeg'),
(3, 'Air Mineral Aqua 24 Btl x 600 ml', 'ktn ( 24 btl )', 'Minuman', 48600, 64, 'c.jpeg'),
(4, 'Air Mineral Le Mineral 24 Btl x 600 ml', 'ktn ( 24 btl )', 'Minuman', 42500, 30, 'd.jpeg'),
(5, 'Fiesta Nugget 500 gr', 'pcs', 'Sosis', 62500, 100, 'e.jpeg'),
(6, 'Minyak Goreng Tropical 6 x 2 lt', 'ktn ( 6 pcs )', 'Bahan', 187500, 123, 'f.jpeg'),
(7, 'Ikan Nila Merah BERSIH PERUT 800 gr / pack isi 6-7 ekor', '800 gr / pack isi 6-7 ekor', 'Daging', 34900, 100, 'g.jpeg'),
(8, 'Sawi Hijau 500 gr / pack', '480 gr - 520 gr / pack', 'Sayuran', 8500, 5, 'h.jpeg'),
(9, 'Sawi Putih 1000 gr / pack', '900 gr - 1100 gr / pack', 'Sayuran ', 10900, 7, 'i.jpeg'),
(10, 'Ikan Tongkol Segar 1000 gr / pack isi 4-6 ekor', '950 gr - 1050 / pack (isi 4-6 ekor)', 'Daging ', 29900, 100, 'j.jpeg'),
(11, 'Telur Ayam Negeri 150 Butir / Tray', 'ktn / 150 butir', 'Telur', 241250, 65, 'z.jpeg'),
(12, 'Telur Ayam Negeri 30 Butir ', 'pack ( 30 pcs )', 'Telur', 49500, 326, '9.jpeg'),
(14, 'Sarden', 'sarden', 'Makanan', 190500, 21, 't1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, '', '', '2021-06-15 04:35:44', '2021-06-17 04:35:44'),
(2, 'blessyng sarumaha', 'jl.kebon jeruk jakarta barat', '2021-06-15 04:47:31', '2021-06-17 04:47:31'),
(3, 'Imanuel Zagoto', 'Jln. Pahlawan, Kel/Ds. Kebayoran Lama Utara D.K.I. Jakarta Kec. Kebayoran Lama - Jakarta Selatan DKI Jakarta', '2021-06-15 04:50:02', '2021-06-17 04:50:02'),
(4, 'nopiyanti', 'JL.Palmerah,Jakarta Barat ', '2021-06-15 04:53:13', '2021-06-17 04:53:13'),
(5, 'BTS', 'Korea selatan', '2021-06-18 22:08:49', '2021-06-20 22:08:49'),
(6, 'Imanuel Zagoto', 'Jln. Pahlawan, Kel/Ds. Kebayoran Lama Utara D.K.I. Jakarta Kec. Kebayoran Lama - Jakarta Selatan DKI Jakarta', '2021-06-18 22:19:18', '2021-06-20 22:19:18'),
(7, 'blessyng sarumaha', 'jl.kebon jeruk jakarta barat', '2021-06-18 22:23:08', '2021-06-20 22:23:08'),
(8, 'widia k buulolo', 'cilandak jaksel', '2021-06-19 21:13:03', '2021-06-21 21:13:03'),
(9, 'leeminhooo', 'Korea selatan', '2021-06-21 22:19:18', '2021-06-23 22:19:18'),
(10, '', '', '2021-06-21 22:24:53', '2021-06-23 22:24:53'),
(11, '', '', '2021-06-28 21:36:12', '2021-06-30 21:36:12'),
(12, 'sangkuriang', 'jl. jakarta kota', '2021-06-28 22:46:08', '2021-06-30 22:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 2, 'Beras Lahap Bal 50 kg', 2, 594100, ''),
(2, 1, 6, 'Minyak Goreng Tropical 6 x 2 lt', 2, 187500, ''),
(3, 1, 1, 'Ayam Utuh Segar Berat 1100 gr - 1200 gr', 2, 41500, ''),
(4, 1, 4, 'Air Mineral Le Mineral 24 Btl x 600 ml', 1, 42500, ''),
(5, 1, 3, 'Air Mineral Aqua 24 Btl x 600 ml', 1, 48600, ''),
(6, 2, 2, 'Beras Lahap Bal 50 kg', 3, 594100, ''),
(7, 3, 1, 'Ayam Utuh Segar Berat 1100 gr - 1200 gr', 1, 41500, ''),
(8, 3, 2, 'Beras Lahap Bal 50 kg', 3, 594100, ''),
(9, 3, 3, 'Air Mineral Aqua 24 Btl x 600 ml', 2, 48600, ''),
(10, 3, 6, 'Minyak Goreng Tropical 6 x 2 lt', 1, 187500, ''),
(11, 4, 6, 'Minyak Goreng Tropical 6 x 2 lt', 1, 187500, ''),
(12, 4, 1, 'Ayam Utuh Segar Berat 1100 gr - 1200 gr', 1, 41500, ''),
(13, 4, 3, 'Air Mineral Aqua 24 Btl x 600 ml', 2, 48600, ''),
(14, 4, 5, 'Fiesta Nugget 500 gr', 1, 62500, ''),
(15, 4, 4, 'Air Mineral Le Mineral 24 Btl x 600 ml', 1, 42500, ''),
(16, 4, 2, 'Beras Lahap Bal 50 kg', 2, 594100, ''),
(17, 5, 1, 'Ayam Utuh Segar Berat 1100 gr - 1200 gr', 1, 41500, ''),
(18, 6, 2, 'Beras Lahap Bal 50 kg', 2, 594100, ''),
(19, 7, 3, 'Air Mineral Aqua 24 Btl x 600 ml', 5, 48600, ''),
(20, 8, 1, 'Ayam Utuh Segar Berat 1100 gr - 1200 gr', 1, 41500, ''),
(21, 8, 2, 'Beras Lahap Bal 50 kg', 2, 594100, ''),
(22, 9, 1, 'Ayam Utuh Segar Berat 1100 gr - 1200 gr', 1, 41500, ''),
(23, 9, 2, 'Beras Lahap Bal 50 kg', 2, 594100, ''),
(24, 9, 3, 'Air Mineral Aqua 24 Btl x 600 ml', 1, 48600, ''),
(25, 10, 1, 'Ayam Rusak Segar Berat 1100 gr - 1200 gr', 2, 41500, ''),
(26, 11, 2, 'Beras Lahap Bal 50 kg', 1, 594100, ''),
(27, 12, 1, 'Ayam Rusak Segar Berat 1100 gr - 1200 gr', 1, 41500, ''),
(28, 12, 2, 'Beras Lahap Bal 50 kg', 1, 594100, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
     UPDATE tb_barang SET stock = stock-NEW.jumlah
     WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'iman', 'iman', 'user', 1),
(3, 'member', 'member', 'member', 2),
(4, 'nopiyanti', 'nopiyanti12', '12345', 2),
(5, 'blesyng', 'blesyng', '1234', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
