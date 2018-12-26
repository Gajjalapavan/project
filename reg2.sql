-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 03:02 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg2`
--

-- --------------------------------------------------------

--
-- Table structure for table `rreg2`
--

CREATE TABLE `rreg2` (
  `SN` int(15) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `barcode` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(15) NOT NULL,
  `phone` int(15) NOT NULL,
  `amt` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rreg2`
--

INSERT INTO `rreg2` (`SN`, `uname`, `barcode`, `date`, `email`, `phone`, `amt`) VALUES
(0, '', '', '0000-00-00', '', 0, 0),
(0, '', '', '0000-00-00', '', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
