-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 10:35 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter-practices`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_authenticate`
--

CREATE TABLE `tbl_authenticate` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `full_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_authenticate`
--

INSERT INTO `tbl_authenticate` (`id`, `email`, `password`, `full_name`) VALUES
(1, 'hafijul233@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Mohammad Hafijul Islam'),
(2, 'mustak123@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Mohammad Mustak Ahmed'),
(3, 'hamida123@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Hamida Begum'),
(4, 'razia852@yahoo.com', '21232f297a57a5a743894a0e4a801fc3', 'Razia Khatun'),
(5, 'anwer123@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Anwer Hossian');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(45) NOT NULL DEFAULT '',
  `last_name` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`) VALUES
(1, 'Hafijul', 'Islam'),
(2, 'Mustak', 'Ahmed'),
(4, 'Hamida', 'Begum'),
(5, 'MDRubel', 'Howladar'),
(6, 'MsRazia', 'Khatun'),
(7, 'Lalu', 'saheb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_authenticate`
--
ALTER TABLE `tbl_authenticate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_authenticate`
--
ALTER TABLE `tbl_authenticate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
