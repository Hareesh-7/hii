-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2021 at 12:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `name` varchar(20) NOT NULL,
  `number` bigint(11) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `language` varchar(11) NOT NULL,
  `emergency` bigint(12) NOT NULL,
  `address` text NOT NULL,
  `user_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `number`, `dob`, `email`, `password`, `gender`, `language`, `emergency`, `address`, `user_type`) VALUES
('hareesh', 576348, '2021-11-03', 'dg@hvfhd.sdhcv', 'dfrg', 'on', 'Telugu', 46547, 'trgtrg', 0),
('dsv', 3253, '0000-00-00', 'f@dfv.dcvg', 'fegv', 'on', 'Telugu', 346, 'hbsgn', 0),
('Heramba', 9872364587, '2021-11-06', 'ghsfd@vfhjv.gd', 'fguhlvfhu', 'on', 'Telugu', 43789, 'fzghjuuhygtfrds vgrd vre', 0),
('Hareesh', 8985884602, '0000-00-00', 'm.hareesh2504@gmail.com', 'hareesh', 'male', 'telugu', 9876543210, 'Tech Mahendra Foundation Smart Academy', 0),
('sabita', 1234567890, '2021-11-01', 'sabitay13@gmail.com', 'sabita', 'on', 'Telugu', 9876543210, 'TMFSA', 1);

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
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
