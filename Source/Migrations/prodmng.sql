-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Ago-2021 às 05:11
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prodmng`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mensagem` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `email`, `mensagem`, `updated_at`, `deleted_at`) VALUES
(1, 'Maria Aldenice Farias Da Silva Sousa', 'rafinhasousa2111@gmail.com', 'tste', '2021-08-01 05:02:43', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `qtd` int NOT NULL,
  `deleted_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `qtd`, `deleted_at`, `updated_at`) VALUES
(1, 'Prod #22322', 'Prod #22322', 158, '0000-00-00 00:00:00', '2021-08-01 04:52:07'),
(2, 'Prod #3145', 'nome', 10, '0000-00-00 00:00:00', '2021-08-01 04:27:20'),
(3, 'Prod #3141', 'nome', 209, '0000-00-00 00:00:00', '2021-08-01 04:27:20'),
(4, 'Prod #2641', 'nome', 168, '0000-00-00 00:00:00', '2021-08-01 04:27:20'),
(5, 'Prod #2853', 'nome', 220, '2021-08-01 01:57:36', '2021-08-01 04:57:36'),
(6, 'Prod #2527', 'nome', 82, '2021-08-01 01:57:33', '2021-08-01 04:57:33'),
(7, 'PRODUTO QUE VOU DELETAR', 'PRODUTO QUE VOU DELETAR', 79, '2021-08-01 01:55:08', '2021-08-01 04:55:08'),
(8, 'Prod #22222', 'Prod #2', 102, '2021-08-01 01:53:03', '2021-08-01 04:53:03'),
(9, 'Prod #2269', 'Prod #2269', 65, '2021-08-01 01:50:08', '2021-08-01 04:50:08'),
(10, 'Prod #2906', 'nome', 146, '2021-08-01 03:49:42', '2021-08-01 06:49:42'),
(11, 'Prod #3170', 'nome', 76, '2021-08-01 03:49:41', '2021-08-01 06:49:41'),
(12, 'Prod #2254', 'nome', 42, '2021-08-01 03:49:41', '2021-08-01 06:49:41'),
(13, 'Prod #3082', 'nome', 4, '2021-08-01 03:49:40', '2021-08-01 06:49:40'),
(14, 'Prod #2601', 'nome', 13, '2021-08-01 03:49:39', '2021-08-01 06:49:39'),
(15, 'Prod #2467', 'nome', 31, '2021-08-01 03:49:38', '2021-08-01 06:49:38'),
(16, 'Prod #2246', 'nome', 104, '2021-08-01 03:49:36', '2021-08-01 06:49:36'),
(17, 'Prod #2058', 'nome', 58, '2021-08-01 03:49:46', '2021-08-01 06:49:46'),
(18, 'Prod #2525', 'nome', 23, '2021-08-01 03:32:13', '2021-08-01 06:32:13'),
(19, 'Prod #2659', 'nome', 156, '2021-08-01 03:32:04', '2021-08-01 06:32:04'),
(20, 'Prod #2616', 'nome', 39, '2021-08-01 03:32:02', '2021-08-01 06:32:02'),
(21, 'teste', 'teste', 1, '2021-08-01 03:49:34', '2021-08-01 06:49:34'),
(22, 'teste', 'teste', 1234, '2021-08-01 03:32:16', '2021-08-01 06:32:16'),
(23, 'Pelicula', 'Moto e6 plus', 20, '2021-08-01 03:31:53', '2021-08-01 06:31:53'),
(24, 'Moto e6 Plus', 'Moto e6 Plus', 80, '2021-08-01 04:09:37', '2021-08-01 07:09:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
