-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2018 at 12:40 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `reg_date` datetime NOT NULL,
  `updation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '2017-11-06 05:40:18', '2017-11-06 05:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `landing_info`
--

CREATE TABLE IF NOT EXISTS `landing_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(250) NOT NULL,
  `plan` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `landing_info`
--

INSERT INTO `landing_info` (`id`, `page_name`, `plan`, `price`, `username`, `email`, `mobile`, `date`) VALUES
(1, 'Content Marketing', '', 'No Fees', 'G Manikam', 'gmanikam1989@gmail.com', '9691691171', '0000-00-00 00:00:00'),
(6, 'Content Marketing', 'Advanced', '8000', 'nasirbhati', 'gmanikam1989@gmail.com', '9691691171', '2017-11-22 03:00:26'),
(4, 'Content Marketing', 'Superb', '16000', 'Washim', 'washim@gmail.com', '1234576890', '2017-11-07 03:22:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
