-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2024 at 11:24 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`) VALUES
(2, 'labubu', 'labubu@mail.com', '$2y$10$ypCvaNwag9KxavCkR9rU8eOQeazSJN4HIarDgHejeJIkWGTVyqX9e'),
(3, 'labucin', 'labucin@mail.com', '$2y$10$UW6GcjPuSa0QrOyObmGYDOUNhNt4bhjhH5Dsdks4hb.X2KJoUINOO'),
(4, 'user1', 'user1@mail.com', '$2y$10$uWibMF7WYy7JT0dUyc2F3uHlZI8Bsvu3LOofO5IbKm2zBs8rjuoG2'),
(5, 'neko', 'neko@gmail.com', '$2y$10$19qDFS7KlQrNDR.d8ddxVe4JeXmw/F86MTQrI5SWbpgdatuYi3HCC'),
(6, 'kuwapica', 'kuwapica@mail.com', '$2y$10$t7AmPGJO5UvhCkdFnYYyrOmk6FSoYGHhxEFweGnX0dqH3//BHpf1e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
