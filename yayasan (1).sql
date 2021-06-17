-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 05:03 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yayasan`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `excerpt` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `excerpt`, `description`, `date_from`, `date_to`, `users_id`, `created_at`) VALUES
(1, 'event 1', 'ini excerpt event 1', 'aslkdaslkdnalskcnalskncalksnlasnclkasnclkansclkna', '2021-06-14', '2021-06-16', NULL, '2021-06-14 11:05:15'),
(3, 'event 2', 'ini excerpt event 2', 'asdmalsnd asdaksmd lajsd\r\n asd asndkajsnd \r\nasd asjdnas', '2020-12-31', '2021-12-31', NULL, '2021-06-14 12:09:45'),
(4, 'event 3', 'ini excerpt event 3', 'asdlasnkd asldka nsdlaksdn alsdna lsdknals dnalsknda lksndl askndalks', '2020-11-30', '2021-12-31', NULL, '2021-06-14 12:44:07'),
(5, 'event 1', 'ini excerpt event 3', 'sdaas', '2021-12-31', '2021-12-31', NULL, '2021-06-14 12:54:49'),
(6, 'event 1', 'ini excerpt event 3', 'dasd', '2021-12-31', '2021-12-31', NULL, '2021-06-14 12:54:59'),
(7, 'event 1', 'ini excerpt event 3', 'sdasdasdasd', '2021-12-01', '2021-12-31', NULL, '2021-06-14 12:55:25'),
(8, 'event 8', 'ini excerpt event 3', 'slakdjalksdjal', '2021-12-31', '2021-12-31', NULL, '2021-06-16 07:51:34'),
(9, 'event 3', 'ini excerpt event 3', 'dasjhdasjd', '2021-12-31', '2021-12-31', NULL, '2021-06-14 12:56:02'),
(10, 'This Is Title 0', 'This Is Excerpt 0', 'This is Description 0', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(11, 'This Is Title 1', 'This Is Excerpt 1', 'This is Description 1', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(12, 'This Is Title 2', 'This Is Excerpt 2', 'This is Description 2', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(13, 'This Is Title 3', 'This Is Excerpt 3', 'This is Description 3', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(14, 'This Is Title 4', 'This Is Excerpt 4', 'This is Description 4', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(15, 'This Is Title 5', 'This Is Excerpt 5', 'This is Description 5', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(16, 'This Is Title 6', 'This Is Excerpt 6', 'This is Description 6', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(17, 'This Is Title 7', 'This Is Excerpt 7', 'This is Description 7', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(18, 'This Is Title 8', 'This Is Excerpt 8', 'This is Description 8', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(19, 'This Is Title 9', 'This Is Excerpt 9', 'This is Description 9', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(20, 'This Is Title 10', 'This Is Excerpt 10', 'This is Description 10', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(21, 'This Is Title 11', 'This Is Excerpt 11', 'This is Description 11', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(22, 'This Is Title 12', 'This Is Excerpt 12', 'This is Description 12', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(23, 'This Is Title 13', 'This Is Excerpt 13', 'This is Description 13', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(24, 'This Is Title 14', 'This Is Excerpt 14', 'This is Description 14', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(25, 'This Is Title 15', 'This Is Excerpt 15', 'This is Description 15', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(26, 'This Is Title 16', 'This Is Excerpt 16', 'This is Description 16', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(27, 'This Is Title 17', 'This Is Excerpt 17', 'This is Description 17', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(28, 'This Is Title 18', 'This Is Excerpt 18', 'This is Description 18', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(29, 'This Is Title 19', 'This Is Excerpt 19', 'This is Description 19', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(30, 'This Is Title 20', 'This Is Excerpt 20', 'This is Description 20', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(31, 'This Is Title 21', 'This Is Excerpt 21', 'This is Description 21', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(32, 'This Is Title 22', 'This Is Excerpt 22', 'This is Description 22', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(33, 'This Is Title 23', 'This Is Excerpt 23', 'This is Description 23', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(34, 'This Is Title 24', 'This Is Excerpt 24', 'This is Description 24', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(35, 'This Is Title 25', 'This Is Excerpt 25', 'This is Description 25', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(36, 'This Is Title 26', 'This Is Excerpt 26', 'This is Description 26', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(37, 'This Is Title 27', 'This Is Excerpt 27', 'This is Description 27', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(38, 'This Is Title 28', 'This Is Excerpt 28', 'This is Description 28', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(39, 'This Is Title 29', 'This Is Excerpt 29', 'This is Description 29', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(40, 'This Is Title 30', 'This Is Excerpt 30', 'This is Description 30', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(41, 'This Is Title 31', 'This Is Excerpt 31', 'This is Description 31', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(42, 'This Is Title 32', 'This Is Excerpt 32', 'This is Description 32', '2021-06-13', '2021-06-15', NULL, '2021-06-14 14:08:43'),
(43, 'This Is Title 33', 'This Is Excerpt 33', 'This is Description 33', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(44, 'This Is Title 34', 'This Is Excerpt 34', 'This is Description 34', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(45, 'This Is Title 35', 'This Is Excerpt 35', 'This is Description 35', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(46, 'This Is Title 36', 'This Is Excerpt 36', 'This is Description 36', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(47, 'This Is Title 37', 'This Is Excerpt 37', 'This is Description 37', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(48, 'This Is Title 38', 'This Is Excerpt 38', 'This is Description 38', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(49, 'This Is Title 39', 'This Is Excerpt 39', 'This is Description 39', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(50, 'This Is Title 40', 'This Is Excerpt 40', 'This is Description 40', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(51, 'This Is Title 41', 'This Is Excerpt 41', 'This is Description 41', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(52, 'This Is Title 42', 'This Is Excerpt 42', 'This is Description 42', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(53, 'This Is Title 43', 'This Is Excerpt 43', 'This is Description 43', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(54, 'This Is Title 44', 'This Is Excerpt 44', 'This is Description 44', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(55, 'This Is Title 45', 'This Is Excerpt 45', 'This is Description 45', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(56, 'This Is Title 46', 'This Is Excerpt 46', 'This is Description 46', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(57, 'This Is Title 47', 'This Is Excerpt 47', 'This is Description 47', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(58, 'This Is Title 48', 'This Is Excerpt 48', 'This is Description 48', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(59, 'This Is Title 49', 'This Is Excerpt 49', 'This is Description 49', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(60, 'This Is Title 50', 'This Is Excerpt 50', 'This is Description 50', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(61, 'This Is Title 51', 'This Is Excerpt 51', 'This is Description 51', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(62, 'This Is Title 52', 'This Is Excerpt 52', 'This is Description 52', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(63, 'This Is Title 53', 'This Is Excerpt 53', 'This is Description 53', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(64, 'This Is Title 54', 'This Is Excerpt 54', 'This is Description 54', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(65, 'This Is Title 55', 'This Is Excerpt 55', 'This is Description 55', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(66, 'This Is Title 56', 'This Is Excerpt 56', 'This is Description 56', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(67, 'This Is Title 57', 'This Is Excerpt 57', 'This is Description 57', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(68, 'This Is Title 58', 'This Is Excerpt 58', 'This is Description 58', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(69, 'This Is Title 59', 'This Is Excerpt 59', 'This is Description 59', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(70, 'This Is Title 60', 'This Is Excerpt 60', 'This is Description 60', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(71, 'This Is Title 61', 'This Is Excerpt 61', 'This is Description 61', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(72, 'This Is Title 62', 'This Is Excerpt 62', 'This is Description 62', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(73, 'This Is Title 63', 'This Is Excerpt 63', 'This is Description 63', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(74, 'This Is Title 64', 'This Is Excerpt 64', 'This is Description 64', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(75, 'This Is Title 65', 'This Is Excerpt 65', 'This is Description 65', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(76, 'This Is Title 66', 'This Is Excerpt 66', 'This is Description 66', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(77, 'This Is Title 67', 'This Is Excerpt 67', 'This is Description 67', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(78, 'This Is Title 68', 'This Is Excerpt 68', 'This is Description 68', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(79, 'This Is Title 69', 'This Is Excerpt 69', 'This is Description 69', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(80, 'This Is Title 70', 'This Is Excerpt 70', 'This is Description 70', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(81, 'This Is Title 71', 'This Is Excerpt 71', 'This is Description 71', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(82, 'This Is Title 72', 'This Is Excerpt 72', 'This is Description 72', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(83, 'This Is Title 73', 'This Is Excerpt 73', 'This is Description 73', '2021-06-16', '2021-06-14', NULL, '2021-06-14 13:23:49'),
(84, 'sadol', 'alskdj', 'aslkdj', '2021-12-31', '2021-12-31', NULL, '2021-06-14 14:15:38'),
(85, 'sakdj', 'kjsadl', 'laskdnalksn', '2021-12-31', '2021-12-31', NULL, '2021-06-14 14:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `event_attandance`
--

CREATE TABLE `event_attandance` (
  `id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `payment` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_attandance`
--

INSERT INTO `event_attandance` (`id`, `event_id`, `users_id`, `payment`, `created_at`) VALUES
(1, 8, 1, NULL, '2021-06-16 06:10:26'),
(2, 3, 1, NULL, '2021-06-16 07:37:24'),
(3, 7, 1, NULL, '2021-06-16 08:03:24'),
(4, 12, 1, NULL, '2021-06-16 08:03:46'),
(5, 21, 1, NULL, '2021-06-16 08:04:02'),
(6, 5, 1, NULL, '2021-06-16 08:05:31'),
(7, 6, 1, NULL, '2021-06-16 10:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `usia` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `sekolah` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `password`, `usia`, `alamat`, `sekolah`, `type`, `created_at`) VALUES
(1, 'lisameiliana', 'Lisa Mei Liana', 'FdTGLNxn9/WPrXwY', '21', 'depok', NULL, '', '2021-06-16 03:11:54'),
(2, 'enrichoalkalas', NULL, 'FdTGLNxn9/WPrXwY', NULL, NULL, NULL, 'admin', '2021-06-16 06:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `fullname`, `password`, `type`, `created_at`) VALUES
(2, 'enrichoalkalas', 'Enricho Alkalas', 'FdTGLNxn9/WPrXwY', 'admin', '2021-06-13 04:45:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `event_attandance`
--
ALTER TABLE `event_attandance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `event_attandance`
--
ALTER TABLE `event_attandance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `user_admin` (`id`);

--
-- Constraints for table `event_attandance`
--
ALTER TABLE `event_attandance`
  ADD CONSTRAINT `event_attandance_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  ADD CONSTRAINT `event_attandance_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
