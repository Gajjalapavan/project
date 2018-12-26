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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'ravina', 'ravina@gmail.com', '050b71bb519eab60805642dad94e8780'),
(0, 'ravi', 'ravi@gmail.com', '63dd3e154ca6d948fc380fa576343ba6'),
(0, 'ravin', 'ravin@gmail.com', '4b097568d31fca3704fd861d3c7e37ce'),
(0, 'bindhu', 'bindhu@gmail.com', 'c7447839717e699ab48c08e16f260cb3'),
(0, 'vidya', 'vidya@gmail.com', '4dc13c8aa6371cbcb715d66f351ca293'),
(0, 'ras', 'ras@gmail.com', '1c28067048213d48f168efc6d6685406'),
(0, 'mano', 'mani@gmail.com', '07cd55c7b42715ec44c133a6a165e8d2'),
(0, 'raghu', 'raghu@gmail.com', '423abcc373f1ad82211b71e10d5253c9'),
(0, 'rrr', 'rr@gmai', '514f1b439f404f86f77090fa9edc96ce'),
(0, 'pavan', 'pavan@gmail.com', '141bc86dfd5c40e3cc37219c18d471ca');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
