-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 10 nov. 2017 à 08:49
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `colyseum`
--
CREATE DATABASE IF NOT EXISTS `colyseum` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `colyseum`;

-- --------------------------------------------------------

--
-- Structure de la table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `clientId` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bookings`
--

INSERT INTO `bookings` (`id`, `clientId`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25);

-- --------------------------------------------------------

--
-- Structure de la table `cards`
--

DROP TABLE IF EXISTS `cards`;
CREATE TABLE IF NOT EXISTS `cards` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cardNumber` int(10) UNSIGNED NOT NULL,
  `cardTypesId` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cards`
--

INSERT INTO `cards` (`id`, `cardNumber`, `cardTypesId`) VALUES
(1, 2627, 3),
(2, 2022, 3),
(3, 2608, 3),
(4, 2377, 1),
(5, 1869, 4),
(6, 2403, 4),
(7, 1263, 3),
(8, 2198, 1),
(9, 2927, 2),
(10, 2775, 2);

-- --------------------------------------------------------

--
-- Structure de la table `cardtypes`
--

DROP TABLE IF EXISTS `cardtypes`;
CREATE TABLE IF NOT EXISTS `cardtypes` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `discount` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cardtypes`
--

INSERT INTO `cardtypes` (`id`, `type`, `discount`) VALUES
(1, 'Fidélité', 20),
(2, 'Famille Nombreuse', 30),
(3, 'Etudiant', 40),
(4, 'Employé', 50);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lastName` varchar(45) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `birthDate` date NOT NULL,
  `card` tinyint(1) NOT NULL,
  `cardNumber` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `lastName`, `firstName`, `birthDate`, `card`, `cardNumber`) VALUES
(1, 'Brennan', 'Guinevere', '1994-02-05', 1, 2627),
(2, 'Dean', 'Ori', '1973-11-23', 0, NULL),
(3, 'Sharpe', 'Nora', '1983-03-10', 0, NULL),
(4, 'Hampton', 'Wade', '2000-03-05', 1, 2022),
(5, 'Conner', 'Kibo', '1979-11-04', 0, NULL),
(6, 'Klein', 'Hilary', '1972-12-16', 0, NULL),
(7, 'Tyler', 'Lawrence', '1996-05-13', 0, NULL),
(8, 'Dudley', 'Tanya', '1966-12-28', 0, NULL),
(9, 'Terrell', 'Kim', '1997-07-27', 1, 2608),
(10, 'Mclaughlin', 'Laura', '1977-02-16', 0, NULL),
(11, 'Lewis', 'Linda', '1983-07-18', 0, NULL),
(12, 'Ware', 'Gemma', '1969-10-17', 1, 2377),
(13, 'Roth', 'Jolie', '1981-02-24', 0, NULL),
(14, 'Michael', 'Harriet', '1961-11-27', 1, 1869),
(15, 'Simpson', 'Paloma', '1998-01-07', 0, NULL),
(16, 'Cote', 'Fulton', '1967-11-01', 1, 2403),
(17, 'Wheeler', 'Echo', '1965-10-10', 0, NULL),
(18, 'Snider', 'Desiree', '1996-07-28', 0, NULL),
(19, 'Vaughan', 'Vanna', '1992-09-13', 1, 1263),
(20, 'Barnes', 'Preston', '1988-12-20', 1, 2198),
(21, 'Padilla', 'Britanney', '2015-04-03', 1, 2927),
(22, 'Perry', 'Gabriel', '1974-04-09', 1, 2775),
(23, 'Mccormick', 'Hyatt', '1968-05-02', 0, NULL),
(24, 'Stark', 'Keiko', '1985-04-08', 0, NULL),
(25, 'London', 'Sean', '1975-02-02', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `genre` varchar(45) NOT NULL,
  `showTypesId` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id`, `genre`, `showTypesId`) VALUES
(1, 'Variété et chanson française', 1),
(2, 'Variété internationale', 1),
(3, 'Pop/Rock', 1),
(4, 'Musique électronique', 1),
(5, 'Folk', 1),
(6, 'Rap', 1),
(7, 'Hip Hop', 1),
(8, 'Slam', 1),
(9, 'Reggae', 1),
(10, 'Clubbing', 1),
(11, 'RnB', 1),
(12, 'Soul', 1),
(13, 'Funk', 1),
(14, 'Jazz', 1),
(15, 'Blues', 1),
(16, 'Country', 1),
(17, 'Gospel', 1),
(18, 'Musique du monde', 1),
(19, 'Classique', 1),
(20, 'Opéra', 1),
(21, 'Autres', 1),
(22, 'Drame', 2),
(23, 'Comédie', 2),
(24, 'Comtemporain', 2),
(25, 'Monologue', 2),
(26, 'One Man / Woman Show', 3),
(27, 'Café-Théâtre', 3),
(28, 'Stand Up', 3),
(29, 'Autres', 3),
(30, 'Comtemporaine', 4),
(31, 'Classique', 4),
(32, 'Urbaine', 4);

-- --------------------------------------------------------

--
-- Structure de la table `shows`
--

DROP TABLE IF EXISTS `shows`;
CREATE TABLE IF NOT EXISTS `shows` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `performer` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `showTypesId` smallint(5) UNSIGNED NOT NULL,
  `firstGenresId` smallint(5) UNSIGNED NOT NULL,
  `secondGenreId` smallint(5) UNSIGNED NOT NULL,
  `duration` time NOT NULL,
  `startTime` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `shows`
--

INSERT INTO `shows` (`id`, `title`, `performer`, `date`, `showTypesId`, `firstGenresId`, `secondGenreId`, `duration`, `startTime`) VALUES
(1, 'Vestibulum accumsan', 'Osborn', '2016-10-15', 1, 4, 3, '02:00:00', '20:00:00'),
(2, 'Venenatis lacus', 'Dale', '2017-01-05', 1, 1, 8, '02:00:00', '20:00:00'),
(3, 'Sem egestas', 'Juarez', '2017-02-01', 1, 8, 21, '02:00:00', '20:00:00'),
(4, 'Nec urna', 'Tate', '2018-05-02', 1, 3, 21, '02:00:00', '20:00:00'),
(5, 'Neque et', 'Hays', '2016-12-24', 1, 6, 15, '02:00:00', '20:00:00'),
(6, 'Convallis convallis', 'Boone', '2019-12-18', 1, 9, 21, '02:00:00', '20:00:00'),
(7, 'Cursus. Nunc', 'Prince', '2020-05-02', 1, 6, 10, '02:00:00', '20:00:00'),
(8, 'Ornare lectus', 'Butler', '2016-12-25', 1, 10, 9, '02:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `showtypes`
--

DROP TABLE IF EXISTS `showtypes`;
CREATE TABLE IF NOT EXISTS `showtypes` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `showtypes`
--

INSERT INTO `showtypes` (`id`, `type`) VALUES
(1, 'Concert'),
(2, 'Théâtre'),
(3, 'Humour'),
(4, 'Danse');

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `price` float NOT NULL,
  `bookingsId` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`id`, `price`, `bookingsId`) VALUES
(1, 40, 1),
(2, 40, 1),
(3, 40, 1),
(4, 40, 1),
(5, 40, 1),
(6, 40, 2),
(7, 40, 2),
(8, 40, 2),
(9, 40, 2),
(10, 40, 2),
(11, 40, 3),
(12, 40, 3),
(13, 40, 3),
(14, 40, 4),
(15, 40, 5),
(16, 40, 6),
(17, 40, 6),
(18, 40, 6),
(19, 40, 6),
(20, 40, 6),
(21, 40, 7),
(22, 40, 7),
(23, 40, 8),
(24, 40, 9),
(25, 40, 9),
(26, 40, 9),
(27, 40, 9),
(28, 40, 9),
(29, 40, 9),
(30, 40, 9),
(31, 40, 10),
(32, 40, 10),
(33, 40, 10),
(34, 40, 10),
(35, 40, 11),
(36, 40, 11),
(37, 40, 11),
(38, 40, 11),
(39, 40, 11),
(40, 40, 11),
(41, 40, 12),
(42, 40, 12),
(43, 40, 12),
(44, 40, 12),
(45, 40, 12),
(46, 40, 12),
(47, 40, 12),
(48, 40, 12),
(49, 40, 12),
(50, 40, 12),
(51, 40, 13),
(52, 40, 13),
(53, 40, 13),
(54, 40, 13),
(55, 40, 13),
(56, 40, 13),
(57, 40, 13),
(58, 40, 13),
(59, 40, 13),
(60, 40, 13),
(61, 40, 14),
(62, 40, 14),
(63, 40, 14),
(64, 40, 15),
(65, 40, 15),
(66, 40, 15),
(67, 40, 15),
(68, 40, 16),
(69, 40, 17),
(70, 40, 17),
(71, 40, 17),
(72, 40, 17),
(73, 40, 17),
(74, 40, 18),
(75, 40, 18),
(76, 40, 18),
(77, 40, 18),
(78, 40, 19),
(79, 40, 19),
(80, 40, 19),
(81, 40, 19),
(82, 40, 20),
(83, 40, 20),
(84, 40, 20),
(85, 40, 21),
(86, 40, 21),
(87, 40, 21),
(88, 40, 21),
(89, 40, 22),
(90, 40, 22),
(91, 40, 22),
(92, 40, 23),
(93, 40, 23),
(94, 40, 23),
(95, 40, 24),
(96, 40, 24),
(97, 40, 24),
(98, 40, 25),
(99, 40, 25),
(100, 40, 25);
--
-- Base de données :  `jaroflife`
--
CREATE DATABASE IF NOT EXISTS `jaroflife` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jaroflife`;
--
-- Base de données :  `todo_project`
--
CREATE DATABASE IF NOT EXISTS `todo_project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `todo_project`;

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

DROP TABLE IF EXISTS `tache`;
CREATE TABLE IF NOT EXISTS `tache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `priority` varchar(255) NOT NULL,
  `calendar` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tache`
--

INSERT INTO `tache` (`id`, `title`, `description`, `priority`, `calendar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Rdv chez le coiffeur', 'J\'ai rendez vous le 20/1/2018 à 14h chez le coiffeur', 'urgent et non-important', '2017-10-24', '2017-11-03 10:34:00', '2017-11-08 13:22:05', '2017-11-08 13:22:05'),
(2, 'Aller chez Simplon', 'Travailler et apprendre chez Simplon', 'non-urgent et non-important', '2017-11-02', '2017-11-03 10:34:00', '2017-11-08 13:22:05', '2017-11-08 13:22:05'),
(3, 'partager une bi?re avec quelqu\'un', 'peu importe ? quel point ta vie semble remplie, tu as toujours le temps de partager une bi?re avec quelqu\'un', 'non-urgent et non-important', '2017-11-22', '2017-11-03 10:39:34', '2017-11-08 13:22:05', '2017-11-08 13:22:05'),
(4, 'ranger les balles de ping-pong', 'ramasser les balles de ping-pong dans la salle de jeu, et les ranger dans mon bocal', 'non-urgent et non-important', '2017-11-15', '2017-11-03 10:39:34', '2017-11-08 13:22:05', '2017-11-08 13:22:05'),
(5, 'ranger les cailloux', 'ramasser les cailloux devant l\'entr?e, et les ranger dans mon bocal', 'non-urgent et non-important', '2017-11-21', '2017-11-03 10:40:48', '2017-11-08 13:22:05', '2017-11-08 13:22:05'),
(6, 'ranger le sable', 'ramasser le sable sur la plage, et le ranger dans mon bocal', 'non-urgent et non-important', '2017-11-22', '2017-11-03 10:41:33', '2017-11-08 13:22:05', '2017-11-08 13:22:05'),
(7, 'test', 'test', 'important et urgent', '2017-11-05', '2017-11-04 13:43:09', '2017-11-08 13:22:05', '2017-11-08 13:22:05'),
(8, 'test', 'test', 'non-urgent et non-important', '2017-11-11', '2017-11-04 15:24:56', '2017-11-08 13:22:05', '2017-11-08 13:22:05'),
(9, 'test', 'test', 'test-priority', '2017-11-08', '2017-11-08 14:26:51', '2017-11-08 14:26:51', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `User_id` int(255) NOT NULL AUTO_INCREMENT,
  `Login` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`User_id`, `Login`, `Password`) VALUES
(1, 'admin', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
