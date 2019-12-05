-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 04 2019 г., 20:29
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tz_thechnodom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `SPU` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `type` enum('1','2','3') NOT NULL,
  `characters` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `SPU`, `name`, `price`, `type`, `characters`) VALUES
(29, 'JVC200123', 'Acme DISC', 100, '1', '700'),
(30, 'JVC200123', 'Acme DISC', 100, '1', '700'),
(31, 'JVC200123', 'Acme DISC', 100, '1', '700'),
(32, 'JVC200123', 'Acme DISC', 100, '1', '700'),
(33, 'GGWP0007', 'Wor and Peace', 2000, '2', '2'),
(34, 'GGWP0007', 'Wor and Peace', 2000, '2', '2'),
(35, 'GGWP0007', 'Wor and Peace', 2000, '2', '2'),
(36, 'GGWP0007', 'Wor and Peace', 2000, '2', '2'),
(37, 'TR120555', 'Chair', 4000, '3', '24x45x15'),
(38, 'TR120555', 'Chair', 4000, '3', '24x45x15'),
(39, 'TR120555', 'Chair', 4000, '3', '24x45x15'),
(40, 'TR120555', 'Chair', 40, '3', '24x45x15');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
