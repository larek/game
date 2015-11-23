-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2015 at 09:14 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

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
  `address` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `dateCreated`, `name`, `message`, `email`, `congrats`, `signature`, `address`) VALUES
(4, '2015-11-16 16:23:07', 'Саша', 'Скоро Новый Год', 'sasha@mail.ru', '', '', ''),
(2, '2015-11-16 16:09:17', 'Саша', 'привет как дела', 'alex@rambler.ru', '', '', ''),
(3, '2015-11-16 16:15:50', 'Саша', 'Сегодня понедельник и как-то ничего не хочется делать', 'alexandr@yahoo.com', '', '', ''),
(5, '2015-11-19 17:43:01', 'eames', 'hello people', 'eames@qwerty.com', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
