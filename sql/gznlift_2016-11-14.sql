-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-11-13 17:54:05
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `lm_admin`
--

INSERT INTO `lm_admin` (`id`, `name`, `displayname`, `pwd`, `salt1`, `salt2`, `station`, `power`) VALUES
(1, 'sg_admin', '韶关管理员', '92542201460d04c965007977cc79f6ecff18fe0e', '3537', '4246', 1, 10),
(2, 'xl_admin', '小榄管理员', '13e4d16dab839b14ef7276c7b6ee2e86bbc30996', '3928', '8595', 2, 10);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- 转存表中的数据 `lm_station`
--

INSERT INTO `lm_station` (`id`, `name`, `grade`, `parent`, `comments`, `thumbnail`) VALUES
(1, '韶关车间', 10, 0, 'kgsajfksadlfk', NULL),
(2, '小榄车间', 10, 0, '大规模dfdsaf', NULL),
(3, '珠海车间', 10, 0, 'sdafdsafdsaf', NULL),
(4, '肇庆东车间', 10, 0, 'dafdsafsafd', NULL),
(5, '清远', 1, 1, '韶关车间子站', NULL),
(6, '东升', 1, 3, '', NULL),
(7, '英德西', 1, 1, '', NULL),
(8, '乐昌东', 1, 1, '', NULL),
(9, '广州北', 1, 1, '', NULL),
(10, '北滘', 1, 2, '', NULL),
(11, '顺德', 1, 2, '', NULL),
(12, '顺德学院', 1, 2, '', NULL),
(13, '容桂', 1, 2, '', NULL),
(14, '南头', 1, 2, '', NULL),
(15, '古镇', 1, 2, '', NULL),
(16, '江门', 1, 2, '', NULL),
(17, '中山北', 1, 3, '						', NULL),
(18, '中山', 1, 3, '', NULL),
(19, '南朗', 1, 3, '', NULL),
(20, '珠海北', 1, 3, '', NULL),
(21, '唐家湾', 1, 3, '', NULL),
(22, '明珠', 1, 3, '', NULL),
(23, '前山', 1, 3, '', NULL),
(24, '三眼桥', 1, 4, '', NULL),
(25, '客专场佛山西', 1, 4, '', NULL),
(26, '城际场佛山西', 1, 4, '', NULL),
(27, '动车所佛山西', 1, 4, '', NULL),
(28, '三水南', 1, 4, '', NULL),
(29, '广宁', 1, 4, '', NULL),
(30, '怀集', 1, 4, '', NULL),
(31, '肇庆西', 1, 4, '', NULL),
(32, '云浮东', 1, 4, '', NULL),
(33, '南江口', 1, 4, '', NULL),
(34, '郁南', 1, 4, '', NULL);

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
