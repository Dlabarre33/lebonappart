/*creation de la BDD*/
CREATE DATABASE IF NOT EXISTS `wf3_php_intermediaire_david` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wf3_php_intermediaire_david`;
/*Creation de la table advert*/
DROP TABLE IF EXISTS `advert`;
CREATE TABLE IF NOT EXISTS `advert` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text,
  `postal_code` char(5) NOT NULL,
  `city` varchar(150) NOT NULL,
  `type` varchar(15) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `reservation_message` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;