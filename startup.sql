-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2014 at 11:07 PM
-- Server version: 5.5.25
-- PHP Version: 5.3.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `startup`
--

-- --------------------------------------------------------

--
-- Table structure for table `backer_table`
--

CREATE TABLE `backer_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `backer_table`
--

INSERT INTO `backer_table` (`id`, `user_id`, `proj_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 5, 19, 10, '2014-01-01 00:00:00', '2014-01-01 00:00:00'),
(2, 7, 19, 100, '2014-01-01 00:00:00', '2014-01-01 00:00:00'),
(4, 7, 16, 100, '2014-01-01 00:00:00', '2014-01-01 00:00:00'),
(6, 9, 21, 2000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 7, 22, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 6, 16, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 9, 16, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 8, 23, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `backer_id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `review` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `biography` text NOT NULL,
  `location` text NOT NULL,
  `fb` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `trans_type` varchar(255) NOT NULL,
  `key1` varchar(255) NOT NULL,
  `key2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `name`, `cover_photo`, `photo`, `biography`, `location`, `fb`, `twitter`, `github`, `linkedin`, `google`, `trans_type`, `key1`, `key2`) VALUES
(1, '5', 'faysal ul haque', '', '', 'Web Developer and designer, front-end developer', 'dhaka', 'facebook', 'twitter', '', '', '', 'paypal.com/faysal', '', ''),
(2, '6', 'Roman Ul Ferdous', '', '', 'New web and mobile app dev                                      ', 'Dhaka', 'facebook', 'twitter', '', '', '', '', '', ''),
(3, '7', 'Tareq Jobayere', '', '', 'Laravel, CodeIgniter, FUEL PHP DEVELOPER', 'Khulna', 'facebook', 'twitter', '', '', '', '', '', ''),
(4, '8', 'Sabbir Ahmed', '', '', 'lda ss[ dsakdaskd;ksadk;                                              ', 'm lfas;kf''ask', ' f;as;kas''k', ' dsk;sak f', '', '', '', '', '', ''),
(5, '9', 'Tahmid Mozaffar', '', '', 'Gamer And Android developer', 'dhaka', 'adad', 'dada', '', '', '', '', '', ''),
(6, '10', 'A R Promy', '', '', 'Web developer and CSE Engineer', 'dhaka', 'djlajd', 'ljlsf', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `proj_name` varchar(255) NOT NULL,
  `proj_desc` text NOT NULL,
  `proj_photo` varchar(255) NOT NULL,
  `proj_url` varchar(255) NOT NULL,
  `reward_on` tinyint(1) NOT NULL,
  `publish_yet` tinyint(1) NOT NULL,
  `pledged_amount` int(11) NOT NULL,
  `funded` int(11) NOT NULL,
  `duration_date` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `category` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `user_id`, `proj_name`, `proj_desc`, `proj_photo`, `proj_url`, `reward_on`, `publish_yet`, `pledged_amount`, `funded`, `duration_date`, `create_at`, `update_at`, `category`, `likes`) VALUES
(16, '5', 'Open Source Web Project', '<div class="padd">\r\n	<h2>News<div class="divider clear"></div></h2>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n	<br><br>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n</div>\r\n<div class="padd">\r\n<h2>FAQ<div class="divider clear"></div></h2>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<br><br>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n\r\n<p><strong>Some Links</strong>\r\n	<br>\r\n	<a href="#">Facebook</a>\r\n	<br>\r\n	<a href="#">Twitter</a>\r\n	<br>\r\n	<a href="#">Google+</a>\r\n</p>\r\n</div>', '6.jpg', '', 0, 0, 100, 12000, 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(17, '5', 'Journalism', '<div class="padd">\r\n	<h2>News<div class="divider clear"></div></h2>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n	<br><br>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n</div>\r\n<div class="padd">\r\n<h2>FAQ<div class="divider clear"></div></h2>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<br><br>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n\r\n<p><strong>Some Links</strong>\r\n	<br>\r\n	<a href="#">Facebook</a>\r\n	<br>\r\n	<a href="#">Twitter</a>\r\n	<br>\r\n	<a href="#">Google+</a>\r\n</p>\r\n</div>', '1.jpg', '', 0, 0, 0, 1200, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(18, '9', 'Hello', '<div class="padd">\r\n	<h2>News<div class="divider clear"></div></h2>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n	<br><br>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n</div>\r\n<div class="padd">\r\n<h2>FAQ<div class="divider clear"></div></h2>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<br><br>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n\r\n<p><strong>Some Links</strong>\r\n	<br>\r\n	<a href="#">Facebook</a>\r\n	<br>\r\n	<a href="#">Twitter</a>\r\n	<br>\r\n	<a href="#">Google+</a>\r\n</p>\r\n</div>', '8.jpg', '', 0, 0, 0, 120, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(19, '6', 'Writting', '<div class="padd">\r\n	<h2>News<div class="divider clear"></div></h2>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n	<br><br>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n</div>\r\n<div class="padd">\r\n<h2>FAQ<div class="divider clear"></div></h2>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<br><br>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n\r\n<p><strong>Some Links</strong>\r\n	<br>\r\n	<a href="#">Facebook</a>\r\n	<br>\r\n	<a href="#">Twitter</a>\r\n	<br>\r\n	<a href="#">Google+</a>\r\n</p>\r\n</div>', '7.jpg', '', 0, 0, 110, 300000, 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(20, '7', 'New Proj', '<div class="padd">\r\n	<h2>News<div class="divider clear"></div></h2>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n	<br><br>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n</div>\r\n<div class="padd">\r\n<h2>FAQ<div class="divider clear"></div></h2>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<br><br>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n\r\n<p><strong>Some Links</strong>\r\n	<br>\r\n	<a href="#">Facebook</a>\r\n	<br>\r\n	<a href="#">Twitter</a>\r\n	<br>\r\n	<a href="#">Google+</a>\r\n</p>\r\n</div>', '9.jpg', '', 0, 0, 0, 40000, 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(21, '8', 'New Projet', '<div class="padd">\r\n	<h2>News<div class="divider clear"></div></h2>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n	<br><br>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n</div>\r\n<div class="padd">\r\n<h2>FAQ<div class="divider clear"></div></h2>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<br><br>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n\r\n<p><strong>Some Links</strong>\r\n	<br>\r\n	<a href="#">Facebook</a>\r\n	<br>\r\n	<a href="#">Twitter</a>\r\n	<br>\r\n	<a href="#">Google+</a>\r\n</p>\r\n</div>', '10.jpg', '', 0, 0, 2000, 30000, 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(22, '10', 'Photography', '<div class="padd">\r\n	<h2>News<div class="divider clear"></div></h2>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n	<br><br>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n</div>\r\n<div class="padd">\r\n<h2>FAQ<div class="divider clear"></div></h2>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<br><br>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n\r\n<p><strong>Some Links</strong>\r\n	<br>\r\n	<a href="#">Facebook</a>\r\n	<br>\r\n	<a href="#">Twitter</a>\r\n	<br>\r\n	<a href="#">Google+</a>\r\n</p>\r\n</div>', '3.jpg', '', 0, 0, 10, 1200, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(23, '5', 'Studio', '<div class="padd">\r\n	<h2>News<div class="divider clear"></div></h2>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n	<br><br>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n	</p>\r\n</div>\r\n<div class="padd">\r\n<h2>FAQ<div class="divider clear"></div></h2>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<br><br>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n\r\n<p><strong>Some Links</strong>\r\n	<br>\r\n	<a href="#">Facebook</a>\r\n	<br>\r\n	<a href="#">Twitter</a>\r\n	<br>\r\n	<a href="#">Google+</a>\r\n</p>\r\n</div>', '5.jpg', '', 0, 0, 0, 200000, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_meta`
--

CREATE TABLE `project_meta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `backer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `reward_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `has_active` tinyint(1) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `auth_type` varchar(255) NOT NULL,
  `provide_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `has_active`, `auth_key`, `auth_type`, `provide_id`, `created_at`, `updated_at`) VALUES
(5, 'faysal@gmail.com', 'faysal', '81dc9bdb52d04dc20036dbd8313ed055', 0, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'roman@gmail.com', 'roman', '81dc9bdb52d04dc20036dbd8313ed055', 0, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'tareq@gmail.com', 'tareq', '81dc9bdb52d04dc20036dbd8313ed055', 0, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'sabbir@gmail.com', 'sabbir', '81dc9bdb52d04dc20036dbd8313ed055', 0, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'tahmid@gmail.com', 'tahmid', '81dc9bdb52d04dc20036dbd8313ed055', 0, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'promy@gmail.com', 'promy', '81dc9bdb52d04dc20036dbd8313ed055', 0, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
