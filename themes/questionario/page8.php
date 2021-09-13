<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page,
   'subtitulo' => "As perguntas desse bloco são a respeito da sua participação ou de outros membros da equipe em eventos científicos (congressos, fóruns, simpósios, oficinas, seminários etc.) para divulgação dos resultados da sua pesquisa."
]);

$this->insert('modelos/primaria', [
   'id' => '24',
   'pergunta' => '24. Publicou artigos completos, resumos expandidos ou resumo em anais de eventos científicos nacionais ou internacionais (congressos, simpósios, oficinas, seminários, etc)*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '24_1',
   'pergunta' => '24.1. Se sim, informe a quantidade ou marque uma das opções*.',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/primaria', [
   'id' => '25',
   'pergunta' => '25. Apresentou trabalhos para divulgação dos resultados da pesquisa em eventos científicos (congressos, fóruns, simpósios, oficinas, seminários etc.)*:'
]);

$this->insert('modelos/secondaria', [
   'id' => '25_1',
   'pergunta' => '25.1. Em quantos eventos científicos nacionais? Informe a quantidade ou marque uma das opções*.',
   'classe' => 'Quantidade',
   'respostas' => $respostas
]);

$this->insert('modelos/secondaria', [
   'id' => '25_2',
   'pergunta' => '25.2. Em quantos eventos científicos internacionais? Informe a quantidade ou marque uma das opções*.',
   'classe' => 'Quantidade',
   'respostas' => $respostas
]);
