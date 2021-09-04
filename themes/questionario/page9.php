<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page
]);

$this->insert('modelos/primaria', [
   'id' => '28',
   'pergunta' => '28. Apresentou os resultados da pesquisa profissionais de saúde*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '28_1',
   'pergunta' => '28.1. Se sim, informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/primaria', [
   'id' => '29',
   'pergunta' => '29. Apresentou os resultados da pesquisa para formuladores de políticas e tomadores de decisão em saúde*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '29_1',
   'pergunta' => '29.1. Se sim, informe a quantidade, ou marque uma das opções:',
   'classe' => 'Quantidade'
]);
