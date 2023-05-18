-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 10:06 AM
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
(40, '214143314', 'riksan', 'TASPEN', '2113343555', 'fiqih', '009887966886'),
(42, '12233', 'fiqih', 'ASABRI', '4323523', 'fahshggs', '089899309');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'Sandhika Galih', 'sandhikagalih@unpas.ac.id', '$2y$10$nXnrqGQTjpvg58OtOB/N.evYQjVlz7KIW37oUSQSQ2EgNMD0Dgrzq', 1, 1, 1552120289),
(6, 'Doddy Ferdiansyah', 'doddy@gmail.com', '$2y$10$FhGzXwwTWLN/yonJpDLR0.nKoeWlKWBoRG9bsk0jOAgbJ007XzeFO', 2, 1, 1552285263),
(11, 'Sandhika Galih', 'sandhikagalih@gmail.com', '$2y$10$0QYEK1pB2L.Rdo.ZQsJO5eeTSpdzT7PvHaEwsuEyGSs0J1Qf5BoSq', 2, 1, 1553151354),
(14, 'Fadly', 'fadlyferdiansyah689@gmail.com', '$2y$10$C20MJV9kgP1KHW1GoCtbU.SAbYrCccG8vlvLmDwLhW..VLXr8Wg/y', 2, 0, 1684391602),
(15, 'Fadly', 'fadlyferdiansyah18@gmail.com', '$2y$10$QPD7kPQG4Np1dg7fhoTPquyYRTUx3JoT5vO2rlzxs1J9lto4nYrOC', 2, 0, 1684391658),
(16, 'Fadly', 'fadlyferdiansyah17@gmail.com', '$2y$10$YnXmCFOqmbs3M2HAhiyjkemn/M8NL14AgN/BWOV3/WpDC4SwPAREG', 1, 1, 1684391751),
(17, 'Fadly', 'fadlyferdiansyah10@gmail.com', '$2y$10$ld.1hkeCJPG1PjM/DXMCR.APHu7504FfmvH5cVrcESH54Ck4QWBXu', 1, 1, 1684392705),
(18, 'eerer', 'fadlyferdiansyah100@gmail.com', '$2y$10$zK7dDEtva9GMa2/kNea83OXOT.CEsJ/Joj3aV6mrV24xays5pmYau', 1, 1, 1684394186);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pensiunan`
--
ALTER TABLE `pensiunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pensiunan`
--
ALTER TABLE `pensiunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
