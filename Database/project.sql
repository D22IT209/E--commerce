-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 07:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tableuser`
--

CREATE TABLE `tableuser` (
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableuser`
--

INSERT INTO `tableuser` (`email`, `password`) VALUES
('admin', 'admin123'),
('dhaval', 'dhaval@123');

-- --------------------------------------------------------

--
-- Table structure for table `tableuser1`
--

CREATE TABLE `tableuser1` (
  `id` int(50) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableuser1`
--

INSERT INTO `tableuser1` (`id`, `fullname`, `Email`, `username`, `password`) VALUES
(1, 'dhaval', 'dhavalpatil365@gmail.com', 'dhaval.patil_', ''),
(2, 'dhaval', 'dhavalpatil365@gmail.com', 'dhaval', ''),
(3, 'dhaval123', 'a@gmail.com', 'deep', ''),
(4, 'swyam23', 's@gmail.com', 'aniket', '123456'),
(5, 'admin123', 'admin@gmail.com', 'admin', '1234'),
(6, 'dhaval1234', 'dhavalpatil3654@gmail.com', 'dhavalpatil4', '4444'),
(7, 'admin1', 'admin', 'admin1', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tableuser1`
--
ALTER TABLE `tableuser1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tableuser1`
--
ALTER TABLE `tableuser1`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
