-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 04:34 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atplara`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderproduct`
--

CREATE TABLE `orderproduct` (
  `opId` int(100) NOT NULL,
  `opName` varchar(100) NOT NULL,
  `opQuantity` int(255) NOT NULL,
  `opPrice` float(10,2) NOT NULL,
  `opTotalPrice` float(10,2) NOT NULL,
  `opUser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderproduct`
--

INSERT INTO `orderproduct` (`opId`, `opName`, `opQuantity`, `opPrice`, `opTotalPrice`, `opUser`) VALUES
(1, 'Chocolate Wafer', 3, 60.00, 180.00, 'akil'),
(2, 'Apples', 4, 220.00, 880.00, 'akil');

-- --------------------------------------------------------

--
-- Table structure for table `orderr`
--

CREATE TABLE `orderr` (
  `orderId` int(100) NOT NULL,
  `product` varchar(1000) NOT NULL,
  `address` varchar(100) NOT NULL,
  `total` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderr`
--

INSERT INTO `orderr` (`orderId`, `product`, `address`, `total`, `username`, `date`) VALUES
(1, 'sd', 'd', 34, 'sd', '2018-04-03'),
(2, 'Apples  Baby Carrots  Baby Carrots', 'a@g', 1260, 'a', '2018-04-05'),
(3, 'Apples  Baby Carrots  Baby Carrots  Beetroot  Bacon', 'a@g', 9120, 'a', '2018-04-27'),
(4, 'Beetroot', 'a@g', 160, 'a', '2018-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productUnit` varchar(100) NOT NULL,
  `productPrice` float(10,2) NOT NULL,
  `productDescription` text NOT NULL,
  `productImage` varchar(300) NOT NULL,
  `productCatagory` varchar(100) NOT NULL,
  `productType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `productUnit`, `productPrice`, `productDescription`, `productImage`, `productCatagory`, `productType`) VALUES
(5, 'Chocolate Wafer ', '280 gm', 60.00, 'Chocolate', 'dark chocolate.jpg', 'Bread & Bakery', 'underWeight'),
(6, 'Aloe-Vera', '1 pcs', 40.00, 'Aloe-Vera', 'aloe-vera-1-pcs-aloe-vera-1-pc.webp', 'Fruits & Vegetables', 'overWeight'),
(7, 'Apples', '1 kg', 220.00, 'apple', 'apples.jpg', 'Fruits & Vegetables', 'underWeight'),
(8, 'asparagus', '12 pcs', 65.00, 'asparagus', 'asparagus.jpg', 'Fruits & Vegetables', 'normalWeight'),
(9, 'Baby Carrots', '1 kg', 80.00, 'carrots', 'Baby_Carrots.jpg', 'Fruits & Vegetables', 'underWeight'),
(10, 'baby-corn', '1kg', 120.00, 'baby-corn', 'baby-corn-1-packet-550-gm.webp', 'Fruits & Vegetables', 'underWeight'),
(11, 'Bacon', '280 gm', 340.00, 'bacon', 'bacon.jpg', 'Meat & Fish', 'underWeight'),
(12, 'baim-fish', '250gm', 220.00, 'baim-fish', 'baim-fish-medium-500-gm.webp', 'Meat & Fish', 'underWeight'),
(13, 'Banana', '12 pcs', 30.00, 'Banana', 'Banana.jpg', 'Fruits & Vegetables', 'normalWeight'),
(14, 'Beans', '1 kg', 150.00, 'Beans', 'beans.jpg', 'Fruits & Vegetables', 'overWeight'),
(15, 'Beetroot', '4 pcs', 40.00, 'beetroot-', 'beetroot-net-weight-20-gm-500-gm.webp', 'Fruits & Vegetables', 'underWeight'),
(16, 'Potato', '1 kg', 20.00, 'potato-', 'big-potato-net-weight-50-gm-1-kg.webp', 'Fruits & Vegetables', 'normalWeight'),
(17, 'BlueBerry', '250gm', 180.00, 'BlueBerry', 'blueberry.jpg', 'Fruits & Vegetables', 'normalWeight'),
(18, 'bombay-chili', '250gm', 35.00, 'bombay-chili', 'bombay-chili-5-pcs-bombay-chili.webp', 'Fruits & Vegetables', 'underWeight'),
(19, 'Bread', '1 packet', 35.00, 'Bread', 'Bread.jpg', 'Bread & Bakery', 'normalWeight');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `userName`, `password`, `email`, `firstName`, `lastName`, `type`) VALUES
(16, 'sabbir', '123', 'sabbir.biam@gmail.com', 'Sabbir', 'Ahmed', 'admin'),
(17, 'user', 'user', 'user@user.com', 'user', 'user', 'user'),
(18, 'admin', 'admin', 'admin@admin.com', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderr`
--
ALTER TABLE `orderr`
  MODIFY `orderId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
