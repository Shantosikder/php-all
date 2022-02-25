-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 08:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hometest`
--

-- --------------------------------------------------------

--
-- Table structure for table `idbstudentinfo`
--

CREATE TABLE `idbstudentinfo` (
  `id` varchar(10) NOT NULL,
  `fristname` varchar(15) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idbstudentinfo`
--

INSERT INTO `idbstudentinfo` (`id`, `fristname`, `lastname`, `email`, `phone`) VALUES
('01', 'shanto', 'sikder', 'shantosikder77@gmail.com', '01799541685'),
('02', 'Amzad', 'Kaka', 'amzadkak@gmail.com', '0398482482'),
('03', 'Nabail', 'Ranhman', 'rhamannail@gmail.com', '29319578099'),
('04', 'Hidoy', 'Rana', 'hidoyranan@gmail.com', '017924928478'),
('05', 'Asraful', 'Islam', 'asrafulislam@gmail.com', '01984724872');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `idbstudentinfo`
--
ALTER TABLE `idbstudentinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
