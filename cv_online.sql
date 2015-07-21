-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 05 Mai 2015 à 22:13
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `cv_online`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `name` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `template` int(2) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `firstname`, `template`) VALUES
(20, 'briatte@esgi.fr', '7682fe272099ea26efe39c890b33675b', 'Briatte', 'Benoit', 2),
(19, 'francois@esgi.fr', 'eb7abf5f00d2dd1678fd3763b90d5ea7', 'Hollande', 'Francois', 3),
(18, 'adrien@esgi.fr', '8a0594d4b87ee1c86d70ca3fd1e47118', 'Furet', 'Adrien', 2),
(17, 'raphael@esgi.fr', 'aa622d1829f3f68127c00e2df48320b5', 'Kallini', 'RaphaÃ«l', 3),
(16, 'gaetan@esgi.fr', 'ae83534482371be79b78c8f921d6a8be', 'Alfieri', 'GaÃ«tan', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;