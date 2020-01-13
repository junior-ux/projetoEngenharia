-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2016 at 07:10 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celke`
--

-- --------------------------------------------------------

--
-- Table structure for table `transacoes`
--

CREATE TABLE `transacoes` (
  `id` int(11) NOT NULL,
  `transacao_cod` varchar(120) NOT NULL,
  `data_transacao` datetime NOT NULL,
  `tipo_pagamento` varchar(120) NOT NULL,
  `status_transacao` varchar(120) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(120) NOT NULL,
  `endereco` varchar(220) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `complemento` varchar(120) NOT NULL,
  `bairro` varchar(120) NOT NULL,
  `cidade` varchar(120) NOT NULL,
  `uf` varchar(20) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `preco` varchar(20) NOT NULL,
  `carrinho_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transacoes`
--

INSERT INTO `transacoes` (`id`, `transacao_cod`, `data_transacao`, `tipo_pagamento`, `status_transacao`, `nome`, `email`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `cep`, `produto_id`, `preco`, `carrinho_id`, `created`, `modified`) VALUES
(34, '202cb962ac59075b964b07152d234b701', '2016-07-15 10:20:35', 'Boleto', 'Aguardando Pagamento', 'Cesar Szpak', 'celkeadm@gmail.com', 'Av. Republica Argentina', '5550', '', 'CapÃ£o Raso', 'Curitiba', 'PR', '81050001', 3, '', 15, '2016-08-06 13:28:06', '2016-08-07 20:45:01'),
(35, '202cb962ac59075b964b07152d234b702', '2016-07-15 10:20:35', 'CartÃ£o de CrÃ©dito', 'Aguardando Pagamento', 'Cesar Szpak', 'celkeadm@gmail.com', 'Av. Republica Argentina', '5550', '', 'CapÃ£o Raso', 'Curitiba', 'PR', '81050001', 3, '', 15, '2016-08-06 13:28:44', NULL),
(36, '202cb962ac59075b964b07152d234b703', '2016-07-15 10:20:35', 'CartÃ£o de CrÃ©dito', 'Aguardando Pagamento', 'Cesar Szpak', 'celkeadm@gmail.com', 'Av. Republica Argentina', '5550', '', 'CapÃ£o Raso', 'Curitiba', 'PR', '81050001', 3, '', 15, '2016-08-06 13:29:11', NULL),
(38, '202cb962ac59075b964b07152d234b704', '2016-07-15 10:20:35', 'CartÃ£o de CrÃ©dito', 'Aprovado', 'Cesar Szpak', 'celkeadm@gmail.com', 'Av. Republica Argentina', '5550', '', 'CapÃ£o Raso', 'Curitiba', 'PR', '81050001', 3, '', 15, '2016-08-06 13:29:58', NULL),
(41, '202cb962ac59075b964b07152d234b705', '2016-07-15 10:20:35', 'CartÃ£o de CrÃ©dito', 'Cancelado', 'Cesar Szpak', 'celkeadm@gmail.com', 'Av. Republica Argentina', '5550', '', 'CapÃ£o Raso', 'Curitiba', 'PR', '81050001', 2, '', 15, '2016-08-06 14:14:07', NULL),
(42, '202cb962ac59075b964b07152d234b706', '2016-07-15 10:20:35', 'CartÃ£o de CrÃ©dito', 'Aprovado', 'Cesar Szpak', 'celkeadm@gmail.com', 'Av. Republica Argentina', '5550', '', 'CapÃ£o Raso', 'Curitiba', 'PR', '81050001', 2, '', 15, '2016-08-06 14:14:21', NULL),
(43, '202cb962ac59075b964b07152d234b707', '2016-07-15 10:20:35', 'CartÃ£o de CrÃ©dito', 'Cancelado', 'Cesar Szpak', 'celkeadm@gmail.com', 'Av. Republica Argentina', '5550', '', 'CapÃ£o Raso', 'Curitiba', 'PR', '81050001', 2, '', 15, '2016-08-06 14:14:39', NULL),
(44, '202cb962ac59075b964b07152d234b708', '2016-07-15 10:20:35', 'CartÃ£o de CrÃ©dito', 'Cancelado', 'Cesar Szpak', 'celkeadm@gmail.com', 'Av. Republica Argentina', '5550', '', 'CapÃ£o Raso', 'Curitiba', 'PR', '81050001', 3, '', 15, '2016-08-06 14:15:02', NULL),
(45, '202cb962ac59075b964b07152d234b709', '2016-07-15 10:20:35', 'CartÃ£o de CrÃ©dito', 'Cancelado', 'Cesar Szpak', 'celkeadm@gmail.com', 'Av. Republica Argentina', '5550', '', 'CapÃ£o Raso', 'Curitiba', 'PR', '81050001', 3, '', 15, '2016-08-06 14:16:08', '2016-08-07 20:15:17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
