-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 08:32 AM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 1, 'Apple', 102, 'Fruits', 'p1.jpg', 'Apple'),
(2, 1, 1, 'Orange', 175, 'fruits', 'p2.jpg', 'Orange'),
(3, 1, 1, 'grape', 95, 'fruits\r\n', 'p3.jpg', 'Grape'),
(4, 1, 1, 'Banana', 62, 'Fruits', 'p4.jpg', 'Banana'),
(5, 1, 1, 'Mango', 180, 'fruits', 'p5.jpg', 'Mango'),
(6, 1, 1, 'Potato', 31, 'Vegetables', 'p6.jpg', 'Potato'),
(7, 1, 1, 'Onion', 80, 'Vegetable', 'p7.jpg', 'Onion'),
(8, 1, 1, 'Tomato', 40, 'Vegetable', 'p8.jpg', 'Tomato'),
(9, 1, 1, 'Chilli', 100, 'Vegetable', 'p9.jpg', 'chilli'),
(10, 1, 1, 'Coriander leaf', 80, 'Vegetable', 'p10.jpg', 'Coriander leaf'),
(11, 2, 2, 'Ispahani Mirjapur Tea', 210, 'Tea', 'p11.jpg', 'tea'),
(12, 2, 3, 'Nestle Nescafe', 495, 'Coffee', 'p12.jpg', 'Coffee'),
(13, 2, 3, 'Nestlé Nesfruta', 120, 'Juice', 'p13.jpg', 'Juice'),
(14, 2, 4, 'Pepsi Diet Soft Drinks', 40, 'Soft Drinks', 'p14.jpg', 'Soft Drinks'),
(15, 2, 4, 'Aquafina Drinking Water', 15, 'Drinking Water', 'p15.jpg', 'Drinking Water'),
(16, 3, 5, 'Beef Regular', 600, 'Meat', 'p16.jpg', 'Meat'),
(17, 3, 5, 'Whole Broiler Chicken', 170, 'Chicken', 'p17.jpg', 'Chicken'),
(18, 3, 5, 'Mutton Regular', 800, 'Mutton', 'p18.jpg', 'mutton'),
(19, 3, 5, 'Duck with Skin', 700, 'duck', 'p19.jpg', 'duck'),
(20, 3, 5, 'Cow Liver', 800, 'liver', 'p20.jpg', 'liver'),
(21, 3, 5, 'Dried Fish', 1300, 'Fish', 'p21.jpg', 'Fish'),
(22, 3, 5, 'Rupchada Fish', 100, 'Fish', 'p22.jpg', 'Fish'),
(23, 3, 5, 'Koral Fish', 800, 'fish', 'p23.jpg', 'fish'),
(24, 3, 5, 'Prawn Fish', 900, 'fish', 'p24.jpg', 'fish'),
(25, 3, 5, 'Rui Fish', 800, 'fish', 'p25.jpg', 'fish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
