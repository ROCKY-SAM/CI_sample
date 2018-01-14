-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 04:37 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maiya`
--

-- --------------------------------------------------------

--
-- Table structure for table `pageone`
--

CREATE TABLE `pageone` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pageone`
--

INSERT INTO `pageone` (`id`, `name`, `type`, `filename`, `vehicle`, `gender`) VALUES
(16, 'asdfwerfewrferfgergertgertgertge', 'type3', '15241158_928998817233254_7591275936947968424_n.jpg', '', ''),
(17, 'asd', 'type1', '15241158_928998817233254_7591275936947968424_n.jpg', '', ''),
(18, 'gyguig', 'type3', 'Capture.PNG', '', ''),
(19, 'Nimal', 'type1', 'Config.pdf', '', ''),
(20, 'siyumi', 'type2', 'brain-512.png', '', ''),
(21, 'male', 'type2', '9d86ab26bc61bc94bf09d352edff07a1.png', '', ''),
(22, 'Nimal', 'type2', '9d86ab26bc61bc94bf09d352edff07a1.png', '', ''),
(23, 'ask;', 'type1', 'Screenshot (9).png', 'Bike', 'male'),
(24, 'sunimal', 'type3', '1.PNG', 'Car', 'female'),
(25, 'sdfsdd', 'type1', '5.PNG', 'Car', 'male'),
(26, 'Kamal', 'type1', '1.PNG', '', 'male'),
(27, 'sdfsdd', 'type2', '5.PNG', '', 'male'),
(28, 'sdfsdd', 'type2', '5.PNG', 'Car', 'male'),
(29, 'gyguig', 'type2', '5.PNG', 'Car', 'male'),
(30, 'Nimal', 'type1', '5.PNG', 'Bike,Car,', 'male'),
(31, 'Kamal', 'type1', '5.PNG', 'Van,', 'male'),
(32, 'gyguig', 'type2', '5.PNG', 'Bike,Car,', 'male'),
(33, 'Lakruwan', 'type1', '1.PNG', 'Bike,Car,Van,', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `number`) VALUES
(1, 'kasun', 12),
(2, 'nimal', 28),
(3, 'jagath', 67),
(4, 'manel', 98),
(5, 'Sunil', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Normal User');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `team` varchar(50) NOT NULL,
  `matchname` varchar(50) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `team`, `matchname`, `score`) VALUES
(1, 'TeamA', 'match1', 20),
(2, 'TeamA', 'match2', 50),
(3, 'TeamA', 'match3', 45),
(4, 'TeamA', 'match4', 87),
(5, 'TeamA', 'match5', 34),
(6, 'TeamB', 'match1', 45),
(7, 'TeamB', 'match7', 76),
(8, 'TeamB', 'match8', 42),
(9, 'TeamB', 'match9', 80),
(10, 'TeamB', 'match10', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pageone`
--
ALTER TABLE `pageone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pageone`
--
ALTER TABLE `pageone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
