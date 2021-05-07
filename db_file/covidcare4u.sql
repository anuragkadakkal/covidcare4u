-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 08:46 AM
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
(28, '5ea86184', 'Anurag', 'A', 'Anu Bhavan, Adyamon PO', '9645023651', 'Male', 'Kottayam', '695614', 36),
(30, 'd21b53c0', 'Anurag', 'A', 'Anu Bhavan', '7356308128', 'Male', 'Kottayam', '695614', 81);

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
(38, '195d8d40', 'Anilkumar', 'R', 'Anu Bhavan', '8547328890', 'Male', 'Kottayam', 'MBBS', 'Physical Medicine', '1', '123456', 68, 58);

-- --------------------------------------------------------

--
-- Table structure for table `tb_drbooking`
--

CREATE TABLE `tb_drbooking` (
  `dbid` int(11) NOT NULL,
  `dbkey` varchar(8) NOT NULL,
  `dbtime` varchar(255) NOT NULL,
  `dbname` varchar(50) NOT NULL,
  `dbemail` varchar(50) NOT NULL,
  `dbdistrict` varchar(50) NOT NULL,
  `dbaddress` varchar(255) NOT NULL,
  `dbpurpose` varchar(255) NOT NULL,
  `dbphone` varchar(20) NOT NULL,
  `dbfeedback` varchar(255) DEFAULT NULL,
  `dbstatus` enum('0','1','2','') NOT NULL,
  `dbdrid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_drbooking`
--

INSERT INTO `tb_drbooking` (`dbid`, `dbkey`, `dbtime`, `dbname`, `dbemail`, `dbdistrict`, `dbaddress`, `dbpurpose`, `dbphone`, `dbfeedback`, `dbstatus`, `dbdrid`) VALUES
(2, '600e10c2', '2021-05-06', 'Anurag  A', 'anuragkadakkal@gmail.com', 'Kottayam', 'Anu Bhavan Missionkunnu', 'Ear Pain', '7356308128', 'Not Giving Appointments Now', '2', 68);

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
(1, '7df18b63', 'Wednesday 28th of April 2021', '2021-04-28', '12:57:16pm', 'Kindly Update The Consulting Details.', 68, '1', 58, NULL),
(4, '54b606fd', 'Wednesday 28th of April 2021', '2021-04-28', '12:57:16pm', 'Send me your appointment timings ', 68, '2', 58, 'Okay.');

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
-- Table structure for table `tb_logginglogin`
--

CREATE TABLE `tb_logginglogin` (
  `logid` int(11) NOT NULL,
  `logtoken` text NOT NULL,
  `loginusername` varchar(255) NOT NULL,
  `curdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_logginglogin`
--

INSERT INTO `tb_logginglogin` (`logid`, `logtoken`, `loginusername`, `curdate`) VALUES
(1, '03AGdBq25S2pjku1DiX9FL43IkgQ76x34DLIk6Lve6xI7p8xShzJwnfMpwPYb8O3gQBmZ1zQJ0nA4b-uR0GPZvBlclTlu6uLLdiXA94f9LTLbwpaI26kNRT26Xy9kVMtq9YgP1UCjjrdkpht51PFfeb68ZigcrQaIwAVkLp25Id6Q4t2MGczWcZ5ySs_Eq5Lmy0b_p3z6_ufrEQninwqpFJ10K5G6xFfLxljPpH5lkFrTHUaBJha0Meewf98lT2dODtvixlp6cPNpvLHgQTC9R2DTGPCgE32W1V8YxzdMxUBeD4oVUjG0vgD9W9pYJx0rIVJL_yfZrIDE87g8L0v8a7e4fpRPcIirf_1LKtFLS9p3ECdgPduwi3Jyw1VpmUIS71AWBGqNbKNhfNN_YBp687HLVchrgj8BqM8dbX8isInMYolXIBKH1O_SawgQ54yNg-iQ-xu8IoA6t', 'ambulance2@gmail.com', '06-05-2021 07:19:17am'),
(2, '03AGdBq24DXbIPFFEWRBlzCLtdWQrogYFvn72-pWRUy_JFtUX3rXemoO_www4SycL1xtaxW9WdsrnTYxujmib6CyEaVmbcMNvTk6GpXdn5hs90sI7zLFs1gnW66-hI5pF9WN-GSDZXlEGP8Ld5EGmQlvl6AxOB-Z03k-iGYB23BVP7v_5O6k2UgDIO6w78oNss-CeLKj4mVjyXD4bruxNwzieNrIo2npuDVfgOm7cr4cOiLF0tchJP6lghh3zc4r9c_BaDYbjkwOTvWbO3wZdAcrXkREPIlYnXxxYrK6tFDEmDrfbqs2v4JxTGbUsKkTdora7YIf30YJCzjZ6j-2e28HdpIxGBFhZAMIxtWpxWk-bSfM6GWd1EoicfCTgzIT8BRYz7yIMYOun5TX9obqXmyLrI50JrAWaH7u4AOQVe_Odf2t9tKznvTt2_9unKnbf5IqXI3bPH6Nsg', 'admin@gmail.com', '06-05-2021 07:20:57am'),
(3, '03AGdBq26DmIdGVgEnkuZwyx4g8PG_-yewlrQ1ORVmPH30sRwk2sEJ3Jk2Y49MHlgXmyelpD4rtjTgMsF8V6qYdd1aWrpW1FP5RGPMMA8SMKZlvOGH__GOXf9NuuoMHSunkzlm2DAW526yW2ng8S3I_Fv1ZQ3iIJ1NnIv0zDs7n8XY03BUIdsonA9nujub6YFmTCrQmtOYxh7LhKbfthXYNl7zTh_W7d19rS83YDchHlUto6Nsl0f79BOh6dvKfSZ27uQUmdinYuJ5HPuYr7O0rZh7ydvkxlOpReMjqMa5vv-TbC0y70MpkGm9e6EJm_ibAJaEPSKlqISE4b_1mWHjwcG6acUfTZXkN9X4ClEA-1xK8jRmAqf5aKLG_5DG6Zm5XmXUw1W1mOgCYIFUYL8v5YQidF3lz8DeYlWUAhUH79B0HYFwalc2k7g', 'admin@gmail.com', '06-05-2021 07:21:02am'),
(4, '03AGdBq26bO9FVdNjeMt-bym05TSmg2qw-TUiWjQpFomaEu8nPAdsCbs-15Mmp4agO3rEKJbLmLvqYHqHMWdaX6Hp6q0u_tVKL_g4vECLlVB4K9NvM8kzuy4tT8giXBgbs3iJK8oIB5QBslbMyD9I5qIY8nBObTD7iFLoY-9HpK7L-KkK1XTVw411_ZTEByrHEAEmS2ORlK6dfxyrnTZkEWsPzhEKL3LNmLnSOus7HzGBn1xF3EL9fvJpp0nzHEBAMnplnUyVJjoID2BaVUNopAuG9UnwyaUMPGzxhv1efbbvQNjcTR6PuehFf0AasEfZ6y7dw4B5SYY6FYczp7hSjRHylDgUTZ51I5coDwVn3LtjKrqxAOW-qsgCeOj3v0VE0X6tM-9E5cBSvqjJHCW806U7r9ZBWjTX5__oNsSiVzTZ4YII2J7J00dRYHjffmKyHWujgFsV5kAmX', 'admin@gmail.com', '06-05-2021 07:27:57am'),
(5, '03AGdBq25q_mO9wdqL8h7pL--3Izt5PjktPW5RNFmEE2ei-veW6G37qcUgVbaSSvy8yVDMz1_nV8fsconazRuSuiKeanPFu7NUJiHXDirLNhiP6PniKB5_To99uwrQY-BK6dGvIvlJ2D7PU2MkHC20HRpHU_ToWMiPFXdufrgyz5s6DiSrHMWvqghrs9mgFlq3SsAW77tfo9F7JRbK8Zgrn3p_U-AyuZjZnqZCvBxUbb8Nz6Ei8c1Mhe458tJLUhytL1_tMhXsjrBDrdBJF2s24Abo68YIZEF3UpTrWLPxe2-R9ucnNWdHLlh2r-1HA2yvuP4yXn0N3xYp_S_EWoBDgzWjoqgjFmbqZaA5Kg8HWSczukn6n5d-zRaPcEcy4LpSaxIgC4hLTwcl8rcoAmQexo7b8YgsPIhkOIi_r2mXrPopI-ltcFmQMdqRaPnvj91Z-doMOXZ0wOXj', 'admin@gmail.com', '06-05-2021 07:28:00am'),
(6, '03AGdBq24FYZHjleiQKbGzCOLYI46AVtNh2E5D9yRhAAxCXhmrDLDrgmvOsiNxWJM7sh5ovne_TDzmwmBuXRP1ClT5YLfhizBv5sDdNASEn62-Scroy-iTOC3eQ5L8NDL3Nqva4IgzfuRx4r62Obk1ELdG3djuHvkE9ZRUMkanXeQwOdgDA67FjtjLByKEu8l35shZgpEchaobj2k52XJ_PfFcqxnIV2d-zVhBxdCvsgkHxpLn6_Wlh6M7D4KG-0BtSuoHLAbk2XkCM20z3E2ksTLXcZ_HjGtzZKUhU82BcpQL1UjXh6g-WjmrHPOJX1lICeAV4L0c5eJlFn_p0UDTRNRse97ILkilP_O_QteKoGwd5QTtoaWOefbc2F-uH1Enu-8TN0pVYc8nVgHFVUWAi_MY7xq9DU8gAsM4sQsYtvma0zGrsrozNRttmME-mI_ea7HfDlFrGKUL', 'healthmkm@gmail.com', '06-05-2021 07:29:10am'),
(7, '03AGdBq25XK9is24eBd8pK4JmDFMK8gW_bW6JCNqWijjuZMOorEaGX1xRCIXLxN6330zFRVffP-Ra6XMhWSJuAzwSVyS_S3iYYSUORw9690DZk0RsR6peDycRHrmSJSpk8l8Ye-cq2rdNi5rHStj7h6eJYeNwzPy2XhqbAPMqhWZAVkjvtbzV4wph-HScSTUYP3YzpE1mJ6YQHfBZNA7Pm78hGLSFs55I1AQmbUKHWi57_dA26Z6CcfwDN0cINA-j2z_c7sulcCpwNgduSd6YpNQVOol9jEYYxXCvl9czxOVUJiuiwkGxUMYOBdLppiedu4LCTsI-DLa7wmugnG85ER20Yk4elrPOTfzeXxFAmlHWQaFh3lGt9NR365KGsjqXrpFr8jWw6Od46R_KWhNgrWfwnHdcARfb5-I5wgq-nhKBl9757AsPKnpPXmzK-psgdYzNOMBifsAak', 'healthmkm@gmail.com', '06-05-2021 07:29:22am'),
(8, '03AGdBq27dWQrB2MNdTF8hlhfrOla1MbE3pGYgtCIpHbzC-vCjgQRZfoV_y2kfsWz--m4a4hRE5llLJdxcoUC9KJ_dCwgh5Ak550Vgi5M5pa8yGvn7NB6ZovK3QL_fijY304H95jiTGiw2kTZ6e4iCuXCoL3UQE0jeXtpui6c2ScqL7hLm5zr_p73bkt2na4Tr35ykdLt6TR-tewynkWFSF2eooNv_ypvM85Maan_euS-ktuaZOz3eg6ecRU3IwIJAI-KZ3R0hbeDDboxkdo5ifbcjBPvyU8iGAsY58o4XQ-nKtUxRDS4prHXOGV1y78ELXtMNzjyDabA6KTtP-nJHCPvEgbdOTPi0iZqnttlRSnUx5HI3RbIQmDA4YjMdvn4vwB8zCQFJYbCPiVM2fv-qOX2mNJOj0VJThBLFLL7pWTZfJ0dKMgDNTkknc1ZdwoxTaNJkxKK41X1Q', 'admin@gmail.com', '06-05-2021 07:29:34am'),
(9, '03AGdBq27wgqRkBM2Fcjimq0-oI7isWcKadFhb7_t9L6zWZxCjyIJJ9cMKtWqXrseYfJ9ioWnrcMDg6Jy_NZ92TS5Reo-0pvDqljy_L8J67pBzRDsXILGOILUP2auLBnvet8FSOvvNx-UuHb3pEeRsp8chUMmZ0iMDGCBnr3tZtQ-CGBQEGSjLWz5tl5FoUH29NeKCaxo5ufiUbN2ru1FLbdcLpjSh3KMQ4fyoYeKEQIhXLNWmJNg7pSUXhPAFGHqfoHi8T6f5mJnf69A_MJyLvUTEdj4U6kHBYmi45wjtSnsA4o312K54kUO-WJaK703OkJYGl8RSt3DYizbAuB-hv3vRW8RUYbZ93IzcwdeTkuoAG1tfPmyFCkq8IACf64M41d0tUdn1M1UVkw1_0MaVgVhUkLsU-_xx88ie8muH-pNd_lRRqijcVODZ-8GvGH9wCOI8Gy9WSxcH', 'admin@gmail.com', '06-05-2021 07:29:38am'),
(10, '03AGdBq24ds_ASxv1eE40gputK3UBNQseVsGBrPCdWYVv8yAZMATiHWPvX7GDch9__wBW6AE5FfEsuk7vErnI2QU4iuFR6pzfL7wfiEozaaC-OY7623HQMz5dFm-1POoxJIbHKhEEKcD4RCbDZ1wTuRJTCMpdLz6bJdryC-AbNA-vy0-94oo8t6bV2SePKzT9oma4C4TYykHYH71NMLchZeOVgdsSgWhdYpBYRc5TYkt-Szazma8w1WIbenSNzs3vZxYPwh7PToTYHuVxGxqqq5xMwjRGjS7f1zTVW_JxThcFF7_QjrdyV-EMpjzEB5eBCTgHKi_fuRQDYrjOKiEZ75zWTjs04irwmJvPjzRtjoi7-SA_m9fsgPTqs8PAc7mmqRDe68OTbbKneR4IawBVWnnSdCd2sBu2f7RqSdAytN3d_DKlgGKj6RDZbHeieQtRsE2HOcjPZb6fH', 'admin@gmail.com', '06-05-2021 07:40:19am'),
(11, '03AGdBq24vJMtJxM4kKcw7bCc1n_GRDkUfs2a08MDMgBAHxcHECALy7IFbDIjiMCinLhhLM5RzKVeYQeGNDN8xkaOBcusLmQPLyshiujVytIXVGktjIE9BEdsj_UOAALQY2ntM2iqA0hlZrSsiCfUu-55FN_DUOSDWZWtdMbrpocrzedLTYVT6TEsvKjpWX7mYMZm8BHwdnvG-TmqIVmhDcaIQ8k2Jq6PpqNSjXLFfH1CNgUA2jjqxmtVQ0bNkfKXvIM_gxVNVtU5GgJpFPTc6Cvse7izqDevmYXY3tgbv4JNta5OjlgshOvXNJw1L59TxMbi8Pgx3Xfq6OM473h077xe4eFgHOgRUkVKPpBOhCFQd4f2xcBZ4-hQQwSG56PbM7FcaE-sHF77uasNZz51y3oXYT-TAW2BKiefXvzlxQrhgFCkk64adAl7dNzCuQLfrqlRToNGQff4O', 'admin@gmail.com', '06-05-2021 07:40:23am'),
(12, '03AGdBq26aE7tNv_gThVfd4lmIDYq-ktgFk4W0WbOw0s1iOHNyN9iJIEddlNQNtst8aKlGBMBolQJvwU6Iz4zCmd0sCEmZr06iKJiLf1LgNmCle4c-_xOmqFeIm7Mxh8P_vgaTHWUHWGh5qfhzmWyTbubd13sNrIPatF1SJ3a3GdyZYjEO4h5BkTGRGK3UecKDLpucGJwXilVqH0g6QIoStp8KHcGtp6gjl4LseWU7DdtwG58Cbk7OBzQ-sJ0Bbd9OL9z7amkj1rQhv702egpgRkKziV0eALGvxziAbPB85oFWh_dYE44Nl2yEzWcscL43ZdT19PJSz3IJzDjIff5vNOvL_s5EsJGqHD0iB_Gx1fAixtJHcqesZgAISkjQg0xEogrUrHah3WQLbu9GtLFdnhIa-tHRT9VCPMRm592qoL52gXtRt2gGecpeqxvYb93uG6f7-h-XO5HW', '', '06-05-2021 07:41:07am'),
(13, '03AGdBq24nb7XcPQ-qNKuq8g7GBcf8R7yD21LB5qeO9SQWdNBm0wdeI0c_UOAfuAhHp7sNzvnCYbtaDpvLEiVkrW19nHUqfujaVGd2U7j7f7CQjBLd2a4jabicHX_ca4jHCAnOIASdFGXkTjIn7qo3LTpJiHYE2povCVhSlwSvtv067ITe0rGXpkp--bIFPv0PQtQyzvYRJ3yWC7u8gOp-scm8a6Csw2MFkp90i3IIRV7q2rIgUZMuu1xzkO0x2lGb_yAR_cXOXX6joEOcFuUbZm_qhgmVhyTYvK817qUnYpdg_1g0XqsV7r1LNUtVfmC-KDwuddVyUbt9h9hgpz3WORJ90m4nZq1S7edsTMEtJnRXKmwlfo7B24YkmCN8eGi8Jk8iZhPtW1RbkWdiDuea8VSkcMs3VApw3-y0XL2KJwk7mX6d6trRKnslTxM1W_aHPUXTZMH1dYtA', '', '06-05-2021 07:41:21am'),
(14, '03AGdBq26IODCFYw9mK0dx57PV4PQZ0veUDdLRCzP-mMckzckohR5kfm1pDp8cJ4cZmZ3Glx3PKKd_QafrkF_XPu0ai3qZk5n3QxgRWdP0yDukWPdcalxOsZdhu2wTuAeyBwBx86wvxngRxGr1fF2G63707WXCOU6tVrmM9seaME-m09FVDBboPzOPpdk8IatzfJohiriyFiGtSX5Kw2Kfx8hpxPQegmAQAqIqfa9GoqOAc3cAdYGoSOChfK-V1hcfuESMlyytvT4GAvlVUFNV2NdNXijNjdRmuHCm6ZkzYBmHxzhynzbF2BwqNuWvalbdj4XiPZZDtB2kWt7UzyIzBiRI8UtNKEtcMeSEQ_VhCi8mlux41iU-ULom_Vhek1AtgAFPD4UOwl6ycuhaJEPJymr1JDUEIpHzXLN9cXZ-T6SAhU2fPEfQIQCs20Ztv6yW7z_O8SI4VcTI', 'healthmkm@gmail.com', '06-05-2021 11:19:33am'),
(15, '03AGdBq242sWAYEKmSzwSUkNRxa5XzvqataBf949eYbk70QlBp8L7GHSlZ1H8MsL8eiN9J3yOI24v9dj9XXCWiGO6Geai9jckWs1AbkiXPckKvkEdnajdaE-NkKB-nAKjLb26zzmEgYgjwouXV6R2h8srxCdfegl-qoyyAh9qYIA1ZAQZUnrKIinLUqVyDUdwXJslFmPLbermAnka3s4bL71vUUDrR5WYYBtknev93ZiXHueBmFlKI53xewCiIS8J0BTwgkPL_j-MYwrMr35uOsCx0oTroYza5qF77jhTaEfeHnbPcdvH9pslhIszrEkL1pAY6grC3BF8JLEY9MBbC7rt8VRw1GbugBJDjPVm5-jjDqChpNbiQ7otcrBhSVeJbI3qbX3pV7mX0QwypgvpAtmhRU2Lquh4oirSwktPqX0KHd9OyG8bkVOo', 'healthmkm@gmail.com', '06-05-2021 11:19:37am'),
(16, '03AGdBq24-AGfZlcxRiItrWT6jtcmX-kadOO-TzPtKKhSSeTaCMEAdw6oIxzlVvmoptRDIaItZzwNXWscwQW6GHuUuyR_U5a323d5wxcDlOIuPo6M8eRyU8BSxz9kibxi0glHA49TDB_iDLR9sKQ-CAJIzbmdOfpdsaJGPLfF9Glw9vHXKaDpqvsfOVhSJPT6vQCU6ofDOxRFrdvOnjAIumuBukbhQgy6SoBufEJpUojrYnfo8uCApq-2qPqmbBsaEtTNaN0JGnYEpueOUlTpcCBQy8VIJHnlsRvlCoeqsNOwAG9rMwUaNvzvCMiz9chf6N4cwwNthgA2cLbhtC53_gKI218uVWBub7NIJl6ehYqXX1HLtzZgArAGqeQykEm9WxGjc4Z3tuvu9TP6T82iIgm8cSq7xdZ3z7vFZFyiFUL-F6Hh58WntjPsVkGAvhMwxoCo-slssrkOn', 'anuragkdl998@gmail.com', '06-05-2021 02:30:35pm'),
(17, '03AGdBq26DT9RJac__PYgMdUaQaTUkPvM8Rwv0MiNm5E1qkVV-5nSHMz4Tsl4vBjGZ9O8J_o3DOmMqZfRDkEV9E6O4u4WcuRKTirLVn969j8JWhiw0OraSIzuOvNpfTBVKz_nAw1K4kWK9qqTOC_b84Ve86KAAVw2Ip73wMNba23f0nA1EmJpWCW6qlmCplaYfRrgJuTbWw4Ya7VmphCU6ZhCJ4q-Xc0z_N9PneJ0FOoEomeVjMKc1WnqFYYmLwCFdYi_F6JQfRy_5H5f2xZ5LQck0EVKFEkNONGFaatSKxhs3fToMfmIcXmCcRkUkRxoBA9rE8EysfJlUxJM6RtIE28aI1q7A70_zbdWo4vQPApTS2hmnbD8PAg4VnRwk1nvBhIZMc3YtsaqdIhrUcBo7burGMK-fQdvZsIVIuLwFBPUvnkZJOZImdRSzevgVnwCkRBFZaN5TqOM7', 'anuragkadakkal@gmail.com', '06-05-2021 02:31:23pm'),
(18, '03AGdBq26oW8_wGNnUOzgSZDql2yZMjFU1Vj8i7l3CN_r04zTHXDTVy77Qen2VxfViqWFYHHyrgm5miTIRuS_sxbKcAKKekLiLSrMpmlQHvxmTj4cg7gLaWncMZOjIRbBHtBik6SxBHGxGW5CWDIfHinKCDc6k8kXka1jJDGPO1HTn9fDuZvfTg41MAcJk0yGqftBRrboIr6rki7RBTSXklFgMF2_--WTX9TOdoHRR5Jlnc58wFXvvb92S7OMSR_saeH7HtIN7Hb6fnt5QvCZ9HXb2MLCoxvTlpVMwt01k6fF32I9NILihshIuDrtxz0huSSDZgz0Z-UvPAnIgsSUQBtLZ6lvgeRaeSzBYmTvWJotdANqYlCOo3LmgBaQfliU_v8KOASY6qAv_RJ8rv4vu4ptoE_U5hveV8ePjQUgcohKmiIxFntIw-17T9x-rukDdIs9ZUprBCfRv', 'anuragkdl998@gmail.com', '06-05-2021 02:31:58pm'),
(19, '03AGdBq241vJMOu1609upVbhK-FD9gbSZ0-2CemIj-0pgIBr0hHMEWao5ip8fE12Y4gHdgfCIl9OykP806L1CtlZ-Jc6YcXPGI_TIESkXrdLkWVsWjeOVTrMxizkND8NjqGBPrNfllnD7Cc-coZN1Vcnz1PkgwY6o3s_jIpc-lWN0J-vf-_n94IV84Q8sv2rXwOQouE1v5w5CqPRREeflGj0QDQKXKTDdW-DbktYDxbhiQogEH281flkYlMm3Rns8oJp6mU3I3oTIuXiHpmbuYoc3SL5_IWoM_3Q-nAW2o7zPdgEVZgIfjiKQSZz0CckbRYdpNmSBiUe-X-7fx25_fVjd4diEAHn-GBPlNZS60Jx5Yxd7uatU5a-RP_hpcL5rFUaklIERkmAP3KCIw_HQXKVErMRtO2jEB9ht6UJxAC5GPRO4AdnMIUMApfNyWCyXxIC1fbPP9E69b', 'admin@gmail.com', '06-05-2021 02:32:50pm'),
(20, '03AGdBq27NCPeJT5HTVbzvPQ9mTkTpnqs98ttW9yXmteYI3ZXIcPKbtRvtV0gT79A3S2jMCv3UZN1j1s-9wz50kipNtGjHIm-4vTmwgRpitsSqkzW8-xYmITBPiW9dPv1fOtiH4KUH7fPKLYuECN_AIPJwx5KwYJl9FrK1-X2ozj5zn9qBubc2EZz7nW_JoKpQr-8lYrIGhyRm8ZVAh6yi7a6H8EBm8eh3aYLfT1cq-LrsfMM83JaqjNoGoCcaPeoF_8x52qXY076t-GJDhnpT2D1kxYem1YMM-c92YLPCldEysZpa4nyXu7d8VEJyPBqJKoNBkSm0v63NwRRZQYIpL1skIUcJdNWRFhgGrqXLSKneK2vYWRWMedCcBBUQEwF5fBOUjLVJRMHuLXx9lTz0fvrZ8Y0MzYjxgmC0XQ-V8XfHpzaxcZgC0QTsUuRw0xVNegUiYL1A11KZ', 'admin@gmail.com', '06-05-2021 02:32:55pm'),
(21, '03AGdBq27yiEVdXhuKNmYAcLIClchF5U-n3s5BDi4D_l_uUU9ve6PN7XzyexdUDej-rdH-bnLiJDJIQAguEpoQaRNvugBit6LbaHdUI_Kl9IMiBFTHFGUu-sj1CerhQgDQaGeS1ZjzoyFRVIRBSo_BeQlE4jvO1Jgllt7rZUlF5Z0ubS7M26FRP78cdE01MCE7SeZ4zD2IDvGAdxN1XxqQkCk5jSPtFYmBiY_Fuw1wnytvwt-QiELB-Q0olP-qeMcjLa-5msp8HTOdbTGLr5bx6EJ4hp3GpLB2T6Gf9tpx3VOPsCSslF_V02fPztlgLmVTdbjpOe0GQUPnakhS7KilksufBL-RW8Iz9hon_9hXtMTMotDrY5MUPhCt839sxI4KLQQGn6HcIf19MmfI_9dO6kao6dsK-GngWg9ddqIaxKkh_78PQU-eypEFNlw31CTA-gP-EE3YXzIF', 'ambulance2@gmail.com', '06-05-2021 02:33:26pm'),
(22, '03AGdBq27uG6blHYFP90fKc-W7VLgfe7kyjIgSMz3qBdOYlrbaDX-fladQha1WKgZWErxY9cCiXRRBBDFI_1J2frLkvgMUQIB5IUpn7d5aN9nFlLNTZ0B48MpVVfQPOeuj8oMZpYAttTLGe7cDzpm1DBpDVPpOJZz2lyXIFguv3NCTmvPysgjfNWLbpz8kgIM_4sikLJlvnc04rhGLdBVpD-vNePiopdVJpgNUgL1gqLjb72t61LmXkFw-iQX9obRiOyD0DVmYSLpmOvlVHSC9s3DGwY6O2AAGv3Ll6aB57iF43XlaB80ZgCT3va1J6P8_uDCH6w_3H1x5fEMnigldcXMwMId23B9_-PX-IbW5SUVrEFr5-YTR8hA538p3iuGI2GYYNiYFZnzpKudZB-cOgt1m0C8WuzsGWmYXG9g7DxoysE5g3zhFzyGIW7q2WHBHAuprUVO16KrU', 'admin@gmail.com', '06-05-2021 02:33:34pm'),
(23, '03AGdBq25glyYMocFyUJVIWFWK_84fOcWcmM4R49tHKGvjjGeDeWoJD0DTeduTChnIiexuhBfK2-9kbnxiF2UyCSitgmw4CCd-5jd7clXgk6GALDdfabFAN1E_XI2WVhFvXwPb0JDdnZGFIwGWBYBJAcetChHxW_tX5BdBuaGtkhxp8tD0jAigrhp4inZU47NKBubOIY7yLZyfYXTG-L9ofiVIXZ22JZVnNQskoXwbmp40OdQc4sDSdrHoce7hEbc7oZYdbnOz_0YSq7EQFw93AkKPEb5w_WUB64MWZEPa4kmUSce1SeiLD7geV45ucZ3WKejOMrD47LVVhQu64gL2NbBtcdemq8FoaTq7osCJsus_07IMAYtiINEseMLeei_1V7_Mi2IhVzQwr8drGbJBc4aCzK98lDE917-GuwBf152gJdVa42zrrvQhZHFBtIz_jNvJrzjIFf5L', 'admin@gmail.com', '06-05-2021 02:33:37pm'),
(24, '03AGdBq27zqz-g6cppsMAI8ZwLjbtgVMm9EJBQTIrmJ3PeaMYtrCLhOLXSC12fEOvYeUfxSGTOBjzDMrUzHMMotiMSDGNm5D0xUxB6IGObkx-HShbiIE2D8NaU7Q9mWYabYGqUmsYEU9KpCW7VjyBnuTa7NGPJQ7jdMVv-Lqad-KrADY_8nK-D4oiwZR8yiYC-xi9AgotdF-V_EXXIIxyBie10z_XvFCWUDkStIt5qwNgWoe_vRIPCzpQvYBdP2FOL4s6dLJnvC_JJn13Y3_CQGdwNHEvqdfKz6XTBu8hanFebKdH_AzCv0E6-G3xmk0jWAPfLhPXH2tTWfWKbEexUekaT-56hCLhs8TjrAZvSXwsDSJohXqhuqzNDcEt-v_321EOqTuVlb-cIeUUyDdIX5Bb1gtzQDLa_6LZu0LZ5qPklbVw92xiX3hWhzcoh6D534xFeuQUYCAIF', 'admin@gmail.com', '06-05-2021 02:35:23pm'),
(25, '03AGdBq242B27zt50QGGNYevwGjRdRdl7R0KoIeWjZRtoqbuJ7HuzJMTNjwCRoRtJ5VLkLdmRiRMVEONdxalGBcqy30XJ0FUG-1sVQOpfIdPC66bdc6rqgSayP9vlz6V1h1XRVjGlFmUmwPpNqa7kVuaf9Uu_XsALS-vfusIP-G_W5v2IgAr_upOtcXzAzYgq2Hp5XqpWa4OalvxO5lNfsj1CNqz_HGAhEFiCMSkmD4ybo4U6slQ9lOkHu234JP9ziLZ1b1Wzw86ju7EVo2Jq3iQ3zbzsG0i9bNg0Cwpq933b2vVEXfttJzB_MCIa2lZISOMwJy7D9NavSpoGOj-rkAypgLNzbWgMRBBJK-rWHw5WmzSgtiAdklKObjWSKCbI8dgjetEphearSKHnFiJxjzB-w-ofxkkAxj0ToxkTnuQw4JoMoTHAV7hioLXgULkj1UljNbuO_RNp4', 'admin@gmail.com', '06-05-2021 02:35:29pm'),
(26, '03AGdBq24ZODPrqaQ4SXHxik077-OvhN-hRHMcFJjzG81vcjeqRKMz9l-tDc_0tRQ8Yn025tQLGvDKD61CEWqv6D7PTADIvlg-db0uVkxiWCGO89qzIcxVR111XacfrRY2fDLK0G8qEWxQrmx3M-bNHwEgTx2-2WQU6VPTL3YmRMxPI288q43crFnfokgKcHKeVmKD-fMx2ETc4J5sR3BX-p7ymBokMR-TmAiZ1n8QKXIaybF-oqC7yBaF76TA1tMDEne8INmlo92j3Oj28-ZqSYp5HRvmu3B9pB5sY4Gex31dMRy0IeovnnWnCxZlCjlc9fM82FYBKQj7f6MRkrwqeQ55EHktVZUqUhn-Tm8YeMWje4JyBjLr82gVktWwspcmc9JjpYx4vv-tErsTZOhJ2d1vLikN2h_w_WpbcgIzjkX6ezxxgPNBQfB0xKwp0g1zy28KRz5Ms6vX', 'healthmkm@gmail.com', '06-05-2021 03:22:53pm'),
(27, '03AGdBq26jh7yeCroccpl1HyafkorHJthMqJbr9s0_CLcGwh4StoO6xFraOvL_aXVqQGlNYAp-AMAKY4miJeiwulymULRpli_lbTdbIaBFExGOvjutwATz5IInVsSm5xtSVD51m0n-lwm3FBDfRr7pkfo3julW20OTpDLBphsTUno-awYf55tyKyPh0o3zecndx0P3Ls1mW2yMewL0ThRduzwFokBvyw2PRlMSl7nKj-pbW2bon2IX7A-EigfDLuHDr15R1KgsAzWrsUwK0rzhgIpeJHrqRAutk9aDg2Qhp1LFSHO5K9en57Q6x2nnLPHPQGQzP_9kNcJYdDmLlOZchivHkBRWy6usRZ6QZ5VfxCggch7WaTgfiRKlnnR_S1TzlCfNsL9I864Qe4yMKWMOpfeJMimPGIkUqtvXXMiraMSDBrkljv3hkvXMwf_Ce30sE3WzqyY2GGgX', 'healthmkm@gmail.com', '06-05-2021 03:22:57pm'),
(28, '03AGdBq24OCh5P7EQEjrILTUXqWPkj-iT1ZSV0OZGvOGlNhCBK3DigUnIGLcaJF6fV8WusU3hUbKFq1sbTCfL-ltMxYwA4HbJ0JF-0ji-w9ooBINhLC-kHSSp4GCt9PGMU5Hua9eYQq8W8FChncI2U-P9VwKVONpEfY-xeBl6BOGJxvHdOMwX7w8Yh65ZcJ9Q884EPbkrtDp3qCYNCyABzbDH_qlUMeI_ttYg1YQwjnZJOab485hcKG6KCZKkGbuADoTavzg58mmCNgRr8KSgvi72tsPNL7txa1puQ7HEXGtqfr49oxHf4zOyt7ybvjIAkEnv9QaWi2pUCVy7tqk4wU5aSfFO17cz4m0aHdeeYICrBK0Nz7ECG7u7rOFpT7fhE2zWsasV8wbc-UJ2bLGJIUtPLFNgZpjuhb_Izyqhl65wwhoIix5TlDA4NrU23ORg0zQzCmzxjHw1J', 'healthmkm@gmail.com', '06-05-2021 03:52:30pm'),
(29, '03AGdBq24f8ASgqBq_6Yz_swekbbnT0DVeecZWQAq-EHrwhUBEicUbaJaL6HnACDfrtabgZhGMFaIklat1xdYWJWGYl1Ja7vQSbeL_BcGzjDiZ86fpSeYQySC8GF0f-Fw8GYf6RU6nh9X_WHFOj3bA2FkSpS-ce60-wF-ytJOlMH1RN-EBxIXKZtGA2uWceUqnI4VyI0ZaYysFbt3ibWxDKj7HNnLOS0nTYOVFEP7gwXDWP-qCy4sAeE-x-uW4nc9PC3VTWIUZk92oimOjYILPqYlKkbUQZQWYaEEgoC7-vLG3slu18-vSFifDLsCnlnirlfMUE_MV5JAgKsf7YgpH3aOjMXxAPF_TfQETrQz6v_tMSezb3sJLKxRPio9AVySrx1mwAceLfV16ddetZapQJVlYM7VMAeMtNrGBwa69AuxHqY59t5Ed5GtF-TZFJH7bKIlE5Cux-Qd2', 'healthmkm@gmail.com', '06-05-2021 03:52:35pm'),
(30, '03AGdBq245gOZJb3Ee-d82anUdWSF1lBFUT54Y6cewD54CD285m9KDZuwMP-oMUHpVAP5eORuatXC9kan-hj4tBhxU8DLVrZokoiNlPDhBwNFTa4DBjUAm69PqST96V8qsuXsxj4SKz2GtaVB1ac5drLBotayUfDe0wtghlFaduKPztjh2vb8HfQMXq0PLYJ1iUblbab1PlCDHCFDY6N_thYWfjw0KRF5k1wjWy7gi54GFfJ7B7IQBUUYmlngq4iyKG7oNKt8HVv_4sd5Ia7U3YUlJ8HKU-I3z0qf5_AixQhb4cLQJNEjCw50l-PdCg3m6aeA-OeG_-L_By8FiF6KAEiYFboEyWxMpxxX1pgp9IRtAH-Xsn_XkpbCVIxxrRSZqiD3XkmdnpCVEbxsdc6fJgQ_P0GY-NUNP6GaHJpNENR_ZAN-J37vWzUNjgXbc6ozPavEfmmMjNImk', 'anilkumar@gmail.com', '06-05-2021 04:35:23pm'),
(31, '03AGdBq24wpw7FhfWfNBh6Nu_KdqUoR5732EXrbarw6Mtft996JYqfF2e_pQnpXo5pib0dKaNpZLaWJugopWpIepkgQm8CxIKfY-yS5eMc89TeI0g44gnJHmfsPnN-Mb_vBF_pIVe7aDupUvjLOLEVdbBHDcuhIq6UBvCbGd_Av8dRSvj0gv_fd7MR9KyC9l_41TBh5cvXtGTxJtHot5dOjKFHx8cMIzNMhA2rd1sW5TDXe8Jp73B04ZoZ2lhhSSpGp7J4APmTqzmAfs-YYDb0qcIP_45OT0LbZMtnt-Wi1fs2y-sqfsOEih54e-gWPcwUnrliwffjvz4MP4E4R_4U0CmxV5QHebqa4MppKeVQvZjvAEQpEDJ4y2FkOeHr_g1Eaph7wiwmYmYR13lGEYwG8BMz7Cbl-Lebrn7XMPlCUuChwWTgMPu3qWXylM8N68XJ6tRBQMFmRaCx', 'anilkumar@gmail.com', '06-05-2021 04:59:29pm'),
(32, '03AGdBq26uKo6qzc0ww_su6-BeJXRYjiXGNsUz1yjYl2_fPauTyM_GKyHtKtHfh8gcrYCf11x8eUCAAG8OobRUSQ3G8emyf_9JlnEoYx0bilZW6713gFCZ7-sYh-H2vaWm7veSuInQrS-7DaTfBOcGyqzKZMGHTlOGPpXZAh5nIUt-RKTpBnayBEEEVWahvhxF4P2WNQxbostpxSoKF_lSOo1nKQvD0NVJmcBLJ3S30UREe4OFJ1RAp-eCdd0laYXB3MnnHWvHy75nQI3FIwLDPgiSP_Rsdfy0Vetx1lHxZEEIsJLjNVfysSglKU7ndq2hIpxd6glsMcC2XzU1PGgJmmDksISSXdfHh9RQv80c5iPj-AeZBGa2Mtl1TYGJxJh621rH65ss6a6gVz8UovCx52wuU227pgVloIkfB6xiDBfAWXbHVr7jFu9yHDjKRHzWYuEaliBguCb9', 'anilkumar@gmail.com', '07-05-2021 06:45:50am'),
(33, '03AGdBq26Hz-qWIs9vWXbI_NIgB7JmAdGcCDMej3KaU0pPNBtZtSFYm4NjvLDNY8yh1oKwwhSeTul8aZHovsMugV4mC5GuXCAgS1b1cU82F3g-SoDwUzWbC44CTlc7BoLl3oQa4p_DyWDaUvvWf5c5V8QksBTqZlh_PwoUDTzdTP_X8lXjSwB2GgJhkj1VONDQW_ySCyBmq0Y4Qx3D7MlXKyT1UVtHOGyZi0pkVCH4fQh9Dr82mafoyYoIMZTyz3ek-1EREUnqxoZESad9HQrvN-eX0xa2LdJPunURZj5q8TZC6dC-z2SrT59ANOxToAnIqd0Qy596X_SvVSukv8pOcv-_iT_qz32ySZLay6-wwtTitEZC6nSWodsDzO0DktabeUFhzLxgfnBfHRcZ22Pnxzo9HhMeYdcfMKCVpcMMRlgmaXWUk-Uw6AdZb0KbLyARbDB0bGesEgkB', 'dranilkumar@gmail.com', '07-05-2021 06:46:02am');

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
(68, 'dranilkumar@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '6'),
(77, 'ambulance@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '7'),
(80, 'ambulance2@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '7'),
(81, 'anuragkdl998@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', '1', '1');

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
(14, '4a986ae5', 'Swapna', 'T', 'Swapna Nivas', 'anuragkadakkal@gmail.com', 'Idukki', '7356308128', 37, 58, '2021-05-13', '2021-05-19', '1234567890', 'Keep Social Distancing.', 'AnuragAResume (2).pdf', '0');

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
  `vacdate2` varchar(30) DEFAULT NULL,
  `vacdtaffname` varchar(255) DEFAULT NULL,
  `vacstaff2` varchar(255) DEFAULT NULL,
  `vacphcname` varchar(255) DEFAULT NULL,
  `vacphcaddre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vaccinereg`
--

INSERT INTO `tb_vaccinereg` (`vid`, `vkey`, `fname`, `phone`, `gender`, `idcard`, `yob`, `vaccinestatus`, `vacdate`, `vacdate2`, `vacdtaffname`, `vacstaff2`, `vacphcname`, `vacphcaddre`) VALUES
(8, 'c62a423c', 'Anurag A', '917356308128', 'Male', '944171304193', '1998', '4', '2021-05-06', '2021-05-06', 'Sathy S', 'Kumar', 'Health Centre - 102', 'Health Centre, Mundakayam Town'),
(9, '90faa34a', 'Abhishek A', '917356308128', 'Male', '944171304194', '2003', '4', '2021-05-06', '2021-07-06', 'Sruthy S', 'Kiran R', NULL, NULL),
(10, 'd6923e9c', 'Swapna T', '917356308128', 'Female', '944171304195', '1983', '4', '2021-05-06', '2021-07-06', 'Sunil', 'Soumya MS', NULL, NULL);

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
-- Indexes for table `tb_drbooking`
--
ALTER TABLE `tb_drbooking`
  ADD PRIMARY KEY (`dbid`);

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
-- Indexes for table `tb_logginglogin`
--
ALTER TABLE `tb_logginglogin`
  ADD PRIMARY KEY (`logid`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_doctor`
--
ALTER TABLE `tb_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_drbooking`
--
ALTER TABLE `tb_drbooking`
  MODIFY `dbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `tb_logginglogin`
--
ALTER TABLE `tb_logginglogin`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

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
