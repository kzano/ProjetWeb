-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 déc. 2019 à 20:41
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
  KEY `fk_user` (`IdUtilisateur`),
  KEY `fk_logement` (`IdLogement`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`IdLocation`, `IdUtilisateur`, `IdLogement`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(7, 7, 7),
(8, 9, 8),
(9, 10, 9),
(10, 11, 10),
(11, 12, 11),
(12, 6, 12);

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

DROP TABLE IF EXISTS `logement`;
CREATE TABLE IF NOT EXISTS `logement` (
  `IdLogement` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(60) NOT NULL,
  `Type` text NOT NULL,
  `Superficie` int(11) NOT NULL,
  `NbPieces` int(11) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `CP` int(5) NOT NULL,
  `NbLocataire` int(10) NOT NULL,
  `Prix` int(10) NOT NULL,
  `Description` varchar(450) NOT NULL,
  `Ameublement` text NOT NULL,
  `Image_1` varchar(150) NOT NULL,
  `Image_2` varchar(150) NOT NULL,
  `Image_3` varchar(150) NOT NULL,
  PRIMARY KEY (`IdLogement`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`IdLogement`, `Titre`, `Type`, `Superficie`, `NbPieces`, `Ville`, `CP`, `NbLocataire`, `Prix`, `Description`, `Ameublement`, `Image_1`, `Image_2`, `Image_3`) VALUES
(1, 'Colocation à 3', 'Appartement', 80, 3, 'Bordeaux', 33000, 2, 550, 'Bonjour,\r\n\r\nNous sommes deux personnes et nous recherchons un coloc en plus depuis le départ de notre ancien collègue.\r\n\r\nNous sommes étudiants et nous aimons le calme ! \r\n\r\nSi besoin vous pouvez me contacter par mail ou par téléphone.', 'Meublé', 'annonces/xP3KF4RIgZb1Eo7SaNjEposjMHGGO7x8EJ5WEGBX.jpeg', 'annonces/eUo5swLdYyUPGHecMzxXWcgzQEjSPRs2ZamWTHBV.jpeg', 'annonces/eHV4JraCyxI6vdeR8wtpRZheBsHubybaYOx044nu.jpeg'),
(2, 'A proximité de Toulouse', 'Maison', 110, 4, 'Cornebarrieu', 31700, 1, 490, 'Bonjour,\r\n\r\nJe suis étudiant en commerce et je viens d\'emménager à proximité de Toulouse.\r\n\r\nJe recherche 3 colocs pour une année incroyable ! \r\n\r\nJe suis dispo par mail/tel.', 'Non-meublé', 'annonces/QvwFPLRDiEFkuLdClgnOkgWVY71eHYBfrckhcQuU.jpeg', 'annonces/PhI5BgtNhEAsxVGh9Z3TwAw6h9DwvTObUWwy9LiF.jpeg', 'annonces/9OxiEMbzg6APFcS8YRfmwwsl0qCNorjNWKGNQ0AX.jpeg'),
(3, 'Coloc sur Bordeaux', 'Maison', 95, 4, 'Bordeaux', 33000, 1, 670, 'Bonjour,\r\n\r\nJe suis étudiant en informatique et je souhaite trouver une autre personne pour m\'accompagner dans cette maison louée il y a 2 mois.\r\n\r\nLes photos parlent d\'elles mêmes. \r\n\r\nCordialement', 'Non-meublé', 'annonces/WOFCFBQoV8AUeORkkuZQVx84MwfCNiRv9iKN3H1a.jpeg', 'annonces/d68YeM06UYK95M9kOK4O0JfndMnFVG9zxBNct5IB.jpeg', 'annonces/bJUvEAzxFgFOTgm1mQldoHnldEoU8bqGyqVvrh0F.jpeg'),
(4, 'Colocation à Limoges', 'Maison', 85, 4, 'Limoges', 87100, 1, 400, 'Bonjour,\r\n\r\nJe suis actuellement sur Limoges pour 1 an en stage.\r\n\r\nJe recherche deux personnes (des femmes de préférence). \r\n\r\nLa maison se trouve à 5.5km du centre-ville et est proche d\'un leclerc. \r\n\r\nJe ne suis pas quelqu\'un qui aime la fête. je préfère le calme, mais de temps-en-temps j\'aime bien sortir en ville.\r\n\r\nSI besoin je peux organiser des visites.', 'Non-meublé', 'annonces/qG5JnZDUMJgUfPgVQXoA0Llyn0NDO7H0pxpuYIqE.jpeg', 'annonces/iL1ugmp846kqz0nISeSqWWhgKouCvXgUL5ShH16J.jpeg', 'annonces/dwisbFI0S1WgRrxHgGELaJgsdF3NjycFt4WkFnB2.jpeg'),
(5, 'Mont-de-marsan', 'Maison', 80, 4, 'Mont-de-marsan', 40000, 2, 410, 'Coloc sur mdm. Nous sommes 2 et nous voulons un troisième mec avec nous ! \r\n\r\nDe préférence quelqu\'un qui ne fait pas la fête tous les jours...\r\n\r\nSi besoin, rendez-vous pour une visite.\r\n\r\nMelvin.', 'Meublé', 'annonces/1Uqqx6zEPAn5PdYw4x3evCGsCjx98GJ3kGBT9OA8.jpeg', 'annonces/LF1rDxijTDylE0CIM7mwuTaVdUotrKTX6ECsHFuC.jpeg', 'annonces/xmSt6UAeIOMarT5d2NRsKltDPhAOQ81AXXbcmqfi.jpeg'),
(7, 'Superbe maison à Mont-de-marsan', 'Maison', 120, 4, 'Mont-de-marsan', 40000, 2, 610, 'Bonjour,\r\n\r\nVoici notre maison. Nous sommes 2 et voici nos critères concernant notre futur camarade : \r\n\r\n- Homme/Femme peut importe\r\n- avoir un salaire (non étudiant)\r\n- avoir entre 20 et 25 ans', 'Non-meublé', 'annonces/pT1FIaS1t6ShcJ6yFFhWgtxwnvmKHVOql5fDqgBo.jpeg', 'annonces/KIPfap6cPWfKH0YPAL0iDwGOro3d8MuwiycLxG3I.jpeg', 'annonces/HPPpw4go2rAAhl5OaNf9BKZcFwM0DMYK8ZNC1UJC.jpeg'),
(8, 'Appartement classe dans Paris', 'Appartement', 115, 4, 'Paris', 75000, 3, 870, 'Salut,\r\n\r\nsi tu es intéressé de vivre dans Paris avec 2 filles et un garçon alors tu ac toqué sur la bonne porte ! \r\n\r\nNous n\'avons pas de critères, or le fait que tu dois être âgé de 25 ans max (et 18 minimum).\r\n\r\nSi tu as besoin de renseignements nous sommes disponibles par mon mail ou par mon téléphone.', 'Non-meublé', 'annonces/OyB54UUtVCmNsIZySSMyQg39ix8OjQ9eEM43FsN4.jpeg', 'annonces/j5WC6qUtIDuE6f9EgJs0aL5nKYHZvx15Fkn0Lhp1.jpeg', 'annonces/zbFfCGGtlXg2Q29frZBviVq37e6oNbqXs0GA2skG.jpeg'),
(9, 'Colocation à 3 dans un appartement à Strasbourg', 'Appartement', 95, 4, 'Strasbourg', 67000, 1, 500, 'Bonjour,\r\n\r\nJe suis toute seule dans mon appart un peu trop grand pour moi. \r\n\r\nJe recherche donc 2 personnes (des femmes :) ) pour m\'accompagner. Je ne suis pas quelqu\'un qui fait du bruit, peut-être que de temps en temps j\'aime écouter de la musique :).\r\n\r\nOn est pas loin des centres commerciaux. On a également deux places de parking (Je n\'ai pas le permis).', 'Non-meublé', 'annonces/PgpLyNSxlUT8p4SMiqRkzafcej1KyyuTaSSIosqh.jpeg', 'annonces/ZbHTeQyPcByEHygYCU9pF0M4pn9cEAKyY7UpONiP.jpeg', 'annonces/5BxGpaiPIebqDZNeKTECj7hNvA0a9fy46mMIVph8.jpeg'),
(10, 'Appartement sur Biarritz', 'Appartement', 80, 4, 'BIarritz', 64000, 2, 360, 'Bonjour,\r\n\r\nJe viens d\'emménager avec une amie sur Biarritz. Nous sommes apprenties et nous pouvons verser quelque chose pour le loyer. Seulement, il nous faut de l\'aide. Si quelqu\'un veut venir, nous prenons ! De préférence jeune et étudiant aussi.\r\n\r\nOndine.', 'Meublé', 'annonces/kqYKBIbHPs6iO0ez389grrLTY1t6LHlUbJX74rqS.jpeg', 'annonces/h7bEGpaEJxQW2HYOqsvRNdqK23zJdZGuLeCobjPE.jpeg', 'annonces/2wEevIrwU8PW8yL9N9Rrf6i2waKOgNLabO9C0pnS.jpeg'),
(11, 'Appartement pour 2 à montpellier', 'Appartement', 80, 3, 'Montpellier', 34000, 1, 425, 'Bonjour,\r\n\r\nJe vais loger dans un appartement. Si quelqu\'un souhaite me rejoindre je suis preneuse ! \r\n\r\nJe suis étudiante en informatique en DUT. Si vous avez un profil identique à celui-ci c\'est encore mieux !', 'Non-meublé', 'annonces/GSDIk04p0rZEcTrwKGcH4jXvJciI6ZmFfx78Zyde.jpeg', 'annonces/qa2u6Jq3T1CInVRMcrlAUugDzN8VOIPA8CQD9oea.jpeg', 'annonces/XvXCtw8zMUkum5w9AbnnE6nCoBlFDrsmx2Dy5p0W.jpeg'),
(12, 'Colocation appartement de luxe', 'Appartement', 150, 5, 'Bordeaux', 33000, 4, 600, 'Hey, \r\n\r\nTU AIMES LA FETE ??? Alors rejoins nous dans notre coloc ! \r\n\r\nNous sommes 2 filles et 2 garçons étudiants et nous recherchons un cinquième partenaire, notre appart est trop grand :/. \r\n\r\nBref si tu es intéressé(e), contacte moi !', 'Non-meublé', 'annonces/tpVN2JA7IijbQvg2LC5JqqctYw0cInFXoO4ZHKLY.jpeg', 'annonces/E5QhBWWyJ3Empq8xUCDuk9WehYlmP95sBafgCyTq.jpeg', 'annonces/w6GqJYbbMpxJYiHWivmRsQGSiNxxG0GrFJUfTj62.jpeg');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUtilisateur`, `Login`, `Mdp`, `Prénom`, `Nom`, `Tel`, `Mail`, `DateNaissance`, `TypeProfil`, `Sport`, `Musique`, `Lecture`, `Arts`, `Fete`, `JeuxVideo`) VALUES
(1, 'maurice.delta', '$2y$10$8xuGj2aSUap4AANdem4J8.HvU4iAVvHRLQ7b3.v14FpiOToFOZfii', 'Maurice', 'DELTA', '0152326598', 'mdelta@gmail.com', '1996-09-21', 'annonceur', 1, 1, 0, 0, 0, 0),
(2, 'fred.pal', '$2y$10$U3WbeHVRXSQqIPI6TrIBS.lONPAvuYUDoiWgOwYLIEZiZqHH6xAA6', 'Frédéric', 'PAL', '0645815269', 'fpal@outlook.fr', '2000-06-11', 'annonceur', 1, 1, 1, 1, 1, 0),
(3, 'jordan.bouteille', '$2y$10$V577sJceAKVvyjQk.d4zzO6npPkVosn.8hPuim7qKnPd6.D9TaxC6', 'Jordan', 'BOUTEILLÉ', '0606065248', 'bouteillejordan@gmail.com', '1997-10-28', 'annonceur', 1, 1, 0, 0, 0, 1),
(4, 'any.lafaye', '$2y$10$hQyb.xhAEw/P/8T6zaK/A.ksY.lUguPdVKJWw27h/Pm/q/DWf4vjq', 'Any', 'LAFAYE', '0615204832', 'anylafaye@gmail.com', '1998-02-11', 'annonceur', 1, 1, 0, 0, 0, 0),
(5, 'melvin.aubourg', '$2y$10$V4pc3KDxd8hVFnwR2syeheeTN3ALpD.eRMWFWhEcuWRfXVEQLcqwi', 'Melvin', 'AUBOURG', '0741231490', 'melv@gmail.com', '1998-08-03', 'annonceur', 1, 1, 0, 0, 0, 1),
(6, 'luc', '$2y$10$aQ09JC50YutARk1ZB8GxIeYm3j8UUuDwbO.bdRC/shexNTnrdh.BW', 'Luc', 'PADEL', '0651974631', 'lud@free.fr', '1992-01-19', 'annonceur', 0, 1, 0, 0, 1, 0),
(7, 'lionel.philippe', '$2y$10$I2g0FVt8s1lRRyHdLqfFPum5cm8QGk6kT1SWGvxyijVKzChhOPCMW', 'Philippe', 'LIONEL', '0684142563', 'lionel@gmail.com', '1992-08-18', 'annonceur', 1, 1, 0, 0, 0, 1),
(8, 'didier.borde', '$2y$10$aod2bQQ9L3/xTbBrRJ/Oqe6lUNqVfNw9DwuKbSE9MjFCF/nIeZaFK', 'Didier', 'BORDE', '0641587429', 'didier.borde@gmail.com', '1989-06-14', 'chercheur', 1, 1, 0, 0, 0, 1),
(9, 'willy', '$2y$10$4LT8hjfD4qthgcaQXyK2k.PIEHPQK7yqn09yUweR9Vn87G3F9Uev.', 'Williams', 'PHARELL', '0750419803', 'william.pharell@outlook.fr', '1997-06-11', 'annonceur', 0, 1, 1, 1, 1, 0),
(10, 'lucie.balte', '$2y$10$zFB40si62ex7D4pAHy8R0.8K8ZHpamLkKg7XOTvpdkLuMqIP2cshy', 'Lucie', 'BALTE', '0748316596', 'luciebalte@outlook.fr', '1999-08-14', 'annonceur', 0, 1, 0, 0, 1, 0),
(11, 'ondine', '$2y$10$gV8zRo25UtvN0TxqCFAciOP1S9rTy2d.McwwczsZEI.cwLGzz9Ffa', 'Ondine', 'NANO', '0624242489', 'ond.nano64@gmail.com', '1996-07-14', 'annonceur', 1, 1, 0, 0, 1, 1),
(12, 'helene.arlac', '$2y$10$SPaNa3xnOcOGHLoPIThiSOGbGk4mrCQX9bSLSExveLl7sgvD6WGTa', 'Hélène', 'ARLAC', '0660213876', 'arl.hel@gmail.com', '1996-01-13', 'annonceur', 0, 1, 1, 1, 0, 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `fk_logement` FOREIGN KEY (`IdLogement`) REFERENCES `logement` (`IdLogement`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`IdUtilisateur`) REFERENCES `utilisateur` (`IdUtilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
