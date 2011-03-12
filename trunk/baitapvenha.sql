-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2011 at 12:47 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(50) collate utf8_unicode_ci default NULL,
  `content` text collate utf8_unicode_ci NOT NULL,
  `created` date default NULL,
  `modified` date default NULL,
  `image` text collate utf8_unicode_ci NOT NULL,
  `url` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created`, `modified`, `image`, `url`) VALUES
(1, 'Tính toán lưới là gì', '“Grid computing  là một loại hệ thống song song, phân tán cho phép chia sẻ, lựa chọn, kết hợp các tài nguyên phân tán theo địa lý  ', '2010-10-13', '2011-03-18', 'anh1', ''),
(12, 'Chết cũng phải làm được', 'Tức không thể chịu được', '2011-03-07', '2011-03-07', 'anh2', ''),
(20, 'dai hoc BK ha noi', '', '2011-03-12', '2011-03-12', '', 'Nguyen cong kha');
