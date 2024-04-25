-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2017 at 11:49 AM
-- Server version: 5.1.41
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lawyerdb`
--
CREATE DATABASE IF NOT EXISTS `lawyerdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lawyerdb`;

-- --------------------------------------------------------

--
-- Table structure for table `addressbook`
--

CREATE TABLE IF NOT EXISTS `addressbook` (
  `lawyerid` int(50) NOT NULL,
  `clientname` varchar(50) NOT NULL,
  `clientid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addressbook`
--

INSERT INTO `addressbook` (`lawyerid`, `clientname`, `clientid`) VALUES
(100, 'Gowtham', 'Gow'),
(102, 'Priya', 'priya'),
(104, 'priya', 'priya');

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE IF NOT EXISTS `appoint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lawyerid` varchar(10) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `dt` date NOT NULL,
  `tm` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`id`, `lawyerid`, `userid`, `dt`, `tm`) VALUES
(1, '100', 'priya', '2017-04-18', '09:00'),
(2, '100', 'kamatchi', '2017-04-18', '10:00');

-- --------------------------------------------------------

--
-- Table structure for table `appointtime`
--

CREATE TABLE IF NOT EXISTS `appointtime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tm` varchar(10) NOT NULL,
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `tm` (`tm`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `appointtime`
--

INSERT INTO `appointtime` (`id`, `tm`) VALUES
(1, '09:00'),
(2, '10:00'),
(3, '11:00'),
(4, '12:00'),
(5, '13:00'),
(6, '14:00'),
(7, '15:00'),
(8, '16:00'),
(9, '17:00'),
(10, '18:00'),
(11, '19:00');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `date` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`sender`, `receiver`, `date`, `msg`) VALUES
('Karthiga', 'gow', '2016-03-23 11:02:26', 'hello'),
('gow', 'Karthiga', '2016-03-23 12:44:28', 'hello mam'),
('gow', 'Viji', '2016-03-23 01:02:37', 'hello madam i need a help'),
('Karthiga', 'gow', '2016-03-23 01:03:16', 'Yeah tell sir what is your query');

-- --------------------------------------------------------

--
-- Table structure for table `forumanswer`
--

CREATE TABLE IF NOT EXISTS `forumanswer` (
  `refno` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `threadno` int(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `answer` text NOT NULL,
  `adate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forumanswer`
--

INSERT INTO `forumanswer` (`refno`, `name`, `threadno`, `category`, `answer`, `adate`) VALUES
(100, 'Karthiga', 2, 'Information Technology law', 'gsgsdsff', '2016-02-13 08:03:38'),
(103, 'Kumar', 1, 'Miscellaneous Laws', 'Go to Miscellaneous Lawyer.', '2016-02-15 10:50:33'),
(104, 'priya dharshini', 1, 'Miscellaneous Laws', 'go to particular lawyer for pf', '2016-03-22 12:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `threadno` int(100) NOT NULL AUTO_INCREMENT,
  `heading` varchar(50) NOT NULL,
  `lawcategory` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `pdate` datetime NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`threadno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`threadno`, `heading`, `lawcategory`, `description`, `pdate`, `username`) VALUES
(1, 'EPF', 'Miscellaneous Laws', 'no PF in our company.where i go to complaint?', '2016-02-11 07:36:32', 'gow'),
(2, 'IT', 'Information Technology law', 'Where to complaint about internet companies who is providing worst internet connections to our company?', '2016-02-11 07:44:34', 'gow'),
(3, 'need mark sheet ', 'Consumer Laws', 'i had applied university for mark sheet where to contact?', '2016-03-22 12:52:10', 'kamatchi'),
(4, 'DIVOSE', 'Family Laws', 'I NEED DIVOSE', '2016-03-22 01:15:35', 'Alagu');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `sender` varchar(50) NOT NULL,
  `toadd` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `senddate` datetime NOT NULL,
  `body` text NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`sender`, `toadd`, `subject`, `senddate`, `body`, `filename`) VALUES
('priya', '100', 'sdgfsd', '2016-03-14 07:58:26', 'sdgd', 'attachments/phisherscreen.docx'),
('kamatchi', '103', 'mark sheet', '2016-03-22 12:54:19', 'i had uploded my document please verify', 'attachments/Budget.doc'),
('Alagu', '105', 'Divose', '2016-03-22 01:18:24', 'image', 'attachments/Penguins.jpg'),
('100', 'gow', 'Verified', '2016-03-22 07:14:34', 'verified your property document', 'attachments/my.docx');

-- --------------------------------------------------------

--
-- Table structure for table `lawyerreg`
--

CREATE TABLE IF NOT EXISTS `lawyerreg` (
  `refno` int(50) NOT NULL AUTO_INCREMENT,
  `lname` varchar(50) NOT NULL,
  `lfname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `phno` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `design` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `court` varchar(50) NOT NULL,
  `caddress` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `seq` text NOT NULL,
  `seans` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`refno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `lawyerreg`
--

INSERT INTO `lawyerreg` (`refno`, `lname`, `lfname`, `address`, `city`, `state`, `country`, `dob`, `phno`, `email`, `qualification`, `design`, `role`, `court`, `caddress`, `password`, `seq`, `seans`) VALUES
(100, 'Karthiga', 'Raj Kumar', 'no10 jaihind', 'Madurai', 'Tamil Nadu', 'India', '1989-05-15', '9500296210', 'karthi@gmail.com', 'MSC BL', 'Lawyer', 'family lawyer', 'High Court', 'North st,madurai', 'karthi', 'What is your NickName', 'don'),
(101, 'SasiKumar', 'MuthuPalani.A', 'no 12 shola', 'Madurai', 'Tamil Nadu', 'India', '1978-06-22', '9600721154', 'sasi@gmail.com', 'MA BL', 'Senior Lawyer', 'business lawyer', 'High Court', 'North st,Madurai', 'sasi', 'What is your First school Name', 'Vivekananda'),
(102, 'Viji', 'Kumar', 'no3,sec st', 'Chennai', 'Tamil Nadu', 'India', '1995-01-20', '9856198562', 'viji@gmail.com', 'MA BL', 'Lawyer', 'legal advisor', 'High Court', 'north street,chennai', 'viji', 'What is your favourite place', 'madurai'),
(103, 'Kumar', 'Pandurengan', 'no4 oru st', 'Madurai', 'Tamil Nadu', 'India', '1967-10-29', '9786091451', 'kumar@gmail.com', 'BE BL', 'Senior Lawyer', 'family lawyer', 'Supreme Court', 'OM road,chennai', 'kumar29', 'What is your favourite place', 'Madurai'),
(104, 'priya dharshini', 'ramesh', 'no 7 2nd street', 'madurai', 'tamilnadu', 'india', '1992-03-08', '9842198421', 'p@gmail.com', 'MA ML', 'Assistant', 'family lawyer', 'Supreme court', 'madurai north', '123', 'What is your favourite place', 'madurai'),
(105, 'Raja', 'Murugan', 'Dindigul', 'Dindigul', 'tamilnadu', 'india', '1985-03-17', '8870137095', 'rajwhizzkid@gmail.com', 'MA ML', 'Assistant', 'family lawyer', 'Highcourt', 'Chennai', '123', 'What is your favourite Dish', '123');

-- --------------------------------------------------------

--
-- Table structure for table `publicreg`
--

CREATE TABLE IF NOT EXISTS `publicreg` (
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phoneno` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `secquest` text NOT NULL,
  `seans` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publicreg`
--

INSERT INTO `publicreg` (`name`, `address`, `city`, `state`, `country`, `phoneno`, `username`, `password`, `cpassword`, `secquest`, `seans`) VALUES
('Alagu', 'Ottuppatti', 'Dindigul', 'Tamilnadu', 'india', '2147483647', 'Alagu', '123', '123', 'What is your NickName', '123'),
('gow', 'no7 nrth st', 'chennai', 'tamilnadu', 'india', '2147483647', 'gow', 'gow12', 'gow12', 'What is your favourite Dish', 'sambar'),
('kamatchi', 'no2 second street', 'madurai', 'tn', 'india', '2147483647', 'kamatchi', '123', '123', 'What is your favourite place', 'ooty'),
('priya', 'no10 or st', 'madurai', 'tn', 'ind', '2147483647', 'priya', 'pr12', 'pr12', 'What is your First school Name', 'tagore');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
