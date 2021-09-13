-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Set-2021 às 21:41
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
('q28_8', 'q28_8. Materiais educativos/informativos para profissionais de saúde ou gestores de saúde*? '),
('q28_7_1', 'q28_7_1. Se sim, informe os nomes das Políticas ou marque uma das opções*.'),
('q28_7', 'q28_7. Políticas de saúde ou de outras áreas*: '),
('q28_6', 'q28_6. Programas de saúde*?'),
('q28_6_1', 'q28_6_1. Se sim, informe os nomes dos Programas de Saúde ou marque uma das opções*.'),
('q28_5', 'q28_5. Portarias*? '),
('q28_5_1', 'q28_5_1. Se sim, informe os números e anos das Portarias ou marque uma das opções*.'),
('q28_4_1', 'q28_4_1. Se sim, informe os nomes dos Guias de Atenção à Saúde ou marque uma das opções*.'),
('q28_4', 'q28_4. Guias de Atenção à Saúde*? '),
('q28_3', 'q28_3. Diretrizes em saúde*?'),
('q28_3_1', 'q28_3_1. Se sim, informe as diretrizes em saúde ou marque uma das opções.'),
('q28_2', 'q28_2. Manuais de saúde*?'),
('q28_2_1', 'q28_2_1. Se sim, informe os nomes dos manuais ou marque uma das opções*.'),
('q28_1', 'q28_1. Protocolos Clínicos*? '),
('q28_1_1', 'q28_1_1. Se sim, informe os nomes dos protocolos ou marque uma das opções*.'),
('q27_1', 'q27_1. Se sim, informe a quantidade, ou marque uma das opções:'),
('q27', 'q27. Apresentou os resultados da pesquisa para formuladores de políticas e tomadores de decisão em saúde*?'),
('q26_1', 'q26_1. Se sim, informe a quantidade ou marque uma das opções.'),
('q26', 'q26. Apresentou os resultados da pesquisa profissionais de saúde*?'),
('q25_2', 'q25_2. Em quantos eventos científicos internacionais? Informe a quantidade ou marque uma das opções*.'),
('q25_1', 'q25_1. Em quantos eventos científicos nacionais? Informe a quantidade ou marque uma das opções*.'),
('q25', 'q25. Apresentou trabalhos para divulgação dos resultados da pesquisa em eventos científicos (congressos, fóruns, simpósios, oficinas, seminários etc.)*:'),
('q24_1', 'q24_1. Se sim, informe a quantidade ou marque uma das opções*.'),
('q24', 'q24. Publicou artigos completos, resumos expandidos ou resumo em anais de eventos científicos nacionais ou internacionais (congressos, simpósios, oficinas, seminários, etc)*?'),
('q23_2', 'q23_2. Quantas teses foram produzidas*? Informe a quantidade ou marque uma das opções.'),
('q23', 'q23. Participaram estudantes de doutorado*?'),
('q23_1', 'q23_1. Quantos estudantes de doutorado participaram*? Informe a quantidade ou marque uma das opções.'),
('q22_2', 'q22_2. Quantas dissertações foram produzidas*? Informe a quantidade ou marque uma das opções.'),
('q22', 'q22. Participaram estudantes de mestrado*?'),
('q22_1', 'q22_1. Quantos estudantes de mestrado participaram*? Informe a quantidade ou marque uma das opções.'),
('q21_2', 'q21_2. Quantos Trabalhos de Conclusão de Curso foram produzidos*? Informe a quantidade ou marque uma das opções.'),
('q21_1', 'q21_1. Quantos estudantes de especialização Lato Sensu participaram*? Informe a quantidade ou marque uma das opções.'),
('q21', 'q21. Participaram estudantes de especialização Lato Sensu *? '),
('q20_1', 'q20_1. Quantos estudantes de graduação participaram*? Informe a quantidade ou marque uma das opções.'),
('q20_2', 'q20_2. Quantos Trabalhos de Conclusão de Curso foram produzidos*? Informe a quantidade ou marque uma das opções.'),
('q20', 'q20. Participaram estudantes de graduação para a realização de Trabalho de Conclusão de Curso (TCC)*?'),
('q19_2', 'q19_2. Quantos relatórios de iniciação científica foram produzidos*? Informe a quantidade ou marque uma das opções.'),
('q19_1', 'q19_1. Quantos relatórios de iniciação científica foram produzidos*? Informe a quantidade ou marque uma das opções.'),
('q19', 'q19. Participaram estudantes de iniciação científica*?'),
('q18', 'q18. Na sua equipe tinham pesquisadores de pós-doutorado*?'),
('q18_1', 'q18_1. Se sim, informe a quantidade ou marque uma das opções.'),
('q17_1', 'q17_1. Se sim, informe a quantidade de bolsistas de produtividade ou marque uma das opções:'),
('q17', 'q17. Na sua equipe tinham pesquisadores bolsistas de produtividade*?'),
('q16_2', 'q16_2. De quais instituições eram esses pesquisadores? Liste as instituições ou marque uma das opções.'),
('q16_1', 'q16_1. Se sim, informe a quantidade de pesquisadores visitantes ou marque uma das opções'),
('q16', 'q16. Na sua equipe tinham pesquisadores visitantes*?'),
('q15', 'q15. Quantos pessoas faziam parte da equipe de pesquisa*? '),
('q14', 'q14. Publicou capítulos de livros*?'),
('q14_1', 'q14_1. Se sim, informe os títulos dos capítulos dos livros ou marque uma das opções*.'),
('q13', 'q13. Publicou livros*?'),
('q13_1', 'q13_1. Se sim, informe os títulos dos livros ou marque uma das opções*.'),
('q12_1', 'q12_1. Se sim, informe os títulos dos artigos ou marque uma das opções*:'),
('q12', 'q12. Publicou artigos científicos em periódicos nacionais ou internacionais*?'),
('q11', 'q11. De acordo com as definições abaixo, como você classifica sua pesquisa*?'),
('q10_1', 'q10_1. Se sim, liste as instituições parceiras ou marque uma das opções.'),
('q10', 'q10. Para execução da pesquisa, foram estabelecidas parcerias com outras instituições (qualquer tipo de instituição: ex. outras universidades, secretaria de saúde municipal, secretaria de saúde estadual)*?'),
('q9_1', 'q9_1. Se sim, quantas pesquisas? Informe a quantidade ou marque uma das opções.'),
('q9', 'q9. A partir dos resultados da sua pesquisa, foi possível o início de outras pesquisas que também receberam financiamento*?'),
('q8_1', 'q8_1. Se sim, qual foi o valor recebido por outras fontes de financiamento (em reais – R$)?'),
('q8', 'q8. A pesquisa teve outras fontes de financiamento*?'),
('q7', 'q7. Valor recebido no edital para execução da pesquisa (em reais – R$): Informe o valor ou marque uma das opções.'),
('q6', 'q6. Data de término da pesquisa:'),
('q5', 'q5. Data de início da pesquisa:'),
('q2', 'q2. Qual a sua principal subárea de atuação?'),
('q3', 'q3. Nome do edital no qual a pesquisa foi contemplada*:'),
('q4', 'q4. Título da pesquisa*: '),
('q1', 'q1. Principal Grande Área de Atuação*:'),
('1', '1'),
('q28_8_1', 'q28_8_1. Se sim, informe os nomes materiais educativos/informativos para profissionais de saúde ou gestores de saúde ou marque uma das opções*.'),
('q28_9', 'q28_9. Materiais educativos/informativos para população em geral*?'),
('q28_9_1', 'q28_9_1. Se sim, informe os nomes dos materiais educativos/informativos para a população em geral ou marque uma das opções.'),
('q29', 'q29. Foi realizada consultoria para formuladores de política (gestores de saúde de qualquer nível de atenção) *? '),
('q29_1', 'q29_1. Se sim, liste as consultorias realizadas ou marque uma das opções*.'),
('q30', 'q30. A pesquisa foi citada em livros*? '),
('q31', 'q31. A pesquisa foi citada nas mídias (matéria jornalística, entrevistas, sites institucionais, artigos publicados em jornais) *? '),
('q32', 'q32. Foram realizadas palestras/apresentações/audiências públicas*?'),
('q32_1', 'q32_1. Se sim, liste as palestras/apresentações/audiências públicas ou marque uma das opções*:'),
('q33', 'q33. Foram realizadas apresentações sobre a pesquisa para o público em geral*?'),
('q33_1', 'q33_1. Se sim, liste as apresentações realizadas ou marque uma das opções*?'),
('q34', 'q34. Produtos foram patenteados*? '),
('q34_1', 'q34_1. Se sim, liste as patentes ou marque uma das opções*?'),
('q35', 'q35. Foram realizadas consultorias para indústrias*? '),
('q35_1', 'q35_1. Se sim, informe a quantidade ou marque uma das opções*?'),
('q36', 'q36. A pesquisa gerou impactos na saúde, ou seja, houve alguma influência sobre indicadores de saúde (mortalidade, incidência, prevalência), determinantes sociais e ambientais, atenção e vigilância em saúde, etc*?'),
('q36_1', 'q36_1. Se sim, assinale as opções nas quais a pesquisa gerou impactos (diretamente ou indiretamente)*:');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
