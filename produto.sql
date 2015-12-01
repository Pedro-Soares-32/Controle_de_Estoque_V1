SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `database`;


CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `valor` float NOT NULL,
  `qtd` int(11) NOT NULL,
  `data_validade` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;


INSERT INTO `produto` (`id`, `nome`, `valor`, `qtd`, `data_validade`) VALUES
(2, 'aaaaaaa', 22, 22, '22/22/2222'),
(3, 'Sou lindo e gostoso', 22, 22, '22/22/2222'),
(4, 'aaaa', 22, 22, '22/22/2222'),
(5, 'Arroz', 22, 22, '22/22/2222'),
(6, 'Arroz', 22, 22, '22/22/2222'),
(7, 'Arroz', 22, 22, '22/22/2222'),
(8, 'Arroz', 22, 22, '22/22/2222'),
(9, 'Arroz', 22, 22, '22/22/2222'),
(10, 'Arroz', 22, 22, '22/22/2222'),
(11, 'Arroz', 22, 22, '22/22/2222'),
(12, 'Arroz', 22, 22, '22/22/2222'),
(13, 'Arroz', 22, 22, '22/22/2222');

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;