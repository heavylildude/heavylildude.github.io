-- Adminer 4.8.1 MySQL 5.7.24 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `cms_admin`;
CREATE TABLE `cms_admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `cms_admin` (`ID`, `admin_email`, `admin_password`, `admin_name`, `status`) VALUES
(1,	'chris@mail.com',	'123',	'Chris',	'1'),
(2,	'john@mail.com',	'321',	'John',	'1');

DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `animal` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `national_song` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `countries` (`id`, `country_name`, `animal`, `national_song`) VALUES
(1,	'Indonesia',	'Garuda',	'Indonesia Raya'),
(2,	'Australia',	'Kangaroo',	'Advanced Australia Fair'),
(3,	'Singapore',	'Hobo',	'That');

DROP TABLE IF EXISTS `my_first_table`;
CREATE TABLE `my_first_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthdate` date NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sex` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `my_first_table` (`id`, `firstname`, `lastname`, `birthdate`, `address`, `nationality`, `status`, `image`, `sex`) VALUES
(3,	'Tinaaaa',	'Ipsum',	'2000-08-17',	'lorem ipsum\r\ndolor set amet',	'Singapore',	'1',	'3.jpg',	'F'),
(7,	'Jack',	'Russel',	'2001-01-01',	'dolor set amet',	'Australia',	'1',	'20210211085242.jpg',	'M'),
(17,	'Jimmy',	'kid',	'1945-08-17',	'lorem ipsum',	'Singapore',	'1',	'20210211112357.jpg',	'M');

-- 2022-08-15 02:00:42
