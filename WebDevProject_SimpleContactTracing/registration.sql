-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 04:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpect`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` bigint(20) NOT NULL,
  `FirstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MiddleName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Barangay` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Province` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Date` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `FirstName`, `MiddleName`, `LastName`, `Barangay`, `City`, `Province`, `Contact`, `Email`, `Date`) VALUES
(17101233, 'Earl', 'Malang', 'Ouano', 'Subangdaku', 'Mandaue', 'Cebu', 9876543210, 'aiah@gmail.com', '2022-06-06 21:53:28pm'),
(17101386, 'Jyan', 'Gomez', 'Casas', 'Lahug', 'Cebu', 'Cebu', 9296742993, '17101386@usc.edu.com', '2022-06-06 21:53:27pm'),
(17100707, 'Niles', 'Leyson', 'Pancho', 'Maribago', 'Lapu-Lapu', 'Cebu', 9612373295, 'niles.pancho1@gmail.com', '2022-06-06 21:53:22pm'),
(17100228, 'Nestor', 'Arsolon', 'Desabille', 'Talisay', 'StaFe', 'Cebu', 9612373295, 'Nestordesabille4@gmail.com', '2022-06-06 21:53:25pm'),
(17100226, 'Danmarl', 'Ancot', 'Butad', 'Tayud,', 'Consolacion,', 'Cebu', 9177066645, 'danmarlbutad@gmail.com', '2022-06-07 09:08:00am');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
