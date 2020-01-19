-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jan-2020 às 01:17
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
-- Estrutura da tabela `inscricao_atividade`
--

CREATE TABLE `inscricao_atividade` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_atividade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `inscricao_atividade`
--

INSERT INTO `inscricao_atividade` (`id`, `id_usuario`, `id_atividade`) VALUES
(1, 2, 45),
(2, 2, 45),
(3, 4, 58),
(4, 4, 58),
(30, 6, 45),
(31, 6, 58),
(39, 6, 59),
(50, 8, 62),
(52, 8, 61),
(60, 5, 62),
(61, 5, 61);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `inscricao_atividade`
--
ALTER TABLE `inscricao_atividade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_usu` (`id_usuario`),
  ADD KEY `fk_id_ati` (`id_atividade`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `inscricao_atividade`
--
ALTER TABLE `inscricao_atividade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `inscricao_atividade`
--
ALTER TABLE `inscricao_atividade`
  ADD CONSTRAINT `fk_id_ati` FOREIGN KEY (`id_atividade`) REFERENCES `ta_atividade_test` (`id_ati`),
  ADD CONSTRAINT `fk_id_usu` FOREIGN KEY (`id_usuario`) REFERENCES `login_page` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
