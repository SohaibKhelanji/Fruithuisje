-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 01:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruithuisje`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prId` int(100) NOT NULL,
  `prNaam` varchar(100) NOT NULL,
  `prPrijs` double(65,2) DEFAULT NULL,
  `prFoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prId`, `prNaam`, `prPrijs`, `prFoto`) VALUES
(1, 'Mandarijn', 0.30, 'pr1.png'),
(2, 'Kiwi', 0.50, 'pr2.jpg'),
(3, 'Courgette', 0.70, 'pr3.png'),
(4, 'Aubergine', 1.05, 'pr4.png'),
(5, 'Bospeen', 1.45, 'pr5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `zkklant`
--

CREATE TABLE `zkklant` (
  `zkID` int(11) NOT NULL,
  `zkVoornaam` varchar(100) NOT NULL,
  `zkAchternaam` varchar(100) NOT NULL,
  `zkEmail` varchar(100) NOT NULL,
  `zkBedrijfsnaam` varchar(100) NOT NULL,
  `zkWachtwoord` varchar(100) NOT NULL,
  `zkKorting` decimal(2,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zkklant`
--

INSERT INTO `zkklant` (`zkID`, `zkVoornaam`, `zkAchternaam`, `zkEmail`, `zkBedrijfsnaam`, `zkWachtwoord`, `zkKorting`) VALUES
(1, 'test', 'een', 'testeen@hotmail.com', 'testeenbv', '$2y$10$6k1y5rZhIJ2/4CukRWpBseMO7LPXY9PHDgrmloRC5PmLPN3EEDI3.', '0.50'),
(2, 'test', 'twee', 'testtwee@hotmail.com', 'testtweebv', '$2y$10$9oyVM716.1sB.28RxI0OauEuh//vQvoM/mZze58vdYh8g6PFN4De2', NULL),
(3, 'Admin', 'een', 'admin@admin.nl', '\'t Fruithuisje', '$2y$10$/iY3cE1txovWgoli87S0YecFIoJCEQ.wCoj6Epa8ds9qdf5Pyof0q', NULL),
(4, 'test', 'drie', 'testdrie@hotmail.com', 'testdriebv', '$2y$10$fo.S3aBnxygTf1LlIWhyRu1AcM9bX0qkuyzN1unSPfj7Ag.ID6N1e', NULL),
(5, 'test', 'vier', 'testvier@hotmail.com', 'testvierbv', '$2y$10$P8pHwvvljjIhT9K.S8tUf.4g7jCVr5NqV/X34Cy/T/At766HVoQIO', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prId`);

--
-- Indexes for table `zkklant`
--
ALTER TABLE `zkklant`
  ADD PRIMARY KEY (`zkID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `zkklant`
--
ALTER TABLE `zkklant`
  MODIFY `zkID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
