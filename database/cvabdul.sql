-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2019 at 03:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvabdul`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `nama`, `harga`, `jumlah`) VALUES
(1, 'Keyboard', 100000, 34),
(2, 'Mouse', 50000, 190),
(3, 'Monitor', 500000, 14),
(4, 'Processor', 3000000, 5),
(5, 'Headphone', 150000, 48),
(6, 'Smartwatch', 300000, 120);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(3) DEFAULT NULL,
  `kd_divisi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `nama`, `user_name`, `user_password`, `user_level`, `kd_divisi`) VALUES
(4, 'Novita Kurnianingsih', '02.14.00577', '81dc9bdb52d04dc20036dbd8313ed055', '1', ''),
(10, 'Yuga Yusdiputra', 'owner', '81dc9bdb52d04dc20036dbd8313ed055', '5', ''),
(11, 'Abdul Aziz', 'aziz', '81dc9bdb52d04dc20036dbd8313ed055', '1', ''),
(16, 'Wangi Dewi Angraeni', '03.16.00813', '81dc9bdb52d04dc20036dbd8313ed055', '3', 'D003'),
(17, 'Dwi Antoro', '03.97.00060', '81dc9bdb52d04dc20036dbd8313ed055', '2', ''),
(18, 'Martha Lorinda', '01.17.00937', '81dc9bdb52d04dc20036dbd8313ed055', '4', 'D001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
