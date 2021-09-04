<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page, 
   'subtitulo' => 'As perguntas desse bloco são a respeito dos produtos/resultados gerados a partir dos resultados da pesquisa.'
]);

$this->insert('modelos/primaria', [
   'id' => '14',
   'pergunta' => '14. Publicou artigos científicos em periódicos nacionais ou internacionais*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '14_1',
   'pergunta' => '14.1. Se sim, informe os títulos dos artigos ou marque uma das opções*:',
   'classe' => 'Titulos',
   'grande' => true
]);

$this->insert('modelos/primaria', [
   'id' => '15',
   'pergunta' => '15. Publicou livros*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '15_1',
   'pergunta' => '15.1. Se sim, informe os títulos dos livros ou marque uma das opções*.',
   'classe' => 'Livros',
   'grande' => true
]);

$this->insert('modelos/primaria', [
   'id' => '16',
   'pergunta' => '16. Publicou capítulos de livros*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '16_1',
   'pergunta' => '16.1. Se sim, informe os títulos dos capítulos dos livros ou marque uma das opções*.',
   'classe' => 'Titulos',
   'grande' => true
]);
