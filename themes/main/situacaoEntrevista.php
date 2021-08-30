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

<div class="container bg-white rounded" style="margin-top: 70px;">
   <div class="row pt-3 pb-3">
      <div class="col-md-12 text-center">
         <h2 class="mb-4">Deseja participar da entrevista ?</h2>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Prezado (a) Pesquisador (a), como informado no Termo de Consentimento Livre e Esclarecido, a pesquisa é composta por suas fases: a primeira por um questionário, no qual o (a). sr. (a) será direcionado na próxima página, e a segunda será uma entrevista virtual, com o objetivo de compreender suas perspectivas quanto aos impactos de suas pesquisas, disseminação dos resultados e sua aplicabilidade para o Sistema Único de Saúde.
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Caso aceite participar da entrevista, entraremos em contato via e-mail ou telefone para agendá-la, conforme melhor dia e horário disponível para o (a) Sr. (a). 
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Além disso, caso aceite o (a) Sr. (a) será direcionado para o Termo de Autorização de Imagem e Som de Voz para Fins de Pesquisa. 
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> O (A) sr. (a). teria interesse em participar da entrevista? 
         </p>
         
      </div>
   </div>
</div>

<div class="container">
   <div class="row">
      <div class="col-md-12 mt-3">
         <form action="<?= $router->route('web.recebeEscolhaEntrevista'); ?>" method="post">
            <input type="radio" name="opcaoEntrevista" id="op1" value="true">
            <label for="op1"><b>Sim</b></label>
            <br>
            <input type="radio" name="opcaoEntrevista" id="op2" value="false" checked>
            <label for="op2"><b>Não</b></label>
            <br>
            <div class="text-center m-4">
               <button type="submit" class="btn btn-info">Prosseguir</button>
            </div>
         </form>
      </div>
   </div>
</div>

<?php $this->start('scripts'); ?>

<script>
   $(document).ready(function() {
      document.getElementById('home').classList.add('active');
   });
</script>

<?php $this->stop(); ?>