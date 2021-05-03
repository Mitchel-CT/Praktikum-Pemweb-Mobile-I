-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 03:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survei_genre`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemilu`
--

CREATE TABLE `pemilu` (
  `ID` varchar(5) NOT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  `Pilihan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilu`
--

INSERT INTO `pemilu` (`ID`, `Nama`, `Pilihan`) VALUES
('M1', 'Mitchel', 'Abi');

-- --------------------------------------------------------

--
-- Table structure for table `survei`
--

CREATE TABLE `survei` (
  `ID` int(5) NOT NULL,
  `NAMA` varchar(30) DEFAULT NULL,
  `GENRE_GAME` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survei`
--

INSERT INTO `survei` (`ID`, `NAMA`, `GENRE_GAME`) VALUES
(1, 'Mitchel', 'RPG'),
(2, 'Rio', 'RPG'),
(3, 'Evan', 'FPS'),
(4, 'Kevin', 'MOBA'),
(5, 'Kejer', 'FPS'),
(6, 'Abi', 'FPS'),
(7, 'Fauzan', 'FPS'),
(8, 'Satriya', 'MOBA'),
(9, 'Cakra', 'MOBA'),
(10, 'Naga', 'MOBA'),
(11, 'Qwerty', 'FPS'),
(12, 'Zanzan', 'Action');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemilu`
--
ALTER TABLE `pemilu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
