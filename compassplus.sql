-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2021 at 10:20 PM
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
-- Table structure for table `bus_ticket`
--

CREATE TABLE `bus_ticket` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `fb_uid` varchar(100) DEFAULT NULL,
  `concession` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bus_ticket`
--

INSERT INTO `bus_ticket` (`id`, `type`, `fb_uid`, `concession`, `time`) VALUES
(1, 'DayPassAdult', '', '#146593', '24h'),
(2, 'DayPassConcession', '', '#E27F35', '24h'),
(3, '1ZoneAdult', '', '#146593', '90m'),
(4, '1ZoneConcession', '', '#E27F35', '90m'),
(5, '2ZoneAdult', '', '#146593', '90m'),
(6, '2ZoneConcession', '', '#E27F35', '90m'),
(7, '3ZoneAdult', '', '#146593', '90m'),
(8, '3ZoneConcession', '', '#E27F35', '90m');

-- --------------------------------------------------------

--
-- Table structure for table `compass_card`
--

CREATE TABLE `compass_card` (
  `id` int(11) NOT NULL,
  `fb_uid` varchar(100) NOT NULL,
  `balance` decimal(10,0) NOT NULL,
  `monthly` bit(1) NOT NULL,
  `compass_card_number` int(20) NOT NULL,
  `cvn` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `saved_locations`
--

CREATE TABLE `saved_locations` (
  `id` int(11) NOT NULL,
  `fb_uid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saved_locations`
--

INSERT INTO `saved_locations` (`id`, `fb_uid`, `name`, `location`) VALUES
(1, 'asdsad', 'home', 'getUserAdress'),
(2, 'sdasd', 'asdasd', 'asdsad'),
(3, 'Home', '1529 W Pender St', 'Vancouver'),
(4, 'Home2', '1529 W Pender S2t', 'Vancouver'),
(5, 'Hom3e2', '1529 W Pender S23t', 'Vancouver'),
(6, 'Hom3e2', '1529 W Pender S23t', 'Vancouver'),
(7, 'Hom3e2', '1529 W Pender S23t', 'Vancouver'),
(8, 'sfdsadsad2223', 'Hom3e2', '1529 W Pender S23t');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fb_uid` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fb_uid`, `first_name`, `age`) VALUES
(1, 'asdasd', 'sadsad', 21),
(2, 'asdasd', 'sadsad', 21),
(3, '0', 'willy', 23),
(4, 'asdsadasd', 'willy', 23),
(5, 'ZKqG0ZUQ7YXnddRyVMfXpXPwqc53', 'Fred', 20),
(6, 'asdsadasd', 'brandon', 23),
(7, 'QwtPBClKPvfgVTAx31Nhg5t30Yp2', 'Fred', 20),
(8, '8TlzDqFP7NhIWFfRO29e77gFEDh1', 'Ben', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_ticket`
--
ALTER TABLE `bus_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compass_card`
--
ALTER TABLE `compass_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saved_locations`
--
ALTER TABLE `saved_locations`
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
-- AUTO_INCREMENT for table `bus_ticket`
--
ALTER TABLE `bus_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `saved_locations`
--
ALTER TABLE `saved_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
