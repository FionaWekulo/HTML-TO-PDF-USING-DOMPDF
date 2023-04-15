-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 03:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `information`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phonenumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `phonenumber`) VALUES
('Fiona Abigael Wekulo', 'fionawekulo@gmail.com', '0794802072'),
('Fiona Abigael Wekulo', 'fionawekulo@gmail.com', '0794802072'),
('Agnes Nanjala Wekesa', 'aggynajala@gmail.com', '0723812796'),
('Gerald Wekesa', 'gera@gmail.com', '0707492112'),
('Constantine Swachi', 'constantineswachi@gmail.com', '0115123323'),
('Debi teloori', 'fionawekulo@gmail.com', '0794802072'),
('Fiona Abigael Wekulo', 'fionawekulo@gmail.com', '+254794802072'),
('john', 'ndungu.murimi@gmail.com', '0713564851'),
('Debi teloori', 'debiteloori@gmail.com', '0723812796');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
