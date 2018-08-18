-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 18, 2018 at 12:59 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `staff_id` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `staff_unit` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `staff_unit_id` varchar(50) DEFAULT NULL,
  `user_id` int(225) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `phone`, `staff_id`, `email`, `name`, `staff_unit`, `branch`, `staff_unit_id`, `user_id`) VALUES
(1, '08038385263', '00001', 'evensatowind@gmail.com', 'Ogugua Tochukwu', 'Gods Eye', '24', '5', 1),
(7, '08011111111', '00002', 'info@citycybersolutions.com', 'God Eye', 'Gods Eye', '1', NULL, 8),
(8, '080383852631', '00003', 'evensatowind@yahoo.comz', 'God Eyes', NULL, '1', NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `passport` varchar(50) DEFAULT NULL,
  `cover` text,
  `resume` varchar(50) DEFAULT NULL,
  `application_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `title`, `first_name`, `surname`, `email`, `phone`, `passport`, `cover`, `resume`, `application_date`) VALUES
(1, 'Mr', 'Ogugua', 'Tochukwu', 'info@optisoft.ng', '1111111111', NULL, '1111111111111', '15345920221.pdf', '2018-08-18 11:33:42'),
(2, 'Mr', 'Ogugua', 'Tochukwu', 'info@optisoft.ng', '1111111111', NULL, '1111111111111', '15345920551.pdf', '2018-08-18 11:34:15'),
(3, 'Mr', 'Ogugua', 'Tochukwu', 'info@optisoft.ng', '11111111111', NULL, '11111111111', '15345923491.pdf', '2018-08-18 11:39:09'),
(4, 'Mr', 'Ogugua', 'Tochukwu', 'info@optisoft.ng', '111111111111', '15345926261.jpeg', '111111111111', '15345926261.pdf', '2018-08-18 11:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` bigint(20) NOT NULL,
  `ipadress` varchar(255) NOT NULL,
  `day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `ipadress`, `day`, `date`) VALUES
(1, '::1', '2018-05-10 10:48:30', '2018-05-10'),
(2, '127.0.0.1', '2018-05-10 12:39:40', '2018-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `lga` varchar(30) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `bet9ja_id` varchar(40) DEFAULT NULL,
  `bet9ja_code` varchar(40) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `dob` varchar(25) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `surname`, `firstname`, `email`, `phone`, `gender`, `address`, `street`, `state`, `lga`, `branch`, `bet9ja_id`, `bet9ja_code`, `user_id`, `dob`, `created_at`, `flag`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'owan west', 'branch 2', 'bet1234', '1234', NULL, NULL, '2018-05-28 10:15:59', '1'),
(2, 'Ogugua', 'Tochukwu', 'evensatowind@gmail.com', '08038385263', 'male', '46 marina', NULL, 'Akwa Ibom State', 'Mbo', 'virtual branch', '1111111111', NULL, 11, '2018-05-03', '2018-06-05 17:10:25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  `flag` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `username`, `password`, `status`, `flag`) VALUES
(1, '1', 'Satowind', '$2y$10$fhMAVAB4f.vSaVOvHfEAoO/QffN5sr//IQwTiEukia4p3kRaKILL6', '2', '1'),
(8, '1', 'GodEye', '$2y$10$fE6PbjFrKXD0ibHnrGV2Keu/QOrNpADT6sdPH/tGq9DdLBoj41PS.', '2', '1'),
(9, '1', 'obiike', '$2y$10$n5O0PkM55jSCxznaOx3qj.77XjyeX1Kc/MKB8noVfT/hyszk9oSyO', '2', '1'),
(11, '2', 'satowindz', '$2y$10$fhMAVAB4f.vSaVOvHfEAoO/QffN5sr//IQwTiEukia4p3kRaKILL6', '1', '1'),
(14, '2', 'root', '$2y$10$Lz5prswXqE1vVRIsYnName.79cKqqZQfWspDEBv0eMhS0QxGTT0NS', '2', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `staff_unit_id` (`staff_unit_id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
