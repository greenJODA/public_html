-- phpMyAdmin SQL Dump
-- version 3.5.0
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 14 2014 г., 03:21
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
  `Image_c` int(11) DEFAULT NULL,
  PRIMARY KEY (`Cod_c`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
