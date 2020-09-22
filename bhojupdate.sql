-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 03:01 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhojupdate`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `mob_no` bigint(11) NOT NULL,
  `catogery_id` varchar(50) NOT NULL,
  `item_qty` int(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `customer_id`, `mob_no`, `catogery_id`, `item_qty`) VALUES
(37, 6, 9628216609, 'st2116sl1CB_sweet_burfi', 6),
(39, 1, 0, 'st2116sl1CB_sweet_burfi', 1),
(40, 1, 0, 'st2116sl1CB_sweets_cake', 6);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customer_id` int(200) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `mob_no` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customer_id`, `email_id`, `mob_no`, `password`) VALUES
(1, 'saurabhsrg19oct@gmail.com', 9140689288, 'bg142526'),
(2, 'mnandan05@gmail.com', 7619080706, '`233'),
(4, 'rajpootashish9598@gm', 9699363940, 's123456'),
(5, 'deepakdubey9936@gmai', 9794009527, 'A123456'),
(6, 'deepakdubey9936@gmail.com', 9628216609, '123456'),
(7, 'carnival@gmail.com', 9889123456, '123456'),
(8, 'dhga@gmail.com', 9889123457, '123456'),
(9, 'gfa@gmail.com', 9889123458, '123458');

-- --------------------------------------------------------

--
-- Table structure for table `food_info`
--

CREATE TABLE `food_info` (
  `id` int(200) NOT NULL,
  `item` varchar(50) NOT NULL,
  `rate` int(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `catogery` varchar(50) NOT NULL,
  `item_img` varchar(50) NOT NULL,
  `catogery_id` varchar(50) NOT NULL,
  `cuisine_name` varchar(50) NOT NULL,
  `reg_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_info`
--

INSERT INTO `food_info` (`id`, `item`, `rate`, `qty`, `catogery`, `item_img`, `catogery_id`, `cuisine_name`, `reg_no`) VALUES
(3, 'corn pizza', 346, 1, 'pizza', 'st2116sl36CRPRimg3.jpg', 'st2116sl36CR_pizza_corn pizza', 'pizza', 'st2116sl36CR'),
(5, 'burfi', 120, 1, 'sweets', 'st2116sl1CBPRimg6.jpg', 'st2116sl1CB_sweet_burfi', 'burfi', 'st2116sl1CB'),
(6, 'cake', 180, 1, 'sweets', 'st2116sl1CBPRimg5.jpg', 'st2116sl1CB_sweets_cake', 'cake', 'st2116sl1CB'),
(9, 'corn pizza', 180, 1, 'pizza', 'st2116sl1CBPRimg3.jpg', 'st2116sl1CB_pizza_cornpizza', 'pizza', 'st2116sl1CB');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `discount` int(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `shop_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `img` varchar(40) NOT NULL,
  `location` varchar(50) NOT NULL,
  `seller_mob_no` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `slpswd` varchar(20) NOT NULL,
  `shop_type` varchar(20) NOT NULL,
  `reg_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `img`, `location`, `seller_mob_no`, `email`, `slpswd`, `shop_type`, `reg_no`) VALUES
(35, 'abhinandan bakers', 'st2116sl1CBSPRimg1.png', 'gorakhnath', 9140352327, 'abhinandan@1234gmail.com', 'ab1234', 'Bakers', 'st2116sl1CB'),
(38, 'chaudhary restaurant', 'st2116sl36CRSPRimg2.png', 'vijay chauraha', 9889088707, 'chaudhary12@gmail.com', 'ch1234', 'Restaurants\r\n						', 'st2116sl36CR'),
(39, 'abshdxjdj', 'st2116sl39CRSPRimg1.png', 'basantpur', 9698595561, 'abdgdjksu@gmail.com', 'abs1234', 'Restaurants', 'st2116sl39CR'),
(40, 'Red Chilly', 'st2116sl40CRSPR', 'Buddh Vihar , Taramandal , Gorakhpur', 7619266255, 'redchillygkp@gmail.com', 'Red123', 'Restaurants', 'st2116sl40CR');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `locality` varchar(20) NOT NULL,
  `building_name` varchar(20) NOT NULL,
  `alternate_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `name`, `locality`, `building_name`, `alternate_no`) VALUES
(1, 'Deepak Dubey', 'Golghar ', 's1234', 8355067460);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(45) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(89) NOT NULL,
  `mobile` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `mobile`, `email`) VALUES
(3, 'Deepak Dubey', 'deepak@123', '', 'deepakdubey9936@gmail.com'),
(4, 'Admin', 'Admin', '', 'admin123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(20) NOT NULL,
  `customer_id` int(200) NOT NULL,
  `mob_no` bigint(10) NOT NULL,
  `catogery_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `customer_id`, `mob_no`, `catogery_id`) VALUES
(15, 6, 9628216609, 'st2116sl1CB_sweets_cake');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `food_info`
--
ALTER TABLE `food_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `customer_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `food_info`
--
ALTER TABLE `food_info`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
