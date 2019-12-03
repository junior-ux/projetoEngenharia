-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 02-Dez-2019 às 17:31
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdpageup`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao`
--

DROP TABLE IF EXISTS `inscricao`;
CREATE TABLE IF NOT EXISTS `inscricao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `inicio` date DEFAULT NULL,
  `horaI` time DEFAULT NULL,
  `termino` date DEFAULT NULL,
  `horaT` time DEFAULT NULL,
  `cep` int(10) DEFAULT NULL,
  `estado` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rua` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `responsavel` varchar(140) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` int(15) DEFAULT NULL,
  `descricao` longtext COLLATE utf8_unicode_ci,
  `cargaHora` int(5) DEFAULT NULL,
  `totalPart` int(6) DEFAULT NULL,
  `tipoEvento` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `login` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `senha` varchar(32) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`) VALUES
(5, 'edileison', 'r10@gmail.com', '202cb962ac59075b964b07152d234b70'),
(20, 'man', 'man@gmail.com', '202cb962ac59075b964b07152d234b70'),
(21, 'man', 'man1@gmail.com', '202cb962ac59075b964b07152d234b70'),
(22, 'man', 'man11@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(23, 'man', 'man111@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(24, 'JOSE EDILEUSON', 'jr@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ta_atividade`
--

DROP TABLE IF EXISTS `ta_atividade`;
CREATE TABLE IF NOT EXISTS `ta_atividade` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `vagas` int(11) NOT NULL,
  `dia` date NOT NULL,
  `horaini` time NOT NULL,
  `horafim` time NOT NULL,
  `carga` int(11) NOT NULL,
  `lugar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `palestrante` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ta_convidado`
--

DROP TABLE IF EXISTS `ta_convidado`;
CREATE TABLE IF NOT EXISTS `ta_convidado` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `bibliografia` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ta_cupom`
--

DROP TABLE IF EXISTS `ta_cupom`;
CREATE TABLE IF NOT EXISTS `ta_cupom` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `desconto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `validade` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ta_local`
--

DROP TABLE IF EXISTS `ta_local`;
CREATE TABLE IF NOT EXISTS `ta_local` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
