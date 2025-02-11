-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/02/2025 às 22:00
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `texto`
--

CREATE TABLE `texto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `texto`
--

INSERT INTO `texto` (`id`, `titulo`, `texto`) VALUES
(1, 'texto exemplo', 'texto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplotexto exemplo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`) VALUES
(1, 'Fulano', 'fulano@gmail.ocom'),
(2, 'ciclano', 'ciclano@gmail.com'),
(3, 'teste', 'teste@teste.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `texto`
--
ALTER TABLE `texto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `texto`
--
ALTER TABLE `texto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
