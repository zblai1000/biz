-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 12:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biz`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(3000) NOT NULL,
  `registration_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `link`, `registration_date`) VALUES
(1, 'Try GrabFood today, and pay in cash!', 'https://www.grab.com/my/blog/cash-payments-with-grabfood/', '2021-02-27 23:35:46'),
(2, '50 GrabRewards points is all it takes to win BIG!', 'https://www.grab.com/my/blog/grabrewards-prizes-2-win/', '2021-02-27 23:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` char(40) NOT NULL,
  `link` mediumtext NOT NULL,
  `picture` text NOT NULL,
  `registration_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `username`, `pass`, `link`, `picture`, `registration_date`) VALUES
(10, 'Grab', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'https://www.grab.com/my/', '', '2021-02-27 23:02:08'),
(12, 'Food Hub', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'https://www.pizzahut.com.my/', '', '2021-02-28 05:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `picture` text DEFAULT NULL,
  `business` varchar(100) NOT NULL,
  `registration_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `itemName`, `info`, `picture`, `business`, `registration_date`) VALUES
(7, 'Burger & Fries', 'Fast food you cannot resist!', '../posts/2.jpg', 'Grab', '2021-02-28 04:49:07'),
(11, 'Satay', 'Vegetarian makes the healthy day!', '../posts/4.jpg', 'Grab', '2021-02-28 05:26:17'),
(14, 'Pizza', 'Best pizza in town!', '../posts/5.jpg', 'Food Hub', '2021-02-28 05:32:07'),
(15, 'Lasagne', 'Cheesy goodness!', '../posts/6.jpg', 'Food Hub', '2021-02-28 05:32:23'),
(16, 'Lava Cake', 'Chocolatey goodness!', '../posts/1.jpg', 'Food Hub', '2021-02-28 05:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` char(40) NOT NULL,
  `registration_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
