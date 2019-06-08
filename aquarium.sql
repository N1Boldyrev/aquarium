-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 08 2019 г., 12:02
-- Версия сервера: 5.7.15
-- Версия PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aquarium`
--

-- --------------------------------------------------------

--
-- Структура таблицы `buyer`
--

CREATE TABLE `buyer` (
  `Buyer_ID` int(11) NOT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Firstname` varchar(20) DEFAULT NULL,
  `Patronymic` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `Apartment_number` int(11) NOT NULL,
  `Postcode` varchar(10) NOT NULL,
  `Phone_number` varchar(20) NOT NULL,
  `registration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `buyer`
--

INSERT INTO `buyer` (`Buyer_ID`, `Lastname`, `Firstname`, `Patronymic`, `City`, `Street`, `Apartment_number`, `Postcode`, `Phone_number`, `registration_date`) VALUES
(27, 'Болдырев', 'Никита', 'Сергеевич', 'Белгород', 'Буденного', 3, '12332', '+79102222756', '2019-06-02');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `Product_ID` int(11) NOT NULL,
  `Waybill_ID` int(11) NOT NULL,
  `Type` varchar(30) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Price` double NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`Product_ID`, `Waybill_ID`, `Type`, `Name`, `Price`, `Description`) VALUES
(8, 10, 'Рыбка аквариумная', 'Ириатерина Вернера', 150, 'Небольшая нежная рыбка с необычным внешним видом. \n\nНаиболее комфортно чувствует себя в группе из 6-8 особей в умеренно освещенном аквариуме с темным грунтом и обилием растительности, в том числе и плавающей. Любит чистую воду, течение. Большую часть времени проводят в верхних и средних слоях воды. Совместима с любимы мирными и спокойными соседями (мелкие тетры, сомики и пр.)\n\nМесто естественного обитания: Индонезия, Новая Гвинея. \nМаксимальный раз-мер - 5 см. \nМинимальный объем аквариума - 20 л. '),
(10, 12, 'Рыбка аквариумная', 'Золотая рыбка', 50, 'Селекционная форма золотой. Пригодна для содержания в просторных декора-тивных аквариумах оранжерейных и декоративных прудах. Предпочитает со-общество себе подобных, ярких свет, обилие свободного пространства. При оформлении водоема рекомендуется использовать сыпучий мелкофракционный грунт, камни, коряги, живые или пластиковые растения, в том числе плаваю-щие. Для аранжировки нельзя применять элементы с острыми углами и скола-ми.Максимальный размер - 20 см. Минимальный объем 100 л на пару. Оптималь-ные условия содержания: Т=15-30оС, dGH до 20о, рН 6-8, интенсивная фильт-рация, аэрация, в аквариумах - регулярная подмена воды. Корм: традиционные крупные мороженые и сухие корма, в том числе специа-лизированные, предназначенные для холодноводных декоративных рыб (на-пример \"Tetra AniMin Colour\" или серии \"Sera Goldy\").'),
(11, 13, 'Рыбка аквариумная', 'Гурами обыкновенный', 100, 'Эта среднего размера рыбка ( вырастает до 10-12 см) относится к лабиринтовым. Особенность этих рыб в специальном органе-лабиринте, который даёт возможность дышать напрямую атмосферным кислородом, тогда как другие рыбы получают кислород, фильтруя воду через жабры. Золотой гурами - селекционная форма гурами обыкновенного. Родина этих рыб-водоёмы Юго-Восточной Азии. Тело рыбки вытянуто, сжато с боков. Окраска золотистая с темными пятнами вдоль спины. Гурами золотистый достаточно миролюбивая рыба, поэтому и соседей ей следует выбирать дружелюбных и не слишком активных. Подходящими параметрами воды для него являются следующие: температура +23…+26, жесткость 5-20 dH, кислотность 6.5-7.5 рН. Гурами ест практически любой корм: сухие хлопья и гранулы, замороженные мотыль, артемию, коретру, дафнию, трубочник, моину, циклоп.'),
(12, 15, 'Аквариум', 'Прямоугольный аквариум', 19000, 'AQUAEL GLOSSY 80 изготовлен из стекла PILKINGTON, сделанного в Великобритании. Каждая емкость склеена вручную и прошла контроль качества. Система освещения в данной серии аквариумов, вклеена внутри верхней части стеклянной емкости, освобождая модель от громоздкой крышки. Легкая и компактная крышка, с небольшим люком для кормления рыб, состоит из двух частей, предоставляя свободный доступ в емкость для обслуживания. Система освещения, для удобства ухода, легко передвигается. Светильник оснащен модулем LEDDY TUBE с энергосберегающими светодиодными лампами.\n'),
(13, 16, 'Аквариум', 'Кубический аквариум', 9000, 'ANUBIAS D-550F – каркасный аквариум, изготовленный из силикатного стекла высокого качества устойчивого к царапинам и бытовой химии. Съемная крышка и нижняя рама, созданная для усиления прочности конструкции, декорированы влагостойким полимером с алюминиевыми накладками. Светильник вмонтирован в крышку и оборудован лампами Т8, излучающими теплый липовый цвет, который идеально подходит для роста аквариумных растений и выгодно подчеркивает окраску рыб.');

-- --------------------------------------------------------

--
-- Структура таблицы `product_buyer`
--

CREATE TABLE `product_buyer` (
  `proudct_buyer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_buyer`
--

INSERT INTO `product_buyer` (`proudct_buyer_id`, `product_id`, `buyer_id`, `size`) VALUES
(25, 11, 27, 3),
(26, 10, 27, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `supplyer`
--

CREATE TABLE `supplyer` (
  `Supplyer_ID` int(11) NOT NULL,
  `Supplyer_name` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `Phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `supplyer`
--

INSERT INTO `supplyer` (`Supplyer_ID`, `Supplyer_name`, `Country`, `City`, `Street`, `Phone_number`) VALUES
(8, 'Aqua_supply', 'Россия', 'Москва', 'Московкая', '79253345789'),
(9, 'Aqua_supply', 'Россия', 'Москва', 'Московкая', '79253345789'),
(10, 'Aqua_supply', 'Россия', 'Москва', 'Московкая', '79253345789'),
(11, 'Aqua_supply', 'Россия', 'Москва', 'Московкая', '79253345789'),
(12, 'Мир аквариумов', 'Россия', 'Санкт-Петербург', 'Уличная', '88005553555'),
(13, 'Мир аквариумов', 'Россия', 'Санкт-Петербург', 'Уличная', '88005553555'),
(14, 'Мир аквариумов', 'Россия', 'Санкт-Петербург', 'Уличная', '88005553555');

-- --------------------------------------------------------

--
-- Структура таблицы `waybill`
--

CREATE TABLE `waybill` (
  `Waybill_ID` int(11) NOT NULL,
  `Supplyer_ID` int(11) NOT NULL,
  `Weight` double NOT NULL,
  `Price` double NOT NULL,
  `Delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `waybill`
--

INSERT INTO `waybill` (`Waybill_ID`, `Supplyer_ID`, `Weight`, `Price`, `Delivery_date`) VALUES
(10, 8, 21, 2000, '2019-06-01'),
(11, 9, 15, 2000, '2019-03-16'),
(12, 10, 15, 5000, '2019-02-02'),
(13, 11, 10, 2500, '2019-05-11'),
(14, 12, 30, 30000, '2019-05-04'),
(15, 13, 300, 50000, '2019-05-04'),
(16, 14, 300, 30000, '2019-05-11');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`Buyer_ID`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Waybill_ID` (`Waybill_ID`);

--
-- Индексы таблицы `product_buyer`
--
ALTER TABLE `product_buyer`
  ADD PRIMARY KEY (`proudct_buyer_id`);

--
-- Индексы таблицы `supplyer`
--
ALTER TABLE `supplyer`
  ADD PRIMARY KEY (`Supplyer_ID`);

--
-- Индексы таблицы `waybill`
--
ALTER TABLE `waybill`
  ADD PRIMARY KEY (`Waybill_ID`),
  ADD KEY `Supplyer_ID` (`Supplyer_ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `buyer`
--
ALTER TABLE `buyer`
  MODIFY `Buyer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `product_buyer`
--
ALTER TABLE `product_buyer`
  MODIFY `proudct_buyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `supplyer`
--
ALTER TABLE `supplyer`
  MODIFY `Supplyer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `waybill`
--
ALTER TABLE `waybill`
  MODIFY `Waybill_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Waybill_ID`) REFERENCES `waybill` (`Waybill_ID`);

--
-- Ограничения внешнего ключа таблицы `waybill`
--
ALTER TABLE `waybill`
  ADD CONSTRAINT `waybill_ibfk_1` FOREIGN KEY (`Supplyer_ID`) REFERENCES `supplyer` (`Supplyer_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
