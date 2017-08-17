-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2017 at 05:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knygynas`
--

-- --------------------------------------------------------

--
-- Table structure for table `žanras`
--

CREATE TABLE `žanras` (
  `žanrasId` int(11) NOT NULL,
  `Žanras` varchar(255) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `žanras`
--

INSERT INTO `žanras` (`žanrasId`, `Žanras`) VALUES
(1, 'Klasika'),
(2, 'Romanas'),
(3, 'Istorinis romanas'),
(4, 'Pramoginis romanas'),
(5, 'Fantastika'),
(6, 'Siaubo romanas'),
(7, 'Klasika'),
(8, 'Klasika'),
(9, 'Fantastika'),
(10, 'Fantastika'),
(11, 'Fantastika'),
(12, 'Meilės romanas'),
(13, 'Meilės romanas'),
(14, 'Istorinis romanas'),
(15, 'Istorinis romanas'),
(16, 'Istorinis romanas'),
(17, 'Detektyvas'),
(18, 'Detektyvas'),
(19, 'Novelė'),
(20, 'Novelė'),
(21, 'Drama'),
(22, 'Drama'),
(23, 'Drama'),
(24, 'Drama'),
(25, 'Detektyvas'),
(26, 'Detektyvas'),
(27, 'Detektyvas'),
(28, 'Detektyvas'),
(29, 'Mokslas'),
(30, 'Pomėgiai'),
(31, 'Pomėgiai'),
(32, 'Asmeniniai finansai'),
(33, 'Asmeniniai finansai'),
(34, 'Lyderystė'),
(35, 'Lyderystė'),
(36, 'Pratybos'),
(37, 'Pratybos'),
(38, 'Turizmas'),
(39, 'Turizmas'),
(40, 'Architektūra'),
(41, 'Architektūra'),
(42, 'Fotografija'),
(43, 'Fotografija'),
(44, 'Interjero dizainas'),
(45, 'Interjero dizainas'),
(46, 'Meno technika'),
(47, 'Meno technika'),
(48, 'Etiketas'),
(49, 'Etiketas'),
(50, 'Mada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `žanras`
--
ALTER TABLE `žanras`
  ADD PRIMARY KEY (`žanrasId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `žanras`
--
ALTER TABLE `žanras`
  MODIFY `žanrasId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
