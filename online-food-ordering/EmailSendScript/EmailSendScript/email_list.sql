-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 01:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_list`
--

CREATE TABLE `email_list` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send` int(11) NOT NULL,
  `createdByWhom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_list`
--

INSERT INTO `email_list` (`id`, `email`, `username`, `send`, `createdByWhom`) VALUES
(1, 'rajkamalgautam2001@gmail.com', '', 0, 3),
(2, 'official.nextgenpixel@gmail.com', '', 0, 3),
(3, 'pixelgenmarketing@gmail.com', 'nextgenpixel', 0, 3),
(6, 'chandreshchauhan2001@gmail.com', '', 0, 3),
(7, 'aligazali786@icloud.com', '', 0, 3),
(8, 'amitkumarjaiswal5294879@gmail.com', '', 0, 3),
(9, 'www.pawaranish24@gmail.com', '', 0, 3),
(10, 'arnavmontysharma@gmail.com', '', 0, 3),
(11, 'arryantelge55@gmail.com', '', 0, 3),
(12, 'aunmahdi30@gmail.com', '', 0, 3),
(13, 'bhambhani123456@gmail.com', '', 0, 3),
(14, 'chandrakamalgautam@gmail.com', 'Rajkamal', 0, 3),
(15, 'darshanbambhaniya1873@gmail.com', '', 0, 3),
(16, 'ghrutisingh26@gmail.com', '', 0, 3),
(17, 'idrisi.rehan@gmail.com', '', 0, 3),
(18, 'jainaman337@gmail.com', '', 0, 3),
(19, 'jaiswaljuhi150203@gmail.com', '', 0, 3),
(21, 'pawaranish24@gmail.com', '', 0, 3),
(22, 'rishabwahi77@gmail.com', '', 0, 3),
(23, 'sathiadak003@gmail.com', '', 0, 3),
(24, 'shkmoin786@gmail.com', '', 0, 3),
(25, 'ujwallodaya786.ul@gmail.com', '', 0, 3),
(26, 'mvp104.vm@gmail.com', '', 0, 3),
(27, 'fawkinck@gmail.com', '', 0, 3),
(28, 'premgujar6460@gmail.com', '', 0, 3),
(29, 'jainniraj40@gmail.com', '', 0, 3),
(30, 'noelpinto47@gmail.com', '', 0, 3),
(31, 'shyamkumaryadav2003@gmail.com', '', 0, 3),
(32, 'sspanda1700@gmail.com', '', 0, 3),
(33, 'raunakagrahari15@gmail.com', '', 0, 3),
(34, 'shreyasmohite786@gmail.com', '', 0, 3),
(35, 'nagularamya9@gmail.com', '', 0, 3),
(36, 'sanjeevpandit195@gmail.com', '', 0, 3),
(37, 'shikha42001@gmail.com', '', 0, 3),
(38, 'hjhitesh9680162137@gmail.com', '', 0, 3),
(39, 'pradev2002@gmail.com', '', 0, 3),
(40, 'hjoshi30042001@gmail.com', '', 0, 3),
(41, 'gudadreddy1967@gmail.com', '', 0, 3),
(42, 'rohitsalve98@gmail.com', '', 0, 3),
(43, 'simranyadav0610@gmail.com', '', 0, 3),
(45, 'palaash.sarkar@gmail.com', '', 0, 3),
(46, 'padmakamble2000@gmail.com', '', 0, 3),
(47, 'singhashwini954@gmail.com', '', 0, 3),
(48, 'singhashwini954@gmail.com', '', 0, 3),
(49, 'singhashwini954@gmail.com', '', 0, 3),
(50, 'tejaspophale01@gmail.com', '', 0, 3),
(51, 'soumyaspillai2001@gmail.com', '', 0, 3),
(52, 'motenamita@gmail.com', '', 0, 3),
(53, 'sadiyamhate98@gmail.com', '', 0, 3),
(54, 'suraj.1083853@ratnamcollege.edu.in', '', 0, 3),
(55, 'btiwari01412@gmail.com', '', 0, 3),
(56, 'priyauy2003@gmail.com', '', 0, 3),
(57, 'siddhesh.s.pansare@gmail.com', '', 0, 3),
(58, 'sshalinisi10@gmail.com', '', 0, 3),
(59, 'poorvashukla315@gmail.com', '', 0, 3),
(60, 'anuragk2764@gmail.com', '', 0, 3),
(61, 'gauravgupta14376@gmail.com', '', 0, 3),
(62, 'charitaranadive29@gmail.com', '', 0, 3),
(63, 'hrithikunawane@gmail.com', '', 0, 3),
(64, 'frolikpicxel@gmail.com', '', 0, 3),
(68, 'shahabtemkar@gmail.com', '', 0, 3),
(69, 'Arshadbamne@gmail.com', '', 0, 3),
(71, 'yug.narang10@gmail.com', '', 0, 3),
(72, 'chiraayupm2@gmail.com', '', 0, 3),
(73, 'rohitbhosale11051@gmail.com', '', 0, 3),
(74, 'mp573218@gmail.com', '', 0, 3),
(75, 'boneyash12@gmail.com', '', 0, 3),
(76, 'kirtankotian5@gmail.com', '', 0, 3),
(77, 'aryanbhosale2411@gmail.com', '', 0, 3),
(78, 'khatmaldaking@gmail.com', '', 0, 3),
(79, 'marvick.ray@gmail.com', '', 0, 3),
(80, 'coder.corleone@gmail.com', '', 0, 0),
(82, 'ck9943@gmail.com', '', 0, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_list`
--
ALTER TABLE `email_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email_list`
--
ALTER TABLE `email_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
