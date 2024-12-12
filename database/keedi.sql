-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 12 déc. 2024 à 12:07
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `keedi`
--

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

CREATE TABLE `temoignage` (
  `IdTemoignage` int(11) NOT NULL,
  `ProfilTemoignage` varchar(255) NOT NULL,
  `NomTemoignage` varchar(255) NOT NULL,
  `ProfessionTemoignage` varchar(255) NOT NULL,
  `MessageTemoignage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`IdTemoignage`, `ProfilTemoignage`, `NomTemoignage`, `ProfessionTemoignage`, `MessageTemoignage`) VALUES
(1, '24-12-09-33akila_blog182.png', 'hapi', 'informaticien', 'ffffffffffffffffffffffffffffffffffffffffffffffffff'),
(2, '24-12-09-21akila_blog807.png', 'hapi', 'informaticien', 'nnnnnnnnnnnnnnnnnnnnnnnnn'),
(3, '24-12-09-15akila_blog166.png', 'hapi', 'informaticien', 'uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu'),
(4, '24-12-09-30akila_blog697.png', 'tagne', 'informaticien', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhbbbbbbbbbbb'),
(5, '24-12-09-37akila_blog403.png', 'takou', 'menusier', 'tttrtyyyyyyyyyyyyyyyyyyyyyyyyyytttttttttttt'),
(6, '24-12-09-55akila_blog88.png', 'tagne', 'infographe', 'comment comment comment'),
(7, '24-12-09-14akila_blog871.png', 'tagne', 'informaticien', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr'),
(8, '24-12-09-53akila_blog66.png', 'takou', 'menusier', 'uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu'),
(9, '24-12-09-51akila_blog665.png', 'hapi', 'menusier', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjoooooooooooooooooooooo'),
(10, '24-12-09-38akila_blog465.png', 'takou', 'infographe', 'yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy'),
(11, '24-12-09-17akila_blog876.jpg', 'tchapda felix', 'ingenieur', 'bonjour  bonjour  bonjour  bonjour bonjour  bonjour  bonjour  bonjour  bonjour');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `temoignage`
--
ALTER TABLE `temoignage`
  ADD PRIMARY KEY (`IdTemoignage`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `IdTemoignage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
