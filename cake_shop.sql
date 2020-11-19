-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 02:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('Runali Kadam', 'kadamrunali40@gmail.com', 'dgdfh', 'fgfjgf'),
('Runali Kadam', 'kadamrunali40@gmail.com', 'dgdfh', 'fgfjgf'),
('', '', '', ''),
('', '', '', ''),
('bm', '', '', ''),
('bm', '', '', ''),
('bm', '', '', ''),
('bm', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Runali Kadam', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Runali', 'Runali@gmail.com', 'hhlj', 'wretetea'),
('shreya', 'shreya@gmail.com', 'etrees', 'terges'),
('shreya', 'shreya@gmail.com', 'etrees', 'terges'),
('shreya', 'kadam@gmail.com', 'wrwetea', 'qrwtewa'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('dgsd', 'kadam@gmail.com', 'sdgfs', 'fsefs'),
('shreya', 'kadam@gmail.com', 'dfs', 'sfa'),
('shreya', 'kadam@gmail.com', 'dfs', 'sfa'),
('runa', 'kadam@gmail.com', 'jhsljfsz', 'fasgs'),
('runa', 'kadam@gmail.com', 'jhsljfsz', 'fasgs'),
('swapnali', 'swapn@gmail.com', 'sfsda', 'sfdaf'),
('swapnali', 'swapn@gmail.com', 'sfsda', 'sfdaf'),
('Runa', 'kadamrunali40@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `contact`, `address`, `password`) VALUES
('kadamsfsd', 'kadamrunali40@gmail.com', '9869547330', 'sfs', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
