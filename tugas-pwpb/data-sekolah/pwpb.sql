-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 04, 2022 at 12:53 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwpb`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(9) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `alamat_siswa` varchar(200) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_sekolah`
--

INSERT INTO `data_sekolah` (`id_siswa`, `nis`, `nama_siswa`, `alamat_siswa`, `jenis_kelamin`, `tanggal_lahir`) VALUES
(1, 202193939, 'Farrel Rafiardi Kusmana', 'Cilacap', 'laki-laki', '20 - April - 2005'),
(2, 202198484, 'R. Refi Ahmad Fauzan', 'Cigemreng Soreang', 'laki-laki', '26 - Maret - 2005'),
(3, 209484722, 'Farhan Zaelani', 'Cikupa', 'laki-laki', '7 - Agustus - 2004'),
(4, 202103949, 'Muhammad Fadil', 'Soreang Indah', 'laki-laki', '4 - Juni - 2005'),
(5, 202134849, 'Muhammad Ilham Iskandar', 'Alun-alun Soreang', 'laki-laki', '4 - Juli - 2004');

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id_ortu` int(11) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat_ortu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orang_tua`
--

INSERT INTO `orang_tua` (`id_ortu`, `nama_ortu`, `pekerjaan`, `no_hp`, `alamat_ortu`) VALUES
(1, 'Jajang Subagja', 'wirausaha', '08274637271', 'Bandung, Ciwidey'),
(2, 'Agus U Awi', 'lainnya', '082174628926', 'Karamatmulya'),
(3, 'Atien Suhijat', 'warausaha', '0821949302939', 'Kp. Cicangkuang Desa karamatmulya'),
(5, 'Iman Rohiman', 'warausaha', '0824402934838', 'Banjaran'),
(6, 'Djebreds', 'lainnya', '0897878676655', 'Kampung Sawah'),
(7, 'Ilham', 'polisi', '0898977665543', 'Cigemreng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`id_ortu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
