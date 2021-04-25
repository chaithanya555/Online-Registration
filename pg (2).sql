-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 21, 2021 at 11:33 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pg`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `reg` varchar(220) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  PRIMARY KEY (`reg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg`, `user_id`) VALUES
('3005470920', 'e9c068dac2ef5cae6f8b9b8ed539ed7f');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(255) NOT NULL,
  `name` varchar(55) NOT NULL,
  `fathername` varchar(55) NOT NULL,
  `mothername` varchar(55) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `birthstate` varchar(50) NOT NULL,
  `rationcard` varchar(50) NOT NULL,
  `special1` varchar(50) NOT NULL,
  `special2` varchar(50) NOT NULL,
  `special3` varchar(50) NOT NULL,
  `special4` varchar(50) NOT NULL,
  `ph1` varchar(50) NOT NULL,
  `ph2` varchar(50) NOT NULL,
  `ph3` varchar(50) NOT NULL,
  `lacalarea` varchar(50) NOT NULL,
  `minority` varchar(50) NOT NULL,
  `income` varchar(50) NOT NULL,
  `incomeno` varchar(20) NOT NULL,
  `name_bank` varchar(20) NOT NULL,
  `accno` varchar(15) NOT NULL,
  `ifsc` varchar(20) NOT NULL,
  `hno` varchar(10) NOT NULL,
  `village` varchar(50) NOT NULL,
  `mandal` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `amobile` varchar(50) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `email` varchar(60) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `speciald` varchar(100) NOT NULL,
  `hallticketd` varchar(15) NOT NULL,
  `yearofpass` year(4) NOT NULL,
  `medium` varchar(100) NOT NULL,
  `sscarea` varchar(100) NOT NULL,
  `sschall` int(10) NOT NULL,
  `sscmonth` varchar(20) NOT NULL,
  `sscyear` year(4) NOT NULL,
  `interarea` varchar(50) NOT NULL,
  `interhall` varchar(10) NOT NULL,
  `intermonth` varchar(20) NOT NULL,
  `interyear` year(4) NOT NULL,
  `sscplace` varchar(100) NOT NULL,
  `interplace` varchar(100) NOT NULL,
  `degreeplace` varchar(100) NOT NULL,
  `mscmcaplace` varchar(100) NOT NULL,
  `center1` varchar(100) NOT NULL,
  `center2` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `signature` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
