-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 06-Set-2018 às 22:52
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wesearch`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chave` varchar(64) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `links`
--

INSERT INTO `links` (`id`, `chave`, `data`) VALUES
(1, 'a78cee544d5535ddf3f3b21fac85d68fdc93e2040fdc665e94977bcf65cb7ce9', '2018-09-06 19:49:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prontuario` varchar(9) NOT NULL,
  `nome` varchar(120) DEFAULT NULL,
  `senha` varchar(64) NOT NULL,
  `email` varchar(120) NOT NULL,
  `lattes` varchar(120) DEFAULT NULL,
  `alteracao` date DEFAULT NULL,
  `adm` tinyint(1) NOT NULL,
  `chave` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `prontuario`, `nome`, `senha`, `email`, `lattes`, `alteracao`, `adm`, `chave`) VALUES
(22, 'admin', 'Admin', 'ccbc804f776cd2e742750c1045b5fd063d7cfba40c74fe5ff06b6c51ccbbd7b5', 'eric.gmoreira98@gmail.com', NULL, '2018-09-06', 1, 'a78cee544d5535ddf3f3b21fac85d68fdc93e2040fdc665e94977bcf65cb7ce9');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
