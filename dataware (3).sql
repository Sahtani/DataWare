-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 17 nov. 2023 à 18:43
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
-- Base de données : `dataware`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

CREATE TABLE `equipes` (
  `ID_equipe` int(11) NOT NULL,
  `Nom_Equipe` varchar(255) NOT NULL,
  `Date_Creation` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `equipes`
--

INSERT INTO `equipes` (`ID_equipe`, `Nom_Equipe`, `Date_Creation`) VALUES
(1, 'NightCrawlers', '2023-10-09'),
(2, 'CodeX', '2023-11-10'),
(3, 'DIGITAL_REVOLUTION', '2023-11-11');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `ID_membre` int(11) NOT NULL,
  `Nom_Membre` varchar(255) NOT NULL,
  `Prenom_Membre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Tel` int(11) DEFAULT NULL,
  `Role` varchar(255) DEFAULT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `ID_equipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`ID_membre`, `Nom_Membre`, `Prenom_Membre`, `email`, `Tel`, `Role`, `statut`, `ID_equipe`) VALUES
(1, 'sahtani', 'soumia', 'soumia@gmail.com', 644228575, 'scrummaster', 'active', 1),
(2, 'akil', 'salah', 'akil@gmail.com', 644224575, 'developer', 'active', 2),
(3, 'ghollam', 'mohamed', 'ghoullam@gmail.com', 644226510, 'Developer', 'active', 2),
(4, 'sahtani', 'ali', 'ali@gmail.com', 641226547, 'ProductOwner', 'active', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`ID_equipe`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`ID_membre`),
  ADD KEY `ID_equipe` (`ID_equipe`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `equipes`
--
ALTER TABLE `equipes`
  MODIFY `ID_equipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `ID_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `membre_ibfk_1` FOREIGN KEY (`ID_equipe`) REFERENCES `equipes` (`ID_equipe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
