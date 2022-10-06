-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 06/10/2022 às 00:01
-- Versão do servidor: 5.7.34
-- Versão do PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `festa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `convidado`
--

CREATE TABLE `convidado` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `convidado` varchar(1000) NOT NULL,
  `bebida1` varchar(1000) NOT NULL,
  `bebida2` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `convidado`
--

INSERT INTO `convidado` (`id`, `name`, `convidado`, `bebida1`, `bebida2`, `message`) VALUES
(7, 'Lari', 'Miguel', 'Vinho campo largo', 'Whysk', 'Opa'),
(8, 'Miguel', '', 'Vodka', 'Whysk', 'Testando'),
(9, 'Miguel', '', 'Vodka', 'Whysk', 'Testandoa'),
(10, 'rubens', '', 'Vodka', 'Ernegetico', 'vai se fode'),
(11, 'Miguel', '', 'Vinho campo largo', 'Ernegetico', 'Parabens, espero que a festa seja tope'),
(12, 'Clarinha', 'Miguel', 'Vodka', 'Vinho campo largo', 'Opaa espero que a festa seja boa'),
(13, 'oseias', 'thayna', 'Whysk', 'Ernegetico', 'kkkkkk'),
(14, 'Miguel', 'Wiliam', 'Vodka', 'Vinho campo largo', 'Opa tudo bom?'),
(15, 'MIGUEL', 'Jose', 'Whysk', 'Vinho campo largo', 'caipiro');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `convidado`
--
ALTER TABLE `convidado`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `convidado`
--
ALTER TABLE `convidado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
