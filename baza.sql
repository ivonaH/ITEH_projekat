-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 10:10 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `korisnickoime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sifra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `datumregistracije` date NOT NULL,
  `statuss` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`korisnickoime`, `sifra`, `ime`, `prezime`, `email`, `datumregistracije`, `statuss`) VALUES
('admin', 'e732e411ff0216747b231cf8c5e7ba6e', 'admin', 'admin', 'admin', '2020-01-16', 'admin'),
('ivona', '203d5520f4d61875e762a4afd653457c', 'ivona', 'ivona', 'ivonaheldrih@gmail.com', '2020-01-08', 'korisnik'),
('jasmina', '149743d2e8ec1a00fa7a5bc1a24f00d6', 'jasmina', 'jasmina', 'jasminamail.com', '2020-01-08', 'korisnik'),
('jelena', '15c3dc2a70111277bb52e6ca9453e148', 'Jelena', 'Sreckovic', 'jecajecaa11@gmail.com', '2020-01-02', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pas`
--

CREATE TABLE `pas` (
  `pasID` int(11) NOT NULL,
  `ime` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rasaId` int(18) NOT NULL,
  `starost` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `velicina` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pol` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `opis` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vlasnik` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dostupnost` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'da'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pas`
--

INSERT INTO `pas` (`pasID`, `ime`, `rasaId`, `starost`, `velicina`, `pol`, `opis`, `vlasnik`, `slika`, `dostupnost`) VALUES
(1, 'Novica', 1, 'stene', 'do3', 'muski', 'Novica je mladi labrador. Ne voli decu, a ni macke.', 'jelena', 'img/novica.jpg', 'ne'),
(11, 'Perica', 1, 'odrastao', 'od40', 'muski', 'Veoma poslusan, veseo pas.', 'jelena', 'img/terijer.jpg', 'da'),
(12, 'Pekiiiiiiii', 1, 'stenefjaekfh', 'do3', 'muski', 'Peki je mladi veseo pas. Voli decu i macke.', 'jelena', 'img/pas2.jpg', 'ne'),
(13, 'Luna', 1, 'odrastao', 'do20', 'muski', 'Neki opis', 'jelena', 'img/pas1.jpg', 'ne'),
(14, 'Lokica', 1, 'mladi', 'do10', 'zenski', 'Lokica je mladi veseo pas. Voli decu i macke.', 'jelena', 'img/pas3.jpg', 'da'),
(15, 'Sapica', 1, 'odrastao', 'do10', 'zenski', 'Sapica je beli mesanac.', 'ivona', 'img/sapica.jpg', 'ne'),
(16, 'Perko', 1, 'srednji', 'do3', 'muski', 'Perko je crni labrador.', 'jelena', 'img/perica.jpg', 'da'),
(17, 'Vas', 1, 'stene', 'do3', 'muski', 'Vas je miran pas.', 'jelena', 'img/pas3.jpg', 'da'),
(19, 'Dogica', 1, 'stene', 'do3', 'muski', 'Dogica je mlada doga. Ne voli decu, a ni macke.', 'jelena', 'img/default.jpg', 'da'),
(20, 'Djura', 13, 'stene', 'do3', 'muski', 'djura je mali haski', 'jelena', 'img/default.jpg', 'da'),
(21, 'Micko', 6, 'odrastao', 'do40', 'muski', 'Veseo mali pas', 'ivona', 'img/default.jpg', 'ne'),
(22, 'Milojko', 1, 'stene', 'do3', 'muski', 'muski labrador', 'ivona', 'img/default.jpg', 'ne'),
(23, 'Raki', 10, '12', 'mali ', 'muski', 'mali slatki sarpei', 'jelena', 'img/default.jpg', 'ne'),
(24, 'Vikilica', 1, '16', 'mali pas', 'zenski', 'Vikilica je mali veseo pas.', 'jelena', 'img/default.jpg', 'da');

-- --------------------------------------------------------

--
-- Table structure for table `rasa`
--

CREATE TABLE `rasa` (
  `rasaId` int(18) NOT NULL,
  `nazivRase` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rasa`
--

INSERT INTO `rasa` (`rasaId`, `nazivRase`) VALUES
(1, 'Labrador'),
(2, 'Haski'),
(3, 'Maltezer'),
(4, 'Mesanac'),
(5, 'Cau Cau'),
(6, 'Zlatni retriver'),
(7, 'Dalmatinac'),
(8, 'Francuski buldog'),
(9, 'Buldog'),
(10, 'Sar pei'),
(11, 'Buldog'),
(12, 'Siba inu'),
(13, 'Haski'),
(14, 'Sikoku'),
(15, 'Terijer'),
(16, 'Doga argentina'),
(17, 'Vucjak'),
(18, 'Haski'),
(19, 'Mops');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `rezervacijaId` int(18) NOT NULL,
  `korisnik` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pasId` int(11) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`rezervacijaId`, `korisnik`, `pasId`, `datum`) VALUES
(1, 'jelena', 1, '2019-12-12'),
(2, 'ivona', 1, '2020-01-01'),
(3, 'jasmina', 11, '2020-01-07'),
(4, 'ivona', 12, '2019-12-12'),
(6, 'jelena', 14, '2019-12-15'),
(7, 'ivona', 12, '2020-01-28'),
(8, 'ivona', 1, '2020-01-30'),
(9, 'ivona', 15, '2020-01-31'),
(10, 'ivona', 11, '2020-01-31'),
(11, 'ivona', 11, '2020-01-25'),
(12, 'ivona', 14, '2020-01-29'),
(13, 'ivona', 17, '2020-01-25'),
(14, 'ivona', 19, '2020-01-23'),
(15, 'ivona', 20, '2020-01-31'),
(16, 'ivona', 22, '2020-01-27'),
(17, 'ivona', 23, '2020-01-25'),
(18, 'ivona', 21, '2020-01-23'),
(19, 'ivona', 1, '2020-01-31'),
(20, 'ivona', 13, '2020-01-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`korisnickoime`);

--
-- Indexes for table `pas`
--
ALTER TABLE `pas`
  ADD PRIMARY KEY (`pasID`),
  ADD KEY `dodao` (`vlasnik`),
  ADD KEY `rasa` (`rasaId`);

--
-- Indexes for table `rasa`
--
ALTER TABLE `rasa`
  ADD PRIMARY KEY (`rasaId`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`rezervacijaId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pas`
--
ALTER TABLE `pas`
  MODIFY `pasID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `rasa`
--
ALTER TABLE `rasa`
  MODIFY `rasaId` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `rezervacijaId` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pas`
--
ALTER TABLE `pas`
  ADD CONSTRAINT `dodao` FOREIGN KEY (`vlasnik`) REFERENCES `korisnici` (`korisnickoime`),
  ADD CONSTRAINT `rasa` FOREIGN KEY (`rasaId`) REFERENCES `rasa` (`rasaId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
