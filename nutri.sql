-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 12:26 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nutri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passward` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `passward`, `mobile`, `name`) VALUES
(1, 'haneen97alzyadat@gmail.com', '998765', '0798318183', 'haneen');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `billno` int(11) NOT NULL,
  `billdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `userid` int(11) NOT NULL,
  `stayus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`billno`, `billdate`, `userid`, `stayus`) VALUES
(21, '2022-03-28 17:50:44', 1, ''),
(22, '2022-03-28 17:54:13', 1, ''),
(23, '2022-03-28 17:56:38', 1, ''),
(24, '2022-03-28 17:57:15', 1, ''),
(25, '2022-03-28 17:57:45', 1, ''),
(26, '2022-03-28 17:57:57', 1, ''),
(27, '2022-03-28 21:41:12', 1, ''),
(28, '2022-03-28 21:51:24', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `billdetails`
--

CREATE TABLE `billdetails` (
  `billno` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billdetails`
--

INSERT INTO `billdetails` (`billno`, `itemid`, `qty`) VALUES
(1, 3, 3),
(1, 8, 2),
(1, 21, 1),
(1, 19, 1),
(1, 22, 1),
(1, 10, 1),
(1, 15, 1),
(1, 11, 1),
(2, 3, 1),
(2, 19, 1),
(3, 3, 1),
(3, 7, 1),
(3, 16, 1),
(4, 15, 1),
(4, 13, 1),
(4, 11, 1),
(4, 21, 1),
(5, 5, 1),
(7, 20, 1),
(7, 13, 1),
(7, 15, 2),
(8, 10, 1),
(8, 12, 1),
(9, 7, 1),
(9, 14, 1),
(10, 13, 1),
(10, 15, 1),
(20, 4, 2),
(20, 3, 1),
(20, 8, 1),
(20, 9, 1),
(27, 3, 1),
(28, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `smo` bigint(20) NOT NULL,
  `userid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE `comp` (
  `name` varchar(50) NOT NULL,
  `text` varchar(250) NOT NULL,
  `usernumper` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`name`, `text`, `usernumper`) VALUES
('esraa', 'kjjglhgiluagfilugfiluagfuiagfgafa', 1),
('Haneen', 'kjjglhgiluagfilugfiluagfuiagfgafa', 2),
('esraa', 'kjjglhgiluagfilugfiluagfuiagfgafa', 3),
('Haneen', 'uhvhvhuvouviohvcoydcbivyidcbcycuohc', 4),
('esraa', 'uhvhvhuvouviohvcoydcbivyidcbcycuohc', 5),
('abdallh alzyadat', 'hhhhhhhhhhhhhhhhh', 6),
('abdallh alzyadat', 'uhvhvhuvouviohvcoydcbivyidcbcycuohc', 7),
('ttttttt', 'tffgfugoihgvhvoh', 8);

-- --------------------------------------------------------

--
-- Table structure for table `provitems`
--

CREATE TABLE `provitems` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provitems`
--

INSERT INTO `provitems` (`id`, `name`, `description`, `price`, `photo`) VALUES
(3, 'potato', 'Wherever celebrations and good times happen', '5', 'potato.jpg'),
(4, 'tomato', 'Wherever celebrations and good times happen', '2', 'tomato.jpg'),
(7, 'water', 'kskssmks skskskslsls kskddjnicm', '1', 'water.png'),
(8, 'tea', 'kskssmks skskskslsls kskddjnicm', '4', 'tea.jpg'),
(9, 'Cucumber', 'kskssmks skskskslsls kskddjnicm', '3', 'cucumber.jpg'),
(10, 'lentil', 'lentil', '1', 'lentil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passward` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `passward`, `mobile`, `name`) VALUES
(0, 'malik@gmail.com', '998765432', '9988gv', 'malik'),
(1, 'esraa97alzyadat@gmail.com', '998765', '0798318183', 'esraa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billno`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`smo`);

--
-- Indexes for table `comp`
--
ALTER TABLE `comp`
  ADD PRIMARY KEY (`usernumper`);

--
-- Indexes for table `provitems`
--
ALTER TABLE `provitems`
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
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `billno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `smo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `comp`
--
ALTER TABLE `comp`
  MODIFY `usernumper` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `provitems`
--
ALTER TABLE `provitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
