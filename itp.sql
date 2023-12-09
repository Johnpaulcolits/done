-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 03:36 PM
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
-- Database: `itp`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course`) VALUES
(1, 'BSIT'),
(3, 'BSM'),
(5, 'BSCE'),
(6, 'BITM'),
(7, 'BPED'),
(9, 'BSIT'),
(10, '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `middlename` varchar(40) NOT NULL,
  `dbirth` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `institute` varchar(40) NOT NULL,
  `course` varchar(40) NOT NULL,
  `number` varchar(40) NOT NULL,
  `usertype` varchar(40) NOT NULL DEFAULT 'faculty',
  `subject` varchar(40) NOT NULL,
  `student` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `lastname`, `firstname`, `middlename`, `dbirth`, `gender`, `institute`, `course`, `number`, `usertype`, `subject`, `student`) VALUES
('2021-1560', 'pil', 'vin', 'haha', '2023-11-06', 'Male', 'FCDSET', 'BSIT', '093Y4R838U4Y89', 'faculty', 'Yellow ohhhhhhhh', '0988-8888Castillioewrf'),
('2022-0002', 'blanco', 'jaycel', 'N/A', '2023-11-18', 'Female', 'FCDSET', 'BSIT', '09tutunog-tunog', 'faculty', 'IPT asdfghjkl', '0988-8888Castillioewrf'),
('2023-2021', 'Enderio', 'Jessabyl', 'N/A', '2023-11-16', 'Female', 'FCDSET', 'BSCE', '09F788788', 'faculty', 'IPT-12345 Ahmmmmmmmm', '');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `course` varchar(40) NOT NULL,
  `section` varchar(40) NOT NULL,
  `year` varchar(40) NOT NULL,
  `code` varchar(40) NOT NULL,
  `description` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  `grade` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `name`, `course`, `section`, `year`, `code`, `description`, `time`, `grade`) VALUES
('2021-0001', 'Zen Rae Candia', 'BSIT', 'SECTION A', '3rd Year', 'ITP', 'Agains The World', '21:43', '2.75');

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` int(11) NOT NULL,
  `institute` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `institute`) VALUES
(1, 'FCDSET');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `usertype` varchar(40) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', 'admin01', 'admin'),
(2, 'enderio', 'admin0123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE `school_year` (
  `id` int(11) NOT NULL,
  `year` varchar(40) DEFAULT NULL,
  `semester` enum('1st','2nd','summer') DEFAULT NULL,
  `status` enum('inactive','active') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`id`, `year`, `semester`, `status`) VALUES
(1, '2021-2022', '2nd', 'inactive'),
(4, '2021-2022', '1st', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(40) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `dbirth` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `gname` varchar(50) NOT NULL,
  `gnumber` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `middlename`, `dbirth`, `gender`, `province`, `municipality`, `barangay`, `zipcode`, `number`, `institute`, `course`, `gname`, `gnumber`, `address`) VALUES
('0988-8888', 'ewrf', 'Castillio', 'N/A', '2023-11-16', 'Female', 'Prk. Kurigsaw, Poblacion, Maragusan, Davao de Oro', 'mati', 'dahican', '8808', '09F788788', 'FCDSET', 'BSIT', 'mama', 'psps', 'smbot'),
('2021-0001', 'Zen', 'Candia', 'mikazi', '2003-09-09', 'Male', 'Davao Oriental', 'Mati', 'Balite', '5660', '0933333333', 'FCDSET', 'BSIT', 'papa', '0977777777', 'diha'),
('2021-2022', 'Ella Mae', 'Torrejos', 'N/A', '2023-11-07', 'Male', 'f;asmfa', 'Mati', 'MATIAO', 'fmaflam', 'f;asmfa', 'FCDSET', 'BSIT', '09123456', ';gmd;gm', 'f;asmfa');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `code` varchar(40) NOT NULL,
  `description` varchar(40) NOT NULL,
  `unit` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `course` varchar(40) NOT NULL,
  `institute` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`code`, `description`, `unit`, `type`, `course`, `institute`) VALUES
('IPT-12345', 'Ahmmmmmmmm', '', '', 'BSIT', 'FCDSET'),
('Yellow', 'ohhhhhhhh', '3', 'lab', 'BSIT', 'FCDSET');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(2, 'user1', 'user0123', 'jabyescudero@gmail.com'),
(3, 'user2', 'user01', 'Lyxferrel@gmail.com'),
(4, 'Lyxferrel@gmail.com', '123', 'Lyxferrel@gmail.com'),
(5, 'Jessica', '123', 'lyxferrel@gmail.com'),
(6, 'rachelle', '1234567898', 'rachelle@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
