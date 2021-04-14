-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 12:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `annual_leave`
--

DROP TABLE IF EXISTS `annual_leave`;
CREATE TABLE `annual_leave` (
  `formID` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reasoning` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `annual_leave`
--

INSERT INTO `annual_leave` (`formID`, `start_date`, `end_date`, `reasoning`, `userID`, `status`) VALUES
(1, '2021-04-12', '2021-04-13', 'covid vaccination', 1, 'pending'),
(2, '2021-04-19', '2021-05-24', 'vacation', 1, 'pending'),
(7, '2021-05-17', '2021-05-17', 'feeling unwell', 1, 'pending'),
(8, '2021-05-17', '2021-05-17', 'feeling unwell', 2, 'approved'),
(9, '2021-05-17', '2021-05-17', 'feeling unwell', 3, 'pending'),
(10, '2021-04-14', '2021-04-14', 'quarantining', 1, 'pending'),
(11, '2021-04-23', '2021-04-23', 'tired', 1, 'pending'),
(12, '2021-04-29', '2021-04-29', 'vaccination appointment', 2, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `taskID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `DueDate` date NOT NULL,
  `Description` varchar(255) NOT NULL,
  `ManagerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`taskID`, `Title`, `DueDate`, `Description`, `ManagerID`) VALUES
(1, 'SE project', '2021-04-15', 'Complete web application for E-Space', 2),
(2, 'Finish design', '2021-04-30', 'Create use case diagrams, sequence diagrams, state diagrams and class diagrams for the project.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `IsEmployed` tinyint(1) NOT NULL DEFAULT 0,
  `Email` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL,
  `PostCode` varchar(255) NOT NULL,
  `Telephone` varchar(16) NOT NULL,
  `ManagerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `FirstName`, `LastName`, `UserName`, `Password`, `IsEmployed`, `Email`, `DOB`, `Address1`, `Address2`, `PostCode`, `Telephone`, `ManagerID`) VALUES
(1, 'Mr', 'Admin', 'admin', '$2y$10$xy18JealqGNf0iryUgmAse4F1X.EkRG7DSbz97XLxly0Dn6MfmnN.', 1, 'admin@fdm.co.uk', '2001-06-21', '21 something street', 'London', 'E1 111', '771234567', 2),
(2, 'Joo', 'Caliao', 'juliuscaliao', '$2y$10$Vx77TIHAWY8DmXLFjSinU.RnMDWH/K.RnkWffNBBYZk2VYnPNpSEe', 1, 'jcaliao098@gmail.com', '2000-10-10', 'My House', 'London', 'E2 222', '1231231233', 2),
(3, 'Jackson', 'Wang', 'jwang', '$2y$10$aBM4BSaTZ5moFsdd0Tdzr.zt7RBbzWoTVJ9i3/pY4sMbTtD5r35ly', 0, 'example123@gmail.com', '1994-03-28', 'My house', 'Seoul', 'E3 333', '82123985638', 2),
(4, 'John', 'Wick', 'johnwick123', '$2y$10$L4klCCjvnWAwqM5k9T4qY.vpCjQIQDlbGAwADyKtHNVrXEb65NeCK', 0, 'keanureeves@example.co.uk', '1964-09-02', 'Flat', 'Beirut', 'E4 444', '6381233911', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annual_leave`
--
ALTER TABLE `annual_leave`
  ADD PRIMARY KEY (`formID`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`taskID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annual_leave`
--
ALTER TABLE `annual_leave`
  MODIFY `formID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `taskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
