-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 01 avr. 2022 à 16:37
-- Version du serveur : 8.0.28-0ubuntu0.20.04.3
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `yourTube`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `idCategory` int NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`idCategory`, `category`, `type`) VALUES
(16, 'Animaux', 'Images'),
(17, 'Mariages', 'Images'),
(18, 'Nature', 'Images'),
(19, 'Voyages', 'Images'),
(20, 'Musiques', 'Videos'),
(21, 'Documentaire', 'Videos'),
(22, 'Formation', 'Videos'),
(23, 'Nouvelles', 'Videos');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `idComments` int NOT NULL,
  `idUsers` int DEFAULT NULL,
  `idContenu` int DEFAULT NULL,
  `comments` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

CREATE TABLE `contenu` (
  `idContenu` int NOT NULL,
  `idUsers` int DEFAULT NULL,
  `idCategory` int DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `lien` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dateCreated` datetime DEFAULT CURRENT_TIMESTAMP,
  `dateUptade` date DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contenu`
--

INSERT INTO `contenu` (`idContenu`, `idUsers`, `idCategory`, `title`, `content`, `lien`, `dateCreated`, `dateUptade`, `author`) VALUES
(43, 155, 16, 'Chaton ', 'Les chats sont les meilleurs', 'chat.jpg', '2022-03-29 11:23:03', NULL, 'Annah'),
(44, 155, 17, 'Mariage en plein air', 'Le plus beau jour de votre vie dans un cadre merveilleux', 'champetre.jpg', '2022-03-29 11:23:03', NULL, 'Annah'),
(45, 155, 21, 'Madagascar un pays maerveilleux', 'Aller à la rencontre des plus beaux paysage de Madagascar, voyez les coutumes Malgaches', NULL, '2022-03-29 11:25:16', NULL, 'Annah'),
(46, 155, 23, 'Potins sur Will smith', 'Débats sur le geste de will smith pendant la remise des oscars', NULL, '2022-03-29 11:25:16', NULL, 'Annah');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `mesContenus`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `mesContenus` (
`author` varchar(255)
,`category` varchar(100)
,`content` longtext
,`dateCreated` datetime
,`dateUptade` date
,`lien` varchar(255)
,`pseudo` varchar(255)
,`title` varchar(255)
,`type` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `idmessages` int NOT NULL,
  `messages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `idUsers` int DEFAULT NULL,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `idUsers` int NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passwords` varchar(255) DEFAULT NULL,
  `roles` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUsers`, `lastname`, `firstname`, `pseudo`, `email`, `passwords`, `roles`) VALUES
(155, 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin'),
(325, 'ssf', 'sf', 'sfd', 'dsfsdfsd@gmail.com', 'dfdfd', 'Utilisateur'),
(326, 'fdsf', 'dsfdsf', 'sdfdsf', 'aze@gmail.com', 'ff', 'Utilisateur'),
(327, 'vfvd', 'fv', 'fd', 'ddf@gmail.com', 'dsfsd', 'Utilisateur'),
(328, 'ef', 'ef', 'ef', 'ezff@gmail.com', 'fezf', 'Utilisateur'),
(329, 'dsf', 'fsd', 'dff@gmail.com', 'dff@gmail.com', 'dff@gmail.com', 'Utilisateur'),
(330, 'fez', 'ezfe', 'zefze', 'effgg@gmail.com', 'fezf', 'Utilisateur'),
(331, 'fez', 'fez', 'ezf', 'fezppp@gmail.com', 'ddz', 'Utilisateur'),
(332, 'dd', 'dd', 'dd', 'dd@gmail.com', 'dsdssd', 'Utilisateur'),
(333, 'df', 'sdg', 'sdgf', 'ddf@gmail.com', 'dsfsdg', 'Utilisateur'),
(334, 'fsd', 'dsf', 'ff', 'pipi@gmail.com', 'dsds', 'Utilisateur'),
(335, 'fgd', 'gfd', 'fdg', 'fdgggg@gmail.com', 'sdfsds', 'Utilisateur'),
(336, 'fez', 'ezf', 'ef', 'efez@gmmail.com', 'fezfez', 'Utilisateur'),
(337, 'dvf', 'ff', 'fff', 'fezfe@gmail.com', 'fdessfd', 'Utilisateur');

-- --------------------------------------------------------

--
-- Structure de la vue `mesContenus`
--
DROP TABLE IF EXISTS `mesContenus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mesContenus`  AS SELECT `contenu`.`title` AS `title`, `users`.`pseudo` AS `pseudo`, `category`.`type` AS `type`, `category`.`category` AS `category`, `contenu`.`content` AS `content`, `contenu`.`author` AS `author`, `contenu`.`lien` AS `lien`, `contenu`.`dateCreated` AS `dateCreated`, `contenu`.`dateUptade` AS `dateUptade` FROM ((`contenu` join `users`) join `category`) WHERE ((`contenu`.`idUsers` = `users`.`idUsers`) AND (`contenu`.`idCategory` = `category`.`idCategory`)) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idComments`),
  ADD KEY `idUsers` (`idUsers`),
  ADD KEY `idArticle` (`idContenu`);

--
-- Index pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD PRIMARY KEY (`idContenu`),
  ADD KEY `idUsers` (`idUsers`),
  ADD KEY `idCategory` (`idCategory`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`idmessages`),
  ADD KEY `idUsers` (`idUsers`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `idComments` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contenu`
--
ALTER TABLE `contenu`
  MODIFY `idContenu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `idmessages` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `users` (`idUsers`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`idContenu`) REFERENCES `contenu` (`idContenu`);

--
-- Contraintes pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD CONSTRAINT `contenu_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `users` (`idUsers`),
  ADD CONSTRAINT `contenu_ibfk_2` FOREIGN KEY (`idCategory`) REFERENCES `category` (`idCategory`);

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `users` (`idUsers`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
