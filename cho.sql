-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 04:50 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cho`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `ID` int(11) NOT NULL,
  `Counter` varchar(3) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`ID`, `Counter`, `Name`) VALUES
(1, 'C1', 'Medical'),
(2, 'C2', 'Dental'),
(3, 'C3', 'Pharmacy'),
(4, 'C4', 'Dog Bite');

-- --------------------------------------------------------

--
-- Table structure for table `counterserve`
--

CREATE TABLE `counterserve` (
  `Counter` varchar(2) NOT NULL,
  `Priority_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `counter_count`
--

CREATE TABLE `counter_count` (
  `ID` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Medical` int(2) NOT NULL,
  `Dental` int(2) NOT NULL,
  `Pharamacy` int(2) NOT NULL,
  `Animal_Bite` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter_count`
--

INSERT INTO `counter_count` (`ID`, `Date`, `Medical`, `Dental`, `Pharamacy`, `Animal_Bite`) VALUES
(1, '2019-02-20 13:26:38', 1, 2, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ID` int(11) NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Counter` varchar(30) NOT NULL,
  `Priority` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`ID`, `DateTime`, `Counter`, `Priority`) VALUES
(7, '2019-02-20 12:48:41', 'Medical', 6);

-- --------------------------------------------------------

--
-- Table structure for table `history_serve`
--

CREATE TABLE `history_serve` (
  `ID` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Counter` varchar(15) NOT NULL,
  `Serve` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_serve`
--

INSERT INTO `history_serve` (`ID`, `Time`, `Counter`, `Serve`) VALUES
(1, '2019-02-18 06:09:02', 'Dental', 1),
(2, '2019-02-18 06:09:41', 'Dental', 2),
(3, '2019-02-18 06:17:10', 'Dental', 3),
(4, '2019-02-20 02:59:51', 'Medical', 2),
(5, '2019-02-20 02:59:55', 'Medical', 3),
(6, '2019-02-20 03:05:28', 'Dental', 1),
(7, '2019-02-20 03:05:38', 'Dental', 2),
(8, '2019-02-20 03:06:14', 'Dental', 3),
(9, '2019-02-20 03:18:53', 'Dental', 4),
(10, '2019-02-20 09:18:34', 'Medical', 4),
(11, '2019-02-20 16:57:56', 'Medical', 1),
(12, '2019-02-20 16:58:06', 'Medical', 2),
(13, '2019-02-20 16:58:11', 'Medical', 3),
(14, '2019-02-20 16:58:29', 'Medical', 4);

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

CREATE TABLE `queue` (
  `ID` int(3) NOT NULL,
  `Counter` varchar(3) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Serving` int(3) NOT NULL,
  `Priority` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queue`
--

INSERT INTO `queue` (`ID`, `Counter`, `Name`, `Serving`, `Priority`) VALUES
(1, 'C1', 'Medical', 4, 6),
(2, 'C2', 'Dental', 1, 3),
(3, 'C3', 'Pharmacy', 2, 3),
(4, 'C4', 'Animal Bite', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `queuemonitor`
--

CREATE TABLE `queuemonitor` (
  `ID` int(3) NOT NULL,
  `Counter` varchar(2) NOT NULL,
  `Number` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queuemonitor`
--

INSERT INTO `queuemonitor` (`ID`, `Counter`, `Number`) VALUES
(1, 'C2', 1),
(9, 'C1', 5),
(10, 'C3', 3),
(11, 'C4', 3),
(12, 'C4', 4),
(13, 'C2', 5),
(14, 'C1', 3),
(15, 'C1', 1),
(16, 'C1', 0),
(17, 'C1', 3),
(18, 'C3', 8),
(19, 'C2', 4),
(20, 'C1', 2),
(21, 'C1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `queuenumber`
--

CREATE TABLE `queuenumber` (
  `ID` int(4) NOT NULL,
  `Number` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queuenumber`
--

INSERT INTO `queuenumber` (`ID`, `Number`) VALUES
(1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `counter_count`
--
ALTER TABLE `counter_count`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `history_serve`
--
ALTER TABLE `history_serve`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `queuemonitor`
--
ALTER TABLE `queuemonitor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `queuenumber`
--
ALTER TABLE `queuenumber`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `counter_count`
--
ALTER TABLE `counter_count`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `history_serve`
--
ALTER TABLE `history_serve`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `queue`
--
ALTER TABLE `queue`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `queuemonitor`
--
ALTER TABLE `queuemonitor`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `queuenumber`
--
ALTER TABLE `queuenumber`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
