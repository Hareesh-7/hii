-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 08:57 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corano`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Price` int(10) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `order_id`, `order_date`, `customer_id`, `product_id`, `Name`, `Type`, `Price`, `img`) VALUES
(1, 4, '2019-07-17', 2, 14, 'Halo Tassels Earrings', 'Earrings', 340000, 'ear2.jpg'),
(2, 2, '2019-07-19', 3, 2, 'Diamond Exclusive Ornament   ', 'Rings   ', 25000, 'ring2.jpg'),
(3, 3, '2019-07-19', 3, 2, 'Diamond Exclusive Ornament   ', 'Rings   ', 25000, 'ring2.jpg'),
(4, 5, '2019-07-19', 3, 6, 'Pink Emerald Diamond Jewelry', 'Rings', 27500, 'ring6.jpg'),
(5, 1, '2019-07-19', 3, 3, 'Handmade Diamond Jewelry', 'Rings', 23000, 'ring3.jpg'),
(6, 6, '2019-07-19', 3, 5, 'Exclusive Diamond Jewelry', 'Rings', 25000, 'ring5.jpg'),
(7, 7, '2019-07-19', 3, 1, ' Perfect Diamond Jewelry ', ' Rings ', 150000, 'ring1.jpg'),
(8, 8, '2019-07-19', 3, 4, 'Perfect Wedding Ring', 'Rings', 22000, 'ring4.jpg'),
(9, 10, '2019-07-19', 3, 6, 'Pink Emerald Diamond Jewelry', 'Rings', 27500, 'ring6.jpg'),
(10, 9, '2019-07-19', 3, 5, 'Exclusive Diamond Jewelry', 'Rings', 25000, 'ring5.jpg'),
(11, 12, '2019-07-31', 2, 1, ' Perfect Diamond Jewelry ', ' Rings ', 150000, 'ring1.jpg'),
(12, 13, '2019-07-31', 2, 6, 'Pink Emerald Diamond Jewelry', 'Rings', 27500, 'ring6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buy_now`
--

CREATE TABLE `buy_now` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `order_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_now`
--

INSERT INTO `buy_now` (`id`, `customer_id`, `order_date`) VALUES
(1, 1, '2019'),
(2, 1, '2019'),
(3, 2, '10'),
(4, 14, '12'),
(5, 12, '12/08/2019'),
(6, 2, '13/08/2019'),
(7, 12, '13/08/2019');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_id` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Price` int(10) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`order_id`, `order_date`, `customer_id`, `product_id`, `Name`, `Type`, `Price`, `img`) VALUES
(11, '2019-07-19', 3, 1, ' Perfect Diamond Jewelry ', ' Rings ', 150000, 'ring1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phonenumber`, `email`, `subject`, `message`) VALUES
(1, 'amlik', 9874561230, 'ammu@gmail.com', 'Rings', 'I want new designs');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`) VALUES
(1, 3, 2),
(2, 3, 19),
(3, 3, 12),
(4, 3, 22),
(5, 4, 2),
(6, 4, 1),
(7, 5, 2),
(8, 5, 11),
(9, 6, 11),
(10, 6, 12),
(11, 7, 13),
(12, 7, 14);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Price` int(10) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `Name`, `Type`, `Price`, `img`) VALUES
(1, ' Perfect Diamond Jewelry ', ' Rings ', 150000, 'ring1.jpg'),
(2, 'Diamond Exclusive Ornament   ', 'Rings   ', 25000, 'ring2.jpg'),
(3, 'Handmade Diamond Jewelry', 'Rings', 23000, 'ring3.jpg'),
(4, 'Perfect Wedding Ring', 'Rings', 22000, 'ring4.jpg'),
(5, 'Exclusive Diamond Jewelry', 'Rings', 25000, 'ring5.jpg'),
(6, 'Pink Emerald Diamond Jewelry', 'Rings', 27500, 'ring6.jpg'),
(7, 'Coster Diamond Jewellery', 'Bracelets', 120000, 'brace1.jpg'),
(8, 'Fashion Gone Rogue', 'Bracelets', 150000, 'brace2.jpg'),
(9, 'Multiline Diamond Jewelry', 'Bracelets', 240000, 'brace3.jpg'),
(10, 'Casual wear Diamonds', 'Bracelets', 280000, 'brace4.jpg'),
(11, 'Exclusive Diamond Bracelet', 'Bracelets', 340000, 'brace5.jpg'),
(12, 'Coster Bangle Jewelry', 'Bracelets', 450000, 'brace6.jpg'),
(13, 'Circlet Drop Earrings', 'Earrings', 120000, 'ear1.jpg'),
(14, 'Halo Tassels Earrings', 'Earrings', 340000, 'ear2.jpg'),
(15, 'Handmade Diamond Jewelry', 'Earrings', 380000, 'ear3.jpg'),
(16, 'Forever Stud Earrings', 'Earrings', 410000, 'ear4.jpg'),
(17, 'Short Drop Diamond Earrings', 'Earrings', 420000, 'ear5.jpg'),
(18, 'Multi-Metal Crossover Earrings', 'Earrings', 390000, 'ear6.jpg'),
(19, 'Carat Diamond Necklace', 'Necklaces', 800000, 'dia1.jpg'),
(20, 'Floret White Necklace', 'Necklaces', 900000, 'dia2.jpg'),
(21, 'Emerald Diamond Necklace', 'Necklaces', 1000000, 'dia3.jpg'),
(22, 'Splendour Diamond Necklace', 'Necklaces', 900000, 'dia4.jpg'),
(23, 'Enticing Diamond Necklace', 'Necklaces', 1200000, 'dia5.jpg'),
(24, 'Lorelei Diamond Necklace', 'Necklaces', 1100000, 'dia6.jpg'),
(25, 'Circlet Anklet', 'Anklets', 200000, 'ank1.jpg'),
(26, 'Halo Tassels Anklet', 'Anklets', 300000, 'ank2.jpg'),
(27, 'Bell Anklet', 'Anklets', 400000, 'ank3.jpg'),
(28, 'Forever Anklet', 'Anklets', 500000, 'ank4.jpg'),
(29, 'Short Drop Anklet', 'Anklets', 600000, 'ank5.jpg'),
(30, 'Multi Crossover Anklet', 'Anklets', 700000, 'ank6.jpg'),
(31, 'Perfect Diamond Jewelry', 'Bracelets', 0, 'giphy1.gif'),
(32, 'Fashion Gone Rogue', 'Bracelets', 150000, 'brace2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(1, 'amritha@gmail.com'),
(2, 'tompot@gmail.com'),
(3, 'mk@gmail.com'),
(4, 'corano@gmail.com'),
(5, 'sai@gmail.com'),
(6, 'vanisha@gmail.com'),
(7, 'laxmi@gmail.com'),
(8, 'naidu@gmail.com'),
(9, 'chinna@gmail.com'),
(10, 'sushma@gmail.com'),
(11, 'anu@gmail.com'),
(12, 'nani@gmail.com'),
(13, 'hello@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `password`, `address`, `type`) VALUES
(1, 'amrutha', 'ammu', 'amrutha@26', 987456123, 'amritha', 'vip road 1', 0),
(2, 'priya', 'ammu', 'amlik@gmail.com', 9866389741, 'hello', '23-2-maddilapalem', 1),
(3, 'sai', 'sri', 'sai@gmail.com', 9587461230, 'saie', 'sai road', 1),
(4, 'rani', 'amrutha', 'rani@gmail.com', 9874561230, 'rani', 'rani road', 1),
(12, 'manikanta', 'mani', 'mani@gmail.com', 9874561230, 'mani', 'tomato road', 1),
(14, 'nidhi', 'reddy', 'nidhi@gmail.com', 9876543210, 'nidhi', 'chinnawaltair', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_now`
--
ALTER TABLE `buy_now`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `buy_now`
--
ALTER TABLE `buy_now`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
