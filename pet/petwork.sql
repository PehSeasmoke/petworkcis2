-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/10/2024 às 13:31
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
-- Banco de dados: `petwork`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(60) NOT NULL,
  `conteudo` mediumblob NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `tamanho` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` decimal(11,0) NOT NULL,
  `datanascimento` date NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `password`, `email`, `telefone`, `datanascimento`, `foto`) VALUES
(1, 'helder', '111111', 'nunesclaudino2021@gmail.com', 0, '0000-00-00', ''),
(3, 'helder', '33333', 'penunesclaudino@gmail.com', 0, '0000-00-00', ''),
(4, 'helder', 'sadsad', 'penunesclaudino@gmail.com', 0, '0000-00-00', ''),
(5, 'helder', 'sadsad', 'penunesclaudino@gmail.com', 0, '0000-00-00', ''),
(6, 'dqwwqe', 'sadsad', 'penunesclaudino@gmail.com', 0, '0000-00-00', ''),
(7, 'asdsad', '123213', 'penunesclaudino@gmail.com', 0, '0000-00-00', ''),
(8, 'helder', 'sadsad', 'penunesclaudino@gmail.com', 0, '0000-00-00', ''),
(9, 'helder', 'sadsad', 'penunesclaudino@gmail.com', 0, '0000-00-00', ''),
(10, 'fsdfds', 'sadsad', 'penunesclaudino@gmail.com', 0, '0000-00-00', ''),
(11, 'helder', 'sadsad', 'penunesclaudino@gmail.com', 0, '0000-00-00', ''),
(12, 'helder', 'sadsad', 'penunesclaudino@gmail.com', 0, '0000-00-00', ''),
(13, 'urfuy', 'sadsad', 'penunesclaudino@gmail.com', 0, '0000-00-00', ''),
(14, 'sdfs', 'sadsad', 'penunesclaudino@gmail.com', 0, '0000-00-00', ''),
(15, 'pedro alune', 'alune123', 'pedrinhealune@gmail.cem', 120800190, '0544-04-15', ''),
(16, 'pedro alune', 'alune123', 'pedrinhealune@gmail.cem', 598609568, '4454-07-31', ''),
(17, '', '23424', 'pedrinhealune@gmail.cem', 0, '0000-00-00', ''),
(18, '', 'sadsad', 'penunesclaudino@gmail.com', 0, '0000-00-00', ''),
(19, '', 'sadsad', 'penunesclaudino@gmail.com', 0, '0000-00-00', ''),
(20, 'Lucas Leme', '12345', 'aroldo@gmail.com', 12996756922, '2006-08-30', ''),
(21, 'pedro alune', 'sadsad', 'penunesclaudino@gmail.com', 12121212, '1977-02-11', '2e61c4b7fdb6df646230c44eac17cc9e.png'),
(22, 'pedro alune', 'sadsad', 'penunesclaudino@gmail.com', 21312, '1111-11-11', '0f904a66dd88e46c11f7dc76204f94c0.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `fotos`
--
ALTER TABLE `fotos`
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
-- AUTO_INCREMENT de tabela `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
