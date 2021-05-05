-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 09:50 AM
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
-- Table structure for table `tb_ambulance`
--

CREATE TABLE `tb_ambulance` (
  `ambid` int(11) NOT NULL,
  `ambkey` varchar(8) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phno` varchar(14) NOT NULL,
  `district` varchar(100) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `rcbook` varchar(100) NOT NULL,
  `drlicence` varchar(100) NOT NULL,
  `phcfeedback` varchar(100) DEFAULT NULL,
  `phcid` int(11) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ambulance`
--

INSERT INTO `tb_ambulance` (`ambid`, `ambkey`, `fname`, `lname`, `address`, `phno`, `district`, `pincode`, `brand`, `model`, `rcbook`, `drlicence`, `phcfeedback`, `phcid`, `loginid`) VALUES
(2, '6453bf1d', 'Vipin', 'P', 'Romy Bhavan', '9645023651', 'Idukki', '123456', 'Maruti Suzuki', 'Eeco', 'ResearchPaperDraft.pdf', 'AnuragAResume.pdf', NULL, 58, 77),
(4, 'b8519802', 'Abhiram', 'A', 'Abhiram Bhavan', '9645023651', 'Idukki', '696156', 'Maruti Suzuki', 'Eeco', 'ResearchPaperDraft.pdf', 'AnuragAResume.pdf', NULL, 58, 80);

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
(28, '5ea86184', 'Anurag', 'A', 'Anu Bhavan, Adyamon PO', '9645023651', 'Male', 'Kottayam', '695614', 36);

-- --------------------------------------------------------

--
-- Table structure for table `tb_doctor`
--

CREATE TABLE `tb_doctor` (
  `id` int(11) NOT NULL,
  `drkey` varchar(8) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `district` varchar(40) NOT NULL,
  `qual` varchar(50) NOT NULL,
  `specs` varchar(50) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `loginid` int(11) NOT NULL,
  `phcid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_doctor`
--

INSERT INTO `tb_doctor` (`id`, `drkey`, `fname`, `lname`, `address`, `phno`, `gender`, `district`, `qual`, `specs`, `exp`, `pincode`, `loginid`, `phcid`) VALUES
(37, '1e6c677c', 'Romy', 'R', 'Romy Bhavan, Adayamon', '7356308128', 'Male', 'Kottayam', 'MBBS', 'Pediatrics', '3', '695614', 67, 58),
(38, '195d8d40', 'Anilkumar', 'R', 'Anu Bhavan', '7356308128', 'Male', 'Kottayam', 'MBBS', 'Physical Medicine', '1', '123456', 68, 58);

-- --------------------------------------------------------

--
-- Table structure for table `tb_drnotify`
--

CREATE TABLE `tb_drnotify` (
  `drnotid` int(11) NOT NULL,
  `drnotkey` varchar(8) NOT NULL,
  `drnotdate` varchar(200) NOT NULL,
  `drnormaldate` date NOT NULL,
  `curtime` varchar(40) NOT NULL,
  `drnotmsg` varchar(500) NOT NULL,
  `drid` int(11) NOT NULL,
  `notstatus` enum('0','1','2') NOT NULL,
  `phcid` int(11) NOT NULL,
  `notfeedback` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_drnotify`
--

INSERT INTO `tb_drnotify` (`drnotid`, `drnotkey`, `drnotdate`, `drnormaldate`, `curtime`, `drnotmsg`, `drid`, `notstatus`, `phcid`, `notfeedback`) VALUES
(1, '7df18b63', 'Wednesday 28th of April 2021', '2021-04-28', '12:57:16pm', 'Kindly Update The Consulting Details.', 67, '1', 58, NULL),
(4, '54b606fd', 'Wednesday 28th of April 2021', '2021-04-28', '12:57:16pm', 'Send me your appointment timings ', 67, '2', 58, 'Okay.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_firebaseauthusers`
--

CREATE TABLE `tb_firebaseauthusers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` text NOT NULL,
  `created_at` datetime NOT NULL,
  `login_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_firebaseauthusers`
--

INSERT INTO `tb_firebaseauthusers` (`id`, `username`, `email`, `token`, `created_at`, `login_type`) VALUES
(0, ' 917356308128', ' 917356308128', 'eyJhbGciOiJSUzI1NiIsImtpZCI6IjRlOWRmNWE0ZjI4YWQwMjUwNjRkNjY1NTNiY2I5YjMzOTY4NWVmOTQiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJodHRwczovL3NlY3VyZXRva2VuLmdvb2dsZS5jb20vZmlyLXR1dG9yaWFsLWM5N2Y2IiwiYXVkIjoiZmlyLXR1dG9yaWFsLWM5N2Y2IiwiYXV0aF90aW1lIjoxNjE5ODcwODMwLCJ1c2VyX2lkIjoiU3VlV1hXMTY0N2Z1QjMwQkRIWkx5cEhpdGx6MSIsInN1YiI6IlN1ZVdYVzE2NDdmdUIzMEJESFpMeXBIaXRsejEiLCJpYXQiOjE2MTk4NzA4MzAsImV4cCI6MTYxOTg3NDQzMCwicGhvbmVfbnVtYmVyIjoiKzkxNzM1NjMwODEyOCIsImZpcmViYXNlIjp7ImlkZW50aXRpZXMiOnsicGhvbmUiOlsiKzkxNzM1NjMwODEyOCJdfSwic2lnbl9pbl9wcm92aWRlciI6InBob25lIn19.e47xVq_GmRHL12WAbL1tdALqfKS_A6ZsUprddfUh7Qty0gcGQaA6MseYpxU9Ciy-XcXHpYYWc3w7KxnCaw-jGFh6QjaGJc-_33dpxAOOglMSyFdrTLTtKJs10JRCI8rKjz43XTu6t5TpmQWHHF-6_JYy_nqSoZCAGhNGCyvzrDSniXJaHLHbqsdxb4BbGe5RZc0tsHJwkF1U5dY83oYDT8VGNjJRpaGstJOBOXIeAXhxw2sne9ix4sTeqfY53ENxVoixJbxe_WPRuJ0cE-EzrV5BEVIKTCkUYl0w4vamBG9vszIGh3SnD1EllzsjkgTzkuniyxYzkYYjan9nOmliMQ', '2021-05-01 14:08:08', 'Phone'),
(0, ' 917559014286', ' 917559014286', 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImNjM2Y0ZThiMmYxZDAyZjBlYTRiMWJkZGU1NWFkZDhiMDhiYzUzODYiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJodHRwczovL3NlY3VyZXRva2VuLmdvb2dsZS5jb20vZmlyLXR1dG9yaWFsLWM5N2Y2IiwiYXVkIjoiZmlyLXR1dG9yaWFsLWM5N2Y2IiwiYXV0aF90aW1lIjoxNjIwMTM2NzgzLCJ1c2VyX2lkIjoiRWFGeDRvZWhKZlZ5S3R1dEJwMElXWld4ZFJwMiIsInN1YiI6IkVhRng0b2VoSmZWeUt0dXRCcDBJV1pXeGRScDIiLCJpYXQiOjE2MjAxMzY3ODMsImV4cCI6MTYyMDE0MDM4MywicGhvbmVfbnVtYmVyIjoiKzkxNzU1OTAxNDI4NiIsImZpcmViYXNlIjp7ImlkZW50aXRpZXMiOnsicGhvbmUiOlsiKzkxNzU1OTAxNDI4NiJdfSwic2lnbl9pbl9wcm92aWRlciI6InBob25lIn19.BFNn4m2yOYNzQjE-HSWSIdiwvSJhOLd0siA5GJYDRl-coXCmQ7fmxjadvoFdqhZAhplFY6PfaV055fTd9WFZ1DzqcjjH1x5lSGgCvvwdm3B5XLKaE3q_gN3Hh_x4VJ3HAwusjBxBAwj-refau60vzLT7vmmJuGtaDJsYotvzjGJF-hmmXRAkvVzDQJIHl_7Gp4dpqmlyub_MgGLHG9aSgh47cSnupFuULdWPRAuZyJS1VTp_xYPNX88GvbdLXqfOuXGXRILrV8KBJXRtowGM-U8hsGhfg3aYANeCN3PWsIQefJp365UfdiJ1Lh99YJICrJNZWqGRnjtC3ems_zbDOg', '2021-05-04 15:59:45', 'Phone');

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
  `utype` enum('0','1','2','3','4','5','6','7') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`, `status`, `utype`) VALUES
(24, 'admin@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '0'),
(36, 'anuragkadakkal@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '1'),
(37, 'dyspkottayam@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '2'),
(38, 'kitchen1@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '3'),
(39, 'kitchen2@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '3'),
(42, 'spkmply@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '2'),
(49, 'kmkitchen1@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '3'),
(50, 'karunyamedical5@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '4'),
(54, 'sperumely@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '2'),
(58, 'healthmkm@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '5'),
(67, 'romyr@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '6'),
(68, 'anilkumar@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '6'),
(77, 'ambulance@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '7'),
(80, 'ambulance2@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '7');

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
(15, 'Anurag A', 'Anu Bhavan', 'Azithral 250 - 1', '9645023651', 'Yes', 'phpmyadmin.png', 'Kottayam', '695614', '2027-04-21', '0', '0391af25', '50', 36),
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
-- Table structure for table `tb_phc`
--

CREATE TABLE `tb_phc` (
  `pid` int(11) NOT NULL,
  `phckey` varchar(8) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `district` varchar(30) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_phc`
--

INSERT INTO `tb_phc` (`pid`, `phckey`, `fname`, `address`, `email`, `district`, `pincode`, `phone`, `loginid`) VALUES
(1, '7498cf2a', 'Health Centre - 102', 'Health Centre, Mundakayam Town', 'healthmkm@gmail.com', 'Idukki', '123456', '7356308128', 58);

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
(5, 'DYSP Office, Kottayam Town', 'dyspkottayam@gmail.com', 'Idukki', '123456', '7356308128', 'f4308d94', 37),
(6, 'SP Office Kanjirampally', 'spkmply@gmail.com', 'Idukki', '123456', '8976543211', 'f5378e94', 42),
(7, 'SP Office, Erumely', 'sperumely@gmail.com', 'Idukki', '567567', '9645023651', 'eace73c4', 54);

-- --------------------------------------------------------

--
-- Table structure for table `tb_quarreg`
--

CREATE TABLE `tb_quarreg` (
  `qid` int(11) NOT NULL,
  `qkey` varchar(8) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `district` varchar(100) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `pcid` int(11) NOT NULL,
  `phcid` int(11) NOT NULL,
  `sdate` varchar(100) NOT NULL,
  `edate` varchar(100) NOT NULL,
  `idno` varchar(50) NOT NULL,
  `qfeedback` varchar(100) DEFAULT NULL,
  `idcard` varchar(100) NOT NULL,
  `status` enum('0','1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_quarreg`
--

INSERT INTO `tb_quarreg` (`qid`, `qkey`, `fname`, `lname`, `address`, `email`, `district`, `phno`, `pcid`, `phcid`, `sdate`, `edate`, `idno`, `qfeedback`, `idcard`, `status`) VALUES
(7, 'eda9db93', 'Anurag', 'A', 'Anu Bhavan', 'anuragkadakkal@gmail.com', 'Idukki', '7356308128', 37, 58, '2021-05-04', '2021-05-18', '944171304193', 'Keep Social Distancing.', 'AnuragAResume (2).pdf', '0'),
(8, 'd27c478f', 'Anurag', 'A', 'Anu Bhavan', 'anuragkadakkal@gmail.com', 'Idukki', '7356308128', 0, 0, '2021-05-12', '2021-05-19', '944171304193', 'Keep Social Distancing.', 'AnuragAResume (2).pdf', '0'),
(9, '91db3e17', 'Anurag', 'A', 'Anu Bhavan', 'anuragkadakkal@gmail.com', 'Idukki', '7356308128', 0, 0, '2021-05-04', '2021-05-11', '944171304193', 'Keep Social Distancing.', 'AnuragAResume (2).pdf', '0'),
(10, '49b15a40', 'Anurag', 'A', 'Anu Bhavan', 'anuragkadakkal@gmail.com', 'Idukki', '7356308128', 0, 0, '2021-05-04', '2021-05-18', '944171304193', 'Keep Social Distancing.', 'AnuragAResume (2).pdf', '0'),
(14, '4a986ae5', 'Swapna', 'T', 'Swapna Nivas', 'anuragkadakkal@gmail.com', 'Idukki', '7356308128', 37, 58, '2021-05-13', '2021-05-19', '1234567890', 'Keep Social Distancing.', 'AnuragAResume (2).pdf', '0'),
(15, 'd0dd7301', 'Anurag', 'A', 'Anu Bhavan, Missionkunnu', '', 'Idukki', '7356308128', 0, 58, '', '', '', NULL, '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sosambreg`
--

CREATE TABLE `tb_sosambreg` (
  `sosid` int(11) NOT NULL,
  `soskey` varchar(8) NOT NULL,
  `ambid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phcid` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` enum('0','1','2','3') NOT NULL,
  `curdate` varchar(100) NOT NULL,
  `district` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `feedback` varchar(255) DEFAULT 'Request Not Viewed',
  `purpose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sosambreg`
--

INSERT INTO `tb_sosambreg` (`sosid`, `soskey`, `ambid`, `fname`, `email`, `lname`, `phcid`, `address`, `status`, `curdate`, `district`, `phone`, `feedback`, `purpose`) VALUES
(4, 'c868a3de', 4, 'Anurag', 'anuragkadakkal@gmail.com', 'A', 58, 'Anu Bhavan', '0', '04-05-2021 07:11:57pm', 'Idukki', '7356308128', '04-05-2021 09:12:35pm - Not Available.', 'Fever'),
(7, '8490d02f', 4, 'Anurag', 'anuragkdl998@gmail.com', 'A', 58, 'Anu Bhavan Missionkunnu Adayamon PO', '0', '04-05-2021 08:31:32pm', 'Idukki', '7356308128', '04-05-2021 09:15:15pm - Will reach soon.', 'Accident');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vaccine`
--

CREATE TABLE `tb_vaccine` (
  `vid` int(11) NOT NULL,
  `vkey` varchar(8) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `vtotal` int(11) NOT NULL,
  `availdate` varchar(100) NOT NULL,
  `vstatus` enum('0','1','2','3') DEFAULT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vaccine`
--

INSERT INTO `tb_vaccine` (`vid`, `vkey`, `vname`, `vtotal`, `availdate`, `vstatus`, `loginid`) VALUES
(1, 'ahyxg67f', 'COVISHIELD', 28, '2021-01-06', NULL, 58),
(2, 'ajdghey7', 'COVAXINE', 33, '2021-01-06', NULL, 58);

-- --------------------------------------------------------

--
-- Table structure for table `tb_vaccinebookhistory`
--

CREATE TABLE `tb_vaccinebookhistory` (
  `vbkid` int(11) NOT NULL,
  `vkey` varchar(8) NOT NULL,
  `uid` varchar(8) NOT NULL,
  `phcid` int(11) NOT NULL,
  `bkdate` varchar(40) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vaccinebookhistory`
--

INSERT INTO `tb_vaccinebookhistory` (`vbkid`, `vkey`, `uid`, `phcid`, `bkdate`, `vid`) VALUES
(14, '9efc882b', 'c62a423c', 58, '2021-05-05', 2),
(15, '73f05026', '90faa34a', 58, '2021-05-05', 1),
(16, 'd026746b', 'd6923e9c', 58, '2021-05-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_vaccinereg`
--

CREATE TABLE `tb_vaccinereg` (
  `vid` int(11) NOT NULL,
  `vkey` varchar(8) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `idcard` varchar(20) NOT NULL,
  `yob` varchar(10) NOT NULL,
  `vaccinestatus` enum('0','1','2','3','4') NOT NULL,
  `vacdate` varchar(100) DEFAULT NULL,
  `vacdtaffname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vaccinereg`
--

INSERT INTO `tb_vaccinereg` (`vid`, `vkey`, `fname`, `phone`, `gender`, `idcard`, `yob`, `vaccinestatus`, `vacdate`, `vacdtaffname`) VALUES
(8, 'c62a423c', 'Anurag A', '917356308128', 'Male', '944171304193', '1998', '4', '2021-05-04', 'Sunil'),
(9, '90faa34a', 'Abhishek A', '917356308128', 'Male', '944171304193', '2003', '1', NULL, ''),
(10, 'd6923e9c', 'Swapna T', '917356308128', 'Female', '944171304193', '1983', '0', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vehiclepass`
--

CREATE TABLE `tb_vehiclepass` (
  `id` int(11) NOT NULL,
  `tpkey` varchar(8) NOT NULL,
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
  `feedback` varchar(100) DEFAULT NULL,
  `pkey` char(8) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vehiclepass`
--

INSERT INTO `tb_vehiclepass` (`id`, `tpkey`, `traveldate`, `returndate`, `fromplace`, `toplace`, `carregno`, `personcount`, `passkey`, `email`, `namelist`, `purpose`, `status`, `curdate`, `feedback`, `pkey`, `filename`, `loginid`) VALUES
(22, '', '2021-04-28', '2021-04-29', 'Kottayam', 'TVM', 'kl-16-a-1000', 1, 'd55bfda7', 'anuragkadakkal@gmail.com', 'Anurag A', 'Kerala University', '2', '2121-04-27', 'Only for necessary c', '42', 'AnuragAResume.pdf', 36),
(23, '', '2021-04-27', '2021-04-28', 'Idukki', 'Pathanamthitta', 'kl-16-q-1707', 1, '5d3d7697', 'anuragkadakkal@gmail.com', 'Abhishek A', 'College', '1', '2121-04-27', 'Approved', '42', 'AnuragAResume_page-0001.jpg', 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ambulance`
--
ALTER TABLE `tb_ambulance`
  ADD PRIMARY KEY (`ambid`);

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
-- Indexes for table `tb_doctor`
--
ALTER TABLE `tb_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_drnotify`
--
ALTER TABLE `tb_drnotify`
  ADD PRIMARY KEY (`drnotid`);

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
-- Indexes for table `tb_phc`
--
ALTER TABLE `tb_phc`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tb_policestation`
--
ALTER TABLE `tb_policestation`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tb_quarreg`
--
ALTER TABLE `tb_quarreg`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `tb_sosambreg`
--
ALTER TABLE `tb_sosambreg`
  ADD PRIMARY KEY (`sosid`);

--
-- Indexes for table `tb_vaccine`
--
ALTER TABLE `tb_vaccine`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `tb_vaccinebookhistory`
--
ALTER TABLE `tb_vaccinebookhistory`
  ADD PRIMARY KEY (`vbkid`);

--
-- Indexes for table `tb_vaccinereg`
--
ALTER TABLE `tb_vaccinereg`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `tb_vehiclepass`
--
ALTER TABLE `tb_vehiclepass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ambulance`
--
ALTER TABLE `tb_ambulance`
  MODIFY `ambid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `tb_doctor`
--
ALTER TABLE `tb_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_drnotify`
--
ALTER TABLE `tb_drnotify`
  MODIFY `drnotid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

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
-- AUTO_INCREMENT for table `tb_phc`
--
ALTER TABLE `tb_phc`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_policestation`
--
ALTER TABLE `tb_policestation`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_quarreg`
--
ALTER TABLE `tb_quarreg`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_sosambreg`
--
ALTER TABLE `tb_sosambreg`
  MODIFY `sosid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_vaccine`
--
ALTER TABLE `tb_vaccine`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_vaccinebookhistory`
--
ALTER TABLE `tb_vaccinebookhistory`
  MODIFY `vbkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_vaccinereg`
--
ALTER TABLE `tb_vaccinereg`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_vehiclepass`
--
ALTER TABLE `tb_vehiclepass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
