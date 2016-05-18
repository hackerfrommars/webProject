-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 18 2016 г., 10:18
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `finalProject`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `postId` int(5) NOT NULL,
  `timeline` datetime NOT NULL,
  `score` int(5) NOT NULL,
  `family` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `uid`, `url`) VALUES
(9, 6, 'images/6_1_image.jpg'),
(10, 6, 'images/6_2_image.jpg'),
(11, 1, 'images/1_1_image.jpg'),
(12, 4, 'images/4_1_image.jpg'),
(13, 4, 'images/4_2_image.jpg'),
(14, 6, 'images/6_3_image.jpg'),
(15, 6, 'images/6_4_image.jpg'),
(16, 4, 'images/4_3_image.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `score` int(5) NOT NULL,
  `timeline` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hidden` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `uid`, `title`, `url`, `score`, `timeline`, `hidden`) VALUES
(1, 1, 'SpaceX is planning to go to mars till 2018', 'www.space.com/28215-elon-musk-spacex-mars-colony-idea.html', 3, '2016-05-05 08:34:00', 0),
(2, 2, 'Nine years of cencorship', 'www.nature.com/news/nine-years-of-censorship-1.19842', 2, '2016-05-05 08:33:54', 0),
(3, 3, 'The impact of index investing', 'http://www.philosophicaleconomics.com/2016/05/followup/', 4, '2016-05-05 08:33:39', 0),
(4, 3, 'Yess all Drm', 'www.eff.org/deeplinks/2016/05/yes-all-drm', 10, '2016-05-05 08:33:33', 0),
(5, 2, 'I wrote the small piece of planned death', 'http://hintjens.com/blog:116', 9, '2016-05-05 08:33:43', 0),
(6, 1, 'Introducing docs.microsoft.com', 'docs.microsoft.com/teamblog/introducing-docs-microsoft-com/', 78, '2016-05-05 08:33:49', 0),
(7, 1, 'hello', 'google.com', 0, '2016-05-12 16:15:55', 0),
(8, 1, 'Google has new website', 'google.kz', 0, '2016-05-13 14:32:15', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `about` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `about`, `password`, `created`, `isAdmin`, `banned`) VALUES
(1, 'first', 'first@gmail.com', 'I am the first user of this website', 'first123', '0000-00-00 00:00:00', 0, 0),
(2, 'second', 'second@gmail.com', 'second one', 'second', '0000-00-00 00:00:00', 0, 0),
(3, 'third', 'third@gmail.com', 'third one', 'third123', '2016-05-04 16:01:38', 0, 0),
(4, 'admin', 'admin@gmail.com', 'I am an admin of this website', 'admin123', '2016-05-05 11:09:59', 1, 0),
(5, 'kane123', 'kane_dominic@gmail.com', 'my name is Kane. I am an engineer', 'kanedom', '2016-05-05 11:16:12', 0, 0),
(6, 'akerke123', 'akerke123@gmail.com', 'Akerke', 'akerke123', '2016-05-13 14:31:13', 0, 0),
(7, 'madi123', 'madi123@gmail.com', 'Madi', 'madimadi', '2016-05-13 15:32:10', 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
