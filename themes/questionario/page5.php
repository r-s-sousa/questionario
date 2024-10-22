<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page, 
   'subtitulo' => 'As perguntas desse bloco são a respeito dos produtos/resultados gerados a partir dos resultados da pesquisa.'
]);

$this->insert('modelos/primaria', [
   'id' => '12',
   'pergunta' => '12. Publicou artigos científicos em periódicos nacionais ou internacionais*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '12_1',
   'pergunta' => '12.1. Se sim, informe os títulos dos artigos ou marque uma das opções*:',
   'classe' => 'Titulos',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '13',
   'pergunta' => '13. Publicou livros*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '13_1',
   'pergunta' => '13.1. Se sim, informe os títulos dos livros ou marque uma das opções*.',
   'classe' => 'Livros',
   'grande' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '14',
   'pergunta' => '14. Publicou capítulos de livros*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '14_1',
   'pergunta' => '14.1. Se sim, informe os títulos dos capítulos dos livros ou marque uma das opções*.',
   'classe' => 'Titulos',
   'grande' => true,
   'respostas' => $respostas
]);
