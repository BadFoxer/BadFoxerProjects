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
-- Table structure for table `pavadinimas`
--

CREATE TABLE `pavadinimas` (
  `pavadinimasId` int(11) NOT NULL,
  `Pavadinimas` varchar(255) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pavadinimas`
--

INSERT INTO `pavadinimas` (`pavadinimasId`, `Pavadinimas`) VALUES
(1, 'Mėnulio sūnus'),
(2, 'Griuvėsių dievas'),
(3, 'Vytauto žemė'),
(4, 'Vieną vakarą Paryžiuje'),
(5, 'Laiko mašina. Daktaro Moro sala'),
(6, 'Frankenšteinas'),
(7, 'Uždraustoji knyga. Dievo karalystė'),
(8, 'Kinivarpų raštai. Fantastinių istorijų rinktinė'),
(9, 'Atodūsių įlanka. Antroji \"Žvaigždžių sergėtojų\" '),
(10, 'Septynių Karalysčių riteris'),
(11, 'Sleido namas'),
(12, 'Penkiasdešimt tamsesnių atspalvių'),
(13, 'Geismų miestelis'),
(14, 'Smolensko pulkai'),
(15, 'Kraujas mėlynas'),
(16, '300 spartiečių'),
(17, 'Pažaiskime namus'),
(18, 'Viduržiemio kraujas'),
(19, 'Trys psichiatrai pienių lauke: lietuvių egzodo novelė'),
(20, '10 litų. Grafinė novelė apie Darių ir Girėną'),
(21, 'Laimingos santuokos paslaptis'),
(22, 'Nakties muzika'),
(23, 'Tikros ir netikros seserys'),
(24, 'Nepaprastas paprastas gyvenimas'),
(25, 'Invazija\r\n'),
(26, 'Kitokia klasė'),
(27, 'Tamsioje tamsioje girioje'),
(28, 'Mergina lede'),
(29, 'Eksperimentai kiekvienai dienai. Žiema'),
(30, 'Didžioji konservavimo knyga. Daugiau nei 100 būdų vasaros ir rudens gėrybes užda ryti stiklainiuose'),
(31, 'Mano vegetariška virtuvė. Vegafe'),
(32, 'Deimantų akrai'),
(33, 'Kodėl mes norime, kad jūs būtumėte'),
(34, 'Prezidentė'),
(35, 'Skundas - tai dovana'),
(36, 'LITERATŪRA. Kūrybos žingsniai 9-10 klasei'),
(37, 'Katino dienos, III d. Mokslo knyga'),
(38, 'Atrandu ir spalvinu Vilnių'),
(39, 'Saulės sala Sicilija'),
(40, 'Not Yet Decided. Lietuvos architektai. Neįgyvendinti projektai'),
(41, 'Barokas ir betonas'),
(42, 'Žemė ir vanduo'),
(43, 'Kūrybinė fotografija. Portreto raida'),
(44, 'Lietuvos tarpukario interjerai 1918-1940'),
(45, 'Spalva ir tekstūra interjere'),
(46, 'Širdies paslaptys (KDM1)'),
(47, 'Balta ir spalvota'),
(48, 'Modernios manieros. Kaip užkopti į viršūnę'),
(49, 'Protokolas: elgesio taisyklės'),
(50, 'Stiliaus pratimai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pavadinimas`
--
ALTER TABLE `pavadinimas`
  ADD PRIMARY KEY (`pavadinimasId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pavadinimas`
--
ALTER TABLE `pavadinimas`
  MODIFY `pavadinimasId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
