-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql207.byetcluster.com
-- Tempo de geração: 06/10/2021 às 20:14
-- Versão do servidor: 5.6.48-88.0
-- Versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `epiz_29743118_pesquisa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados`
--

CREATE TABLE `dados` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `nome` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `respostas` text,
  `termosAcepted_at` datetime NOT NULL,
  `termoUsoImagem` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `dados`
--

INSERT INTO `dados` (`id`, `email`, `telefone`, `nome`, `created_at`, `updated_at`, `deleted_at`, `cpf`, `respostas`, `termosAcepted_at`, `termoUsoImagem`) VALUES
(8, 'daniel.mansur@ufsc.br', '(48) 99180-1979', 'Daniel Mansur', '2021-09-27 16:17:24', '2021-09-27 16:17:24', NULL, NULL, NULL, '2021-09-27 12:17:24', 1),
(6, 'gabrielabtm@gmail.com', '(61) 98361-3554', 'Gabriela ', '2021-09-21 12:41:55', '2021-09-21 12:41:55', NULL, NULL, NULL, '2021-09-21 08:41:55', 0),
(7, 'dvalle@ioc.fiocruz.br', '(21) 99925-0367', 'denise valle', '2021-09-27 16:08:16', '2021-09-27 16:08:16', NULL, NULL, NULL, '2021-09-27 12:08:16', 1),
(5, 'luiz.coelho@unifal-mg.edu.br', '(35) 98875-6941', 'Luiz Felipe Leomil Coelho', '2021-09-21 12:13:46', '2021-09-21 12:13:46', NULL, NULL, NULL, '2021-09-21 08:13:46', 1),
(9, 'gabrielabtm@gmail.com', '(61) 98361-3554', 'Teste', '2021-10-05 21:23:48', '2021-10-05 21:23:48', NULL, NULL, NULL, '2021-10-05 17:23:48', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` varchar(10) NOT NULL,
  `pergunta` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `perguntas`
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
-- Estrutura para tabela `pesquisadores_link`
--

CREATE TABLE `pesquisadores_link` (
  `id` int(11) NOT NULL,
  `pesquisador` varchar(300) NOT NULL,
  `idLink` int(11) NOT NULL,
  `linkAcessado` tinyint(1) NOT NULL,
  `termoConsentimento` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `pesquisadores_link`
--

INSERT INTO `pesquisadores_link` (`id`, `pesquisador`, `idLink`, `linkAcessado`, `termoConsentimento`) VALUES
(16, 'Mauro Martins Teixeira', 16, 0, NULL),
(15, 'Maria Da Glória Lima Cruz Teixeira', 15, 0, NULL),
(14, 'Marcelo Dias Baruffi', 14, 0, NULL),
(13, 'Luiz Felipe Leomil Coelho', 13, 1, NULL),
(12, 'Laura Helena Vega Gonzales Gil', 12, 0, NULL),
(11, 'Joao Bosco Paraiso Da Silva', 11, 0, NULL),
(10, 'Jerson Lima Da Silva', 10, 0, NULL),
(9, 'Helton Da Costa Santiago', 9, 0, NULL),
(8, 'Denise Valle', 8, 1, 1),
(7, 'Daniel Santos Mansur', 7, 1, 1),
(6, 'Cláudia Nunes Duarte Dos Santos', 6, 0, NULL),
(5, 'Claire Fernandes Kubelka', 5, 0, NULL),
(4, 'Carlos Alexandre Antunes De Brito', 4, 0, NULL),
(3, 'Aparecida Sadae Tanaka', 3, 0, NULL),
(2, 'Amilcar Tanuri', 2, 0, NULL),
(1, 'Álvaro Eduardo Eiras', 1, 0, 0),
(17, 'Patrícia Brasil', 17, 0, NULL),
(18, 'Paulo Filemon Paolucci Pimenta', 18, 0, NULL),
(19, 'Salvatore Giovanni De Simone', 19, 1, 0),
(20, 'Selma Elaine Mazzetto', 20, 0, NULL),
(21, 'Thiago Barros Correia Da Silva', 21, 0, NULL),
(22, 'Wayner Vieira De Souza', 22, 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `respostas`
--

CREATE TABLE `respostas` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `bloco` int(11) NOT NULL,
  `respostas` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `respostas`
--

INSERT INTO `respostas` (`id`, `idUsuario`, `page`, `bloco`, `respostas`, `created_at`, `updated_at`) VALUES
(29, 6, 1, 1, '{\"blocoId\":\"1\",\"page\":\"1\",\"q1\":\"Ci\\u00eancias Humanas\",\"q2\":\"ss\"}', '2021-09-21 12:42:08', '2021-09-21 12:42:08'),
(41, 8, 1, 1, '{\"blocoId\":\"1\",\"page\":\"1\",\"q1\":\"Ci\\u00eancia Biol\\u00f3gicas\",\"q2\":\"Virologia\\/Imunologia\"}', '2021-09-27 16:17:51', '2021-09-27 16:17:51'),
(16, 5, 1, 1, '{\"blocoId\":\"1\",\"page\":\"1\",\"q1\":\"Ci\\u00eancia Biol\\u00f3gicas\",\"q2\":\"Microbiologia\"}', '2021-09-21 12:14:04', '2021-09-21 12:14:04'),
(17, 5, 2, 1, '{\"blocoId\":\"1\",\"page\":\"2\",\"q3\":\"Chamada MCTI\\/CNPq\\/MS-SCTIE-Decit n\\u00ba 40\\/2012 \\u2013 Pesquisa em Doen\\u00e7as Negligenciadas\",\"q4\":\"Investiga\\u00e7\\u00e3o de fatores sorol\\u00f3gicos e gen\\u00e9ticos relacionados com a predisposi\\u00e7\\u00e3o ao desenvolvimento das formas graves da dengue em Minas Gerais: estudo em cidades com perfis epidemiol\\u00f3gicos distintos\",\"q5\":\"2013-02-01\",\"q6\":\"2018-01-27\"}', '2021-09-21 12:15:04', '2021-09-21 12:15:04'),
(18, 5, 3, 1, '{\"blocoId\":\"1\",\"page\":\"3\",\"q7\":\"Outro\",\"q7_Outro\":\"193815.11\",\"q8\":\"N\\u00e3o\",\"q9\":\"N\\u00e3o\"}', '2021-09-21 12:15:39', '2021-09-21 12:15:39'),
(19, 5, 4, 1, '{\"blocoId\":\"1\",\"page\":\"4\",\"q10\":\"Sim\",\"q10_1\":\"Outro\",\"q10_1_Outro\":\"UFOP\\r\\nUFPI\\r\\nUFSJ\\r\\nUFJF\",\"q11\":\"Pesquisa Biom\\u00e9dica \\u2013 investigam mecanismos de sa\\u00fade e doen\\u00e7a. Buscam produzir conhecimento sobre desenvolvimento de m\\u00e9todos diagn\\u00f3stico, tratamento, m\\u00e9todos de preven\\u00e7\\u00e3o de agravos e doen\\u00e7as, com o objetivo de melhorar a qualidade de vida dos indiv\\u00edduos.\"}', '2021-09-21 12:16:07', '2021-09-21 12:16:07'),
(20, 5, 5, 2, '{\"blocoId\":\"2\",\"page\":\"5\",\"q12\":\"Sim\",\"q12_1\":\"Outro\",\"q12_1_Outro\":\"da Rocha Taranto, Martinelle Ferreira; Pessanha, Jos\\u00e9 Eduardo Marques; dos Santos, Michelli; dos\\r\\nSantos Pereira Andrade, Ana Cl\\u00e1udia; Camargos, Vidyleison Neves; Alves, St\\u00eanio Nunes; Di Lorenzo\\r\\nOliveira, Cl\\u00e1udia; Taranto, Alex Gutterres; dos Santos, Luciana Lara; de Magalh\\u00e3es, Jos\\u00e9 Carlos; Kroon,\\r\\nErna Geessien; Figueiredo, Leandra Barcelos; Drumond, Bet\\u00e2nia Paiva; Ferreira, Jaqueline Maria\\r\\nSiqueira. Dengue outbreaks in Divinopolis, south-eastern Brazil and the geographic and climatic\\r\\ndistribution of Aedes albopictus and Aedes aegypti in 2011-\\r\\n2012 , v. 20, n. 1, p. 77-88, 2015.\\r\\n1\\r\\nCec\\u00edlio, Samyra Giarola; J\\u00fanior, Willer Ferreira Silva; T\\u00f3tola, Ant\\u00f4nio Helv\\u00e9cio; de Brito Magalh\\u00e3es, C\\u00edntia\\r\\nLopes; Ferreira, Jaqueline Maria Siqueira; de Magalh\\u00e3es, Jos\\u00e9 Carlos. Dengue virus detection in\\r\\nAedes aegypti larvae from southeastern Brazil , v. 40, n. 1, p. 71-74, 2015.\\r\\n2\\r\\nGomes, Alessandra Vilas Boas Terra; de Souza Morais, Stella Maria; Menezes-Filho, Sergio Luiz; de\\r\\nAlmeida, Luiz Gustavo Nogueira; Rocha, Raissa Prado; Siqueira Ferreira, Jaqueline Maria; dos Santos,\\r\\nLuciana Lara; Malaquias, Luiz Cosme Cotta; Coelho, Luiz Felipe Leomil. The demethylation\\r\\nprofile of the TNF- promoter gene is associated with high expression of this cytokine in\\r\\nDengue virus patients , p. n\\/a-n\\/a, 2016.\\r\\n3\\r\\nCardoso, J.L.M.S.; SOARES, M. J. S.; LEITE, J. R. S. A.; MALAQUIAS, L. C. C.; COELHO, L. F. L..\\r\\nAntiviral activity of dermaseptin 01 against dengue virus type 2, Herpes simplex virus type 1 and vaccinia\\r\\nvirus, v. 23, n. 1, 18 p., 2013.\\r\\n4\\r\\nDrumond, Bet\\u00e2nia Paiva; Mondini, Adriano; Schmidt, Diane J.; Bronzoni, Roberta Vieira de Morais;\\r\\nBosch, Irene; Nogueira, Maur\\u00edcio Lacerda. Circulation of Different Lineages of Dengue Virus 2, Genotype\\r\\nAmerican\\/Asian in Brazil: Dynamics and Molecular and Phylogenetic Characterization, v. 8, n. 3, e59422\\r\\np., 2013.\\r\\n5\\r\\nBraga, Juliana Cristina Duarte; Silva, Leandro C\\u00e9sar da; Tib\\u00farcio, Jacqueline Domingues; Silva, Mirna de\\r\\nAbreu e; Pereira, Lailah Hor\\u00e1cio Sales; Dutra, Karina Rocha; Ferreira, Jaqueline Maria Siqueira; Lopes,\\r\\nD\\u00e9bora de Oliveira; dos Santos, Luciana Lara. Clinical, Molecular, and Epidemiological Analysis of\\r\\nDengue Cases during a Major Outbreak in the Midwest Region of Minas Gerais, Brazil, v. 2014, p. 1-6,\\r\\n2014.\\r\\n6\\r\\nBarcelos Figueiredo, Leandra; Sakamoto, Tetsu; Leomil Coelho, Luiz Felipe; de Oliveira Rocha, Eliseu\\r\\nSoares; Gomes Cota, Marcela Menezes; Ferreira, Gustavo Portela; de Oliveira, Jaquelline Germano;\\r\\nKroon, Erna Geessien. Dengue Virus 2 American-Asian Genotype Identified during the 2006\\/2007\\r\\nOutbreak in Piau\\u00ed, Brazil Reveals a Caribbean Route of Introduction and Dissemination of Dengue Virus\\r\\nin Brazil, v. 9, n. 8, e104516 p., 2014.\\r\\n7\\r\\nRocha, Raissa Prado; Livonesi, M\\u00e1rcia Cristina; Fumagalli, Marcilio Jorge; Rodrigues, Naiara Ferreira; da\\r\\nCosta, Lauro C\\u00e9sar Felipe; dos Santos, Michelle Cristina Silva Gomes; de Oliveira Rocha, Eliseu Soares;\\r\\nKroon, Erna Geessien; Malaquias, Luiz Cosme Cotta; Coelho, Luiz Felipe Leomil. Evaluation of\\r\\ntetravalent and conserved synthetic peptides vaccines derived from Dengue virus Envelope domain I and\\r\\nII, v. 188, p. 122-127, 2014.\\r\\n8\\r\\nDrumond, Betania Paiva; da Silva Fagundes, Luiz Gustavo; Rocha, Raissa Prado; Fumagalli, Marcilio\\r\\nJorge; Araki, Carlos Shigueru; Colombo, Tatiana Elisa; Nogueira, Mauricio Lacerda; Castilho, Thiago\\r\\nElias; da Silveira, Nelson Jos\\u00e9 Freitas; Malaquias, Luiz Cosme Cotta; Coelho, Luiz Felipe Leomil.\\r\\nPhylogenetic analysis of Dengue virus 1 isolated from South Minas Gerais, Brazil, v. 47, n. 1, p. 251-258,\\r\\n2016.\\r\\n\\r\\n\\r\\n\",\"q13\":\"N\\u00e3o\",\"q14\":\"N\\u00e3o\"}', '2021-09-21 12:19:50', '2021-09-21 12:19:50'),
(21, 5, 6, 3, '{\"blocoId\":\"3\",\"page\":\"6\",\"q15\":\"Outro\",\"q15_Outro\":\"21\",\"q16\":\"N\\u00e3o\",\"q17\":\"N\\u00e3o\",\"q18\":\"N\\u00e3o\"}', '2021-09-21 12:20:19', '2021-09-21 12:20:19'),
(22, 5, 7, 3, '{\"blocoId\":\"3\",\"page\":\"7\",\"q19\":\"Sim\",\"q19_1\":\"Outro\",\"q19_1_Outro\":\"5\",\"q19_2\":\"Outro\",\"q19_2_Outro\":\"5\",\"q20\":\"Sim\",\"q20_1\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q20_2\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q21\":\"N\\u00e3o\",\"q22\":\"Sim\",\"q22_1\":\"Outro\",\"q22_1_Outro\":\"2\",\"q22_2\":\"Outro\",\"q22_2_Outro\":\"2\",\"q23\":\"Sim\",\"q23_1\":\"Outro\",\"q23_1_Outro\":\"2\",\"q23_2\":\"Outro\",\"q23_2_Outro\":\"0\"}', '2021-09-21 12:21:03', '2021-09-21 12:21:03'),
(23, 5, 8, 4, '{\"blocoId\":\"4\",\"page\":\"8\",\"q24\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q25\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-09-21 12:21:19', '2021-09-21 12:21:19'),
(24, 5, 9, 4, '{\"blocoId\":\"4\",\"page\":\"9\",\"q26\":\"N\\u00e3o\",\"q27\":\"N\\u00e3o\"}', '2021-09-21 12:21:26', '2021-09-21 12:21:26'),
(25, 5, 10, 5, '{\"blocoId\":\"5\",\"page\":\"10\",\"q28_1\":\"N\\u00e3o\",\"q28_2\":\"N\\u00e3o\",\"q28_3\":\"N\\u00e3o\",\"q28_4\":\"N\\u00e3o\",\"q28_5\":\"N\\u00e3o\",\"q28_6\":\"N\\u00e3o\",\"q28_7\":\"N\\u00e3o\",\"q28_8\":\"N\\u00e3o\",\"q28_9\":\"N\\u00e3o\"}', '2021-09-21 12:21:44', '2021-09-21 12:21:44'),
(26, 5, 11, 5, '{\"blocoId\":\"5\",\"page\":\"11\",\"q29\":\"N\\u00e3o\",\"q30\":\"N\\u00e3o\",\"q31\":\"N\\u00e3o\",\"q32\":\"N\\u00e3o\",\"q33\":\"N\\u00e3o\"}', '2021-09-21 12:21:56', '2021-09-21 12:21:56'),
(27, 5, 12, 5, '{\"blocoId\":\"5\",\"page\":\"12\",\"q34\":\"N\\u00e3o\",\"q35\":\"N\\u00e3o\"}', '2021-09-21 12:22:02', '2021-09-21 12:22:02'),
(28, 5, 13, 5, '{\"blocoId\":\"5\",\"page\":\"13\",\"q36\":\"N\\u00e3o\"}', '2021-09-21 12:22:08', '2021-09-21 12:22:08'),
(30, 6, 2, 1, '{\"blocoId\":\"1\",\"page\":\"2\",\"q3\":\"Edital MCT\\/CNPq\\/CTI-Sa\\u00fade\\/MS\\/SCTIE\\/DECIT n\\u00ba 034\\/2008 \\u2013 Doen\\u00e7as Negligenciadas.\",\"q4\":\"dd\",\"q5\":\"\",\"q6\":\"\"}', '2021-09-21 12:42:18', '2021-09-21 12:42:18'),
(31, 6, 3, 1, '{\"blocoId\":\"1\",\"page\":\"3\",\"q7\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q8\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q9\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-09-21 12:42:28', '2021-09-21 12:42:28'),
(32, 6, 4, 1, '{\"blocoId\":\"1\",\"page\":\"4\",\"q10\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q11\":\"Pesquisa sobre popula\\u00e7\\u00e3o e sa\\u00fade p\\u00fablica \\u2013 investigam os determinantes de sa\\u00fade de uma determinada popula\\u00e7\\u00e3o, com o intuito de propiciar melhoria da qualidade da sa\\u00fade.\"}', '2021-09-21 12:42:35', '2021-09-21 12:42:35'),
(33, 6, 5, 2, '{\"blocoId\":\"2\",\"page\":\"5\",\"q12\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q13\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q14\":\"Prefiro n\\u00e3o responder\"}', '2021-09-21 12:42:48', '2021-09-21 12:42:48'),
(34, 6, 6, 3, '{\"blocoId\":\"3\",\"page\":\"6\",\"q15\":\"Prefiro n\\u00e3o responder\",\"q16\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q17\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q18\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-09-21 12:43:03', '2021-09-21 12:43:03'),
(35, 6, 7, 3, '{\"blocoId\":\"3\",\"page\":\"7\",\"q19\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q20\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q21\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q22\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q23\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-09-21 12:43:18', '2021-09-21 12:43:18'),
(36, 6, 8, 4, '{\"blocoId\":\"4\",\"page\":\"8\",\"q24\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q25\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-09-21 12:43:27', '2021-09-21 12:43:27'),
(37, 6, 9, 4, '{\"blocoId\":\"4\",\"page\":\"9\",\"q26\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q27\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-09-21 12:43:36', '2021-09-21 12:43:36'),
(38, 6, 10, 5, '{\"blocoId\":\"5\",\"page\":\"10\",\"q28_1\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q28_2\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q28_3\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q28_4\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q28_5\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q28_6\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q28_7\":\"N\\u00e3o\",\"q28_8\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q28_9\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-09-21 12:44:22', '2021-09-21 12:44:22'),
(39, 6, 11, 5, '{\"blocoId\":\"5\",\"page\":\"11\",\"q29\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q30\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q31\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q32\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q33\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-09-21 12:44:37', '2021-09-21 12:44:37'),
(40, 6, 12, 5, '{\"blocoId\":\"5\",\"page\":\"12\",\"q34\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q35\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-09-21 12:44:45', '2021-09-21 12:44:45'),
(42, 8, 2, 1, '{\"blocoId\":\"1\",\"page\":\"2\",\"q3\":\"Chamada MCTI\\/CNPq\\/MS-SCTIE-Decit n\\u00ba 40\\/2012 \\u2013 Pesquisa em Doen\\u00e7as Negligenciadas\",\"q4\":\"Determina\\u00e7\\u00e3o de biomarcadores para risco de doen\\u00e7a grave e prote\\u00e7\\u00e3o na dengue baseados na conserva\\u00e7\\u00e3o estrutural de por\\u00e7\\u00f5es da prote\\u00edna do envelope viral\",\"q5\":\"\",\"q6\":\"\"}', '2021-09-27 16:18:46', '2021-09-27 16:18:46'),
(43, 8, 3, 1, '{\"blocoId\":\"1\",\"page\":\"3\",\"q7\":\"Outro\",\"q7_Outro\":\"160686\",\"q8\":\"N\\u00e3o\",\"q9\":\"Sim\",\"q9_1\":\"Outro\",\"q9_1_Outro\":\"1\"}', '2021-09-27 16:19:48', '2021-09-27 16:19:48'),
(44, 8, 4, 1, '{\"blocoId\":\"1\",\"page\":\"4\",\"q10\":\"Sim\",\"q10_1\":\"Outro\",\"q10_1_Outro\":\"Instituto Carlos Chagas (Fiocruz Paran\\u00e1)\\r\\nUniversidade Estadual de Londrina\\r\\nSecretaria Municipal de Sa\\u00fade de Camb\\u00e9 (Paran\\u00e1)\",\"q11\":\"Pesquisa Biom\\u00e9dica \\u2013 investigam mecanismos de sa\\u00fade e doen\\u00e7a. Buscam produzir conhecimento sobre desenvolvimento de m\\u00e9todos diagn\\u00f3stico, tratamento, m\\u00e9todos de preven\\u00e7\\u00e3o de agravos e doen\\u00e7as, com o objetivo de melhorar a qualidade de vida dos indiv\\u00edduos.\"}', '2021-09-27 16:20:59', '2021-09-27 16:20:59'),
(45, 8, 5, 2, '{\"blocoId\":\"2\",\"page\":\"5\",\"q12\":\"Sim\",\"q12_1\":\"Outro\",\"q12_1_Outro\":\"Genome-wide analyses reveal a highly conserved Dengue virus envelope peptide which is critical for virus viability and antigenic in humans\",\"q13\":\"N\\u00e3o\",\"q14\":\"N\\u00e3o\"}', '2021-09-27 16:21:46', '2021-09-27 16:21:46'),
(46, 8, 6, 3, '{\"blocoId\":\"3\",\"page\":\"6\",\"q15\":\"Outro\",\"q15_Outro\":\"12\",\"q16\":\"N\\u00e3o\",\"q17\":\"Sim\",\"q17_1\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q18\":\"N\\u00e3o\"}', '2021-09-27 16:23:03', '2021-09-27 16:23:03'),
(47, 8, 7, 3, '{\"blocoId\":\"3\",\"page\":\"7\",\"q19\":\"Sim\",\"q19_1\":\"Outro\",\"q19_1_Outro\":\"1\",\"q19_2\":\"Outro\",\"q19_2_Outro\":\"0\",\"q20\":\"N\\u00e3o\",\"q21\":\"N\\u00e3o\",\"q22\":\"Sim\",\"q22_1\":\"Outro\",\"q22_1_Outro\":\"2\",\"q22_2\":\"Outro\",\"q22_2_Outro\":\"2\",\"q23\":\"Sim\",\"q23_1\":\"Outro\",\"q23_1_Outro\":\"1\",\"q23_2\":\"Outro\",\"q23_2_Outro\":\"0\"}', '2021-09-27 16:24:52', '2021-09-27 16:24:52'),
(48, 8, 8, 4, '{\"blocoId\":\"4\",\"page\":\"8\",\"q24\":\"Sim\",\"q24_1\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q25\":\"Sim\",\"q25_1\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q25_2\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-09-27 16:25:23', '2021-09-27 16:25:23'),
(49, 8, 9, 4, '{\"blocoId\":\"4\",\"page\":\"9\",\"q26\":\"N\\u00e3o\",\"q27\":\"Sim\",\"q27_1\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-09-27 16:25:41', '2021-09-27 16:25:41'),
(50, 8, 10, 5, '{\"blocoId\":\"5\",\"page\":\"10\",\"q28_1\":\"N\\u00e3o\",\"q28_2\":\"N\\u00e3o\",\"q28_3\":\"N\\u00e3o\",\"q28_4\":\"N\\u00e3o\",\"q28_5\":\"N\\u00e3o\",\"q28_6\":\"N\\u00e3o\",\"q28_7\":\"N\\u00e3o\",\"q28_8\":\"N\\u00e3o\",\"q28_9\":\"N\\u00e3o\"}', '2021-09-27 16:26:07', '2021-09-27 16:26:07'),
(51, 8, 11, 5, '{\"blocoId\":\"5\",\"page\":\"11\",\"q29\":\"Sim\",\"q29_1\":\"Outro\",\"q29_1_Outro\":\"Rede RENEZIKA\",\"q30\":\"N\\u00e3o\",\"q31\":\"N\\u00e3o\",\"q32\":\"N\\u00e3o\",\"q33\":\"N\\u00e3o\"}', '2021-09-27 16:27:09', '2021-09-27 16:27:09'),
(52, 8, 12, 5, '{\"blocoId\":\"5\",\"page\":\"12\",\"q34\":\"N\\u00e3o\",\"q35\":\"N\\u00e3o\"}', '2021-09-27 16:27:42', '2021-09-27 16:27:42'),
(53, 8, 13, 5, '{\"blocoId\":\"5\",\"page\":\"13\",\"q36\":\"N\\u00e3o\"}', '2021-09-27 16:28:00', '2021-09-27 16:28:00'),
(54, 9, 1, 1, '{\"blocoId\":\"1\",\"page\":\"1\",\"q1\":\"Ci\\u00eancias Sociais Aplicadas\",\"q2\":\"1\"}', '2021-10-05 21:25:06', '2021-10-05 21:25:06'),
(55, 9, 2, 1, '{\"blocoId\":\"1\",\"page\":\"2\",\"q3\":\"Edital MCT\\/CNPq\\/CTI-Sa\\u00fade\\/MS\\/SCTIE\\/DECIT n\\u00ba 034\\/2008 \\u2013 Doen\\u00e7as Negligenciadas.\",\"q4\":\"xx\",\"q5\":\"\",\"q6\":\"\"}', '2021-10-05 21:28:57', '2021-10-05 21:28:57'),
(56, 9, 3, 1, '{\"blocoId\":\"1\",\"page\":\"3\",\"q7\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q8\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q9\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-10-05 21:32:50', '2021-10-05 21:32:50'),
(57, 9, 4, 1, '{\"blocoId\":\"1\",\"page\":\"4\",\"q10\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q11\":\"Pesquisa cl\\u00ednica \\u2013 envolvem pacientes humanos com o objetivo de melhorar o diagn\\u00f3stico e tratamento de doen\\u00e7as ou agravos.\"}', '2021-10-05 21:35:00', '2021-10-05 21:35:00'),
(58, 9, 5, 2, '{\"blocoId\":\"2\",\"page\":\"5\",\"q12\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q13\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q14\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-10-05 21:37:51', '2021-10-05 21:37:51'),
(59, 9, 6, 3, '{\"blocoId\":\"3\",\"page\":\"6\",\"q15\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q16\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q17\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q18\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-10-05 21:40:17', '2021-10-05 21:40:17'),
(60, 9, 7, 3, '{\"blocoId\":\"3\",\"page\":\"7\",\"q19\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q20\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q21\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q22\":\"N\\u00e3o sei\\/N\\u00e3o lembro\",\"q23\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-10-05 21:43:34', '2021-10-05 21:43:34'),
(61, 9, 8, 4, '{\"blocoId\":\"4\",\"page\":\"8\",\"q24\":\"N\\u00e3o\",\"q25\":\"N\\u00e3o sei\\/N\\u00e3o lembro\"}', '2021-10-05 21:44:19', '2021-10-05 21:44:19'),
(62, 9, 9, 4, '{\"blocoId\":\"4\",\"page\":\"9\",\"q26\":\"N\\u00e3o\",\"q27\":\"N\\u00e3o\"}', '2021-10-05 21:46:08', '2021-10-05 21:46:08'),
(63, 9, 10, 5, '{\"blocoId\":\"5\",\"page\":\"10\",\"q28_1\":\"N\\u00e3o\",\"q28_2\":\"N\\u00e3o\",\"q28_3\":\"N\\u00e3o\",\"q28_4\":\"N\\u00e3o\",\"q28_5\":\"N\\u00e3o\",\"q28_6\":\"N\\u00e3o\",\"q28_7\":\"N\\u00e3o\",\"q28_8\":\"N\\u00e3o\",\"q28_9\":\"N\\u00e3o\"}', '2021-10-05 21:50:56', '2021-10-05 21:50:56'),
(64, 9, 11, 5, '{\"blocoId\":\"5\",\"page\":\"11\",\"q29\":\"N\\u00e3o\",\"q30\":\"N\\u00e3o\",\"q31\":\"N\\u00e3o\",\"q32\":\"N\\u00e3o\",\"q33\":\"N\\u00e3o\"}', '2021-10-05 21:54:20', '2021-10-05 21:54:20'),
(65, 9, 12, 5, '{\"blocoId\":\"5\",\"page\":\"12\",\"q34\":\"N\\u00e3o\",\"q35\":\"N\\u00e3o\"}', '2021-10-05 21:55:29', '2021-10-05 21:55:29');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `verified_at` datetime DEFAULT NULL,
  `verifyCode` varchar(200) DEFAULT NULL,
  `emailenviado` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `recovery` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `nome`, `email`, `password`, `verified_at`, `verifyCode`, `emailenviado`, `created_at`, `updated_at`, `deleted_at`, `recovery`) VALUES
(1, NULL, 'rafael sousa', 'rafael_sousa2018@outlook.com', '$2y$10$ipBsERoJsYkmevkybtFIDe1c9dJRq/VY8zODKGn38meP.jGL/iKde', '2021-08-25 11:35:56', NULL, 1, '2021-08-25 11:35:32', '2021-08-26 03:35:56', NULL, NULL),
(3, 'gabriela.btm@hotmail.com', 'gabriela.btm@hotmail.com', 'gabriela.btm@hotmail.com', '$2y$10$ipBsERoJsYkmevkybtFIDe1c9dJRq/VY8zODKGn38meP.jGL/iKde', '2021-09-15 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices de tabela `pesquisadores_link`
--
ALTER TABLE `pesquisadores_link`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `dados`
--
ALTER TABLE `dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `pesquisadores_link`
--
ALTER TABLE `pesquisadores_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
