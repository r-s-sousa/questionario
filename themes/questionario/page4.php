<?php $this->layout('modelos/layoutPergunta', ['title' => $title]);

// PÁGINA 3
$this->insert('modelos/primaria', [
   'id' => '12',
   'pergunta' => '12. Para execução da pesquisa, foram estabelecidas parcerias com outras instituições (qualquer tipo de instituição: ex. outras universidades, secretaria de saúde municipal, secretaria de saúde estadual)*?',
]);

$this->insert('modelos/secondaria', [
   'id' => '12.1',
   'pergunta' => '12.1. Se sim, liste as instituições parceiras ou marque uma das opções.',
   'classe' => 'Instituições'
]);

$this->insert('modelos/base', [
   'conteudo' => '
   13. De acordo com as definições abaixo, como você classifica sua pesquisa*?
   <br>
   <label class="mt-2 ml-3"><input type="radio" name="q13" value="Pesquisa Biomédica – investigam mecanismos de saúde e doença. Buscam produzir conhecimento sobre desenvolvimento de métodos diagnóstico, tratamento, métodos de prevenção de agravos e doenças, com o objetivo de melhorar a qualidade de vida dos indivíduos."> Pesquisa Biomédica – investigam mecanismos de saúde e doença. Buscam produzir conhecimento sobre desenvolvimento de métodos diagnóstico, tratamento, métodos de prevenção de agravos e doenças, com o objetivo de melhorar a qualidade de vida dos indivíduos.</label>
   <br>
   <label class="ml-3"><input type="radio" name="q13" value="Pesquisa clínica – envolvem pacientes humanos com o objetivo de melhorar o diagnóstico e tratamento de doenças ou agravos."> Pesquisa clínica – envolvem pacientes humanos com o objetivo de melhorar o diagnóstico e tratamento de doenças ou agravos."</label>
   <br>
   <label class="ml-3"><input type="radio" name="q13" value="Pesquisa sobre serviços de saúde – tem como objetivo avaliar os sistema ou serviços de saúde em relação à organização, financiamento, acesso e custos da atenção à saúde."> Pesquisa sobre serviços de saúde – tem como objetivo avaliar os sistema ou serviços de saúde em relação à organização, financiamento, acesso e custos da atenção à saúde.</label>
   <br>
   <label class="ml-3"><input type="radio" name="q13" value="Pesquisa sobre população e saúde pública – investigam os determinantes de saúde de uma determinada população, com o intuito de propiciar melhoria da qualidade da saúde."> Pesquisa sobre população e saúde pública – investigam os determinantes de saúde de uma determinada população, com o intuito de propiciar melhoria da qualidade da saúde.</label>
   '
]);

?>