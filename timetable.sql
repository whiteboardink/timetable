-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 09:39 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(40) NOT NULL,
  `s_name` varchar(120) NOT NULL,
  `semester` varchar(10) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sid`, `department`, `s_name`, `semester`) VALUES
(19, 'Computer Science and Engineering', 'Internet and Mobile Communication System Technologies', '7'),
(21, 'Computer Science and Engineering', 'Computer Graphics and Multimedia', '7'),
(22, 'Computer Science and Engineering', 'Internet and Web Programming with Java', '7'),
(23, 'Computer Science and Engineering', 'Elective II', '7'),
(24, 'Computer Science and Engineering', 'Graphics and Multimedia Lab', '7'),
(25, 'Computer Science and Engineering', 'Internet and Web Programming Lab', '7'),
(26, 'Computer Science and Engineering', 'Mini Project', '7'),
(27, 'Computer Science and Engineering', 'Physical Education, Health & Fitness ', '7'),
(29, 'Computer Science and Engineering', 'Cryptography and Security', '8'),
(31, '--Select Department--', '', '--Select S'),
(32, '--Select Department--', '', '--Select S'),
(33, '--Select Department--', '', '--Select S'),
(34, '--Select Department--', '', '--Select S'),
(35, '--Select Department--', '', '--Select S'),
(36, '--Select Department--', '', '--Select S'),
(37, '--Select Department--', '', '--Select S'),
(38, '--Select Department--', '', '--Select S'),
(39, 'Mechanical Engineering', 'aaadaf', '3'),
(40, 'Electronics and Communication Engineerin', 'zxcxzvd', '4'),
(41, 'Electrical and Electronics Engineering', 'fghjyuertwe', '3'),
(42, '--Select Department--', '', '--Select S'),
(43, '--Select Department--', '', '--Select S'),
(44, '--Select Department--', '', '--Select S'),
(45, '--Select Department--', '', '--Select S'),
(46, '--Select Department--', '', '--Select S'),
(47, '--Select Department--', '', '--Select S'),
(48, '--Select Department--', '', '--Select S'),
(49, '--Select Department--', '', '--Select S'),
(50, '--Select Department--', '', '--Select S'),
(51, '--Select Department--', '', '--Select S'),
(52, '--Select Department--', '', '--Select S'),
(53, '--Select Department--', '', '--Select S'),
(54, 'Mechanical Engineering', 'gfjhgjlhjlhkhjre', '4'),
(55, 'Mechanical Engineering', 'rhgk', '4'),
(56, 'Mechanical Engineering', 'rterytu', '4'),
(57, 'Computer Science and Engineering', 'kjiui', '4'),
(58, '--Select Department--', '', '--Select S'),
(59, '--Select Department--', '', '--Select S'),
(60, '--Select Department--', '', '--Select S'),
(61, '--Select Department--', '', '--Select S'),
(62, '--Select Department--', '', '--Select S'),
(63, '--Select Department--', '', '--Select S'),
(64, '--Select Department--', '', '--Select S'),
(65, '--Select Department--', '', '--Select S');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE IF NOT EXISTS `table1` (
  `t1_id` int(11) NOT NULL AUTO_INCREMENT,
  `h1` varchar(50) NOT NULL,
  `h2` varchar(50) NOT NULL,
  `h3` varchar(50) NOT NULL,
  `break` varchar(40) NOT NULL DEFAULT 'BREAK',
  `h4` varchar(50) NOT NULL,
  `h5` varchar(50) NOT NULL,
  `h6` varchar(50) NOT NULL,
  PRIMARY KEY (`t1_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=575 ;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`t1_id`, `h1`, `h2`, `h3`, `break`, `h4`, `h5`, `h6`) VALUES
(570, 'CN', 'DBMS', 'elective2', 'BREAK', 'Cryps', 'GM Lab', 'SE'),
(571, 'CGM', 'SE', 'Cryps', 'BREAK', 'DBMS', 'Cryps', 'CGM'),
(572, 'CGM', 'CN', 'SE', 'BREAK', 'GM Lab', 'CN', 'WP'),
(573, 'MP', 'GM Lab', 'GM Lab', 'BREAK', 'GM Lab', 'SE', 'CGM'),
(574, 'WP', 'CN', 'DBMS', 'BREAK', 'elective2', 'DBMS', 'DBMS');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE IF NOT EXISTS `table2` (
  `t2_id` int(11) NOT NULL AUTO_INCREMENT,
  `h1` varchar(50) NOT NULL,
  `h2` varchar(50) NOT NULL,
  `h3` varchar(50) NOT NULL,
  `break` varchar(50) NOT NULL DEFAULT 'BREAK',
  `h4` varchar(50) NOT NULL,
  `h5` varchar(50) NOT NULL,
  `h6` varchar(50) NOT NULL,
  PRIMARY KEY (`t2_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`t2_id`, `h1`, `h2`, `h3`, `break`, `h4`, `h5`, `h6`) VALUES
(71, 'MP', 'elective2', 'CN', 'BREAK', 'GM Lab', 'elective2', 'DBMS'),
(72, 'WP', 'CGM', 'CN', 'BREAK', 'WP', 'GM Lab', 'GM Lab'),
(73, 'Cryps', 'CN', 'DBMS', 'BREAK', 'SE', 'SE', 'elective2'),
(74, 'elective2', 'WP', 'GM Lab', 'BREAK', 'CN', 'DBMS', 'Cryps'),
(75, 'WP', 'SE', 'GM Lab', 'BREAK', 'CGM', 'DBMS', 'Cryps');

-- --------------------------------------------------------

--
-- Table structure for table `table3`
--

CREATE TABLE IF NOT EXISTS `table3` (
  `t3_id` int(11) NOT NULL AUTO_INCREMENT,
  `h1` varchar(50) NOT NULL,
  `h2` varchar(50) NOT NULL,
  `h3` varchar(50) NOT NULL,
  `break` varchar(50) NOT NULL DEFAULT 'BREAK',
  `h4` varchar(50) NOT NULL,
  `h5` varchar(50) NOT NULL,
  `h6` varchar(50) NOT NULL,
  PRIMARY KEY (`t3_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `table3`
--

INSERT INTO `table3` (`t3_id`, `h1`, `h2`, `h3`, `break`, `h4`, `h5`, `h6`) VALUES
(71, 'MP', 'Cryps', 'elective2', 'BREAK', 'SE', 'MP', 'elective2'),
(72, 'CN', 'SE', 'SE', 'BREAK', 'DBMS', 'elective2', 'WP'),
(73, 'Cryps', 'elective2', 'GM Lab', 'BREAK', 'SE', 'SE', 'Cryps'),
(74, 'DBMS', 'DBMS', 'CN', 'BREAK', 'Cryps', 'CGM', 'elective2'),
(75, 'WP', 'Cryps', 'SE', 'BREAK', 'DBMS', 'CGM', 'CN');

-- --------------------------------------------------------

--
-- Table structure for table `table4`
--

CREATE TABLE IF NOT EXISTS `table4` (
  `t4_id` int(11) NOT NULL AUTO_INCREMENT,
  `h1` varchar(50) NOT NULL,
  `h2` varchar(50) NOT NULL,
  `h3` varchar(50) NOT NULL,
  `break` varchar(50) NOT NULL DEFAULT 'BREAK',
  `h4` varchar(50) NOT NULL,
  `h5` varchar(50) NOT NULL,
  `h6` varchar(50) NOT NULL,
  PRIMARY KEY (`t4_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `table4`
--

INSERT INTO `table4` (`t4_id`, `h1`, `h2`, `h3`, `break`, `h4`, `h5`, `h6`) VALUES
(71, 'DBMS', 'CN', 'GM Lab', 'BREAK', 'DBMS', 'elective2', 'elective2'),
(72, 'MP', 'CN', 'SE', 'BREAK', 'CN', 'elective2', 'DBMS'),
(73, 'GM Lab', 'elective2', 'DBMS', 'BREAK', 'CGM', 'DBMS', 'CN'),
(74, 'elective2', 'CN', 'elective2', 'BREAK', 'CN', 'GM Lab', 'CGM'),
(75, 'WP', 'MP', 'CGM', 'BREAK', 'CGM', 'Cryps', 'SE');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(40) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `department` varchar(40) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `t_name`, `mobile`, `email`, `department`) VALUES
(16, 'athira', '9567453217', 'athiraprem8@gmail.com', '2'),
(17, 'athira', '9567453217', 'athiraprem8@gmail.com', '2'),
(18, 'athira', '9567453217', 'athiraprem8@gmail.com', '2'),
(19, 'athira', '9567453217', 'athiraprem8@gmail.com', '2'),
(20, 'athira', '9567453217', 'athiraprem8@gmail.com', '3'),
(21, 'nimi', '9567453217', 'nimmi@gmail.com', '3'),
(24, 'princy', '9946980671', 'princygopalva@gmail.com', '2'),
(25, 'pappu', '9874563210', 'p@gmail.com', '2'),
(26, 'chithra', '9945632178', 'c@gmail.com', 'Civil Engineering'),
(28, 'roufi', '9999999999', 'roufi@gmail.com', 'Electronics and Communication Engineerin');

-- --------------------------------------------------------

--
-- Table structure for table `ts_combination`
--

CREATE TABLE IF NOT EXISTS `ts_combination` (
  `tsid` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(40) NOT NULL,
  `s_name` varchar(300) NOT NULL,
  `comb_id` varchar(10) NOT NULL,
  `class_id` int(11) NOT NULL,
  `short_name` varchar(100) NOT NULL,
  PRIMARY KEY (`tsid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `ts_combination`
--

INSERT INTO `ts_combination` (`tsid`, `t_name`, `s_name`, `comb_id`, `class_id`, `short_name`) VALUES
(22, 'athira', 'Elective II', '1', 0, 'elective2'),
(23, 'athira', 'Computer Graphics and Multimedia', '2', 3, 'CGM'),
(24, 'athira', 'Software Engineering', '3', 3, 'SE'),
(25, 'chithra', 'DBMS', '4', 7, 'DBMS'),
(26, 'chithra', 'Mini Project', '5', 7, 'MP'),
(27, 'athira', 'Graphics and Multimedia Lab', '6', 6, 'GM Lab'),
(28, 'athira', 'Computer Network', '7', 5, 'CN'),
(29, 'athira', 'Web Programming', '8', 5, 'WP'),
(30, 'pappu', 'Cryptography and Security', '9', 3, 'Cryps');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`) VALUES
(1, 'admin', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
