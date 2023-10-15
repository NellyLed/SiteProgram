-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 04 2023 г., 20:38
-- Версия сервера: 8.0.31
-- Версия PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new`
--

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` char(20) NOT NULL,
  `email` varchar(15) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `login` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `date_birthday` date DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id_client`, `name`, `phone`, `email`, `adress`, `login`, `pass`, `date_birthday`) VALUES
(1, 'piter', '88866958', 'hbhbkbj@jhj', 'Sofia,20', 'sortsort', '12341234', '2014-03-19'),
(2, 'Sonya', '6565465', 'hgjj@hjgjh', 'Mila, 20', 'kort', '1267', '2016-09-15');

-- --------------------------------------------------------

--
-- Структура таблицы `consulation`
--

DROP TABLE IF EXISTS `consulation`;
CREATE TABLE IF NOT EXISTS `consulation` (
  `id_consulation` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` char(20) NOT NULL,
  `email` varchar(15) NOT NULL,
  `declaration` text NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id_consulation`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `consulation`
--

INSERT INTO `consulation` (`id_consulation`, `name`, `phone`, `email`, `declaration`, `date`) VALUES
(1, 'Алексеевна.А.Р', '8(976)-768-54-44', 'alec@mail.ru', 'Хотелось проконсултироваться.', '2023-07-04');

-- --------------------------------------------------------

--
-- Структура таблицы `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id_employee` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` char(30) NOT NULL,
  `position` varchar(100) NOT NULL,
  `id_client` int NOT NULL,
  PRIMARY KEY (`id_employee`),
  KEY `id_client` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `employee`
--

INSERT INTO `employee` (`id_employee`, `name`, `phone`, `position`, `id_client`) VALUES
(1, 'Гордеев.А.В', '8(986)-546-32-32', 'Директор', 1),
(2, 'Соколова.А.П', '8(954)-45-4-67-65', 'Администратор', 1),
(3, 'Воролов.П.Р', '8(965)-786-67-77', 'Секретарь', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `format`
--

DROP TABLE IF EXISTS `format`;
CREATE TABLE IF NOT EXISTS `format` (
  `id_format` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id_format`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `format`
--

INSERT INTO `format` (`id_format`, `name`, `description`) VALUES
(1, 'очно', 'В аудитории'),
(2, 'очно-заочно', 'Некоторые дни в аудитории днем, некоторые вечером'),
(3, 'заочно', 'В аудитории по вечерам'),
(4, 'дистанционно', 'Занятия дома');

-- --------------------------------------------------------

--
-- Структура таблицы `graf`
--

DROP TABLE IF EXISTS `graf`;
CREATE TABLE IF NOT EXISTS `graf` (
  `id_graf` int NOT NULL AUTO_INCREMENT,
  `day` varchar(50) NOT NULL,
  `count_ch` int NOT NULL,
  PRIMARY KEY (`id_graf`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `graf`
--

INSERT INTO `graf` (`id_graf`, `day`, `count_ch`) VALUES
(1, ' понедельник', 2),
(2, 'вторник', 4),
(3, 'среда', 4),
(4, 'четверг', 6),
(5, 'пятница', 4),
(6, 'суббота', 3),
(7, 'воскресенье', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `kurs`
--

DROP TABLE IF EXISTS `kurs`;
CREATE TABLE IF NOT EXISTS `kurs` (
  `id_kurs` int NOT NULL AUTO_INCREMENT,
  `id_format` int NOT NULL,
  `id_teacher` int NOT NULL,
  `id_prog` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `count_k` int NOT NULL,
  `description` varchar(800) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `estimation` decimal(2,1) NOT NULL,
  PRIMARY KEY (`id_kurs`),
  KEY `id_format` (`id_format`),
  KEY `id_teacher` (`id_teacher`),
  KEY `id_prog` (`id_prog`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `kurs`
--

INSERT INTO `kurs` (`id_kurs`, `id_format`, `id_teacher`, `id_prog`, `name`, `count_k`, `description`, `price`, `estimation`) VALUES
(1, 2, 1, 1, 'Разработка_на_Python', 3, '1 - Изучите Python с нуля и без навыков программирования<br>\r\n2 - На курсе вы узнаете, как создавать телеграм-ботов, сайты, приложения, нейросети и использовать Python для научных исследований — теория и практика на реальных задачах<br>\r\n3 - В результате станете Python-разработчиком и гарантированно найдете работу<br>', '86000.00', '4.7'),
(2, 1, 2, 2, 'Разработчик_на_Java', 4, '1 - Cможете создавать универсальные программы для большинства современных платформ: сетевые чаты, приложения, мобильные игры и другие сервисы. <br>\r\n2 - Освоите базовые алгоритмы<br>', '80000.00', '4.5'),
(3, 2, 3, 3, 'Веб-разработка', 5, '1 - Изучите основы программирования, принципы работы баз данных и основные алгоритмы<br>\r\n2 - Овладеете необходимыми технологиями и программами<br>\r\n3 - Освоите языки JavaScript и TypeScript<br>\r\n4 - Научитесь создавать адаптивные сайты и интерактивные веб-приложения<br>', '95000.00', '4.3'),
(4, 1, 4, 4, 'Тестирование', 3, '1 - Сможете составлять тест-планы и тест-кейсы для поиска ошибок и уязвимостей в программах<br>\r\n2 - Сможете смоделировать ситуации <br>\r\n3 - Познакомитесь с базовыми понятиями в программировании<br>\r\n4 - Узнаете виды тестирования<br>\r\n5 - Разберетесь как устроено ручное тестирование, проверив на ошибки и баги несколько проектов<br>', '100000.00', '4.9'),
(5, 1, 5, 5, 'Разработка_на_C++', 2, '1 - Сможете создавать программы, игры, драйвера для устройств, приложения для встраиваемых систем, серверов и даже операционные системы<br>\r\n 2 - Изучите основы этого языка<br>\r\n3 - На практике научитесь создавать веб - и мобильные приложения и реализовывать графические интерфейсы<br>', '110000.00', '4.3'),
(6, 1, 6, 6, 'Frontend-разработка', 4, '1 - Получите базовые знания<br>\r\n2 - На практике научитесь создавать сайты и приложения, проектировать интерфейсы и работать со сложными инструментами frontend-разработчика<br> \r\n3 - Изучите фреймворки и библиотеки, которые упростят вашу работу<br>', '89000.00', '4.4'),
(7, 1, 7, 7, 'Data _Science', 3, '1 - Изучите основы программирования и основные концепции компьютерных наук, цифровые технологии, операционные системы, программное обеспечение, базы данных, системы аналитики, языки программирования и др<br>\r\n2 - Познакомитесь с тестированием и системным анализом<br>', '93000.00', '4.6'),
(8, 2, 8, 8, 'DevOps_разработка', 4, '1 - На практике научитесь автоматизировать процессы разработки и внедрения ПО, организовать непрерывную интеграцию и доставку (CI/CD)<br>\r\n2 - Научитесь работать с облачными сервисами, Docker и Kubernetes<br>', '97000.00', '4.5'),
(9, 4, 9, 9, '1C_разработка', 5, '1 - Научитесь создавать и настраивать базы данных, разрабатывать отчеты и формы, изучите язык программирования 1C\r\n2 - Получите практические навыки работы в «1С:Комплексная автоматизация» и «1С:Бухгалтерия»', '96000.00', '4.8'),
(10, 5, 10, 10, 'Fullstack-разработка', 3, 'Скоро', '70000.00', '4.2'),
(11, 2, 11, 11, 'Data Analyst', 5, 'Скоро', '92000.00', '4.1'),
(12, 5, 12, 12, 'Кибербезопасность', 3, 'Скоро', '96000.00', '4.7');

-- --------------------------------------------------------

--
-- Структура таблицы `packet`
--

DROP TABLE IF EXISTS `packet`;
CREATE TABLE IF NOT EXISTS `packet` (
  `id_packet` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id_packet`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `packet`
--

INSERT INTO `packet` (`id_packet`, `name`, `description`, `price`) VALUES
(1, 'Стандартный', '1 - больше 4 проектов в портфолио<br>\r\n2 - помощь в трудоустройстве<br>\r\n3 - практика в реальных проектах<br>\r\n4 - помощь наставника в групповом чате<br>\r\n5 - персональное расписание<br>\r\n6 - гарантия трудоустройства<br>', '3.00'),
(2, 'Новый', '1 - больше 4 проектов в портфолио<br>\r\n2 - помощь в трудоустройстве<br>\r\n3 - практика в реальных проектах<br>\r\n4 - помощь наставника в групповом чате<br>\r\n5 - персональное расписание<br>\r\n6 - гарантия трудоустройства<br>\r\n7 - индивидуальное обучение<br>', '5.00'),
(3, 'Премиум', '1 - больше 4 проектов в портфолио<br>\r\n2 - помощь в трудоустройстве<br>\r\n3 - практика в реальных проектах<br>\r\n4 - помощь наставника в групповом чате<br>\r\n5 - персональное расписание<br>\r\n6 - гарантия трудоустройства<br>\r\n7 - индивидуальное обучение<br>\r\n8 - 80 часов консультаций с наставником<br>\r\n9 - спецпрограмма<br>', '10.00');

-- --------------------------------------------------------

--
-- Структура таблицы `programma`
--

DROP TABLE IF EXISTS `programma`;
CREATE TABLE IF NOT EXISTS `programma` (
  `id_prog` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_prog`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `programma`
--

INSERT INTO `programma` (`id_prog`, `name`, `description`) VALUES
(1, 'Python-разработчик', '1 - Основы Python<br>\r\n2 - Углубленный Python<br>\r\n3 - Бэкенд на Django<br>\r\n4 - API: интерфейс взаимодействия программ<br>\r\n5 - Алгоритмы и структуры данных<br>\r\n6 - Управление проектом на удалённом сервере<br>\r\n7 - Дипломный проект «Продуктовый помощник»<br>'),
(2, 'Java-разработчик', '1 - Основы Java <br>\r\n2 - Java Core введение<br>\r\n3 - Каникулы<br>\r\n4 - Java Core продолжение<br>\r\n5 - Каникулы<br>\r\n6 - Spring Boot и работа с базами данных<br>\r\n7 - Каникулы<br>\r\n8 - Spring, ORM и работа на сервере<br>\r\n9 - Подготовка к собеседованию и дипломный проект<br>\r\n10 - Трудоустройство<br>'),
(3, 'Веб-разработчик', '1 - Основы HTML, CSS, JS<br>\r\n2 - Расширенные возможности HTML и CSS<br>\r\n3 - Работа с макетом, построение сложных сеток, адаптивная вёрстка<br>\r\n4 - Базовый JavaScript и работа с браузером<br>\r\n5 - JavaScript — непростые концепции<br>\r\n6 - Создание интерфейсов на React<br>\r\n7 - Основы бэкенд-разработки<br>\r\n8 - Дипломный проект<br>'),
(4, 'Тестировщик', '1 - Основы тестирования<br>\r\n2 - Проектирование тестов <br>\r\n3 - Тестирование веб-приложений<br>\r\n4 - Тестирование мобильных приложений и API<br>\r\n5 - Основы баз данных<br>\r\n6 - Основы автоматизации тестирования<br>\r\n7 - Дипломный проект<br>\r\n8 - Трудоустройство<br>'),
(5, 'С++ разработчик', '1 - Базовые понятия программирования<br> \r\n2 - Основы C++<br>\r\n3 - Основные компоненты C++<br>\r\n4 - Эффективность кода<br>\r\n5 - Элегантность и масштабируемость<br>\r\n6 - Разработка библиотек и больших проектов<br>\r\n7 - Дипломный проект<br>\r\n8 - Специализация C++ бэкенд<br>'),
(6, 'Frontend-разработчик', '1 - Бесплатная вводная часть<br>\r\n2 - Проект «Веб-мессенджер»<br> \r\n3 - Командный проект<br>\r\n4 - Алгоритмы и структуры данных. Включённый курс<br>\r\n5 - Карьерный трек<br>'),
(7, 'Data Science специалист', '1 - Основы Python и анализа данных<br>\r\n2 - Базовый Python<br>\r\n3 - Предобработка данных<br>\r\n4 - Исследовательский анализ данных(EDA)<br>\r\n5 - Статистический анализ данных<br>\r\n6 - Введение в машинное обучение<br>\r\n7 - Обучение с учителем<br>\r\n8 - Линейная алгебра<br>\r\n9 - Численные методы<br>\r\n10 - Временные ряды<br>\r\n11 - Машинное обучение для текстов<br>\r\n12 - Базовый SQL<br>'),
(8, 'DevOps-инженер', '1 - Системы контроля версий и автоматизация сборки приложений<br>\r\n2 - Гибкие методологии и Continuous Integration<br>\r\n3 - Сети и основы работы на серверах Linux<br>\r\n4 - Continuous Delivery и Continuous Deployment<br>\r\n5 - Infrastructure as Code и системы управления конфигурацией<br>\r\n6 - DBOps -реляционные и нереляционные базы данных<br>\r\n7 - Docker-контейнеризация и хранение данных<br>\r\n8 - Микросервисы, балансировка и кэширование<br>'),
(9, '1C-разработчик', '1 - Основы профессии аналитика 1С<br>\r\n2- Внедрение и эксплуатация 1С на практике: методики и шаблоны<br>\r\n3 - Проектирование и управление разработкой информационных систем 1С<br>\r\n4 - Итоговый проект<br>'),
(10, 'Fullstack-разработка', 'Скоро'),
(11, 'Data Analys', 'Скоро'),
(12, 'Кибербезопасность', 'Скоро');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id_questions` int NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `answer` text NOT NULL,
  `id_number` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_questions`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id_questions`, `name`, `answer`, `id_number`, `date`) VALUES
(1, 'Сколько вам лет?', '12', 0, '2023-09-07'),
(2, 'Какой предмет вам нравился в школе?', 'Математика', 2, '2023-09-04'),
(3, 'Какой язык программирования вам нравится больше?', 'JavaScript', 3, '2023-09-07'),
(4, 'Какой курс вам понравился больше?', 'Python', 4, '2023-09-07'),
(5, 'Что вы хотели бы изменить на сайте?', 'Вывод блоков', 5, '2023-09-04'),
(6, 'Порекомендовали бы нас друзьям?', 'да', 6, '2023-09-03');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id_reviews` int NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `id_teacher` int NOT NULL,
  `data_reviews` date DEFAULT NULL,
  PRIMARY KEY (`id_reviews`),
  KEY `id_teacher` (`id_teacher`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id_reviews`, `login`, `description`, `id_teacher`, `data_reviews`) VALUES
(1, 'join', 'Большая благодарность учителям, бесконечная поддержка, хорошее и доступное обучение!', 1, '2023-07-13'),
(2, 'hoi', 'Постоянная обратная связь с учителями, большое количество практических работ, позволяющих быстро усвоить новые знания.', 2, '2023-08-18'),
(3, 'gho', 'Много бонусных курсов, позволяющих развиваться во множествах аспектов. Можно закрепить пройденный материал и изучить новый, пока ждете проверки практических работ.', 3, '2023-08-30'),
(4, 'one67', 'Очень интересная подача материала, бережное отношение к клиентам!', 4, '2023-09-07'),
(5, 'some_people', 'Постоянная обратная связь, понятная подача материала', 5, '2023-09-03'),
(6, 'lon', 'Быстро нашел работу', 6, '2023-07-12'),
(7, 'lou_90', 'Связь 24/7, постоянно меняется программа, в соответствии с современными знаниями', 7, '2023-07-11'),
(8, 'joiu', 'Понятные объяснения, недорогие цены!', 8, '2023-06-14'),
(9, 'hwq', 'Быстрое введение в теорию и понятная практика', 9, '2023-07-04');

-- --------------------------------------------------------

--
-- Структура таблицы `sale`
--

DROP TABLE IF EXISTS `sale`;
CREATE TABLE IF NOT EXISTS `sale` (
  `id_sale` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `price` decimal(2,0) NOT NULL,
  PRIMARY KEY (`id_sale`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `sale`
--

INSERT INTO `sale` (`id_sale`, `name`, `price`) VALUES
(1, 'В день рождения', '15'),
(2, '100-й пользователь', '6'),
(3, 'После регистрации', '3'),
(4, 'День рождения компании', '8'),
(5, 'При выборе пакета \"Премиум\"', '10'),
(6, 'Стоимость курса 99 тысяч рублей', '12');

-- --------------------------------------------------------

--
-- Структура таблицы `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id_teacher` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `experience` int NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `phone` char(20) NOT NULL,
  `count_u` int DEFAULT NULL,
  `id_graf` int DEFAULT NULL,
  `id_format` int DEFAULT NULL,
  PRIMARY KEY (`id_teacher`),
  KEY `id_format` (`id_format`),
  KEY `id_graf` (`id_graf`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `teacher`
--

INSERT INTO `teacher` (`id_teacher`, `name`, `experience`, `email`, `subject`, `phone`, `count_u`, `id_graf`, `id_format`) VALUES
(1, 'Свиридова.А.П', 12, 'sviridov@mail.ru', 'python-разработчик', '8(964)-357-87-99', 6, 1, 2),
(2, 'Андрочов.А.Р', 6, 'androv@mail.ru', 'java-разработчик', '8(965)-432-67-33', 8, 2, 1),
(3, 'Кочетов.П.Д', 6, 'kochetov@mail.ru', 'веб-разработчик', '8(954)-234-54-32', 4, 4, 2),
(4, 'Фамильяров.Р.В', 8, 'fa@mail.ru', 'тестировщик', '8(954)-324-56-54', 7, 3, 1),
(5, 'Крилогова.Р.А', 2, 'kri@mail.ru', 'c++ разработчик', '8(965)-786-54-43', 10, 1, 1),
(6, 'Пиров.П.В', 8, 'pirov@mail.ru', 'frontend-разработчик', '8(965)-786-98-87', 6, 5, 1),
(7, 'Смирнова.П.Л', 7, 'smirnov@mail.ru', 'data science', '8(965)-435-98-90', 3, 5, 1),
(8, 'Погова.П.О', 5, 'pogov@mail.ru', 'devOps-разработчик', '8(965)-657-65-66', 8, 6, 2),
(9, 'Урмолов.П.А', 12, 'urmolov@mail.ru', '1c-разработчик', '8(956)-768-89-90', 10, 6, 4),
(10, 'Поклонов.П.А', 5, 'poklonov@mail.ru', 'fullstack', '8(965)-657-34-32', 5, 2, 5),
(11, 'Спицылов.Р.В', 6, 'spi@mail.ru', 'data analyst', '8(954)-654-78-65', 7, 3, 2),
(12, 'Владникова.П.Р', 5, 'vla@mail.ru', 'кибербезопасность', '8(965)-432-54-43', 2, 3, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

DROP TABLE IF EXISTS `zakaz`;
CREATE TABLE IF NOT EXISTS `zakaz` (
  `id_zakaz` int NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `card` varchar(50) NOT NULL,
  `data_end` text NOT NULL,
  `id_client` int NOT NULL,
  `id_packet` int DEFAULT NULL,
  `id_kurs` int DEFAULT NULL,
  PRIMARY KEY (`id_zakaz`),
  KEY `id_client` (`id_client`),
  KEY `id_packet` (`id_packet`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`id_zakaz`, `price`, `card`, `data_end`, `id_client`, `id_packet`, `id_kurs`) VALUES
(1, '86000.00', '2200330578905467', 'Разработка_на_Python', 1, 1, 1),
(5, '64500.00', '2200330567894356', '02/13', 1, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
