-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 07:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeit`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `sno` int(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `email` varchar(500) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `cpass` varchar(60) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`sno`, `fname`, `lname`, `mobile`, `email`, `pass`, `cpass`, `dt`) VALUES
(2, 'a', 'a', 'a', 'a', 'a', 'a', '2020-11-08 18:17:08'),
(3, 's', 's', 's', 's', '$2y$10$5iR1tclPpvIt52Mdcvpu/eHka3QeOmZi7eVk9F2UexTExgW9AlY1a', '$2y$10$fxGAjRg5JEKu9y3GXVyAYOAo/hSMgryiqWGkcbaSU18YtfdH1dLuy', '2020-11-16 10:26:15'),
(4, '', '', '', '', '$2y$10$UxYB4bqYvFUXx6v82wt0HO/Cutfs0BfYxU8DgqvPvab59SyTZf0VG', '$2y$10$1ApTjydHVHu7tMwE15uSbe.ZZPRbOzliiob9j2uVRBd5/3xfRlzpW', '2020-11-16 11:27:51'),
(5, 'aniket', 'kumar', '9204613799', 'rajeshwar9204@gmail.com', '$2y$10$pwEnWDkMGEcLbQeqmBMLaeC0RLWoDmzP8Rt6vnnhVYfwD.pwszUae', '$2y$10$ac4sz1ZAq6CSz3apsDInZuvTgskRPuyQWY/92K6epTMwlpevCSIzi', '2020-11-16 11:29:32'),
(6, 'rajeshwar', 'kumar', '9204613799', 'rajeshwarkumar9204@gmail.com', '$2y$10$6tkxEYv1vMKLgJ4c6NLqKupOnQHzvHr78ZtwNMwuiGOo3Y9MU7..K', '$2y$10$VUxqmCrrGbgfUiUY5HhAfu5OL6T9o8QrZd1bmIYPhJi8QLWNdiW26', '2020-11-16 11:34:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
