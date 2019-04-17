-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 13 avr. 2019 à 14:37
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `AS_DB`
--

-- --------------------------------------------------------

--
-- Structure de la table `Acheter`
--

CREATE TABLE `Acheter` (
  `user` int(11) NOT NULL,
  `formation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Aimer`
--

CREATE TABLE `Aimer` (
  `user` int(11) NOT NULL,
  `formation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Contacter`
--

CREATE TABLE `Contacter` (
  `emet` int(11) NOT NULL,
  `recept` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `domaine`
--

CREATE TABLE `domaine` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `duree` varchar(12) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `prix` double NOT NULL,
  `description` text NOT NULL,
  `domaine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Interesser`
--

CREATE TABLE `Interesser` (
  `user` int(11) NOT NULL,
  `domaine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Noter`
--

CREATE TABLE `Noter` (
  `user` int(11) NOT NULL,
  `formation` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `commentaire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `nom`, `code`) VALUES
(9, 'Administrateur', 'admin'),
(10, 'Formateur', 'format'),
(11, 'Simple', 'smpl'),
(12, 'Entreprise', 'enter');

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `formation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `entree` datetime NOT NULL,
  `sortie` datetime NOT NULL,
  `navigateur` varchar(50) NOT NULL,
  `sys_exp` varchar(50) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Suivre`
--

CREATE TABLE `Suivre` (
  `user` int(11) NOT NULL,
  `followed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `motpasse` varchar(64) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `tel` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `naissance` date NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `motpasse`, `pays`, `ville`, `adresse`, `photo`, `tel`, `role`, `naissance`, `about`) VALUES
(1, 'Elbadaoui', 'Ilias', 'iliaselbadaoui98@gmail.com', '@itf@sk@#98', 'Maroc', 'Marrakech', 'Ait mansour', '', '0628022976', 9, '1998-06-04', 'Je suis le co-fondateur de appendSkills');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `chemin` text NOT NULL,
  `description` text NOT NULL,
  `section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Acheter`
--
ALTER TABLE `Acheter`
  ADD PRIMARY KEY (`user`,`formation`),
  ADD KEY `formation` (`formation`);

--
-- Index pour la table `Aimer`
--
ALTER TABLE `Aimer`
  ADD PRIMARY KEY (`user`,`formation`),
  ADD KEY `formation` (`formation`);

--
-- Index pour la table `Contacter`
--
ALTER TABLE `Contacter`
  ADD PRIMARY KEY (`emet`,`recept`),
  ADD KEY `recept` (`recept`);

--
-- Index pour la table `domaine`
--
ALTER TABLE `domaine`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formation_domaine` (`domaine`);

--
-- Index pour la table `Interesser`
--
ALTER TABLE `Interesser`
  ADD PRIMARY KEY (`user`,`domaine`),
  ADD KEY `domaine` (`domaine`);

--
-- Index pour la table `Noter`
--
ALTER TABLE `Noter`
  ADD PRIMARY KEY (`user`,`formation`),
  ADD KEY `formation` (`formation`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_formation` (`formation`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_session` (`user`);

--
-- Index pour la table `Suivre`
--
ALTER TABLE `Suivre`
  ADD PRIMARY KEY (`user`,`followed`),
  ADD KEY `followed` (`followed`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_role` (`role`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_section` (`section`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `domaine`
--
ALTER TABLE `domaine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Acheter`
--
ALTER TABLE `Acheter`
  ADD CONSTRAINT `Acheter_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `Acheter_ibfk_2` FOREIGN KEY (`formation`) REFERENCES `formation` (`id`);

--
-- Contraintes pour la table `Aimer`
--
ALTER TABLE `Aimer`
  ADD CONSTRAINT `Aimer_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `Aimer_ibfk_2` FOREIGN KEY (`formation`) REFERENCES `formation` (`id`);

--
-- Contraintes pour la table `Contacter`
--
ALTER TABLE `Contacter`
  ADD CONSTRAINT `Contacter_ibfk_1` FOREIGN KEY (`emet`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `Contacter_ibfk_2` FOREIGN KEY (`recept`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_domaine` FOREIGN KEY (`domaine`) REFERENCES `domaine` (`id`);

--
-- Contraintes pour la table `Interesser`
--
ALTER TABLE `Interesser`
  ADD CONSTRAINT `Interesser_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `Interesser_ibfk_2` FOREIGN KEY (`domaine`) REFERENCES `domaine` (`id`);

--
-- Contraintes pour la table `Noter`
--
ALTER TABLE `Noter`
  ADD CONSTRAINT `Noter_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `Noter_ibfk_2` FOREIGN KEY (`formation`) REFERENCES `formation` (`id`);

--
-- Contraintes pour la table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_formation` FOREIGN KEY (`formation`) REFERENCES `formation` (`id`);

--
-- Contraintes pour la table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `user_session` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Suivre`
--
ALTER TABLE `Suivre`
  ADD CONSTRAINT `Suivre_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `Suivre_ibfk_2` FOREIGN KEY (`followed`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role` FOREIGN KEY (`role`) REFERENCES `role` (`id`);

--
-- Contraintes pour la table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_section` FOREIGN KEY (`section`) REFERENCES `section` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
