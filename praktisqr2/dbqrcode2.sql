-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 03:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbqrcode2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbqrcode`
--

CREATE TABLE `tbqrcode` (
  `idqr` varchar(12) NOT NULL,
  `nama` text NOT NULL,
  `gbrqrcode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbqrcode`
--

INSERT INTO `tbqrcode` (`idqr`, `nama`, `gbrqrcode`) VALUES
('a', 'b', 'd'),
('a', 'b', 'd'),
('a', 'b', 'd'),
('a', 'b', 'd'),
('tester', '', 'testerpng'),
('123456', 'tester123', 'tester123png'),
('1234', 'yes to do', 'yes to dopng'),
('578964', 'jadi la oii', 'jadi la oii.png'),
('12345690', 'trd', '12345690.png'),
('123456', 'yes to do', '123456.png'),
('123456', 'yes to do', '123456.png'),
('0199400275', 'amirul', '0199400275.png'),
('yes to do', '', 'yes to dopng'),
('tester', '', 'tester.png'),
('0199400275', 'stress mat', '0199400275.png'),
('0199400275', 'skali lagi', '0199400275.png'),
('123456', 'tester', '123456.png'),
('mcs123456', 'tester', 'mcs123456.png'),
('123456', 'tester', '123456.png'),
('123456', 'test', '123456.png'),
('123456', 'yus', '123456.png'),
('123456', 'yus', '123456.png'),
('900', 'yus', '900.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
