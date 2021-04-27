-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 11:09 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
-- Table structure for table `tb_communitykitchen`
--

CREATE TABLE `tb_communitykitchen` (
  `cmid` int(11) NOT NULL,
  `cmkey` char(8) NOT NULL,
  `cmname` varchar(50) NOT NULL,
  `cmaddress` varchar(100) NOT NULL,
  `cmdistrict` varchar(70) NOT NULL,
  `cmpincode` varchar(6) NOT NULL,
  `cmcity` varchar(50) NOT NULL,
  `cmcertificate` varchar(100) NOT NULL,
  `cmphone` varchar(10) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_communitykitchen`
--

INSERT INTO `tb_communitykitchen` (`cmid`, `cmkey`, `cmname`, `cmaddress`, `cmdistrict`, `cmpincode`, `cmcity`, `cmcertificate`, `cmphone`, `loginid`) VALUES
(1, 'f4308d94', 'Community Kitchen - Kanjirampally', 'Kanjirampally Town', 'Kottayam', '123456', 'Kanjirampally', '', '9645023655', 38),
(2, 'f4307d95', 'Community Kitchen 16th Mile', '16th Mile', 'Kottayam', '123456', 'Kanjirampally', '', '1234567890', 39),
(3, '6da58e0d', 'Community Kitchen - Mundakayam', 'Community Kitchen, Mundakayam, Kottayam', 'Kottayam', '123456', 'Mundakayam', 'ResearchPaperDraft.pdf', '1234567890', 49);

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id` int(11) NOT NULL,
  `custkey` varchar(8) NOT NULL,
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

INSERT INTO `tb_customer` (`id`, `custkey`, `fname`, `lname`, `address`, `phno`, `gender`, `district`, `pincode`, `loginid`) VALUES
(28, '', 'Anurag', 'A', 'Anu Bhavan, Adyamon PO', '9645023651', 'Male', 'Kottayam', '695614', 36),
(29, '5ea86184', 'Anu', 'Rag', 'Anu Bhavan', '9645023651', 'Male', 'Kottayam', '695614', 53);

-- --------------------------------------------------------

--
-- Table structure for table `tb_food`
--

CREATE TABLE `tb_food` (
  `fid` int(11) NOT NULL,
  `filekey` varchar(8) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `items` varchar(250) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `qstatus` varchar(7) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `status` enum('0','1','2','3','4','5') DEFAULT NULL,
  `curdate` date NOT NULL,
  `kitkey` char(8) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_food`
--

INSERT INTO `tb_food` (`fid`, `filekey`, `fname`, `address`, `items`, `phno`, `qstatus`, `district`, `pincode`, `status`, `curdate`, `kitkey`, `loginid`) VALUES
(25, '3280a183', 'Abhishek A', 'Muthuplackal House', 'Biriyani - 1 , Kanji - 1 , Bread - 1 , Curd - 1 , Noodles - 1 , Biriyani - 1', '9645023651', 'No', 'Kottayam', '689654', '0', '2024-04-21', '49', 36),
(26, '228e00a7', 'Anurag  A', 'Anu Bhavan', 'Biriyani - 1101', '9645023651', 'Yes', 'Idukki', '695614', '4', '2026-04-21', '49', 36),
(29, '84f96d4f', 'Anurag A', 'Anu Bhavan', 'Biriyani - 1', '9645023651', 'Yes', 'Kottayam', '695614', '4', '2027-04-21', '49', 36);

-- --------------------------------------------------------

--
-- Table structure for table `tb_foodbill`
--

CREATE TABLE `tb_foodbill` (
  `fbid` int(11) NOT NULL,
  `fbkey` char(8) NOT NULL,
  `fbdate` date NOT NULL,
  `fbamount` float NOT NULL,
  `fborderkey` char(8) NOT NULL,
  `fbloginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_foodbill`
--

INSERT INTO `tb_foodbill` (`fbid`, `fbkey`, `fbdate`, `fbamount`, `fborderkey`, `fbloginid`) VALUES
(3, '792d8b68', '2024-04-21', 276, '3280a183', 36),
(4, 'ffe1256a', '2026-04-21', 86, '228e00a7', 36),
(7, '039ece73', '2027-04-21', 79, '84f96d4f', 36);

-- --------------------------------------------------------

--
-- Table structure for table `tb_foodreg`
--

CREATE TABLE `tb_foodreg` (
  `fid` int(11) NOT NULL,
  `fkey` varchar(8) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `fdate` varchar(100) NOT NULL,
  `ftime` varchar(70) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `fprice` varchar(10) NOT NULL,
  `fqty` int(11) NOT NULL,
  `fstatus` enum('0','1','') NOT NULL,
  `delstatus` enum('0','1') NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_foodreg`
--

INSERT INTO `tb_foodreg` (`fid`, `fkey`, `fname`, `fdate`, `ftime`, `fdesc`, `fprice`, `fqty`, `fstatus`, `delstatus`, `loginid`) VALUES
(9, '918e2d35', 'Biriyani', 'Friday 23rd of April 2021', 'Tuesday 27th of April 2021', 'Chicken and Beef Available', '79', 10, '1', '0', 49),
(10, '9d1f6b73', 'Kanji', 'Friday 23rd of April 2021', 'Tuesday 27th of April 2021', 'Kanji + Peas and Pickles', '50', 40, '0', '0', 49),
(11, '21dc1742', 'Bread', 'Friday 23rd of April 2021', 'Tuesday 27th of April 2021', 'Mil Bread', '10', 10, '1', '0', 49),
(12, '9b2b9e9b', 'Curd', 'Friday 23rd of April 2021', 'Tuesday 27th of April 2021', 'Cow Milk - Curd ', '8', 5, '1', '0', 49),
(13, 'f6971bf8', 'Noodles', 'Friday 23rd of April 2021 11:08:50 AM', 'Tuesday 27th of April 2021', 'Chicken Noodles', '49', 10, '1', '0', 49),
(15, '09ac0358', 'Biriyani', 'Saturday 24th of April 2021 07:54:08 AM', 'Tuesday 27th of April 2021', 'Chicken Biriyani', '80', 10, '1', '0', 49);

-- --------------------------------------------------------

--
-- Table structure for table `tb_karunyamedicals`
--

CREATE TABLE `tb_karunyamedicals` (
  `kmid` int(11) NOT NULL,
  `kmkey` char(8) NOT NULL,
  `kmname` varchar(50) NOT NULL,
  `kmaddress` varchar(100) NOT NULL,
  `kmdistrict` varchar(70) NOT NULL,
  `kmpincode` varchar(6) NOT NULL,
  `kmcity` varchar(50) NOT NULL,
  `kmphone` varchar(10) NOT NULL,
  `kmcertificate` varchar(100) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karunyamedicals`
--

INSERT INTO `tb_karunyamedicals` (`kmid`, `kmkey`, `kmname`, `kmaddress`, `kmdistrict`, `kmpincode`, `kmcity`, `kmphone`, `kmcertificate`, `loginid`) VALUES
(7, '3257abf8', 'Karunya Medicals - Mundakayam', 'Karunya Medicals, Mundakayam, Kottayam', 'Kottayam', '123456', 'Mundakayam', '5678902345', 'ResearchPaperDraft.pdf', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `utype` enum('0','1','2','3','4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`, `status`, `utype`) VALUES
(24, 'admin@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '0'),
(36, 'anuragkadakkal@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '1'),
(37, 'keralapolice@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '2'),
(38, 'kitchen1@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '3'),
(39, 'kitchen2@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '3'),
(42, 'keralapolic@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '2'),
(49, 'kmkitchen1@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '3'),
(50, 'karunyamedical5@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '4'),
(53, 'anuragkadakkal1@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_medbill`
--

CREATE TABLE `tb_medbill` (
  `mbid` int(11) NOT NULL,
  `mbkey` char(8) NOT NULL,
  `mbdate` date NOT NULL,
  `mbamount` float NOT NULL,
  `mborderkey` char(8) NOT NULL,
  `mbloginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_medbill`
--

INSERT INTO `tb_medbill` (`mbid`, `mbkey`, `mbdate`, `mbamount`, `mborderkey`, `mbloginid`) VALUES
(2, '24c06103', '2027-04-21', 78.3, 'de823c5c', 36),
(3, '846c2606', '2027-04-21', 18, '929104e8', 36),
(4, '998020f2', '2027-04-21', 18, '0391af25', 36),
(5, '945c6386', '2027-04-21', 18, '58967506', 36),
(6, '32df1717', '2027-04-21', 36, '6b1c9c5b', 36);

-- --------------------------------------------------------

--
-- Table structure for table `tb_medicine`
--

CREATE TABLE `tb_medicine` (
  `m_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `items` varchar(200) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `qstatus` varchar(7) NOT NULL,
  `prescription` varchar(100) DEFAULT NULL,
  `district` varchar(20) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `curdate` date NOT NULL,
  `status` enum('0','1','2','3','4','5','6') NOT NULL,
  `filekey` varchar(8) NOT NULL,
  `medkey` char(8) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_medicine`
--

INSERT INTO `tb_medicine` (`m_id`, `fname`, `address`, `items`, `phno`, `qstatus`, `prescription`, `district`, `pincode`, `curdate`, `status`, `filekey`, `medkey`, `loginid`) VALUES
(13, 'Anurag A', 'Anu Bhava, Mundakayam Junction', 'Azithral 250 - 2 , Wikoryl Tablet - 1', '9645023651', 'Yes', NULL, 'Kottayam', '695614', '2027-04-21', '6', 'de823c5c', '50', 36),
(14, 'Anurag A', 'Anu Bhavan', 'Azithral 250 - 1', '9645023651', 'Yes', NULL, 'Kottayam', '695614', '2027-04-21', '6', '929104e8', '50', 36),
(15, 'Anurag A', 'Anu Bhavan', 'Azithral 250 - 1', '9645023651', 'Yes', NULL, 'Kottayam', '695614', '2027-04-21', '6', '0391af25', '50', 36),
(16, 'Anurag A', 'Anu Bhavan', 'Azithral 250 - 1', '9645023651', 'Yes', 'AnuragAResume_page-0001.jpg', 'Kottayam', '695614', '2027-04-21', '0', '58967506', '50', 36),
(17, 'Anurag A', 'Anu Bhavan, Mundakayam Junction', 'Azithral 250 - 2', '9645023651', 'Yes', '32df1717MedBill.pdf', 'Kottayam', '695614', '2027-04-21', '5', '6b1c9c5b', '50', 36);

-- --------------------------------------------------------

--
-- Table structure for table `tb_medicinereg`
--

CREATE TABLE `tb_medicinereg` (
  `fid` int(11) NOT NULL,
  `fkey` varchar(8) NOT NULL,
  `mfgcompany` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mfgdate` date DEFAULT NULL,
  `expdate` date DEFAULT NULL,
  `fdate` varchar(100) NOT NULL,
  `ftime` varchar(70) NOT NULL,
  `fdesc` varchar(5000) NOT NULL,
  `fprice` varchar(10) NOT NULL,
  `fqty` int(11) NOT NULL,
  `fstatus` enum('0','1','') NOT NULL,
  `delstatus` enum('0','1') NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_medicinereg`
--

INSERT INTO `tb_medicinereg` (`fid`, `fkey`, `mfgcompany`, `fname`, `mfgdate`, `expdate`, `fdate`, `ftime`, `fdesc`, `fprice`, `fqty`, `fstatus`, `delstatus`, `loginid`) VALUES
(20, 'eba9039f', 'Dr. Reddy', 'Azithral 250', '2021-01-01', '2021-12-31', 'Tuesday 27th of April 2021 07:33:01 AM', 'Tuesday 27th of April 2021', 'Azithral 250 tablet is used for the treatment of bacterial infection in the ears, lungs, throat, tonsils, airways, nasal passage, skin and soft tissue. It is also used for the treatment of enteric fever and pneumonia or lung infection due to coming in contact with infected person (CAP).', '18', 20, '0', '0', 50),
(21, '3079065b', 'Ranbaxy Laborataries Ltd.', 'Wikoryl Tablet', '2021-04-14', '2022-10-14', 'Tuesday 27th of April 2021 07:39:34 AM', 'Tuesday 27th of April 2021', 'Wikoryl Tablet is a medicine used in the treatment of common cold symptoms. It provides relief from symptoms such as headache, sore throat, runny nose, muscular pain, and fever.  Wikoryl Tablet can be taken with or without food. The dose and duration will depend on the severity of your condition. You should keep taking the medicine even if you feel better until the doctor says it is alright to stop using it.', '42.3', 50, '1', '0', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tb_policestation`
--

CREATE TABLE `tb_policestation` (
  `pid` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `district` varchar(30) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `policekey` varchar(8) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_policestation`
--

INSERT INTO `tb_policestation` (`pid`, `address`, `email`, `district`, `pincode`, `phone`, `policekey`, `loginid`) VALUES
(5, 'DYSP Office, Kottayam', 'keralapolice@gmail.com', 'Kottayam', '695614', '7356308128', 'f4308d94', 37),
(6, 'SP Office Kanjirampally', 'keralapolic@gmail.com', 'Kottayam', '123456', '8976543211', 'f5378e94', 42);

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
  `passkey` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `namelist` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `curdate` date NOT NULL,
  `feedback` varchar(20) DEFAULT NULL,
  `pkey` char(8) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vehiclepass`
--

INSERT INTO `tb_vehiclepass` (`id`, `traveldate`, `returndate`, `fromplace`, `toplace`, `carregno`, `personcount`, `passkey`, `email`, `namelist`, `purpose`, `status`, `curdate`, `feedback`, `pkey`, `loginid`) VALUES
(13, '2021-01-31', '2021-02-01', 'Trivandrum', 'Kottayam', 'KL-16-Q-1707', 3, '431f4a61', 'anuragkadakkal@gmail.com', 'Anurag A, Abhishek A, Deepu Vs', 'College', '1', '2121-01-30', 'Approved', 'f4308d94', 36),
(14, '2021-02-06', '2021-02-07', 'Kottayam', 'Kollam', 'KL-24-Q-5089', 2, '421961b4', 'anuragkadakkal@gmail.com', 'Vivas Ajikumar, Yedhu Krishnan BK', 'Exam in College', '0', '2121-01-30', NULL, 'f4308d94', 36),
(15, '2021-02-02', '2021-02-03', 'Kottayam', 'Kollam', 'kl-16-q-1707', 1, '55003a6d', 'anuragkadakkal@gmail.com', 'Anurag A', 'College', '1', '2121-01-30', 'Approved', 'f4308d94', 36),
(16, '2021-04-02', '2021-04-04', 'TVM', 'Idukki', 'KL-16-Q-1707', 2, '20942f3f', 'anuragkadakkal@gmail.com', 'Anurag A, Abhishek A', 'College Exam', '0', '2121-03-25', NULL, 'f4308d94', 36),
(17, '2021-04-28', '2021-04-29', 'Trivandrum', 'Kottayam', 'kl-16-q-1111', 2, '84261f3d', 'anuraga2021@mca.ajce.in', 'Anurag, Abhishek', 'College', '0', '2121-04-26', NULL, 'f4308d94', 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_communitykitchen`
--
ALTER TABLE `tb_communitykitchen`
  ADD PRIMARY KEY (`cmid`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_food`
--
ALTER TABLE `tb_food`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tb_foodbill`
--
ALTER TABLE `tb_foodbill`
  ADD PRIMARY KEY (`fbid`);

--
-- Indexes for table `tb_foodreg`
--
ALTER TABLE `tb_foodreg`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tb_karunyamedicals`
--
ALTER TABLE `tb_karunyamedicals`
  ADD PRIMARY KEY (`kmid`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_medbill`
--
ALTER TABLE `tb_medbill`
  ADD PRIMARY KEY (`mbid`);

--
-- Indexes for table `tb_medicine`
--
ALTER TABLE `tb_medicine`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tb_medicinereg`
--
ALTER TABLE `tb_medicinereg`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tb_policestation`
--
ALTER TABLE `tb_policestation`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tb_vehiclepass`
--
ALTER TABLE `tb_vehiclepass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_communitykitchen`
--
ALTER TABLE `tb_communitykitchen`
  MODIFY `cmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_food`
--
ALTER TABLE `tb_food`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_foodbill`
--
ALTER TABLE `tb_foodbill`
  MODIFY `fbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_foodreg`
--
ALTER TABLE `tb_foodreg`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_karunyamedicals`
--
ALTER TABLE `tb_karunyamedicals`
  MODIFY `kmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_medbill`
--
ALTER TABLE `tb_medbill`
  MODIFY `mbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_medicine`
--
ALTER TABLE `tb_medicine`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_medicinereg`
--
ALTER TABLE `tb_medicinereg`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_policestation`
--
ALTER TABLE `tb_policestation`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_vehiclepass`
--
ALTER TABLE `tb_vehiclepass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
