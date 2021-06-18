-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2021 at 02:55 AM
-- Server version: 10.4.18-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u389386359_covidcare4u`
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
(1, '5f0817fd', 'Vipin', 'VP', 'Vipin Villa, Pathanamthitta Town', '7356308128', 'Pathanamthitta', '695614', 'Maruti Suzuki', 'Eeco', '7aee6c05MedBill (1).pdf', '7aee6c05MedBill.pdf', NULL, 111, 114);

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
(1, 'fe974441', 'Community Kitchen - Pathanamthitta Town', 'Community Kitchen, Pathanamthitta Town', 'Pathanamthitta', '567890', 'Pathanamthitta Town', '6c3b6179TravelPAss.pdf', '7456367778', 113);

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
(1, 'e20121f4', 'Anurag', 'A', 'Anu Bhavan, Missionkunnu Adayamon PO', '7356308128', 'Male', 'Pathanamthitta', '567890', 108);

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
(1, '2c2d0297', 'Romy', 'R', 'Romy Bhavan, Pathanamthitta Town', '9645023555', 'Male', 'Pathanamthitta', 'MBBS', 'Physical Medicine', '3', '567890', 115, 111);

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
(1, '97473f31', '2021-06-13', 'Anurag A', 'anuragkadakkal@gmail.com', 'Pathanamthitta', 'Anu Bhavan', 'Fever', '7356308128', '2021-06-16 - 10am-11am - Keep social distancing', '1', 115);

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
(1, '6ecaba2f', 'Sunday 13th of June 2021', '2021-06-13', '10:05:11am', 'Pleaase meet me.', 115, '2', 111, 'okay.');

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
(1, '5018dd5b', 'Karunya Medicals - Pathanamthitta Town', 'Karunya Medicals, Pathanamthitta Town', 'Pathanamthitta', '567890', 'Pathanamthitta Town', '7356308128', '6c3b6179TravelPAss.pdf', 112);

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
(1, '03AGdBq25cdS5ivjRQONxkZdeh_nP22sy5I5yk9iEoXcRFdMpeorJ_WWLzifHxLVU8zH0KKgHLFkYNK-PdVom8HFM92GV_XoiLBN1q5yuM9bS08aDA39kzfP8H_ahIjSeOpKnNcVKPyCJY0d7_clM-NaMZfngNZ_fEPaRw4RcqSy-W1_JsZuO6mt-KbUFKrnVm926YqnUkCuKZ_FMw1QRubYa7FusjX-oL5tIMcQvNi5W6ZX1h3dWD_HoZr0pJ4f7PEE9_iT-m-WSPiGUhdSt4S7vIapDkmtYHnfp6tusKVMdOgeGIJmAwj6AjfnVG7R-vDvaJ-tmGdNnzF2epl1t2Moiqb1SqEM1_cLe1b2-ALSch7vOFYpvWMkfWN3xmWmo3SfPTJ8rnSl2zhtavYPc1bRhv20Si-ah1SLzh7VdNEj3pivQn4UoGx88vdtvIkA3z6w1eSWcNdQ7p', 'admin@covidcare4u.online', '13-06-2021 09:08:15am'),
(2, '03AGdBq24Mix1b60CTfwEf9v-klP7HB7BiSEFARseeJmW6GsDeLefZBaP3PKQUKTTqS1awG4IDzRS8GYZjY5zB68rBCA7258xvrqmBRm0zX_7vJDzqzN097V0UDTMLIwKuSzXbGBLwWXH5FebLuLmMuMVov6DFDDsWc2aOfxnLc1HE2yJeT7ZcTNaG7nBBidLVzMKOj7QfzSGI2Od3GzeKF_pZashKgm4t-C7fwFyVVCVAoZZH5ikcBtIUTKwkm5JuWoLKjU-i-9YU3AtNCAXy4jCcifzto09SC-zmZiHQ2L9esSmmdsD-lWR9OF_uNCjajoOV49W5P7HOHOT66uUTLjG3xFXPavIIUr6lX-cClObwYdqPq_FrE3Y6OJoJvGo2YcYNKjVwjdJhNxoAY3w-4YrN6a-OMJ1Y2S5oH8VpwOgi68W9Kg3QINbSzaX_bXDed6SWcQikZrLv', 'police@covidcare4u.online', '13-06-2021 09:09:02am'),
(3, '03AGdBq25GYQXtJ4S53yuJQLy5NOwFw99ahoQ_wYt58e8PRQoZ8MZdQZt3cYPmXLXMrdvanYM_5dPQzsVY6EiLX6knMbbj5dSjXNFsY_448-4F4kb6XNlVclXD9gXUa03DKmc01OtmFm1bQ5DzO0-1FsLjEHBGVUsnyiHuY1fousa-lqU_AAvaf7RoeWgYTqH07KrVF2dByzmMCyT5r-m9saQgv8J3NwK--BxdV09e-pqKvkGQKzK4yxvGXAzEiyBFQfPJtTaqCloY1qvpFsBqHQ_LNI6LUGOIHG7lVxbk0N2wYyDZdTf59AzIn2FBF_ov5oOgdnDfDFQiMkBliKG3VRQop1oF49wPns6SoLCgyow6RuKlKjkjxlMvv1nEfbsTxnHlqJiuCUVQ0wtdFHOMkIvvezwT2d5tmbR4wz1jIz0urxIcv-luCcfUp-1NdxmgIBonXCJtM9YD', 'anuragkadakkal@covidcare4u.online', '13-06-2021 09:43:38am'),
(4, '03AGdBq27TuS7331gNCp9v6zwqUAdCvZl70_ddszagPeJ8ynYX_l7kYF0jvmKGG7qxBvkd81WxbKtUqt-s4xIomkriXvhgh9vzrrR-qMNUN8ChmRehSqhBuHmNGYzK-4prqfH0tYFNzAZTcKBCe5i5KPUgqTgQYVK5pUSYIJUUTXpirpEW62sWgk3bZ5w-TcCP_7VJET-98hcba0iFwcK3VSUPc4xKvs2PGYXDwxDKmVqLV_gBOpEiPg_NR_BxwkHNzvuyJhRs0qIiwXkTLpWA0lMMvWUAih82rLuK-55Cxk8fbopKqU5rHPIe6n5JTCYW8r5hRlQgiiybVPDKliC6krG73qd-GDLFjQVi2u4-zPrrmIICgHKpAfmfcs7CSZNcLCTxuIN6cBT4tCjbpRvL1VI7LcM54BRTHW8ZxC-5iW9xvac7_315_bKUz0EVOH66WlCuncJr7ofm', 'police@covidcare4u.online', '13-06-2021 09:46:41am'),
(5, '03AGdBq27nXH_vjiCsX0mP8snUwy68u4a7QTr-RB-Wud41vUJkjse8Ftemwuwfo17wlfKvBtPH_1Fw3Gjls7IejmW4X4MGuzFIMZvuRbUw7Vvl-zlRdWC3uVIKnQN2Q06_Kkrbcqijv6Bm9xFR6Cjvc_O4uLzptfIRz8lJ3OagKdb-ZF-ug_iSdTD9VC8EBH-IGTNt80NZQ3cZRihmNHxwaQmni9ZTbnerM_2SCBEKiwz8BBR44EG-WX81StAMpnVQRvdrKV4v6Lxnip-8EkswiULcSPv4JNpMR_FmnquNBPho_IEpVcJBavWsUGFwYFlRhhRqgzpmohlScoFqkpC-tUHDkmuez93EQun8TIAZfr1hi4F9EnPMn9nyVScZAZTDwiZwn9V1z4NUDBJR4VYUGdIcYzmylh69609MDhF1bqJ-rjZlI6OurgRAqL1zX9n0tbxaTo837yJB', 'admin@covidcare4u.online', '13-06-2021 09:51:23am'),
(6, '03AGdBq25S31aLw5ra7y__tDa_IhEMDFeaiQiuSrhV1CQNbYVtP__MsW4CoMEcif3yp66TLb2XH8_rUMdZXkMfxlb55lM4PJUzcuFT-CfwXeG0o09dQyrBVH7-Ca1aQpg-ugIR2GXld2chN5EvTgDsm-lvgVu9rnn7kQwJjFfWplUdgSbQENUMnamQ6PChMp1ouN33rgrP3dGsbxSzjzVSpQgxkquWn38BLfxvmDR9QWNAKjrNbT7nhF8uD0_BdDxqE8kWpBeLfuk0yKG3-gFRCqtQqMFqabC8cMJJ9-6cxHTyUeJpICBa92yWY8v0wfXFcK_7qQBEgXW2Q_HtYnFjnv1aeD2AT84hd_JJGpQUGkzscfqLHanlZUbqB6JiGZ9zvc7XQROMwsVlfrf9jjvkbi0cALNrvIE7s0iT_rXQj95QqlqUbT3d5Shr0xuOqCuC_CrYWutJdfCh', 'police@covidcare4u.online', '13-06-2021 09:53:09am'),
(7, '03AGdBq26qSp9nA3faFrJgnzFCJVoh-BkLh5geNR3W-qGJ2YWfRXcmrMtBhQaKbHiu4-Pu0Zbwr-zsx_c2xIyCJgvZYY1z3UUISVdgRm-2nQzip4NpF6cqctDcWKvO4w2XUP54HazG7U75kBImsEeHFhHccdPQRxdq5_KSLvzV5zu2Fjcx34t9Q2NDMu1JOcn8elRBOKEE1zWe7Axy0ty3aC3R3XPZJWeWUqkse7ofoSlQmbfn6jE7rVefZe6wiyZEo8UACCdr87Mkbv2bRNtiDjrdF2g4RFCbNUN3Pt4AOrv8QcajzVpotAFS-gcN-eC__S2dUZDGMBsFnP5R2vlZ0HWOReZ_28Vpyftwnju88MFyk5IxctGH43zttObAS-Dviu2sGlOJJeRwvhwG3S4suynp_fOmd4m397CRyBGkqBw3Y70gZDdUeY5MPhEYNEVILn5jy8IsRaiQ', 'phc@covidcare4u.online', '13-06-2021 09:53:24am'),
(8, '03AGdBq26xFBGLWrA2zaXUqm6jjOGjLxIrlvUpXC1wE3RT5UOjlNSVcB5UQHu0KaWd5liIU38mFLEY_86oe8WueLAktNlJXlf8A6X7zmMT9a8PIRI_7jGZaevvzr32mcpYp2XI-I7H0etayUght31p9X8lo7ELo2EFN4jGtjeIuemXulZnN0HJPA_2IiIWtOqdzxU-4QaW_eD4y8tA-1zvfEy28c6S3YWMtJrPyF4UdI_qZD5wf2FjTUk1obP_uPsYHo91AFid3jiatAKTvPyUCxPlfUUv3HUPkpYS6ogrrood3C3s7xji6gwlsWtDkDo1IXnZrAHnXLK4ZXo967achN9NNvg2FQn2tvAt-S8pX_RSY76uif9s95Yqs2Lh6Y9ydx9gw7BcoUJndxZBen4i6cCeYHqFoMoHTSIvI8anpt60sEnTZDPD7Kerw39Msrr9tXwjAS35J4Rg', 'doctor@covidcare4u.online', '13-06-2021 10:04:06am'),
(9, '03AGdBq25cYEhSQ1KcRixiABDDbar6hDdKpUuFuz1Awpi0VVeADmZOLvxiQZMUI9g1ifSmB1Lkds618_oeEn32ClJ8qSBB-MQpF-htPG9EpdbYTH0r0RFww4Tst8mjLwphwUI8xDjouWQ_4RvbS80DZwK9v3eUpnCyTXVbdPsQi7s-EgKVcgAYrBq1s8bDh2fJrXG5VZAX9ZcI1kg7O5Ea6iE2y9ASDs4Quz832i5UhxcK-IvtQBa2XhDkmqb_Y5DrGD0ytOwbniyVVl_3rvfV4foR_4tXc4aPE_VUWssX0G7nicsFkOg8L1ItkeKJLHSort0Nf2tdLoAK2hXKkxej9ek5wP6DUz_CAh_JrPwbzsKUUxBOfoCElYpMxabMq_9zH0RuNIS2AzKC61_0Zdn-GgA7PAjg-Mc9ObTt34yr79if5cXZZGKDRrEj7Y73smxORUjTfZYHz1HH', 'ambulance@covidcare4u.online', '13-06-2021 10:06:19am'),
(10, '03AGdBq24TMFO8FtiJfuFQ8OGW2bj7ZQN6Z7pT0ROtM6m8qXRtcQtpdIHtfOoUXvh7Tnu2WwNxSPOBJGR6bEXep21rcOaWijif9p3UuZ7ljiFATBG1nPmODv21wvq3LEF5nQ8EwbG9bbL5RA8JHxkD48tPLC0IHDy74IO4MOj2R2cn1N-3SUDEMtqu2gUaTWb-I71UheUWM15W6YIl3mcvhQ-yEEXgOnUnwUmRyzc-Z7Q8xIe2Tg9-bxhCvUB5CPNypUjB5qh7oOUGtihz3Jo6WIZdynqzYsSCpVM2Gidg3SMPvdQfRA-pgn4D2KUEl-Du98av4q_Hqxw_qQIF_OmSrXdxsxANl8gVj4412qVbHQkjcJoDIgvkg94G5rsbhcaYX8e2mmbrREQ4ScwZhYOfj3QuNjElhonFGhXjNwPULhMYAY0np5HTKZK5ehuQcnFxmMWtEnIF5dC-', 'admin@covidcare4u.online', '16-06-2021 06:33:38am'),
(11, '03AGdBq251NUZBJt3yk1aHWfV9zSAPNy-E4F7ftTXmQan5EJ352OHYYkV-PFG1CiTvQtCQrQSXyf_AOoU5mNDYntNySVE4fRVDPw2hrEzEPesx3W6zaaKd-Vmi_PGREsiFaQlhCILuvwdGoTP4QcpMy3no_sB-KAoX5f4sKGKA6oy1mT6CNAP4mcmrhGpq0QqUik0zpM1c8QYFC7xjcRGuClqAw75PuZ0ZuSyCP4gAf8uUgYr95DJ4HZS5Ney284AOtTXz7tDgLhcUNJvA8CyI-gf_65lONZSI9__b-L5wOqQdcanuRoZrCPtCEqtuAradwCnGk0yMzGKR6Jo2nyKCRgxf3u2zFTPm-EpsJ9Hxiad5wyjEz_mlQOHyUbQIpyFHWkGKjJpYi_Dh-zrA1bs-TR9xAq-jTTuqOUIxiwF5JJdBp4BOuN3oPZlwR9Bvn4xkDZix003pldPP', 'admin@covidcare4u.online', '16-06-2021 08:05:35am'),
(12, '03AGdBq27Gy-noGPpz8O6cP9CFP6YyHkNQnIHT_3hM8Eo7pQn3v-sJufoLl0syyD-aBvsf-0-6mPr-qhOECFb9fZGBQGpgcDSwwMx9C3P-PCFWwnXQrHwPg4h2HvugbmjrmCD3RMOHWL9hjXfibTc0yQgNa9RbNo6Stzos_CzWRQOki4_28a8SJb0MBfTwzaGeqN4p7w_lKqAMOuJjozCP9YR91RvjmKo30MkvQ99ZESJWLt3A-D2evAO3fU32Ctmruee1Nd4qXPZxYUw03fr9ZKP4hYAw6KSGXYdrf1lKNRZjkYzmBLl_7BdqBNUJ3U2OvGsRgFBImTbTE2sP8277cog0nbFanOllqgqHX8LzIgaOvkfAmZDXS0xqHqNYMnTVVTol_u0a_Ly6pGrOCVZk69mCjGiiBCOnSlJZBgkT59Aa5JfosSTwy7OmAIBzD2qPFjmZ8oKyrTi3', 'admin@covidcare4u.online', '16-06-2021 08:20:17am');

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
(24, 'admin@covidcare4u.online', '751cb3f4aa17c36186f4856c8982bf27', '1', '0'),
(108, 'anuragkadakkal@covidcare4u.online', '751cb3f4aa17c36186f4856c8982bf27', '1', '1'),
(110, 'police@covidcare4u.online', '751cb3f4aa17c36186f4856c8982bf27', '1', '2'),
(111, 'phc@covidcare4u.online', '751cb3f4aa17c36186f4856c8982bf27', '1', '5'),
(112, 'medicalstore@covidcare4u.online', '751cb3f4aa17c36186f4856c8982bf27', '1', '4'),
(113, 'kitchen@covidcare4u.online', '751cb3f4aa17c36186f4856c8982bf27', '1', '3'),
(114, 'ambulance@covidcare4u.online', '751cb3f4aa17c36186f4856c8982bf27', '1', '7'),
(115, 'doctor@covidcare4u.online', '751cb3f4aa17c36186f4856c8982bf27', '1', '6');

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
(1, '91aac0f6', 'PHC Pathanamthitta, Town', 'PHC Pathanmthitta Town', 'phc@covidcare4u.online', 'Pathanamthitta', '567890', '9645023652', 111);

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
(2, 'SHO Office, Town', 'police@covidcare4u.online', 'Pathanamthitta', '567890', '9645023651', '2942181d', 110);

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
(1, '3bc7eff3', 'Anurag', 'A', 'Anu Bhavan, Pathanmthitta', 'anuragkadakkal@covidcare4u.online', 'Pathanamthitta', '7356308128', 110, 111, '2021-06-09', '2021-06-12', '24/4688/2016', 'Don\'t come out of your room and do social distancing.', 'driving (1).pdf', '0'),
(2, '32bc7748', 'Anurag', 'A', 'Anu Bhavan', 'anuragkadakkal@gmail.com', 'Pathanamthitta', '7356308128', 110, 111, '2021-06-09', '2021-06-16', '24/4688/2016', 'keep social distancing', 'driving.pdf', '0');

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
(1, 'f28ed56e', 'Covishield', 20, '2021-06-23', '1', 111);

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
(1, '9778200e', '823f6e43', 111, '2021-06-13', 1);

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
(1, '823f6e43', 'Anurag A', '917356308128', 'Male', '944171304193', '1970', '4', '2021-06-13', '2021-06-13', 'Sheela A', 'Anu B', 'PHC Pathanamthitta, Town', 'PHC Pathanmthitta Town');

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
  `idnumber` varchar(20) DEFAULT NULL,
  `filename` varchar(100) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vehiclepass`
--

INSERT INTO `tb_vehiclepass` (`id`, `tpkey`, `traveldate`, `returndate`, `fromplace`, `toplace`, `carregno`, `personcount`, `passkey`, `email`, `namelist`, `purpose`, `status`, `curdate`, `feedback`, `pkey`, `idnumber`, `filename`, `loginid`) VALUES
(1, '', '2021-06-23', '2021-06-23', 'Pathanamthitta', 'Kollam', 'KL-16-Q-1708', 1, '5dc228f6', 'anuragkadakkal@gmail.com', 'Anurag A', 'Exam in college', '1', '2121-06-13', 'Approved', '110', '24/4688/2016', 'dl.jpeg', 108);

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
  MODIFY `ambid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_communitykitchen`
--
ALTER TABLE `tb_communitykitchen`
  MODIFY `cmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_doctor`
--
ALTER TABLE `tb_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_drbooking`
--
ALTER TABLE `tb_drbooking`
  MODIFY `dbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_drnotify`
--
ALTER TABLE `tb_drnotify`
  MODIFY `drnotid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_food`
--
ALTER TABLE `tb_food`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_foodbill`
--
ALTER TABLE `tb_foodbill`
  MODIFY `fbid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_foodreg`
--
ALTER TABLE `tb_foodreg`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_karunyamedicals`
--
ALTER TABLE `tb_karunyamedicals`
  MODIFY `kmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_logginglogin`
--
ALTER TABLE `tb_logginglogin`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `tb_medbill`
--
ALTER TABLE `tb_medbill`
  MODIFY `mbid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_medicine`
--
ALTER TABLE `tb_medicine`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_medicinereg`
--
ALTER TABLE `tb_medicinereg`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_phc`
--
ALTER TABLE `tb_phc`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_policestation`
--
ALTER TABLE `tb_policestation`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_quarreg`
--
ALTER TABLE `tb_quarreg`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_sosambreg`
--
ALTER TABLE `tb_sosambreg`
  MODIFY `sosid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_vaccine`
--
ALTER TABLE `tb_vaccine`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_vaccinebookhistory`
--
ALTER TABLE `tb_vaccinebookhistory`
  MODIFY `vbkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_vaccinereg`
--
ALTER TABLE `tb_vaccinereg`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_vehiclepass`
--
ALTER TABLE `tb_vehiclepass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
