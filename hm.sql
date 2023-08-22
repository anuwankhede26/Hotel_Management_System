-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 09:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelmanagementaaaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bachelor`
--

CREATE TABLE `bachelor` (
  `SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bachelor`
--

INSERT INTO `bachelor` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `classic`
--

CREATE TABLE `classic` (
  `SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classic`
--

INSERT INTO `classic` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `delux`
--

CREATE TABLE `delux` (
  `SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delux`
--

INSERT INTO `delux` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `SNo` int(100) NOT NULL,
  `ID` varchar(100) NOT NULL,
  `Type` text NOT NULL,
  `NoGuest` varchar(100) NOT NULL,
  `Checkin` date NOT NULL,
  `InTime` time(6) NOT NULL,
  `OutTime` time NOT NULL,
  `username` text NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `City` text NOT NULL,
  `Total` varchar(25) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `luxury`
--

CREATE TABLE `luxury` (
  `SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luxury`
--

INSERT INTO `luxury` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `presidential`
--

CREATE TABLE `presidential` (
  `SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presidential`
--

INSERT INTO `presidential` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `SNo` int(30) NOT NULL,
  `ID` int(30) NOT NULL,
  `NoGuest` varchar(30) NOT NULL,
  `Checkin` date NOT NULL,
  `Checkout` date NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Total` int(30) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `PhoneNo` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `ID` int(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `superdelux`
--

CREATE TABLE `superdelux` (
  `SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superdelux`
--

INSERT INTO `superdelux` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '1', 0, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `superior`
--

CREATE TABLE `superior` (
  `SNo` int(100) NOT NULL,
  `Availability` varchar(100) NOT NULL,
  `ID` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superior`
--

INSERT INTO `superior` (`SNo`, `Availability`, `ID`, `Name`) VALUES
(1, '0', 4, ''),
(2, '1', 0, ''),
(3, '1', 0, ''),
(4, '1', 0, ''),
(5, '1', 0, ''),
(6, '1', 0, ''),
(7, '1', 0, ''),
(8, '1', 0, ''),
(9, '1', 0, ''),
(10, '1', 0, '');

--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
