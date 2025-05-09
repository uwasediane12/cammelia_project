-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2025 at 04:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camellia`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidatesresult`
--

CREATE TABLE `candidatesresult` (
  `national_id` int(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dateof_birth` date NOT NULL,
  `PostId` int(50) NOT NULL,
  `exam_date` date NOT NULL,
  `p_number` int(10) NOT NULL,
  `marks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidatesresult`
--

INSERT INTO `candidatesresult` (`national_id`, `f_name`, `l_name`, `gender`, `dateof_birth`, `PostId`, `exam_date`, `p_number`, `marks`) VALUES
(123456767, 'GASHEMA', 'francois', 'male', '2025-05-15', 9, '2025-05-17', 23456789, 90),
(12345678, 'NIYITEGEKA', 'mourcie', 'male', '2025-05-30', 10, '2025-05-28', 234567890, 85),
(2147483647, 'TUYISHIME', 'esther', 'female', '2025-05-21', 9, '2025-05-28', 786565765, 80),
(12345678, 'NIYITEGEKA', 'mourcie', 'male', '2025-05-30', 10, '2025-05-28', 234567890, 85),
(234563456, 'UWAYISENGA', 'chartine', 'female', '2025-05-21', 15, '2025-05-28', 2147483647, 63),
(11234567, 'MUTESI', 'aline', 'female', '2025-05-12', 11, '2025-05-28', 78345678, 26),
(123456, 'ISHIMWE', 'Dative', 'female', '2025-05-20', 3, '2025-05-19', 785645673, 32),
(12345678, 'NIYITEGEKA', 'mourcie', 'male', '2025-05-30', 10, '2025-05-28', 234567890, 85);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PostId` int(50) NOT NULL,
  `PostName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PostId`, `PostName`) VALUES
(3, 'Technian'),
(9, 'Secretary'),
(10, 'Technicia'),
(11, 'Teacher'),
(15, 'invental managereee');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(50) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserName`, `Password`) VALUES
(2, 'uwase', 'christia'),
(4, 'niyonsaba', 'dative'),
(6, 'kelia', '12345'),
(10, 'musengamana', 'christia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidatesresult`
--
ALTER TABLE `candidatesresult`
  ADD KEY `PostId` (`PostId`),
  ADD KEY `PostId_2` (`PostId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PostId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidatesresult`
--
ALTER TABLE `candidatesresult`
  ADD CONSTRAINT `candidatesresult_ibfk_1` FOREIGN KEY (`PostId`) REFERENCES `post` (`PostId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
