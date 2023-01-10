-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 10 2023 г., 23:22
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name_category` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name_category`) VALUES
(38, 'Test1'),
(39, 'You field is empty'),
(40, 'Test2'),
(41, 'KamaCoder'),
(42, 'JavaScript');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(3) NOT NULL,
  `comments_post_id` int(3) NOT NULL,
  `comments_author` varchar(255) NOT NULL,
  `comments_email` varchar(255) NOT NULL,
  `comments_content` varchar(255) NOT NULL,
  `comments_status` varchar(255) NOT NULL,
  `comments_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`comments_id`, `comments_post_id`, `comments_author`, `comments_email`, `comments_content`, `comments_status`, `comments_date`) VALUES
(10, 17, 'Kristina', 'kris.kris@gmail.com', 'Kristina Kostika', 'unapprove', '2023-01-04 13:45:17'),
(11, 19, 'admin', 'admin@admin', 'Administrator', 'approved', '2023-01-04 14:51:27'),
(12, 19, 'KamaCoder', 'kamacoder.work@gmail.com', 'Kama privet you are the best poetic man\r\n', 'approved', '2023-01-09 00:20:37'),
(13, 19, 'KamaCoder', 'kamacoder.work@gmail.com', 'Kama privet you are the best poetic man\r\n', 'approved', '2023-01-09 00:20:39'),
(14, 19, 'KamaCoder', 'kamacoder.work@gmail.com', 'One is the best poetic man in the world', 'approved', '2023-01-09 01:10:27'),
(15, 19, 'Admin4ik', 'admin@admin.com', 'Administrators like', 'approved', '2023-01-09 01:10:56'),
(18, 21, 'KamaCoder', 'kamacoder.work@gmail.com', 'askdjhasjkdgaskdhjgas', 'approved', '2023-01-09 01:42:09'),
(19, 21, 'kamACoder', 'akam@akama.com', 'aksdjasd', 'approved', '2023-01-09 02:07:42'),
(20, 22, 'admin', 'admi@admin', 'admin admin comments', 'approved', '2023-01-09 02:40:22');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `creater` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `post_image` text NOT NULL,
  `post_content` longtext NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id_post`, `category_id`, `post_name`, `creater`, `create_date`, `post_image`, `post_content`, `post_tags`, `post_comment`, `post_status`) VALUES
(24, 38, 'Publishing post', 'KamaCoder', '2023-01-09 03:14:11', 'image_2022-12-06_15-24-11.png', 'Post changin need', 'published status post', 0, 'published');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` int(3) NOT NULL,
  `user_login` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_avatar` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `user_login`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_avatar`, `user_role`, `randSalt`, `create_date`) VALUES
(2, 'Kama', 'admin', 'Kama ', 'Coder', 'kama.coder@gmail.com', '', 'admin', '', '2023-01-10 23:20:39');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
