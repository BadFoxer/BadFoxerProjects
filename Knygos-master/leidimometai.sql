-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2017 at 05:11 PM
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
-- Table structure for table `leidimometai`
--

CREATE TABLE `leidimometai` (
  `metaiId` int(11) NOT NULL,
  `Leidimo metai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leidimometai`
--

INSERT INTO `leidimometai` (`metaiId`, `Leidimo metai`) VALUES
(1, 2016),
(2, 2017),
(3, 2016),
(4, 2016),
(5, 2017),
(6, 2013),
(7, 2016),
(8, 2016),
(9, 2016),
(10, 2016),
(11, 2016),
(12, 2017),
(13, 2017),
(14, 2017),
(15, 2017),
(16, 2016),
(17, 2015),
(18, 2014),
(19, 1995),
(20, 2014),
(21, 2017),
(22, 2017),
(23, 2017),
(24, 2017),
(25, 2017),
(26, 2017),
(27, 2017),
(28, 2017),
(29, 2016),
(30, 2017),
(31, 2016),
(32, 2013),
(33, 2009),
(34, 2011),
(35, 2007),
(36, 2017),
(37, 2016),
(38, 2016),
(39, 2016),
(40, 2016),
(41, 2016),
(42, 2016),
(43, 2016),
(44, 2016),
(45, 2008),
(46, 2016),
(47, 2016),
(48, 2016),
(49, 2016),
(50, 2016);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leidimometai`
--
ALTER TABLE `leidimometai`
  ADD PRIMARY KEY (`metaiId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leidimometai`
--
ALTER TABLE `leidimometai`
  MODIFY `metaiId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
