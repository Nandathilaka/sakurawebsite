-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 08:32 AM
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
-- Database: `sakurathaladb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(100) NOT NULL,
  `admin_fname` varchar(50) NOT NULL,
  `admin_lname` varchar(50) NOT NULL,
  `admin_contact` varchar(10) NOT NULL,
  `admin_nic` varchar(15) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(60) NOT NULL,
  `admin_photo` varchar(100) NOT NULL,
  `admin_createdDtm` varchar(20) NOT NULL,
  `admin_createdBy` int(100) NOT NULL,
  `admin_isDeleted` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_fname`, `admin_lname`, `admin_contact`, `admin_nic`, `admin_email`, `admin_password`, `admin_photo`, `admin_createdDtm`, `admin_createdBy`, `admin_isDeleted`) VALUES
(8, 'Milan', 'Peris', '0714273430', '805643967V', 'milan@gmail.com', 'c5983e484db0b621516387b3e50af84020b214c0', '', '2017-12-14 13:33:25', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Gingerly rolls'),
(2, 'Gingerly balls'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

CREATE TABLE `customer_registration` (
  `regId` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `userName` varchar(250) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`regId`, `firstName`, `lastName`, `userName`, `password`) VALUES
(1, 'dharana', 'weerawrana', 'dwnadeeshan@gmail.com', 'f7c3bc1d80'),
(2, 'dharana', 'nadeeshan', 'dwnadeeshan@hotmail.com', 'f7c3bc1d80'),
(3, 'lahiru', 'perera', 'hashanlahiru6@gmail.com', 'bfe54caa6d'),
(10, 'csadcsdcs', 'cdscsdcsd', 'cdscsdcsdc@gajsj.colcm', 'a74aec849c'),
(11, 'vrevev', 'vrevreverv', 'revreverv@ganamn.ckjd', 'b0399d2029'),
(12, 'cecsdc', 'cascac', 'cascac@cdscs.vre', 'b0399d2029'),
(13, 'Hirunika', 'Karunathilaka', 'hirukarunathilaka@gmail.com', '3a2f8d14de'),
(14, 'sumudu', 'dileepa', 'sumudu@gmail.com', 'f7c3bc1d80');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `category_id` int(10) NOT NULL,
  `product_quantity` varchar(1000) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_discount` int(100) NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_key` varchar(200) NOT NULL,
  `product_addedDtm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `category_id`, `product_quantity`, `product_price`, `product_discount`, `product_desc`, `product_image`, `product_key`, `product_addedDtm`) VALUES
(3, 'Sakura Gingerly Rolls', 1, '100g', 50, 0, 'Tasteful healthy gingerly rolls', 'roll_10ps.jpg', 'roll', '2017-10-26 07:16:18'),
(4, 'Sakura Gingerly Balls 100g', 2, '100g', 100, 0, 'Tasteful & healthy gingerly balls 100g', 'ball_100g.jpg', 'ball', '2017-10-26 07:26:33'),
(5, 'Sakura Gingerly Rolls 25 pack', 1, '25', 150, 0, 'Tasty gingerly rolls 25 pack', 'roll_25ps.jpg', 'roll', '2017-10-26 07:28:51'),
(6, 'Sakura Gingerly Balls 150g', 2, '150g', 100, 0, 'Tasty gingerly balls 150g', '', 'ball', '2017-10-26 07:41:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer_registration`
--
ALTER TABLE `customer_registration`
  ADD PRIMARY KEY (`regId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_cat` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer_registration`
--
ALTER TABLE `customer_registration`
  MODIFY `regId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_cat` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
