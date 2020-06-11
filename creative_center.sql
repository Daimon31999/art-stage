-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июн 11 2020 г., 09:22
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `creative_center`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles_en`
--

CREATE TABLE `articles_en` (
  `id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'идентификатор страницы',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Название страницы',
  `body` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Текст страницы',
  `img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Изображения в html'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles_en`
--

INSERT INTO `articles_en` (`id`, `title`, `body`, `img`) VALUES
('drawing_en', 'Drawing', 'Drawing circles are not as popular with us as dancing or sports sections. I myself sometimes hear from my grandmother, \"well, why should he draw, let it be better to teach Romanian.\" Nevertheless, this is a very important direction in the development of the child. Fine motor skills of hands and imagination are developed, aesthetic and artistic taste are instilled, patience and perseverance are developed, plus this and additional communication with other children. If the child likes to draw, he succeeds or, on the contrary, wants to succeed, you can try going to the drawing section. If a child shows outstanding results, he can always be identified in an art school. Schedule: set individually in the afternoon, after 13:00. Age: 18-36 years old. Cost: calculated by the number of hours of classes. Painting is one of the oldest artistic ways of expressing human feelings. Of course, parents were at least once interested in whether their children needed such lessons and what are the advantages and features? First of all, painting classes contribute to the correct position of the hand and the development of fine motor skills, also, during the classes, memory is trained, imagination, perseverance, and interest in inventing develop, but most importantly this reveals the personality of the child. Schedule: every Thursday, 18:00, duration - 60 minutes. Age: from 50 years.', NULL),
('main_en', 'ArtStage', 'Has your childhood dream of becoming a musician? Or did you want to become a famous artist, but you did not know how to realize your dream? ArtStage is your choice!\r\nArtStage is a young company with a worldwide reputation offering personality and talent development services for people from 18 years old. Our departments are located in all the capitals of Europe and America. To register for the courses, go through the registration and we will send you the necessary further steps by mail.\r\nWaiting for you !!!', NULL),
('modeling_en', 'Modeling', 'If you want to get new sensations and impressions - the courses offered by the Pottery Workshop are what you need. They will allow you to feel like an ancient master of clay, creating a unique masterpiece of art.\r\n\r\nCourses of modeling and pottery are a return to the past of humanity, when one of the main materials for the manufacture of household items and jewelry was ordinary clay. Practically everything was made from clay, everything from small ornaments to utensils and implements. Clay is an environmentally friendly material that does not have harmful impurities of a chemical type. A dish cooked in an earthenware dish differs significantly in taste from a dish prepared in a metal dish. Clay gives the dish a specific flavor that positively affects the quality of the products.\r\n\r\nExperienced craftsmen will help you realize the truth that is hidden in pottery - this is unity with nature and the fire element, when a clay product goes through the firing process.', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `articles_ru`
--

CREATE TABLE `articles_ru` (
  `id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'идентификатор страницы',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Название страницы',
  `body` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Текст страницы',
  `img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Изображения в html'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles_ru`
--

INSERT INTO `articles_ru` (`id`, `title`, `body`, `img`) VALUES
('drawing_ru', 'Рисование', 'Кружки рисования у нас не так популярны, как скажем танцевальные или спортивные секции. Я сама порой слышу от бабушки «ну зачем ему рисование, пусть лучше румынский учит». А все-таки это очень важное направление развития ребенка. Развивается мелкая моторика рук и воображение, прививается эстетический и художественный вкус, вырабатывается терпение и усидчивость, плюс это и дополнительное общение с другими детьми.\r\n\r\nЕсли ребенку нравится рисовать, у него получается или наоборот хочет, чтоб получалось, можно попробовать походить в секцию рисования.\r\n\r\nЕсли ребенок будет показывать выдающиеся результаты, его всегда можно будет определить в художественную школу.\r\n\r\nРасписание: устанавливается индивидуально во второй половине дня, после 13:00.\r\n\r\nВозраст: 18-36 лет.\r\nСтоимость: рассчитывается по количеству часов занятий.\r\n\r\nЖивопись - один из древнейших художественных способов выражения чувств человека. Конечно, родители хотя бы раз интересовались, нужны ли их детям такие уроки и каковы преимущества и особенности? Прежде всего, занятия живописью способствуют правильному положению руки и развитию мелкой моторики, также, в ходе занятий тренируется память, развивается фантазия, усидчивость, интерес к придумыванию, но самое главное это раскрывает личность ребенка.\r\n\r\nРасписание: каждый четверг, 18:00, продолжительность — 60 минут.\r\nВозраст: от 50 лет.\r\n', NULL),
('main_ru', 'ArtStage', 'У вас с детства была мечта стать музыкантом? Или вы хотели стать известным художником, но вы не знали как реализовать свою мечту? ArtStage ваш выбор! \r\nArtStage - молодая компания с мировым именем, предлагающая услуги по развитию личности и талантов для людей от 18 лет. Наши отделы находятся по всем столицам Европы и Америки. Чтобы записаться на курсы, пройдите регистрацию, и мы вышлем вам необходимые дальнейшие шаги по почте.\r\nЖдём вас !!!', NULL),
('modeling_ru', 'Гончарное дело', 'Если Вы стремитесь получить новые ощущения и впечатления - предлагаемые мастерской \"Гончарное Дело\" курсы - то что Вам нужно. Они позволят Вам ощутить себя в роли древнего мастера по глине, создающего уникальный шедевр искусства.\r\n\r\nКурсы лепки и гончарного мастерства это возврат к прошлому человечества, когда одним из основных материалов для изготовления предметов быта и украшений, была обычная глина. Из глины изготавливали практически, все - от мелких украшений до посуды и орудий труда. Глина - это экологически чистый материал, не имеющий вредных примесей химического типа. Блюдо, приготовленное в глиняной посуде, значительно отличается по вкусовым качествам от приготовленного в посуде металлической. Глина придает блюду специфический привкус, который позитивно влияет на качество продуктов.\r\n\r\nОпытные мастера помогут Вам осознать истину, которая сокрыта в гончарном деле - это единение с природой и огненной стихией, когда изделие из глины проходит процесс обжига.', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users_info`
--

CREATE TABLE `users_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sex` varchar(20) CHARACTER SET utf8 NOT NULL,
  `family` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_of_birth` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `hobby` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_info`
--

INSERT INTO `users_info` (`id`, `name`, `surname`, `sex`, `family`, `date_of_birth`, `address`, `city`, `email`, `phone`, `hobby`) VALUES
(4, 'Дима', 'Хинев', 'male', 'Замужем (женат)', '1999-11-11', 'яафывафв', 'Кишинев', 'dimahinev31999@gmail.com', '068007942', 'Музыка|Лепка|Танцы'),
(5, 'Дима', 'Хинев', 'male', 'Замужем (женат)', '1999-11-11', 'яафывафв', 'Кишинев', 'dimahinev31999@gmail.com', '068007942', 'Музыка|Лепка|Танцы');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles_en`
--
ALTER TABLE `articles_en`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `articles_en` ADD FULLTEXT KEY `id` (`id`,`body`,`title`);
ALTER TABLE `articles_en` ADD FULLTEXT KEY `title` (`title`,`body`);

--
-- Индексы таблицы `articles_ru`
--
ALTER TABLE `articles_ru`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `articles_ru` ADD FULLTEXT KEY `id` (`id`,`body`,`title`);
ALTER TABLE `articles_ru` ADD FULLTEXT KEY `title` (`title`,`body`);

--
-- Индексы таблицы `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
