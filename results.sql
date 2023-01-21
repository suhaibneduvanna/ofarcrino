-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 11:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofarcrino`
--

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `item` varchar(250) NOT NULL,
  `result_no` int(10) NOT NULL,
  `pos` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `group_name` varchar(250) NOT NULL,
  `class` varchar(100) NOT NULL,
  `point` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `category`, `item`, `result_no`, `pos`, `name`, `group_name`, `class`, `point`) VALUES
(208, 'Junior', 'IBARATH READING', 1, 1, 'SUHAIB ZUBAIR', 'Romanesque', 'UG5', 10),
(209, 'Junior', 'IBARATH READING', 1, 2, 'SAEED ALI', 'Arabesque', 'UG5', 8),
(210, 'Junior', 'IBARATH READING', 1, 3, 'BASITH MUHAMMADALI', 'Baroque', 'UG5', 4),
(211, 'Junior', 'IBARATH READING', 1, 3, 'SHIHAB ZAKKIR', 'Romanesque', 'UG5', 4),
(212, 'General', 'THAHFEEZ B', 2, 1, 'RASHID ABDUL QADAR', 'Romanesque', 'PG1', 10),
(213, 'General', 'THAHFEEZ B', 2, 2, 'ABDUL HAKKIM', 'Baroque', 'PG2', 8),
(214, 'General', 'THAHFEEZ B', 2, 3, 'MUHAMMED', 'Romanesque', 'PG2', 4),
(215, 'Senior', 'THAHFEEZ A', 3, 1, 'MUHAMMAD', 'Romanesque', 'PG2', 10),
(216, 'Senior', 'THAHFEEZ A', 3, 2, 'RASHID', 'Romanesque', 'PG1', 8),
(217, 'Senior', 'THAHFEEZ A', 3, 3, 'MUSHTAQ', 'Baroque', 'PG2', 4),
(218, 'Sub Junior', 'IBARATH READING', 4, 1, 'SHAKIR', 'Baroque', 'UG3', 10),
(219, 'Sub Junior', 'IBARATH READING', 4, 2, 'NAJMU SABAH', 'Baroque', 'UG2', 8),
(220, 'Sub Junior', 'IBARATH READING', 4, 3, 'THWAHIR', 'Baroque', 'UG2', 4),
(221, 'Junior', 'POEM WRITING ARA', 6, 1, 'SAEED ALI', 'Arabesque', 'UG5', 10),
(222, 'Junior', 'POEM WRITING ARA', 6, 2, 'SAYYED NUHMAN', 'Arabesque', 'UG4', 6),
(223, 'Junior', 'POEM WRITING ARA', 6, 3, 'RAFI', 'Baroque', 'UG4', 2),
(224, 'Senior', 'BLURB', 7, 1, 'MUBASHIR', 'Baroque', 'PG1', 8),
(225, 'Senior', 'BLURB', 7, 2, 'MUSTHAFA', 'Romanesque', 'PG1', 6),
(226, 'Senior', 'BLURB', 7, 3, 'AJMAL', 'Romanesque', 'PG1', 2),
(227, 'Junior', 'POEM TRANS ENG TO MAL', 8, 1, 'MUHAMMAD SAHAL', 'Arabesque', 'UG4', 8),
(228, 'Junior', 'POEM TRANS ENG TO MAL', 8, 2, 'SIRAJUDHEEN', 'Romanesque', 'UG4', 6),
(229, 'Junior', 'POEM TRANS ENG TO MAL', 8, 3, 'SHAFEEQ HAMZA', 'Baroque', 'UG5', 2),
(230, 'Senior', 'TRANSLATION ENG TO ARA', 9, 1, 'NIJAS', 'Arabesque', 'PG2', 10),
(231, 'Senior', 'TRANSLATION ENG TO ARA', 9, 2, 'JUNAID', 'Arabesque', 'PG2', 6),
(232, 'Senior', 'TRANSLATION ENG TO ARA', 9, 3, 'FAWAVAS', 'Romanesque', 'PG2', 4),
(233, 'Sub Junior', 'STORY WRITING MAL', 10, 1, 'SAFWAN HASAN', 'Baroque', 'UG3', 8),
(234, 'Sub Junior', 'STORY WRITING MAL', 10, 2, 'SIRAJUL ANWAR', 'Baroque', 'UG2', 6),
(235, 'Sub Junior', 'STORY WRITING MAL', 10, 3, 'SIJAS', 'Arabesque', 'UG3', 2),
(236, 'Sub Junior', 'STORY WRITING MAL', 10, 3, 'YOUSUF ALI', 'Romanesque', 'UG1', 2),
(237, 'Sub Junior', 'STORY WRITING MAL', 10, 3, 'HASAN MUHAMMED', 'Romanesque', 'UG3', 2),
(238, 'Senior', 'LIVE TRANS ARB ENG', 11, 1, 'ABOOBACKER SAAD YUSUF', 'Romanesque', 'PG1', 10),
(239, 'Senior', 'LIVE TRANS ARB ENG', 11, 2, 'NIJAZ', 'Arabesque', 'PG2', 8),
(240, 'Senior', 'LIVE TRANS ARB ENG', 11, 3, 'ABDUL FATHAH', 'Baroque', 'PG2', 4),
(241, 'General', 'LIVE TRANS URG ENG', 12, 1, 'SAFWAN KUNJIMOIDEEN', 'Romanesque', 'PG2', 10),
(242, 'General', 'LIVE TRANS URG ENG', 12, 2, 'NIJAZ', 'Arabesque', 'PG2', 6),
(243, 'General', 'LIVE TRANS URG ENG', 12, 3, 'ABDUL HAKEEM', 'Baroque', 'PG2', 2),
(244, 'Junior', 'QUIZ', 13, 1, 'MASHOOD', 'Romanesque', 'UG4', 10),
(245, 'Junior', 'QUIZ', 13, 2, 'SABOOR ALI KHAN', 'Arabesque', 'UG4', 8),
(246, 'Junior', 'QUIZ', 13, 3, 'THAKYUDHEEN', 'Baroque', 'UG5', 4),
(247, 'Junior', 'THAFSEER TALK ARB', 14, 1, 'FAYAS', 'Arabesque', 'UG4', 10),
(248, 'Junior', 'THAFSEER TALK ARB', 14, 2, 'SHIHAB ZAKIR', 'Romanesque', 'UG5', 8),
(249, 'Junior', 'THAFSEER TALK ARB', 14, 3, 'RAFI', 'Baroque', 'UG4', 6),
(250, 'Senior', 'INSPIRATIONAL TALK ARB', 15, 1, 'SINAN BASHEER', 'Romanesque', 'PG2', 10),
(251, 'Senior', 'INSPIRATIONAL TALK ARB', 15, 2, 'MUSTHAQ ABDULRAHMAN', 'Arabesque', 'PG2', 6),
(252, 'Senior', 'INSPIRATIONAL TALK ARB', 15, 3, 'MUHAMMED ALI', 'Arabesque', 'PG1', 2),
(253, 'Sub Junior', 'HAIKU MAL', 16, 1, 'ANAS YUSUF', 'Baroque', 'UG3', 10),
(254, 'Sub Junior', 'HAIKU MAL', 16, 2, 'SAFWAN MOOSA', 'Arabesque', 'UG2', 6),
(255, 'Sub Junior', 'HAIKU MAL', 16, 3, 'HAFEEZ ', 'Arabesque', 'UG2', 4),
(256, 'Junior', 'THAHFEEZ A', 19, 1, 'FAYAS', 'Arabesque', 'UG4', 10),
(257, 'Junior', 'THAHFEEZ A', 19, 2, 'BILAL', 'Baroque', 'UG5', 8),
(258, 'Junior', 'THAHFEEZ A', 19, 3, 'MUBARACK', 'Romanesque', 'UG4', 4),
(259, 'Junior', 'TRANSLATION MAL URD', 20, 1, 'ASHIQ', 'Arabesque', 'UG4', 10),
(260, 'Junior', 'TRANSLATION MAL URD', 20, 2, 'RASHID ', 'Baroque', 'UG5', 6),
(261, 'Junior', 'TRANSLATION MAL URD', 20, 3, 'MIHJA AHMED', 'Baroque', 'UG5', 2),
(262, 'Junior', 'POEM WRITING MAL', 21, 1, 'SAHAL', 'Arabesque', 'UG4', 8),
(263, 'Junior', 'POEM WRITING MAL', 21, 2, 'SIRAJUDHEEN', 'Romanesque', 'UG4', 6),
(264, 'Junior', 'POEM WRITING MAL', 21, 3, 'DILDAR ', 'Romanesque', 'UG4', 4),
(265, 'Sub Junior', 'ESSAY MALA', 22, 1, 'MUAHAMMED TS', 'Baroque', 'UG3', 10),
(266, 'Sub Junior', 'ESSAY MALA', 22, 2, 'AKHIL FARIS', 'Arabesque', 'UG3', 6),
(267, 'Sub Junior', 'ESSAY MALA', 22, 3, 'THAMEEM', 'Romanesque', 'UG3', 4),
(268, 'Sub Junior', 'ESSAY MALA', 22, 3, 'NIZAMUDHEEN', 'Romanesque', 'UG1', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
