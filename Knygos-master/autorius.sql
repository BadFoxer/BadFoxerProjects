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
-- Table structure for table `autorius`
--

CREATE TABLE `autorius` (
  `autoriusid` int(11) NOT NULL,
  `Autorius(-iai)` varchar(255) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `autorius`
--

INSERT INTO `autorius` (`autoriusid`, `Autorius(-iai)`) VALUES
(1, 'Čabua Amiredžibi'),
(2, 'Kate Atkinson'),
(3, 'Edmundas Malūkas'),
(4, 'Nicolas Barreau'),
(5, 'H. G. Wells'),
(6, 'Mary Shelley'),
(7, 'Lev Tolstoj'),
(8, 'Kazys Saja'),
(9, 'Nora Roberts'),
(10, 'George R. R. Martin'),
(11, 'David Mitchell\r\n'),
(12, 'Fifty Shades Darker'),
(13, 'Nora Roberts'),
(14, 'Romualdas Drakšas'),
(15, 'Undinė Radzevičiūtė'),
(16, 'Steven Pressfield'),
(17, 'Carin Gerhardsen'),
(18, 'Mons Kallentoft'),
(19, 'Albertas Zalatorius'),
(20, 'Miglė Anušauskaitė, Gerda Jord'),
(21, 'Kate Kerrigan'),
(22, 'Jojo Moyes'),
(23, 'Irena Buivydaitė'),
(24, 'Monica Wood'),
(25, 'Mark Greaney'),
(26, 'Joanne Harris'),
(27, 'Ruth Ware'),
(28, 'Robert Bryndza'),
(29, 'Anita van Saan'),
(30, 'Dalia Raimonda Mačenskienė'),
(31, 'Aistė Butkevičienė'),
(32, 'Jill Murphy, Russell H. Conwell, Elbert Hubbard'),
(33, 'Šaron L. Lechter, Robert T. Kiyosaki, Donalddas J. Trampas, Meridit Makaiver, Donald J. Trump, Sharon L. Lechter'),
(34, 'Lauras Bielinis\r\n'),
(35, 'Janelle Barlow, Claus Moller'),
(36, 'Nijolė Černauskienė'),
(37, 'Saulius Žukas'),
(38, 'Kamilė Bėkštaitė-Dirsienė, Arūnas Bėkšta'),
(39, 'Dalia Smagurauskaitė'),
(40, 'Nėra Autoriaus'),
(41, 'Liudas Parulskis'),
(42, 'Antanas Stanevičius'),
(43, 'Tatjana Kuzmina'),
(44, 'Lina Preišegalavičienė'),
(45, 'Adrienne Chinn'),
(46, 'Marguerita Kaye'),
(47, 'Sigutė Ach'),
(48, 'Dorothea Johnson, Liv Tyler'),
(49, 'Arminas Lydeka'),
(50, 'Raymond Queneau');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autorius`
--
ALTER TABLE `autorius`
  ADD PRIMARY KEY (`autoriusid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autorius`
--
ALTER TABLE `autorius`
  MODIFY `autoriusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
