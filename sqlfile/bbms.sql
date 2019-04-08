-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 06:52 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'root', '123');

-- --------------------------------------------------------

--
-- Table structure for table `donor_registeration`
--

CREATE TABLE `donor_registeration` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `mobile` int(10) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `bgroup` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_registeration`
--

INSERT INTO `donor_registeration` (`id`, `name`, `fname`, `address`, `city`, `mobile`, `age`, `email`, `bgroup`) VALUES
(3, 'fsdfs', 'fssdf', 'fsdfs', 'fdsfsd', 213, 213, 'gat786@outlook.com', 'ap'),
(5, 'Manan Narkar', 'Bor Narkar', 'Mahim', 'Mumbai', 873216920, 21, 'manan@gmail.com', 'ap'),
(14, 'dsf', 'fsdf', 'dsfd', 'fdsf', 0, 0, '', 'nul'),
(15, 'dsf', 'fsdf', 'dsfd', 'fdsf', 0, 0, '', 'nul'),
(16, 'dsf', 'fsdf', 'dsfd', 'fdsf', 0, 0, '', 'nul');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_blood`
--

CREATE TABLE `exchange_blood` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `mobile` int(10) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `bgroup` varchar(3) DEFAULT NULL,
  `ebgroup` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exchange_blood`
--

INSERT INTO `exchange_blood` (`id`, `name`, `fname`, `address`, `city`, `mobile`, `email`, `age`, `bgroup`, `ebgroup`) VALUES
(1, 'Ganesh Tiwari', 'Umesh Tiwari', 'nalasopara', 'Palghar', 875948549, 'ganesht049@gmail.com', 20, 'abp', 'abn'),
(2, 'Rahul Bharati', 'Ramcharan', 'nalasopara', 'palghar', 2147483647, 'rahul@gmail.com', 20, 'abp', 'abp');

-- --------------------------------------------------------

--
-- Table structure for table `out_stock_blood`
--

CREATE TABLE `out_stock_blood` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `bname` varchar(25) DEFAULT NULL,
  `mnumber` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `out_stock_blood`
--

INSERT INTO `out_stock_blood` (`id`, `name`, `bname`, `mnumber`) VALUES
(1, 'Rahul Bharati', 'abp', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_registeration`
--
ALTER TABLE `donor_registeration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange_blood`
--
ALTER TABLE `exchange_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_stock_blood`
--
ALTER TABLE `out_stock_blood`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donor_registeration`
--
ALTER TABLE `donor_registeration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `exchange_blood`
--
ALTER TABLE `exchange_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `out_stock_blood`
--
ALTER TABLE `out_stock_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
