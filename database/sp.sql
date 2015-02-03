-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2013 at 07:33 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `sp`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(4) NOT NULL DEFAULT 'C',
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_notify` varchar(3) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `imp_deadline` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `ext` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `password`, `usertype`, `first_name`, `last_name`, `city`, `country`, `email`, `email_notify`, `middle_name`, `job_title`, `company`, `company_address`, `zip_code`, `industry`, `imp_deadline`, `phone`, `ext`, `fax`) VALUES
(1, 'admin', 'e99a18c428cb38d5f260853678922e03', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'hasitha', 'e99a18c428cb38d5f260853678922e03', 'C', 'Hasitha', 'Raviranga', 'Moratuwa', 'SL', 'hraviranga@live', 'N', '', '', '', '', '', '', '', '', '', ''),
(6, 'malinga', 'e99a18c428cb38d5f260853678922e03', 'C', 'Uthsani', 'Ranasinghe', 'Boralesgamuwa', 'SL', 'fgfg@gf.com', 'Y', '', '', '', '', '', '', '', '', '', '');
