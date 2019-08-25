-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 02:39 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashioncart`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('prabu', 'prabu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `image`, `price`) VALUES
(1, 'shoe (1).jpg', 1800),
(2, 'shoe (2).jpg', 1950),
(3, 'shoe (3).jpg', 1200),
(4, 'shoe (4).jpg', 1500),
(5, 'shoe (5).jpg', 2000),
(6, 'shoe (6).jpg', 790),
(7, 'shoe (7).jpg', 3000),
(8, 'shoe (8).jpg', 1800),
(9, 'shoe (9).jpg', 2300),
(10, 'shoe (10).jpg', 1360),
(11, 'shoe (11).jpg', 1250),
(12, 'shoe (12).jpg', 870),
(13, 'shoe (13).jpg', 1740),
(14, 'shoe (14).jpg', 2600),
(15, 'shoe (15).jpg', 450),
(16, 'shoe (16).jpg', 2315),
(17, 'shoe (17).jpg', 1835),
(18, 'shoe (18).jpg', 2715),
(19, 'shoe (19).jpg', 890),
(20, 'shoe (20).jpg', 1640),
(21, 'shoe (5).jpg', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product1`
--

CREATE TABLE `tbl_product1` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product1`
--

INSERT INTO `tbl_product1` (`id`, `image`, `price`) VALUES
(1, 'watch (1).jpg', 1800),
(2, 'watch (2).jpg', 1950),
(3, 'watch (3).jpg', 1200),
(4, 'watch (4).jpg', 1500),
(5, 'watch (5).jpg', 2000),
(6, 'watch (6).jpg', 790),
(7, 'watch (7).jpg', 3000),
(8, 'watch (8).jpg', 1800),
(9, 'watch (9).jpg', 2300),
(10, 'watch (10).jpg', 1360),
(11, 'watch (11).jpg', 1250),
(12, 'watch (12).jpg', 870),
(13, 'watch (13).jpg', 1740),
(14, 'watch (14).jpg', 2600),
(15, 'watch (15).jpg', 450),
(16, 'watch (16).jpg', 2315),
(17, 'watch (17).jpg', 1835),
(18, 'watch (18).jpg', 2715),
(19, 'watch (19).jpg', 890),
(20, 'watch (20).jpg', 1640),
(21, 'watch (21).jpg', 1500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
