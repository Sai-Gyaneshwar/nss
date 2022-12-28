-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 03:40 AM
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
-- Database: `nss1`
--

-- --------------------------------------------------------

--
-- Table structure for table `numbers`
--

CREATE TABLE `numbers` (
  `House_number` varchar(20) NOT NULL,
  `Number` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `numbers1`
--

CREATE TABLE `numbers1` (
  `House_number` int(20) NOT NULL,
  `Number` varchar(14) NOT NULL,
  `Tax` int(11) NOT NULL DEFAULT 12789
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `numbers1`
--

INSERT INTO `numbers1` (`House_number`, `Number`, `Tax`) VALUES
(0, '', 12789),
(0, '', 12789),
(2, '9032983092', 12789),
(2, '9032983092', 12789),
(3, '6302615924', 12789),
(0, '', 12789),
(3, '6302615924', 12789),
(0, '', 12789);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
