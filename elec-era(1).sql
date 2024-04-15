-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 15, 2024 at 07:50 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

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
('Android-Phone', 'https://cdn.vox-cdn.com/thumbor/08jubjGM7E7FStVppBEAc0u489E=/0x0:2040x1360/1400x1400/filters:focal(1020x680:1021x681)/cdn.vox-cdn.com/uploads/chorus_asset/file/13272937/jbareham_181012_2989_0549.jpg'),
('IPHONE ', 'https://pngimg.com/d/iphone_14_PNG12.png'),
('Speaker', 'https://i.pinimg.com/736x/eb/3c/91/eb3c9128c1300cd4588fa4d3fa4e9dd6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE IF NOT EXISTS `contact_form` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`name`, `email`, `phone`, `message`) VALUES
('Pratham', 'smitrami@outlook.com', 2147483647, 'SDFSDF'),
('', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `repair_req`
--

DROP TABLE IF EXISTS `repair_req`;
CREATE TABLE IF NOT EXISTS `repair_req` (
  `product` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `damage` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `userid` int NOT NULL,
  `reqid` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`reqid`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `repair_req`
--

INSERT INTO `repair_req` (`product`, `name`, `email`, `address`, `damage`, `userid`, `reqid`) VALUES
('Android-Phone', 'galaxy a51', 'hrishabh@email.com', '15 samarat nagat society ', 'internal', 11, 17),
('IPHONE', 'iphone 15', 'hrishabh@email.com', '15 samarat nagat society ', 'external', 11, 18);

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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `pincode`, `password`, `id`) VALUES
('pratham', 'smitrami@outlook.com', 380063, '1234', 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
