-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 20 avr. 2018 à 13:49
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hackaton`
--

-- --------------------------------------------------------

--
-- Structure de la table `inventaire`
--

CREATE TABLE `inventaire` (
  `id_partie` int(11) NOT NULL,
  `id_objet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

CREATE TABLE `objet` (
  `id_objet` int(11) NOT NULL,
  `item_name` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `details` text NOT NULL,
  `miniature` varchar(255) NOT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `objet`
--

INSERT INTO `objet` (`id_objet`, `item_name`, `details`, `miniature`, `id_room`) VALUES
(1, 'Ours', '', '/images/item_salon/ours.png', 1),
(2, 'HautParleur', '', '/images/item_salon/hautParleur.png', 1),
(3, 'bibliotheque', '', '/images/item_salon/bibliotheque.png', 1),
(4, 'television', '', '/images/item_salon/television.png', 1),
(5, 'ascenseur', '', '/images/item_salon/ascenseur.png', 1),
(6, 'canape', '', '/images/item_salon/canape.png', 1),
(7, 'etoile', '', '/images/item_salon/etoile.png', 1),
(8, 'carteAJouer', '', '/images/item_salon/carteAJouer.png', 1),
(9, 'livre', '', '/images/item_salon/livre.png', 1),
(10, 'bicycle', '', '/images/item_garage/bicycle.png', 2),
(11, 'tente', '', '/images/item_garage/tente.png', 2),
(12, 'mapMichelin', '', '/images/item_garage/mapMichelin.png', 2),
(13, 'souris', '', '/images/item_garage/souris.png', 2),
(14, 'hache', '', '/images/item_garage/hache.png', 2),
(15, 'sink', '', '/images/item_cuisine/sink.png', 3),
(16, 'mousselineChocolat', '', '/images/item_cuisine/mousselineChocolat.png', 3),
(17, 'pastilleVichy', '', '/images/item_cuisine/pastilleVichy.png', 3),
(18, 'porcelaine', '', '/images/item_cuisine/porcelaine.png', 3),
(19, 'crevette', '', '/images/item_cuisine/crevette.png', 3),
(20, 'casserole', '', '/images/item_cuisine/casserole.png', 3),
(21, 'cafetiere', '', '/images/item_cuisine/cafetiere.png', 3),
(22, 'forestines', '', '/images/item_cuisine/forestines.png', 3),
(23, 'four', '', '/images/item_cuisine/four.png', 3),
(24, 'kiwi', '', '/images/item_cuisine/kiwi.png', 3),
(25, 'lapin', '', '/images/item_cuisine/lapin.png', 3),
(26, 'allumettes', '', '/images/item_cuisine/allumettes.png', 3),
(27, 'puyDeDome', '', '/images/item_cuisine/puyDeDome.png', 3),
(28, 'fromage', '', '/images/item_cuisine/fromage.png', 3),
(29, 'table', '', '/images/item_cuisine/table.png', 3),
(30, 'desk', '', '/images/item_cuisine/desk.png', 4),
(31, 'coffre', '', '/images/item_cuisine/coffre.png', 4),
(32, 'elevator', '', '/images/item_cuisine/elevator.png', 4),
(33, 'joconde', '', '/images/item_cuisine/joconde.png', 4),
(34, 'cle', '', '/images/item_cuisine/cle.png', 4),
(35, 'phone', '', '/images/item_cuisine/phone.png', 4),
(36, 'torche', '', '/images/item_cuisine/torche.png', 4),
(37, 'tortue', '', '/images/item_cuisine/tortue.png', 4);

-- --------------------------------------------------------

--
-- Structure de la table `partie`
--

CREATE TABLE `partie` (
  `id_partie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `inventaire`
--
ALTER TABLE `inventaire`
  ADD KEY `id_objet` (`id_objet`),
  ADD KEY `id_partie` (`id_partie`);

--
-- Index pour la table `objet`
--
ALTER TABLE `objet`
  ADD PRIMARY KEY (`id_objet`);

--
-- Index pour la table `partie`
--
ALTER TABLE `partie`
  ADD PRIMARY KEY (`id_partie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `partie`
--
ALTER TABLE `partie`
  MODIFY `id_partie` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `inventaire`
--
ALTER TABLE `inventaire`
  ADD CONSTRAINT `inventaire_ibfk_1` FOREIGN KEY (`id_objet`) REFERENCES `objet` (`id_objet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventaire_ibfk_2` FOREIGN KEY (`id_partie`) REFERENCES `partie` (`id_partie`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
