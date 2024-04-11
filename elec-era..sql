-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2024 at 06:17 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elec-era`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `name` varchar(100) NOT NULL,
  `image` varchar(1024) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`name`, `image`) VALUES
('Laptop', 'https://tech.co.za/wp-content/uploads/2022/11/Hp-Probook-450-G9a.png'),
('Fridge', 'https://www.westinghouse.com.au/remote.jpg.ashx?urlb64=aHR0cHM6Ly9yZXNvdXJjZS5lbGVjdHJvbHV4LmNvbS5hdS9wdWJsaWMvaW1hZ2UyL3Byb2R1Y3QvMTEyNDMzLzU2NTE4L1dILVByb2R1Y3Rab29tL2ZyaWRnZXNfd3FlNTY1MGJhX2dhbGxlcnlfMS5wbmc&hmac=Lrz185oZey4'),
('T.V', 'https://www.intex.in/cdn/shop/products/3265_1024x1024.png?v=1648711141'),
('Android-Phone', 'https://cdn.vox-cdn.com/thumbor/08jubjGM7E7FStVppBEAc0u489E=/0x0:2040x1360/1400x1400/filters:focal(1020x680:1021x681)/cdn.vox-cdn.com/uploads/chorus_asset/file/13272937/jbareham_181012_2989_0549.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `repair_req`
--

DROP TABLE IF EXISTS `repair_req`;
CREATE TABLE IF NOT EXISTS `repair_req` (
  `product` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `damage` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `userid` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `repair_req`
--

INSERT INTO `repair_req` (`product`, `name`, `address`, `damage`, `userid`) VALUES
('Laptop', 'Lap', 'Op', 'external', 1),
('Fridge', 'Maru fridge', 'dfdg', 'internal', 1),
('Laptop', 'dell', '100/1255 uday', 'internal', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pincode` int NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `pincode`, `password`, `id`) VALUES
('Smit', 'smit@email.com', 121212, '1212', 1),
('dsd', 'smi1t@email.com', 121212, '1212', 2),
('Smityoo', 'smitrami@123.com', 121212, 'Smit', 3),
('Hrishabh', 'hrishabh@email.com', 121212, '123', 6),
('Rastogi', 'hrishabh1@email.com', 121232, '1234', 8),
('PRATHAM', 'prathamthakar21@gmail.com', 380063, '1234', 9);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
