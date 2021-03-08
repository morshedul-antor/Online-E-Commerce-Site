-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 05:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_person`
--

CREATE TABLE `delivery_person` (
  `delivery_person_id` int(100) NOT NULL,
  `delivery_person_name` varchar(100) NOT NULL,
  `delivery_person_email` varchar(100) NOT NULL,
  `delivery_person_nid` int(100) NOT NULL,
  `delivery_person_photo` varchar(100) NOT NULL,
  `delivery_person_phone` int(100) NOT NULL,
  `delivery_person_password` varchar(100) NOT NULL,
  `delivery_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_person`
--

INSERT INTO `delivery_person` (`delivery_person_id`, `delivery_person_name`, `delivery_person_email`, `delivery_person_nid`, `delivery_person_photo`, `delivery_person_phone`, `delivery_person_password`, `delivery_id`) VALUES
(1, 'diti', 'diti@gmail.com', 123456, 'diti.jpg', 1234567890, '2612', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery_person`
--
ALTER TABLE `delivery_person`
  ADD PRIMARY KEY (`delivery_person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery_person`
--
ALTER TABLE `delivery_person`
  MODIFY `delivery_person_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
