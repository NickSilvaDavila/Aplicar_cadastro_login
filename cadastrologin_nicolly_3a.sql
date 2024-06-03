-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/06/2024 às 14:15
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastrologin_nicolly_3a`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `caduser`
--

CREATE TABLE `caduser` (
  `idcadUser` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tipoUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblogin`
--

CREATE TABLE `tblogin` (
  `idtbLogin` int(11) NOT NULL,
  `dtHoraLogin` timestamp NOT NULL DEFAULT current_timestamp(),
  `cadUser_idcadUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `caduser`
--
ALTER TABLE `caduser`
  ADD PRIMARY KEY (`idcadUser`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`idtbLogin`),
  ADD KEY `cadUser_idcadUser` (`cadUser_idcadUser`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `caduser`
--
ALTER TABLE `caduser`
  MODIFY `idcadUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `idtbLogin` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tblogin`
--
ALTER TABLE `tblogin`
  ADD CONSTRAINT `tblogin_ibfk_1` FOREIGN KEY (`cadUser_idcadUser`) REFERENCES `caduser` (`idcadUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
