-- phpMyAdmin SQL Dump
-- version 3.5.0
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 16 2014 г., 16:05
-- Версия сервера: 5.1.62-community
-- Версия PHP: 5.3.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `automotive`
--

-- --------------------------------------------------------

--
-- Структура таблицы `db_car`
--

CREATE TABLE IF NOT EXISTS `db_car` (
  `Cod_c` int(11) NOT NULL AUTO_INCREMENT,
  `Mark_c` varchar(20) DEFAULT NULL,
  `Model_c` varchar(20) DEFAULT NULL,
  `Year_c` datetime DEFAULT NULL,
  `Nomer_c` varchar(20) DEFAULT NULL,
  `Type_c` varchar(20) DEFAULT NULL,
  `Custom_c` varchar(20) DEFAULT NULL,
  `Text_c` text,
  `Articul_c` int(11) DEFAULT NULL,
  `Price_c` double DEFAULT NULL,
  `Image_c` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Cod_c`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `db_car`
--

INSERT INTO `db_car` (`Cod_c`, `Mark_c`, `Model_c`, `Year_c`, `Nomer_c`, `Type_c`, `Custom_c`, `Text_c`, `Articul_c`, `Price_c`, `Image_c`) VALUES
(2, 'Ford', 'Mondeo', '0000-00-00 00:00:00', '20-47', 'sedan', 'full', 'good', 1001, 50000, '<p>\r\n	<img alt="" /><img alt="" height="150" src="/upload/userfiles/images/ffcfe7ae39e6b41734eaeb198e451636.jpg" width="200" /></p>\r\n'),
(3, 'Ford', 'Ka', '0000-00-00 00:00:00', 'AA4562AC', 'Hatch', 'low', 'This is a great car too!', 5476, 5000, '<p>\r\n	<img alt="" /><img alt="" height="146" src="/upload/userfiles/images/11db74c07599a74108f284f98e7bdb90.jpg" width="200" /></p>\r\n'),
(4, 'Ford', 'Sierra', '0000-00-00 00:00:00', 'AA4547AB', 'sedan', 'medium', 'badass', 768957, 15000, '<p>\r\n	<img alt="" height="133" src="/upload/userfiles/images/57847272b02ac1c2af1efe5c34028668.jpg" width="200" /></p>\r\n'),
(5, 'Ford', 'Focus', '0000-00-00 00:00:00', 'AA4232AC', 'Hatch', 'high', 'Very badass', 796, 25000, '<p>\r\n	<img alt="" height="133" src="/upload/userfiles/images/e270e10d0fad63e211b9bf9d5fd77da3.jpg" width="200" /></p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `db_Purchase`
--

CREATE TABLE IF NOT EXISTS `db_Purchase` (
  `Cod_p` int(11) NOT NULL AUTO_INCREMENT,
  `p_number` int(11) DEFAULT NULL,
  `Cod_c` int(11) DEFAULT NULL,
  `User_id` int(11) DEFAULT NULL,
  `Guest` varchar(15) DEFAULT NULL,
  `Status` tinyint(11) DEFAULT NULL,
  PRIMARY KEY (`Cod_p`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `db_Purchase`
--

INSERT INTO `db_Purchase` (`Cod_p`, `p_number`, `Cod_c`, `User_id`, `Guest`, `Status`) VALUES
(1, 1, 1, 1, NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `db_Users`
--

CREATE TABLE IF NOT EXISTS `db_Users` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Created` varchar(11) DEFAULT NULL,
  `Role` tinyint(1) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `db_Users`
--

INSERT INTO `db_Users` (`User_id`, `UserName`, `password`, `Created`, `Role`, `Email`) VALUES
(1, 'Anton', '1404', NULL, 2, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
