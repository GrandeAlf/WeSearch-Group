-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 13-Set-2018 às 01:07
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
CREATE DATABASE IF NOT EXISTS `wesearch` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wesearch`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo_pesquisa`
--

DROP TABLE IF EXISTS `grupo_pesquisa`;
CREATE TABLE IF NOT EXISTS `grupo_pesquisa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) NOT NULL,
  `sigla` varchar(8) NOT NULL,
  `lattes` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `descricao` text NOT NULL,
  `data_inicio` date NOT NULL,
  `ativacao` tinyint(1) NOT NULL,
  `id_lider` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lider` (`id_lider`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `grupo_pesquisa`
--
ALTER TABLE `grupo_pesquisa`
  ADD CONSTRAINT `grupo_pesquisa_ibfk_1` FOREIGN KEY (`id_lider`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
