-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jan-2020 às 01:28
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
-- Estrutura da tabela `ta_atividade_test`
--

CREATE TABLE `ta_atividade_test` (
  `id_ati` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL,
  `vagas` int(11) NOT NULL,
  `dia` date NOT NULL,
  `horaini` time NOT NULL,
  `horafim` time NOT NULL,
  `carga` int(11) NOT NULL,
  `id_lugar` int(11) NOT NULL,
  `id_palestrante` int(11) NOT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ta_atividade_test`
--

INSERT INTO `ta_atividade_test` (`id_ati`, `nome`, `tipo`, `valor`, `vagas`, `dia`, `horaini`, `horafim`, `carga`, `id_lugar`, `id_palestrante`, `descricao`) VALUES
(45, 'Contar historias', 'roda', 0, 50, '2020-12-12', '20:00:00', '22:00:00', 2, 3, 1, 'roda de historias'),
(58, 'nadanaaa', 'teste', 0, 40, '2019-12-12', '16:00:00', '18:00:00', 2, 2, 3, 'nada'),
(59, 'roda de conversa', 'roda', 50, 50, '2020-02-12', '12:00:00', '16:00:00', 4, 9, 1, 'nada'),
(60, 'prov final', 'prova', 40, 40, '2020-02-12', '14:00:00', '17:00:00', 4, 3, 3, 'PROVA'),
(61, 'aula sprint', 'aula', 0, 40, '2020-02-12', '12:00:00', '12:00:00', 30, 10, 3, 'teste'),
(62, 'Aula Pratica', 'aula', 0, 40, '2020-12-12', '20:00:00', '22:00:00', 2, 10, 3, 'Teste'),
(63, 'teste', 'teste', 0, 40, '2020-08-12', '14:00:00', '18:00:00', 4, 10, 3, 'nada');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ta_atividade_test`
--
ALTER TABLE `ta_atividade_test`
  ADD PRIMARY KEY (`id_ati`),
  ADD KEY `fk_lugarAti` (`id_lugar`),
  ADD KEY `fk_paleAti` (`id_palestrante`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ta_atividade_test`
--
ALTER TABLE `ta_atividade_test`
  MODIFY `id_ati` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
