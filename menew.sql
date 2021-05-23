-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Maio-2021 às 05:23
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `menew`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_cadastro` int(5) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cadastro`, `nome`, `telefone`, `email`, `cidade`, `estado`, `categoria`) VALUES
(1, 'adeilson Gonçalves paz', 98533045, 'adeisonth@hotmail.co', 'demerval lobaão ', 'Rio de Janeiro', 'Funcionario'),
(2, 'Djenane viveiros moraes', 986743920, 'adeisonth@hotmail.co', 'demerval lobaão ', 'Piauí', 'Cliente'),
(4, 'Otaviano vidal', 36894273, 'adeisonth@hotmail.co', 'demerval lobaão ', 'São Paulo', 'Fornecedor'),
(19, 'Raimundo Goncalves', 36894273, 'Djenane@.com.br', 'Teresina ', 'Rio de Janeiro', 'Cliente'),
(20, 'Otaviano vidal', 25101985, 'Djenane@.com.br', 'Guarulho', 'Rio de Janeiro', 'Fornecedor'),
(25, 'Lucas Vidal', 25101985, 'Djenane', 'Guarulho', 'São Paulo', 'Funcionario'),
(26, 'Djenane V. Moraes Paz', 26458795, 'djenane@paz.com.br', 'Guarulhos', 'São Paulo', 'Funcionario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_login` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_login`, `nome`, `pass`) VALUES
(1, 'menew', 'menew123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_cadastro`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_cadastro` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
