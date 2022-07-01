-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 04:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `minibus`
--

CREATE TABLE `minibus` (
  `id` int(11) NOT NULL,
  `nama_penyewa` text NOT NULL,
  `tanggal_lahir` text NOT NULL,
  `alamat` text NOT NULL,
  `nik` text NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `nomor_polisi` varchar(100) NOT NULL,
  `lama_sewa` varchar(100) NOT NULL,
  `biaya_sewa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minibus`
--

INSERT INTO `minibus` (`id`, `nama_penyewa`, `tanggal_lahir`, `alamat`, `nik`, `tipe`, `nomor_polisi`, `lama_sewa`, `biaya_sewa`) VALUES
(1, 'Tio Dwi A.', '03 Januari 2001', 'Nganjuk', '3507350703012001', 'Daihatsu Gran Max', 'AG 0301 TDA', '1 Hari', 'Rp.350.000,00'),
(2, ' Tio Dwi A.', '3 Januari 2001', 'Malang', '3507350703012001', 'Daihatsu Gran Max', 'AG 0301 TDA', '1 Hari', 'Rp.350.000,00');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id` int(11) NOT NULL,
  `penyewa` text NOT NULL,
  `tanggal_lahir` text NOT NULL,
  `alamat` text NOT NULL,
  `nik` text NOT NULL,
  `tipe_motor` varchar(100) NOT NULL,
  `nopol` varchar(100) NOT NULL,
  `lama_sewa` varchar(100) NOT NULL,
  `biaya_sewa` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id`, `penyewa`, `tanggal_lahir`, `alamat`, `nik`, `tipe_motor`, `nopol`, `lama_sewa`, `biaya_sewa`, `keterangan`) VALUES
(4, '   Tegar', '3 Februari 2001', 'Singosari', '3400430033004400', 'Yamaha X-Ride 110cc Hitam', 'N 3403 CD', '1 Hari', 'Rp90.000,00', 'Lunas'),
(5, ' Wildan', '4 Februari 2001', 'Singosari', '3400430033004400', 'Yamaha NMAX 150cc Hitam', 'N 4504 DE', '1 Hari', 'Rp100.000,00', 'Hutang'),
(6, ' De', '10 November 1', 'Lawang, Indonesia', '2501110112120110', 'Honda Vario 150cc Hitam', 'N 2302 BC', '1 Hari', 'Rp80.000,00', 'Lunas'),
(7, ' Deny', '10 November 1988', 'Lawang, Indonesia', '2501110112120110', 'Honda Beat 110cc Hitam 2020', 'N 5011 DU', '1 Hari', 'Rp44.000,00', 'Belum Dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `rentalmobil`
--

CREATE TABLE `rentalmobil` (
  `idmobil` int(11) NOT NULL,
  `namapenyewa` text NOT NULL,
  `tanggallahir` text NOT NULL,
  `alamat` text NOT NULL,
  `nik` text NOT NULL,
  `namamobil` varchar(300) NOT NULL,
  `nomorpolisi` varchar(300) NOT NULL,
  `lamasewa` varchar(300) NOT NULL,
  `biayasewa` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentalmobil`
--

INSERT INTO `rentalmobil` (`idmobil`, `namapenyewa`, `tanggallahir`, `alamat`, `nik`, `namamobil`, `nomorpolisi`, `lamasewa`, `biayasewa`) VALUES
(6, '  Agung', '12 Januari 2001', 'Jatayu', '2502220223230220', 'Kijang Innova', 'N 2002 BB', '1 Hari', 'Rp800.000,00'),
(7, 'Ardian', '13 Januari 2001', 'Randuagung', '2503330334340330', 'Daihatsu Xenia', 'N 3003 CC', '1 Hari', 'Rp400.000,00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `username`, `password`, `nama_user`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Prodi SI Uniga', 'admin'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Mahasiswa Prodi SI Uniga', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `minibus`
--
ALTER TABLE `minibus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentalmobil`
--
ALTER TABLE `rentalmobil`
  ADD PRIMARY KEY (`idmobil`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `minibus`
--
ALTER TABLE `minibus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rentalmobil`
--
ALTER TABLE `rentalmobil`
  MODIFY `idmobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
