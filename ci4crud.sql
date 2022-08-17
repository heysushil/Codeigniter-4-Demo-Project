-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 06:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(8) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `note` int(1) NOT NULL COMMENT '1: Super Admin\r\n2: Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `type`, `note`) VALUES
(1, NULL, 'Admin', 0),
(2, NULL, 'Admin', 0),
(3, 'Admin', 'Admin', 0),
(4, 'Admin', 'Admin', 0),
(5, '', '', 0),
(6, '', '', 0),
(7, 'qqqqq', 'kkk', 0),
(8, 'qqqqq', 'kkk', 0),
(9, 'qqqqq', 'kkk', 0),
(10, 'Team 1', 'aaaa', 0),
(11, 'Team 2aaaa', 'aaaa', 0),
(12, 'Team 2aaaa', 'qqqqq', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `name` varchar(100) NOT NULL COMMENT 'Name',
  `email` varchar(255) NOT NULL COMMENT 'Email Address'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`) VALUES
(2, '', ''),
(4, 'Kumar', 'sushil@abc.com'),
(5, 'Kumar', 'sushil@abc.com'),
(6, 'Kumar', 'sushil@abc.com'),
(7, 'Kumar', 'sushil@abc.com'),
(8, 'Kumar', 'sushil@abc.com'),
(9, 'Chaudhary', 'chaudhary@sushil.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `name` varchar(100) NOT NULL COMMENT 'Name',
  `email` varchar(255) NOT NULL COMMENT 'Email Address',
  `contact_no` varchar(50) NOT NULL COMMENT 'Contact No',
  `created_at` varchar(20) NOT NULL COMMENT 'Created date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact_no`, `created_at`) VALUES
(7, 'Manager Mahabali', 'manager@test.com', '9000000007', '2019-01-07'),
(8, 'John', 'john@test.com', '9000000055', '2019-01-08'),
(9, 'Merry', 'merry@test.com', '9000000088', '2019-01-09'),
(10, 'Keliv', 'kelvin@test.com', '9000550088', '2019-01-10'),
(11, 'Herry', 'herry@test.com', '9050550088', '2019-01-11'),
(12, 'Mark', 'mark@test.com', '9050550998', '2019-01-12'),
(13, 'Admin', 'sushil@neuailes.com', '', ''),
(14, 'Admin', 'sushil@neuailes.com', '', ''),
(15, 'Team 2', 'sushil@neuailes.com', '', ''),
(16, 'Team 2', 'sushil@neuailes.com', '', ''),
(17, 'Team 2', 'sushil@neuailes.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
