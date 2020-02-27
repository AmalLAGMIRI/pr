-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 27 fév. 2020 à 13:40
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dradmin`
--

-- --------------------------------------------------------

--
-- Structure de la table `medicaments`
--

DROP TABLE IF EXISTS `medicaments`;
CREATE TABLE IF NOT EXISTS `medicaments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medicaments`
--

INSERT INTO `medicaments` (`id`, `name`, `description`) VALUES
(1, 'amalp', 'kkppppp'),
(4, 'ppppp', 'kk');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `mutuelle` varchar(255) NOT NULL,
  `scolarite` varchar(255) NOT NULL,
  `date_naissance_age` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `autre_inforamtions` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `nombre_denfant` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `situation_familiale` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`id`, `nom`, `reference`, `cin`, `mutuelle`, `scolarite`, `date_naissance_age`, `adresse`, `tel`, `autre_inforamtions`, `profession`, `nombre_denfant`, `prenom`, `situation_familiale`) VALUES
(1, 'Molestiae voluptatib', 'Ipsam unde in sed qu', 'Exercitationem vitae', 'Voluptate labore qua', 'Magnam do pariatur ', '25-Jan-1972', 'Qui est neque ex su', 'Omnis ea eos quasi s', 'Ut dicta et nulla no', 'Voluptatem sit sed q', 3, 'Quam asperiores magn', ''),
(2, 'Amet est ad quidem ', 'Veritatis quis ut pr', 'Quod pariatur Imped', 'In et consectetur q', 'In in a cum iste err', '11-Sep-2017', 'In nulla deserunt so', 'Optio nulla consequ', 'Quis voluptate amet', 'Ratione non providen', 3, 'In quis ratione cupi', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'admin',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'dradmin', 'dradmin@gmail.com', 'dradmin@123', 'admin', '2020-01-19 16:19:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
