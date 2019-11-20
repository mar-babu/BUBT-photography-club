-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 10:02 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bubtpc`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo_data`
--

CREATE TABLE `photo_data` (
  `id` int(11) NOT NULL,
  `photo_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `photographer` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_data`
--

INSERT INTO `photo_data` (`id`, `photo_name`, `image`, `photographer`, `type`) VALUES
(5, 'Underwater', 'uploads/0aef69f114.jpg', '', NULL),
(8, '2019', 'uploads/bf2e89a6fc.jpg', '', 'Sun'),
(9, 'Kashful', 'uploads/3f334637b5.jpg', '', 'nature'),
(10, 'Bridge', 'uploads/23fc52b306.jpg', '', 'Bridge'),
(11, 'Butterfly', 'uploads/0fe3b97bb1.jpg', '', 'Macro'),
(12, 'Kakveja bristy', 'uploads/1963d7c332.jpg', '', 'Meaningfull'),
(13, 'Bird', 'uploads/abcb7fd692.jpg', '', 'Bird'),
(14, 'Bird', 'uploads/25bfcca851.jpg', '', 'Bird'),
(15, 'Fanus', 'uploads/1a7cb5d114.jpg', '', 'Fanus'),
(16, 'Smile', 'uploads/ba6267d569.jpg', '', 'Smile');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `s_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(11) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `intake` int(20) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `profile_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`s_id`, `username`, `email`, `password`, `dob`, `contact`, `intake`, `dept`, `profile_link`) VALUES
(3, 'Syed Abbas', 'syedabbas@gmail.com', '25874', '1987-01-28', '01587456213', 8, 'L.L.B', 'https://www.facebook.com/ab143'),
(4, 'Tushar Roy', 'tushar@ymail.com', '1458', '1993-01-08', '01872587469', 19, 'CSE', 'https://www.facebook.com/tushar.roy.cse'),
(5, 'Hridoy', 'hridoy@yahoo.com', '1458', '1996-01-28', '01587245967', 22, 'EEE', 'fb.com/hridoy'),
(6, 'Sakib', 'sakib@gmail.com', '58964', '1995-01-28', '01958745632', 38, 'CSE', 'fb.com/sakib'),
(7, 'Rakib', 'Rakib@gmail.com', '745899', '1998-04-17', '01958745874', 38, 'HRM', 'fb.com/rakib');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photo_data`
--
ALTER TABLE `photo_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photo_data`
--
ALTER TABLE `photo_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
