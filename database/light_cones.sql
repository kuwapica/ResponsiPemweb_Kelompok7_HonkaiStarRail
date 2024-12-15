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
-- Table structure for table `light_cones`
--

CREATE TABLE `light_cones` (
  `id_lc` int NOT NULL,
  `name` varchar(55) NOT NULL,
  `point` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `light_cones`
--

INSERT INTO `light_cones` (`id_lc`, `name`, `point`) VALUES
(1, 'adversarial', 800),
(2, 'amber', 800),
(3, 'chorus', 800),
(4, 'collapsing sky', 800),
(5, 'cornucopia', 800),
(6, 'void', 800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `light_cones`
--
ALTER TABLE `light_cones`
  ADD PRIMARY KEY (`id_lc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
