-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 16 2019 г., 14:44
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) DEFAULT NULL,
  `adminname` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin_table`
--

INSERT INTO `admin_table` (`id`, `adminname`, `password`) VALUES
(NULL, 'admin', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `user_tasks`
--

CREATE TABLE `user_tasks` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `task` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_tasks`
--

INSERT INTO `user_tasks` (`id`, `name`, `email`, `task`, `image`, `status`) VALUES
(1, 'Behruz', 'mr.kuziyev@mail.ru', 'adadadadawdadawd', 'application/public/image/sunflower-3616249_1280.jpg', 0),
(2, 'Behruz', 'mr.kuziyev@mail.ru', 'ndahdajdlajdladajdljaldaldja', 'application/public/image/houses-1622066_1280.jpg', 1),
(3, 'jack', 'jack@mail.ru', 'dkd;akwd;ka;dk;awdn.nd,akdhwdljalhdkabd', 'application/public/image/sunflower-3616249_1280.jpg', 0),
(4, 'Laziz', 'Laziz@mail.ru', 'kabkdbkwbdawbdkbwda,wdnwd,a', 'application/public/image/houses-1622066_1280.jpg', 1),
(5, 'Laziz', 'Laziz@mail.ru', 'kabkdbkwbdawbdkbwda,wdnwd,a', 'application/public/image/houses-1622066_1280.jpg', 0),
(6, 'john', 'john@mail.ru', 'dawdadmmvgadjand dawdaw dawd', 'application/public/image/houses-1622066_1280.jpg', 0),
(7, 'ali', 'ali@mail.ru', 'adawdlawdlnadnalw kdldn wkd; w;dk;w kd', 'application/public/image/polar-bear-196318_1280.jpg', 1),
(8, 'Diana', 'diana@mail.ru', 'dlawjdlajwdlahldha ldj al l dla jdl adllj', 'application/public/image/girl-2322901_1280.jpg', 0),
(9, 'anvar', 'anvar@mail.ru', 'lajdlalndladnlandlan dal djljd lajdla', 'application/public/image/houses-1622066_1280.jpg', 0),
(10, 'aziz', 'aziz@mail.ru', 'admlaw jdlaj dl jdlad  adka', 'application/public/image/sunflower-3616249_1280.jpg', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user_tasks`
--
ALTER TABLE `user_tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user_tasks`
--
ALTER TABLE `user_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
