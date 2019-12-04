-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 04 déc. 2019 à 17:39
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mycoloc`
--

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `IdLocation` int(11) NOT NULL AUTO_INCREMENT,
  `IdUtilisateur` int(11) NOT NULL,
  `IdLogement` int(11) NOT NULL,
  PRIMARY KEY (`IdLocation`),
  KEY `fk_loc_user` (`IdUtilisateur`),
  KEY `fk_loc_logement` (`IdLogement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

DROP TABLE IF EXISTS `logement`;
CREATE TABLE IF NOT EXISTS `logement` (
  `IdLogement` int(11) NOT NULL AUTO_INCREMENT,
  `Type` text NOT NULL,
  `Superfice` int(11) NOT NULL,
  `NbPieces` int(11) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `CP` int(5) NOT NULL,
  `NbLocataire` int(10) NOT NULL,
  `Prix` int(10) NOT NULL,
  `Description` varchar(240) NOT NULL,
  `Ameublement` text NOT NULL,
  `Image_1` varchar(50) NOT NULL,
  `Image_2` varchar(50) NOT NULL,
  `Image_3` varchar(50) NOT NULL,
  PRIMARY KEY (`IdLogement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IdUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(50) NOT NULL,
  `Mdp` varchar(100) NOT NULL,
  `Prénom` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Tel` text NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `DateNaissance` text NOT NULL,
  `TypeProfil` varchar(15) NOT NULL,
  `Sport` tinyint(1) NOT NULL,
  `Musique` tinyint(1) NOT NULL,
  `Lecture` tinyint(1) NOT NULL,
  `Arts` tinyint(1) NOT NULL,
  `Fete` tinyint(1) NOT NULL,
  `JeuxVideo` tinyint(1) NOT NULL,
  PRIMARY KEY (`IdUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUtilisateur`, `Login`, `Mdp`, `Prénom`, `Nom`, `Tel`, `Mail`, `DateNaissance`, `TypeProfil`, `Sport`, `Musique`, `Lecture`, `Arts`, `Fete`, `JeuxVideo`) VALUES
(1, 'alafaye', '$2y$10$oLHpOE.oBY.vl9klSiftlun2tkgc75f9kZVCPQROd8qgekjKuehv6', 'Any', 'LAFAYE', '015256678', 'anylaf@test.fr', '1998-02-11', 'cherche', 1, 1, 0, 0, 0, 0),
(2, 'jbouteille', '$2y$10$LCN1.8AEfUozcoU1qOyvx.H92Pu5YS7Q3zoPrbOyF16dDvT0SKeU6', 'BOUTEILLÉ', 'Jordan', '0661332692', 'bouteillejordan@gmail.com', '1997-10-28', 'cherche', 1, 1, 0, 0, 0, 1),
(3, 'michel.calo', '$2y$10$aRqYzfQuQsOPuGyuc9VAyurVIxMv0xJPiUbz55cruCx/4QadO/SOO', 'CALO', 'Michel', '04125698', 'michel.calo@btl.fr', '1978-11-20', 'publication', 0, 1, 0, 1, 0, 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `fk_loc_logement` FOREIGN KEY (`IdLogement`) REFERENCES `logement` (`IdLogement`),
  ADD CONSTRAINT `fk_loc_user` FOREIGN KEY (`IdUtilisateur`) REFERENCES `utilisateur` (`IdUtilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
