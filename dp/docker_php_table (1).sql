-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: May 01, 2024 at 03:22 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_docker`
--

-- --------------------------------------------------------

--
-- Table structure for table `docker_php_table`
--

CREATE TABLE `docker_php_table` (
  `std_num` int NOT NULL,
  `std_name` varchar(20) NOT NULL,
  `std_id` int NOT NULL,
  `age` int NOT NULL,
  `cgpa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `docker_php_table`
--

INSERT INTO `docker_php_table` (`std_num`, `std_name`, `std_id`, `age`, `cgpa`) VALUES
(1, 'Nahed Refaay', 22010280, 20, 3.5),
(2, 'Shahd Ragab', 22010352, 20, 3.5),
(3, 'Jomana Esmat', 22010327, 20, 3.5),
(4, 'Ghada Essam', 22010179, 20, 3.5),
(5, 'Aya Mohamed', 22010065, 20, 3.3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docker_php_table`
--
ALTER TABLE `docker_php_table`
  ADD PRIMARY KEY (`std_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
