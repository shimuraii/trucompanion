-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 13, 2023 at 03:28 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `People`
--
CREATE DATABASE IF NOT EXISTS `People` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `People`;

-- --------------------------------------------------------

--
-- Table structure for table `Schedule`
--

CREATE TABLE `Schedule` (
  `Email` varchar(32) NOT NULL,
  `Timeslot` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Schedule`
--

INSERT INTO `Schedule` (`Email`, `Timeslot`) VALUES
('0', 'SA10'),
('1', 'SA20'),
('', ''),
('gkangshim@gmail.com', 'M2'),
('gkangshim@gmail.com', 'TU3'),
('gkangshim@gmail.com', 'TU12'),
('gkangshim@gmail.com', 'TU17'),
('gkangshim@gmail.com', 'TH3'),
('gkangshim@gmail.com', 'TH6'),
('gkangshim@gmail.com', 'TH17'),
('gkangshim@gmail.com', 'TH23'),
('aaa@aaa.ca', 'W0'),
('aaa@aaa.ca', 'W4'),
('gkangshi2@gmail.com', 'TH1'),
('okayigotu@okay.ca', 'M2'),
('okayigotu@okay.ca', 'M11'),
('okayigotu@okay.ca', 'M12'),
('okayigotu@okay.ca', 'M16'),
('okayigotu@okay.ca', 'SA1'),
('okayigotu@okay.ca', 'SA2'),
('yabai@aaaa.ca', 'FR1');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`ID`, `Name`, `Email`, `Password`, `bio`) VALUES
(13, 'Gustavo Kang Shim', 'gkangshim@gmail.com', '123654', 'I like bananas'),
(25, 'Gustavo Kang Shim', 'aaa@aaa.ca', 'asdasd', 'sadasda'),
(27, 'Gustavo Kang Shim', 'gkangshi2@gmail.com', 'asdas', 'dasdsadasdasda'),
(34, 'Gustavo Kang Shim', 'josue@aaa.ca', 'asdas', 'dsadassa'),
(36, 'green', 'asdasdsad@aaa.caa', 'asdasd', 'asdasdsadsa'),
(38, 'asdasdasdas', 'dasdsadas@asdada.asdasdsadad', 'asdasdas', 'asdasdsa'),
(40, 'green', 'asdsadsa@asadasdsa.dsadsadas', 'dasdadsa', 'dasdsadsa'),
(42, 'yuka', 'y@yy.aa', 'csadsasa', 'dasdas'),
(44, 'asdsad', 'asdasdas@asdadas.sadsadsada', 'sdasdas', 'dasdsaasdsa'),
(46, 'clyde', 'c@a.cgo', 'asda', 'sdsa'),
(48, 'aaa', 'aaa@asdsadas.ca', 'aaas', 'daa'),
(50, 'asdasdas', 'dasdasdas@masodmosamdas.cascaas', 'dasdsadsa', 'sad'),
(55, 'asdasdas', 'josuesan@cma.ca', 'dsads', 'adsada'),
(61, 'Gustavo Kang Shim', 'einsap@asda.a', 'cs', 'cascsa'),
(62, 'Gustavo Kang Shim', 'idk@asad.ca', 'csads', 'acascsa'),
(65, 'asdasdasdas', 'idk@uhiasda.ca', 'csadad', 'asdas'),
(66, 'aaa', 'green@greener.ca', 'asdsad', 'asdsada'),
(69, 'okay i got you', 'okayigotu@okay.ca', 'asda', 'dsadsa'),
(71, 'oh no', 'yabai@aaaa.ca', 'sadas', 'dsadsa'),
(72, 'asdasdasd', 'asdasdsa@gmail.com', 'dasdsa', 'dasdsa'),
(75, 'gus', 'gusgsu@gusgus', 'gus', 'gasda'),
(76, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
