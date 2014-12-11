-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2014 at 02:12 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fruit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ordr`
--

CREATE TABLE IF NOT EXISTS `tbl_ordr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `Bussiness_Name` varchar(80) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Sadr1` varchar(90) NOT NULL,
  `Sadr2` varchar(90) NOT NULL,
  `City` text NOT NULL,
  `Stae_Province` varchar(50) NOT NULL,
  `Zip_Code` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `prod_name` varchar(150) NOT NULL,
  `prod_total` int(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tbl_ordr`
--

INSERT INTO `tbl_ordr` (`id`, `name`, `Bussiness_Name`, `Email`, `Phone`, `Sadr1`, `Sadr2`, `City`, `Stae_Province`, `Zip_Code`, `Country`, `prod_name`, `prod_total`, `date`) VALUES
(31, 'madhu arvapalli', 'php', 'madhu@gmail.com', '1234567890', 'dewaraka', ' vdos', 'khammam', 'ap', '12345', 'usa', 'Apple', 1000, '03-11-2014'),
(32, 'madhu arvapalli', 'php', 'madhu@gmail.com', '1234567890', 'dewaraka', ' vdos', 'khammam', 'ap', '12345', 'usa', 'Ball', 100, '03-11-2014'),
(33, 'madhu arvapalli', 'php', 'madhu@gmail.com', '1234567890', 'dewaraka', ' vdos', 'khammam', 'ap', '12345', 'usa', 'Apple', 1000, '04-11-2014'),
(34, 'madhu arvapalli', 'php', 'madhu@gmail.com', '1234567890', 'dewaraka', ' vdos', 'khammam', 'ap', '12345', 'usa', 'Ball', 100, '04-11-2014'),
(35, 'madhu arvapalli', 'php', 'madhu@gmail.com', '1234567890', 'dewaraka', ' vdos', 'khammam', 'ap', '12345', 'usa', 'Apple', 1000, '04-11-2014'),
(36, 'madhu arvapalli', 'php', 'madhu@gmail.com', '1234567890', 'dewaraka', ' vdos', 'khammam', 'ap', '12345', 'usa', 'Ball', 100, '04-11-2014'),
(37, 'madhu arvapalli', 'php', 'madhu@gmail.com', '1234567890', 'dewaraka', ' vdos', 'khammam', 'ap', '12345', 'usa', 'Apple', 1000, '04-11-2014'),
(38, 'madhu arvapalli', 'php', 'madhu@gmail.com', '1234567890', 'dewaraka', ' vdos', 'khammam', 'ap', '12345', 'usa', 'Ball', 100, '04-11-2014'),
(39, 'sdsad asdsa', 'asdsa', 'madhu@gmail.com', '1234567890', 'dewaraka', ' vdos', 'khammam', 'ap', '12345', 'uk', 'Apple One', 100, '04-11-2014'),
(40, 'sdsad asdsa', 'asdsa', 'madhu@gmail.com', '1234567890', 'dewaraka', ' vdos', 'khammam', 'ap', '12345', 'uk', 'Apple One', 100, '04-11-2014'),
(41, 'sdsad asdsa', 'asdsa', 'madhu@gmail.com', '1234567890', 'dewaraka', ' vdos', 'khammam', 'ap', '12345', 'uk', 'Apple One', 100, '04-11-2014'),
(42, 'asadsa sadsad', 'asdsad', 'madhu@gmail.com', '1234567890', 'dewaraka', ' vdos', 'khammam', 'ap', '12345', 'usa', 'Apple', 100, '04-11-2014'),
(43, 'asadsa sadsad', 'asdsad', 'madhu@gmail.com', '1234567890', 'dewaraka', ' vdos', 'khammam', 'ap', '12345', 'usa', 'Apple', 100, '04-11-2014');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod`
--

CREATE TABLE IF NOT EXISTS `tbl_prod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `kg` int(50) NOT NULL,
  `ps` int(200) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_prod`
--

INSERT INTO `tbl_prod` (`id`, `name`, `kg`, `ps`, `status`) VALUES
(1, 'Apple', 100, 10, ''),
(2, 'Apple One', 100, 10, ''),
(3, 'Apple Two', 100, 10, ''),
(4, 'Apple Three', 100, 10, ''),
(5, 'Bannana', 100, 10, ''),
(6, 'Bannana One', 100, 10, ''),
(7, 'Ball', 100, 10, ''),
(8, 'Ball One', 100, 10, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
