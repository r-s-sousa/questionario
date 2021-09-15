<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title,
   'blocoId' => $blocoId,
   'page' => $page
]);

$this->insert('modelos/secondaria', [
   'id' => '7',
   'pergunta' => '7. Valor recebido no edital para execução da pesquisa (em reais – R$): Informe o valor ou marque uma das opções.',
   'classe' => 'Valor: R$',
   'mostrarSecondaria' => true,
   'tipo' => 'float',
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '8',
   'pergunta' => '8. A pesquisa teve outras fontes de financiamento*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '8_1',
   'pergunta' => '8.1. Se sim, qual foi o valor recebido por outras fontes de financiamento (em reais – R$)?',
   'classe' => 'Valor: R$',
   'tipo' => 'float',
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '9',
   'pergunta' => '9. A partir dos resultados da sua pesquisa, foi possível o início de outras pesquisas que também receberam financiamento*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '9_1',
   'pergunta' => '9.1. Se sim, quantas pesquisas? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Qtd',
   'tipo' => 'inteiro',
   'respostas' => $respostas
]);
