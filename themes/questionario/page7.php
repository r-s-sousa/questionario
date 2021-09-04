<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page
]);

$this->insert('modelos/primaria', [
   'id' => '21',
   'pergunta' => '21. Participaram estudantes de iniciação científica*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '21.1',
   'pergunta' => '21.1. Quantos estudantes de iniciação científica participaram*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/secondaria', [
   'id' => '21.2',
   'pergunta' => '21.2. Quantos relatórios de iniciação científica foram produzidos*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/primaria', [
   'id' => '22',
   'pergunta' => '22. Participaram estudantes de graduação para a realização de Trabalho de Conclusão de Curso (TCC)*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '22.1',
   'pergunta' => '22.1. Quantos estudantes de graduação participaram*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/secondaria', [
   'id' => '22.1',
   'pergunta' => '22.2. Quantos Trabalhos de Conclusão de Curso foram produzidos*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/primaria', [
   'id' => '23',
   'pergunta' => '23. Participaram estudantes de especialização Lato Sensu *?'
]);

$this->insert('modelos/secondaria', [
   'id' => '23.1',
   'pergunta' => '23.1. Quantos estudantes de especialização Lato Sensu participaram*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/secondaria', [
   'id' => '23.2',
   'pergunta' => '23.2. Quantos Trabalhos de Conclusão de Curso foram produzidos*? Informe a quantidade, ou marque uma das opções.',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/primaria', [
   'id' => '24',
   'pergunta' => '24. Participaram estudantes de mestrado*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '24.1',
   'pergunta' => '24.1. Quantos estudantes de mestrado participaram*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/secondaria', [
   'id' => '24.2',
   'pergunta' => '24.2. Quantas dissertações foram produzidas*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/primaria', [
   'id' => '25',
   'pergunta' => '25. Participaram estudantes de mestrado*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '25.1',
   'pergunta' => '25.1. Quantos estudantes de doutorado participaram*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/secondaria', [
   'id' => '25.2',
   'pergunta' => '25.2. Quantas teses foram apresentadas*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade'
]);
