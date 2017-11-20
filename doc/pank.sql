-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 03:56 PM
-- Server version: 5.6.36
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pank`
--

-- --------------------------------------------------------

--
-- Table structure for table `konto`
--

CREATE TABLE IF NOT EXISTS `konto` (
  `konto_id` int(10) unsigned NOT NULL,
  `konto_nr` varchar(191) DEFAULT NULL,
  `kasutaja` varchar(191) DEFAULT NULL,
  `valjaminek` varchar(191) DEFAULT NULL,
  `laekumine` varchar(191) DEFAULT NULL,
  `jaak` varchar(191) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konto`
--

INSERT INTO `konto` (`konto_id`, `konto_nr`, `kasutaja`, `valjaminek`, `laekumine`, `jaak`) VALUES
(1, '1234567', 'kasutaja1', '176', '309', '567'),
(2, '2234567', 'kasutaja2', '211', '500', '832');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konto`
--
ALTER TABLE `konto`
  ADD PRIMARY KEY (`konto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konto`
--
ALTER TABLE `konto`
  MODIFY `konto_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
