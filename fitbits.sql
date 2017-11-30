-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 01:19 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitbits`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `caddress` varchar(50) NOT NULL,
  `cregDate` date NOT NULL,
  `cage` int(3) NOT NULL,
  `cDob` date NOT NULL,
  `cweight` int(3) NOT NULL,
  `cbodyFat` varchar(5) NOT NULL,
  `cbloodPressure` varchar(10) NOT NULL,
  `cgender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `cname`, `caddress`, `cregDate`, `cage`, `cDob`, `cweight`, `cbodyFat`, `cbloodPressure`, `cgender`) VALUES
(1, 'thomas', 'adres 1', '2017-11-27', 25, '2017-04-01', 75, '15', '180/60', 'male'),
(2, 'Jones TR', 'Kolblei 17', '2017-11-28', 48, '1969-04-06', 95, '20', '120/80', 'Male'),
(8, 'Roan Jones', 'Kolblei 16', '2017-11-28', 10, '2007-08-01', 35, '10', '120/80', 'Male'),
(9, 'Sonja', 'blablastraat 1', '2017-11-07', 29, '1990-02-07', 68, '21', '120/66', 'Female'),
(10, 'Wes Jones', 'Citroenvlinder 63', '2017-11-29', 8, '2009-04-15', 29, '20', '120/80', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `tname` varchar(40) NOT NULL,
  `tpassword` varchar(30) NOT NULL,
  `tfunction` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `tname`, `tpassword`, `tfunction`) VALUES
(1, 'thomas', 'abc', 'Group'),
(2, 'ptrain', '1234567890', 'Personal'),
(3, 'ftrain', '1234567890', 'Fitness'),
(4, 'test', 'test', 'Group');

-- --------------------------------------------------------

--
-- Table structure for table `traingplan_client`
--

CREATE TABLE `traingplan_client` (
  `id` int(11) NOT NULL,
  `traingsplan_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `overigInstructies` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trainingsplan`
--

CREATE TABLE `trainingsplan` (
  `id` int(11) NOT NULL,
  `traingsplan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traingplan_client`
--
ALTER TABLE `traingplan_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainingsplan`
--
ALTER TABLE `trainingsplan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `traingplan_client`
--
ALTER TABLE `traingplan_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainingsplan`
--
ALTER TABLE `trainingsplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
