-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 07:26 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(65118224, 'freddyd', '12345', 'Freedy Dianto Zebua'),
(65118244, 'damala', '12345', 'Damala'),
(65118263, 'ovanf', '12345', 'Ovan Fadillah'),
(65118266, 'sfitrij', '12345', 'Sri Fitri Jayanti');

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `id_beli` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_prdk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`id_beli`, `id_pelanggan`, `id_prdk`, `jumlah`, `total`, `tgl`) VALUES
(1, 1, 1, 3, 20000, '2020-05-22'),
(2, 2, 12, 2, 3000, '2020-05-22'),
(13, 3, 12, 1, 2222, '0000-00-00'),
(14, 5, 12, 3, 2222, '2020-05-22'),
(15, 2, 12, 2, 4444, '2020-05-22'),
(16, 4, 12, 2, 4444, '2020-05-22'),
(17, 3, 1, 40, 0, '2020-05-22'),
(18, 3, 1, 40, 0, '2020-05-22'),
(19, 3, 1, 40, 400000, '2020-05-22'),
(20, 3, 1, 60, 600000, '2020-05-22'),
(21, 3, 1, 60, 600000, '2020-05-22'),
(22, 2, 1, 4, 40000, '2020-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `email_pelanggan` varchar(30) NOT NULL,
  `pass_pelanggan` varchar(30) NOT NULL,
  `tlpn_pelanggan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email_pelanggan`, `pass_pelanggan`, `tlpn_pelanggan`) VALUES
(1, 'Siti Maemunah', 'siti_m@gmail.com', '54321', '087870616083'),
(2, 'Daniel', 'dan11@gmail.com', '54321', '085714253289'),
(3, 'Annisa', 'anisa21@gmail.co.id', '54321', '082154606570'),
(4, 'Surya', 'sur00@gmail.co.id', '54321', '082113140889'),
(5, 'Dita', 'd1ta@gmail.com', '54321', '085712131190');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `tgl_pembelian`, `total_pembelian`) VALUES
(1, 4, '2020-05-05', 4000000),
(2, 1, '2020-05-03', 6000000),
(3, 3, '2020-05-08', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_prdk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_prdk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_prdk`, `id_pembelian`, `id_prdk`, `jumlah`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_prdk` int(11) NOT NULL,
  `nama_prdk` varchar(25) NOT NULL,
  `harga_prdk` int(9) NOT NULL,
  `berat` int(12) NOT NULL,
  `foto_prdk` varchar(100) NOT NULL,
  `deskripsi_prdk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_prdk`, `nama_prdk`, `harga_prdk`, `berat`, `foto_prdk`, `deskripsi_prdk`) VALUES
(1, 'Cottonbud', 10000, 500, '81886795_2796866220392531_7047201361686953984_n.jpg', '			ga tau lah  ngasal aja\r\n\r\neuy anjay\r\n\r\nbjir '),
(12, 'tenga', 2222, 1111, '81606593_2796866880392465_3507926436067409920_o.jpg', '									ngocok   '),
(13, 'Kondom', 2000000, 2000, 'FB_IMG_15806115377003425.jpg', 'buat ngentot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_prdk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_prdk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65118267;
--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_prdk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_prdk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
