-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2019 às 15:11
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetoengenharia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ta_cupom`
--

CREATE TABLE `ta_cupom` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `desconto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `validade` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ta_cupom`
--

INSERT INTO `ta_cupom` (`id`, `nome`, `desconto`, `quantidade`, `validade`) VALUES
(10, 'cupomteste', 2, 12, '2019-12-12'),
(12, 'sdnsd12', 12, 12, '2019-12-12'),
(14, 'assas', 14, 14, '2019-12-14'),
(16, 'dfdf', 12, 12, '2019-12-12'),
(21, 'ndmooo', 4, 5, '2020-01-29'),
(25, 'qualquer', 12, 10, '2019-12-10'),
(27, 'selo', 12, 2, '2019-12-12'),
(31, 'hhhdkdhdk', 2, 2, '2020-02-02'),
(33, 'sdjsk', 1, 1, '2019-12-12'),
(34, 'super', 5, 10, '2109-12-12');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ta_cupom`
--
ALTER TABLE `ta_cupom`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ta_cupom`
--
ALTER TABLE `ta_cupom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
