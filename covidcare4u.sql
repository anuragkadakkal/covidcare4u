-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 08:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidcare4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `district` varchar(40) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id`, `fname`, `lname`, `address`, `phno`, `gender`, `district`, `pincode`, `loginid`) VALUES
(10, 'Anurag', 'A', 'Anu Bhavan, Trivandrum PO', '7356308128', 'Male', 'Trivandrum', '695614', 11),
(15, 'Arun', 'S', 'arun villa', '9645023651', 'Male', 'Trivandrum', '691536', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `utype` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`, `status`, `utype`) VALUES
(11, 'anuragkadakkal@gmail.com', '3482cee9b2e86c550a0c632f482e9515', '1', '1'),
(16, 'aruns@gmail.com', '3482cee9b2e86c550a0c632f482e9515', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vehiclepass`
--

CREATE TABLE `tb_vehiclepass` (
  `id` int(11) NOT NULL,
  `traveldate` date NOT NULL,
  `returndate` date NOT NULL,
  `fromplace` varchar(30) NOT NULL,
  `toplace` varchar(30) NOT NULL,
  `carregno` varchar(20) NOT NULL,
  `personcount` int(11) NOT NULL,
  `namelist` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `curdate` date NOT NULL,
  `feedback` varchar(20) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vehiclepass`
--

INSERT INTO `tb_vehiclepass` (`id`, `traveldate`, `returndate`, `fromplace`, `toplace`, `carregno`, `personcount`, `namelist`, `purpose`, `status`, `curdate`, `feedback`, `loginid`) VALUES
(2, '2020-11-12', '2020-11-13', 'TVM', 'IDUKKI', 'KL-16-Q-1707', 2, 'Anurag A, Abhishek A', 'College', '2', '2020-11-10', 'Not Possible', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_vehiclepass`
--
ALTER TABLE `tb_vehiclepass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_vehiclepass`
--
ALTER TABLE `tb_vehiclepass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
