-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2017 at 01:35 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schoolapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `acad_session`
--

CREATE TABLE IF NOT EXISTS `acad_session` (
  `acad_id` int(11) NOT NULL AUTO_INCREMENT,
  `acad_name` varchar(50) NOT NULL,
  PRIMARY KEY (`acad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(50) NOT NULL,
  `course_unit` int(11) NOT NULL,
  `course_desc` varchar(50) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_unit`, `course_desc`) VALUES
(1, 'CSC 101', 2, 'Introduction to Programming'),
(2, 'CSC 102', 3, 'Web Application Development'),
(3, 'CSC 103', 4, 'Best Practices in SW Development'),
(4, 'CSC 104', 4, 'Project management');

-- --------------------------------------------------------

--
-- Table structure for table `course_reg`
--

CREATE TABLE IF NOT EXISTS `course_reg` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_session` varchar(50) NOT NULL,
  `reg_matric` varchar(50) NOT NULL,
  `reg_courseid` int(11) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fullname` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_matric` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_level` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fullname`, `user_gender`, `user_matric`, `user_password`, `user_level`) VALUES
(1, 'Phil Bright', 'Male', 'MOAT001', '1234', 100),
(2, 'Emmanuel', 'Male', 'MOAT002', '1111', 200),
(3, 'Oluwafemi', 'Male', 'MOAT003', '1234', 100),
(4, 'Kehinde Oke-Salako', 'Male', 'MOAT004', '2222', 200),
(5, 'Taofeek Lateef', 'Male', 'MOAT005', '3333', 100),
(6, 'Busayo Jonathan', 'Male', 'MOAT006', '4444', 200),
(7, 'Morenikeji', 'Male', 'MOAT007', '5555', 100),
(8, 'Oluwaseun', 'Male', 'MOAT008', '6666', 200);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
user