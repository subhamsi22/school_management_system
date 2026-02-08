-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2026 at 03:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `schoolstu`
--

CREATE TABLE `schoolstu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tex` varchar(300) DEFAULT NULL,
  `messag` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schoolstu`
--

INSERT INTO `schoolstu` (`id`, `name`, `email`, `tex`, `messag`) VALUES
(1, 'jghk', 'ghjghjgjgjfgj', 'jhkhkghkgkgk', 'ghkkghk'),
(2, 'subham singh', 'sanjusinghkk3498@gmail.com', 'thuh', 'vd,fvhk,jfgvn'),
(3, 'subham', 'sanjusinghkk3498@gmail.com', 'i want to know more', 'hello sir this is abc and i want to know more about your service and charges i am from abc school in abc and we want a good school management servcies');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(244) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `pass`) VALUES
(1, 'subhamsi', 'yoyokk');

-- --------------------------------------------------------

--
-- Table structure for table `studet`
--

CREATE TABLE `studet` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studet`
--

INSERT INTO `studet` (`id`, `name`, `age`, `address`, `class`) VALUES
(1, 'ghfh', 'fghfgh', 'fghfh', 'hfgh'),
(2, 'SUBHAM SINGH', '23', '60FT BYE ASANSOL', 'BCA(H)'),
(3, 'GHJ', '435', 'gdfgh', 'cfgffdg'),
(4, 'sanju singh', '24', '60FT BYE ASANSOL', 'bba(h)'),
(5, 'fghfhfghfgh', '34', 'fghgfh', '3'),
(6, 'GHJ', '56', 'J', '4'),
(7, 'sbfjsgf', '33', 'sdfwr345re', '3');

-- --------------------------------------------------------

--
-- Table structure for table `techdet`
--

CREATE TABLE `techdet` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `techdet`
--

INSERT INTO `techdet` (`id`, `name`, `age`, `adress`, `class`) VALUES
(1, 'subham', '24', '60 ft bye padd road', 'science'),
(2, 'sanju singh', '24', '60 ft bye padd road', 'arts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schoolstu`
--
ALTER TABLE `schoolstu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studet`
--
ALTER TABLE `studet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `techdet`
--
ALTER TABLE `techdet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schoolstu`
--
ALTER TABLE `schoolstu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `studet`
--
ALTER TABLE `studet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `techdet`
--
ALTER TABLE `techdet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
