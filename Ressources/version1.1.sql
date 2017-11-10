-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- G�n�r� le :  Mer 01 Novembre 2017 � 19:20
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de donn�es :  `jaroflife`
--
CREATE DATABASE IF NOT EXISTS `jaroflife` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jaroflife`;

-- --------------------------------------------------------

--
-- Structure de la table `todos`
--

DROP TABLE IF EXISTS `todos`;
CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `todos`
--

INSERT INTO `todos` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'partager une bi�re avec quelqu\'un', 'peu importe � quel point ta vie semble remplie, tu as toujours le temps de partager une bi�re avec quelqu\'un', '2017-11-01 17:30:20', '2017-11-01 17:35:01', NULL),
(2, 'ranger les balles de ping-pong', 'ramasser les balles de ping-pong dans la salle de jeu, et les ranger dans mon bocal', '2017-11-01 18:16:50', '2017-11-01 18:19:08', NULL),
(3, 'ranger les cailloux', 'ramasser les cailloux devant l\'entr�e, et les ranger dans mon bocal', '2017-11-01 18:18:14', '2017-11-01 18:19:21', NULL),
(4, 'ranger le sable', 'ramasser le sable sur la plage, et le ranger dans mon bocal', '2017-11-01 18:19:54', '2017-11-01 18:19:54', NULL);

--
-- Index pour les tables export�es
--

--
-- Index pour la table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables export�es
--

--
-- AUTO_INCREMENT pour la table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;