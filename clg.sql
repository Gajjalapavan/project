-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 02:33 PM
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
-- Database: `clg`
--

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

CREATE TABLE `it` (
  `un` varchar(50) NOT NULL,
  `br` varchar(50) NOT NULL,
  `ph` int(50) NOT NULL,
  `amt` int(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it`
--

INSERT INTO `it` (`un`, `br`, `ph`, `amt`, `status`) VALUES
('ravina', '666', 2147483647, 100, 'approved'),
('ravina', '666', 2147483647, 100, 'approved'),
('ravina', '666', 2147483647, 100, 'approved'),
('ravina', '', 0, 100, 'approved'),
('ravina', '77889', 2147483647, 100, 'approved'),
('pavan', '889966', 997756679, 32, 'approved'),
('ravina', '', 0, 100, 'approved'),
('ravina', '', 0, 100, 'approved'),
('bindu', '6677', 2147483647, 23, 'approved'),
('ram', '77665', 2147483647, 35, 'approved'),
('ram', '77665', 2147483647, 35, 'approved'),
('ram', '77665', 2147483647, 35, 'approved'),
('ram', '77665', 2147483647, 35, 'approved'),
('ram', '77665', 2147483647, 35, 'approved'),
('ravina', '555555', 2147483647, 100, 'approved'),
('rr', '777', 666, 100, 'approved'),
('ravina', '12456', 2147483647, 100, 'approved');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
