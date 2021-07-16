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
-- Table structure for table `pixelemail`
--

CREATE TABLE `pixelemail` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pixelemail`
--

INSERT INTO `pixelemail` (`id`, `username`, `email`, `password`, `date`) VALUES
(3, 'Nextgenpixel', 'official.nextgenpixel@gmail.com', '$2y$10$h1oYR3O9AjQtPQ37JXGr6OQkmkmboCw6on0I6Ue/tbw8U9o8NGCi2', '2021-05-30 14:42:50'),
(14, 'Rajkamal', 'rajkamalgautam2001@gmail.com', '$2y$10$IZGJAKPPWKjZUOG4.STuretElhqqneI4glk6hw4Byl1tMjvA0qdBO', '2021-06-01 12:45:14'),
(16, 'bhavna', 'bhavnagottam.bg@gmail.com', '$2y$10$bPGz2ElGAhSRVs25v3xagufL7DKKZax8KWGyKiJZ5w.U5kGHgJOsa', '2021-06-01 13:20:12'),
(17, 'rehan', 'rehan@gmail.com', '$2y$10$bPGz2ElGAhSRVs25v3xagufL7DKKZax8KWGyKiJZ5w.U5kGHgJOsa', '2021-06-01 13:20:12'),
(18, 'ck', 'chandrakam@gmail.com', '$2y$10$xv2EFl/2q9Bi5nCSZ8CKkOuYgYPxRCqryJ7gSxUvtE2RkptNKvnAG', '2021-06-01 17:05:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pixelemail`
--
ALTER TABLE `pixelemail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pixelemail`
--
ALTER TABLE `pixelemail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
