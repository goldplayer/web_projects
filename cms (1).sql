-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 29 2022 г., 00:37
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
(1, 'Test_four'),
(2, 'Porno'),
(13, 'Java'),
(14, 'C++'),
(15, 'C++'),
(16, 'C++'),
(17, 'C++'),
(18, 'C++govno'),
(29, 'KamaDroch'),
(31, 'KamaDroch'),
(32, 'JavaScript'),
(33, 'Procedural PHP'),
(34, 'Test'),
(35, 'Test1'),
(36, 'kamAcoder');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `creater` varchar(255) NOT NULL,
  `create_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id_post`, `category_id`, `post_name`, `creater`, `create_date`, `post_image`, `post_content`, `post_tags`, `post_comment`, `post_status`) VALUES
(1, 1, 'kama cms course teset post ', 'KamaCoderAdmin', '2022-12-22', '', 'asjkdhaskhjdgashjdahjksgdhjgakss', 'kamacoder, java, php, dick', 0, 'draft'),
(2, 1, 'Ukraine Vs RusshaParasha and Putin = Xyilo', 'Admin Adminovich', '2022-12-01', 'screenshot.png', 'Ukraine Vs RusshaParasha and Putin = XyiloUkraine Vs RusshaParasha and Putin = XyiloUkraine Vs RusshaParasha and Putin = XyiloUkraine Vs RusshaParasha and Putin = Xyilo', '', 0, 'draft'),
(4, 3, 'Admin Post', 'kamayoti', '2022-12-29', '8f182ea3520b6d6555d854479a8ee90c.jpg', 'The LEFT JOIN keyword returns all records from the left table (table1), and the matching records from the right table (table2). The result is 0 records from the right side, if there is no match.', 'admin_post', 4, 'draft');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
