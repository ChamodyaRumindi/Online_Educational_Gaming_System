-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 10:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oeg_play`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `firstName` char(128) NOT NULL,
  `lastName` char(128) NOT NULL,
  `a_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `firstName`, `lastName`, `a_password`) VALUES
(2, 'pasindulakshan', 'Pasindu', 'Lakshan', '4abeccbafe94c737a66d81103ae01bfcabfcab77b71c05fac3a3e3b357de450e'),
(4, 'pasindux', 'Pasindu', 'Lakshan(A)', '$2y$10$1TyN5h8wMoQKKyZYxcGcD.V.20wObOy4PuiksfRIkN.smF96f9o/e');

-- --------------------------------------------------------

--
-- Table structure for table `administrator_email`
--

CREATE TABLE `administrator_email` (
  `adminID` int(11) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CID` int(11) NOT NULL,
  `categoryName` varchar(128) NOT NULL,
  `categoryDescription` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CID`, `categoryName`, `categoryDescription`) VALUES
(1, 'Quiz', 'Quiz games'),
(2, 'Puzzle', 'Puzzle games');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `name` char(128) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `c_datetime` datetime NOT NULL,
  `adminID` int(11) NOT NULL,
  `view_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE `developer` (
  `devID` int(11) NOT NULL,
  `firstName` char(128) NOT NULL,
  `lastName` char(128) NOT NULL,
  `devDescription` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`devID`, `firstName`, `lastName`, `devDescription`) VALUES
(1, 'Pasindu', 'Lakshan', 'Game Developer');

-- --------------------------------------------------------

--
-- Table structure for table `developer_email`
--

CREATE TABLE `developer_email` (
  `devID` int(11) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `gameID` int(11) NOT NULL,
  `gameName` varchar(128) NOT NULL,
  `gameGrade` varchar(128) NOT NULL,
  `gameCategory` varchar(128) NOT NULL,
  `gameSubject` varchar(128) NOT NULL,
  `gameDescription` varchar(1000) DEFAULT NULL,
  `gameInstructions` varchar(1000) DEFAULT NULL,
  `gameAccess` char(10) NOT NULL,
  `adminID` int(11) NOT NULL,
  `devID` int(11) NOT NULL,
  `gFile` varchar(256) DEFAULT NULL,
  `gThumbnail` varchar(256) DEFAULT NULL,
  `added_date` date NOT NULL,
  `last_modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`gameID`, `gameName`, `gameGrade`, `gameCategory`, `gameSubject`, `gameDescription`, `gameInstructions`, `gameAccess`, `adminID`, `devID`, `gFile`, `gThumbnail`, `added_date`, `last_modified_date`) VALUES
(29, 'Bingo Additions', 'Grade 3', 'Quiz', 'English', 'test', 'test', 'Free', 2, 1, NULL, NULL, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `GID` int(11) NOT NULL,
  `gradeName` varchar(128) NOT NULL,
  `gradeDescription` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`GID`, `gradeName`, `gradeDescription`) VALUES
(1, 'Preschool', 'Games for Preschool kids'),
(2, 'Grade 1', 'Games for grade 1 students'),
(3, 'Grade 2', 'Games for grade 2 students'),
(4, 'Grade 3', 'Games for grade 3 students'),
(5, 'Grade 4', 'Games for grade 4 students'),
(6, 'Grade 5', 'Games for grade 5 students'),
(7, 'Grade 6', 'Games for grade 6 students'),
(8, 'Grade 7', 'Games for grade 7 students'),
(9, 'Grade 8', 'Games for grade 8 students'),
(10, 'Grade 9', 'Games for grade 9 students');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `HID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `gameID` int(11) NOT NULL,
  `h_datetime` datetime NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberID` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `firstName` char(128) NOT NULL,
  `lastName` char(128) NOT NULL,
  `m_password` varchar(256) NOT NULL,
  `m_rank` char(20) NOT NULL DEFAULT 'No Rank',
  `TID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberID`, `username`, `firstName`, `lastName`, `m_password`, `m_rank`, `TID`) VALUES
(3, 'Akila123', 'Akila', 'Liyanage', '91a355d44ca5b322ab6bab66e44bd09c844b9360d75e712b6ed7a7604f7b0413', 'Gold', 2),
(4, 'Rusiru99', 'Supun', 'Rusiru', 'c8e7e692b396df498b9d6502dada2f8af701570bec5b9adc7a5140ce14bde874', 'Silver', 1),
(5, 'PramithaWeerasinghe', 'Pramitha', 'Weerasinghe', '48c560a991887fc1509c0d212ae48bd4b5a4ccfcebeb0616e1863257641b9577', 'No Rank', 1),
(6, 'ThusharaX', 'Thushara', 'Thiwanka', '7ae604db5636d934c69e00a0b1e28b430f1879d43fc8155fc2bfe2e6207d7cb5', 'Platinum', 1),
(7, 'GaweenKanishka97', 'Gaween', 'Kanishka', 'ea1aca65ee8ad1f8b5a97cbb0a556dfffefa8f460f8b7f4b2944324a3feac862', 'Legend', 1),
(28, 'PasinduX', 'Pasindu', 'Lakshan', '$2y$10$u1FpoqVNKzAT8q5AIGNjjOxZCrMnZC4KvcubQFpPbgAvs7BfBK0A2', 'No Rank', 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `MID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `m_plan` varchar(20) NOT NULL,
  `m_status` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `renewal_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`MID`, `memberID`, `m_plan`, `m_status`, `start_date`, `renewal_date`) VALUES
(2, 3, ' ', ' ', '2021-02-16', '0000-00-00'),
(3, 4, 'Monthly', 'Active', '2021-02-16', '2021-05-16'),
(4, 5, 'Annual', 'Active', '2021-03-21', '2022-03-21'),
(5, 6, 'Monthly', 'Active', '2021-04-11', '2021-06-11'),
(6, 7, 'Monthly', 'Active', '2021-03-18', '2021-06-18'),
(9, 28, '', '', '2021-05-21', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `member_email`
--

CREATE TABLE `member_email` (
  `memberID` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `emailType` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_email`
--

INSERT INTO `member_email` (`memberID`, `email`, `emailType`) VALUES
(3, 'akilaimalsha@gmail.com', ''),
(4, 'supunrusiru@gmail.com', ''),
(5, 'pramitha99@gmail.com', ''),
(6, 'thusharax@gmail.com', ''),
(7, 'gaweenkanishka98@gmail.com', ''),
(28, 'dkp9912@gmail.com', 'Primary');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `p_datetime` datetime NOT NULL,
  `amount` float NOT NULL,
  `p_description` varchar(128) DEFAULT NULL,
  `MID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `RID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `gameID` int(11) NOT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `submit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SID` int(11) NOT NULL,
  `subjectName` varchar(128) NOT NULL,
  `subjectDescription` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SID`, `subjectName`, `subjectDescription`) VALUES
(1, 'English', 'Learn English while playing games'),
(2, 'Mathematics', 'Our online math games are designed to provide kids with multiple opportunities to understand the power and beauty of math.'),
(3, 'Science', 'Learn Science while playing these awesome games'),
(4, 'History', 'Learn History while playing games'),
(5, 'Environment', 'Learn Environment while playing games.');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `TID` int(11) NOT NULL,
  `mType` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`TID`, `mType`, `price`, `description`) VALUES
(1, 'Premium', 9.99, 'Premium Membership'),
(2, 'Free', 0, 'Free Membership'),
(3, 'Premium', 9.99, 'Premium Membership'),
(4, 'Free', 0, 'Free Membership');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `administrator_email`
--
ALTER TABLE `administrator_email`
  ADD PRIMARY KEY (`adminID`,`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactID`,`memberID`),
  ADD KEY `FK_Contact1` (`memberID`),
  ADD KEY `FK_Contact2` (`adminID`);

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`devID`);

--
-- Indexes for table `developer_email`
--
ALTER TABLE `developer_email`
  ADD PRIMARY KEY (`devID`,`email`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`gameID`),
  ADD KEY `FK_Game1` (`adminID`),
  ADD KEY `FK_Game2` (`devID`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`GID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`HID`),
  ADD KEY `FK_History1` (`memberID`),
  ADD KEY `FK_History2` (`gameID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberID`),
  ADD KEY `FK_Member` (`TID`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`MID`),
  ADD KEY `FK_Membership1` (`memberID`);

--
-- Indexes for table `member_email`
--
ALTER TABLE `member_email`
  ADD PRIMARY KEY (`memberID`,`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `FK_Payment1` (`memberID`),
  ADD KEY `FK_Payment2` (`MID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`RID`,`memberID`),
  ADD KEY `FK_Review1` (`memberID`),
  ADD KEY `FK_Review2` (`gameID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`TID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `developer`
--
ALTER TABLE `developer`
  MODIFY `devID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `gameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `GID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `HID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrator_email`
--
ALTER TABLE `administrator_email`
  ADD CONSTRAINT `FK_AdministratorEmail` FOREIGN KEY (`adminID`) REFERENCES `admin` (`adminID`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `FK_Contact1` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`),
  ADD CONSTRAINT `FK_Contact2` FOREIGN KEY (`adminID`) REFERENCES `admin` (`adminID`);

--
-- Constraints for table `developer_email`
--
ALTER TABLE `developer_email`
  ADD CONSTRAINT `FK_DeveloperEmail` FOREIGN KEY (`devID`) REFERENCES `developer` (`devID`);

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `FK_Game1` FOREIGN KEY (`adminID`) REFERENCES `admin` (`adminID`),
  ADD CONSTRAINT `FK_Game2` FOREIGN KEY (`devID`) REFERENCES `developer` (`devID`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `FK_History1` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`),
  ADD CONSTRAINT `FK_History2` FOREIGN KEY (`gameID`) REFERENCES `game` (`gameID`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `FK_Member` FOREIGN KEY (`TID`) REFERENCES `type` (`TID`);

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `FK_Membership1` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`) ON DELETE CASCADE;

--
-- Constraints for table `member_email`
--
ALTER TABLE `member_email`
  ADD CONSTRAINT `FK_MemberEmail` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`) ON DELETE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FK_Payment1` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`),
  ADD CONSTRAINT `FK_Payment2` FOREIGN KEY (`MID`) REFERENCES `membership` (`MID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_Review1` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`),
  ADD CONSTRAINT `FK_Review2` FOREIGN KEY (`gameID`) REFERENCES `game` (`gameID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;