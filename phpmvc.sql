-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 05:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `pensiunan`
--

CREATE TABLE `pensiunan` (
  `id` int(11) NOT NULL,
  `nopen` varchar(100) NOT NULL,
  `nama_pensiunan` varchar(100) NOT NULL,
  `jenis_pensiun` varchar(100) NOT NULL,
  `nik_penerima` varchar(100) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `notelp_penerima` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pensiunan`
--

INSERT INTO `pensiunan` (`id`, `nopen`, `nama_pensiunan`, `jenis_pensiun`, `nik_penerima`, `nama_penerima`, `notelp_penerima`) VALUES
(33, '', 'Fadly', '', '', '0', ''),
(40, '214143314', 'riksan', 'TASPEN', '2113343555', 'fiqih', '009887966886'),
(42, '12233', 'fiqih', 'ASABRI', '4323523', 'fahshggs', '089899309');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pensiunan`
--
ALTER TABLE `pensiunan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pensiunan`
--
ALTER TABLE `pensiunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
