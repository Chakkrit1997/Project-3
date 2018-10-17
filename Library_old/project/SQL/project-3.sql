-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 01:12 PM
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
-- Database: `project-3`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `login_id` int(11) UNSIGNED NOT NULL,
  `login_username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `login_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `login_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `login_status` enum('admin','user') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`login_id`, `login_username`, `login_password`, `login_email`, `login_status`, `date_add`) VALUES
(1, 'admin', '7583289901fb25edfa0481940bf86556f721af68414f4fa65cd1ac0873292f32', '', 'admin', '2018-09-29 15:03:11'),
(3, 'darksoft', '164b4d4af652de0d23519cb30818853dccd57d5bb1c7e361256f58d122a671a2', 'darksoft@darksoft.com', 'user', '2018-09-29 13:42:51'),
(110, 'student1', '164b4d4af652de0d23519cb30818853dccd57d5bb1c7e361256f58d122a671a2', 'std@gmail.com', 'user', '2018-10-03 16:13:08');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `login_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
