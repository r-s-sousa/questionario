-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 31-Out-2021 às 16:06
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.4.9

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
  `email` varchar(200) NOT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `nome` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `cpf` int DEFAULT NULL,
  `respostas` text,
  `termosAcepted_at` datetime NOT NULL,
  `termoUsoImagem` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `email`, `telefone`, `nome`, `created_at`, `updated_at`, `deleted_at`, `cpf`, `respostas`, `termosAcepted_at`, `termoUsoImagem`) VALUES
(1, 'pesquisador@pesquisador.com', NULL, 'Álvaro Eduardo Eiras', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(2, 'pesquisador@pesquisador.com', NULL, 'Amilcar Tanuri', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(3, 'pesquisador@pesquisador.com', NULL, 'Aparecida Sadae Tanaka', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(4, 'pesquisador@pesquisador.com', NULL, 'Carlos Alexandre Antunes De Brito', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(5, 'pesquisador@pesquisador.com', NULL, 'Claire Fernandes Kubelka', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(6, 'pesquisador@pesquisador.com', NULL, 'Cláudia Nunes Duarte Dos Santos', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(7, 'pesquisador@pesquisador.com', NULL, 'Daniel Santos Mansur', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(8, 'pesquisador@pesquisador.com', NULL, 'Denise Valle', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(9, 'pesquisador@pesquisador.com', NULL, 'Helton Da Costa Santiago', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(10, 'pesquisador@pesquisador.com', NULL, 'Jerson Lima Da Silva', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(11, 'pesquisador@pesquisador.com', NULL, 'Joao Bosco Paraiso Da Silva', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(12, 'pesquisador@pesquisador.com', NULL, 'Laura Helena Vega Gonzales Gil', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(13, 'pesquisador@pesquisador.com', NULL, 'Luiz Felipe Leomil Coelho', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(14, 'pesquisador@pesquisador.com', NULL, 'Marcelo Dias Baruffi', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(15, 'pesquisador@pesquisador.com', NULL, 'Maria Da Glória Lima Cruz Teixeira', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(16, 'pesquisador@pesquisador.com', NULL, 'Mauro Martins Teixeira', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(17, 'pesquisador@pesquisador.com', NULL, 'Patrícia Brasil', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(18, 'pesquisador@pesquisador.com', NULL, 'Paulo Filemon Paolucci Pimenta', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(19, 'pesquisador@pesquisador.com', NULL, 'Salvatore Giovanni De Simone', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(20, 'pesquisador@pesquisador.com', NULL, 'Selma Elaine Mazzetto', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(21, 'pesquisador@pesquisador.com', NULL, 'Thiago Barros Correia Da Silva', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL),
(22, 'pesquisador@pesquisador.com', NULL, 'Wayner Vieira De Souza', '2021-10-31 16:04:43', '2021-10-31 16:04:43', NULL, NULL, NULL, '2021-10-31 13:04:43', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

DROP TABLE IF EXISTS `perguntas`;
CREATE TABLE IF NOT EXISTS `perguntas` (
  `id` varchar(10) NOT NULL,
  `pergunta` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `pergunta`) VALUES
('q2', 'q2 Principal Área de Atuação:'),
('q3', 'q3 Principal Subárea de Atuação:'),
('q5', 'q5 Nome do edital no qual a pesquisa foi contemplada*:'),
('q6', 'q6 Título da pesquisa*: '),
('q7', 'q7 Data de início da pesquisa:'),
('q8', 'q8 Data de término da pesquisa:'),
('q9', 'q9 Valor recebido no edital para execução da pesquisa (em reais – R$): Informe o valor ou marque uma das opções.'),
('q10', 'q10 A pesquisa teve outras fontes de financiamento*?'),
('q10_1', 'q10_1 Se sim, qual foi o valor recebido por outras fontes de financiamento (em reais – R$)?'),
('q11', 'q11 A partir dos resultados da sua pesquisa, foi possível o início de outras pesquisas que também receberam financiamento*?'),
('q11_1', 'q11_1 Se sim, quantas pesquisas? Informe a quantidade ou marque uma das opções.'),
('q12', 'q12 Para execução da pesquisa, foram estabelecidas parcerias com outras instituições (qualquer tipo de instituição: ex. outras universidades, secretaria de saúde municipal, secretaria de saúde estadual)*?'),
('q12_1', 'q12_1 Se sim, liste as instituições parceiras ou marque uma das opções.'),
('q13', 'q13 De acordo com as definições abaixo, como você classifica sua pesquisa*?'),
('q14', 'q14 Publicou artigos científicos em periódicos nacionais ou internacionais*?'),
('q14_1', 'q14_1 Se sim, informe os títulos dos artigos ou marque uma das opções*:'),
('q15', 'q15 Publicou livros*?'),
('q15_1', 'q15_1 Se sim, informe os títulos dos livros ou marque uma das opções*.'),
('q16', 'q16 Publicou capítulos de livros*?'),
('q16_1', 'q16_1 Se sim, informe os títulos dos capítulos dos livros ou marque uma das opções*.'),
('q17', 'q17 Quantos pessoas faziam parte da equipe de pesquisa*? '),
('q18', 'q18 Na sua equipe tinham pesquisadores visitantes*? '),
('q18_1', 'q18_1 Se sim, informe a quantidade de pesquisadores visitantes ou marque uma das opções.'),
('q18_2', 'q18_2 De quais instituições eram esses pesquisadores? Liste as instituições ou marque uma das opções.'),
('q19', 'q19 Na sua equipe tinham pesquisadores bolsistas de produtividade*?'),
('q19_1', 'q19_1 Se sim, informe a quantidade ou marque uma das opções.'),
('q20', 'q20 Na sua equipe tinham pesquisadores de pós-doutorado*?'),
('q20_1', 'q20_1 Se sim, informe a quantidade ou marque uma das opções.'),
('q21', 'q21 Participaram estudantes de iniciação científica*?'),
('q21_1', 'q21_1 Quantos estudantes de iniciação científica participaram*? Informe a quantidade ou marque uma das opções.'),
('q21_2', 'q21_2 Quantos relatórios de iniciação científica foram produzidos*? Informe a quantidade ou marque uma das opções.'),
('q22', 'q22 Participaram estudantes de graduação para a realização de Trabalho de Conclusão de Curso (TCC)*?'),
('q22_1', 'q22_1 Quantos estudantes de graduação participaram*? Informe a quantidade ou marque uma das opções.'),
('q22_2', 'q22_2 Quantos Trabalhos de Conclusão de Curso foram produzidos*? Informe a quantidade ou marque uma das opções.'),
('q23', 'q23 Participaram estudantes de especialização Lato Sensu *? '),
('q23_1', 'q23_1 Quantos estudantes de especialização Lato Sensu participaram*? Informe a quantidade ou marque uma das opções.'),
('q23_2', 'q23_2 Quantos Trabalhos de Conclusão de Curso foram produzidos*? Informe a quantidade ou marque uma das opções.'),
('q24', 'q24 Participaram estudantes de mestrado*?'),
('q24_1', 'q24_1 Quantos estudantes de mestrado participaram*? Informe a quantidade ou marque uma das opções.'),
('q24_2', 'q24_2 Quantas dissertações foram produzidas*? Informe a quantidade ou marque uma das opções.'),
('q25', 'q25 Participaram estudantes de doutorado*?'),
('q25_1', 'q25_1 Quantos estudantes de doutorado participaram*? Informe a quantidade ou marque uma das opções.'),
('q25_2', 'q25_2 Quantas teses foram apresentadas*? Informe a quantidade ou marque uma das opções.'),
('q26', 'q26 Publicou artigos completos, resumos expandidos ou resumo em anais de eventos científicos nacionais ou internacionais (congressos, simpósios, oficinas, seminários, etc)*?'),
('q26_1', 'q26_1 Se sim, informe a quantidade ou marque uma das opções*.'),
('q27', 'q27 Apresentou trabalhos para divulgação dos resultados da pesquisa em eventos científicos (congressos, fóruns, simpósios, oficinas, seminários etc.)*:'),
('q27_1', 'q27_1 Em quantos eventos científicos nacionais? Informe a quantidade ou marque uma das opções*.'),
('q27_2', 'q27_2 Em quantos eventos científicos internacionais? Informe a quantidade ou marque uma das opções*.'),
('q28', 'q28 Apresentou os resultados da pesquisa profissionais de saúde*?'),
('q28_1', 'q28_1 Se sim, informe a quantidade ou marque uma das opções.'),
('q29', 'q29 Apresentou os resultados da pesquisa para formuladores de políticas e tomadores de decisão em saúde*?'),
('q29_1', 'q29_1 Se sim, informe a quantidade, ou marque uma das opções:'),
('q30_1', 'q30_1 Protocolos Clínicos*? '),
('q30_1_1', 'q30_1_1 Se sim, informe os nomes dos protocolos ou marque uma das opções*.'),
('q30_2', 'q30_2 Manuais de saúde*?'),
('q30_2_1', 'q30_2_1 Se sim, informe os nomes dos manuais ou marque uma das opções*.'),
('q30_3', 'q30_3 Diretrizes em saúde*?'),
('q30_3_1', 'q30_3_1 Se sim, informe os nomes dos manuais ou marque uma das opções.'),
('q30_4', 'q30_4 Guias de Atenção à Saúde*? '),
('q30_4_1', 'q30_4_1 Se sim, informe os nomes dos Guias de Atenção à Saúde ou marque uma das opções*.'),
('q30_5', 'q30_5 Portarias*? '),
('q30_5_1', 'q30_5_1 Se sim, informe os números e anos das Portarias ou marque uma das opções*.'),
('q30_6', 'q30_6 Programas de saúde*?'),
('q30_6_1', 'q30_6_1 Se sim, informe os nomes dos Programas de Saúde ou marque uma das opções*.'),
('q30_7', 'q30_7 Políticas de saúde ou de outras áreas*: '),
('q30_7_1', 'q30_7_1 Se sim, informe os nomes das Políticas de Saúde ou marque uma das opções*.'),
('q30_8', 'q30_8 Materiais educativos/informativos para profissionais de saúde ou gestores de saúde*? '),
('q30_8_1', 'q30_8_1 Se sim, informe os nomes materiais educativos/informativos para profissionais de saúde ou gestores de saúde ou marque uma das opções*.'),
('q30_9', 'q30_9 Materiais educativos/informativos para população em geral*?'),
('q30_9_1', 'q30_9_1 Se sim, informe os nomes dos materiais educativos/informativos para a população em geral ou marque uma das opções.'),
('q31', 'q31 Foi realizada consultoria para formuladores de política (gestores de saúde de qualquer nível de atenção) *? '),
('q31_1', 'q31_1 Se sim, liste as consultorias realizadas ou marque uma das opções*.'),
('q32', 'q32 A pesquisa foi citada em livros*? '),
('q33', 'q33 A pesquisa foi citada nas mídias (matéria jornalística, entrevistas, sites institucionais, artigos publicados em jornais) *? '),
('q34', 'q34 Foram realizadas palestras/apresentações/audiências públicas*?'),
('q34_1', 'q34_1 Se sim, liste as palestras/apresentações/audiências públicas ou marque uma das opções*:'),
('q35', 'q35 Foram realizadas apresentações sobre a pesquisa para o público em geral*?'),
('q35_1', 'q35_1 Se sim, liste as apresentações realizadas ou marque uma das opções*?'),
('q36', 'q36 Produtos foram patenteados*? '),
('q36_1', 'q36_1 Se sim, liste as patentes ou marque uma das opções*?'),
('q37', 'q37 Foram realizadas consultorias para indústrias*? '),
('q37_1', 'q37_1 Se sim, informe a quantidade ou marque uma das opções*?'),
('q38', 'q38 A pesquisa gerou impactos na saúde, ou seja, houve alguma influência sobre indicadores de saúde (mortalidade, incidência, prevalência), determinantes sociais e ambientais, atenção e vigilância em saúde, etc*?'),
('q39', 'q39 Se sim, assinale as opções nas quais a pesquisa gerou impacto*:'),
('q1', 'q1 Principal Grande Área de Atuação*:');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisadores_link`
--

DROP TABLE IF EXISTS `pesquisadores_link`;
CREATE TABLE IF NOT EXISTS `pesquisadores_link` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pesquisador` varchar(300) NOT NULL,
  `idLink` int NOT NULL,
  `linkAcessado` tinyint(1) NOT NULL,
  `termoConsentimento` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pesquisadores_link`
--

INSERT INTO `pesquisadores_link` (`id`, `pesquisador`, `idLink`, `linkAcessado`, `termoConsentimento`) VALUES
(1, 'Álvaro Eduardo Eiras', 1, 0, NULL),
(2, 'Amilcar Tanuri', 2, 0, NULL),
(3, 'Aparecida Sadae Tanaka', 3, 0, NULL),
(4, 'Carlos Alexandre Antunes De Brito', 4, 0, NULL),
(5, 'Claire Fernandes Kubelka', 5, 0, NULL),
(6, 'Cláudia Nunes Duarte Dos Santos', 6, 0, NULL),
(7, 'Daniel Santos Mansur', 7, 0, NULL),
(8, 'Denise Valle', 8, 0, NULL),
(9, 'Helton Da Costa Santiago', 9, 0, NULL),
(10, 'Jerson Lima Da Silva', 10, 0, NULL),
(11, 'Joao Bosco Paraiso Da Silva', 11, 0, NULL),
(12, 'Laura Helena Vega Gonzales Gil', 12, 0, NULL),
(13, 'Luiz Felipe Leomil Coelho', 13, 0, NULL),
(14, 'Marcelo Dias Baruffi', 14, 0, NULL),
(15, 'Maria Da Glória Lima Cruz Teixeira', 15, 0, NULL),
(16, 'Mauro Martins Teixeira', 16, 0, NULL),
(17, 'Patrícia Brasil', 17, 0, NULL),
(18, 'Paulo Filemon Paolucci Pimenta', 18, 0, NULL),
(19, 'Salvatore Giovanni De Simone', 19, 0, NULL),
(20, 'Selma Elaine Mazzetto', 20, 0, NULL),
(21, 'Thiago Barros Correia Da Silva', 21, 0, NULL),
(22, 'Wayner Vieira De Souza', 22, 0, NULL);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `verified_at` datetime DEFAULT NULL,
  `verifyCode` varchar(200) DEFAULT NULL,
  `emailenviado` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `recovery` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `nome`, `email`, `password`, `verified_at`, `verifyCode`, `emailenviado`, `created_at`, `updated_at`, `deleted_at`, `recovery`) VALUES
(1, NULL, 'rafael sousa', 'rafael_sousa2018@outlook.com', '$2y$10$ipBsERoJsYkmevkybtFIDe1c9dJRq/VY8zODKGn38meP.jGL/iKde', '2021-08-25 11:35:56', NULL, 1, '2021-08-25 11:35:32', '2021-08-26 07:35:56', NULL, NULL),
(3, 'gabriela.btm@hotmail.com', 'gabriela.btm@hotmail.com', 'gabriela.btm@hotmail.com', '$2y$10$ipBsERoJsYkmevkybtFIDe1c9dJRq/VY8zODKGn38meP.jGL/iKde', '2021-09-15 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
