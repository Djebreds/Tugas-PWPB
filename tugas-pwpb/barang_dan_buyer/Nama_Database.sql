-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 04, 2022 at 12:52 PM
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
-- Database: `Nama_Database`
--

-- --------------------------------------------------------

--
-- Table structure for table `Barang`
--

CREATE TABLE `Barang` (
  `Kode Barang` int(11) NOT NULL,
  `Nama Barang` varchar(255) NOT NULL,
  `Harga Satuan` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Barang`
--

INSERT INTO `Barang` (`Kode Barang`, `Nama Barang`, `Harga Satuan`) VALUES
(1, 'Test', 123321),
(3, 'Chiki Bool', 2000),
(4, 'Ultra Milk', 5000),
(7, 'Teh Pucuk', 3500),
(8, 'Chitato', 9000),
(9, 'Oreo', 8000),
(10, 'Suka suka', 9400);

-- --------------------------------------------------------

--
-- Table structure for table `Buyer`
--

CREATE TABLE `Buyer` (
  `Kode Buyer` int(11) NOT NULL,
  `Nama Buyer` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Buyer`
--

INSERT INTO `Buyer` (`Kode Buyer`, `Nama Buyer`, `Alamat`) VALUES
(1, 'Farrel Rafiardi Kusmana', 'Kp. Cihideng Kec. Parahiangan'),
(2, 'Ilham Iskandar', 'Kp. Cihideng Cenah'),
(4, 'Ibnu Fadillah', 'Cigemreng, Bandung'),
(5, 'Farrel Rafiardi K', 'Cicalengka, Kec Cibaduyut'),
(6, 'pedut parel', 'kp. cipedut'),
(7, 'Farhan Zaelani', 'Cikupa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Barang`
--
ALTER TABLE `Barang`
  ADD PRIMARY KEY (`Kode Barang`);

--
-- Indexes for table `Buyer`
--
ALTER TABLE `Buyer`
  ADD PRIMARY KEY (`Kode Buyer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Barang`
--
ALTER TABLE `Barang`
  MODIFY `Kode Barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Buyer`
--
ALTER TABLE `Buyer`
  MODIFY `Kode Buyer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
