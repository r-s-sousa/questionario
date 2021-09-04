<?php $this->layout('_theme', ['title' => $title]); ?>

<!-- HEADER -->
<?php
$this->start('navbar');
$this->insert('main/partials/navbar');
$this->end();
?>
<!-- END_HEADER -->

<?= $this->start('styles'); ?>
<style>

</style>
<?= $this->end(); ?>

<div class="container bg-white rounded">
   <div class="row pt-3 pb-3">
      <div class="col-md-12 text-center">
         <h2 class="mb-4">Questionário</h2>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Prezado (a) pesquisador (a),
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Seja bem-vindo (a) ao questionário da pesquisa Avaliação do Impacto de Pesquisas sobre Doenças Tropicais Negligenciadas no Brasil.
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Esse questionário tem o objetivo de coletar dados para avaliar os impactos produzidos pelas pesquisas sobre dengue financiadas pelo Departamento de Ciência e Tecnologia no Ministério da Saúde (Decit/MS), em parceria com o Conselho Nacional de Desenvolvimento Científico e Tecnológico nos editais MCT/CNPq/MS-SCTIE-DECIT nº 025/2006 – Doenças Negligenciadas; MCT/CNPq/CTI-Saúde/MS/SCTIE/DECIT nº 034/2008 – Doenças Negligenciadas; e MCTI/CNPq/MS-SCTIE-Decit nº 40/2012 – Pesquisa em Doenças Negligenciadas.
         </p>

         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> O questionário é composto por seis blocos de perguntas, com questões relacionadas as informações gerais do (a) coordenador (a) e da pesquisa, publicações e produtos originados da pesquisa, formação de recursos humanos, divulgação da pesquisa, utilização dos resultados da pesquisa para tomada de decisão e impactos na saúde.
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Caso tenha alguma dúvida, pode entrar em contato com a pesquisadora responsável pelo e-mail gabrielabtm@gmail.com ou pelo telefone (61) 98361-3554 (inclusive para ligações a cobrar e mensagens de WhatsApp).
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> De antemão agradecemos por ter disponibilizado seu tempo e pela sua participação!
         </p>
      </div>
   </div>
</div>

<div class="container">
   <div class="row bg-secondary">
      <div class="col-12 mt-3 mb-3 text-center text-white">
         <a href="<?= $router->route('questionario.bloco', ['page' => '1']); ?>" class="btn btn-outline-light">Continuar</a>
      </div>
   </div>
</div>