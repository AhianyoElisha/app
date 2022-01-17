-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2022 at 11:22 AM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MinistryOfEducation_HR`
--
CREATE DATABASE IF NOT EXISTS `MinistryOfEducation_HR` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `MinistryOfEducation_HR`;

-- --------------------------------------------------------

--
-- Table structure for table `APPOINTMENT`
--

CREATE TABLE `APPOINTMENT` (
  `Date_of_first_appointment` date DEFAULT NULL,
  `Date_of_present_appointment` date DEFAULT NULL,
  `StaffID` int NOT NULL,
  `Composite` varchar(3) NOT NULL DEFAULT 'MOE',
  `Current_Grade` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `APPOINTMENT`
--

INSERT INTO `APPOINTMENT` (`Date_of_first_appointment`, `Date_of_present_appointment`, `StaffID`, `Composite`, `Current_Grade`) VALUES
('2003-09-11', '2013-12-10', 2609, 'MOE', 'Senior Receptionist'),
('1994-11-10', '2018-01-10', 6722, 'MOE', 'Director'),
('1986-01-03', '1986-01-03', 11927, 'MOE', 'Headman'),
('2002-01-04', '2013-01-10', 12921, 'MOE', 'STENO GD I'),
('1992-02-19', '2012-05-18', 19622, 'MOE', 'Director'),
('1985-04-04', '2012-04-01', 38735, 'MOE', 'PTIN. Record Sup.'),
('1998-09-15', '2016-04-01', 43250, 'MOE', 'Senior Private Secretary'),
('2000-06-01', '2015-10-01', 46672, 'MOE', 'Yardfoe Man'),
('1988-11-01', '1988-11-01', 48192, 'MOE', 'Senior Private Secretary'),
('1986-02-02', '2018-01-06', 53505, 'MOE', 'Senior Records Officer'),
('2002-01-08', '2016-01-04', 59149, 'MOE', 'Senior Private Secretary'),
('2001-10-10', '2018-01-10', 60059, 'MOE', 'STENO. GRADE II'),
('2001-09-09', '2001-09-09', 61269, 'MOE', 'Director'),
('1999-01-08', '2013-01-05', 62291, 'MOE', 'Private Secretary'),
('2001-03-13', '2018-03-04', 67288, 'MOE', 'Director'),
('2000-09-18', '2018-01-09', 69145, 'MOE', 'Programme Officer'),
('2014-12-16', '2013-01-01', 77528, 'MOE', 'Senior Private Secretary'),
('1994-09-28', '2019-03-22', 79598, 'MOE', 'Chief Director'),
('1992-10-01', NULL, 80325, 'MOE', 'Principal Accounts Tech.'),
('1992-05-05', '2007-01-03', 80460, 'MOE', 'Chief Pers. Officer'),
('1999-01-15', '2010-01-01', 84647, 'MOE', 'Senior Private Secretary'),
('1997-12-18', '2012-02-28', 86308, 'MOE', 'Director'),
('1997-01-10', '2017-01-06', 95426, 'MOE', 'Senior Programmer'),
('1997-01-06', '2008-01-17', 96663, 'MOE', 'Senior Private Secretary'),
('1997-05-15', '1997-05-15', 99020, 'MOE', 'Private Secretary'),
('1997-03-27', '2011-01-04', 99063, 'MOE', 'Director, SRIM'),
(NULL, NULL, 111556, 'MOE', 'Director'),
('1985-05-15', '2009-01-01', 123350, 'MOE', 'Senior Computer Operator'),
('2019-06-06', '2019-06-06', 126460, 'MOE', 'Senior Planning Officer'),
('2004-01-04', '2019-07-03', 129579, 'MOE', 'Yardfoe Man'),
('2020-11-20', '2020-11-20', 140426, 'MOE', 'Assistant Internal Auditor'),
('2020-11-12', '2020-11-12', 148011, 'MOE', 'Assistant Internal Auditor'),
('2019-01-08', '2019-01-08', 181303, 'MOE', 'Principal Programme Officer'),
('2010-07-22', '2020-06-19', 242424, 'MOE', 'Senior Auditor'),
('2019-08-01', '2019-08-01', 264869, 'MOE', 'Principal Programme Officer'),
('2019-04-11', '2019-04-11', 381007, 'MOE', 'Assistant Planning Officer'),
('2006-03-15', '2017-09-01', 566763, 'MOE', 'Internal Auditor'),
('2006-01-01', '2019-01-12', 567502, 'MOE', 'Senior Private Secretary'),
('2006-06-22', '2020-01-13', 602264, 'MOE', 'Chief Procurement Manager'),
('2006-08-15', '2018-01-12', 613368, 'MOE', 'Principal Procurement Manager'),
('2007-02-05', '2020-01-10', 633356, 'MOE', 'Principal Record Sup.'),
('2007-07-11', '2018-01-10', 645411, 'MOE', 'Yardfoe Man'),
('2007-08-07', '2012-01-10', 654799, 'MOE', 'Senior Internal Auditor'),
('2007-12-17', '2015-01-10', 663698, 'MOE', 'Senior Receptionist'),
('2007-07-15', '2011-01-01', 664242, 'MOE', 'Director'),
('2007-10-12', '2019-02-04', 664460, 'MOE', 'Heavy Duty'),
('2007-01-11', '2016-01-12', 667055, 'MOE', 'Information Officer'),
('2008-06-04', '2011-11-01', 681651, 'MOE', 'Principal Planning Officer'),
('2008-05-23', '2017-01-06', 681668, 'MOE', 'Principal Planning Officer'),
('2008-04-02', '2012-10-01', 683171, 'MOE', 'Principal Store Keeper'),
('2007-01-01', '2020-08-06', 693140, 'MOE', 'Heavy Duty'),
('2008-10-11', '2020-02-24', 698773, 'MOE', 'Principal Planning Officer'),
('2008-01-10', '2017-01-12', 703372, 'MOE', 'Director'),
('2019-01-08', '2019-01-08', 715053, 'MOE', 'Principal Programme Officer'),
('2009-06-10', '2018-01-08', 728482, 'MOE', 'Assistant Protocol Officer'),
('2007-01-04', '2017-10-27', 728629, 'MOE', 'Heavy Duty'),
('2009-09-21', '2018-09-21', 731153, 'MOE', 'Programme Officer'),
('2009-08-24', '2021-09-14', 731159, 'MOE', 'Executive Officer'),
('2019-01-08', '2019-01-08', 736310, 'MOE', 'Principal Programme Officer'),
('2009-01-11', '2015-01-11', 738989, 'MOE', 'Deputy Director'),
('2009-11-05', '2009-11-05', 747092, 'MOE', 'Night Watchman'),
('2009-01-12', '2019-01-06', 749258, 'MOE', 'Senior Procurement Manager'),
('2010-01-01', '2010-01-01', 773372, 'MOE', 'Driver/ Mechanic'),
('2010-02-11', '2018-08-07', 778984, 'MOE', 'Stenographer Sec.'),
('2019-01-08', '2019-01-08', 803203, 'MOE', 'Principal Programme Officer'),
('2002-09-23', '2018-01-09', 805071, 'MOE', 'Programme Officer'),
('2011-06-01', '2011-06-01', 817842, 'MOE', 'Cleaner'),
('1997-01-27', '2019-03-27', 859436, 'MOE', 'Senior System Analyst'),
('2012-01-27', '2017-10-27', 859668, 'MOE', 'Principal Computer Operator'),
('2018-12-15', '2018-12-15', 859901, 'MOE', 'Driver GD 1'),
('2011-11-14', '2011-11-14', 864243, 'MOE', 'Internal Auditor'),
('2012-03-01', '2018-01-02', 868009, 'MOE', 'Assistant Director I'),
('2011-01-11', '2018-01-08', 877669, 'MOE', 'Principal Internal Auditor'),
('2011-01-12', '2017-01-12', 879093, 'MOE', 'Senior Internal Auditor'),
('2012-01-04', '2016-01-03', 893372, 'MOE', 'Driver GD 1'),
('2012-01-10', '2020-01-03', 900829, 'MOE', 'Assistant Director I'),
('2012-10-01', '2012-10-01', 904812, 'MOE', 'Assistant Director I'),
('2012-12-31', '2021-01-20', 917738, 'MOE', 'Senior IT/IM'),
('2013-01-04', '2019-01-05', 917925, 'MOE', 'Senior Transport Officer'),
('2013-01-31', '2017-03-17', 918664, 'MOE', 'Assistant Director I'),
('2013-01-11', '2016-01-12', 926371, 'MOE', 'Senior Records Assistant'),
('2013-01-11', '2019-01-11', 927042, 'MOE', 'Assistant Director I'),
('2013-02-12', '2018-01-11', 929363, 'MOE', 'Assistant Director IIA'),
('2013-02-12', '2017-01-02', 971264, 'MOE', 'Planning Officer'),
('2014-04-15', '2019-08-01', 971337, 'MOE', 'Assistant Transport Manager'),
('2014-09-14', '2019-12-03', 971361, 'MOE', 'Protocol Officer'),
('2014-09-15', '2019-02-26', 971405, 'MOE', 'Assistant Director IIA'),
('2014-11-10', '2019-11-04', 996155, 'MOE', 'Assistant Procurement Manager'),
('2016-10-13', '2016-10-13', 1203035, 'MOE', 'Assistant Director IIA'),
('2016-10-13', '2020-02-20', 1203095, 'MOE', 'Programme Officer'),
(NULL, NULL, 1203103, 'MOE', 'Estate Manager'),
('2016-10-13', '2019-01-12', 1203160, 'MOE', 'Programme Officer'),
('2016-12-28', '2020-01-03', 1207621, 'MOE', 'Planning Officer'),
('2016-12-28', '2020-10-04', 1207660, 'MOE', 'Programme Officer'),
('2016-12-28', '2016-12-28', 1207723, 'MOE', 'Assistant Research Officer'),
('2016-12-28', '2017-10-01', 1207787, 'MOE', 'Programmer'),
('2016-12-28', '2020-01-11', 1208020, 'MOE', 'Planning Officer'),
('2016-12-28', '2020-01-11', 1208035, 'MOE', 'Development Planning Officer'),
('2016-12-28', '2020-01-11', 1208068, 'MOE', 'Internal Auditor'),
('2017-01-20', '2017-01-20', 1208388, 'MOE', 'Records Officer'),
('2016-12-28', '2020-01-03', 1208879, 'MOE', 'Internal Auditor'),
('2018-01-03', '2018-01-03', 1250476, 'MOE', 'Assistant Procurement & Supply Chain Manager'),
('2018-01-03', '2018-01-03', 1250679, 'MOE', 'Procurement & Supply Ch. Officer'),
('2018-02-08', '2018-02-08', 1250685, 'MOE', 'Assistant Planning Officer'),
('2009-08-01', '2016-06-01', 1250711, 'MOE', 'Conser. Labourer'),
('2018-04-13', '2018-04-13', 1260708, 'MOE', 'Assistant Research Officer'),
('2018-05-16', '2018-05-16', 1260709, 'MOE', 'Stenographer Sec'),
('2018-01-02', '2018-01-02', 1260795, 'MOE', 'Driver GD 2'),
('2018-02-08', '2018-02-08', 1293061, 'MOE', 'Assistant Procurement & Supply Ch. Manager'),
('2018-02-08', '2018-02-08', 1293130, 'MOE', 'Assistant Director IIB'),
('2018-10-08', '2018-10-08', 1293137, 'MOE', 'Assistant Programmer'),
('2018-08-02', '2018-08-02', 1293142, 'MOE', 'Assistant Director IIB'),
('2018-02-08', '2018-02-08', 1293146, 'MOE', 'Assistant Research Officer'),
('2018-08-02', '2018-08-02', 1293148, 'MOE', 'Principal Executive Officer'),
('2018-02-08', '2018-02-08', 1293156, 'MOE', 'Assistant Programme Officer'),
('2019-01-08', '2019-01-08', 1293324, 'MOE', 'Principal Programme Officer'),
('2018-02-08', '2018-02-08', 1293419, 'MOE', 'Assistant Internal Auditor'),
('2018-05-11', '2018-05-11', 1303301, 'MOE', 'Records Supervisor'),
('2019-01-08', '2019-01-08', 1316958, 'MOE', 'Principal Programme Officer'),
('2019-08-04', '2019-08-04', 1318098, 'MOE', 'Assistant Planning Officer'),
('2019-01-08', '2019-01-08', 1319292, 'MOE', 'Principal Research Officer'),
('2019-01-08', '2019-01-08', 1319312, 'MOE', 'Principal Programme Officer'),
('2019-01-08', '2019-01-08', 1319333, 'MOE', 'Principal Programme Officer'),
('2019-01-08', '2019-01-08', 1319336, 'MOE', 'Principal Programme Officer'),
('2019-01-08', '2019-01-08', 1319354, 'MOE', 'Principal Programme Officer'),
('2019-10-30', '2019-10-30', 1328979, 'MOE', 'Computer Operator'),
('2019-10-30', '2019-10-30', 1330144, 'MOE', 'Records Assistant'),
('2019-01-12', '2019-01-12', 1330187, 'MOE', 'Assistant Internal Auditor'),
('2019-12-02', '2019-12-02', 1330191, 'MOE', 'Principal Executive Officer'),
('2019-01-12', '2019-01-12', 1330853, 'MOE', 'Assistant Research Officer'),
('2019-01-12', '2019-01-12', 1331979, 'MOE', 'Principal Executive Officer'),
('2019-01-12', '2019-01-12', 1332742, 'MOE', 'Assistant Protocol Officer'),
('2019-01-12', '2019-01-12', 1333121, 'MOE', 'Assistant Internal Auditor'),
('2020-01-08', '2020-01-08', 1370794, 'MOE', 'Assistant Internal Auditor'),
('2020-01-07', '2020-01-07', 1374807, 'MOE', 'Assistant Internal Auditor'),
('2020-11-12', '2020-11-12', 1407616, 'MOE', 'Assistant Internal Auditor'),
('2020-11-19', '2020-11-19', 1407676, 'MOE', 'Assistant Procurement & Supply Chain Manager'),
('2020-11-12', '2020-11-12', 1407689, 'MOE', 'Assistant Internal Auditor'),
('2020-11-12', '2020-11-12', 1407713, 'MOE', 'Assistant Internal Auditor'),
('2020-11-12', '2020-11-12', 1408001, 'MOE', 'Assistant Internal Auditor'),
('2020-12-21', '2020-12-21', 1408590, 'MOE', 'Assistant Programme Officer'),
('2020-11-20', '2020-11-20', 1409137, 'MOE', 'Assistant Internal Auditor'),
('2021-01-02', '2021-01-02', 1410459, 'MOE', 'Assistant Records Officer'),
('2011-11-22', '2018-10-01', 8600371, 'MOE', 'Assistant Records Officer'),
('2021-12-08', '2021-12-20', 12345678, 'MOE', 'Programmer');

-- --------------------------------------------------------

--
-- Table structure for table `AUTH`
--

CREATE TABLE `AUTH` (
  `StafID` int NOT NULL,
  `login_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `last_logout` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `AUTH`
--

INSERT INTO `AUTH` (`StafID`, `login_password`, `last_seen`, `last_logout`) VALUES
(2609, '2609', '2022-01-04 14:10:22', '2022-01-04 14:10:31'),
(6722, '6722', '2021-12-06 17:25:44', NULL),
(11927, '11927', '2021-12-06 17:25:44', NULL),
(12921, '12921', '2021-12-06 17:25:44', NULL),
(19622, '19622', '2021-12-15 16:57:47', '2021-12-15 17:09:39'),
(38735, '38735', '2021-12-06 17:25:44', NULL),
(46672, '46672', '2021-12-06 17:25:44', NULL),
(48192, '48192', '2021-12-10 18:46:07', '2021-12-10 18:46:11'),
(53505, '53505', '2021-12-06 17:25:44', NULL),
(59149, '59149', '2021-12-06 17:25:44', NULL),
(60059, '60059', '2022-01-06 15:16:17', '2022-01-06 15:16:23'),
(61269, '61269', '2021-12-06 17:25:44', NULL),
(62291, '62291', '2021-12-06 17:25:44', NULL),
(67288, '67288', '2021-12-06 17:25:44', NULL),
(69145, '69145', '2021-12-06 17:25:44', NULL),
(77528, '77528', '2021-12-06 17:25:44', NULL),
(79598, '79598', '2021-12-10 18:50:08', '2021-12-10 18:50:12'),
(80460, '80460', '2021-12-06 17:25:44', NULL),
(84647, '84647', '2021-12-06 17:25:44', NULL),
(86308, '86308', '2021-12-06 17:25:44', NULL),
(95426, '95426', '2022-01-06 15:18:15', '2022-01-06 15:18:48'),
(96663, '96663', '2021-12-06 17:25:44', NULL),
(99020, '99020', '2021-12-06 17:25:44', NULL),
(99063, '99063', '2021-12-06 17:25:44', NULL),
(111556, '111556', '2021-12-06 17:25:44', NULL),
(123350, '123350', '2021-12-06 17:25:44', NULL),
(126460, '126460', '2021-12-06 17:25:44', NULL),
(129579, '129579', '2021-12-06 17:25:44', NULL),
(140426, '140426', '2021-12-06 17:25:44', NULL),
(148011, '148011', '2021-12-06 17:25:44', NULL),
(181303, '181303', '2021-12-06 17:25:44', NULL),
(242424, '242424', NULL, NULL),
(264869, '264869', '2021-12-06 17:25:44', NULL),
(381007, '381007', '2021-12-06 17:25:44', NULL),
(566763, '566763', '2021-12-06 17:25:44', NULL),
(567502, '567502', '2021-12-06 17:25:44', NULL),
(602264, '602264', '2021-12-06 17:25:44', NULL),
(613368, '613368', '2021-12-06 17:25:44', NULL),
(633356, '633356', '2021-12-06 17:25:44', NULL),
(645411, '645411', '2021-12-06 17:25:44', NULL),
(654799, '654799', '2021-12-06 17:25:44', NULL),
(663698, '663698', '2021-12-06 17:25:44', NULL),
(664242, '664242', '2021-12-06 17:25:44', NULL),
(664460, '664460', '2021-12-06 17:25:44', NULL),
(667055, '667055', '2021-12-06 17:25:44', NULL),
(681651, '681651', '2021-12-06 17:25:44', NULL),
(681668, '681668', '2021-12-06 17:25:44', NULL),
(683171, '683171', '2021-12-06 17:25:44', NULL),
(693140, '693140', '2021-12-06 17:25:44', NULL),
(698773, '698773', '2021-12-06 17:25:44', NULL),
(703372, '703372', '2021-12-06 17:25:44', NULL),
(715053, '715053', '2021-12-06 17:25:44', NULL),
(728482, '728482', '2021-12-06 17:25:44', NULL),
(728629, '728629', '2021-12-06 17:25:44', NULL),
(731153, '731153', '2021-12-06 17:25:44', NULL),
(731159, '731159', '2021-12-06 17:25:44', NULL),
(736310, '736310', '2021-12-06 17:25:44', NULL),
(738989, '738989', '2021-12-06 17:25:44', NULL),
(747092, '747092', '2021-12-06 17:25:44', NULL),
(749258, '749258', '2021-12-06 17:25:44', NULL),
(773372, '773372', '2021-12-06 17:25:44', NULL),
(778984, '778984', '2021-12-06 17:25:44', NULL),
(803203, '803203', '2021-12-06 17:25:44', NULL),
(805071, '805071', '2021-12-06 17:25:44', NULL),
(817842, '817842', '2021-12-06 17:25:44', NULL),
(859436, '859436', '2021-12-06 17:25:44', NULL),
(859668, '859668', '2021-12-06 17:25:44', NULL),
(859901, '859901', '2021-12-06 17:25:44', NULL),
(864243, '864243', '2021-12-06 17:25:44', NULL),
(868009, '868009', '2021-12-06 17:25:44', NULL),
(877669, '877669', '2021-12-06 17:25:44', NULL),
(879093, '879093', '2021-12-06 17:25:44', NULL),
(893372, '893372', '2021-12-06 17:25:44', NULL),
(900829, '900829', '2021-12-06 17:25:44', NULL),
(904812, '904812', '2021-12-06 17:25:44', NULL),
(917738, '917738', '2021-12-06 17:25:44', NULL),
(917925, '917925', '2021-12-06 17:25:44', NULL),
(918664, '918664', '2021-12-06 17:25:44', NULL),
(926371, '926371', '2021-12-06 17:25:44', NULL),
(927042, '927042', '2021-12-06 17:25:44', NULL),
(929363, '929363', '2021-12-06 17:25:44', NULL),
(971264, '971264', '2021-12-06 17:25:44', NULL),
(971337, '971337', '2021-12-06 17:25:44', NULL),
(971361, '971361', '2021-12-06 17:25:44', NULL),
(971405, '971405', '2021-12-06 17:25:44', NULL),
(996155, '996155', '2021-12-06 17:25:44', NULL),
(1203035, '1203035', '2021-12-06 17:25:44', NULL),
(1203095, '1203095', '2021-12-06 17:25:44', NULL),
(1203103, '1203103', '2021-12-06 17:25:44', NULL),
(1203160, '1203160', '2021-12-06 17:25:44', NULL),
(1207621, '1207621', '2021-12-06 17:25:44', NULL),
(1207660, '1207660', '2021-12-06 17:25:44', NULL),
(1207723, '1207723', '2021-12-06 17:25:44', NULL),
(1207787, '1207787', '2021-12-06 17:25:44', NULL),
(1208020, '1208020', '2021-12-06 17:25:44', NULL),
(1208035, '1208035', '2021-12-06 17:25:44', NULL),
(1208068, '1208068', '2021-12-06 17:25:44', NULL),
(1208388, '1208388', '2021-12-06 17:25:44', NULL),
(1208879, '1208879', '2021-12-06 17:25:44', NULL),
(1250476, '1250476', '2021-12-06 17:25:44', NULL),
(1250679, '1250679', '2021-12-06 17:25:44', NULL),
(1250685, '1250685', '2021-12-06 17:25:44', NULL),
(1250711, '1250711', '2021-12-06 17:25:44', NULL),
(1260708, '1260708', '2021-12-06 17:25:44', NULL),
(1260709, '1260709', '2021-12-06 17:25:44', NULL),
(1260795, '1260795', '2021-12-06 17:25:44', NULL),
(1293061, '1293061', '2021-12-06 17:25:44', NULL),
(1293130, '1293130', '2021-12-06 17:25:44', NULL),
(1293137, '1293137', '2021-12-06 17:25:44', NULL),
(1293142, '1293142', '2021-12-06 17:25:44', NULL),
(1293146, '1293146', '2021-12-06 17:25:44', NULL),
(1293148, '1293148', '2021-12-06 17:25:44', NULL),
(1293156, '1293156', '2021-12-06 17:25:44', NULL),
(1293324, '1293324', '2021-12-06 17:25:44', NULL),
(1293419, '1293419', '2021-12-06 17:25:44', NULL),
(1303301, '1303301', '2021-12-06 17:25:44', NULL),
(1316958, '1316958', '2021-12-06 17:25:44', NULL),
(1318098, '1318098', '2021-12-06 17:25:44', NULL),
(1319292, '1319292', '2021-12-06 17:25:44', NULL),
(1319312, '1319312', '2021-12-06 17:25:44', NULL),
(1319333, '1319333', '2021-12-06 17:25:44', NULL),
(1319336, '1319336', '2021-12-06 17:25:44', NULL),
(1319354, '1319354', '2021-12-06 17:25:44', NULL),
(1328979, '1328979', '2021-12-06 17:25:44', NULL),
(1330144, '1330144', '2021-12-06 17:25:44', NULL),
(1330187, '1330187', '2021-12-06 17:25:44', NULL),
(1330191, '1330191', '2022-01-06 15:17:13', '2022-01-06 15:17:16'),
(1330853, '1330853', '2021-12-06 17:25:44', NULL),
(1331979, '1331979', '2021-12-06 17:25:44', NULL),
(1332742, '1332742', '2021-12-06 17:25:44', NULL),
(1333121, '1333121', '2021-12-06 17:25:44', NULL),
(1370794, '1370794', '2021-12-06 17:25:44', NULL),
(1374807, '1374807', '2021-12-06 17:25:44', NULL),
(1407616, '1407616', '2021-12-06 17:25:44', NULL),
(1407676, '1407676', '2021-12-06 17:25:44', NULL),
(1407689, '1407689', '2021-12-06 17:25:44', NULL),
(1407713, '1407713', '2021-12-06 17:25:44', NULL),
(1408001, '1408001', '2021-12-06 17:25:44', NULL),
(1408590, '1408590', '2021-12-06 17:25:44', NULL),
(1409137, '1409137', '2021-12-06 17:25:44', NULL),
(1410459, '1410459', '2021-12-06 17:25:44', NULL),
(8600371, '8600371', '2021-12-06 17:25:44', NULL),
(12345678, 'qwerty1234', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `CHANGES`
--

CREATE TABLE `CHANGES` (
  `Admin_ID` int NOT NULL,
  `Admin_Lname` varchar(30) NOT NULL,
  `Admin_Fname` varchar(30) NOT NULL,
  `change_made_on` int NOT NULL,
  `change_made_to` varchar(255) NOT NULL,
  `time_occur` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `CHIEF_DIRECTOR`
--

CREATE TABLE `CHIEF_DIRECTOR` (
  `Chief_Directorate_ID` int NOT NULL,
  `Chief_Director_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `CHIEF_DIRECTOR`
--

INSERT INTO `CHIEF_DIRECTOR` (`Chief_Directorate_ID`, `Chief_Director_ID`) VALUES
(11111, 79598);

-- --------------------------------------------------------

--
-- Table structure for table `DIRECTORATE`
--

CREATE TABLE `DIRECTORATE` (
  `Directorate_ID` int NOT NULL,
  `Chief_ID` int NOT NULL,
  `Directorate_Name` varchar(100) NOT NULL,
  `Directorate_Head_ID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `DIRECTORATE`
--

INSERT INTO `DIRECTORATE` (`Directorate_ID`, `Chief_ID`, `Directorate_Name`, `Directorate_Head_ID`) VALUES
(1, 11111, 'General Administration', 19622),
(2, 11111, 'Human Resource Management', 86308),
(3, 11111, 'SRIM', 99063),
(4, 11111, 'PBME', 67288),
(5, 11111, 'Procurement', 602264),
(6, 11111, 'Tertiary', 703372),
(7, 11111, 'Pre-Tertiary', 111556),
(8, 11111, 'TVET', 6722),
(9, 11111, 'Finance', 43250),
(10, 11111, 'Internal Audit', 877669);

-- --------------------------------------------------------

--
-- Table structure for table `DISABLE_ACCESS`
--

CREATE TABLE `DISABLE_ACCESS` (
  `Admin_ID` int NOT NULL,
  `Admin_Fname` varchar(30) NOT NULL,
  `Admin_Lname` varchar(30) NOT NULL,
  `Staff_disabled` int NOT NULL,
  `reason` varchar(255) NOT NULL,
  `time_disabled` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `DISABLE_ACCESS`
--

INSERT INTO `DISABLE_ACCESS` (`Admin_ID`, `Admin_Fname`, `Admin_Lname`, `Staff_disabled`, `reason`, `time_disabled`) VALUES
(12345, 'Human', 'Resource', 2609, 'Pension', '2022-01-06 13:32:43'),
(12345, 'Human', 'Resource', 2609, 'Pension', '2022-01-06 15:08:50'),
(12345, 'Human', 'Resource', 2609, 'Transfered to another ministry ', '2022-01-10 10:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `HR_ADMIN`
--

CREATE TABLE `HR_ADMIN` (
  `ID` int NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `entry_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lastseen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastlogout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `HR_ADMIN`
--

INSERT INTO `HR_ADMIN` (`ID`, `Fname`, `Lname`, `entry_password`, `lastseen`, `lastlogout`) VALUES
(12345, 'Human', 'Resource', '12345', '2022-01-14 19:48:38', '2022-01-14 20:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `HR_ADMIN_ACCESS`
--

CREATE TABLE `HR_ADMIN_ACCESS` (
  `Admin_ID` int NOT NULL,
  `Fname` char(30) NOT NULL,
  `Lname` char(30) NOT NULL,
  `change_made_on` int NOT NULL,
  `changed_password_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `time_change_occur` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `HR_ADMIN_ACCESS`
--

INSERT INTO `HR_ADMIN_ACCESS` (`Admin_ID`, `Fname`, `Lname`, `change_made_on`, `changed_password_to`, `time_change_occur`) VALUES
(12345, 'Human', 'Resource', 12345678, 'elisha123', '2022-01-02 11:28:26'),
(12345, 'Human', 'Resource', 12345678, 'qwerty', '2022-01-02 12:05:54'),
(12345, 'Human', 'Resource', 12345678, 'e10980^D', '2022-01-04 16:50:58'),
(12345, 'Human', 'Resource', 12345678, '#SPACEbound1234', '2022-01-04 16:59:03'),
(12345, 'Human', 'Resource', 12345678, '12345', '2022-01-04 17:08:21'),
(12345, 'Human', 'Resource', 12345678, 'qwerty1234', '2022-01-05 11:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `HR_ADMIN_ACCESS_FOR_ADMIN`
--

CREATE TABLE `HR_ADMIN_ACCESS_FOR_ADMIN` (
  `Admin_ID` int NOT NULL,
  `Fname` char(30) NOT NULL,
  `Lname` char(30) NOT NULL,
  `change_made_on` int NOT NULL,
  `changed_password_to` varchar(255) NOT NULL,
  `time_of_change` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `HR_ADMIN_ACCESS_FOR_ADMIN`
--

INSERT INTO `HR_ADMIN_ACCESS_FOR_ADMIN` (`Admin_ID`, `Fname`, `Lname`, `change_made_on`, `changed_password_to`, `time_of_change`) VALUES
(12345, 'Human', 'Resource', 12345, '123456', '2022-01-03 07:44:54'),
(12345, 'Human', 'Resource', 12345, '12345', '2022-01-04 17:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `INTERNSHIP`
--

CREATE TABLE `INTERNSHIP` (
  `Fname` char(30) DEFAULT NULL,
  `Lname` char(30) DEFAULT NULL,
  `Mname` char(20) DEFAULT NULL,
  `UnitId` int DEFAULT NULL,
  `Phone_number` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `LEAVE_RECORD`
--

CREATE TABLE `LEAVE_RECORD` (
  `LeaveID` int NOT NULL,
  `StffID` int NOT NULL,
  `Date_applied` date NOT NULL,
  `Home_town` varchar(255) NOT NULL,
  `Number_of_days` int NOT NULL,
  `Applied_days` int NOT NULL,
  `Officer_taking_over` int NOT NULL,
  `Commencement_date` date NOT NULL,
  `Leave_address` varchar(255) NOT NULL,
  `To_` varchar(255) NOT NULL,
  `Through` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `LEAVE_TYPE`
--

CREATE TABLE `LEAVE_TYPE` (
  `Leave_ID` int NOT NULL,
  `Leave_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `MINISTER`
--

CREATE TABLE `MINISTER` (
  `ID` int NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Mname` varchar(20) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Sex` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `NATIONAL_SERVICE`
--

CREATE TABLE `NATIONAL_SERVICE` (
  `Fname` char(30) DEFAULT NULL,
  `Lname` char(30) DEFAULT NULL,
  `Mname` char(20) DEFAULT NULL,
  `UnitId` int DEFAULT NULL,
  `Phone_number` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PROMOTION`
--

CREATE TABLE `PROMOTION` (
  `Staff_ID` int NOT NULL,
  `Promotion_from` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Promotion_to` varchar(255) NOT NULL,
  `Promotion_Date` date NOT NULL,
  `Commencement_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `STAFF`
--

CREATE TABLE `STAFF` (
  `Staff_ID` int NOT NULL,
  `Direct_ID` int DEFAULT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Mname` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Marital_Status` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Phone_number` int DEFAULT NULL,
  `UnitID` int DEFAULT NULL,
  `Highest_Qualification` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Rank_Status` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Sex` char(1) NOT NULL,
  `profile` varchar(255) NOT NULL DEFAULT 'user-profile-svgrepo-com.svg',
  `Seconded` int NOT NULL DEFAULT '0',
  `Disable` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `STAFF`
--

INSERT INTO `STAFF` (`Staff_ID`, `Direct_ID`, `Fname`, `Lname`, `Mname`, `DOB`, `Marital_Status`, `Phone_number`, `UnitID`, `Highest_Qualification`, `Rank_Status`, `Sex`, `profile`, `Seconded`, `Disable`) VALUES
(2609, 1, '              Esther          ', 'Acheampong', 'Tracy', '1976-05-01', 'Single', 244715567, 1011, 'SSSCE', 'Junior', 'F', 'camp.jpg', 1, 0),
(6722, 8, 'Rejoice', 'Dankwa', NULL, '1966-12-09', 'Single', 243775532, NULL, 'MSC Public Policy Management', 'Senior', 'F', 'horse.jpg', 0, 0),
(11927, 1, 'John', 'Anaba', 'A', '1966-06-01', 'Married', 272657471, 1004, 'JHS', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(12921, 1, 'Happy', 'Amewuda', NULL, '1967-10-10', 'Single', 244434738, 1006, 'Steno GD 1', 'Junior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(19622, 1, 'Catherine', 'Appiah Pinkrah', 'Agyapomaa', '1965-11-21', 'Married', 244268198, NULL, 'MSC. Devt. Planning', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(38735, 1, 'Robert', 'Freeman', 'Birch', '1962-11-21', 'Married', 244280846, 1002, 'MSLC', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(43250, 9, 'Monica', 'Amoako', NULL, '1970-02-17', 'Single', 249384816, NULL, 'Diploma In Sec', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(46672, 1, 'George', 'Akpabil', 'K', '1967-09-26', 'Married', 244593359, 1003, 'MSLC', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(48192, 1, 'Joyce', 'Oppong', NULL, '1966-05-06', 'Married', 208163779, 1006, ' GCE O Level', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(53505, 1, 'Victoria', 'Ayensu', 'Ayitsoo', '1962-07-18', 'Married', 277701030, 1002, 'BSC HRM', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(59149, 3, 'Florence', 'Dowuona', NULL, '1980-02-08', 'Married', 261574043, 3001, 'NACVET', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(60059, 4, 'Gloria', 'Arku', NULL, '1978-04-01', 'Married', 262683625, 4004, 'BSC Admin', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(61269, 1, 'Anthony', 'Baffoe', 'Felix', '1972-02-05', 'Married', 248186968, 1001, 'BSC. Computer Science', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(62291, 1, 'Comfort', 'Darkoah', NULL, '1966-06-18', 'Married', 244384623, 1006, 'Steno GD1 Certificate', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(67288, 4, 'Mavis', 'Donkor', 'Asare', '1972-09-13', 'Married', 208874941, NULL, 'MA. Public Adminstration', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(69145, 7, 'Amuzi', 'Yussif', 'Godson', '1972-10-17', 'Married', 244543813, 7003, 'BSC ADMIN', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(77528, 6, 'Faustina', 'Daniels', NULL, '1964-04-18', 'Single', 244278271, 6002, 'NACVET', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(79598, NULL, 'Benjamin', 'Gyasi', 'Kofi', '1962-01-01', 'Married', 208198378, NULL, 'M.A(HRM) B.L', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(80325, 9, 'Esther', 'Amenuvor', NULL, '1970-05-27', NULL, NULL, 9001, NULL, 'Junior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(80460, 2, 'Charles', 'Kirk Mensah', NULL, '1964-06-05', 'Married', 242542363, 2001, 'Bus. Adm(ABE)', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(84647, 7, 'Elizabeth', 'Agyen', NULL, '1969-01-21', 'Married', 244567565, 7006, 'NACVETS SPS, DEG', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(86308, 2, 'Abdul-Razak', 'Umar', NULL, '1964-04-05', 'Married', 202290488, NULL, 'Acct DPA', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(95426, 1, 'Caesar', 'Sowah', 'William', '1969-10-27', 'Married', 543525962, 1001, 'BSC. IT', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(96663, 7, 'Agnes', 'Akushie', NULL, '1972-11-01', 'Married', 267968283, 7005, 'NACVETS', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(99020, 1, 'Adade', 'Mary', NULL, '1970-05-17', 'Married', 244623256, 1006, 'Certificate In Office Management', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(99063, 3, 'Divine', 'Ayidzoe', 'Yao', '1976-02-16', 'Married', 244466125, NULL, 'MA. PSM', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(111556, 7, 'Richard', 'Baffuor Awuah', NULL, '1967-07-03', 'Married', 553022893, NULL, 'Degree', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(123350, 1, 'Michael', 'Commey', NULL, '1964-09-23', 'Married', 242867070, 1001, 'DIP. Information Technology', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(126460, 4, 'Rose', 'Bentsil-Quaye', NULL, '1970-09-03', 'Married', 249235138, 4002, 'BSC. Planning', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(129579, 1, 'Kwame', 'Kyere', NULL, '1969-03-16', 'Married', 209083965, 1003, 'MSLC', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(140426, 10, 'Ernest', 'Adepo', NULL, '1984-08-17', 'Single', 24628829, 10001, 'BSC. Accounting', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(148011, 10, 'Hamdiyatu', 'Baba', NULL, '1990-06-12', 'Married', 540660230, 10001, 'BSC. Accounting', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(181303, 7, 'Peter', 'Tettey', 'Kwaku', '1977-02-16', 'Single', 243573685, 7007, 'M.ED.Science Education', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(242424, 10, 'Abigail', 'Asare', 'Akua', '1969-06-18', 'Married', 503723770, 10001, 'Bsc Accountancy', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(264869, 7, 'Rosemond', 'Sam', NULL, '1976-02-10', 'Married', 547443174, 7004, 'MPHIL In Public Administration', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(381007, 4, 'Emmanuel', 'Asare', 'Kwesi', '1992-11-08', 'Single', 246001271, 4001, 'BSC. Planning', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(566763, 10, 'Maxwell', 'Aatie', NULL, '1983-12-24', 'Married', 204477319, 10001, 'BSC. Accounting', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(567502, 8, 'Elizabeth', 'Boafoa', 'Gyamerah', '1982-02-28', 'Married', 266268712, 8001, 'GOV\'T SEC P.S', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(602264, 5, 'Philip', 'Pardie', 'Tetteh', '1976-05-20', 'Married', 244606439, NULL, 'MBA. Strat. Project Management, MSC. Finance', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(613368, 5, 'Isaac', 'Yamoah', 'Kyei', '1980-04-10', 'Married', 244671040, 5003, 'MSC,MCIPS,CMILT', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(633356, 1, 'Rukaya', 'Kassim', NULL, '1974-05-10', 'Married', 278388711, 1002, 'GCE O Level', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(645411, 1, 'Ignatus', 'Onai', NULL, '1973-08-10', 'Married', 267997320, 1003, 'SSSCE', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(654799, 10, 'Barbara', 'Pokoo-Aikins', 'Akuba', '1967-09-20', 'Married', 246041778, 10001, 'BCOM.DIP.EDU', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(663698, 1, 'Hannah', 'Odoom', NULL, '1972-05-17', 'Married', 242640707, 1011, 'GCE O Level', 'Junior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(664242, 10, 'Edward', 'Fiawoyiee', NULL, '1970-09-09', 'Married', 244805527, 10001, 'FCAA, MBA(FIN)', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(664460, 1, 'Michael', 'Asiedu', NULL, '1974-02-09', 'Married', 243421715, 1003, 'DBS', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(667055, 1, 'Botchway', 'Larry', 'George', '1971-10-18', 'Married', 244662963, 1006, 'BA Comm. Studies', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(681651, 4, 'Bernard', 'Ayensu', NULL, '1980-09-03', 'Married', 267730142, 4002, 'MPP', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(681668, 4, 'Patrick', 'Arthur', NULL, '1982-01-25', 'Married', 243579690, 4001, 'BA. Econs', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(683171, 5, 'Cephas', 'Sepenu', NULL, '1980-02-04', 'Married', 550889182, 5004, 'DBS', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(693140, 1, 'Ransford', 'Lamptey', 'Samuel', '1970-05-11', 'Married', 244651129, 1003, 'NVTI GD II', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(698773, 4, 'Carl', 'Quist', NULL, '1982-08-18', 'Married', 244688096, 4001, 'Master of Developent Policy', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(703372, 6, 'Nhyira', 'Amankwah', 'Sarfo', '1980-12-15', 'Married', 272440091, NULL, 'IEMBA BSC Mathematics', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(715053, 7, 'Isaac', 'Baah', 'Atta', '1983-12-07', 'Married', 243026827, 7004, 'MPHIL Of Education', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(728482, 1, 'Nana Yaw', 'Obeng', 'Appiah', '1988-05-26', 'Single', 246493853, 1005, 'B.A Comm. Studies', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(728629, 1, 'Felix', 'Acquah', 'Kobina', '1969-12-31', 'Married', 546272614, 1003, 'MSLC', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(731153, 3, 'Gertrude', 'Challah', NULL, '1984-06-12', 'Married', 242706424, 3002, 'BSC.Business Administration', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(731159, 1, 'Salami', 'Amamatu', NULL, '1987-02-28', 'Single', 0, 1006, 'SSSCE', 'Junior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(736310, 3, 'Clement', 'Antwi', 'Osei', '1988-10-05', 'Married', 249527146, 3002, 'MPHIL In Measurement And Evaluation', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(738989, 1, 'Christiana', 'Akrong', NULL, '1982-06-24', 'Married', 242073564, 1006, 'Degree', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(747092, 1, 'Federick', 'Kaba', 'A', '1979-11-13', 'Married', 247433469, 1004, 'MSLC', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(749258, 5, 'Evelyn', 'Asante', NULL, '1982-10-19', 'Married', 208167457, 5004, 'MSC. Procurement Management', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(773372, 1, 'Isaac', 'Alerti', NULL, '1979-02-08', 'Married', 243392962, 1003, 'NVTI GD II', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(778984, 8, 'Josephine', 'Odoi', NULL, '1984-03-10', 'Married', 243585823, 8002, 'Private Secrertary Certificate', 'Junior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(803203, 7, 'Moses', 'Gemeh', 'Jubiliant', '1984-06-06', 'Married', 243505935, 7006, 'MSC. English Language', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(805071, 8, 'Olivia', 'Osei-Kofi', 'Ohui', '1975-09-22', 'Married', 248416678, 8002, 'BA. Business Administration', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(817842, 1, 'Sarah', 'Oppong', 'Abena', '1972-10-19', 'Single', 261592393, 1004, 'JHS', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(859436, 1, 'Francisca', 'Pokoo', 'Lovia', '1978-01-24', 'Married', 248430119, 1001, 'BSC. IT', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(859668, 1, 'Michael', 'Obenu-Teye', 'Martey', '1984-09-21', 'Single', 245200475, 1001, 'Certified Network Associate', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(859901, 1, 'Hakeem', 'Otabil', NULL, '1980-09-25', 'Married', 267888455, 1003, 'SSCE', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(864243, 10, 'Tracy', 'Acheampong', NULL, '1982-09-20', 'Married', 243259490, 10001, 'BA. Accounting', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(868009, 7, 'Godwin', 'Seli', 'Godson', '1982-04-02', 'Married', 246723226, 7004, 'BA. HONS', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(877669, 10, 'Emmanuel', 'Anku', NULL, '1972-11-28', 'Married', 203006729, 10001, 'ICA. Qualified Account & Finance', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(879093, 10, 'Esinam', 'Dzidzienyo', NULL, '1986-01-14', 'Single', 267093959, 10001, 'ICA. MPA. BCOM', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(893372, 1, 'Sylvester', 'Aho', NULL, '1975-05-22', 'Married', 20877777, 1003, 'JSS', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(900829, 3, 'Suleman', 'Salaman', 'Faris', '1986-05-10', 'Married', 243838651, 3001, 'Master Of Arts In Economics', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(904812, 1, 'Alexander', 'Abosi', NULL, '1983-10-07', 'Married', 243902556, 1006, 'B.A Social Science', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(917738, 1, 'Lawrence', 'Amponsah', 'Brobbey', '1987-12-15', 'Single', 248694074, 1001, 'MSC. Computer Science', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(917925, 1, 'Stephen', 'Darko', NULL, '1962-05-06', 'Married', 244643063, 1003, 'INTL Certificate In Logistics & Transport', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(918664, 8, 'Samira', 'Osman', NULL, '1986-12-15', 'Single', 243150486, 8002, 'MBA. Finance', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(926371, 1, 'Mary', 'Hormenoo', 'Aku', '1983-04-13', 'Married', 243152586, 1002, 'Stenographer Secretary Certificate', 'Junior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(927042, 4, 'Aminu', 'Sulemana', NULL, '1984-03-19', 'Married', 243241737, 4002, 'MPHIL Statistics', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(929363, 3, 'Prince', 'Aduse-Opoku', NULL, '1985-02-03', 'Married', 242049102, 3002, 'BA. HONS', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(971264, 4, 'Eunice', 'Graham', NULL, '1988-09-27', 'Married', 244893788, 4004, 'BBA HRM', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(971337, 1, 'Emmanuel', 'Agyare', NULL, '1985-06-10', 'Married', 244632018, 1003, 'BSC. Information Systems', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(971361, 1, 'Ruth', 'Turkson', 'Odi', '1983-04-30', 'Single', 26954545, 1005, 'MBA Project Management', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(971405, 6, 'Sam', 'Kodwo', 'Paa', '1989-03-06', 'Single', 543730613, 6001, 'MBA. Human Resource Management', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(996155, 5, 'Eunice', 'Aidoo', NULL, '1986-07-19', 'Married', 242755786, 5001, 'BSC. Logistics & Supply Ch. Management', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1203035, 1, 'Asare', 'Harriet', 'Agyei-Asare', '1985-04-12', 'Single', 243054211, 1006, 'B.A Of Arts', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1203095, 7, 'Maud', 'Kitcher', 'Dornukie', '1991-05-22', 'Married', 249784205, 7003, 'B.A History', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1203103, 1, 'George', 'Adjei', 'Elikem', '1987-02-28', 'Single', 0, 1003, '0', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1203160, 6, 'Patience', 'Dogbey', 'E.A', '1986-02-21', 'Married', 243203865, 6003, 'MBA. Human Resource Management', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1207621, 4, 'Bernard', 'Dogli', NULL, '1980-06-12', 'Married', 243263646, 4004, 'BSC. Banking & Finance', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1207660, 2, 'Jennifer', 'Adusei', NULL, '1987-05-03', 'Married', 541003232, 2002, 'Bsc. Business Administration', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1207723, 3, 'Eunice', 'Lartey', 'Larte-Kaah', '1986-04-08', 'Married', 542315186, 3002, 'BA. Arts & Info', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1207787, 1, 'Solomon', 'Adofo', NULL, '1983-02-10', 'Married', 243248226, 1001, 'BSC. Project Management', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1208020, 4, 'Christian', 'Tetteh', 'Yemoh', '1978-12-25', 'Married', 243316331, 4003, 'MSC. Project Management', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1208035, 4, 'Hannah', 'Payne', 'Ekuah', '1989-11-11', 'Single', 543465356, 4003, 'BA. Integrated Development Studies', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1208068, 10, 'Gaston', 'Asiamoah', 'Mawuko', '1979-10-16', 'Married', 246704261, 10001, 'BSC. Accounting', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1208388, 1, 'Gloria', 'Kusi-Appiah', NULL, '1990-05-11', 'Married', 243192960, 1002, 'B.A Communication Studies', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1208879, 10, 'Rakiya', 'Mohammed', NULL, '1984-10-16', 'Married', 244636137, 10001, 'BSC. Accounting', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1250476, 5, 'Judith', 'Awoloh', 'Mawusi', '1988-11-13', 'Single', 249870964, 5002, 'MSC. Procurement Management', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1250679, 5, 'Alexander', 'Baiden', NULL, '1993-06-07', 'Single', 549936338, 5001, 'BSC Procurement & Supply Ch. Management ', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1250685, 4, 'Alex', 'Agbemabiese', 'Geoffery', '1990-03-10', 'Single', 247381067, 4005, 'MA. Economic Policy Management', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1250711, 1, 'Dondo', 'Mensah', NULL, '1981-05-01', 'Married', 266554383, 1004, 'MSLC', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1260708, 3, 'Goerge', 'Lartey', 'Azalekor', '1984-03-14', 'Married', 542315186, 3001, 'B.A Social Work', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1260709, 2, 'Nana Ama', 'Asare', 'Boamah', '1992-02-08', 'Single', 205702784, 2004, 'HND. Sec & Management Studies', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1260795, 1, 'Samuel', 'Barnor', NULL, '1977-04-20', 'Married', 242841152, 1003, 'SSCE', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1293061, 5, 'Jones', 'Agbenya', 'Seyram Yoa', '1991-12-26', 'Single', 245042812, 5003, 'MSC. Procurement Management, MSC. Finance', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1293130, 6, 'Bernice', 'Watson', 'Obuobi', '1990-04-10', 'Married', 543428126, 6004, 'BA. Management', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1293137, 1, 'Edward', 'Ackotia', 'Selasi', '1994-11-02', 'Single', 548087835, 1001, 'BSC. Information Technology', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1293142, 1, 'Amoo', 'Keren', 'Obieley', '1990-03-25', 'Married', 247155513, 1006, 'MBA Corporate Governance', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1293146, 3, 'Francisca', 'Baiden', 'Nana Ama Owusua', '1990-03-31', 'Married', 546740468, 3001, 'B.A Information Studies', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1293148, 2, 'Linda', 'Aryee', NULL, '1993-11-20', 'Single', 245027334, 2003, 'HND. Accounting', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1293156, 7, 'Ivy', 'Paddy', 'Ayenor', '1982-06-10', 'Single', 244633393, 7005, 'BSC. Management Studies', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1293324, 4, 'Kojo', 'Boadu', 'Frempong', '1973-06-04', 'Married', 506090955, 4001, 'MBA. Business Administration', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1293419, 10, 'Charlotte', 'Barden', 'Asiamah', '1989-07-21', 'Single', 246326998, 10001, 'MSC. Accounting & Finance', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1303301, 1, 'Patience', 'Pascaline', 'Bonsu', '1986-10-03', 'Married', 242753001, 1002, 'DIP Marketing', 'Junior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1316958, 7, 'Bernard', 'Dzomeku', 'Selasi', '1974-11-01', 'Married', 244260635, 7006, 'Masters Of Public Health', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1318098, 4, 'Joshua', 'Sampson', NULL, '1995-04-22', 'Single', 209457422, 4002, 'BA. Political Science', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1319292, 3, 'Gladstone', 'Agbakpe', 'Fakor', '1973-11-23', 'Married', 544255309, 3002, 'MPHIL In Psycology', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1319312, 8, 'Yao', 'Dor', 'Bezaleel', '1966-05-19', 'Married', 244817774, 8001, 'Masters Of Tech.Education', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1319333, 7, 'Wilma', 'Glover', 'S. Titus', '1974-10-24', 'Married', 571276632, 7007, 'MPIL In Education', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1319336, 7, 'Christiana', 'Asiedu', 'Frema', '1983-12-07', 'Married', 264843131, 7002, 'BSC. Food Science', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1319354, 7, 'Hagan', 'Nana Kwame', 'Yamoah', '1980-10-05', 'Married', 0, 7003, 'MA. International Affairs', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1328979, 1, 'Dacosta', 'Mensah', NULL, '1986-02-10', 'Married', 209378371, 1001, 'ADV. PROF. Diploma System Engineering', 'Junior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1330144, 1, 'Richlove', 'Agyarko', 'Lauryn', '1986-12-09', 'Married', 244081634, 1002, 'Certification In Records Management', 'Junior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1330187, 10, 'Mawuena', 'Amo', 'Asabea B.', '1987-12-30', 'Married', 242221828, 10001, 'BBA. Accounting Option', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1330191, 2, 'Mary', 'Dodoo', 'Naa Dodua', '1991-05-03', 'Single', 541830620, 2002, 'HND. Graphic Design', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1330853, 3, 'Godfred', 'Gyawu-Darko', NULL, '1992-12-10', 'Married', 266299755, 3001, 'B.A Statistics', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1331979, 7, 'Fredrica', 'Acquaye', NULL, '1981-07-06', 'Single', 244816163, 7001, 'HND. Marketing', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1332742, 1, 'Sandra', 'Allen', 'Odi', '1980-05-01', 'Married', 244790534, 1005, 'BSC. Admin', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1333121, 10, 'Frankina', 'Nkrumah', 'Awurama', '1967-09-20', 'Single', 247773000, 10001, 'BSC. Administration Banking & Finance', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1370794, 10, 'Sedudzi', 'Macauley', 'Yao', '1996-07-18', 'Single', 543810298, 10001, 'BSC. Admin', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1374807, 10, 'Josephine', 'Aful', 'Konadu', '1984-05-07', 'Single', 243382314, 10001, 'B. COM', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1407616, 10, 'Ernestina', 'Nyanzu', 'Nvida', '1980-05-04', 'Married', 244548172, 10001, 'BSC. Accounting', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1407676, 5, 'Boadiwa', 'Asante', 'Rashida', '1994-06-04', 'Single', 261677456, 5002, 'BSC. Logistics & Supply Ch.', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1407689, 10, 'Christopher', 'Mensah', 'Nii Amartey', '1990-07-23', 'Single', 246532556, 10001, 'BSC. Accounting', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(1407713, 10, 'Christabel', 'Sowah-Mensah', 'N. A.', '1984-05-07', 'Single', 560167661, 10001, 'BSC. Accounting', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1408001, 10, 'Emelia', 'Osei-Wusu', NULL, '1993-06-04', 'Married', 242386888, 10001, 'BSC. Accounting', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1408590, 3, 'Hamida', 'Ibrahim', 'Adam', '1989-11-25', 'Single', 207573153, 3001, 'Bachelor of Law', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1409137, 10, 'Alberta', 'Hukportie', NULL, '1984-08-17', 'Single', 242509868, 10001, 'BSC. Accounting', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(1410459, 1, 'Mubarak', 'Issaka', NULL, '1990-11-14', 'Single', 205822496, 1002, 'SSCE', 'Senior', 'M', 'user-profile-svgrepo-com.svg', 0, 0),
(8600371, 1, 'Doreen', 'Lomoko', NULL, '1979-02-14', 'Single', 244968221, 1002, 'DIP Inform. Studies', 'Senior', 'F', 'user-profile-svgrepo-com.svg', 0, 0),
(12345678, 2, 'Elisha', 'Soglo-Ahianyo', 'Eli', '1997-05-21', 'Single', 503723770, 2003, 'Bsc.Computer Science', 'Junior', 'M', 'background.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `STAFF_DETAIL`
-- (See below for the actual view)
--
CREATE TABLE `STAFF_DETAIL` (
`Staff_ID` int
,`Director_name` varchar(77)
,`Fname` varchar(30)
,`Mname` varchar(15)
,`Lname` varchar(30)
,`Staff_name` varchar(77)
,`DOB` date
,`Marital_Status` varchar(7)
,`Direct_ID` int
,`UnitID` int
,`Phone_number` int
,`Highest_Qualification` varchar(255)
,`Rank_Status` varchar(6)
,`Sex` char(1)
,`profile` varchar(255)
,`Seconded` int
,`Disable` int
,`Directorate_Name` varchar(100)
,`Current_Grade` varchar(100)
,`Date_of_first_appointment` date
,`Date_of_present_appointment` date
);

-- --------------------------------------------------------

--
-- Table structure for table `TRAINING`
--

CREATE TABLE `TRAINING` (
  `Training_no` int NOT NULL,
  `Start_date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Staff_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `TRAINING_TYPE`
--

CREATE TABLE `TRAINING_TYPE` (
  `Training_number` int NOT NULL,
  `Training_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `UNIT`
--

CREATE TABLE `UNIT` (
  `Unit_ID` int NOT NULL,
  `Unit_Name` varchar(100) NOT NULL,
  `Unit_Head_ID` int DEFAULT NULL,
  `DirID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `UNIT`
--

INSERT INTO `UNIT` (`Unit_ID`, `Unit_Name`, `Unit_Head_ID`, `DirID`) VALUES
(1001, 'IT', 61269, 1),
(1002, 'Records', 38735, 1),
(1003, 'Transport', 917925, 1),
(1004, 'Estate', 817842, 1),
(1005, 'Protocol', 971361, 1),
(1006, 'Personnel', 904812, 1),
(1011, 'Reception', 663698, 1),
(2001, 'TRG & DEVT', 80460, 2),
(2002, 'Plan & Strate', 1330191, 2),
(2003, 'PERF. Management', 1293148, 2),
(2004, 'Labour Rel.', 1293148, 2),
(3001, 'RES & STAT', 929363, 3),
(3002, 'LIBRARY', NULL, 3),
(4001, 'Policy Coord.', NULL, 4),
(4002, 'Planning', NULL, 4),
(4003, 'Budget & Resource Mobilisation', NULL, 4),
(4004, 'M&E', NULL, 4),
(4005, 'Project Management & Coordination', NULL, 4),
(5001, 'Stores', NULL, 5),
(5002, 'Goods', NULL, 5),
(5003, 'Services', NULL, 5),
(5004, 'Works', NULL, 5),
(6001, 'University & Pre-Vars', NULL, 6),
(6002, 'Technical University', NULL, 6),
(6003, 'College Of Education', NULL, 6),
(6004, 'Polytechnics', NULL, 6),
(7001, 'Basic Education', NULL, 7),
(7002, 'Secondary', NULL, 7),
(7003, 'Non-Formal', NULL, 7),
(7004, 'Languages', NULL, 7),
(7005, 'STME', NULL, 7),
(7006, 'Special Education', NULL, 7),
(7007, 'IGCE', NULL, 7),
(8001, 'Technical', NULL, 2),
(8002, 'Vocational', NULL, 2),
(9001, 'Accounts', NULL, 9),
(9002, 'Treasury', NULL, 9),
(9003, 'FIN. ANL & MONIT.', NULL, 9),
(10001, 'Internal Audit', 664242, 10);

-- --------------------------------------------------------

--
-- Structure for view `STAFF_DETAIL`
--
DROP TABLE IF EXISTS `STAFF_DETAIL`;

CREATE ALGORITHM=UNDEFINED DEFINER=`admin`@`%` SQL SECURITY DEFINER VIEW `STAFF_DETAIL`  AS  select `E`.`Staff_ID` AS `Staff_ID`,concat_ws(' ',`D`.`Lname`,`D`.`Fname`,`D`.`Mname`) AS `Director_name`,`E`.`Fname` AS `Fname`,`E`.`Mname` AS `Mname`,`E`.`Lname` AS `Lname`,concat_ws(' ',`E`.`Lname`,`E`.`Fname`,`E`.`Mname`) AS `Staff_name`,`E`.`DOB` AS `DOB`,`E`.`Marital_Status` AS `Marital_Status`,`E`.`Direct_ID` AS `Direct_ID`,`E`.`UnitID` AS `UnitID`,`E`.`Phone_number` AS `Phone_number`,`E`.`Highest_Qualification` AS `Highest_Qualification`,`E`.`Rank_Status` AS `Rank_Status`,`E`.`Sex` AS `Sex`,`E`.`profile` AS `profile`,`E`.`Seconded` AS `Seconded`,`E`.`Disable` AS `Disable`,`DIRECTORATE`.`Directorate_Name` AS `Directorate_Name`,`APPOINTMENT`.`Current_Grade` AS `Current_Grade`,`APPOINTMENT`.`Date_of_first_appointment` AS `Date_of_first_appointment`,`APPOINTMENT`.`Date_of_present_appointment` AS `Date_of_present_appointment` from (((`STAFF` `D` join `STAFF` `E`) join `DIRECTORATE`) join `APPOINTMENT`) where ((`E`.`Direct_ID` = `DIRECTORATE`.`Directorate_ID`) and (`D`.`Staff_ID` = `DIRECTORATE`.`Directorate_Head_ID`) and (`E`.`Staff_ID` = `APPOINTMENT`.`StaffID`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `APPOINTMENT`
--
ALTER TABLE `APPOINTMENT`
  ADD PRIMARY KEY (`Composite`,`StaffID`) USING BTREE;

--
-- Indexes for table `AUTH`
--
ALTER TABLE `AUTH`
  ADD PRIMARY KEY (`StafID`,`login_password`);

--
-- Indexes for table `CHIEF_DIRECTOR`
--
ALTER TABLE `CHIEF_DIRECTOR`
  ADD PRIMARY KEY (`Chief_Directorate_ID`),
  ADD KEY `Chief_Director_ID` (`Chief_Director_ID`);

--
-- Indexes for table `DIRECTORATE`
--
ALTER TABLE `DIRECTORATE`
  ADD PRIMARY KEY (`Directorate_ID`),
  ADD KEY `Directorate_Head_ID` (`Directorate_Head_ID`),
  ADD KEY `Chief_ID` (`Chief_ID`);

--
-- Indexes for table `HR_ADMIN`
--
ALTER TABLE `HR_ADMIN`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `HR_ADMIN_ACCESS`
--
ALTER TABLE `HR_ADMIN_ACCESS`
  ADD PRIMARY KEY (`change_made_on`,`time_change_occur`),
  ADD KEY `StafID` (`Admin_ID`);

--
-- Indexes for table `HR_ADMIN_ACCESS_FOR_ADMIN`
--
ALTER TABLE `HR_ADMIN_ACCESS_FOR_ADMIN`
  ADD PRIMARY KEY (`change_made_on`,`time_of_change`),
  ADD KEY `Admin_ID` (`Admin_ID`);

--
-- Indexes for table `LEAVE_TYPE`
--
ALTER TABLE `LEAVE_TYPE`
  ADD PRIMARY KEY (`Leave_ID`);

--
-- Indexes for table `STAFF`
--
ALTER TABLE `STAFF`
  ADD UNIQUE KEY `Staff_ID` (`Staff_ID`) USING BTREE,
  ADD KEY `UnitID` (`UnitID`),
  ADD KEY `Directorate_ID` (`Direct_ID`);

--
-- Indexes for table `TRAINING`
--
ALTER TABLE `TRAINING`
  ADD PRIMARY KEY (`Staff_ID`,`Training_no`);

--
-- Indexes for table `TRAINING_TYPE`
--
ALTER TABLE `TRAINING_TYPE`
  ADD PRIMARY KEY (`Training_number`);

--
-- Indexes for table `UNIT`
--
ALTER TABLE `UNIT`
  ADD PRIMARY KEY (`Unit_ID`),
  ADD KEY `DirID` (`DirID`),
  ADD KEY `Unit_Head_ID` (`Unit_Head_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AUTH`
--
ALTER TABLE `AUTH`
  ADD CONSTRAINT `AUTH_ibfk_1` FOREIGN KEY (`StafID`) REFERENCES `STAFF` (`Staff_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `CHIEF_DIRECTOR`
--
ALTER TABLE `CHIEF_DIRECTOR`
  ADD CONSTRAINT `CHIEF_DIRECTOR_ibfk_1` FOREIGN KEY (`Chief_Director_ID`) REFERENCES `STAFF` (`Staff_ID`);

--
-- Constraints for table `DIRECTORATE`
--
ALTER TABLE `DIRECTORATE`
  ADD CONSTRAINT `DIRECTORATE_ibfk_1` FOREIGN KEY (`Directorate_Head_ID`) REFERENCES `STAFF` (`Staff_ID`),
  ADD CONSTRAINT `DIRECTORATE_ibfk_2` FOREIGN KEY (`Chief_ID`) REFERENCES `CHIEF_DIRECTOR` (`Chief_Directorate_ID`);

--
-- Constraints for table `HR_ADMIN_ACCESS`
--
ALTER TABLE `HR_ADMIN_ACCESS`
  ADD CONSTRAINT `HR_ADMIN_ACCESS_ibfk_1` FOREIGN KEY (`Admin_ID`) REFERENCES `HR_ADMIN` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `HR_ADMIN_ACCESS_ibfk_2` FOREIGN KEY (`change_made_on`) REFERENCES `STAFF` (`Staff_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `HR_ADMIN_ACCESS_FOR_ADMIN`
--
ALTER TABLE `HR_ADMIN_ACCESS_FOR_ADMIN`
  ADD CONSTRAINT `HR_ADMIN_ACCESS_FOR_ADMIN_ibfk_1` FOREIGN KEY (`change_made_on`) REFERENCES `HR_ADMIN` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `HR_ADMIN_ACCESS_FOR_ADMIN_ibfk_2` FOREIGN KEY (`Admin_ID`) REFERENCES `HR_ADMIN` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `STAFF`
--
ALTER TABLE `STAFF`
  ADD CONSTRAINT `STAFF_ibfk_1` FOREIGN KEY (`UnitID`) REFERENCES `UNIT` (`Unit_ID`),
  ADD CONSTRAINT `STAFF_ibfk_2` FOREIGN KEY (`Direct_ID`) REFERENCES `DIRECTORATE` (`Directorate_ID`);

--
-- Constraints for table `UNIT`
--
ALTER TABLE `UNIT`
  ADD CONSTRAINT `UNIT_ibfk_1` FOREIGN KEY (`DirID`) REFERENCES `DIRECTORATE` (`Directorate_ID`),
  ADD CONSTRAINT `UNIT_ibfk_2` FOREIGN KEY (`Unit_Head_ID`) REFERENCES `STAFF` (`Staff_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
