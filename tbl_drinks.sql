-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2017 at 08:20 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drinks`
--

CREATE TABLE `tbl_drinks` (
  `drinks_id` int(11) NOT NULL,
  `drinks_name` varchar(20) NOT NULL,
  `drinks_type` varchar(20) NOT NULL,
  `drinks_quantity` int(11) NOT NULL,
  `drinks_price` varchar(10) NOT NULL,
  `drinks_date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_drinks`
--

INSERT INTO `tbl_drinks` (`drinks_id`, `drinks_name`, `drinks_type`, `drinks_quantity`, `drinks_price`, `drinks_date_added`) VALUES
(6, 'fvrvertsg', 'Soda', 12, '4513342132', '0000-00-00 00:00:00'),
(7, 'fvrver', 'Juice', 23, '4513342132', '0000-00-00 00:00:00'),
(8, 'kjh', 'Water', 8, '90', '2017-09-19 09:43:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_drinks`
--
ALTER TABLE `tbl_drinks`
  ADD PRIMARY KEY (`drinks_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_drinks`
--
ALTER TABLE `tbl_drinks`
  MODIFY `drinks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
