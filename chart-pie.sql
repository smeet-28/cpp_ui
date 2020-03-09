-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 05:41 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chart-pie`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(9, 'SPM IA Tomorrow', '2020-03-03 10:15:13', '0000-00-00 00:00:00'),
(10, 'SPM IA Tomorrow', '2020-03-03 00:00:00', '2020-03-04 00:00:00'),
(11, 'hey', '2020-03-05 00:00:00', '2020-03-06 00:00:00'),
(12, 'JAL', '2020-03-06 00:00:00', '2020-03-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fyp`
--

CREATE TABLE `fyp` (
  `id` int(11) NOT NULL,
  `Month` varchar(255) NOT NULL,
  `Student` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fyp`
--

INSERT INTO `fyp` (`id`, `Month`, `Student`) VALUES
(1, 'Jan', '34'),
(2, 'Feb', '47'),
(3, 'Mar', '23'),
(4, 'April', '46'),
(5, 'May', '58'),
(6, 'Jun', '69'),
(7, 'Jul', '87'),
(8, 'Aug', '47'),
(9, 'Sept', '55'),
(10, 'Oct', '41'),
(11, 'Nov', '57'),
(12, 'Dec', '72');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(30) NOT NULL,
  `total_number` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `branch_name`, `total_number`, `year`) VALUES
(1, 'IT', 30, 2019),
(2, 'COMPS', 45, 2019),
(3, 'EXTC', 15, 2019),
(4, 'ETRX', 20, 2019),
(5, 'MECH', 10, 2019),
(6, 'IT', 30, 2018),
(7, 'COMPS', 35, 2018),
(8, 'EXTC', 10, 2018),
(9, 'ETRX', 41, 2018),
(10, 'MECH', 18, 2018),
(11, 'IT', 79, 2017),
(12, 'COMPS', 69, 2017),
(13, 'EXTC', 75, 2017),
(14, 'ETRX', 55, 2017),
(15, 'MECH', 66, 2017);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fyp`
--
ALTER TABLE `fyp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fyp`
--
ALTER TABLE `fyp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=556;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
