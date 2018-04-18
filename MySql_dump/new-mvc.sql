-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 18 2018 г., 13:56
-- Версия сервера: 5.7.21-0ubuntu0.16.04.1
-- Версия PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new-mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `banners_mvc`
--

CREATE TABLE `banners_mvc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pictures` varchar(255) NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `banners_mvc`
--

INSERT INTO `banners_mvc` (`id`, `name`, `pictures`, `height`, `width`, `url`, `status`, `position`) VALUES
(1, 'test_one1', 'admin/uploud/2.jpg', 400, 1000, 'https://www.google.com.ua/', 1, 1),
(2, 'test_two2', 'admin/uploud/20.jpg', 400, 1000, 'https://www.google.com.ua/', 1, 2),
(3, 'four44', 'admin/uploud/27.jpg\r\n', 400, 1000, 'https://www.google.com.ua/', 1, 3),
(4, 'sixone', 'admin/uploud/6.jpg', 400, 1000, 'https://www.google.com.ua/', 1, 5),
(5, 'prov', 'admin/uploud/26.jpg', 400, 1000, 'https://www.google.com.ua/', 1, 8),
(6, 'prowww22', 'admin/uploud/10.jpg', 400, 1000, 'https://www.google.com.ua/', 1, 22),
(7, 'testing22', 'admin/uploud/21.jpg', 400, 1000, 'https://www.google.com.ua/', 1, 20),
(8, 'testing23', 'admin/uploud/11.jpg', 400, 1000, 'https://www.google.com.ua/', 1, 24),
(9, 'test44', 'admin/uploud/18.jpg', 400, 1000, 'https://www.google.com.ua/', 1, 25),
(10, 'prow5', 'admin/uploud/24.jpg', 400, 1000, 'https://www.google.com.ua/', 1, 32),
(11, 'prow6', 'admin/uploud/14.jpg', 400, 1000, 'https://www.google.com.ua/', 1, 26),
(12, 'new_baner_p2', 'admin/uploud/15.jpg\r\n', 400, 1000, 'https://www.google.com.ua/', 1, 27),
(13, 'new_baner_p32', 'admin/uploud/16.jpg', 400, 1000, 'https://www.google.com.ua/', 1, 28),
(14, 'new_baner_panorama', 'admin/uploud/29.jpg', 400, 1000, 'https://www.google.com.ua/', 1, 33),
(15, 'new_baner_panorama_2', 'admin/uploud/1.jpg', 400, 1000, 'https://www.google.com.ua/', 1, 34),
(17, 'новый_банер_35', 'admin/uploud/31.jpg', 400, 1000, 'https://www.google.com.ua/', 1, 35);

-- --------------------------------------------------------

--
-- Структура таблицы `user_mvc`
--

CREATE TABLE `user_mvc` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_mvc`
--

INSERT INTO `user_mvc` (`id`, `login`, `pass`) VALUES
(1, 'superadmin', '123456'),
(2, 'admin', '456789');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `banners_mvc`
--
ALTER TABLE `banners_mvc`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_mvc`
--
ALTER TABLE `user_mvc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `banners_mvc`
--
ALTER TABLE `banners_mvc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `user_mvc`
--
ALTER TABLE `user_mvc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
