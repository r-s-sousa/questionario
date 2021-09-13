<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page
]);

$this->insert('modelos/primaria', [
   'id' => '29',
   'pergunta' => '29. Foi realizada consultoria para formuladores de política (gestores de saúde de qualquer nível de atenção) *? ',
]);

$this->insert('modelos/secondaria', [
   'id' => '29_1',
   'pergunta' => '29.1. Se sim, liste as consultorias realizadas ou marque uma das opções*.',
   'classe' => 'Consultorias',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '30',
   'pergunta' => '30. A pesquisa foi citada em livros*? '
]);

$this->insert('modelos/primaria', [
   'id' => '31',
   'pergunta' => '31. A pesquisa foi citada nas mídias (matéria jornalística, entrevistas, sites institucionais, artigos publicados em jornais) *? '
]);

$this->insert('modelos/primaria', [
   'id' => '32',
   'pergunta' => '32. Foram realizadas apresentações ou palestras em eventos de uma forma geral ou para profissionais e gestores de saúde?'
]);

$this->insert('modelos/secondaria', [
   'id' => '32_1',
   'pergunta' => '32.1. Se sim, liste as apresentações ou palestras realizadas ou marque uma das opções:',
   'classe' => 'Apresentações ou palestras',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '33',
   'pergunta' => '33. Foram realizadas apresentações em audiências públicas?'
]);

$this->insert('modelos/secondaria', [
   'id' => '33_1',
   'pergunta' => '33.1. Se sim, liste as apresentações em audiências públicas ou marque uma das opções',
   'classe' => 'Apresentações em Audiências Públicas',
   'grande' => true,
   'respostas' => $respostas
]);
