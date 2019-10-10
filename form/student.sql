-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2019 at 02:40 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `FNAME` varchar(50) NOT NULL,
  `LNAME` varchar(50) NOT NULL,
  `FTNAME` varchar(100) NOT NULL,
  `MTNAME` varchar(100) NOT NULL,
  `CNO` bigint(10) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PWD` varchar(20) NOT NULL,
  `CATEGORY` varchar(10) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `STATE` varchar(20) NOT NULL,
  `DISTRICT` varchar(30) NOT NULL,
  `PIN` int(6) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`FNAME`, `LNAME`, `FTNAME`, `MTNAME`, `CNO`, `EMAIL`, `PWD`, `CATEGORY`, `DOB`, `STATE`, `DISTRICT`, `PIN`, `ADDRESS`) VALUES
('anurag', 'gupta', 'XXXXXXXXXXXX', 'XXXXXXXXXXX', 1234567896, 'anuraggreat@gmail.com', '123', 'male', '12/08/1990', 'Bihar', 'Motihari', 123456789, 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'),
('gaurav', 'kumar', 'xxxxxxxxx', 'xxxxxxxxxxxx', 123456789, 'gk@gmail.com', '123456789', 'male', '1/1/1992', 'Bihar', 'Motihari', 123456789, 'xxxxxxxxxxxxxxxxx');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
