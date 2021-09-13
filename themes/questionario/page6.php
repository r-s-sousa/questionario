<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title,
   'blocoId' => $blocoId,
   'page' => $page,
   'subtitulo' => "As perguntas desse bloco são relacionadas às pessoas que integravam a equipe responsável pela execução da pesquisa, parcerias institucionais estabelecidas e formação de recursos humanos."
]);

$this->insert('modelos/secondaria', [
   'id' => '15',
   'pergunta' => '15. Quantos pessoas faziam parte da equipe de pesquisa*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade',
   'mostrarSecondaria' => true,
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '16',
   'pergunta' => '16. Na sua equipe tinham pesquisadores visitantes*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '16_1',
   'pergunta' => '16.1. Se sim, informe a quantidade de pesquisadores visitantes ou marque uma das opções',
   'classe' => 'Quantidade',
   'respostas' => $respostas
]);

$this->insert('modelos/secondaria', [
   'id' => '16_2',
   'pergunta' => '16.2. De quais instituições eram esses pesquisadores? Liste as instituições ou marque uma das opções.',
   'classe' => 'Instituições',
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '17',
   'pergunta' => '19. Na sua equipe tinham pesquisadores bolsistas de produtividade*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '17_1',
   'pergunta' => '17.1. Se sim, informe a quantidade de bolsistas de produtividade ou marque uma das opções:',
   'classe' => 'Quantidade',
   'respostas' => $respostas
]);

$this->insert('modelos/primaria', [
   'id' => '18',
   'pergunta' => '18. Na sua equipe tinham pesquisadores de pós-doutorado*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '18_1',
   'pergunta' => '18.1. Se sim, informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade',
   'respostas' => $respostas
]);
