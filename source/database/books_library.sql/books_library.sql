-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2013 at 07:01 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `books_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user_name`, `pass`) VALUES
(1, 'admin', '12');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`a_id`),
  UNIQUE KEY `a_name` (`a_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`a_id`, `a_name`) VALUES
(1, 'D.S Hira');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `sl_no` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `publication` varchar(100) DEFAULT NULL,
  `edition` varchar(100) DEFAULT NULL,
  `year` year(4) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `total_holding` int(11) NOT NULL,
  `comment` text,
  PRIMARY KEY (`book_id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `sl_no`, `title`, `type`, `author`, `publication`, `edition`, `year`, `category`, `total_holding`, `comment`) VALUES
(2, '001', 'Simulation & Modeling', 'Text Book', 'D. S. Hira', 'ABC', '11th', 2000, 'Computer Science', 2, 'abc'),
(4, '002', 'ABC', 'text', 'xyz', 'xxx', '11th', 2000, 'abc', 2, 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `ct_id` int(11) NOT NULL AUTO_INCREMENT,
  `ct_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ct_id`),
  UNIQUE KEY `ct_name` (`ct_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ct_id`, `ct_name`) VALUES
(3, 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
  `loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_book_sln` int(11) NOT NULL,
  `loan_mem_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loan_date` date NOT NULL,
  `loan_return_date` date NOT NULL,
  `loan_status` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`loan_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_id`, `loan_book_sln`, `loan_mem_name`, `loan_date`, `loan_return_date`, `loan_status`) VALUES
(2, 1, 'abc', '2013-05-24', '2013-05-31', 'On Loan');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `phone` int(12) NOT NULL,
  `nationality` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mem_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `fname`, `lname`, `username`, `password`, `email`, `dob`, `phone`, `nationality`, `address`, `comment`) VALUES
(7, 'abc', 'efd', 'ab', '111', 'abc@gmail.com', '2010-11-11', 22222, 'bangladeshi', 'abaaaa', '');
