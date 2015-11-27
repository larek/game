-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 27, 2015 at 06:20 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `title`, `image`) VALUES
(1, 'First Card', '/img/card1.png'),
(2, 'Second Card', '/img/card2.png'),
(3, 'Third Card', '/img/card3.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `name` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `email` text NOT NULL,
  `congrats` text NOT NULL,
  `signature` text NOT NULL,
  `address` text NOT NULL,
  `card` int(10) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `dateCreated`, `name`, `message`, `email`, `congrats`, `signature`, `address`, `card`, `link`) VALUES
(4, '2015-11-16 16:23:07', 'Саша', 'Скоро Новый Год', 'sasha@mail.ru', 'С новым годо', 'Толя', '', 0, ''),
(2, '2015-11-16 16:09:17', 'Саша', 'привет как дела', 'alex@rambler.ru', 'поздравляю тебя', 'Саша', '', 0, ''),
(3, '2015-11-16 16:15:50', 'Саша', 'Сегодня понедельник и как-то ничего не хочется делать', 'alexandr@yahoo.com', 'Счастья вам', 'Вася', '', 0, ''),
(5, '2015-11-19 17:43:01', 'eames', 'hello people', 'eames@qwerty.com', 'Happy new year', 'John', '', 0, ''),
(6, '2015-11-23 21:36:09', '', '', 'sdgh@bsdifg.com', 'My congrats', 'Sephen', 'vlwirngbioeu', 0, ''),
(7, '2015-11-23 22:08:40', '', '', 'sdfg', 'Congrats dude', 'Steve', '43251', 0, ''),
(8, '2015-11-23 22:24:32', '', '', 'test@email.com', 'Super cool congrats', 'Douglas', 'test address', 0, ''),
(9, '2015-11-26 07:08:43', '', '', 'dude@gamil.com', 'congrats', 'dude', 'LA', 0, ''),
(10, '2015-11-26 07:10:26', '', '', 'guy@mail.co', 'happy ny', 'guy', 'NY', 3, ''),
(11, '2015-11-26 18:42:08', '', '', 't9101029991@gmail.com', 'С Новым Годом', 'твой внук Саша', 'улица Ленина, дом 1', 1, ''),
(12, '2015-11-26 21:17:35', '', '', 't9101029991@gmail.com', 'sdf', 'sf', 'sdf', 2, ''),
(13, '2015-11-26 21:18:21', '', '', 't9101029991@gmail.com', 'sdf', 'sf', 'sdf', 1, ''),
(14, '2015-11-26 21:27:14', '', '', 't9101029991@gmail.com', 'sdf', 'sf', 'sdf', 2, ''),
(15, '2015-11-26 22:15:55', '', '', 't', 'Поздравляю', 'внук', 'улица', 1, ''),
(16, '2015-11-26 22:16:00', '', '', 't9101029991@gmail.com', 'Поздравляю', 'внук', 'улица', 1, ''),
(17, '2015-11-26 22:16:04', '', '', 't9101029991@gmail.com', 'Поздравляю', 'внук', 'улица', 1, ''),
(18, '2015-11-26 22:16:26', '', '', 't9101029991@gmail.com', 'Поздравляю', 'внук', 'улица', 1, ''),
(19, '2015-11-26 22:22:55', '', '', 't9101029991@gmail.com', 'Поздравляю', 'подпись', 'улица', 1, ''),
(20, '2015-11-26 22:29:09', '', '', 't9101029991@gmail.com', 'йцу', 'йцу', 'йцу', 1, ''),
(21, '2015-11-26 22:55:22', '', '', 't9101029991@gmail.com', 'sdf', 'sdf', 'sdf', 3, '32b369f3d657bd7668ae75448067cb71'),
(22, '2015-11-26 23:26:08', '', '', 't9101029991@gmail.com', 'Пожелания', 'Подпись', 'Адрес', 2, '06f586431503b12a67b5245f891c195f'),
(23, '2015-11-26 23:29:32', '', '', 't9101029991@gmail.com', 'Пожелания', 'Подпись', 'Адрес', 3, 'fd47a86faf2a745282bf7e887c26fbfe'),
(24, '2015-11-26 23:29:56', '', '', 't9101029991@gmail.com', 'Пожелания', 'Подпись', 'Адрес', 3, 'f9d05ea5158781026ea4c20236d355c1'),
(25, '2015-11-26 23:30:24', '', '', 't9101029991@gmail.com', 'Пожелания', 'Подпись', 'Адрес', 3, '4e09e1afd218c3f742476688e3f702aa'),
(26, '2015-11-26 23:31:37', '', '', 't9101029991@gmail.com', 'Пожелания', 'Подпись', 'Адрес', 3, 'cf7ad826a46a09b242d6157d145894f3'),
(27, '2015-11-26 23:33:02', '', '', 't9101029991@gmail.com', 'Пожелание', 'Подпись', 'Адрес', 2, '78b6296e39c002f5a11ed15ff9a96a2f'),
(28, '2015-11-27 00:06:22', '', '', 't9101029991@gmail.com', 'Пожелание', 'Подпись', 'Адрес', 3, '7ad7b4018c659e5e5d858e689a3f994b'),
(29, '2015-11-27 17:31:46', '', '', 't9101029991@gmail.com', 'Мое пожелание', 'Моя подпись', 'Мой адрес', 2, '117cea8bbc528ede9b1a02dc385fafba'),
(30, '2015-11-27 17:45:20', '', '', 't9101029991@gmail.com', 'Пожелание', 'Подпись', 'Адрес', 2, '8993bee9c754404086888a39ee7927ea'),
(31, '2015-11-27 17:46:03', '', '', 't9101029991@gmail.com', 'Пожелание', 'Подпись', 'Адрес', 3, '23a1253a5c7a4467f1075541dc14795e'),
(32, '2015-11-27 18:00:36', '', '', 't9101029991@gmail.com', 'Поздравляю с Новым Годом', 'твой внук ', 'адрес', 2, '25a860b4d45ebb6f501d955d4e3dcf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
