<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title,
   'blocoId' => $blocoId,
   'page' => $page,
   'subtitulo' => "As perguntas desse bloco são relacionadas às pessoas que integravam a equipe responsável pela execução da pesquisa, parcerias institucionais estabelecidas e formação de recursos humanos."
]);

$this->insert('modelos/secondaria', [
   'id' => '17',
   'pergunta' => '17. Quantos pessoas faziam parte da equipe de pesquisa*? Informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/primaria', [
   'id' => '18',
   'pergunta' => '18. Na sua equipe tinham pesquisadores visitantes*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '18.1',
   'pergunta' => '18.1. Se sim, informe a quantidade de pesquisadores visitantes ou marque uma',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/secondaria', [
   'id' => '18.2',
   'pergunta' => '18.2. Se sim, informe a quantidade de pesquisadores visitantes ou marque uma',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/primaria', [
   'id' => '19',
   'pergunta' => '19. Na sua equipe tinham pesquisadores bolsistas de produtividade*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '19.1',
   'pergunta' => '19.1. Se sim, informe a quantidade de pesquisadores visitantes ou marque uma',
   'classe' => 'Quantidade'
]);

$this->insert('modelos/primaria', [
   'id' => '20',
   'pergunta' => '20. Na sua equipe tinham pesquisadores de pós-doutorado*?'
]);

$this->insert('modelos/secondaria', [
   'id' => '20.1',
   'pergunta' => '20.1. Se sim, informe a quantidade ou marque uma das opções.',
   'classe' => 'Quantidade'
]);
