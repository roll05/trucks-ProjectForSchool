-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 03:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `truckshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `boja`
--

CREATE TABLE `boja` (
  `bojaId` int(9) NOT NULL,
  `Boja` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `boja`
--

INSERT INTO `boja` (`bojaId`, `Boja`) VALUES
(1, 'Bela'),
(2, 'Narandžasta'),
(3, 'Crvena'),
(4, 'Siva'),
(5, 'Žuta'),
(6, 'Plava');

-- --------------------------------------------------------

--
-- Table structure for table `godina`
--

CREATE TABLE `godina` (
  `godinaId` int(11) NOT NULL,
  `Godina` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `godina`
--

INSERT INTO `godina` (`godinaId`, `Godina`) VALUES
(1, '2015'),
(2, '2016'),
(3, '2017'),
(4, '2018'),
(5, '2019');

-- --------------------------------------------------------

--
-- Table structure for table `gorivo`
--

CREATE TABLE `gorivo` (
  `gorivoId` int(9) NOT NULL,
  `Gorivo` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gorivo`
--

INSERT INTO `gorivo` (`gorivoId`, `Gorivo`) VALUES
(1, 'Dizel'),
(2, 'Benzin');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentarId` int(9) NOT NULL,
  `Komentar` text COLLATE utf8_unicode_ci NOT NULL,
  `Datum` datetime NOT NULL,
  `korisnikId` int(9) NOT NULL,
  `modelId` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `korisnikId` int(9) NOT NULL,
  `ime` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ulogaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`korisnikId`, `ime`, `prezime`, `username`, `password`, `email`, `ulogaId`) VALUES
(2, 'Milan', 'Dobrosavljevic', 'adminMilan', '277945f340d314e1f1c9d006b1f4c32b', 'milanstyle97@gmail.com', 1),
(18, 'Stefan', 'Aleksic', 'Steva123', '7da816581a2c54d43939e79e34899083', 'stefan78@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `marka`
--

CREATE TABLE `marka` (
  `markaId` int(9) NOT NULL,
  `Naziv` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `marka`
--

INSERT INTO `marka` (`markaId`, `Naziv`) VALUES
(1, 'MAN'),
(2, 'SCANIA'),
(3, 'VOLVO');

-- --------------------------------------------------------

--
-- Table structure for table `menjac`
--

CREATE TABLE `menjac` (
  `menjacId` int(9) NOT NULL,
  `Menjac` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menjac`
--

INSERT INTO `menjac` (`menjacId`, `Menjac`) VALUES
(1, 'Manuelni'),
(2, 'Automatski'),
(3, 'Poluautomatski');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuId` int(9) NOT NULL,
  `Tekst` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Putanja` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `parentId` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuId`, `Tekst`, `Putanja`, `parentId`) VALUES
(1, 'O nama', 'o-nama.php', 0),
(2, 'Kamioni', '#', 0),
(3, 'Kontakt', 'kontakt.php', 0),
(4, 'O autoru', 'o-autoru.php', 0),
(5, 'Prijava / Registracija', '', 0),
(6, 'MAN', 'man.php', 2),
(7, 'SCANIA', 'scania.php', 2),
(8, 'VOLVO', 'volvo.php', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `modelId` int(11) NOT NULL,
  `Naziv` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `markaId` int(9) NOT NULL,
  `Opis` text COLLATE utf8_unicode_ci NOT NULL,
  `bojaId` int(9) NOT NULL,
  `godinaId` int(9) NOT NULL,
  `gorivoId` int(9) NOT NULL,
  `menjacId` int(9) NOT NULL,
  `motorId` int(9) NOT NULL,
  `pogonId` int(11) NOT NULL,
  `snagaId` int(9) NOT NULL,
  `sasijaId` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`modelId`, `Naziv`, `markaId`, `Opis`, `bojaId`, `godinaId`, `gorivoId`, `menjacId`, `motorId`, `pogonId`, `snagaId`, `sasijaId`) VALUES
(1, 'Volvo FH460', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 5, 1, 1, 2, 1, 2, 1, 3),
(2, 'Volvo FH 13.540 ', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, 2, 1, 2, 1, 6, 2, 5),
(3, 'Volvo FL 240', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 3, 1, 1, 2, 2, 3, 3),
(4, 'Volvo FH 480 ADR', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 5, 1, 1, 2, 2, 4, 3),
(5, 'Volvo FM 400', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 5, 5, 1, 2, 2, 2, 5, 3),
(6, 'Volvo FM 12', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 4, 1, 1, 2, 7, 6, 4),
(7, 'MAN  TGS 18.440 4x2 BLS', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 1, 1, 2, 2, 2, 8, 3),
(8, 'MAN TGS 18.440 ADR', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, 3, 1, 2, 1, 2, 7, 3),
(9, 'MAN TGX 26.400', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, 3, 1, 2, 2, 5, 7, 3),
(10, 'MAN TGA 18.440', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, 2, 1, 2, 1, 2, 8, 4),
(11, 'Scania R440', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, 4, 1, 2, 1, 3, 8, 5),
(12, 'Scania G420', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, 4, 1, 2, 2, 3, 6, 3),
(13, 'Scania 124', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 5, 1, 2, 2, 3, 4, 3),
(14, 'Scania R500', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 2, 1, 1, 1, 5, 11, 3),
(15, 'Scania R450', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, 5, 1, 2, 2, 3, 13, 3),
(16, 'Scania R420', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, 2, 1, 2, 1, 3, 14, 3),
(17, 'Scania P340X2MNV3', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 6, 1, 1, 3, 1, 3, 15, 3),
(18, 'Scania R500 LA', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 6, 5, 1, 2, 2, 3, 11, 4),
(19, 'Scania R380', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 6, 3, 1, 1, 1, 2, 12, 3),
(20, 'Scania 124 420', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 4, 1, 1, 1, 3, 6, 3),
(21, 'Scania 124 L', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, 2, 1, 1, 1, 2, 13, 3),
(22, 'Tamic', 1, 'Nesto nesto nesto nesto nesto breee tako nesto mora d ase upise ovde da bi bilo lepo ', 3, 1, 1, 2, 2, 8, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `motorId` int(9) NOT NULL,
  `Motor` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`motorId`, `Motor`) VALUES
(1, 'Euro 5'),
(2, 'Euro 6');

-- --------------------------------------------------------

--
-- Table structure for table `pogon`
--

CREATE TABLE `pogon` (
  `pogonId` int(9) NOT NULL,
  `Pogon` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pogon`
--

INSERT INTO `pogon` (`pogonId`, `Pogon`) VALUES
(1, 'Prednji'),
(2, 'Zadnji'),
(3, '4x2'),
(4, '4x4'),
(5, '6x2'),
(6, '6x4'),
(7, '6x6'),
(8, '8x4'),
(9, '8x6'),
(10, '8x8');

-- --------------------------------------------------------

--
-- Table structure for table `slika`
--

CREATE TABLE `slika` (
  `slikaId` int(9) NOT NULL,
  `Putanja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Alt` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `modelId` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slika`
--

INSERT INTO `slika` (`slikaId`, `Putanja`, `Alt`, `modelId`) VALUES
(5, 'images/man/man1s.png', 'MAN', 10),
(7, 'images/man/man2.jpg', 'MAN', 8),
(8, 'images/man/man3.jpg', 'MAN', 9),
(9, 'images/volvo/volvo1.png', 'Volvo', 5),
(10, 'images/volvo/volvo2.png', 'Volvo', 6),
(11, 'images/volvo/volvo3.png', 'Volvo', 4),
(12, 'images/volvo/volvo4.png', 'Volvo', 3),
(13, 'images/volvo/volvo5.png', 'Volvo', 2),
(14, 'images/volvo/volvo6.png', 'Volvo', 1),
(15, 'images/scania/scania1.png', 'Scania', 13),
(17, 'images/scania/scania2.png', 'Scania', 21),
(19, 'images/scania/scania4.png', 'Scania', 17),
(20, 'images/scania/scania5.png', 'Scania', 19),
(21, 'images/scania/scania6.png', 'Scania', 16),
(22, 'images/scania/scania7.png', 'Scania', 11),
(23, 'images/scania/scania8.png', 'Scania', 15),
(24, 'images/scania/scania9.png', 'Scania', 14),
(26, 'images/scania/scania11.png', 'Scania', 18),
(27, 'images/scania/scania10.png', 'Scania', 20);

-- --------------------------------------------------------

--
-- Table structure for table `snaga`
--

CREATE TABLE `snaga` (
  `snagaId` int(9) NOT NULL,
  `Vrednost` varchar(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `snaga`
--

INSERT INTO `snaga` (`snagaId`, `Vrednost`) VALUES
(1, '345/469'),
(2, '405/551'),
(3, '177/240'),
(4, '353/480'),
(5, '249/400'),
(6, '309/420'),
(7, '294/400'),
(8, '324/441'),
(11, '368/500'),
(12, '279/380'),
(13, '331/450'),
(14, '310/421'),
(15, '250/340');

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `ulogaId` int(11) NOT NULL,
  `Naziv` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`ulogaId`, `Naziv`) VALUES
(1, 'Admin'),
(2, 'Korisnik');

-- --------------------------------------------------------

--
-- Table structure for table `visinasasije`
--

CREATE TABLE `visinasasije` (
  `visinaId` int(9) NOT NULL,
  `Visina` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `visinasasije`
--

INSERT INTO `visinasasije` (`visinaId`, `Visina`) VALUES
(1, 'Nisko (850 mm)'),
(2, 'Ekstra nisko (<810 mm)'),
(3, 'Normalna visina (900 mm)'),
(4, 'Visoko (1010 mm)'),
(5, 'Ekstra visoko (>1010 mm)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boja`
--
ALTER TABLE `boja`
  ADD PRIMARY KEY (`bojaId`);

--
-- Indexes for table `godina`
--
ALTER TABLE `godina`
  ADD PRIMARY KEY (`godinaId`);

--
-- Indexes for table `gorivo`
--
ALTER TABLE `gorivo`
  ADD PRIMARY KEY (`gorivoId`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komentarId`),
  ADD KEY `korisnikId` (`korisnikId`),
  ADD KEY `modelId` (`modelId`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`korisnikId`),
  ADD UNIQUE KEY `Username` (`username`),
  ADD UNIQUE KEY `Email` (`email`),
  ADD KEY `ulogaId` (`ulogaId`);

--
-- Indexes for table `marka`
--
ALTER TABLE `marka`
  ADD PRIMARY KEY (`markaId`);

--
-- Indexes for table `menjac`
--
ALTER TABLE `menjac`
  ADD PRIMARY KEY (`menjacId`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuId`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`modelId`),
  ADD KEY `markaId` (`markaId`),
  ADD KEY `godinaId` (`godinaId`),
  ADD KEY `gorivoId` (`gorivoId`),
  ADD KEY `menjacId` (`menjacId`),
  ADD KEY `motorId` (`motorId`),
  ADD KEY `pogonId` (`pogonId`),
  ADD KEY `snagaId` (`snagaId`),
  ADD KEY `bojaId` (`bojaId`),
  ADD KEY `sasijaId` (`sasijaId`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`motorId`);

--
-- Indexes for table `pogon`
--
ALTER TABLE `pogon`
  ADD PRIMARY KEY (`pogonId`);

--
-- Indexes for table `slika`
--
ALTER TABLE `slika`
  ADD PRIMARY KEY (`slikaId`),
  ADD KEY `modelId` (`modelId`);

--
-- Indexes for table `snaga`
--
ALTER TABLE `snaga`
  ADD PRIMARY KEY (`snagaId`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`ulogaId`);

--
-- Indexes for table `visinasasije`
--
ALTER TABLE `visinasasije`
  ADD PRIMARY KEY (`visinaId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boja`
--
ALTER TABLE `boja`
  MODIFY `bojaId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `godina`
--
ALTER TABLE `godina`
  MODIFY `godinaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gorivo`
--
ALTER TABLE `gorivo`
  MODIFY `gorivoId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `komentarId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `korisnikId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `marka`
--
ALTER TABLE `marka`
  MODIFY `markaId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menjac`
--
ALTER TABLE `menjac`
  MODIFY `menjacId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `modelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `motorId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pogon`
--
ALTER TABLE `pogon`
  MODIFY `pogonId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slika`
--
ALTER TABLE `slika`
  MODIFY `slikaId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `snaga`
--
ALTER TABLE `snaga`
  MODIFY `snagaId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `ulogaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visinasasije`
--
ALTER TABLE `visinasasije`
  MODIFY `visinaId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`korisnikId`) REFERENCES `korisnik` (`korisnikId`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`modelId`) REFERENCES `model` (`modelId`);

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `korisnik_ibfk_1` FOREIGN KEY (`ulogaId`) REFERENCES `uloga` (`ulogaId`);

--
-- Constraints for table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`snagaId`) REFERENCES `snaga` (`snagaId`),
  ADD CONSTRAINT `model_ibfk_2` FOREIGN KEY (`gorivoId`) REFERENCES `gorivo` (`gorivoId`),
  ADD CONSTRAINT `model_ibfk_3` FOREIGN KEY (`markaId`) REFERENCES `marka` (`markaId`),
  ADD CONSTRAINT `model_ibfk_4` FOREIGN KEY (`motorId`) REFERENCES `motor` (`motorId`),
  ADD CONSTRAINT `model_ibfk_5` FOREIGN KEY (`godinaId`) REFERENCES `godina` (`godinaId`),
  ADD CONSTRAINT `model_ibfk_6` FOREIGN KEY (`menjacId`) REFERENCES `menjac` (`menjacId`),
  ADD CONSTRAINT `model_ibfk_7` FOREIGN KEY (`sasijaId`) REFERENCES `visinasasije` (`visinaId`),
  ADD CONSTRAINT `model_ibfk_8` FOREIGN KEY (`pogonId`) REFERENCES `pogon` (`pogonId`);

--
-- Constraints for table `slika`
--
ALTER TABLE `slika`
  ADD CONSTRAINT `slika_ibfk_1` FOREIGN KEY (`modelId`) REFERENCES `model` (`modelId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
