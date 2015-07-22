-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `quicktask`;
CREATE DATABASE `quicktask` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `quicktask`;

DROP TABLE IF EXISTS `task`;
CREATE TABLE `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_group_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `completed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_527EDB25BE94330B` (`task_group_id`),
  CONSTRAINT `FK_527EDB25BE94330B` FOREIGN KEY (`task_group_id`) REFERENCES `task_group` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `task` (`id`, `task_group_id`, `name`, `date`, `completed`) VALUES
(1,	1,	'Ukladat zmenu checkboxu, aby se oznacil ukol jako hotovy',	'2015-07-23',	0),
(2,	1,	'Na checkboxy pouzit knihovnu iCheck',	'2015-07-21',	0),
(3,	1,	'Ukladat tasky pomoci ajaxu',	'2015-07-21',	0),
(4,	1,	'Radit ukoly podle data, aby nejstarsi byly na konci',	'2015-07-22',	0);

DROP TABLE IF EXISTS `task_group`;
CREATE TABLE `task_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `task_group` (`id`, `name`) VALUES
(1,	'Zadani');

-- 2015-07-21 16:52:52
