<?php $this->layout('_theme', ['title' => $title]); ?>

<!-- HEADER -->
<?php
$this->start('navbar');
$this->insert('main/partials/navbar');
$this->end();
?>
<!-- END_HEADER -->

<div class="container bg-white rounded-top">
   <div class="row pt-3 pb-3">
      <div class="col-md-12 text-center">
         <h2 class="mb-4">Deseja participar da entrevista ?</h2>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Prezado (a) Pesquisador (a), como informado no Termo de Consentimento Livre e Esclarecido, a pesquisa é composta por duas fases: a primeira por um questionário e a segunda uma entrevista virtual.
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> O questionário virtual estará disponível para resposta nas próximas páginas.
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Com relação à entrevista, terá duração de aproximadamente 30 minutos pelo aplicativo Microsoft Teams. Nela conversaremos sobre os impactos da sua pesquisa, a disseminação dos resultados e sua aplicabilidade para o Sistema Único de Saúde.
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Caso o (a) Sr. (a) aceite participar da entrevista, entraremos em contato por e-mail ou telefone, para agendá-la de acordo com o melhor dia e horário disponível na sua agenda. O (A) Sr. (a) também será direcionado na próxima página para o Termo de Autorização de Imagem e Som de Voz para Fins de Pesquisa.
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> <b>O (A) Sr. (a) teria interesse em participar da entrevista virtual? </b>
         </p>
      </div>
   </div>
</div>

<div class="container">
   <div class="row rounded-bottom" style="background-color: #cccccc;">
      <div class="col-md-12 mt-3">
         <form action="<?= $router->route('web.recebeEscolhaEntrevista'); ?>" method="post">
            <input type="radio" name="opcaoEntrevista" id="op1" value="true" <?= $entrevista ? "checked" : "" ?>>
            <label for="op1"><b>Sim</b></label>
            <br>
            <input type="radio" name="opcaoEntrevista" id="op2" value="false" <?= $entrevista ? "" : "checked" ?>>
            <label for="op2"><b>Não</b></label>
            <br>
            <div class="text-center m-4">
               <button type="submit" class="btn btn-info">Prosseguir</button>
            </div>
         </form>
      </div>
   </div>
</div>