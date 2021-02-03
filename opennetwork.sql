-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 03 fév. 2021 à 01:02
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `opennetwork`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_mess` int(11) NOT NULL,
  `date_post` datetime NOT NULL,
  `contenu` text NOT NULL,
  `id_source` int(11) NOT NULL,
  `id_dest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_mess`, `date_post`, `contenu`, `id_source`, `id_dest`) VALUES
(1, '2018-11-29 00:00:00', 'bonjour delma', 1, 3),
(2, '2018-11-29 00:00:00', 'salut Loic.', 3, 1),
(3, '2018-11-29 00:00:00', 'salut la team', 1, 3),
(4, '2018-11-29 00:00:00', 'hello Alvine', 4, 3),
(5, '2020-05-11 00:00:00', 'je suis la', 4, 3),
(8, '2020-05-21 00:00:00', '	\r\n	kkkkkkkk							', 11, 1),
(9, '2020-05-21 00:00:00', '	\r\n		eeeeeeeeeeeee						', 11, 1),
(10, '2020-05-21 00:00:00', '	\r\ntetetete\r\n							', 11, 1),
(11, '2020-05-21 00:00:00', '	\r\n			ddddddd					', 1, 4),
(12, '2020-05-21 00:00:00', '	\r\n								ssssssssssssssss', 1, 1),
(13, '2020-05-21 00:00:00', '	\r\n		sssssssssssss						', 1, 1),
(14, '2020-05-21 00:00:00', '	\r\n								ddddddddddddd', 1, 11),
(15, '2020-05-21 00:00:00', '	\r\n		dddddddddddddds						', 1, 11),
(16, '2020-05-21 00:00:00', '	\r\n	sssssss							', 1, 3),
(17, '2020-05-21 00:00:00', '	\r\n		sssssssssssssss						', 1, 3),
(18, '2020-05-21 00:00:00', '	\r\n		sssssssssssss						', 1, 3),
(19, '2020-05-21 00:00:00', '	\r\n			ssssssssssssss					', 1, 3),
(20, '2020-05-21 00:00:00', '	\r\n								eeeeeeeeeeeee', 5, 1),
(21, '2020-05-21 00:00:00', '	\r\n		ssss						', 1, 5),
(22, '2020-05-21 15:36:11', '	\r\n				memememe				', 3, 1),
(23, '2020-05-21 15:56:25', '	zzzzzzzzzzzzzzzzzzzz\r\n								', 3, 1),
(24, '2020-05-21 20:15:33', '	\r\n		bonsoir						', 12, 3),
(25, '2020-05-21 22:11:54', '	\r\n			ooooooooooooo					', 1, 11),
(26, '2020-06-11 18:18:47', '	\r\n		hhhhhhhhhhhhh						', 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id_publ` int(11) NOT NULL,
  `date_post` datetime NOT NULL,
  `contenu` text NOT NULL,
  `id_source` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id_publ`, `date_post`, `contenu`, `id_source`) VALUES
(2, '2020-05-16 14:45:00', 'je suis au campus\r\n\r\n								', 3),
(3, '2020-05-16 14:48:29', 'bonjour le monde							', 3),
(8, '2020-05-16 18:51:14', 'bonsoir les amis\r\n								', 1),
(9, '2020-05-16 18:55:49', 'helllo les gars						', 1),
(10, '2020-05-17 05:33:26', 'bjr							', 1),
(13, '2020-05-17 05:59:52', '	\r\n								ssssssssssssss', 1),
(14, '2020-05-17 06:03:56', '	\r\n								aaaaaaaaaaaaaaaaaaaaaaaaa', 1),
(15, '2020-05-17 07:12:17', 'rrrrrrrrrrr', 1),
(16, '2020-05-17 07:12:30', '	\r\n	kkkkkkkkkkkkkkkkkkkkkkk							', 1),
(17, '2020-05-17 07:12:55', 'ttttttttttttttttttttt', 1),
(19, '2020-05-17 07:14:58', 'ggggggggggggggggggg							', 1),
(20, '2020-05-17 07:16:12', 'ggggggggggggggggggg							', 1),
(21, '2020-05-17 07:16:32', 'eeeeeeeeeeeeeeeeeeeee							', 1),
(22, '2020-05-17 07:17:26', 'eeeeeeeeeeeeeeeeeeeee							', 1),
(23, '2020-05-17 07:17:44', 'youmbi loic							', 1),
(24, '2020-05-17 07:17:51', 'youmbi loic														', 1),
(28, '2020-05-17 07:23:47', 'yyyyyyyyyyyyyyy\r\n							', 1),
(30, '2020-05-17 07:28:02', '	\r\n								', 1),
(31, '2020-05-17 08:36:00', '	eeeeeeeeeee\r\n								', 1),
(32, '2020-05-17 08:48:07', '	\r\n								alerte', 1),
(33, '2020-05-17 08:48:46', '	\r\n								alerte', 1),
(34, '2020-05-17 08:53:52', '	\r\n								aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1),
(35, '2020-05-17 08:59:19', '	\r\n								aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1),
(36, '2020-05-17 08:59:31', '	\r\n								aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1),
(37, '2020-05-17 09:00:18', '	\r\n	asze							', 1),
(38, '2020-05-17 09:02:56', '	\r\n		eeeeeeeeeeeeee						', 1),
(39, '2020-05-17 15:51:54', '	\r\n								', 1),
(40, '2020-05-17 16:54:01', '	\r\n		qqqqqqqqqqqqqqqqqqqqqqqq						', 1),
(41, '2020-05-17 17:17:33', '	\r\n								ooooooooooooooooo\r\n', 1),
(42, '2020-05-18 12:14:00', '	\r\n								', 5),
(43, '2020-05-18 12:14:09', '	\r\n								salut salut', 5),
(44, '2020-05-18 13:48:08', '	\r\n	ddddddddddddddddddddddddd							', 9),
(45, '2020-05-18 18:19:53', '	\r\n								ssssssssssssssss', 10),
(46, '2020-05-21 15:56:38', '	\r\n								fffffffff', 3),
(47, '2020-05-21 15:56:51', '	\r\n								ffffffffffff', 3),
(48, '2020-06-11 18:18:23', '	\r\n								llllllllllllll', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `sexe` char(1) NOT NULL,
  `date_naissance` date NOT NULL,
  `ville` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `username`, `password`, `sexe`, `date_naissance`, `ville`) VALUES
(1, 'youmbi', 'loic', 'loicyoumbi', '14s22853', 'm', '1997-06-19', 'Yaounde'),
(3, 'alvine', 'keling', 'alvinekeling', '14s22853', 'F', '1992-09-16', 'mbe'),
(4, 'Desmond', 'EWANG', 'DesmondEwang', '14s22853', 'M', '2004-08-12', 'yaounde'),
(5, 'Deudjieu', 'Pamela', 'pameladeudjieu', '14s22853', 'F', '1999-01-16', 'yaounde'),
(6, 'alitech', 'ali', 'alitech', '14s22853', 'M', '1994-10-15', 'yaounde'),
(7, 'kana', 'james', 'jameskana', '14s22853', 'M', '1995-11-15', 'yaounde'),
(8, 'dongmo', 'virginie', 'virginiedongmo', '14s22853', 'F', '1994-04-05', 'yaounde'),
(9, 'emili', 'a', 'emilia', '14s22853', 'F', '1997-11-16', 'yaounde'),
(10, 'djoukou', 'djoukouo', 'limadjoukouo', '14s22853', 'F', '2000-12-15', 'buea'),
(11, 'achile', 'kameni', 'achilekameni', '14s22853', 'M', '1997-11-14', 'yaounde'),
(12, 'nague', 'gaetan', 'gaetannague', '14s22853', 'M', '1998-11-16', 'bamenda');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_mess`),
  ADD KEY `id_source` (`id_source`),
  ADD KEY `id_dest` (`id_dest`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id_publ`),
  ADD KEY `FOREIGN KEY` (`id_source`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_mess` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id_publ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `id_dest` FOREIGN KEY (`id_dest`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_source` FOREIGN KEY (`id_source`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`id_source`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
