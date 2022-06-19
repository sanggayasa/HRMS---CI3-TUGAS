-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 07:20 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE IF NOT EXISTS `absen` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `in` varchar(50) DEFAULT NULL,
  `out` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `user_id`, `in`, `out`) VALUES
(44, 4, '2022-06-18 14:24:14', NULL),
(45, 4, '2022-06-18 14:25:38', NULL),
(46, 4, '2022-06-18 14:33:43', NULL),
(47, 4, '2022-06-18 14:34:01', NULL),
(48, 4, '2022-06-18 14:36:28', '2022-06-18 14:36:37'),
(49, 4, '2022-06-18 14:37:19', '2022-06-18 14:37:24'),
(50, 4, '2022-06-18 14:38:17', '2022-06-18 14:38:19'),
(51, 4, '2022-06-18 14:56:15', '2022-06-18 14:56:17'),
(52, 4, '2022-06-18 14:58:42', '2022-06-18 14:59:08'),
(53, 4, '2022-06-18 15:01:27', '2022-06-18 15:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `role`, `departemen`, `position`) VALUES
(4, 'user', 'user', '123', 'ADMIN', 'finance', 'staf'),
(5, 'admin', 'admin', '123', 'admin', '', ''),
(7, 'newuser', 'newuser', '12345678', 'user', 'ICT', 'STAF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
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
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
