-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 23 2022 г., 07:07
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web_5`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `firstname` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(128) NOT NULL DEFAULT '',
  `bdate` date NOT NULL,
  `sex` varchar(5) NOT NULL DEFAULT '0',
  `amount` int NOT NULL DEFAULT '0',
  `ability` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `bio` varchar(500) NOT NULL DEFAULT '',
  `login` varchar(128) NOT NULL DEFAULT '',
  `pass` varchar(128) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `email`, `bdate`, `sex`, `amount`, `ability`, `bio`, `login`, `pass`) VALUES
(11, 'aaaaaaaaaaaaaa', 'devilmahiru@gmail.com', '2022-06-03', 'Жен', 1, 'бессмертие', 'Расскажите о себе', 'zeUivgmq', '123'),
(12, 'Sonya', 'devilmahiru@gmail.com', '2022-06-03', 'Муж', 1, 'бессмертие', 'Расскажите о себе111', 'ItuukWae', 'b86e19b740671bd2b5df0ccdd998496a'),
(18, 'Sonya1', 'devilmahiru@gmail.com', '2022-06-03', 'Муж', 1, 'бессмертие', '11112', 'HkH7UXSN', '0a40c8f9f961dcb34c288f1327f28cfd'),
(19, 'Son', 'devilmahiru@gmail.com', '2022-06-03', 'Муж', 1, 'бессмертие', '11112', 'bhGk6qvV', '8907acf12c00c67b4fab396b761fbf3f'),
(22, 'Son', 'devilmahiru@gmail.com', '2022-06-03', 'Муж', 1, 'прохождение сквозь стены', '11112', 'ZsOI7hMy', '390ba8a24209fbf1dc7d4adbbb7fb742'),
(23, 'Son', 'devilmahiru@gmail.com', '2022-06-03', 'Муж', 1, 'бессмертие', '11', 'HI4tfzsj', 'bd02e9a90418c4f0ca784cd90cbf01d9'),
(24, 'Son8', 'devilmahiru@gmail.com', '2022-06-03', 'Муж', 1, 'бессмертие', '11', 'wOpIZNnD', '4547019b0c8606812ece33c6d2608366'),
(25, 'Nastya', 'devilmahiru@gmail.com', '2022-06-03', 'Муж', 1, 'бессмертие', 'I am Nastya', 'q6WnTMD7', 'ac436c25a9e68db47a5cfb4387e16154'),
(26, 'Nastya', 'devilmahiru@gmail.com', '2022-06-03', 'Муж', 1, 'бессмертие', 'I am Nastya', 'oEv8jhll', 'b484466d3a65930486c1e8a2172014fc'),
(27, 'Nastya', 'devilmahiru@gmail.com', '2022-06-03', 'Муж', 1, 'бессмертие', 'I am Nastya', '2KX22yrT', '498fdc858ce756e0c2cb3d9efca50089'),
(28, 'Nastya', 'devilmahiru@gmail.com', '2022-06-03', 'Муж', 1, 'бессмертие', 'I am Nastya', 'zPg0r28G', '94e188066782995a013420bf5a0b15ea'),
(29, 'Nastya', 'devilmahiru@gmail.com', '2022-06-03', 'Муж', 1, 'бессмертие', 'I am Nastya', 'zVTqvKYo', '5b98a71e6c1df4fdfdc0741e8556e7b9'),
(30, 'Nastya', 'devilmahiru@gmail.com', '2022-06-03', 'Муж', 1, 'бессмертие', 'I am Nastya', 'cGB98Zo9', 'c1118264df37bfae51ac78173cde1726'),
(31, 'New', 'noname@gmail.com', '2022-08-02', 'Муж', 1, 'бессмертие', 'I am a new user', 'tQ4Ads3c', '9b39cb77546cf90cb68d162d33aaf3d8'),
(32, 'New', 'noname@gmail.com', '2022-08-02', 'Муж', 1, 'бессмертие', 'I am a new user', 'eYkj4zcb', 'c30c430012d620f4843bab7002db051d'),
(40, 'New', 'noname@g', '2022-08-02', 'Муж', 1, '2', 'I am a new userI am a new userI am a new userI am a new user', 'RkatMmnd', 'e54475c9f016c66a56745b6080fb2096'),
(41, 'New', 'noname@g', '2022-08-02', 'Муж', 1, 'левитация', 'I am a new userI am a new userI am a new userI am a new user', 'za6EsnFW', 'a99b37acbc88dfa73cba3ed4c5172e65'),
(46, 'ff', 'SofiaT@gmail.com', '2002-09-19', 'Муж', 4, 'бессмертие', 'Меня зовут ff и мне 19 лет.', 'BbJwLvZX', 'b17ac1947f82ab622212f0c02c19f040');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
