-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 16 nov. 2023 à 11:30
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pokédex`
--

-- --------------------------------------------------------

--
-- Structure de la table `evolution`
--

DROP TABLE IF EXISTS `evolution`;
CREATE TABLE IF NOT EXISTS `evolution` (
  `id` int NOT NULL AUTO_INCREMENT,
  `number` smallint NOT NULL,
  `number_evolve` smallint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `evolution`
--

INSERT INTO `evolution` (`id`, `number`, `number_evolve`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 4, 5),
(4, 5, 6),
(5, 7, 8),
(6, 8, 9),
(7, 133, 134),
(8, 133, 135),
(9, 133, 136),
(10, 133, 196),
(11, 133, 197),
(12, 133, 470),
(13, 133, 471),
(14, 133, 700);

-- --------------------------------------------------------

--
-- Structure de la table `pokémon`
--

DROP TABLE IF EXISTS `pokémon`;
CREATE TABLE IF NOT EXISTS `pokémon` (
  `id` smallint NOT NULL AUTO_INCREMENT,
  `number` smallint NOT NULL,
  `nom` varchar(25) NOT NULL,
  `type1` varchar(255) NOT NULL,
  `type2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pokémon`
--

INSERT INTO `pokémon` (`id`, `number`, `nom`, `type1`, `type2`) VALUES
(1, 1, 'bulbasaur', '1', '6'),
(2, 2, 'ivysaur', '1', '6'),
(3, 3, 'venusaur', '1', '6'),
(4, 4, 'charmander', '2', 'NULL'),
(5, 5, 'charmeleon', '2', 'NULL'),
(6, 6, 'charizard', '2', '5'),
(7, 7, 'squirtle', '3', 'NULL'),
(8, 8, 'wartortle', '3', 'NULL'),
(9, 9, 'blastoise', '3', 'NULL'),
(10, 133, 'eevee', '18', 'NULL'),
(11, 134, 'vaporeon', '3', 'NULL'),
(12, 135, 'jolteon', '9', 'NULL'),
(13, 136, 'flareon', '2', 'NULL'),
(14, 196, 'espeon', '12', 'NULL'),
(15, 197, 'umbreon', '14', 'NULL'),
(16, 470, 'leafeon', '1', 'NULL'),
(17, 471, 'glaceon', '17', 'NULL'),
(18, 700, 'sylveon', '8', 'NULL');

-- --------------------------------------------------------

--
-- Structure de la table `stats`
--

DROP TABLE IF EXISTS `stats`;
CREATE TABLE IF NOT EXISTS `stats` (
  `id` int NOT NULL AUTO_INCREMENT,
  `number` smallint NOT NULL,
  `hp` smallint NOT NULL,
  `attack` smallint NOT NULL,
  `defense` smallint NOT NULL,
  `spec_defense` smallint NOT NULL,
  `spec_attack` smallint NOT NULL,
  `speed` smallint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `stats`
--

INSERT INTO `stats` (`id`, `number`, `hp`, `attack`, `defense`, `spec_defense`, `spec_attack`, `speed`) VALUES
(1, 1, 45, 49, 49, 65, 65, 45),
(2, 2, 60, 62, 63, 80, 80, 60),
(3, 3, 80, 82, 83, 100, 100, 80),
(4, 4, 39, 52, 43, 60, 50, 65),
(5, 5, 58, 64, 58, 80, 65, 80),
(6, 6, 78, 84, 78, 109, 85, 100),
(7, 7, 44, 48, 65, 50, 64, 43),
(8, 8, 59, 63, 80, 65, 80, 58),
(9, 9, 79, 83, 100, 85, 105, 78),
(10, 133, 55, 55, 55, 55, 55, 55),
(11, 134, 130, 65, 60, 110, 95, 65),
(12, 135, 65, 65, 60, 110, 95, 130),
(13, 136, 65, 130, 60, 95, 110, 65),
(14, 196, 65, 65, 60, 110, 95, 130),
(15, 197, 95, 65, 110, 60, 130, 65),
(16, 470, 65, 110, 130, 60, 65, 95),
(17, 471, 65, 60, 110, 130, 95, 65),
(18, 700, 95, 65, 110, 60, 130, 65);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'Plante'),
(2, 'Feu'),
(3, 'Eau'),
(4, 'Insecte'),
(5, 'Vol'),
(6, 'Poison'),
(7, 'Sol'),
(8, 'Fée'),
(9, 'Électrique'),
(10, 'Roche'),
(11, 'Combat'),
(12, 'Psy'),
(13, 'Spectre'),
(14, 'Ténèbres'),
(15, 'Dragon'),
(16, 'Acier'),
(17, 'Glace'),
(18, 'Normal');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
