<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page
]);

$this->insert('modelos/primaria', [
   'id' => '26',
   'pergunta' => '26. Apresentou os resultados da pesquisa profissionais de saúde*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '26_1',
   'pergunta' => '26.1. Se sim, informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade',
   'tipo' => 'inteiro',
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '27',
   'pergunta' => '27. Apresentou os resultados da pesquisa para formuladores de políticas e tomadores de decisão em saúde*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '27_1',
   'pergunta' => '27.1. Se sim, informe a quantidade, ou marque uma das opções:',
   'classe' => 'Quantidade',
   'tipo' => 'inteiro',
   'respostas' => $respostas
]);
