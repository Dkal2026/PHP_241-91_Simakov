-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 23 2026 г., 10:17
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `basedata`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `author_id`, `name`, `text`, `created_at`) VALUES
(1, 1, ' Статья №1a', ' Можно взять что-то вроде Lorem Ipsum', '2026-05-12 11:37:20');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `text` varchar(256) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `article_id`, `text`, `created_at`) VALUES
(23, 6, 1, 'test', '2026-06-18');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nickname` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `role` enum('admin','user') NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `auth_token` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `nickname`, `email`, `is_confirmed`, `role`, `password_hash`, `auth_token`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', 1, 'admin', 'hash1', 'token1', '2026-05-12 11:36:15'),
(2, 'user', 'user@gmail.com', 1, 'user', 'hash2', 'token2', '2026-05-12 11:36:15'),
(3, 'sdsd', 'sdsds@sdsd.ds', 0, 'user', '$2y$10$//hmIWYaLzpclh/W0mAkueFSgI5yl9Hu4wDLABzchUFf3dpiCg/6G', 'd23766fef5f9b624b67f5b1bc064634d256bc66d9bf099eede95860235c23a507f33c3a6ab3d8751', '2026-06-15 09:36:24'),
(4, 'as', 'as@as.as', 0, 'user', '$2y$10$kbmQS9gT9/jBZMtc0zRpOumtOE0Yhgafn7yK6Av3WzlEZvzHeECFG', 'bf4b8e5524acf375624156acd44ad1c9ee48ad5e2e9de536e612c70325c0124be21d92bbeff68902', '2026-06-15 09:53:03'),
(5, 'sd', 'sd@sd.com', 0, 'user', '$2y$10$H3DA5c4jDzDBPvEZecOUquYkr/7o9SebqGYFgFjTyVO0jTQlFVDu6', 'c100fe0e1540bca7a0f6b33286954f4af0ea20123b19d3f944af653a8cdf9a8d995c86bd8ae0b543', '2026-06-15 09:57:36'),
(6, 'asas', 'as@as.com', 1, 'user', '$2y$10$.8so0goyXMijunrgoA9gw.EyIe49XsG7flTjCS08Z8DPmikk4ttdm', '4b667672a529550b0b1da8d5c4a3d808361a307e16e0721f381284ad4cfa275b8f5c4ea876ddec7d', '2026-06-15 10:11:10'),
(7, 'fgfgf', 'fgf@dfdfd.df', 1, 'user', '$2y$10$f8YiLEHmc5Z1nFW30ZUwheiYptLj9bK7f7OTj9mG0cM/Ry5qb82ki', '6896929e95535ce9df787ddc3c12c404099cdc70c6861ca81965781f07c46d1af99f3f81917faf91', '2026-06-15 10:25:43');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nickname` (`nickname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
