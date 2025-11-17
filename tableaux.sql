-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 17 nov. 2025 à 02:18
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd_7_13`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date_demenagement` date NOT NULL,
  `ville_depart` varchar(250) NOT NULL,
  `ville_arrivee` varchar(250) NOT NULL,
  `volume` float NOT NULL,
  `type-logement` varchar(250) NOT NULL,
  `ascenseur` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='table des annonces';

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `proposition`
--

CREATE TABLE `proposition` (
  `id` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `id_demenageur` int(11) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `message` text NOT NULL,
  `date_proposition` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `email` varchar(256) NOT NULL,
  `motdepasse` varchar(256) NOT NULL,
  `role` varchar(256) NOT NULL,
  `telephone` int(11) NOT NULL,
  `dateanniverssaire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='table des utilisateur';

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `motdepasse`, `role`, `telephone`, `dateanniverssaire`) VALUES
(1, 'SAIBOU', 'Zoul', 'saibouzoul@gmail.com', 'Zoul123', 'Client', 780564240, '2001-01-01'),
(2, 'LANTONKPODE', 'Steve', 'lantonkpodesteve@gmail.com', 'Steve1234', 'Déménageur', 700000001, '0000-00-00'),
(3, 'GBETOKPE', 'Rolland', 'gbetokperolland@gmail.com', 'rolland123', 'Client', 700000002, '2002-01-02'),
(6, 'ZANNOU', 'Martin', 'zannoumartin@gmail.com', '$2y$10$E7OiPkFV27ZtcVNPhBYToOebUWHDpaQ14xZYiDz5ahVnWR/5WJVai', 'Déménageur', 700000002, '2001-01-04');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_annonce` (`id_annonce`);

--
-- Index pour la table `proposition`
--
ALTER TABLE `proposition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_annonce` (`id_annonce`),
  ADD KEY `id_demenageur` (`id_demenageur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`id_annonce`) REFERENCES `annonce` (`id`);

--
-- Contraintes pour la table `proposition`
--
ALTER TABLE `proposition`
  ADD CONSTRAINT `proposition_ibfk_1` FOREIGN KEY (`id_demenageur`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `proposition_ibfk_2` FOREIGN KEY (`id_annonce`) REFERENCES `annonce` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;