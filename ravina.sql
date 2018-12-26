-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 03:01 PM
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
-- Database: `ravina`
--

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `un` varchar(30) NOT NULL,
  `br` varchar(30) NOT NULL,
  `ph` int(30) NOT NULL,
  `amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`un`, `br`, `ph`, `amount`) VALUES
('ravina', 'ravina', 0, 0),
('ravina', 'ravina', 0, 0),
('ravina', 'ravuna', 0, 0),
('ravina', 'ravuna', 0, 0),
('pavan', 'pavan', 0, 0),
('pavan', 'pavan', 0, 0),
('pavan', 'pavan', 0, 0),
('pavan', 'pavan', 0, 0),
('ravina', 'ravuna', 0, 0),
('ravina', 'ravuna', 0, 0),
('pavan', 'pavan', 0, 0),
('pavan', 'pavan', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
