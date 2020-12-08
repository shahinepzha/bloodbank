-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 07:59 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `bgroup`
--

CREATE TABLE `bgroup` (
  `id` int(11) NOT NULL,
  `bgroup` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgroup`
--

INSERT INTO `bgroup` (`id`, `bgroup`) VALUES
(6, 'A+'),
(8, 'AB+'),
(7, 'B+'),
(9, 'o+');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `bid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `district` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `bgroup` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `request` varchar(25) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`bid`, `name`, `dob`, `district`, `email`, `phoneno`, `bgroup`, `username`, `password`, `gender`, `request`) VALUES
(3, 'akhil', '1994-07-25', 'kollam', 'akhil@gmail.com', '987456321', 'AB+', 'akhil', 'akhil', 'male', 'confirmed'),
(4, 'reshma', '1994-07-03', 'palakkad', 'reshmajose3794@gmail.com', '9065478965', 'B+', 'reshma', 'reshma', 'female', 'confirmed'),
(5, 'v bn', '1994-07-03', 'palakkad', 'reshmajose3794@gmail.com', '2147483647', 'AB-', 'hh', 'bb', 'female', 'confirmed'),
(7, 'akhil', '0000-00-00', 'calicut', 'a@gmail.com', '7896541230', 'O+', 'a123', 'asdfg', 'male', 'confirmed'),
(8, 'minu', '1989-06-21', 'palakkad', 'm@gmail.com', '7896541230', 'B+', 'm123', 'mm', 'female', 'confirmed'),
(9, 'reshmin', '1989-06-21', 'calicut', 'a@gmail.com', '7896541230', 'O+', 'r123', 'qwerty', 'male', 'pending'),
(10, 'anu', '1989-06-21', 'calicut', 'a@gmail.com', '7896541230', 'O+', 'a123', 'qwerty', 'female', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `usertype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin'),
(20, 'reshma', 'reshma', 'donor'),
(22, 'hh', 'bb', 'donor'),
(25, 'a123', 'asdfg', 'donor'),
(26, 'm123', 'mm', 'donor'),
(27, 'r123', 'qwerty', 'donor'),
(28, 'a123', 'qwerty', 'donor');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `bid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `rdate` date NOT NULL,
  `email` varchar(25) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `bgroup` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `request` varchar(25) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`bid`, `name`, `rdate`, `email`, `phoneno`, `bgroup`, `gender`, `request`) VALUES
(4, 'rose', '1994-03-02', 'rose@gmail.com', '2147483647', 'AB-', 'female', 'accepted'),
(5, '   ', '0000-00-00', '', '', '---select---', '---select---', 'pending'),
(6, '     ', '0000-00-00', '', '', '---select---', '---select---', 'pending'),
(7, 'arun', '0000-00-00', 'm@gmail.com', '7896541230', 'O+', 'male', 'pending'),
(8, 'rahul', '2000-10-12', 'm@gmail.com', '7896541230', 'AB+', 'male', 'accepted'),
(9, 'vikram', '2000-10-12', 'm@gmail.com', '7896541230', 'AB+', 'male', 'pending'),
(10, 'ttt', '2000-10-11', 'a@gmail.com', '123345', 'B+', 'male', 'pending'),
(11, 'maneesh', '1989-12-06', 'm@gmail.com', '7896541230', 'O+', 'male', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bgroup`
--
ALTER TABLE `bgroup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bgroup` (`bgroup`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bgroup`
--
ALTER TABLE `bgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
