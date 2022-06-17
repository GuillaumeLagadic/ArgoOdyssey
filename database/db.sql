--
-- Base de données : `argonauts`
--

CREATE DATABASE `argonauts`;

--
-- Structure de la table `argonauts`
--


DROP TABLE IF EXISTS `argonauts`;
CREATE TABLE `argonauts` (
    `id`      int(10) UNSIGNED NOT NULL primary key auto_increment,
    `Nom`     varchar(15)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `guillaume_answers`
--

INSERT INTO `argonauts` (`id`, `Nom`) VALUES (1,'Eleftheria'), (2,'Gennadios'), (3,'Lysimachos');