<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page
]);

$this->insert('modelos/primaria', [
   'id' => '31',
   'pergunta' => '31. Foi realizada consultoria para formuladores de política (gestores de saúde de qualquer nível de atenção) *? ',
]);

$this->insert('modelos/secondaria', [
   'id' => '31_1',
   'pergunta' => '31.1. Se sim, liste as consultorias realizadas ou marque uma das opções*.',
   'classe' => 'Consultorias',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '32',
   'pergunta' => '32. A pesquisa foi citada em livros*? '
]);

$this->insert('modelos/primaria', [
   'id' => '33',
   'pergunta' => '33. A pesquisa foi citada nas mídias (matéria jornalística, entrevistas, sites institucionais, artigos publicados em jornais) *? '
]);

$this->insert('modelos/primaria', [
   'id' => '34',
   'pergunta' => '34. Foram realizadas apresentações ou palestras em eventos de uma forma geral ou para profissionais e gestores de saúde?'
]);

$this->insert('modelos/secondaria', [
   'id' => '34_1',
   'pergunta' => '34.1. Se sim, liste as apresentações ou palestras realizadas ou marque uma das opções:',
   'classe' => 'Apresentações ou palestras',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '35',
   'pergunta' => '35. Foram realizadas apresentações em audiências públicas?'
]);

$this->insert('modelos/secondaria', [
   'id' => '35_1',
   'pergunta' => '35.1. Se sim, liste as apresentações em audiências públicas ou marque uma das opções',
   'classe' => 'Apresentações em Audiências Públicas',
   'grande' => true,
   'respostas' => $respostas
]);
