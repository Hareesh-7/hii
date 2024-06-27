-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 09:33 AM
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
-- Database: `hii`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_box`
--

CREATE TABLE `comment_box` (
  `s.no` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` bigint(11) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `language` varchar(11) NOT NULL,
  `emergency` bigint(12) NOT NULL,
  `address` text NOT NULL,
  `user_type` int(2) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `number`, `dob`, `email`, `password`, `gender`, `language`, `emergency`, `address`, `user_type`, `image`) VALUES
(1, 'HARI', 1234, '1998-01-11', 'H@A.C', 'HARI', 'Male', 'English', 235, 'TMF-SA', 1, 'hi-logo.png'),
(2, 'Hareesh', 8985884602, '0000-00-00', 'm.hareesh2504@gmail.com', 'hareesh', 'Male', 'Telugu', 9876543210, 'Tech Mahendra Foundation Smart Academy', 1, ''),
(3, 'tech', 5475, '2021-11-05', 'ab@c.de', 'uhsvcb', 'Male', 'Hindi', 567876, 'strhtm', 0, ''),
(4, 'teh', 547, '2021-11-05', 'ab@c.d', 'GHC', 'Male', 'Telugu', 567876, 'strhtm', 1, ''),
(9, 'hii', 123, '2021-11-09', 'naveenk553@gmail.com', 'dsGHF', 'Male', 'Telugu', 1234, 'fsgvf32e f34', 1, ''),
(10, 'lkngfg', 654, '2021-12-08', 'kufdg@gd.kjb', 'jnmg ', 'Male', 'Hindi', 8958, ' cfhn bx vmvk,hyt  nb v', 1, 'proteus_usv1600.jpg'),
(11, 'lkngfg', 654, '2021-12-08', 'kufdg@gd.kjbfdb', '', 'Male', 'Hindi', 8958, ' cfhn bx vmvk,hyt  nb v', 1, 'proteus_usv1600.jpg'),
(100, 'value-2', 2580, '0000-00-00', 'value@g.c', 'value-5', 'value', 'va', 25685, 'value-9', 5, 'abc.jpg'),
(111, 'Heramba', 9872364587, '2021-11-06', 'ghsfd@vfhjv.gd', 'fguhlvfhu', 'Male', 'Telugu', 43789, 'fzghjuuhygtfrds vgrd vre', 0, ''),
(112, 'hmm', 6754, '2021-12-03', 'dfzb@gc.mm', 'kjflj', 'Male', 'Hindi', 6758, 'fgnx hg', 1, 'Pizza-Instagram-Post.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_box`
--
ALTER TABLE `comment_box`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
