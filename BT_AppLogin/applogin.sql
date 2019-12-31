-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2019 at 08:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `applogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_nopad_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `create_at`) VALUES
(1, 'phong', '123', '0000-00-00 00:00:00'),
(2, 'phong', '123', '0000-00-00 00:00:00'),
(3, 'tung', '123', '0000-00-00 00:00:00'),
(4, 'dfs', 'áda', '0000-00-00 00:00:00'),
(5, 'dfs', 'áda', '0000-00-00 00:00:00'),
(6, 'hihii', 'baba', '0000-00-00 00:00:00'),
(7, 'phongkeo', '123', '2019-12-31 17:59:06'),
(8, '123', '123', '2019-12-31 17:59:13'),
(9, 'adas', 'asd', '2019-12-31 17:59:41'),
(10, 'aaa', 'aaa', '2019-12-31 18:01:52'),
(11, 'aaa', 'aaa', '2019-12-31 18:04:19'),
(12, 'webgoat', 'aa', '2019-12-31 18:04:28'),
(13, 'admin', '123', '2019-12-31 18:06:45'),
(14, 'admin', '123', '2019-12-31 18:26:01'),
(15, 'admin', '123', '2019-12-31 18:30:25'),
(16, 'phongkeo123', '1', '2019-12-31 19:19:48'),
(17, 'abc', '123', '2019-12-31 19:23:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
