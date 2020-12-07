-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2020 at 08:46 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `YRH_KPI`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'superuser', 'super');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `degree_id` int(10) NOT NULL,
  `degree_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `degree_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`degree_id`, `degree_name`, `degree_no`) VALUES
(1, 'โรงพยาบาล', 1),
(2, 'หน่วยงาน', 3),
(3, 'ทีม', 2);

-- --------------------------------------------------------

--
-- Table structure for table `graph_3m`
--

CREATE TABLE `graph_3m` (
  `graph_3m_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `indicator` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(10) NOT NULL,
  `number1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number4` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor4` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mean` int(50) DEFAULT NULL,
  `comment` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_post` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `graph_3m`
--

INSERT INTO `graph_3m` (`graph_3m_id`, `indicator`, `year`, `number1`, `divisor1`, `number2`, `divisor2`, `number3`, `divisor3`, `number4`, `divisor4`, `mean`, `comment`, `date`, `user_post`, `status`) VALUES
('DC01012551', 'DC0101', 2551, '3', '2', '2', '3', '3', '4', '3', '3', 98, 'สามาถรวิเคราะห์กราฟตัวชี้วัดนี้ได้ทางช่องนี้', '2020-08-08 16:14:07', 'admin', 0),
('DC01012555', 'DC0101', 2555, '4', '6', '5', '5', '6', '6', '5', '5', 92, 'สามาถรวิเคราะห์กราฟตัวชี้วัดนี้ได้ทางช่องนี้', '2020-08-09 23:14:12', 'admin', 0),
('DC01012556', 'DC0101', 2556, '8', '9', '8', '9', '9', '8', '8', '8', 98, 'สามาถรวิเคราะห์กราฟตัวชี้วัดนี้ได้ทางช่องนี้', '2020-08-09 23:14:48', 'admin', 0),
('DC01012557', 'DC0101', 2557, '7', '6', '8', '7', '3', '6', '', '', 70, 'สามาถรวิเคราะห์กราฟตัวชี้วัดนี้ได้ทางช่องนี้', '2020-08-09 23:15:15', 'admin', 0),
('DC01012559', 'DC0101', 2559, '4', '7', '5', '7', '4', '7', '6', '7', 68, 'วิเคราะห์กราฟ', '2020-08-24 11:33:18', 'admin', 0),
('DH01012551', 'DH0101', 2551, '7', '7', '12', '6', '12', '7', '14', '7', 168, 'สามาถรวิเคราะห์กราฟตัวชี้วัดนี้ได้ทางช่องนี้', '2020-08-08 16:16:26', 'YRH', 0),
('DH01012561', 'DH0101', 2561, '21', '1', '1', '1', '1', '1', '1', '12', 577, '', '2020-09-22 16:21:57', 'admin', 0),
('DH01012563', 'DH0101', 2563, '6', '5', '7', '6', '5', '7', '', '', 77, '', '2020-08-15 13:50:48', 'admin', 0),
('DH04012559', 'DH0401', 2559, '5', '6', '6', '6', '6', '6', '6', '6', 96, NULL, '2020-08-12 16:03:57', 'admin', 0),
('DR01012553', 'DR0101', 2553, '4', '5', '5', '4', '3', '3', '4', '4', 101, 'สามาถรวิเคราะห์กราฟตัวชี้วัดนี้ได้ทางช่องนี้', '2020-08-12 11:08:18', 'admin', 0),
('DR02032551', 'DR0203', 2551, '5', '3', '7', '5', '5', '4', '5', '6', 129, 'สามาถรวิเคราะห์กราฟตัวชี้วัดนี้ได้ทางช่องนี้', '2020-08-12 11:10:49', 'admin', 0),
('DR04032550', 'DR0403', 2550, '1', '1', '1', '1', '', '', '', '', NULL, NULL, '2020-08-14 19:45:09', NULL, 0),
('DR04032551', 'DR0403', 2551, '1', '1', '1', '1', '', '', '', '', NULL, NULL, '2020-08-14 19:46:32', NULL, 0),
('DR04032554', 'DR0403', 2554, '1', '1', '1', '9', '5', '5', '', '', 53, '', '2020-08-14 19:50:17', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `graph_6m`
--

CREATE TABLE `graph_6m` (
  `graph_6m_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `indicator` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(10) NOT NULL,
  `number1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mean` int(50) DEFAULT NULL,
  `comment` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_post` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `graph_6m`
--

INSERT INTO `graph_6m` (`graph_6m_id`, `indicator`, `year`, `number1`, `divisor1`, `number2`, `divisor2`, `mean`, `comment`, `date`, `user_post`, `status`) VALUES
('DC01012552', 'DC0101', 2552, '5', '4', '6', '4', 138, 'สามาถรวิเคราะห์กราฟตัวชี้วัดนี้ได้ทางช่องนี้', '2020-08-08 18:01:53', 'admin', 0),
('DH01012550', 'DH0101', 2550, '6', '76', '5', '76', 7, 'สามาถรวิเคราะห์กราฟตัวชี้วัดนี้ได้ทางช่องนี้', '2020-08-08 16:14:37', 'admin', 0),
('DH04012555', 'DH0401', 2555, '1', '8', '', '', 6, 'jhkjh', '2020-08-14 21:48:01', 'admin', 0),
('DR02032552', 'DR0203', 2552, '4', '5', '5', '5', 90, 'วิเคราห์กราฟ', '2020-08-15 14:49:49', 'admin', 0),
('DR04032552', 'DR0403', 2552, '1', '2', '3', '4', 63, '', '2020-08-15 09:48:35', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `graph_m`
--

CREATE TABLE `graph_m` (
  `graph_m_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `indicator` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(10) NOT NULL,
  `number1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number4` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor4` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number5` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor5` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number6` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor6` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number7` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor7` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number8` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor8` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number9` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor9` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number10` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor10` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number11` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor11` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number12` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor12` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mean` int(50) DEFAULT NULL,
  `comment` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_post` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `graph_m`
--

INSERT INTO `graph_m` (`graph_m_id`, `indicator`, `year`, `number1`, `divisor1`, `number2`, `divisor2`, `number3`, `divisor3`, `number4`, `divisor4`, `number5`, `divisor5`, `number6`, `divisor6`, `number7`, `divisor7`, `number8`, `divisor8`, `number9`, `divisor9`, `number10`, `divisor10`, `number11`, `divisor11`, `number12`, `divisor12`, `mean`, `comment`, `date`, `user_post`, `status`) VALUES
('DC01012550', 'DC0101', 2550, '3', '4', '4', '5', '4', '5', '5', '5', '5', '5', '7', '4', '6', '5', '7', '5', '5', '5', '4', '5', '5', '5', '4', '5', 103, 'สามาถรวิเคราะห์กราฟตัวชี้วัดนี้ได้ทางช่องนี้', '2020-08-08 16:13:08', 'admin', 1),
('DC01012554', 'DC0101', 2554, '3', '6', '3', '6', '2', '6', '3', '6', '4', '6', '3', '6', '4', '6', '5', '6', '5', '6', '4', '6', '4', '6', '6', '6', 64, 'สามาถรวิเคราะห์กราฟตัวชี้วัดนี้ได้ทางช่องนี้', '2020-08-09 21:49:45', 'admin', 1),
('DC01012558', 'DC0101', 2558, '5', '9', '4', '9', '5', '9', '6', '9', '7', '9', '8', '9', '7', '9', '8', '9', '7', '9', '8', '9', '9', '9', '8', '9', 76, 'วิเคราะห์กราฟ', '2020-08-24 11:32:39', 'admin', 1),
('DH04012560', 'DH0401', 2560, '2', '2', '3', '4', '2', '3', '3', '4', '2', '3', '3', '4', '2', '3', '3', '2', '3', '4', '3', '3', '2', '2', '3', '4', 85, '', '2020-09-08 15:45:12', 'admin', 0),
('DR02032550', 'DR0203', 2550, '6', '8', '6', '8', '5', '8', '5', '8', '4', '8', '5', '8', '6', '8', '4', '8', '5', '8', '5', '8', '7', '8', '', '8', 68, 'วิเคราะห์กราฟนี้ ได้ในช่องนี้', '2020-08-15 14:11:03', 'admin', 0),
('DR02042550', 'DR0204', 2550, '1', '2', '1', '3', '2', '3', '3', '3', '4', '3', '3', '3', '2', '3', '3', '3', '2', '3', '3', '3', '3', '3', '4', '3', 88, 'วิเคราะห์กราฟ', '2020-08-14 21:46:41', 'YRH', 0),
('DR02042562', 'DR0204', 2562, '7', '8', '6', '8', '5', '8', '6', '8', '6', '8', '5', '8', '7', '8', '6', '8', '7', '8', '7', '8', '8', '8', '8', '8', NULL, NULL, '2020-10-23 14:51:30', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `graph_y`
--

CREATE TABLE `graph_y` (
  `graph_y_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `indicator` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(10) NOT NULL,
  `number1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `divisor1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mean` int(50) DEFAULT NULL,
  `comment` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_post` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `graph_y`
--

INSERT INTO `graph_y` (`graph_y_id`, `indicator`, `year`, `number1`, `divisor1`, `mean`, `comment`, `date`, `user_post`, `status`) VALUES
('DC01012553', 'DC0101', 2553, '6', '6', 100, 'สามาถรวิเคราะห์กราฟตัวชี้วัดนี้ได้ทางช่องนี้', '2020-08-08 18:02:22', 'admin', 0),
('DR02032553', 'DR0203', 2553, '9', '10', 90, 'กราฟนี้', '2020-08-15 14:52:48', 'admin', 0),
('DR04032553', 'DR0403', 2553, '1', '1', 100, '', '2020-08-15 09:49:20', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `indicator`
--

CREATE TABLE `indicator` (
  `id` int(10) NOT NULL,
  `indicator_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `indicator_name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `degree` int(10) NOT NULL,
  `team_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `indicator`
--

INSERT INTO `indicator` (`id`, `indicator_code`, `indicator_name`, `first_name`, `last_name`, `degree`, `team_code`) VALUES
(18, 'DC0101', 'ร้อยละของผู้ป่วยเบาหวานที่ควบคุมระดับน้ำตาลในเลือดได้ดี', 'จำนวนผู้ป่วยเบาหวานที่ควบคุมระดับน้ำตาลได้ดีตามเกณฑ์ที่กำหนด ในครึ่งปี', 'จำนวนผู้ป่วยเบาหวานที่ขึ้นทะเบียนและมารับบริการทั้งหมด (ในครึ่งปีเดียวกัน)', 2, 'DEN'),
(1, 'DH0101', 'อัตราการเสียชีวิตของผู้ป่วย AMI', 'จำนวนครั้งของการจำหน่ายด้วยการเสียชีวิตของผู้ป่วย AMI จากทุกหอผู้ป่วย', 'จำนวนครั้งของการจำหน่ายทุกสถานะของผู้ป่วย AMI จากทุกหอผู้ป่วย ในช่วงเวลาเดียวกัน', 1, 'YRH'),
(2, 'DH0401', 'ร้อยละของผู้ป่วย AF ได้รับยา Warfarin มีระดับตามเป้าหมายการรักษา', 'จำนวนผู้ป่วย Atrial Fibrillation ที่ไม่มีข้อห้ามหรือข้อจำกัดของการให้ยานี้ และได้รับยา Warfarin ที่มีค่า INR ระดับเป้าหมายใน 1 ไตรมาส', 'จำนวนผู้ป่วย Atrial Fibrillation ที่ไม่มีข้อห้ามหรือข้อจำกัดของการให้ยานี้ และได้รับยา Warfarin ที่มีค่า INR ระดับเป้าหมายใน 1 ไตรมาส', 1, 'QSC'),
(23, 'DR0101', 'อัตราการเสียชีวิตหลังจากเข้ารับการรักษาของผู้ป่วยโรคปอดบวม ', 'จำนวนครั้งการจำหน่ายด้วยการเสียชีวิตของผู้ป่วยโรคปอดบวม จากทุกหอผู้ป่วย', 'จำนวนครั้งของการจำหน่ายทุกสถานะของผู้ป่วยโรคปอดบวม (ในเดือนเดียวกัน)', 1, 'PCT'),
(22, 'DR0203', 'อัตราความสำเร็จการรักษาวัณโรค', 'จำนวนผู้ป่วยวัณโรคปอดพบเชื้อรายใหม่ที่ได้รับการรักษาหายรวมกับการรักษาครบ', 'จำนวนผู้ป่วยวัณโรคปอดพบเขื้อรายใหม่ที่ขึ้นทะเบียนรักษา (ในรอบปีงบประมาณเดียวกัน)', 1, 'MSO'),
(27, 'DR0204', 'ร้อยละผู้ป่วยวัณโรคได้รับการตรวจคัดกรอง HIV', 'จำนวนผู้ป่วยวัณโรคปอดที่ได้รับการคัดกรอง HIV ทั้งโดยวิธี VCT, DCT, PICT', 'จำนวนผู้ป่วยวัณโรคปอดทั้งหมด (ในรอบปีงบประมาณเดียวกัน)', 1, 'YRH'),
(29, 'DR0403', 'อัตราป่วยตายจากโรคปอดอุดกั้นเรื้อรัง', 'จำนวนครั้งของการจำหน่ายด้วยการเสียชีวิตของผู้ป่วย COPD จากทุกหอผู้ป่วย', 'จำนวนครั้งของการจำหน่ายทุกสถานะของผู้ป่วย COPD จากทุกหอผู้ป่วย ในช่วงเวลาเดียวกัน', 3, '11');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `staff_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `staff_surname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `staff_birthday` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `staff_id_num` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `staff_degree` int(10) NOT NULL,
  `staff_team` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `staff_position` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `staff_username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `staff_password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_name`, `staff_surname`, `staff_birthday`, `staff_id_num`, `staff_degree`, `staff_team`, `staff_position`, `staff_username`, `staff_password`) VALUES
(3, 'ฮาแว', 'มูสอ', '11/03/1953', '1847700887880', 2, 'CAT', 'หัวหน้า', 'CCT', 'cct'),
(2, 'คอยรียะห์', 'ตันอีโน', '11/06/1954', '1949988998899', 2, 'DEN', 'เลขานุการ', 'den', 'den'),
(1, 'รัยยาน   ', 'จะปะกียา', '11/09/2540', '17566464646', 1, 'YRH', 'สมาชิก', 'yrh', 'yrh');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) NOT NULL,
  `team_code` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `team_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `degree_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `team_code`, `team_name`, `degree_id`) VALUES
(61, '1', '1', 1),
(62, '11', '222', 3),
(8, 'CAT', 'งานพัสดุ', 2),
(9, 'DEN', 'ฝ่ายทันตกรรม', 2),
(34, 'MSO', 'องค์กรแพทย์', 1),
(3, 'PCT', 'ทีมนำทางคลินิก', 1),
(2, 'QSC', 'ศูนย์คุณภาพ', 1),
(1, 'YRH', 'โรงพยาบาลยะรัง', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`degree_id`);

--
-- Indexes for table `graph_3m`
--
ALTER TABLE `graph_3m`
  ADD PRIMARY KEY (`graph_3m_id`),
  ADD KEY `indicator_code_year` (`indicator`);

--
-- Indexes for table `graph_6m`
--
ALTER TABLE `graph_6m`
  ADD PRIMARY KEY (`graph_6m_id`),
  ADD KEY `indicator_id` (`indicator`);

--
-- Indexes for table `graph_m`
--
ALTER TABLE `graph_m`
  ADD PRIMARY KEY (`graph_m_id`),
  ADD KEY `indicator_id` (`indicator`);

--
-- Indexes for table `graph_y`
--
ALTER TABLE `graph_y`
  ADD PRIMARY KEY (`graph_y_id`),
  ADD KEY `indicator_code_year` (`indicator`);

--
-- Indexes for table `indicator`
--
ALTER TABLE `indicator`
  ADD PRIMARY KEY (`indicator_code`) USING BTREE,
  ADD KEY `degree` (`degree`),
  ADD KEY `id` (`id`),
  ADD KEY `team_code` (`team_code`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_username`),
  ADD KEY `staff_degree` (`staff_degree`),
  ADD KEY `staff_team` (`staff_team`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_code`),
  ADD KEY `country_id` (`degree_id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `indicator`
--
ALTER TABLE `indicator`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `graph_3m`
--
ALTER TABLE `graph_3m`
  ADD CONSTRAINT `graph_3m_ibfk_1` FOREIGN KEY (`indicator`) REFERENCES `indicator` (`indicator_code`);

--
-- Constraints for table `graph_6m`
--
ALTER TABLE `graph_6m`
  ADD CONSTRAINT `graph_6m_ibfk_1` FOREIGN KEY (`indicator`) REFERENCES `indicator` (`indicator_code`);

--
-- Constraints for table `graph_m`
--
ALTER TABLE `graph_m`
  ADD CONSTRAINT `graph_m_ibfk_1` FOREIGN KEY (`indicator`) REFERENCES `indicator` (`indicator_code`);

--
-- Constraints for table `graph_y`
--
ALTER TABLE `graph_y`
  ADD CONSTRAINT `graph_y_ibfk_1` FOREIGN KEY (`indicator`) REFERENCES `indicator` (`indicator_code`);

--
-- Constraints for table `indicator`
--
ALTER TABLE `indicator`
  ADD CONSTRAINT `indicator_ibfk_1` FOREIGN KEY (`degree`) REFERENCES `degree` (`degree_id`),
  ADD CONSTRAINT `indicator_ibfk_2` FOREIGN KEY (`team_code`) REFERENCES `team` (`team_code`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`staff_degree`) REFERENCES `degree` (`degree_id`),
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`staff_team`) REFERENCES `team` (`team_code`);

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`degree_id`) REFERENCES `degree` (`degree_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
