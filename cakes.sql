-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 07 2016 г., 01:01
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cakes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `all_product`
--

CREATE TABLE `all_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `kg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `all_product`
--

INSERT INTO `all_product` (`id`, `name`, `price`, `img`, `kg`) VALUES
(21, 'Praga', 5950, 'cat_mastik.jpg', '5.2'),
(22, 'Praga', 5950, 'cat_party.jpg', '2.8'),
(23, 'My Cake', 9550, 'for_everyday_cake.jpg', '3.4'),
(24, 'Hits', 12500, 'cat_wedding.jpg', '4.5'),
(25, 'Автомобилькин', 5000, 'car-cake.jpg', '1.5'),
(26, 'Из Антарктиды', 12500, 'pingvin.jpg', '2.4'),
(27, 'Циркачи', 9500, 'circus.jpg', '3.1'),
(28, 'Сказочный замок', 15500, 'skazochniy-zamok.jpg', '5.1');

-- --------------------------------------------------------

--
-- Структура таблицы `baby_cake`
--

CREATE TABLE `baby_cake` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `kg` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `baby_cake`
--

INSERT INTO `baby_cake` (`id`, `name`, `description`, `price`, `kg`, `img`) VALUES
(15, 'New', 'Akkk Kaaa', 2222, '10', 'car-cake1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `call_back_data`
--

CREATE TABLE `call_back_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `every_day_cake`
--

CREATE TABLE `every_day_cake` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `kg` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `gala_cake`
--

CREATE TABLE `gala_cake` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `kg` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `my_order`
--

CREATE TABLE `my_order` (
  `id` int(11) NOT NULL,
  `cake_id` int(11) NOT NULL,
  `order_tel_number` int(11) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Дамп данных таблицы `my_order`
--

INSERT INTO `my_order` (`id`, `cake_id`, `order_tel_number`, `created_at`, `amount_cake`, `cake_weight`, `addres_order`, `table_name`) VALUES
(27, 23, 0, '2016-09-06 22:58:11.517811', 1, 2, '', ''),
(28, 15, 0, '2016-09-06 22:59:44.691576', 1, 2, '', 'baby_cake');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wedding_cake`
--

CREATE TABLE `wedding_cake` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `kg` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `all_product`
--
ALTER TABLE `all_product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `baby_cake`
--
ALTER TABLE `baby_cake`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `call_back_data`
--
ALTER TABLE `call_back_data`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `every_day_cake`
--
ALTER TABLE `every_day_cake`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gala_cake`
--
ALTER TABLE `gala_cake`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wedding_cake`
--
ALTER TABLE `wedding_cake`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `all_product`
--
ALTER TABLE `all_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT для таблицы `baby_cake`
--
ALTER TABLE `baby_cake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `call_back_data`
--
ALTER TABLE `call_back_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблицы `every_day_cake`
--
ALTER TABLE `every_day_cake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `gala_cake`
--
ALTER TABLE `gala_cake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `my_order`
--
ALTER TABLE `my_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wedding_cake`
--
ALTER TABLE `wedding_cake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
