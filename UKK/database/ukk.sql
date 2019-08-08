-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 02:58 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`) VALUES
(1, 'user', 'user@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(2, 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berangkat`
--

CREATE TABLE `tb_berangkat` (
  `id_kberangkat` int(11) NOT NULL,
  `kota_berangkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berangkat`
--

INSERT INTO `tb_berangkat` (`id_kberangkat`, `kota_berangkat`) VALUES
(1, 'Bogor'),
(2, 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bus`
--

CREATE TABLE `tb_bus` (
  `id_bus` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `harga` varchar(50) NOT NULL,
  `id_kberangkat` int(11) NOT NULL,
  `id_tujuan` int(11) NOT NULL,
  `tempat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bus`
--

INSERT INTO `tb_bus` (`id_bus`, `nama`, `tanggal`, `jam`, `harga`, `id_kberangkat`, `id_tujuan`, `tempat`) VALUES
(1, 'Agra Mas', '2019-08-23', '10:10:00', '50000', 1, 1, 'Ciawi'),
(2, 'APTB', '2019-08-16', '14:00:00', '50000', 2, 2, 'Terminal Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `id_bus` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_penumpang` varchar(50) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `harga` varchar(50) NOT NULL,
  `kota_berangkat` varchar(50) NOT NULL,
  `kota_tujuan` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `id_bus`, `user_id`, `nama_penumpang`, `hp`, `tanggal`, `jam`, `harga`, `kota_berangkat`, `kota_tujuan`, `tempat`, `status`) VALUES
(1, 1, 1, 'Ramdani', '081214373106', '2019-08-23', '10:10:00', '50000', 'Bogor', 'Jakarta', 'Ciawi', '1'),
(2, 2, 1, 'Syaputra', '081214', '2019-08-16', '14:00:00', '50000', 'Jakarta', 'Bogor', 'Terminal Jakarta', '1'),
(3, 1, 1, 'Ramdani', '081214373106', '2019-08-23', '10:10:00', '50000', 'Bogor', 'Jakarta', 'Ciawi', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `norek` varchar(100) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_order`, `norek`, `nama_bank`, `bukti_pembayaran`) VALUES
(1, 1, '11706315', 'bri', 'kompas2.jpg'),
(2, 2, '11706315', 'bri', 'web-portal-terbaik-di-Indonesia-tribunnews2.jpg'),
(3, 3, '11706315', 'BRI', 'web-portal-terbaik-di-Indonesia-tribunnews3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tujuan`
--

CREATE TABLE `tb_tujuan` (
  `id_tujuan` int(11) NOT NULL,
  `kota_tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tujuan`
--

INSERT INTO `tb_tujuan` (`id_tujuan`, `kota_tujuan`) VALUES
(1, 'Jakarta'),
(2, 'Bogor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_berangkat`
--
ALTER TABLE `tb_berangkat`
  ADD PRIMARY KEY (`id_kberangkat`);

--
-- Indexes for table `tb_bus`
--
ALTER TABLE `tb_bus`
  ADD PRIMARY KEY (`id_bus`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_tujuan`
--
ALTER TABLE `tb_tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_berangkat`
--
ALTER TABLE `tb_berangkat`
  MODIFY `id_kberangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_bus`
--
ALTER TABLE `tb_bus`
  MODIFY `id_bus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_tujuan`
--
ALTER TABLE `tb_tujuan`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
