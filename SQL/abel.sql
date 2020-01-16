-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 16, 2020 at 01:25 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sm_url`
--

-- --------------------------------------------------------

--
-- Table structure for table `sm_shorturl`
--

CREATE TABLE `sm_shorturl` (
  `id` int(11) NOT NULL,
  `short` varchar(20) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `clicks` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sm_shorturl`
--

INSERT INTO `sm_shorturl` (`id`, `short`, `url`, `created_at`, `clicks`) VALUES
(1, '28931', 'http://crypt-password.web.app', '2020-01-16 00:23:29', 0),
(2, '987a7', 'https://emmanueldevs.github.io', '2020-01-16 00:23:40', 0),
(3, 'c92cc', 'http://google.com', '2020-01-16 00:23:51', 0),
(4, 'd1cb9', 'http://instagram.com', '2020-01-16 00:24:05', 0),
(5, '2ee9a', 'http://crypt-password.firebaseapp.com', '2020-01-16 00:24:16', 0),
(6, '3e5d8', 'http://twitter.com', '2020-01-16 00:24:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', '7b902e6ff1db9f560443f2048974fd7d386975b0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sm_shorturl`
--
ALTER TABLE `sm_shorturl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `short` (`short`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sm_shorturl`
--
ALTER TABLE `sm_shorturl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
