<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page
]);

$this->insert('modelos/primaria', [
   'id' => '34',
   'pergunta' => '34. Produtos foram patenteados*? ',
]);

$this->insert('modelos/secondaria', [
   'id' => '34_1',
   'pergunta' => '34.1. Se sim, liste as patentes ou marque uma das opções*?',
   'classe' => 'Patentes',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '35',
   'pergunta' => '35. Foram realizadas consultorias para indústrias*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '35_1',
   'pergunta' => '35.1. Se sim, informe a quantidade ou marque uma das opções*?',
   'classe' => 'Quantidade',
   'grande' => true,
   'respostas' => $respostas
]);