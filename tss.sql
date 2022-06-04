-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 21 2022 г., 11:40
-- Версия сервера: 10.5.11-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tss`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `ID_category` int(11) NOT NULL COMMENT 'ID_категории',
  `Category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Наименование_категории',
  `Sorting_number` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`ID_category`, `Category_name`, `Sorting_number`) VALUES
(1, 'Фильтры и масла', 2),
(2, 'Кузов', 3),
(3, 'Двигатель', 4),
(4, 'Электрика', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `ID_order` int(11) NOT NULL COMMENT 'ID_заказа',
  `products` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp(),
  `ID_user` int(11) NOT NULL COMMENT 'ID_пользователя',
  `status` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`ID_order`, `products`, `date_order`, `ID_user`, `status`) VALUES
(1, '{\"42\":1,\"74\":1,\"1\":5,\"2\":1,\"3\":5,\"4\":1,\"5\":5,\"6\":1,\"7\":1,\"8\":5,\"9\":6,\"22\":5,\"23\":1,\"24\":1}', '2020-06-08 12:46:14', 2, '4'),
(2, '{\"81\":1}', '2022-02-16 10:03:57', 8, '0'),
(3, '{\"81\":1}', '2022-02-18 15:02:10', 8, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `ID_product` int(11) NOT NULL COMMENT 'ID_товара',
  `ID_type` int(11) NOT NULL COMMENT 'ID_вида',
  `model` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Наименование',
  `sovmes` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Совместимость',
  `proizv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Производитель',
  `datap` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Дата производства, год',
  `info` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Информация',
  `price` double NOT NULL COMMENT 'Цена за шт.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`ID_product`, `ID_type`, `model`, `sovmes`, `proizv`, `datap`, `info`, `price`) VALUES
(1, 1, 'ПК 72-12-8 AтVт', '7180', '1190', '220', '1.88', 14100),
(2, 1, 'ПК 71-12-8 AтVт', '7080', '1190', '220', '1.85', 12800),
(3, 1, 'ПК 66-12-8 AтVт', '6580', '1190', '220', '1.72', 12200),
(4, 1, 'ПК 63-12-8 AтVт', '6280', '1190', '220', '1.63', 10300),
(5, 1, 'ПК 61-12-8 AтVт', '6080', '1190', '220', '1.59', 10100),
(6, 1, 'ПК 60-12-8 AтVт', '5980', '1190', '220', '1.57', 9500),
(7, 1, 'ПК 58-12-8 AтVт', '5780', '1190', '220', '1.51', 11500),
(8, 1, 'ПК 57-12-8 AтVт', '5680', '1190', '220', '1.5', 9900),
(9, 1, 'ПК 54-12-8 AтVт', '5380', '1190', '220', '1.4', 9500),
(10, 1, 'ПК 52-12-8 AтVт', '5180', '1190', '220', '1.36', 8400),
(11, 1, 'ПК 51-12-8 AтVт', '5080', '1190', '220', '1.32', 9100),
(12, 1, 'ПК 48-12-8 AтVт', '4780', '1190', '220', '1.24', 8600),
(13, 1, 'ПК 45-12-8 AтVт', '4480', '1190', '220', '1.15', 7500),
(14, 2, 'ФБС 8-5-6т', '780', '500', '580', '0.23', 4250),
(15, 2, 'ФБС 8-6-6т', '780', '600', '580', '0.28', 4500),
(16, 2, 'ФБС 9-3-6т', '880', '300', '580', '0.146', 4100),
(17, 2, 'ФБС 9-4-6т', '880', '400', '580', '0.195', 4400),
(18, 2, 'ФБС 9-6-6т', '880', '500', '580', '0.244', 5100),
(19, 2, 'ФБС 12-4-3т', '1180', '600', '580', '0.293', 5900),
(20, 7, 'П 5-5и', 'LADA Granta/Xray/Vesta/Largus', 'Osram', '2021', 'Цокольная лампа накаливания', 1000),
(21, 7, '64181L', 'LADA Niva Legend/Travel', 'Philips', '2020', 'H19', 1200),
(22, 3, 'СТ 35-12', '3500', '120', '120', '0.05', 1555),
(23, 3, 'СТ 50-12', '5000', '120', '120', '0.072', 1700),
(24, 3, 'СТ 35-12', '3500', '120', '150', '16.7', 1700),
(25, 4, 'ПП 10-2и', '1160', '1160', '150', '0.15', 2600),
(26, 4, '1 ПП 15-2и', '1680', '1680', '150', '0.36', 3400),
(27, 5, 'КС 10-9', '1160', '80', '890', '0.24', 1600),
(28, 5, 'КС 10-9', '1600', '80', '990', '0.45', 1000),
(29, 6, '1Ф 12-7-5', '1200', '700', '450', '0.233', 1990),
(30, 25, 'П 3-30', '2990', '100', '1500', '0.3', 7120),
(31, 23, '1ЛМ 27-11-14-4', '2720', '1050', '254', '0.531', 6483),
(32, 23, '1ЛМ 27-12-14-4', '2720', '1200', '254', '0.607', 6640),
(45, 14, 'С-8', 'LADA Granta', 'Elring', '2020', 'Со стороны коробки передач, 80 мм', 200),
(46, 15, 'БР 100-30-15', '1000', '300', '150', '0.043', 2300),
(47, 15, 'БР 150-30-18', '1500', '300', '180', '0.076', 2500),
(48, 16, 'ПМ-1', '1000', '1000', '100', '0.1', 2700),
(49, 17, '6 К-7', '500', '500', '70', '0.018', 2450),
(50, 17, 'ПТ-50', '500', '500', '50', '0.015', 2400),
(51, 18, 'ПЖБ 1.5-3', '3000', '1470', '170', '0.9', 4500),
(52, 19, '1П 30.18-30', '3000', '1750', '170', '0.88', 3300),
(53, 24, 'ПДН АтV-40', '6000', '2000', '140', '1.68', 16550),
(54, 24, 'ПДН АтV-55', '6000', '2000', '140', '1.68', 16550),
(55, 24, 'ПАГ-14V', '6000', '2000', '140', '1.68', 16550),
(56, 8, 'Л 4-8', 'LADA Granta/Xray/Vesta/Largus/Niva Legend/Travel', 'Narva', '2020', 'W5W, 12B', 1890),
(58, 9, '12LLC1', 'LADA Granta/Largus', 'Osram', '2021', 'H19 12B', 1490),
(59, 9, 'L12RT', 'LADA Xray/Vesta', 'Philips', '2020', 'H19 10B', 1120),
(60, 9, 'CL456H', 'LADA Niva Travel/Legend', 'IO', '2021', 'H19 12B', 1500),
(62, 10, 'ZP312', 'LADA Granta/Largus', 'Philips', '2020', 'P21W', 2300),
(63, 10, 'HT-729', 'LADA Xray/Vesta', 'Bosh', '2021', 'P23W', 1990),
(64, 10, 'ПТ 30-1а', 'LADA Niva Travel/Legend', 'Osram', '2020', 'P10W', 1800),
(65, 11, 'N245', 'LADA Granta/Largus', 'Narva', '2021', 'R10W', 1000),
(66, 11, 'СВ 95-3.5', 'LADA Xray/Vesta', '185/175', '2020', 'R12W', 1200),
(67, 11, '5008ULT', 'LADA Niva Travel/Legend', 'Neolux', '2021', 'R15w', 900),
(70, 12, 'N382', 'LADA Granta/Largus', 'Neolux', '2020', 'P21W', 1400),
(71, 12, 'С 35-1-8 Нр', 'LADA Xray/Vesta', 'Philips', '2021', 'P22W', 1500),
(72, 12, '750ULT-02B', 'LADA Niva Travel/Legend', 'Osram', '2021', 'P21W', 1300),
(74, 20, 'MANN-34-56', 'LADA Granta', 'MANN', '2020', 'Фильтр- патрон', 1500),
(75, 21, 'GTX Syn Blend', 'LADA Granta', 'Castrol', '2020', ' Полусинтетическое, 5W-50, 4 л', 3000),
(76, 22, 'OP 520/1', 'LADA Granta', 'Bosh', '2020', 'Накручиваемый фильтр', 2000),
(77, 22, 'УБО 1220', 'LADA Xray/Vesta', 'MANN', '2021', 'Накручиваемый фильтр', 1500),
(78, 22, 'OS 384', 'LADA Largus', 'Mahle', '2020', 'Накручиваемый фильтр', 1400),
(79, 22, 'W 914/2', 'LADA Niva Legend', 'Malo', '2021', 'Накручиваемый фильтр', 2100),
(80, 22, 'LS285', 'LADA Niva Travel', 'Purflux', '2020', 'Накручиваемый фильтр', 1100),
(81, 20, 'F-AP 006', 'LADA Xray/Vesta', 'Filtron', '2021', 'Фильтр- патрон', 1234),
(82, 20, 'CA3399', 'LADA Largus', 'Fram', '2021', 'Фильтр- патрон', 1346),
(83, 20, 'A-2412K', 'LADA Niva Legend', 'Sakura', '2019', 'Фильтр- патрон', 1100),
(84, 20, 'S 0730 A', 'LADA Niva Travel', 'Sofima', '2020', 'Фильтр- патрон', 1469),
(85, 21, 'EDGE Syntec', 'LADA Xray/Vesta', 'G-Drive', '2021', 'Синтетическое, 5W-50, 4 л', 3200),
(86, 21, 'Power 1R4T', 'LADA Largus', 'Shell Helix', '2021', 'Синтетическое, 20W-50, 4л ', 2900),
(87, 21, 'UN 2T SEMI-SYNT', 'LADA Niva Legend', 'Amsoil', '2021', 'Полусинтетическое, 5W-50, 4 л', 3100),
(88, 21, '2 Stroke Engine', 'LADA Niva Travel', 'Avista', '2020', 'Синтетическое, 5W-30, 4л ', 2899);

-- --------------------------------------------------------

--
-- Структура таблицы `type_product`
--

CREATE TABLE `type_product` (
  `ID_type` int(11) NOT NULL COMMENT 'ID_вида',
  `ID_category` int(11) NOT NULL COMMENT 'ID_категории',
  `Naimenovanie_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Наименоваание_вида'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `type_product`
--

INSERT INTO `type_product` (`ID_type`, `ID_category`, `Naimenovanie_type`) VALUES
(1, 4, 'Датчик кислородный( лямбда- зонд)'),
(2, 4, 'Датчик частоты вращения колеса'),
(3, 4, 'Датчик температуры топлива'),
(4, 4, 'Датчик температуры системы кондиционирования'),
(5, 4, 'Датчик температуры охлаждающей жидкости'),
(6, 4, 'Датчик температуры'),
(7, 2, 'Лампа основной фары'),
(8, 2, 'Лампа освещения номерного знака '),
(9, 2, 'Лампа дальнего света'),
(10, 2, 'Лампа задней противотуманной фары'),
(11, 2, 'Лампа заднего габаритного освещения'),
(12, 2, 'Лампа сигнала торможения'),
(14, 3, 'Сальник коленвала'),
(15, 3, 'Маслосъемный колпачок'),
(16, 3, 'Опора двигателя'),
(17, 3, 'Ремень ГРМ'),
(18, 3, 'Расходомер воздуха'),
(19, 3, 'Ремень поликлиновой'),
(20, 1, 'Воздушные фильтры'),
(21, 1, 'Моторные масла'),
(22, 1, 'Масляные фильтры'),
(23, 4, 'Датчик детонации'),
(24, 3, 'Сальник распред. вала'),
(25, 4, 'Стартерная аккумуляторная батарея');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID_user` int(11) NOT NULL COMMENT 'ID_пользователя',
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'login || Эл. почта',
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Пароль',
  `rights` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'address',
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID_user`, `email`, `password`, `rights`, `address`, `name`, `phone`) VALUES
(1, '123789.z5@gmail.com', '3b0ab97de3245aac2d56c0b2169b6e31', 'a', 'Арзамас, ул. Мира, дом 4', 'Пупкова Алина Дмитриевна', '8 (910) 132 02 32'),
(2, 'admin.zavod@gmail.com', 'c5382dbb5490ecd8742c6d5f9c893691', 'a', 'не указан', 'Марина Егорова', '8 (915) 154 02 32'),
(3, 'alisa.tzar@ya.ru', '086e1b7e1c12ba37cd473670b3a15214', 'p', 'не указан', 'Алина Пупкова', 'не указан'),
(4, 'voron_black@ya.ru', '086e1b7e1c12ba37cd473670b3a15214', 'p', 'не указан', 'Михаил Ванеев', 'не указан'),
(5, 'pavel@ya.ru', '086e1b7e1c12ba37cd473670b3a15214', 'p', 'не указан', 'Павел Миронов', 'не указан'),
(6, 'red_orange@ya.ru', '086e1b7e1c12ba37cd473670b3a15214', 'p', 'не указан', 'Апельсин Красный', 'не указан'),
(7, 'tomoyuki-chan@mail.ru', '086e1b7e1c12ba37cd473670b3a15214', 'p', 'не указан', 'Зейнаб', 'не указан'),
(8, 'danilsan4321@gmail.com', 'be5b63fb7743ab46cad313884beb548c', 'a', 'Арзамас, Архитектурная 2а', 'Данила Санаткин', '8 (909) 295 06 61'),
(9, 'eriador1@mail.ru', '6ebaa0faa83a448419aacbfcb0e45bf1', 'p', 'Арзамас', 'Павел Андреевич Дёмин', '8 (098) 909 09 09');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_category`),
  ADD KEY `Naimenovanie_kategorii` (`Category_name`) USING BTREE,
  ADD KEY `sorting_number` (`Sorting_number`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID_order`),
  ADD KEY `ID_user` (`ID_user`),
  ADD KEY `date` (`date_order`),
  ADD KEY `status` (`status`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID_product`),
  ADD KEY `id_type_index` (`ID_type`),
  ADD KEY `Naimenovanie` (`model`),
  ADD KEY `Dlina` (`sovmes`),
  ADD KEY `Vysota` (`datap`),
  ADD KEY `Shirina` (`proizv`),
  ADD KEY `product_volume` (`info`),
  ADD KEY `prise` (`price`);

--
-- Индексы таблицы `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`ID_type`),
  ADD KEY `ID_kategorii` (`ID_category`),
  ADD KEY `Naimenovanie_vida` (`Naimenovanie_type`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `password` (`password`),
  ADD KEY `rights` (`rights`),
  ADD KEY `address` (`address`),
  ADD KEY `phone` (`phone`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `ID_category` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID_категории', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `ID_order` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID_заказа', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `ID_product` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID_товара', AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT для таблицы `type_product`
--
ALTER TABLE `type_product`
  MODIFY `ID_type` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID_вида', AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID_пользователя', AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `users` (`ID_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`ID_type`) REFERENCES `type_product` (`ID_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `type_product`
--
ALTER TABLE `type_product`
  ADD CONSTRAINT `type_product_ibfk_1` FOREIGN KEY (`ID_category`) REFERENCES `category` (`ID_category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
