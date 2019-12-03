-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2017 at 04:56 AM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alllandingpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `landing_info`
--

CREATE TABLE IF NOT EXISTS `landing_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `plan` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `landing_info`
--

INSERT INTO `landing_info` (`id`, `page_name`, `price`, `plan`, `username`, `email`, `mobile`, `date`) VALUES
(1, 'Content Marketing', 'No Fees', 'No Plan', 'G Manikam', 'gmanikam1989@gmail.com', '9691691171', '0000-00-00 00:00:00'),
(2, 'Content Marketing', 'No Fees', 'No Plan', 'nasirbhati', 'bhuwnesh.shrivastava@gmail.com', '5645654656', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
