-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2026 at 03:10 PM
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
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `question_1` varchar(255) NOT NULL,
  `question_2` varchar(255) NOT NULL,
  `question_3` varchar(255) NOT NULL,
  `question_4` varchar(255) NOT NULL,
  `question_5` varchar(255) NOT NULL,
  `question_6` varchar(255) NOT NULL,
  `question_7` varchar(255) NOT NULL,
  `question_8` varchar(255) NOT NULL,
  `question_9` varchar(255) NOT NULL,
  `question_10` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `question_7`, `question_8`, `question_9`, `question_10`, `created_at`) VALUES
(8, 'What is PHP and what are its primary uses', 'What is the difference between echo and print', 'Explain the difference between include and require statements', 'What are PHP \"superglobals', 'How do you handle form validation and data security in PHP', 'What are sessions and cookies, and how do they differ', 'Explain the concepts of Object-Oriented Programming (OOP) in PHP', 'What are Namespaces and why are they important?', 'What is Composer in PHP?', 'How do you connect to a database using PHP?', '2026-02-14 04:46:59');

-- --------------------------------------------------------

--
-- Table structure for table `exam2`
--

CREATE TABLE `exam2` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `exam_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `answer_1` text DEFAULT NULL,
  `answer_2` text DEFAULT NULL,
  `answer_3` text DEFAULT NULL,
  `answer_4` text DEFAULT NULL,
  `answer_5` text DEFAULT NULL,
  `answer_6` text DEFAULT NULL,
  `answer_7` text DEFAULT NULL,
  `answer_8` text DEFAULT NULL,
  `answer_9` text DEFAULT NULL,
  `answer_10` text DEFAULT NULL,
  `stname` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam2`
--

INSERT INTO `exam2` (`id`, `student_id`, `exam_date`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `answer_5`, `answer_6`, `answer_7`, `answer_8`, `answer_9`, `answer_10`, `stname`) VALUES
(1, 'subham singh', '2026-02-15 15:58:51', 'a php is a server site programing language use for backend ', 'echo is use to print anything but print is use to print the array or object ', 'inclue will not stop your file but requear will ', 'use for mnuplations', 'use require ot session', 'both are slithly same ', 'parent class and child classs', 'idk', 'idk', 'using pdo or mysqlui function', NULL);

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
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam2`
--
ALTER TABLE `exam2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_student` (`student_id`),
  ADD KEY `idx_date` (`exam_date`);

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
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `exam2`
--
ALTER TABLE `exam2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

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
