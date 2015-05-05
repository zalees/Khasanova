-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 06 2015 г., 00:18
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mybd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `name1` varchar(20) NOT NULL,
  `name2` varchar(20) NOT NULL,
  `name3` varchar(20) NOT NULL,
  `item` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `id` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`name1`, `name2`, `name3`, `item`, `quantity`, `comment`, `id`) VALUES
('РҐР°СЃР°РЅРѕРІР°', 'РђР·Р°Р»РёСЏ', 'РњР°СЂР°С‚РѕРІРЅР°', 'marker', '7', 'Р±СѓРґРµРј РґРµР»Р°С‚СЊ СЂР°РґСѓРіСѓ^^', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
