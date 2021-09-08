<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title,
   'blocoId' => $blocoId,
   'page' => $page
]);

$this->insert('modelos/secondaria', [
   'id' => '9',
   'pergunta' => '9. Valor recebido no edital para execução da pesquisa (em reais – R$): Informe o valor ou marque uma das opções.',
   'classe' => 'Valor: R$',
   'mostrarSecondaria' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '10',
   'pergunta' => '10. A pesquisa teve outras fontes de financiamento*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '10_1',
   'pergunta' => '10.1. Se sim, qual foi o valor recebido por outras fontes de financiamento (em reais – R$)?',
   'classe' => 'Valor: R$',
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '11',
   'pergunta' => '11. A partir dos resultados da sua pesquisa, foi possível o início de outras pesquisas que também receberam financiamento*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '11_1',
   'pergunta' => '11.1. Se sim, quantas pesquisas? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Qtd',
   'respostas' => $respostas
]);

?>
