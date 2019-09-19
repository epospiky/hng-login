-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 04:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hng6`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Firstname`, `Lastname`, `Username`, `Email`, `Password`) VALUES
(1, 'Ernest', 'paul', '', 'epospiky@gmail.com', 'c5fe25896e49ddfe996db7508cf00534'),
(2, 'Ernest', 'paul', '', 'epospiky1@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f'),
(3, 'Ernest', 'paul', '', 'epospiky2@gmail.com', 'c5fe25896e49ddfe996db7508cf00534'),
(4, 'Ernest', 'paul', '', 'epospiky3@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f'),
(5, 'austine', 'agabi', '', 'jagabi@dik', 'c5fe25896e49ddfe996db7508cf00534'),
(6, 'Ernest', 'paul', '', 'epospiky@gmail', '79b7cdcd14db14e9cb498f1793817d69'),
(7, 'great', 'man', '', 'man@ggd', 'c5fe25896e49ddfe996db7508cf00534'),
(8, 'Ernest', 'paul', '', 'ep@gmail.com', 'c5fe25896e49ddfe996db7508cf00534'),
(9, 'Ernest', 'paul', '', 'eyfskjfkld@gmail.com', 'c5fe25896e49ddfe996db7508cf00534'),
(10, 'hgkljsd', 'hgkjalsdhk', '', 'y@gmail.com', 'c5fe25896e49ddfe996db7508cf00534'),
(11, 'Ernest', 'paul', '', 'ty@gmail.com', 'c5fe25896e49ddfe996db7508cf00534');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
