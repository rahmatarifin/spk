-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2019 at 11:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sawdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '37d99c62809bd2032963303c0acd081a');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(10) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `no_wa` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama`, `no_wa`) VALUES
(26, 'Bayu Baskoro', '8977410799'),
(27, 'Agung Nugraha', '0'),
(28, 'Andre Novanto', '0'),
(29, 'Fuad Sodiq', '0'),
(30, 'Deni Waja', '0'),
(31, 'Ahmad Jaelani', '0'),
(32, 'Dewi Sandra', '0'),
(33, 'Sinta Armelia', '0'),
(34, 'Ganjar Prasetya', '0'),
(35, 'Dedi Bawen', '0');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(10) NOT NULL,
  `nama_kriteria` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(14, 'IPK'),
(15, 'Pendidikan'),
(16, 'Pengalaman Kerja'),
(17, 'Usia'),
(18, 'Tes Tulis'),
(19, 'Tes Psikotes'),
(20, 'Wawancara');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(10) NOT NULL,
  `id_alternatif` int(10) NOT NULL,
  `id_kriteria` int(10) NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(40, 26, 14, 4),
(41, 26, 15, 4),
(42, 26, 16, 2),
(43, 26, 17, 4),
(44, 26, 18, 1),
(45, 26, 19, 3),
(46, 26, 20, 3),
(47, 27, 14, 2),
(48, 27, 15, 4),
(49, 27, 16, 1),
(50, 27, 17, 2),
(51, 27, 18, 2),
(52, 27, 19, 3),
(53, 27, 20, 3),
(54, 28, 14, 1),
(55, 28, 15, 3),
(56, 28, 16, 2),
(57, 28, 17, 3),
(58, 28, 18, 2),
(59, 28, 19, 2),
(60, 28, 20, 3),
(61, 29, 14, 1),
(62, 29, 15, 3),
(63, 29, 16, 2),
(64, 29, 17, 2),
(65, 29, 18, 3),
(66, 29, 19, 4),
(67, 29, 20, 3),
(68, 30, 14, 1),
(69, 30, 15, 4),
(70, 30, 16, 3),
(71, 30, 17, 3),
(72, 30, 18, 3),
(73, 30, 19, 3),
(74, 30, 20, 3),
(75, 31, 14, 1),
(76, 31, 15, 3),
(77, 31, 16, 4),
(78, 31, 17, 2),
(80, 31, 18, 3),
(81, 31, 19, 4),
(82, 31, 20, 4),
(83, 32, 14, 1),
(84, 32, 15, 3),
(85, 32, 16, 5),
(86, 32, 17, 3),
(87, 32, 18, 2),
(88, 32, 19, 1),
(89, 32, 20, 4),
(90, 33, 14, 3),
(91, 33, 15, 2),
(92, 33, 16, 1),
(93, 33, 17, 3),
(94, 33, 18, 2),
(95, 33, 19, 3),
(96, 33, 20, 4),
(98, 34, 14, 2),
(99, 34, 15, 3),
(100, 34, 16, 4),
(101, 34, 17, 2),
(102, 34, 18, 3),
(103, 34, 19, 2),
(104, 34, 20, 3),
(105, 35, 14, 3),
(106, 35, 15, 2),
(107, 35, 16, 3),
(108, 35, 17, 1),
(109, 35, 18, 2),
(110, 35, 19, 1),
(111, 35, 20, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
