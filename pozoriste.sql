-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 08:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pozoriste`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatar`
--

CREATE TABLE `avatar` (
  `avatarID` int(8) NOT NULL,
  `avatarName` varchar(16) NOT NULL,
  `description` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `avatar`
--

INSERT INTO `avatar` (`avatarID`, `avatarName`, `description`) VALUES
(1, 'Fjodor', 'Lorem Ipsum mistican'),
(2, 'David', 'Lorem Ipsum osoben'),
(3, 'Katrin', 'Lorem Ipsum senzualna'),
(4, 'Ricard', 'Lorem Ipsum dinamican');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(8) NOT NULL,
  `username` varchar(16) CHARACTER SET utf16 NOT NULL,
  `email` varchar(32) CHARACTER SET utf16 NOT NULL,
  `password` varchar(64) CHARACTER SET utf16 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `username`, `email`, `password`) VALUES
(1, 'Masha', 'masha.neshkovic@gmail.com', 'topsek123');

-- --------------------------------------------------------

--
-- Table structure for table `showth`
--

CREATE TABLE `showth` (
  `showID` int(8) NOT NULL,
  `showName` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(32) NOT NULL,
  `IDAvatar` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showth`
--

INSERT INTO `showth` (`showID`, `showName`, `description`, `author`, `IDAvatar`) VALUES
(1, 'Kameno Jezero', 'Lorem ipsum drama', 'Zeljko Obrenovic', 1),
(2, 'Konji Svetog Marka', 'Lorem ipsum istorijski', 'Milorad Pavic', 1),
(3, 'Devojka koja je citala u metrou', 'Lorem ipsum tragedija', 'Kristin Fere-Fleri', 2),
(4, 'Uska staza ka dalekom severu', 'Lorem ipsum avantura', 'Ricard Flaragen', 2),
(5, 'Ljubav na zadnji pogled', 'Lorem issum komedija', 'Vedrana Rudan', 3),
(6, 'U zagrljaju purpurnih kisa', 'Lorem ipsum triler', 'Marjana Rajic', 3),
(38, 'Edip', 'Antika', 'Sofokle', 4),
(39, 'Provera', 'Provera', 'Provera', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`avatarID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showth`
--
ALTER TABLE `showth`
  ADD PRIMARY KEY (`showID`),
  ADD KEY `Show_Avatar` (`IDAvatar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avatar`
--
ALTER TABLE `avatar`
  MODIFY `avatarID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `showth`
--
ALTER TABLE `showth`
  MODIFY `showID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `showth`
--
ALTER TABLE `showth`
  ADD CONSTRAINT `Show_Avatar` FOREIGN KEY (`IDAvatar`) REFERENCES `avatar` (`avatarID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
