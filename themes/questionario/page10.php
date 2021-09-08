<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page,
   'subtitulo' => "As perguntas desse são sobre a utilização dos resultados da sua pesquisa na tomada de decisão informada por evidências para a saúde, ou seja, a utilização dos resultados da pesquisa para elaboração de protocolos clínicos, manuais de saúde, políticas ou programas de saúde. "
]);

$this->insert('modelos/base', [
   'conteudo' => '
   <p class="card-text">
      <b>30. Os resultados da sua pesquisa ajudaram a formular, produzir ou foram citados em:</b>
   </p>
   '
]);

$this->insert('modelos/primaria', [
   'id' => '30_1',
   'pergunta' => '30.1. Protocolos Clínicos*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '30_1_1',
   'pergunta' => '30.1.1. Se sim, informe os nomes dos protocolos ou marque uma das opções*.',
   'classe' => 'Nomes',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '30_2',
   'pergunta' => '30.2. Manuais de saúde*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '30_2_1',
   'pergunta' => '30.2.1. Se sim, informe os nomes dos manuais ou marque uma das opções*.',
   'classe' => 'Nomes',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '30_3',
   'pergunta' => '30.3. Diretrizes em saúde*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '30_3_1',
   'pergunta' => '30.3.1. Se sim, informe os nomes dos manuais ou marque uma das opções.',
   'classe' => 'Nomes',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '30_4',
   'pergunta' => '30.4. Guias de Atenção à Saúde*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '30_4_1',
   'pergunta' => '30.4.1. Se sim, informe os nomes dos Guias de Atenção à Saúde ou marque uma das opções*.',
   'classe' => 'Nomes',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '30_5',
   'pergunta' => '30.5. Portarias*? ',
]);

$this->insert('modelos/secondaria', [
   'id' => '30_5_1',
   'pergunta' => '30.5.1. Se sim, informe os números e anos das Portarias ou marque uma das opções*.',
   'classe' => 'Número e Anos das Portarias',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '30_6',
   'pergunta' => '30.6. Programas de saúde*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '30_6_1',
   'pergunta' => '30.6.1. Se sim, informe os nomes dos Programas de Saúde ou marque uma das opções*.',
   'classe' => 'Nomes',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '30_7',
   'pergunta' => '30.7. Políticas de saúde ou de outras áreas*: ',
]);

$this->insert('modelos/secondaria', [
   'id' => '30_7_1',
   'pergunta' => '30.7.1. Se sim, informe os nomes das Políticas de Saúde ou marque uma das opções*.',
   'classe' => 'Nomes',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '30_8',
   'pergunta' => '30.8. Materiais educativos/informativos para profissionais de saúde ou gestores de saúde*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '30_8_1',
   'pergunta' => '30.8.1. Se sim, informe os nomes materiais educativos/informativos para profissionais de saúde ou gestores de saúde ou marque uma das opções*.',
   'classe' => 'Nomes',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '30_9',
   'pergunta' => '30.9. Materiais educativos/informativos para população em geral*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '30_9_1',
   'pergunta' => '30.9.1. Se sim, informe os nomes dos materiais educativos/informativos para a população em geral ou marque uma das opções.',
   'classe' => 'Quantidade',
   'grande' => true,
   'respostas' => $respostas
]);
