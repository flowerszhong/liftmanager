-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-11-10 16:04:59
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gznlift`
--

-- --------------------------------------------------------

--
-- 表的结构 `lm_admin`
--

CREATE TABLE IF NOT EXISTS `lm_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `displayname` varchar(45) NOT NULL,
  `pwd` varchar(45) NOT NULL,
  `salt1` varchar(45) NOT NULL,
  `salt2` varchar(45) NOT NULL,
  `station` int(11) NOT NULL,
  `power` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `lm_lift`
--

CREATE TABLE IF NOT EXISTS `lm_lift` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lid` varchar(45) NOT NULL,
  `station` int(11) NOT NULL,
  `substation` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `vin` varchar(45) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `orig_no` varchar(45) DEFAULT NULL,
  `change_no` varchar(45) DEFAULT NULL,
  `production_date` datetime DEFAULT NULL,
  `manufacturer` varchar(45) DEFAULT NULL,
  `param` varchar(200) DEFAULT NULL,
  `last_check` datetime DEFAULT NULL,
  `next_check` datetime DEFAULT NULL,
  `distribution` varchar(45) DEFAULT NULL,
  `no96333` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lid_UNIQUE` (`lid`),
  KEY `station_idx` (`station`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- 表的结构 `lm_maintenance`
--

CREATE TABLE IF NOT EXISTS `lm_maintenance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lid` varchar(45) DEFAULT NULL,
  `maintenance_man` varchar(45) NOT NULL,
  `check_date` datetime NOT NULL,
  `problem` varchar(200) NOT NULL,
  `cause` varchar(120) NOT NULL,
  `charge_partment` varchar(45) NOT NULL,
  `charge_man` varchar(45) NOT NULL,
  `deadline` datetime NOT NULL,
  `deal` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lid_idx` (`lid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `lm_station`
--

CREATE TABLE IF NOT EXISTS `lm_station` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `grade` int(11) NOT NULL DEFAULT '1',
  `parent` int(11) DEFAULT NULL,
  `comments` varchar(80) DEFAULT NULL,
  `thumbnail` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 限制导出的表
--

--
-- 限制表 `lm_lift`
--
ALTER TABLE `lm_lift`
  ADD CONSTRAINT `station` FOREIGN KEY (`station`) REFERENCES `lm_station` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 限制表 `lm_maintenance`
--
ALTER TABLE `lm_maintenance`
  ADD CONSTRAINT `lid` FOREIGN KEY (`lid`) REFERENCES `lm_lift` (`lid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
