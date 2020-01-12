-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jan-2020 às 21:30
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
-- Banco de dados: `loginphp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ta_entradas`
--

CREATE TABLE `ta_entradas` (
  `id_entrada` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `validadeini` date NOT NULL,
  `validadefim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ta_entradas`
--

INSERT INTO `ta_entradas` (`id_entrada`, `categoria`, `valor`, `quantidade`, `validadeini`, `validadefim`) VALUES
(1, 'Estudante Graduação', 12, 100, '2020-02-12', '2020-03-12'),
(3, 'Profissional', 50, 70, '2020-01-11', '2020-02-29');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ta_entradas`
--
ALTER TABLE `ta_entradas`
  ADD PRIMARY KEY (`id_entrada`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ta_entradas`
--
ALTER TABLE `ta_entradas`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
