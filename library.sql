-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 12:49 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` varchar(20) NOT NULL,
  `btitle` varchar(250) NOT NULL,
  `bauth` varchar(255) NOT NULL,
  `bt_id` int(10) UNSIGNED NOT NULL,
  `bdateadd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `btitle`, `bauth`, `bt_id`, `bdateadd`) VALUES
('IT001', 'PHP', 'ศิริสัม พันธ์วงษ์', 9, '2018-10-17 22:02:31'),
('H001', 'ความสุขความทรงจำในรัชกาลที่ ๙', 'ธงทอง จันทรางศุ', 1, '2018-10-17 22:01:20'),
('RE002', 'พระปัจเจกพุทธเจ้า', 'รุจน์ มัณฑิรา', 6, '2018-10-17 22:21:23'),
('IT007', 'CSS', 'ณัฐดนัย จิระกังวาน', 9, '2018-10-17 21:56:01'),
('RE001', 'ปรัชญาเมธีกับพุทธทาสภิขุ', 'ทวีวัฒน์ ปุณฑริกวิวัฒน์', 6, '2018-10-17 22:19:21'),
('SC001', 'ทัศนาวิทยาศาสตร์ - พลังงาน', 'ผศ. สุพล บริพันธุ์', 3, '2018-10-17 22:09:07'),
('SO001', 'สังคมวิทยาชนบท : แนวคิดทางทฤษฎี', 'รศ.ดร.สมศักดิ์ ศรีสันติสุข', 7, '2018-10-17 22:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `booktype`
--

CREATE TABLE `booktype` (
  `bt_id` int(3) UNSIGNED NOT NULL,
  `bt_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booktype`
--

INSERT INTO `booktype` (`bt_id`, `bt_name`) VALUES
(1, 'ประวัติศาสตร์'),
(2, 'คณิตศาสตร์'),
(3, 'วิทยาศาสตร์'),
(4, 'ความรู้ทั่วไป'),
(5, 'ปรัชญา'),
(6, 'ศาสนา'),
(7, 'สังคมศาสตร์'),
(8, 'ภาษาศาสตร์'),
(9, 'เทคโนโลยี'),
(10, 'วรรณคดี');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mid` varchar(20) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `mdep` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mid`, `mname`, `mdep`) VALUES
('IT001', 'มีนา', 'วิทยาการคอมพิวเตอร์'),
('IT002', 'ปรีชา', 'วิทยาการคอมพิวเตอร์');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `login_id` int(11) UNSIGNED NOT NULL,
  `login_username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `login_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `login_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `login_status` enum('admin','user') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`login_id`, `login_username`, `login_password`, `login_email`, `firstname`, `lastname`, `login_status`, `date_add`) VALUES
(1, 'admin', '7583289901fb25edfa0481940bf86556f721af68414f4fa65cd1ac0873292f32', 'root@root.com', 'Super', 'User', 'admin', '2018-09-29 15:03:11'),
(115, 'flame', '64c7e936b88cf180f26f46507e598bb31bb914cf6498aacab07735d93d2e6363', 'flame@hotmail.com', 'Weerayut', 'Buaphet', 'user', '2018-10-17 15:52:35'),
(118, 'user', '164b4d4af652de0d23519cb30818853dccd57d5bb1c7e361256f58d122a671a2', 'jimmie@hotmail.com', 'Nutdanai', 'jirakangwan', 'user', '2018-10-17 16:24:46'),
(119, 'darksoft', '164b4d4af652de0d23519cb30818853dccd57d5bb1c7e361256f58d122a671a2', 'guitar_dark_soft@hotmail.com', 'จักรกฤษ', 'ทาอภัย', 'user', '2018-10-17 21:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `transections`
--

CREATE TABLE `transections` (
  `mid` varchar(20) NOT NULL,
  `bid` varchar(20) NOT NULL,
  `tlend` date NOT NULL,
  `trest` date NOT NULL,
  `tstat` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transections`
--

INSERT INTO `transections` (`mid`, `bid`, `tlend`, `trest`, `tstat`) VALUES
('IT001', 'IT001', '2018-09-30', '2018-09-30', 0),
('IT001', 'IT002', '2018-09-30', '2018-09-30', 0),
('IT001', 'IT001', '2018-09-30', '2018-09-30', 0),
('IT001', 'IT001', '2018-09-30', '2018-09-30', 0),
('IT001', 'IT002', '2018-09-30', '2018-09-30', 0),
('IT001', 'IT003', '2018-09-30', '2018-09-30', 0),
('IT001', 'IT001', '2018-09-30', '2018-10-09', 0),
('IT001', 'IT001', '2018-09-30', '2018-09-30', 0),
('IT001', 'IT001', '2018-09-30', '2018-09-30', 0),
('IT001', 'IT001', '2018-09-30', '2018-10-11', 0),
('IT001', 'IT001', '2018-09-16', '2018-09-30', 0),
('IT001', 'IT001', '2018-09-16', '2018-09-30', 0),
('IT001', 'IT001', '2018-09-30', '2018-09-30', 0),
('IT001', 'IT001', '2018-09-30', '2018-09-30', 0),
('IT001', 'IT001', '2018-10-03', '2018-10-03', 0),
('IT001', 'IT001', '2018-10-03', '2018-10-03', 0),
('IT001', 'IT001', '2018-10-03', '2018-10-03', 0),
('IT001', 'IT001', '2018-10-03', '2018-10-03', 0),
('IT001', 'IT001', '2018-10-03', '2018-10-03', 0),
('IT001', 'IT001', '2018-10-04', '2018-10-04', 0),
('IT001', 'IT002', '2018-10-04', '2018-10-04', 0),
('IT001', 'IT003', '2018-10-04', '2018-10-04', 0),
('IT001', 'IT001', '2018-10-04', '2018-10-04', 0),
('IT002', 'IT001', '2018-10-04', '2018-10-04', 0),
('IT001', 'IT001', '2018-10-04', '2018-10-04', 0),
('IT001', 'IT001', '2018-10-04', '2018-10-04', 0),
('IT001', 'IT002', '2018-10-04', '2018-10-04', 0),
('IT001', 'it003', '2018-10-04', '2018-10-04', 0),
('IT001', 'IT001', '2018-10-04', '2018-10-04', 0),
('IT001', 'MT001', '2018-10-05', '2018-10-05', 0),
('IT002', 'IT001', '2018-10-05', '0000-00-00', 1),
('IT001', 'IT001', '2018-10-06', '0000-00-00', 1),
('IT001', '6969', '2018-10-07', '2018-10-07', 0),
('IT001', '6969', '2018-10-17', '2018-10-17', 0),
('IT001', '6969', '2018-10-17', '0000-00-00', 1),
('', '6969', '2018-10-18', '0000-00-00', 1),
('', '', '2018-10-18', '2018-10-18', 0),
('118', '6969', '2018-10-18', '0000-00-00', 1),
('118', 'IT001', '2018-10-18', '0000-00-00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `booktype`
--
ALTER TABLE `booktype`
  ADD PRIMARY KEY (`bt_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `login_username` (`login_username`),
  ADD UNIQUE KEY `login_email` (`login_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booktype`
--
ALTER TABLE `booktype`
  MODIFY `bt_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `login_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
