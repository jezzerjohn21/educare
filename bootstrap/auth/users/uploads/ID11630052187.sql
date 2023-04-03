-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2021 at 08:56 PM
-- Server version: 10.3.31-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `probet_ez_bet_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_fee`
--

CREATE TABLE `transaction_fee` (
  `id` int(11) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `win` decimal(10,3) NOT NULL,
  `sbet` decimal(10,3) NOT NULL,
  `vbet` decimal(10,3) NOT NULL,
  `rumble` decimal(10,2) NOT NULL,
  `wid_upline` decimal(10,2) NOT NULL,
  `wid_admin` decimal(10,2) NOT NULL,
  `send_upline` decimal(10,2) NOT NULL,
  `send_admin` decimal(10,2) NOT NULL,
  `wid_min` decimal(10,2) NOT NULL,
  `max_wid` decimal(10,2) NOT NULL,
  `wid_upline_vip` decimal(10,2) NOT NULL,
  `wid_admin_vip` decimal(10,2) NOT NULL,
  `send_upline_vip` decimal(10,2) NOT NULL,
  `send_admin_vip` decimal(10,2) NOT NULL,
  `send_upline_2nd` decimal(10,4) NOT NULL,
  `wid_upline_vip_2nd` decimal(10,4) NOT NULL,
  `send_upline_vip_2nd` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_fee`
--

INSERT INTO `transaction_fee` (`id`, `rate`, `win`, `sbet`, `vbet`, `rumble`, `wid_upline`, `wid_admin`, `send_upline`, `send_admin`, `wid_min`, `max_wid`, `wid_upline_vip`, `wid_admin_vip`, `send_upline_vip`, `send_admin_vip`, `send_upline_2nd`, `wid_upline_vip_2nd`, `send_upline_vip_2nd`) VALUES
(1, 0.00, 3500.000, 0.030, 0.050, 350.00, 0.20, 4.80, 0.20, 2.80, 100.00, 40000.00, 0.20, 4.80, 0.20, 2.80, 1.0000, 1.0000, 1.0000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction_fee`
--
ALTER TABLE `transaction_fee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction_fee`
--
ALTER TABLE `transaction_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
