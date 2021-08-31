-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 31-Ago-2021 às 03:50
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
-- Banco de dados: `pesquisa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

DROP TABLE IF EXISTS `dados`;
CREATE TABLE IF NOT EXISTS `dados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `nome` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `cpf` int DEFAULT NULL,
  `respostas` json DEFAULT NULL,
  `termosAcepted_at` datetime NOT NULL,
  `termoUsoImagem` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `email`, `telefone`, `nome`, `created_at`, `updated_at`, `deleted_at`, `cpf`, `respostas`, `termosAcepted_at`, `termoUsoImagem`) VALUES
(33, 'rafael_sousa2018@outlook.com', '(61) 99434-6828', 'Rafael da Silva Sousa', '2021-08-30 22:32:09', '2021-08-30 22:32:09', NULL, NULL, NULL, '2021-08-30 19:32:09', 1),
(32, 'rafael_sousa2018@outlook.com', '(61) 3424-1076', 'Rafael da Silva Sousa', '2021-08-30 22:06:07', '2021-08-30 22:06:07', NULL, NULL, NULL, '2021-08-30 19:06:07', 1),
(31, 'rafael_sousa2018@outlook.com', '(61) 3424-1076', 'Rafael da Silva Sousa', '2021-08-30 21:46:02', '2021-08-30 21:46:02', NULL, NULL, NULL, '2021-08-30 18:46:02', 1),
(30, 'rafael_sousa2018@outlook.com', '(61) 3424-1076', 'Rafael da Silva Sousa', '2021-08-30 21:45:56', '2021-08-30 21:45:56', NULL, NULL, NULL, '2021-08-30 18:45:56', 1),
(29, 'rafael_sousa2018@outlook.com', '(61) 3424-1076', 'Rafael da Silva Sousa', '2021-08-30 21:45:04', '2021-08-30 21:45:04', NULL, NULL, NULL, '2021-08-30 18:45:04', 1),
(28, 'rafael_sousa2018@outlook.com', '(61) 3424-1076', 'Rafael da Silva Sousa', '2021-08-30 21:44:36', '2021-08-30 21:44:36', NULL, NULL, NULL, '2021-08-30 18:44:36', 1),
(27, 'rafael_sousa2018@outlook.com', '(61) 3424-1076', 'Rafael da Silva Sousa', '2021-08-30 21:43:56', '2021-08-30 21:43:56', NULL, NULL, NULL, '2021-08-30 18:43:56', 1),
(26, 'karolaine22@gmail.com', '(61) 99550-9698', 'Karolaine da Silva Sousa', '2021-08-30 02:17:21', '2021-08-30 02:17:21', NULL, NULL, NULL, '2021-08-29 23:17:21', 1),
(25, 'jose@gmail.com', '(61) 9999-7578', 'Jose lucio esio aquino de sousa', '2021-08-30 02:16:53', '2021-08-30 02:16:53', NULL, NULL, NULL, '2021-08-29 23:16:53', 1),
(24, 'rafinhasousa2111@gmail.com', '(61) 99105-7950', 'Maria Aldenice Farias Da Silva Sousa', '2021-08-30 02:16:30', '2021-08-30 02:16:30', NULL, NULL, NULL, '2021-08-29 23:16:30', 1),
(23, 'rafael_sousa2018@outlook.com', '(61) 99434-6828', 'Rafael da Silva Sousa', '2021-08-30 02:16:20', '2021-08-30 02:16:20', NULL, NULL, NULL, '2021-08-29 23:16:20', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

DROP TABLE IF EXISTS `respostas`;
CREATE TABLE IF NOT EXISTS `respostas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idUsuario` int NOT NULL,
  `page` int NOT NULL,
  `bloco` int NOT NULL,
  `respostas` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id`, `idUsuario`, `page`, `bloco`, `respostas`, `created_at`, `updated_at`) VALUES
(6, 33, 1, 1, '{\"blocoId\":\"1\",\"page\":\"2\",\"q1\":\"coordenador da pesquisa\",\"q2\":\"Ci\\u00eancias Exatas e da Terra\",\"q2Outras\":\"\",\"q3\":\"1234\",\"q4\":\"61994346828\"}', '2021-08-31 03:03:42', '2021-08-31 03:08:52'),
(8, 33, 3, 1, '{\"blocoId\":\"1\",\"page\":\"4\",\"q9\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q9Outro\":\"1200\",\"q10\":\"Sim\",\"10_1Outro\":\"1500\",\"q11\":\"Sim\",\"11_1Outro\":\"Duas outras\"}', '2021-08-31 03:48:14', '2021-08-31 03:48:14'),
(7, 33, 2, 1, '{\"blocoId\":\"1\",\"page\":\"3\",\"q5\":\"Edital MCT\\/CNPq\\/MS-SCTIE-DECIT n\\u00ba 025\\/2006 \\u2013 Doen\\u00e7as Negligenciadas.\",\"q6\":\"Titulo da pesquisa\",\"q7\":\"2000-11-21\",\"q8\":\"2020-11-21\"}', '2021-08-31 03:03:58', '2021-08-31 03:14:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
