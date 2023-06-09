-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 09 fév. 2023 à 21:12
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `essais`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `photo` text NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`iduser`, `name`, `email`, `password`, `photo`, `type`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'https://i.ibb.co/MnCST4W/avatar-427ea9c695b6db3d1ec58212f88cde33.jpg', 'admin'),
(2, 'employe1', 'employe1@gmail.com', '1234', 'https://i.ibb.co/GFM887g/avatar-eb156be32af6b2921b8a42f42c32c5c9.jpg', 'employe'),
(3, 'employe2', 'employe2@gmail.com', '1234', 'https://i.ibb.co/JWZ39wz/avatar-36e37f31a40650d70150754d416faf10.jpg', 'employe'),
(4, 'client1', 'client1@gmail.com', '1234', 'https://i.ibb.co/j3c8f9W/avatar-8f615e4dd6fb86873daf3b887b385d93.jpg', 'client'),
(5, 'client2', 'client2@gmail.com', '1234', 'https://i.ibb.co/bdwgpV2/avatar-5d2753165bdbce1c6c697a6abe3192e3.jpg', 'client'),
(6, 'client3', 'client3@gmail.com', '1234', 'https://i.ibb.co/vkMZ5M7/avatar-0ce113dc4c7a47e70a694bf7eaabdda9.jpg', 'client'),
(8, 'admin2', 'admin2@gmail.com', 'admin', 'https://i.ibb.co/QMCWycn/avatar-9f35316e8f5881f4134ed075c5976847.jpg', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
