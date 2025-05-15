-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jan 2022 pada 09.33
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aladin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `username_m` varchar(20) NOT NULL,
  `password_m` varchar(200) NOT NULL,
  `nama_m` varchar(20) NOT NULL,
  `notelp_m` int(20) NOT NULL,
  `alamat_m` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`username_m`, `password_m`, `nama_m`, `notelp_m`, `alamat_m`) VALUES
('admin', '$2y$10$Nk//kPs2u0oqU31pIEXRtu7N/Kz9awzGFLjoqOHIuLjCwNyVrAore', 'Mr.Admin', 222, 'Rumah'),
('aku', '$2y$10$rLmG5iJD352s0.TMX1ME.utuBTqh8musEhKUfhXKph0HepndcQtDm', 'aku', 123, '111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` varchar(10) DEFAULT NULL,
  `produk` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `hargat` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`) VALUES
(1, 'Makanan'),
(2, 'Snack'),
(3, 'Topping Shawarma');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pelanggan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `gambar`, `kategori`) VALUES
(1, 'Shawarma Aladin', '												Enak    ', '20000', 'makanan3.jpg', 1),
(2, 'Mandi Rice Chicken', 'Enak', '37000', 'makanan4.jpg', 1),
(3, 'Mandi Rice Lamb', 'Enak', '47000', 'img_1.jpg', 1),
(4, 'Kebuli Rice Chicken', 'Enak', '37000', 'img_2.jpg', 1),
(5, 'Kebuli Rice Lamb', 'Enak', '47000', 'img_isotope_1.jpg', 1),
(6, '1001 Malam Rice', 'Enak', '35000', 'img_4.jpg', 1),
(7, 'Lamb Grill', 'Enak', '35000', 'slider-1.jpg', 1),
(8, 'Lamb Fried Rice', 'Enak', '30000', 'makanan3-2.jpg', 1),
(9, 'Kampoeng Fried Rice', 'Enak', '25000', 'makanan4.jpg', 1),
(10, 'Jafar Fried Noodle', 'Enak', '25000', 'img_isotope_1.jpg', 1),
(11, 'Sambousa Cheese/Beef', 'Nikmat', '15000', 'img_3.jpg', 2),
(12, 'Roti Bakar Abu', 'Nikmat', '15000', 'makanan1.jpg', 2),
(13, 'Maryam', 'Nikmat', '15000', 'slider-1.jpg', 2),
(14, 'Corndog', 'Nikmat', '15000', 'chef_2.jpg', 2),
(15, 'French Fries', 'Nikmat', '15000', 'makanan2.jpg', 2),
(16, 'Banana Fritters', 'Nikmat', '15000', 'makanan2.jpg', 2),
(17, 'Egg', 'Sedap', '5000', 'img_6.jpg', 3),
(18, 'Cheese', 'Sedap', '5000', 'img_5.jpg', 3),
(21, 'Potato', '						Gurih  ', '25000', 'makanan1.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username_m`);

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
