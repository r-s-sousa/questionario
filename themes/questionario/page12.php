<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page
]);

$this->insert('modelos/primaria', [
   'id' => '36',
   'pergunta' => '36. Produtos foram patenteados*? ',
]);

$this->insert('modelos/secondaria', [
   'id' => '36_1',
   'pergunta' => '36.1. Se sim, liste as patentes ou marque uma das opções*?',
   'classe' => 'Patentes',
   'grande' => true
]);

$this->insert('modelos/primaria', [
   'id' => '37',
   'pergunta' => '37. Foram realizadas consultorias para indústrias*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '37_1',
   'pergunta' => '37.1. Se sim, informe a quantidade ou marque uma das opções*?',
   'classe' => 'Quantidade',
   'grande' => true
]);