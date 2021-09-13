<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page,
   'subtitulo' => "As perguntas desse são sobre a utilização dos resultados da sua pesquisa na tomada de decisão informada por evidências para a saúde, ou seja, a utilização dos resultados da pesquisa para elaboração de protocolos clínicos, manuais de saúde, políticas ou programas de saúde. "
]);

$this->insert('modelos/base', [
   'conteudo' => '
   <p class="card-text">
      <b>28. Os resultados da sua pesquisa ajudaram a formular, produzir ou foram citados em:</b>
   </p>
   '
]);

$this->insert('modelos/primaria', [
   'id' => '28_1',
   'pergunta' => '28.1. Protocolos Clínicos*? <i>Exemplo: Protocolo colaborativo - Manejo da dengue: suspeita clínica, diagnóstico e tratamento da Secretaria Municipal de Saúde de Belo Horizonte – MG</i>',
]);

$this->insert('modelos/secondaria', [
   'id' => '28_1_1',
   'pergunta' => '28.1.1. Se sim, informe os nomes dos protocolos ou marque uma das opções*.',
   'classe' => 'Nomes',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '28_2',
   'pergunta' => '28.2. Manuais de saúde*?  <i>Exemplo: Manual de Diagnóstico e Manejo Clínico da Dengue do Ministério da Saúde</i>',
]);

$this->insert('modelos/secondaria', [
   'id' => '28_2_1',
   'pergunta' => '28.2.1. Se sim, informe os nomes dos manuais ou marque uma das opções*.',
   'classe' => 'Nomes',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '28_3',
   'pergunta' => '28.3. Diretrizes em saúde*? <i>Exemplo: Diretrizes Nacionais para a Prevenção e Controle de Epidemias de Dengue</i>',
]);

$this->insert('modelos/secondaria', [
   'id' => '28_3_1',
   'pergunta' => '28.3.1. Se sim, informe as diretrizes em saúde ou marque uma das opções.',
   'classe' => 'Diretrizes em saúde',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '28_4',
   'pergunta' => '28.4. Guias de Atenção à Saúde ou Vigilância em Saúde*? <i>Exemplo: Guia de Vigilância em Saúde do Ministério da Saúde</i>',
]);

$this->insert('modelos/secondaria', [
   'id' => '28_4_1',
   'pergunta' => '28.4.1. Se sim, informe os nomes dos Guias de Atenção à Saúde ou marque uma das opções*.',
   'classe' => 'Nomes',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '28_5',
   'pergunta' => '28.5. Portarias*? <i>Exemplo: Portaria GM/MS nº 1.802, de 3 de agosto de 2021 – Institui a Rede de Vigilância Alerta e Respostas às Emergências em Saúde Pública do Sistema Único de Saúde (Rede VIGIAR-SUS) no âmbito do Sistema Nacional de Vigilância Epidemiológica</i>',
]);

$this->insert('modelos/secondaria', [
   'id' => '28_5_1',
   'pergunta' => '28.5.1. Se sim, informe os números e anos das Portarias ou marque uma das opções*.',
   'classe' => 'Número e Anos das Portarias',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '28_6',
   'pergunta' => '28.6. Programas de saúde*? <i>Exemplo: Programa Nacional de Controle da Dengue</i>',
]);

$this->insert('modelos/secondaria', [
   'id' => '28_6_1',
   'pergunta' => '28.6.1. Se sim, informe os nomes dos Programas de Saúde ou marque uma das opções*.',
   'classe' => 'Nomes',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '28_7',
   'pergunta' => '28.7. Políticas de saúde ou de outras áreas*? <i>Exemplo: Política Nacional de Vigilância em Saúde</i>',
]);

$this->insert('modelos/secondaria', [
   'id' => '28_7_1',
   'pergunta' => '28.7.1. Se sim, informe os nomes das Políticas ou marque uma das opções*.',
   'classe' => 'Políticas',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '28_8',
   'pergunta' => '28.8. Materiais educativos/informativos para profissionais de saúde ou gestores de saúde*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '28_8_1',
   'pergunta' => '28.8.1. Se sim, informe os nomes materiais educativos/informativos para profissionais de saúde ou gestores de saúde ou marque uma das opções*.',
   'classe' => 'Nomes',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '28_9',
   'pergunta' => '28.9. Materiais educativos/informativos para população em geral*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '28_9_1',
   'pergunta' => '28.9.1. Se sim, informe os nomes dos materiais educativos/informativos para a população em geral ou marque uma das opções.',
   'classe' => 'Quantidade',
   'grande' => true,
   'respostas' => $respostas
]);
