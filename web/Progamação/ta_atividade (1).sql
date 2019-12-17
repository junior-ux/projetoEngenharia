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
-- Estrutura da tabela `ta_atividade`
--

CREATE TABLE `ta_atividade` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL,
  `vagas` int(11) NOT NULL,
  `dia` date NOT NULL,
  `horaini` time NOT NULL,
  `horafim` time NOT NULL,
  `carga` int(11) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `palestrante` varchar(60) NOT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ta_atividade`
--

INSERT INTO `ta_atividade` (`id`, `nome`, `tipo`, `valor`, `vagas`, `dia`, `horaini`, `horafim`, `carga`, `lugar`, `palestrante`, `descricao`) VALUES
(8, 'Palestra nova', 'palestra', 10, 60, '2109-12-14', '08:00:00', '18:00:00', 8, 'auditório', 'José', 'atividade'),
(9, 'Mini Curso', 'minicurso', 4, 40, '2019-12-13', '14:00:00', '18:00:00', 4, 'sala B', 'Jamim', 'Altas aulas'),
(14, 'Palestrinha', 'palestra', 2, 40, '2019-12-13', '14:00:00', '18:00:00', 4, 'sala B', 'Igor', 'palestra');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ta_atividade`
--
ALTER TABLE `ta_atividade`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ta_atividade`
--
ALTER TABLE `ta_atividade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
