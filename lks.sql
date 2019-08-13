-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2018 at 11:21 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lks`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`, `foto`) VALUES
('12312', 'panitia', '123', 'user', 'path'),
('13123qe2', 'user', '123', 'user', ''),
('213123', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'gbr/ong'),
('5ba8845d332af.jpg', 'panitia2', '123', 'user', '123'),
('5ba890e3277fe', '123', '123', 'user', 'user/5ba890e3277f9.jpg'),
('5ba9be17e4793', 'panitia3', '123', 'user', 'user/5ba9be17e478e.jpg'),
('5ba9e611ace8d', 'panitia5', '123', 'user', 'user/5ba9e611ace89.jpg'),
('5ba9e63bc5681', 'as', '123', 'user', 'user/5ba9e63bc567a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `id_pesanan` varchar(200) NOT NULL,
  `id_rute` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_rute`, `harga`, `id_user`) VALUES
('5ba9e479ba18c', '001', 200000, '12312');

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE IF NOT EXISTS `rute` (
  `id_rute` varchar(200) NOT NULL,
  `waktu_berangkat` time NOT NULL,
  `waktu_sampai` time NOT NULL,
  `berangkat` varchar(200) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `foto` text NOT NULL,
  `kendaraan` varchar(200) NOT NULL,
  `Deskripsi` text NOT NULL,
  `nama_acara` varchar(200) NOT NULL,
  `total_waktu` varchar(11) NOT NULL,
  `jarak` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `waktu_berangkat`, `waktu_sampai`, `berangkat`, `tujuan`, `foto`, `kendaraan`, `Deskripsi`, `nama_acara`, `total_waktu`, `jarak`) VALUES
('001', '07:30:00', '08:30:00', 'Nagoya', 'Batam Center', 'rut/1.jpg', 'Bus', 'Acara Ini Akan Dihadiri Oleh Syahrini Dan Masih Banyak Desainer Ternama yang akan Datang Ada Juga Penampilan Fashion Show Yang Sangat Memukai Pasti nya ', 'Show Of Syahrini', '1', 10),
('002', '08:00:00', '09:00:00', 'Bengkong', 'Tiban', 'rut/2.jpg', 'Bus', 'Acara Fashon Dengan Guest Star Desainer Ternama Indonesia Yaitu Ifan Gunawan Banyak Tips Dan Trik yang akan di berikan Oleh Ifan Gunawan Ini Ayo Datang Dijamin Tidak Ada Penyesalan Jika Datang', 'Ivan Gunawan Tour', '1', 12),
('004', '15:00:00', '16:00:00', 'Batu Aji', 'Skupang', 'rut/4.jpg', 'Bus Trans Batam', 'Indonesian Designer Adalah acara tahunan,dan Batam Terpilih Sebagai Tuan Rumah Untuk Acara Ini,ajang ini bertujuan Mencari Desainer Berbakat Di indonesia', 'Indonesian Designer', '1', 25),
('111', '01:00:00', '01:00:00', 'Bengkong', 'Tiban', 'rut/5ba9f9c77a885.jpg', 'Bus', '123					', 'Syahrini', '1', 10),
('123123', '00:00:00', '00:00:00', '$berangkat', '$tujuan', 'rut/3.jpg', '$kendaraan', '$deskripsi', '$nama_acara', '$total_wakt', 111),
('12345', '05:04:00', '00:34:00', 'tiban', '12345', 'rut/5ba9eae7b0cfb.jpg', '12345', '', '12345', '123451', 111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
 ADD PRIMARY KEY (`id_pesanan`), ADD UNIQUE KEY `id_rute` (`id_rute`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
 ADD PRIMARY KEY (`id_rute`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
