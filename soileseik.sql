-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 19 2016 г., 17:43
-- Версия сервера: 5.5.39
-- Версия PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `soileseik`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id1` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `mes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id1`, `id2`, `mes`) VALUES
(16, 2, 'a:1:{i:0;s:25:"<p>kamila: hjdgcjhgdc</p>";}'),
(2, 16, 'a:1:{i:0;s:25:"<p>kamila: hjdgcjhgdc</p>";}'),
(1, 3, 'a:1:{i:0;s:21:"<p>Anuarbek: 7985</p>";}'),
(3, 1, 'a:1:{i:0;s:21:"<p>Anuarbek: 7985</p>";}'),
(1, 9, 'a:1:{i:0;s:19:"<p>Anuarbek: nk</p>";}'),
(9, 1, 'a:1:{i:0;s:19:"<p>Anuarbek: nk</p>";}');

-- --------------------------------------------------------

--
-- Структура таблицы `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id1` int(6) NOT NULL,
  `id2` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `request`
--

INSERT INTO `request` (`id1`, `id2`) VALUES
(16, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `univer` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `spec` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `status` varchar(30) NOT NULL,
  `about` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `login`, `password`, `univer`, `faculty`, `spec`, `city`, `gender`, `age`, `status`, `about`, `image`) VALUES
(1, 'Anuarbek', 'Zak', 'Anuarbek', '123', 'SD', 'Engeneering', 'Speciality', '', '', 0, '', '', 'SdwtwXzFgkk.jpg'),
(2, 'Anuarbek1', 'lsakdf;sldkf', 'dklfjlskdj', 'sdlfk;sdlfk', '', '', '', '', '', 0, '', 'llygvbhu', 'user.png'),
(3, 'Mama', 'Zak', 'Mama', '123', '', '', '', '', '', 0, '', 'Ñ„', '6j49zrnLdBw.jpg'),
(5, 'Erken', 'Zak', 'Papa', '123', '', '', '', '', '', 0, '', 'sadfdf', 'user.png'),
(6, 'Rasul', 'Kas', 'Rasul', '123', '', '', '', '', '', 0, '', '9 Rasul', 'user.png'),
(7, 'Tom', 'Riddle', 'nazarbayev_nursultan@sam_sobak', 'voldemort', 'Hogwarts', 'Slytherin', 'Dark lord', '', '', 19, 'Ð’ Ð°ÐºÑ‚Ð¸Ð²Ð½Ð¾Ð¼ Ð¿Ð¾Ð¸ÑÐº', 'ÐœÐ°Ñ‚ÑŒ ÑƒÐ¼ÐµÑ€Ð»Ð° Ð¿Ñ€Ð¸ Ñ€Ð¾Ð´Ð°Ñ…. ÐžÑ‚ÐµÑ† Ð¼Ð°Ð³Ð». Ð›Ð¸Ð´ÐµÑ€ Ð³Ñ€ÑƒÐ¿Ð¿Ð¸Ñ€Ð¾Ð²ÐºÐ¸ "ÐŸÐ¾Ð¶Ð¸Ñ€Ð°Ñ‚ÐµÐ»Ð¸ ÑÐ¼ÐµÑ€Ñ‚Ð¸". Ð›ÑŽÐ±Ð¸Ð¼Ð¾Ðµ Ð·Ð°ÐºÐ»ÑÑ‚Ð¸Ðµ - "avada kedavra". Ð¡Ð²Ð¾Ð±Ð¾Ð´Ð½Ð¾Ðµ Ð²Ñ€ÐµÐ¼Ñ Ð¿Ñ€Ð¾Ð²Ð¾Ð¶Ñƒ Ð² Ð¸Ð¼Ð¸Ñ‚Ð°Ñ†Ð¸ÑÑ… Ð¿Ð¾Ð¿Ñ‹Ñ‚Ð¾Ðº Ð¿Ñ€Ð¸ÐºÐ¾Ð½Ñ‡Ð¸Ñ‚ÑŒ Ð“Ð°Ñ€Ñ€Ð¸ ÐŸÐ¾Ñ‚Ñ‚ÐµÑ€Ð°.', 'user.png'),
(8, 'Ð–Ð°Ð½ÑÐ°Ñ', 'Ð—Ð°Ðº', 'Ð–Ð°Ð½ÑÐ°Ñ', '123', '', '', '', '', 'Ð–ÐµÐ½ÑÐº', 0, '', '', 'user.png'),
(9, 'NurBOL', 'Jal', 'Nurbol', '123', 'Ð¡Ð”Ð£', 'Ð˜ÐÐ–Ð˜Ð Ð½Ñ‹Ð¹', 'ÐŸÐ ÐžÐ“Ð ÐžÐœÐ˜Ð¡Ð¢', '', '', 19, '', 'Ð¯ ÐÑƒÑ€Ð‘ÐžÐ›Ð¬', 'user.png'),
(10, 'Tore', 'Maratov', 'tore.maratov@gmail.com', 'toresoileseik', 'SDU', 'Engeneering', 'CS', 'ÐÐ»Ð¼Ð°Ñ‚Ñ‹', 'ÐœÑƒÐ¶ÑÐº', 20, 'Ð£Ñ‡ÑƒÑÑŒ', 'Idite nahui zaebai', '6j49zrnLdBw.jpg'),
(11, 'Serik', 'Almakhan', 'serik@mail.ru', 'As123321', 'sdu', 'eng', 'endg', 'ÐÐ»Ð¼Ð°Ñ‚Ñ‹', 'ÐœÑƒÐ¶ÑÐº', 18, 'Ð’ Ð°ÐºÑ‚Ð¸Ð²Ð½Ð¾Ð¼ Ð¿Ð¾Ð¸ÑÐº', 'salamaleikum', 'user.png'),
(16, 'kamila', 'kusainova', 'Kami@gmail.com', '123456789', 'frr', '', '', '', '', 0, '', '', 'sdsh47WWM5c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
