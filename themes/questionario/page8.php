<?php $this->layout('modelos/layoutPergunta', ['title' => $title, 'blocoId' => $blocoId, 'page' => $page]);

$this->insert('modelos/primaria', [
   'id' => '26',
   'pergunta' => '26. Publicou artigos completos, resumos expandidos ou resumo em anais de eventos científicos nacionais ou internacionais (congressos, simpósios, oficinas, seminários, etc)*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '26.1',
   'pergunta' => '26.1. Se sim, informe a quantidade ou marque uma das opções*.',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/primaria', [
   'id' => '27',
   'pergunta' => '27. Apresentou trabalhos para divulgação dos resultados da pesquisa em eventos científicos (congressos, fóruns, simpósios, oficinas, seminários etc.)*:'
]);

$this->insert('modelos/secondaria', [
   'id' => '27.1',
   'pergunta' => '27.1. Em quantos eventos científicos nacionais? Informe a quantidade ou marque uma das opções*.',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/secondaria', [
   'id' => '27.2',
   'pergunta' => '27.2. Em quantos eventos científicos internacionais? Informe a quantidade ou marque uma das opções*.',
   'classe' => 'Quantidade'
]);
