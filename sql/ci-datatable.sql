-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 02:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-datatable`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_imhd`
--

CREATE TABLE `tbl_imhd` (
  `notransaksi` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `tipe` varchar(225) NOT NULL,
  `kodesupel` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `totalakhir` varchar(225) NOT NULL,
  `kantortujuan` varchar(225) NOT NULL,
  `user1` varchar(225) NOT NULL,
  `user2` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_imhd`
--

INSERT INTO `tbl_imhd` (`notransaksi`, `tanggal`, `tipe`, `kodesupel`, `keterangan`, `totalakhir`, `kantortujuan`, `user1`, `user2`) VALUES
('123/BL/2023', '2023-10-19', 'BL', '1', '12093', '50000', 'UTM', 'ANANG', 'SONY'),
('193/BL/2023', '2023-11-08', 'BL', '2', '12312', '30000', 'CBG', 'ANANG', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `kodeitem` int(225) NOT NULL,
  `namaitem` varchar(225) NOT NULL,
  `satuan` varchar(225) NOT NULL,
  `hargapokok` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`kodeitem`, `namaitem`, `satuan`, `hargapokok`) VALUES
(1, 'VITAMIN A', 'BOX', '5000'),
(2, 'VITAMIN B', 'BOX', '4000'),
(3, 'PARACETAMOL', 'BOX', '11500'),
(4, 'CEFADROXIL', 'BOX', '8500'),
(5, 'VITAMIN C', 'BOX', '6000'),
(6, 'PANADOL', 'BOX', '8400'),
(7, 'PANADOL EXTRA', 'BOX', '9400'),
(8, 'NOURISH', 'BOX', '43200'),
(9, 'LE MINERALE', 'BTL', '4000'),
(10, 'AQUA', 'BTL', '5000'),
(11, 'YAKULT', 'BTL', '2000'),
(12, 'YAKULT LIGHT', 'BTL', '3000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itemstok`
--

CREATE TABLE `tbl_itemstok` (
  `kodeitem` int(225) NOT NULL,
  `stok` int(225) NOT NULL,
  `kantor` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_itemstok`
--

INSERT INTO `tbl_itemstok` (`kodeitem`, `stok`, `kantor`) VALUES
(1, 25, 'UTM'),
(2, 12, 'UTM'),
(3, 87, 'UTM'),
(4, 38, 'CBG'),
(5, 12, 'CBG'),
(6, 12, 'CBG'),
(7, 21, 'UTM'),
(8, 13, 'UTM'),
(9, 12, 'UTM'),
(10, 39, 'UTM'),
(11, 29, 'UTM'),
(12, 41, 'UTM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kantor`
--

CREATE TABLE `tbl_kantor` (
  `kodekantor` varchar(225) NOT NULL,
  `namakantor` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kantor`
--

INSERT INTO `tbl_kantor` (`kodekantor`, `namakantor`) VALUES
('CBG', 'CABANG'),
('UTM', 'UTAMA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supel`
--

CREATE TABLE `tbl_supel` (
  `kode` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_supel`
--

INSERT INTO `tbl_supel` (`kode`, `nama`) VALUES
('1', 'PT ENSEVAL'),
('2', 'PT UNILEVER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`kodeitem`);

--
-- Indexes for table `tbl_kantor`
--
ALTER TABLE `tbl_kantor`
  ADD PRIMARY KEY (`kodekantor`);

--
-- Indexes for table `tbl_supel`
--
ALTER TABLE `tbl_supel`
  ADD PRIMARY KEY (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
