-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 08 2017 г., 01:24
-- Версия сервера: 5.5.53
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wall`
--

-- --------------------------------------------------------

--
-- Структура таблицы `wall`
--

CREATE TABLE `wall` (
  `Number` int(10) UNSIGNED NOT NULL,
  `Name` text NOT NULL,
  `Date` date NOT NULL,
  `Message` text NOT NULL,
  `Image` text NOT NULL,
  `File` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `wall`
--

INSERT INTO `wall` (`Number`, `Name`, `Date`, `Message`, `Image`, `File`) VALUES
(45, '13', '2017-07-06', '20', 'Image/1499336435.jpg', ''),
(46, '13', '2017-07-06', '32', 'Image/1499337146.jpg', ''),
(47, 'Vladimir', '2017-07-06', ' GOVORIT', 'Image/1499362398.jpg', ''),
(50, '20', '2017-07-06', '36', 'Image/1499362591.jpg', ''),
(51, 'lora', '2017-07-06', 'hi', 'Image/1499362639.jpg', ''),
(52, '18', '2017-07-07', '10', 'Image/1499440213.jpg', ''),
(53, '1111', '2017-07-07', '2222', 'Image/1499440253.jpg', ''),
(54, '555', '2017-07-07', '666', 'Image/1499440268.jpg', ''),
(65, '21', '2017-07-07', '15', '', '1499451350.doc'),
(67, '21', '2017-07-07', '19', '', '1499451547.doc');

-- --------------------------------------------------------

--
-- Структура таблицы `wall2`
--

CREATE TABLE `wall2` (
  `ID` int(20) UNSIGNED NOT NULL,
  `R1` int(11) NOT NULL,
  `R2` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wall2`
--

INSERT INTO `wall2` (`ID`, `R1`, `R2`, `Name`) VALUES
(1, 1, 0, 'Главная'),
(2, 1, 1, 'История'),
(3, 1, 2, 'Руководство'),
(4, 2, 0, 'Статьи'),
(5, 3, 0, 'О компании'),
(6, 3, 1, 'Контакты'),
(7, 3, 2, 'Вакансии');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `wall`
--
ALTER TABLE `wall`
  ADD PRIMARY KEY (`Number`);

--
-- Индексы таблицы `wall2`
--
ALTER TABLE `wall2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `wall`
--
ALTER TABLE `wall`
  MODIFY `Number` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT для таблицы `wall2`
--
ALTER TABLE `wall2`
  MODIFY `ID` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
