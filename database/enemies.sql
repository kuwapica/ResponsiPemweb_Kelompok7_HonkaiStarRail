-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2024 at 11:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb_hsr`
--

-- --------------------------------------------------------

--
-- Table structure for table `enemies`
--

CREATE TABLE `enemies` (
  `id_enemy` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `point` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `enemies`
--

INSERT INTO `enemies` (`id_enemy`, `name`, `point`) VALUES
(1, 'cocolia', 6000),
(2, 'ebon', 6000),
(3, 'borisin', 6000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enemies`
--
ALTER TABLE `enemies`
  ADD PRIMARY KEY (`id_enemy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enemies`
--
ALTER TABLE `enemies`
  MODIFY `id_enemy` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
