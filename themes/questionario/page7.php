<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page
]);

$this->insert('modelos/primaria', [
   'id' => '19',
   'pergunta' => '19. Participaram estudantes de iniciação científica*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '19_1',
   'pergunta' => '19.1. Quantos estudantes de iniciação científica participaram*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade',
   'tipo' => 'inteiro',
   'respostas' => $respostas
]);

$this->insert('modelos/secondaria', [
   'id' => '19_2',
   'pergunta' => '19.2. Quantos relatórios de iniciação científica foram produzidos*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade',
   'tipo' => 'inteiro',
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '20',
   'pergunta' => '20. Participaram estudantes de graduação para a realização de Trabalho de Conclusão de Curso (TCC)*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '20_1',
   'pergunta' => '20.1. Quantos estudantes de graduação participaram*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade',
   'tipo' => 'inteiro',
   'respostas' => $respostas
]);

$this->insert('modelos/secondaria', [
   'id' => '20_2',
   'pergunta' => '20.2. Quantos Trabalhos de Conclusão de Curso foram produzidos*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade',
   'tipo' => 'inteiro',
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '21',
   'pergunta' => '21. Participaram estudantes de especialização Lato Sensu *?'
]);

$this->insert('modelos/secondaria', [
   'id' => '21_1',
   'pergunta' => '21.1. Quantos estudantes de especialização Lato Sensu participaram*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade',
   'tipo' => 'inteiro',
   'respostas' => $respostas
]);

$this->insert('modelos/secondaria', [
   'id' => '21_2',
   'pergunta' => '21.2. Quantos Trabalhos de Conclusão de Curso foram produzidos*? Informe a quantidade, ou marque uma das opções.',
   'classe' => 'Quantidade',
   'tipo' => 'inteiro',
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '22',
   'pergunta' => '22. Participaram estudantes de mestrado*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '22_1',
   'pergunta' => '22.1. Quantos estudantes de mestrado participaram*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade',
   'tipo' => 'inteiro',
   'respostas' => $respostas
]);

$this->insert('modelos/secondaria', [
   'id' => '22_2',
   'pergunta' => '22.2. Quantas dissertações foram produzidas*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade',
   'tipo' => 'inteiro',
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '23',
   'pergunta' => '23. Participaram estudantes de doutorado*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '23_1',
   'pergunta' => '23.1. Quantos estudantes de doutorado participaram*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade',
   'tipo' => 'inteiro',
   'respostas' => $respostas
]);

$this->insert('modelos/secondaria', [
   'id' => '23_2',
   'pergunta' => '23.2. Quantas teses foram produzidas*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade',
   'tipo' => 'inteiro',
   'respostas' => $respostas
]);
