-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 23 nov. 2025 à 21:37
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
-- Base de données : `tableaux`
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
  `titreannonce` varchar(250) NOT NULL,
  `ascenseur_arrivee` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_creation` date NOT NULL,
  `nombrededemenagement` int(11) NOT NULL,
  `heur` varchar(255) NOT NULL,
  `adresse_depart` varchar(255) NOT NULL,
  `type_logement_arrivee` text NOT NULL,
  `etage_depart` varchar(255) NOT NULL,
  `Ascenseur_depart` varchar(255) NOT NULL,
  `address_arrivee` varchar(255) NOT NULL,
  `type_logement_depart` varchar(255) NOT NULL,
  `etage_arrivee` varchar(11) NOT NULL,
  `objets_principaux` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='table des annonces';

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `id_client`, `date_demenagement`, `ville_depart`, `ville_arrivee`, `volume`, `titreannonce`, `ascenseur_arrivee`, `description`, `date_creation`, `nombrededemenagement`, `heur`, `adresse_depart`, `type_logement_arrivee`, `etage_depart`, `Ascenseur_depart`, `address_arrivee`, `type_logement_depart`, `etage_arrivee`, `objets_principaux`) VALUES
(10, 6, '2025-11-15', 'Rouen', 'Paris', 12, 'Déménagement T2 Rouen ->Paris', 'Oui', 'Appartement T2 au 3e étage meubles standars éléctroménager cartons déja prets', '2025-11-23', 2, '09:30', '12 rue des capucines', 'Maison', '1', 'Oui', '48 Avenue de la république', 'Appartement', '2', 'lit canapé'),
(11, 7, '2026-02-07', 'le havre', 'lille', 32, 'déménagement F3 le havre -> lille', 'Oui', 'Maison F3 avec meubles volumineux : 2 chambres, salon, electroménager complet, cartons de vetements et vaisselle.', '2025-11-23', 3, '08:30', '24 rue du phare', 'Appartement', '0', 'Oui', '15 boulevard de metz', 'Maison', '4', 'buffet massif lit king size lit enfant canapé d\'angle lave linge sèche-linge,frigo américain bureau 25 cartons');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `photo`
--

INSERT INTO `photo` (`id`, `id_annonce`, `url`) VALUES
(3, 10, 'fichier/appartement-photo-810x540.jpg'),
(4, 11, 'fichier/4-30-B-1024x680.webp');

-- --------------------------------------------------------

--
-- Structure de la table `proposition`
--

CREATE TABLE `proposition` (
  `id` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `id_demenageur` int(11) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `proposition`
--

INSERT INTO `proposition` (`id`, `id_annonce`, `id_demenageur`, `prix`, `message`) VALUES
(3, 11, 8, 280, 'bonjour');

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
(2, 'LANTONKPODE', 'Steve', 'lantonkpodesteve@gmail.com', 'Steve1234', 'Déménageur', 700000001, '0000-00-00'),
(6, 'ZANNOU', 'Martin', 'zannoumartin@gmail.com', '$2y$10$E7OiPkFV27ZtcVNPhBYToOebUWHDpaQ14xZYiDz5ahVnWR/5WJVai', 'Client', 700000002, '2001-01-04'),
(7, 'SAIBOU', 'Zoul', 'saibouzoul@gmail.com', '$2y$10$X59wgZXkx6eT8PugTrFB4ePEdI9abqh5rt5NP5lJDcwCsAhIDZlaK', 'Client', 780564240, '2000-01-01'),
(8, 'GBETOKPE', 'Rolland', 'gbetokperolland@gmail.com', '$2y$10$o56M/v9dRpgL5ee9Oqgpk.7i6CzXb/BdqiHZO4EnW9WCannDrWUx6', 'Déménageur', 705454146, '2025-11-15');

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
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `proposition`
--
ALTER TABLE `proposition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;