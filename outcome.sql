-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 11:04 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outcome`
--

-- --------------------------------------------------------

--
-- Table structure for table `outcome_records`
--

CREATE TABLE `outcome_records` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `telephone` int(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `suscript` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outcome_records`
--

INSERT INTO `outcome_records` (`id`, `fname`, `lname`, `uname`, `telephone`, `email_id`, `gender`, `hobbies`, `images`, `suscript`, `Password`) VALUES
(17, 'Naman', 'kumar', 'Naman kumar', 123456789, 'naman@gmail.com', 'Female', 'Array', '', 'YES', '456'),
(18, 'Harinder', 'kumar', 'Harinder kumar', 1234567891, 'harinder@gmail.com', 'Male', 'Football,Badminton,', '', 'YES', '123'),
(23, 'Manish', 'kumar', 'Manish kumar', 1234567891, 'manish@gmail.com', 'Male', 'Football,Hockey,Badminton,', 'pari-3.jpg', 'YES', ''),
(24, 'Parveen', 'kumar', 'Parveen kumar', 1234567892, 'parveen@gmail.com', 'Male', 'Football,Hockey,', 'Brad Pitt (5).jpg', 'YES', '231'),
(25, 'svcdcv', 'sdhchd', 'pqr', 2147483647, 'sdfvh@gmail.com', 'Male', 'Badminton,Tennis,', 'pic.jpg', 'YES', '912'),
(26, 'sdhggfhdg', 'sdncvsd', 'Np', 1234567893, 'dgh@546454', 'Male', 'Badminton,Tennis,', 'pic.jpg', 'YES', '59b90e1005a220e2ebc542eb9d950b1e'),
(27, 'svch', 'scadhg', 'Abhinash kumar', 1234567892, 'abhinash@gmail.com', 'Male', 'Football,Hockey,Badminton,', 'picture.jpg', 'YES', '6aab1270668d8cac7cef2566a1c5f569');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `outcome_records`
--
ALTER TABLE `outcome_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `outcome_records`
--
ALTER TABLE `outcome_records`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
