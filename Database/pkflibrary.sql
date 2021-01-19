-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 27 Août 2017 à 12:43
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pkflibrary`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL,
  `isbn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `editor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `edition` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pklib_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ean` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cd_number` int(11) DEFAULT NULL,
  `number_of_pages` int(11) DEFAULT NULL,
  `year_published` int(11) DEFAULT NULL,
  `date_acquired` date NOT NULL,
  `acquisition` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_picture_id` int(11) DEFAULT NULL,
  `summary_id` int(11) DEFAULT NULL,
  `booksAvailable` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `book`
--

INSERT INTO `book` (`id`, `isbn`, `title`, `sub_title`, `author`, `editor`, `quantity`, `edition`, `pklib_code`, `ean`, `format`, `volume`, `color`, `cd_number`, `number_of_pages`, `year_published`, `date_acquired`, `acquisition`, `language`, `state`, `location`, `cover_picture_id`, `summary_id`, `booksAvailable`) VALUES
(1, NULL, 'Symfony', 'version 4', 'Darius', 'Cle', 50, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, 2017, '2017-07-18', NULL, 'French', NULL, NULL, 103, 104, 26),
(2, NULL, 'Java', 'Expert', 'Hermann', 'Brrr', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-18', NULL, NULL, NULL, NULL, 71, 72, 4),
(3, NULL, 'Algorithm Analysis', 'Intermediate', 'Dr Talla', 'Paul Fokam', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 145, NULL, '2017-07-18', NULL, NULL, NULL, NULL, 73, 74, 0),
(4, NULL, 'Calculus', 'Advanced', 'Dr Bate', 'Paul Fokam', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 750, NULL, '2017-07-18', 'Gift', NULL, NULL, NULL, 75, 76, 0),
(5, NULL, 'Software Engineering', NULL, 'Dr Ngatsi', NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-18', NULL, NULL, NULL, NULL, 77, 78, 5),
(6, NULL, 'Programming and Problem solving', 'Java', 'Mr Fogaing and Mr Mekontso', 'Oracle', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 410, NULL, '2017-07-18', NULL, NULL, NULL, NULL, 101, 102, 0),
(7, NULL, 'Bundle', 'Categ', 'Corne', 'Brd', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1452, NULL, '2017-07-18', NULL, NULL, NULL, NULL, 81, 82, 3),
(10, NULL, 'Summary', NULL, 'Test', NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 151, NULL, '2017-07-18', NULL, NULL, NULL, NULL, 87, 88, 9),
(12, NULL, 'Quantity', NULL, 'Bright', NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 125, NULL, '2017-07-18', NULL, NULL, NULL, NULL, 95, 96, 10),
(13, NULL, 'BookBoon', NULL, 'Blabla', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 145, NULL, '2017-07-18', NULL, NULL, NULL, NULL, 97, 98, 10),
(14, NULL, 'Test', 'test', 'Test', NULL, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-18', NULL, NULL, NULL, NULL, 99, 100, 39),
(15, NULL, 'Today', 'Yesterday', 'Monday', 'Tuesday', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, NULL, '2017-08-01', NULL, NULL, NULL, NULL, 105, 106, 7),
(16, NULL, 'Upload', 'Upload', 'Vannel', 'Grey', 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 145, NULL, '2017-08-14', NULL, NULL, NULL, NULL, 112, 113, 70),
(17, '12-212-12005-2', 'Sécuriser enfin son PC', 'Sécurité', 'Patrick Legant', 'Eroylles', 25, 'Clé', '124', 'xxxxxxxx', 'A4', '5', 'Green', 1, 400, 2000, '2016-08-16', 'Gift', 'French', 'Excellent', 'Georgia', 114, 115, 20);

-- --------------------------------------------------------

--
-- Structure de la table `book_user`
--

CREATE TABLE IF NOT EXISTS `book_user` (
  `id` int(11) NOT NULL,
  `dateRequested` date DEFAULT NULL,
  `dateReturned` date DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bookId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `delay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `book_user`
--

INSERT INTO `book_user` (`id`, `dateRequested`, `dateReturned`, `dueDate`, `status`, `bookId`, `userId`, `delay`) VALUES
(9, '2017-08-08', '2017-08-27', '2017-08-27', 'Returned late', 2, 7, '0 year(s) 0 month(s) 6 day(s)'),
(10, '2017-08-08', '2017-08-27', '2017-08-27', 'Returned late', 15, 7, '0 year(s) 0 month(s) 2 day(s)'),
(11, '2017-08-08', '2017-08-25', '2017-08-25', 'Late', 12, 7, '0 year(s) 0 month(s) 2 day(s)'),
(12, '2017-08-14', NULL, '2017-08-15', 'Late', 13, 7, '0 year(s) 0 month(s) 12 day(s)'),
(13, '2017-08-16', '2017-08-24', '2017-08-24', 'Late', 5, 55, '0 year(s) 0 month(s) 3 day(s)'),
(14, '2017-08-16', NULL, '2017-08-21', 'Late', 6, 55, '0 year(s) 0 month(s) 6 day(s)'),
(15, '2017-08-16', NULL, '2017-08-16', 'Late', 2, 55, '0 year(s) 0 month(s) 11 day(s)'),
(17, '2017-08-16', NULL, '2017-08-17', 'Late', 14, 55, '0 year(s) 0 month(s) 10 day(s)'),
(18, '2017-08-16', NULL, '2017-08-17', 'Late', 17, 55, '0 year(s) 0 month(s) 10 day(s)'),
(23, '2017-08-16', NULL, '2017-08-17', 'Late', 13, 89, '0 year(s) 0 month(s) 10 day(s)'),
(24, '2017-08-16', NULL, '2017-08-17', 'Late', 6, 90, '0 year(s) 0 month(s) 10 day(s)'),
(30, '2017-08-16', NULL, '2017-08-17', 'Late', 14, 90, '0 year(s) 0 month(s) 10 day(s)'),
(33, '2017-08-16', NULL, '2017-08-17', 'Late', 5, 90, '0 year(s) 0 month(s) 10 day(s)'),
(34, '2017-08-16', NULL, '2017-08-17', 'Late', 1, 90, '0 year(s) 0 month(s) 10 day(s)'),
(35, '2017-08-16', NULL, '2017-08-17', 'Late', 1, 91, '0 year(s) 0 month(s) 10 day(s)'),
(36, '2017-08-16', NULL, '2017-08-17', 'Late', 1, 7, '0 year(s) 0 month(s) 10 day(s)'),
(37, '2017-08-16', NULL, '2017-08-17', 'Late', 7, 90, '0 year(s) 0 month(s) 10 day(s)'),
(38, '2017-08-23', NULL, '2017-08-24', 'Late', 1, 55, '0 year(s) 0 month(s) 3 day(s)'),
(39, '2017-08-25', NULL, '2017-08-25', 'Late', 5, 96, '0 year(s) 0 month(s) 2 day(s)');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`category_code`, `category_name`) VALUES
('000', 'Computer science, information and general works'),
('100', 'Philosophy and Psychology'),
('200', 'Religion'),
('300', 'Social Sciences'),
('400', 'Language'),
('500', 'Science'),
('600', 'Technology'),
('700', 'Arts and Recreation'),
('800', 'Literature'),
('900', 'History & Geography');

-- --------------------------------------------------------

--
-- Structure de la table `dateborrowed`
--

CREATE TABLE IF NOT EXISTS `dateborrowed` (
  `id` int(11) NOT NULL,
  `dateBorrowed` date DEFAULT NULL,
  `borrowId` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `dateborrowed`
--

INSERT INTO `dateborrowed` (`id`, `dateBorrowed`, `borrowId`) VALUES
(5, '2017-08-08', 9),
(6, '2017-08-08', 10),
(7, '2017-08-08', 11),
(8, '2017-08-08', 9),
(9, '2017-08-08', 9),
(10, '2017-08-08', 9),
(11, '2017-08-08', 9),
(12, '2017-08-08', 9),
(13, '2017-08-08', 9),
(14, '2017-08-08', 9),
(15, '2017-08-08', 9),
(16, '2017-08-08', 9),
(17, '2017-08-08', 9),
(18, '2017-08-08', 9),
(19, '2017-08-08', 9),
(20, '2017-08-08', 9),
(21, '2017-08-08', 9),
(22, '2017-08-08', 9),
(23, '2017-08-08', 9),
(24, '2017-08-08', 9),
(25, '2017-08-08', 10),
(26, '2017-08-08', 10),
(27, '2017-08-16', 14),
(28, '2017-08-16', 15),
(29, '2017-08-21', 14),
(30, '2017-08-25', 39);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_maj` datetime NOT NULL,
  `activated` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `validated` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `url`, `alt`, `date_maj`, `activated`, `deleted`, `validated`) VALUES
(-2, 'jpeg', 'SuperAdmin.jpg', '2017-08-04 12:17:21', 1, 0, 1),
(-1, 'jpeg', 'A_picture.jpg', '2017-08-04 12:05:21', 1, 0, 1),
(1, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 16:14:21', 1, 0, 1),
(3, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 16:29:37', 1, 0, 1),
(4, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 16:31:37', 1, 0, 1),
(5, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 16:51:00', 1, 0, 1),
(6, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 17:43:58', 1, 0, 1),
(7, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 18:30:03', 1, 0, 1),
(8, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 19:53:08', 1, 0, 1),
(9, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 19:55:46', 1, 0, 1),
(10, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 19:57:19', 1, 0, 1),
(11, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 19:58:58', 1, 0, 1),
(12, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 20:00:14', 1, 0, 1),
(13, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 20:02:08', 1, 0, 1),
(14, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 20:04:21', 1, 0, 1),
(15, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 20:05:52', 1, 0, 1),
(16, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 20:08:53', 1, 0, 1),
(18, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 20:11:40', 1, 0, 1),
(19, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 20:13:08', 1, 0, 1),
(20, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 20:14:28', 1, 0, 1),
(21, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 20:16:10', 1, 0, 1),
(22, 'jpeg', 'Mekontso picture.jpg', '2017-07-07 20:17:48', 1, 0, 1),
(23, 'jpeg', 'Copie de 052.JPG', '2017-07-11 07:53:50', 1, 0, 1),
(24, 'jpeg', '179.JPG', '2017-07-11 07:58:36', 1, 0, 1),
(25, 'jpeg', '175.JPG', '2017-07-11 13:10:05', 1, 0, 1),
(26, 'jpeg', '175.JPG', '2017-07-11 14:04:07', 1, 0, 1),
(27, 'jpeg', '173.JPG', '2017-07-12 03:06:45', 1, 0, 1),
(28, 'jpeg', '52.JPG', '2017-07-12 03:21:29', 1, 0, 1),
(29, 'jpeg', '52.JPG', '2017-07-12 03:22:34', 1, 0, 1),
(30, 'jpeg', '52.JPG', '2017-07-12 03:24:42', 1, 0, 1),
(31, 'jpeg', '52.JPG', '2017-07-12 03:27:05', 1, 0, 1),
(32, 'jpeg', '52.JPG', '2017-07-12 03:31:11', 1, 0, 1),
(33, 'jpeg', '52.JPG', '2017-07-12 03:33:35', 1, 0, 1),
(34, 'jpeg', 'Copie de 052.JPG', '2017-07-12 03:35:13', 1, 0, 1),
(35, 'jpeg', '175.JPG', '2017-07-12 03:37:31', 1, 0, 1),
(36, 'jpeg', 'Copie de 052.JPG', '2017-07-12 03:39:40', 1, 0, 1),
(37, 'jpeg', '173.JPG', '2017-07-12 03:55:24', 1, 0, 1),
(38, 'jpeg', '164.JPG', '2017-07-12 18:44:56', 1, 0, 1),
(39, 'jpeg', 'Copie de 052.JPG', '2017-07-12 19:54:51', 1, 0, 1),
(40, 'jpeg', '173.JPG', '2017-07-12 20:35:51', 1, 0, 1),
(41, 'jpeg', '173.JPG', '2017-07-12 20:37:15', 1, 0, 1),
(42, 'jpeg', 'Copie de 052.JPG', '2017-07-12 22:01:29', 1, 0, 1),
(43, 'jpeg', 'Copie de 052.JPG', '2017-07-12 22:04:01', 1, 0, 1),
(44, 'jpeg', '164.JPG', '2017-07-12 22:43:52', 1, 0, 1),
(45, 'jpeg', 'Copie de 052.JPG', '2017-07-12 22:44:36', 1, 0, 1),
(46, 'jpeg', 'Copie de 052.JPG', '2017-07-12 22:53:08', 1, 0, 1),
(48, 'jpeg', 'Copie de 052.JPG', '2017-07-13 12:39:27', 1, 0, 1),
(49, 'jpeg', '007.JPG', '2017-07-15 13:11:25', 1, 0, 1),
(50, 'jpeg', '170.JPG', '2017-07-15 13:11:25', 1, 0, 1),
(51, 'jpeg', '170.JPG', '2017-07-15 14:12:37', 1, 0, 1),
(52, 'jpeg', '170.JPG', '2017-07-15 14:12:37', 1, 0, 1),
(53, 'jpeg', 'Copie de 052.JPG', '2017-07-15 14:22:41', 1, 0, 1),
(54, 'jpeg', '078.JPG', '2017-07-15 14:22:41', 1, 0, 1),
(55, 'jpeg', 'Copie de 052.JPG', '2017-07-15 14:27:07', 1, 0, 1),
(56, 'jpeg', '175.JPG', '2017-07-15 14:27:07', 1, 0, 1),
(61, 'jpeg', 'image01.jpg', '2017-07-17 21:59:30', 1, 0, 1),
(62, 'pdf', 'Cybernétique et Société0001.pdf', '2017-07-17 21:59:30', 1, 0, 1),
(63, 'jpeg', 'image01.jpg', '2017-07-17 22:05:38', 1, 0, 1),
(64, 'pdf', 'Cybernetics0001.pdf', '2017-07-17 22:05:38', 1, 0, 1),
(67, 'jpeg', 'image05.jpg', '2017-07-17 22:24:20', 1, 0, 1),
(68, 'pdf', 'Cybernetics0001.pdf', '2017-07-17 22:24:20', 1, 0, 1),
(69, 'jpeg', 'image02.jpg', '2017-07-18 12:21:01', 1, 0, 1),
(70, 'pdf', 'Cybernetics0001.pdf', '2017-07-18 12:21:01', 1, 0, 1),
(71, 'jpeg', 'image07.jpg', '2017-07-18 12:22:25', 1, 0, 1),
(72, 'pdf', 'Cybernetics0001.pdf', '2017-07-18 12:22:25', 1, 0, 1),
(73, 'jpeg', 'image-best02.jpg', '2017-07-18 12:23:44', 1, 0, 1),
(74, 'pdf', 'Cybernetics0001.pdf', '2017-07-18 12:23:44', 1, 0, 1),
(75, 'jpeg', 'image03.jpg', '2017-07-18 12:25:42', 1, 0, 1),
(76, 'pdf', 'Cybernetics0001.pdf', '2017-07-18 12:25:42', 1, 0, 1),
(77, 'jpeg', 'image05.jpg', '2017-07-18 12:26:37', 1, 0, 1),
(78, 'pdf', 'Cybernetics0001.pdf', '2017-07-18 12:26:37', 1, 0, 1),
(79, 'jpeg', 'image-best04.jpg', '2017-07-18 12:28:14', 1, 0, 1),
(80, 'pdf', 'Cybernetics0001.pdf', '2017-07-18 12:28:14', 1, 0, 1),
(81, 'jpeg', 'image01.jpg', '2017-07-18 14:08:37', 1, 0, 1),
(82, 'jpeg', 'image04.jpg', '2017-07-18 14:08:37', 1, 0, 1),
(87, 'jpeg', 'image06.jpg', '2017-07-18 14:18:34', 1, 0, 1),
(88, 'pdf', 'Le développement des applications Client Serveur0001.pdf', '2017-07-18 14:18:34', 1, 0, 1),
(95, 'jpeg', 'image02.jpg', '2017-07-18 14:49:12', 1, 0, 1),
(96, 'pdf', 'Cybernetics0001.pdf', '2017-07-18 14:49:12', 1, 0, 1),
(97, 'jpeg', 'image-best04.jpg', '2017-07-18 14:58:42', 1, 0, 1),
(98, 'pdf', 'Cybernetics0001.pdf', '2017-07-18 14:58:42', 1, 0, 1),
(99, 'jpeg', 'image06.jpg', '2017-07-18 18:05:17', 1, 0, 1),
(100, 'pdf', 'Cybernetics0001.pdf', '2017-07-18 18:05:17', 1, 0, 1),
(101, 'jpeg', 'image07.jpg', '2017-08-01 15:38:53', 1, 0, 1),
(102, 'pdf', 'Cybernetics0001.pdf', '2017-08-01 15:38:53', 1, 0, 1),
(103, 'jpeg', 'image02.jpg', '2017-08-01 15:49:11', 1, 0, 1),
(104, 'pdf', 'Cybernetics0001.pdf', '2017-08-01 15:49:11', 1, 0, 1),
(105, 'jpeg', 'image07.jpg', '2017-08-01 15:50:08', 1, 0, 1),
(106, 'pdf', 'Cybernetics0001.pdf', '2017-08-01 15:50:08', 1, 0, 1),
(107, 'jpeg', 'picture006.jpg', '2017-08-11 16:32:42', 1, 0, 1),
(108, 'jpeg', 'images.jpg', '2017-08-11 17:05:22', 1, 0, 1),
(109, 'jpeg', 'Barca love.jpg', '2017-08-11 17:10:00', 1, 0, 1),
(110, 'jpeg', 'i2.jpg', '2017-08-11 21:05:50', 1, 0, 1),
(111, 'jpeg', '08iniestaV.jpg', '2017-08-11 21:25:08', 1, 0, 1),
(112, 'jpeg', '08iniestaV.jpg', '2017-08-14 20:45:01', 1, 0, 1),
(113, 'jpeg', 'nouveaux-maillot-FC-Barcelone-2014-640x480.jpg', '2017-08-14 20:45:01', 1, 0, 1),
(114, 'jpeg', 'Sécuriser enfin son PC0001.jpg', '2017-08-16 12:25:51', 1, 0, 1),
(115, 'pdf', 'Sécuriser enfin son PC0001.pdf', '2017-08-16 12:25:51', 1, 0, 1),
(116, 'png', '450px-SOA_Elements.png', '2017-08-16 12:55:44', 1, 0, 1),
(117, 'gif', 'UY1.gif', '2017-08-16 12:57:41', 1, 0, 1),
(118, 'png', '80a67d4a2374555d56d02b614ec2e295.png', '2017-08-16 14:35:50', 1, 0, 1),
(119, 'jpeg', '20160513_143450.jpg', '2017-08-16 15:27:14', 1, 0, 1),
(120, 'jpeg', '1468939536540.jpg', '2017-08-16 16:13:40', 1, 0, 1),
(121, 'jpeg', '1461276013338.jpg', '2017-08-17 15:26:35', 1, 0, 1),
(122, 'png', '4b810330abdf52041131bb69c09c278a.png', '2017-08-17 15:36:47', 1, 0, 1),
(123, 'png', '5042cdf1c3421d31c6685fa5a2aab6bc.png', '2017-08-17 15:40:37', 1, 0, 1),
(124, 'jpeg', '44.jpeg', '2017-08-17 16:39:03', 1, 0, 1),
(125, 'jpeg', 'IMG-20160314-WA0005.jpg', '2017-08-25 11:10:31', 1, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `subcategories_books`
--

CREATE TABLE IF NOT EXISTS `subcategories_books` (
  `id` int(11) NOT NULL,
  `subCategoryCode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `subcategories_books`
--

INSERT INTO `subcategories_books` (`id`, `subCategoryCode`) VALUES
(1, '000'),
(1, '110'),
(2, '000'),
(3, '310'),
(4, '110'),
(5, '100'),
(6, '000'),
(7, '400'),
(10, '010'),
(12, '300'),
(12, '310'),
(13, '110'),
(14, '100'),
(14, '110'),
(15, '010'),
(15, '110'),
(16, '010'),
(16, '300'),
(17, '000');

-- --------------------------------------------------------

--
-- Structure de la table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_category_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryCode` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_code`, `sub_category_name`, `categoryCode`) VALUES
('000', 'Computer science, knowledge and systems', '000'),
('010', 'Bibliographies', '000'),
('100', 'Phylosophy', '100'),
('110', 'Metaphysics', '100'),
('200', 'Religion', '200'),
('210', 'Philosophy and theory of religion', '200'),
('300', 'Social sciences, sociology & anthropology', '300'),
('310', 'Statistics', '300'),
('400', 'Language', '400'),
('410', 'Linguistics', '400');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `userCategory` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `studentID` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialty` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `first_name`, `family_name`, `phone_number`, `address`, `batch`, `image_id`, `userCategory`, `studentID`, `specialty`) VALUES
(7, 'admin', 'admin', 'zvanel@live.fr', 'zvanel@live.fr', 1, NULL, '$2y$13$yvyftxMRoF.ZFCUyelv7BOeLki0gKGrk7FSe7ZqTHk4LxfBqvZtNW', '2017-08-27 12:33:37', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 'Vannel', 'Zeufack', '691009095', 'Yaounde - Mendong', 'Junior', -2, 'Undergraduate', NULL, NULL),
(8, 'vannel', 'vannel', 'zv@yahoo.fr', 'zv@yahoo.fr', 1, NULL, '$2y$13$iHD5mcl0dFdZxYGF/Z9vW.JO57OeS5m1QrBs5sn2/JsisVw/N3x2m', '2017-08-27 12:31:27', NULL, NULL, 'N;', '1', '1', '1', '1', '1', -1, NULL, NULL, NULL),
(35, 'Loki', 'loki', 'max@gmail.com', 'max@gmail.com', 1, NULL, '$2y$13$3hfUWAkp5ztA3hy.OLBl/epkCn86VUo4yJKMKfGWbLWfjJGlQa44y', NULL, NULL, NULL, 'a:0:{}', 'Maxima', 'Mopek', '695020324', 'Maroua', 'Freshman', 111, 'Undergraduate', NULL, NULL),
(37, 'Darius', 'darius', 'darius@yahoo.fr', 'darius@yahoo.fr', 1, NULL, '$2y$13$ma3okjFvZtGDFNAlxNtlouAMRi9B0xQReZWjgM8.Uf8uQ9JVVz0H2', NULL, NULL, NULL, 'a:0:{}', 'Darius', 'Darius', '678231425', 'CCU', 'Junior', 3, NULL, NULL, NULL),
(38, 'Tindo', 'tindo', 'tindo@hotmail.com', 'tindo@hotmail.com', 1, NULL, '$2y$13$aLVyLvsmS3Ikl.bGdPyem.bl8txL9CxAeL54NbboV1mYj9vjSBQ..', NULL, NULL, NULL, 'a:0:{}', 'Tindo', 'Tindo', '656523578', 'Douala', 'Freshman', 4, NULL, NULL, NULL),
(39, 'tamo', 'tamo', 'tamo@pkf.com', 'tamo@pkf.com', 0, NULL, '$2y$13$NS9GgYt9D5gO8wmAeQYVX.67/50nzn0B1Pt97pL9jDYkU1oMBd/Se', NULL, NULL, NULL, 'a:0:{}', 'tamo', 'tamo', '677588975', 'Yaoundé', 'Sophomore', 5, NULL, NULL, NULL),
(40, 'Arnaud', 'arnaud', 'arnaud@gmail.com', 'arnaud@gmail.com', 1, NULL, '$2y$13$417lu6SoqGAsgH9UD8hR9.eZgDa5hStPLoEjNEuzj1chJbqinSseG', '2017-08-24 10:41:01', NULL, NULL, 'a:0:{}', 'Arnaud', 'Arnaud', '695724187', 'Anguissa', 'Freshman', 6, NULL, NULL, NULL),
(41, 'guitare', 'guitare', 'guitare@gmail.com', 'guitare@gmail.com', 1, NULL, '$2y$13$QtuSmTq9wZTuwcVjevdp.uTiD5QQvrckMlgVp7bCTiGbTiPtUv25C', '2017-08-24 10:42:40', NULL, NULL, 'a:0:{}', 'guitare', 'guitare', '675232145', 'Address', 'Junior', 7, NULL, NULL, NULL),
(42, 'Florent', 'florent', 'Florent@yahoo.com', 'florent@yahoo.com', 0, NULL, '$2y$13$sbax8VWYznDApFzJhn.j9ePTKkGBWRf6FrjYMq6iJSpOMiK4Juf1u', NULL, NULL, NULL, 'a:0:{}', 'Florent', 'Florent', '675321452', 'Enter', 'Junior', 8, NULL, NULL, NULL),
(43, 'Domguia', 'domguia', 'domguia@gmail.com', 'domguia@gmail.com', 0, NULL, '$2y$13$8xTb81GbVQwTkLrUp8vtru1MmBLFJrNO.LKE1xo3U.UqH8Hz2Wcsu', NULL, NULL, NULL, 'a:0:{}', 'domguia', 'domguia', '675232145', 'Soa', 'Sophomore', 9, NULL, NULL, NULL),
(44, 'Sokeng', 'sokeng', 'sokeng@gmail.com', 'sokeng@gmail.com', 1, NULL, '$2y$13$0N16MIH0Vpq/pUO7m43A8OO/JWIMO8Sdr3QtV.9B4xIOMT6l8x5wO', NULL, NULL, NULL, 'a:0:{}', 'Sokeng', 'Sokeng', '675231145', 'Ngousso', 'Sophomore', 10, NULL, NULL, NULL),
(45, 'Monthe', 'monthe', 'monthe@gmail.com', 'monthe@gmail.com', 0, NULL, '$2y$13$xwmsM7YNKqIZ.aDmsntiWufydhSVSCEYbxwU.pzIqhPrpTU1hL/sq', NULL, NULL, NULL, 'a:0:{}', 'Monthe', 'Monthe', '699958975', 'Somewhere', 'Sophomore', 11, NULL, NULL, NULL),
(46, 'eba', 'eba', 'eba@gmail.com', 'eba@gmail.com', 1, NULL, '$2y$13$HJz2/r.Pw72HilstI5pBQeIIc6AC/Td0NMLWie5m8H745KjhNl.dy', NULL, NULL, NULL, 'a:0:{}', 'eba', 'eba', '675852123', 'PKIE', 'Sophomore', 12, NULL, NULL, NULL),
(47, 'kenfack', 'kenfack', 'kenfack@gmail.com', 'kenfack@gmail.com', 1, NULL, '$2y$13$AhmZPnXJZBB8NR6X9je.iOz.hK0kO1/pTyn5owjjkUMayLrTctBEa', NULL, NULL, NULL, 'a:0:{}', 'kenfack', 'kenfack', '655632645', 'An address', 'Sophomore', 13, NULL, NULL, NULL),
(48, 'mopewou', 'mopewou', 'mopewou@gmail.com', 'mopewou@gmail.com', 1, NULL, '$2y$13$T5Ents5Nbv6qagaFMO8yLu8X1S.f4xHQGD2t0u.AStfM/KN9zjq5a', NULL, NULL, NULL, 'a:0:{}', 'mopewou', 'mopewou', '675231589', 'Here', 'Sophomore', 14, NULL, NULL, NULL),
(49, 'ayissi', 'ayissi', 'ayissi@gmail.com', 'ayissi@gmail.com', 1, NULL, '$2y$13$zd63wfO56I5l3OpOuONT0ODZCmXQACwXf5xxJOpbg87/eAM8DhCrK', NULL, NULL, NULL, 'a:0:{}', 'ayissi', 'ayissi', '655555555', 'Your', 'Sophomore', 15, NULL, NULL, NULL),
(50, 'pepa', 'pepa', 'pepa@gmail.com', 'pepa@gmail.com', 1, NULL, '$2y$13$HxHgsRwQvhY4EPPjFZCh7uJkSm2KNeT00bsrQStMtWEvO/WBM0/wW', '2017-07-24 13:18:10', NULL, NULL, 'a:0:{}', 'pepa', 'pepa', '652312123', 'JKU', 'Sophomore', 16, NULL, NULL, NULL),
(52, 'bissom', 'bissom', 'bissom@gmail.com', 'bissom@gmail.com', 1, NULL, '$2y$13$gGqStlc0Ew4901l0.vWQp.LaJgzrs0sneI5hJjNYXSAOvpecccH8e', NULL, NULL, NULL, 'a:0:{}', 'bissom', 'bissom', '652231147', 'An Add', 'Sophomore', 18, NULL, NULL, NULL),
(53, 'bissem', 'bissem', 'bissem@gmail.com', 'bissem@gmail.com', 0, NULL, '$2y$13$lb4tQLG7yTW8cvq6prqRCu3BfV2O1bXFVhjR4wjZb73EhLnGUPxC.', NULL, NULL, NULL, 'a:0:{}', 'bissem', 'bissem', '651123147', 'EEA', 'Sophomore', 19, NULL, NULL, NULL),
(54, 'hell', 'hell', 'hell@gmail.com', 'hell@gmail.com', 0, NULL, '$2y$13$2NQObcC4IK8yo/XhAtKDsuNzHH5RGBLGItk6uHiPRWvGyMo.4bV4W', NULL, NULL, NULL, 'a:0:{}', 'hell', 'hell', '699685632', 'Addresse', 'Sophomore', 20, NULL, NULL, NULL),
(55, 'tadaah', 'tadaah', 'tadaah@yahoo.com', 'tadaah@yahoo.com', 1, NULL, '$2y$13$AAsjZorib955H1ECCyGTO.Pl2Gn2fUNpT.YiEhB28Jh8nuHPOJjVi', '2017-08-25 19:25:17', NULL, NULL, 'a:0:{}', 'tadaah', 'tadaah', '677598563', 'An add', 'Sophomore', 21, NULL, NULL, NULL),
(56, 'ngokseu', 'ngokseu', 'ngokseu@gmail.com', 'ngokseu@gmail.com', 0, NULL, '$2y$13$M9iuKEplGqhCR0xIpB6eOOeYpHSca6fELEsMnaeZ7Eog.0SgMQyTW', NULL, NULL, NULL, 'a:0:{}', 'ngokseu', 'ngokseu', '652523652', 'Lib', 'Sophomore', 22, NULL, NULL, NULL),
(78, 'test7', 'test7', 'test7@dfsfd.fr', 'test7@dfsfd.fr', 0, NULL, '$2y$13$rL11TKwMtcRUchfXha78genqcMsJrL1bbK5bmL8hOTXgGKVu.Utcq', NULL, NULL, NULL, 'a:0:{}', 'test7', 'test7', '45218', 'sadfewf', NULL, 44, NULL, NULL, NULL),
(79, 'test8', 'test8', 'test8@adfasdf.fr', 'test8@adfasdf.fr', 0, NULL, '$2y$13$x.1eHPmdjnXkFgQUU0GqLeMnOgJV1.KT0xqK/sJIFF9XvVKOnXX6C', NULL, NULL, NULL, 'a:0:{}', 'test8', 'test8', '41478', 'dsdfasdf', NULL, 45, NULL, NULL, NULL),
(80, 'test10', 'test10', 'test10@kjhdsd.fr', 'test10@kjhdsd.fr', 0, NULL, '$2y$13$VpA0OJEm/QvjcbPo7B8CxOMmEoFZfZdbhhhCR90GoDxXOWPC92eSy', NULL, NULL, NULL, 'a:0:{}', 'test10', 'test10', '25255', 'ddwfwwe', NULL, 46, NULL, NULL, NULL),
(82, 'test30', 'test30', 'test30@kjhdsd.fr', 'test30@kjhdsd.fr', 0, NULL, '$2y$13$jMf1iJKgrm1GW0yMILwhKeUciIm3uvLVvjH157M4pfwqlySFFUxGq', NULL, NULL, NULL, 'a:0:{}', 'test30', 'test30', '474747474', 'FADSFASDFR', NULL, 48, NULL, NULL, NULL),
(83, 'userleo', 'userleo', 'leo@leo.fr', 'leo@leo.fr', 0, NULL, '$2y$13$eC4qZ5AnlTwya5hGVtXGmuIdYWqPqyOvIlQYYl81etvGCpFNRsWrO', NULL, NULL, NULL, 'a:0:{}', 'Yanou', 'Leo', '655932545', 'Jouvence', 'Freshman', 107, 'BEA', '12s009', 'Computer Science'),
(84, 'kome', 'kome', 'kome@kome.com', 'kome@kome.com', 0, NULL, '$2y$13$OvAfq1KwPq4VnZbnXMqNPeDC3NZuQJyt7qOPzMgdmHm/GqoRzUcia', NULL, NULL, NULL, 'a:0:{}', 'Kome', 'Mrs', '657412589', 'street house', NULL, 108, 'Lecturer', NULL, NULL),
(85, 'gael', 'gael', 'gael@gael.fr', 'gael@gael.fr', 0, NULL, '$2y$13$qVhmlSNfBNXn1XPjMj3/QuL44vVeRqCZIEDpyUDWQEmjujNWhJAJ.', NULL, NULL, NULL, 'a:0:{}', 'Gaelle', 'Donfack', '678954125', 'Mendong', NULL, 109, 'Lecturer', NULL, NULL),
(86, 'Cool', 'cool', 'cool@cool.fr', 'cool@cool.fr', 0, NULL, '$2y$13$mDjdbfhF1nd/8HNjpWdL1OkMNJ5FhP0574z80eGd65M7IrDKFEpWC', NULL, NULL, NULL, 'a:0:{}', 'Wanderful', 'Mamamia', '0', 'jjjjjjj', 'Sophomore', 110, 'Undergraduate', '455', 'Economics'),
(89, 'dirane', 'dirane', 'dirane@gmail.com', 'dirane@gmail.com', 1, NULL, '$2y$13$4rAjnQnlpHJLeRNVELMUJe3mLongkPIMInEha9xUnYkoegJ4bDQ/m', '2017-08-16 15:51:29', NULL, NULL, 'a:0:{}', 'Dirane', 'dirane', '679532123', 'Emana', 'Freshman', 118, 'Undergraduate', '125', 'Information Technology'),
(90, 'martial', 'martial', 'martial@gmail.com', 'martial@gmail.com', 1, NULL, '$2y$13$oFQOn8KrLq30/Xt6fmmSCuarGDJ.VQxx3W1C8eHBbO360PL2U.1IC', '2017-08-21 14:06:59', NULL, NULL, 'a:0:{}', 'Talla', 'martial', '678521123', 'Mballa 2', 'Freshman', 119, 'Undergraduate', '12H125', 'Economics'),
(91, 'mekontso', 'mekontso', 'bate@hotmail.com', 'bate@hotmail.com', 1, NULL, '$2y$13$MaazjJBVuej8yzHgjv2jOu3XZMfM/0iKwr/9q8SAx3lGLyZ3IVyO.', '2017-08-16 16:15:14', NULL, NULL, 'a:0:{}', 'Mekontso', 'bate', '678231145', 'Nsam - Yaoundé', 'Sophomore', 120, 'Lecturer', '123547', 'Others'),
(92, 'nouveau', 'nouveau', 'nouveau@gmail.com', 'nouveau@gmail.com', 0, NULL, '$2y$13$tRZZEzsWn7Q/FZZuNrPVb.isPQxTsjjoHyXikd/OxcM4gr4IV9dPy', NULL, NULL, NULL, 'a:0:{}', 'nouveau', 'nouveau', '655624275', 'Nouveau', 'Sophomore', 121, 'Undergraduate', '10005', 'Economics'),
(93, 'kontelejou', 'kontelejou', 'kontelejou@gmail.com', 'kontelejou@gmail.com', 0, NULL, '$2y$13$D/f0q1afrbSD7teJuqwL0.fpOp7JFL2DrWekCxKPfDLndUWBD5yeK', NULL, NULL, NULL, 'a:0:{}', 'kontelejou', 'kontelejou', '652231147', 'Mbouda', 'Junior', 122, 'Undergraduate', '7852', 'Others'),
(94, 'aperson', 'aperson', 'aperson@hotmail.com', 'aperson@hotmail.com', 0, NULL, '$2y$13$1rjACklLL5jCCKoH2QpMYO3eKFLX5FWDdfvm9Jy1HY70XeBFcagaq', NULL, NULL, NULL, 'a:0:{}', 'aperson', 'aperson', '652231147', 'An address', 'Sophomore', 123, 'Undergraduate', '23145', 'Information Technology'),
(95, 'legrand', 'legrand', 'legrand@gmail.com', 'legrand@gmail.com', 0, NULL, '$2y$13$F6pJ/llNIBDRaQ5KCyWqieQfez6jIAUC50BinVOjUUbN7zKaOkOrS', NULL, NULL, NULL, 'a:0:{}', 'legrand', 'legrand', '695523124', 'Address', 'Sophomore', 124, 'Undergraduate', '10047', 'Electrical Engineering'),
(96, 'juikom', 'juikom', 'juikom@gmail.com', 'juikom@gmail.com', 1, NULL, '$2y$13$xVs/2C5WL1ukh/mznruwuuTLb5RjrFRYFODOQHjtB1pZKIDT30K0.', '2017-08-25 13:26:34', NULL, NULL, 'a:0:{}', 'juikom', 'juikom', '67514123', 'Nkosoa', 'Junior', 125, 'MBA', '1745', 'Electrical Engineering');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_CBE5A331CC1CF4E6` (`isbn`),
  ADD UNIQUE KEY `UNIQ_CBE5A331FBB1579A` (`pklib_code`),
  ADD UNIQUE KEY `UNIQ_CBE5A33167B1C660` (`ean`),
  ADD UNIQUE KEY `UNIQ_CBE5A331C50D86A0` (`cover_picture_id`),
  ADD UNIQUE KEY `UNIQ_CBE5A3312AC2D45C` (`summary_id`);

--
-- Index pour la table `book_user`
--
ALTER TABLE `book_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B6CDB0DCA33F7DF7` (`bookId`),
  ADD KEY `IDX_B6CDB0DC64B64DCC` (`userId`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_code`);

--
-- Index pour la table `dateborrowed`
--
ALTER TABLE `dateborrowed`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_83ACA7CB1675934B` (`borrowId`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subcategories_books`
--
ALTER TABLE `subcategories_books`
  ADD PRIMARY KEY (`id`,`subCategoryCode`),
  ADD KEY `IDX_3E47D361BF396750` (`id`),
  ADD KEY `IDX_3E47D3611CFB379E` (`subCategoryCode`);

--
-- Index pour la table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_code`),
  ADD KEY `IDX_BCE3F798BF8E2B06` (`categoryCode`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`),
  ADD UNIQUE KEY `UNIQ_8D93D6493DA5256D` (`image_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `book_user`
--
ALTER TABLE `book_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `dateborrowed`
--
ALTER TABLE `dateborrowed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `FK_CBE5A3312AC2D45C` FOREIGN KEY (`summary_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `FK_CBE5A331C50D86A0` FOREIGN KEY (`cover_picture_id`) REFERENCES `image` (`id`);

--
-- Contraintes pour la table `book_user`
--
ALTER TABLE `book_user`
  ADD CONSTRAINT `FK_B6CDB0DC64B64DCC` FOREIGN KEY (`userId`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_B6CDB0DCA33F7DF7` FOREIGN KEY (`bookId`) REFERENCES `book` (`id`);

--
-- Contraintes pour la table `dateborrowed`
--
ALTER TABLE `dateborrowed`
  ADD CONSTRAINT `FK_83ACA7CB1675934B` FOREIGN KEY (`borrowId`) REFERENCES `book_user` (`id`);

--
-- Contraintes pour la table `subcategories_books`
--
ALTER TABLE `subcategories_books`
  ADD CONSTRAINT `FK_3E47D3611CFB379E` FOREIGN KEY (`subCategoryCode`) REFERENCES `sub_category` (`sub_category_code`),
  ADD CONSTRAINT `FK_3E47D361BF396750` FOREIGN KEY (`id`) REFERENCES `book` (`id`);

--
-- Contraintes pour la table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `FK_BCE3F798BF8E2B06` FOREIGN KEY (`categoryCode`) REFERENCES `category` (`category_code`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6493DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
