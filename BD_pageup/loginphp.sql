-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 10-Dez-2019 às 04:16
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginphp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao`
--

CREATE TABLE `inscricao` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `inicio` date DEFAULT NULL,
  `horaI` time DEFAULT NULL,
  `termino` date DEFAULT NULL,
  `horaT` time DEFAULT NULL,
  `cep` int(10) DEFAULT NULL,
  `rua` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `responsavel` varchar(140) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` int(15) DEFAULT NULL,
  `descricao` longtext COLLATE utf8_unicode_ci,
  `cargaHora` int(5) DEFAULT NULL,
  `totalPart` int(6) DEFAULT NULL,
  `tipoEvento` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `inscricao`
--

INSERT INTO `inscricao` (`id`, `titulo`, `link`, `inicio`, `horaI`, `termino`, `horaT`, `cep`, `rua`, `estado`, `cidade`, `responsavel`, `email`, `telefone`, `descricao`, `cargaHora`, `totalPart`, `tipoEvento`) VALUES
(3, 'Matematica', 'https://pageupeventos.com/435366/matematica', '2019-12-10', '13:30:00', '2019-12-13', '18:00:00', 64260, 'Avenida', 'PI', 'Piripiri', 'Edileison', 'aluis7649@gmail.com', 0, 'Evento Teste', 100, 200, 'AP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscusuario`
--

CREATE TABLE `inscusuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sobrenome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` int(32) NOT NULL,
  `cpf` varchar(32) COLLATE utf8mb4_bin DEFAULT NULL,
  `telefone` varchar(32) COLLATE utf8mb4_bin DEFAULT NULL,
  `cep` varchar(32) COLLATE utf8mb4_bin NOT NULL,
  `estado` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `instituicao` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `curso` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `matricula` int(255) NOT NULL,
  `bloco` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `inscusuario`
--

INSERT INTO `inscusuario` (`id`, `nome`, `sobrenome`, `login`, `senha`, `cpf`, `telefone`, `cep`, `estado`, `cidade`, `instituicao`, `curso`, `matricula`, `bloco`) VALUES
(21, 'Jose', 'silva', 'r10@gmail.com', 81, '61514311380', '(86)981734937', '64108-000', 'Sao Paulo', 'Sao Paulo', 'UFPI', 'Historia', 1234, 'IV'),
(22, 'JOSE EDILEUSON', 'silva', 'silvaedi4374@gmail.com', 81, '61514311380', '78678678678', '64108-000', 'Piaui', 'Boa Hora', 'UFPI', 'Historia', 1212, 'IV');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL,
  `nome` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_log_user`
--

CREATE TABLE `tab_log_user` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL,
  `senha` varchar(32) COLLATE utf8mb4_bin DEFAULT NULL,
  `cpf` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tab_log_user`
--

INSERT INTO `tab_log_user` (`id`, `nome`, `email`, `senha`, `cpf`) VALUES
(4, 'Jose edi', 'edileison@gmail.com', '25f9e794323b453885f5181f1b624d0b', '61514311380');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ta_atividade`
--

CREATE TABLE `ta_atividade` (
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
  `descricao` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `ta_atividade`
--

INSERT INTO `ta_atividade` (`id`, `nome`, `tipo`, `valor`, `vagas`, `dia`, `horaini`, `horafim`, `carga`, `lugar`, `palestrante`, `descricao`) VALUES
(0, 'fvv', 'rrfffv', 44, 46, '2019-12-12', '14:04:00', '13:03:00', 4, 'sala', 'qqq', 'drcf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ta_convidado`
--

CREATE TABLE `ta_convidado` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `bibliografia` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ta_cupom`
--

CREATE TABLE `ta_cupom` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `desconto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `validade` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ta_local`
--

CREATE TABLE `ta_local` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
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
(24, 'JOSE EDILEUSON', 'jr@gmail.com', '202cb962ac59075b964b07152d234b70'),
(25, 'JOSE EDILEUSON', 'js@gmail.com', '202cb962ac59075b964b07152d234b70'),
(26, 'Igor', 'ig@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inscricao`
--
ALTER TABLE `inscricao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inscusuario`
--
ALTER TABLE `inscusuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idlogin`);

--
-- Indexes for table `tab_log_user`
--
ALTER TABLE `tab_log_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta_atividade`
--
ALTER TABLE `ta_atividade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta_convidado`
--
ALTER TABLE `ta_convidado`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `ta_cupom`
--
ALTER TABLE `ta_cupom`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Indexes for table `ta_local`
--
ALTER TABLE `ta_local`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inscricao`
--
ALTER TABLE `inscricao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inscusuario`
--
ALTER TABLE `inscusuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_log_user`
--
ALTER TABLE `tab_log_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
