-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2021 at 08:58 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compassplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `saved_rides`
--

CREATE TABLE `saved_rides` (
  `id` int(11) NOT NULL,
  `fb_uid` int(11) NOT NULL,
  `ride_name` varchar(100) NOT NULL,
  `ride_location` varchar(100) NOT NULL,
  `ride_type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saved_rides`
--

INSERT INTO `saved_rides` (`id`, `fb_uid`, `ride_name`, `ride_location`, `ride_type`) VALUES
(1, 0, 'asdsad', 'adsdads', 'bus');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fb_uid` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `avatar` blob,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fb_uid`, `first_name`, `last_name`, `email`, `password`, `avatar`, `age`) VALUES
(1, 0, 'sadasdsa', 'asdsad', 'asdasd', 'asdasd', NULL, 12),
(2, 0, 'willy', 'alvarez', NULL, NULL, NULL, 23),
(3, 0, 'willy', 'alvarez', NULL, NULL, NULL, 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `saved_rides`
--
ALTER TABLE `saved_rides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `saved_rides`
--
ALTER TABLE `saved_rides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
