-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
      `quantity` double(10,2) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`,`quantity`) VALUES
(1, 'fiction', 'landing', 152.00, './assets/products/book1.png', '2020-03-28 11:08:57', 20), -- NOW()
(2, 'non-fiction', 'Attachments', 122.00, './assets/products/book3.png', '2020-03-28 11:08:57', 20),
(3, 'fiction', 'Kites', 122.00, './assets/products/4.png', '2020-03-28 11:08:57', 20),
(4, 'non-fiction', 'Holding up universe', 122.00, './assets/products/b10.png', '2020-03-28 11:08:57', 0),

(5, 'non-fiction', 'Holding up universe', 122.00, './assets/products/b10.png', '2020-03-28 11:08:57', 0),
(6, 'fiction', 'Eleanor $ Park', 122.00, './assets/products/book4.png', '2020-03-28 11:08:57', 20),
(7, 'Arts', 'The art foger', 122.00, './assets/products/b5.png', '2020-03-28 11:08:57', 19),
(8, 'Horror', 'Goosebumps 1', 122.00, './assets/products/b8.png', '2020-03-28 11:08:57', 20),
(9, 'Horror', 'Goosebumps 2', 152.00, './assets/products/b6.png', '2020-03-28 11:08:57', 20),
(10, 'Horror', 'Goosebumps 3', 152.00, './assets/products/b7.png', '2020-03-28 11:08:57', 20),
(11, 'Arts', 'Girl Online', 152.00, './assets/products/b9.png', '2020-03-28 11:08:57', 20),
(12, 'Fantasy', 'Fangirl', 152.00, './assets/products/book2.png', '2020-03-28 11:08:57', 20),
(13, 'Fantasy', 'Fault in our stars', 152.00, './assets/products/1.png', '2020-03-28 11:08:57', 20);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
   `name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--



-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

--
-- Dumping data for table `users`
--


--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `orderplace` (
  `order_id` int(11) NOT NULL,    
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL


) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `payment` (
  `pid` int(11) NOT NULL,    
  `user_id` int(11) NOT NULL,
  `creditcard_no` int(11) NOT NULL,
  `pin` int(11) NOT NULL


) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(55) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);
  
ALTER TABLE `orderplace`
  ADD PRIMARY KEY (`order_id`);
--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--

ALTER TABLE `orderplace`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `payment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
  
INSERT INTO  `admin`(`id`,`user`,`pass`) VALUES (1,"saja","admin");
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
