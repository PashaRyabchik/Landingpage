-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Жов 31 2017 р., 23:05
-- Версія сервера: 5.6.37
-- Версія PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `land`
--

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_04_091545_create_table_pages', 1),
(4, '2017_08_04_091716_create_table_services', 1),
(5, '2017_08_04_091820_create_table_partfolios', 1),
(6, '2017_08_04_091932_create_table_peoples', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `pages`
--

INSERT INTO `pages` (`id`, `name`, `alias`, `text`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Разработка сайтов любой сложности', 'info', 'Создание сайтов является наиболее популярной услугой не только во всем мире, но и в Украине. Однако не стоит думать, что наличие ресурса в Интернете станет гарантией успеха компании, так как разработка требует целого комплекса услуг, которые подразумевают создание индивидуального дизайна и дальнейшее его продвижение. Команда специалистов  поможет Вам не только создать сайт, но и предложит полный спектр услуг по изготовлению и оптимизации Web сайта. При этом, в любом случае, Вы получите положительный результат, достижение которого не подразумевает большую стоимость, так как не существенно отразится на Ваших бюджетных средствах. Лучшие специалисты Украины, работающие в нашей студии, приложат максимум усилий, чтобы создать сайт согласно лучшим традициям web-дизайна и обеспечить Вашему бизнесу интенсивное развитие и процветание!', 'Tools.jpg', NULL, NULL),
(2, 'О нас', 'aboutus', 'Наша компания специализируется на разработке интернет-магазинов. За 10 лет работы мы создали множество успешных решений для разных видов бизнеса. Мы создаем интернет-магазины  с высокой конверсией \"под ключ\" на лучших технологиях. Развитие магазина, продвижение и поддержка, выполняется нами поэтапно по разработанной стратегии. Мы реализуем конкретные шаги к Вашему успеху.', 'about.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `peoples`
--

CREATE TABLE `peoples` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `peoples`
--

INSERT INTO `peoples` (`id`, `name`, `position`, `images`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Alexander', 'QA-engineer', 'team_pic3.jpg', 'Тестирование программного обеспечения — проверка соответствия между реальным и ожидаемым поведением программы, осуществляемая на конечном наборе тестов, выбранном определенным образом. В более широком смысле, тестирование — это одна из техник контроля качества, включающая в себя активности по планированию работ (Test Management), проектированию тестов (Test Design), выполнению тестирования (Test Execution) и анализу полученных результатов (Test Analysis).', NULL, NULL),
(2, 'Pavel', 'PHP-developer', 'team_pic1.jpg', 'PHP (рекурсивный акроним словосочетания PHP: Hypertext Preprocessor) - это распространенный язык программирования общего назначения с открытым исходным кодом. PHP сконструирован специально для ведения Web-разработок и его код может внедряться непосредственно в HTML.', NULL, NULL),
(3, 'Volodimir', 'Java-developor', 'team_pic2.jpg', 'Java — сильно типизированный объектно-ориентированный язык программирования, разработанный компанией Sun Microsystems (в последующем приобретённой компанией Oracle). Приложения Java обычно транслируются в специальный байт-код, поэтому они могут работать на любой компьютерной архитектуре, с помощью виртуальной Java-машины.', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `images` varchar(100) NOT NULL,
  `filter` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `images`, `filter`, `created_at`, `updated_at`) VALUES
(1, 'Cachet', 'Cachet.png', 'Web', '2017-10-30 16:59:44', '2017-10-30 16:59:44'),
(2, 'Facebook', 'facebook.png', 'Web', '2017-10-30 16:43:09', '2017-10-30 16:43:09'),
(3, 'World Walking', 'WorldW.png', 'Web', '2017-10-30 17:06:48', '2017-10-30 17:06:48');

-- --------------------------------------------------------

--
-- Структура таблиці `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `services`
--

INSERT INTO `services` (`id`, `name`, `text`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Корпоративные порталы, сложные интернет-проекты (в т.ч. адаптивные).', 'Корпоративный портал - это веб-интерфейс для каждого сотрудника компании ко всему хозяйству, которое он использует по работе. В основе индивидуальной разработки лежат четыре базовых принципа: учет пожеланий заказчика; эксклюзивный дизайн; уникальная структура; возможность реализации сложного функционала.', 'fa-sitemap', '2017-10-30 14:59:46', '2017-10-30 14:59:46'),
(2, 'Системы электронной коммерции (e-commerce)', 'Электронная коммерция - это продажа и покупка товаров и услуг через интернет. Это набор технологий и сервисов, предоставляющих возможность представить  интернете свои товары и услуги, принимать заказы, выставлять счета, а также получать оплату и переводить деньги контрагентам через интернет.', 'fa-shopping-cart', '2017-10-30 16:15:29', '2017-10-30 16:15:29'),
(3, 'CRM и ERP-решения', 'Разница между ERP и CRM весьма существенна: в первую очередь, программные продукты этих классов решают разные задачи. В то время, как область задач CRMограничена, в основном, взаимодействием с клиентами (контрагентами), ERP система охватывает большую часть бизнес-процессов компании (если не все).', 'fa-bar-chart', '2017-10-30 16:20:39', '2017-10-30 16:20:39');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pasha', 'test@gmail.com', '$2y$10$lo0PmdNndBAIZnkG63kRneMBXQebkdf7wu46u6x/.lBRp7D3iiNOS', NULL, '2017-10-30 07:57:30', '2017-10-30 07:57:30');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Індекси таблиці `peoples`
--
ALTER TABLE `peoples`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблиці `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблиці `peoples`
--
ALTER TABLE `peoples`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
