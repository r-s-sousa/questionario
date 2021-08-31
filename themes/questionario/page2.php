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

<form action="<?= $router->route('questionario.salvar'); ?>" method="post">
   <input type="hidden" name="blocoId" value="1">
   <input type="hidden" name="page" value="3">

   <div class="container bg-white rounded" style="margin-top: 70px;">
      <div class="row pt-3 pb-3">
         <div class="col-md-12 text-left">
            <h2 class="mb-4 text-center">BLOCO I – INFORMAÇÕES GERAIS </h2>
         </div>

         <div class="col-md-12">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     5. Nome do edital no qual a pesquisa foi contemplada*:
                     <br>
                     <label class="mt-2 ml-3"><input type="radio" name="q5" value="Edital MCT/CNPq/MS-SCTIE-DECIT nº 025/2006 – Doenças Negligenciadas."> Edital MCT/CNPq/MS-SCTIE-DECIT nº 025/2006 – Doenças Negligenciadas.</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q5" value="Edital MCT/CNPq/CTI-Saúde/MS/SCTIE/DECIT nº 034/2008 – Doenças Negligenciadas."> Edital MCT/CNPq/CTI-Saúde/MS/SCTIE/DECIT nº 034/2008 – Doenças Negligenciadas. </label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q5" value="Chamada MCTI/CNPq/MS-SCTIE-Decit nº 40/2012 – Pesquisa em Doenças Negligenciadas"> Chamada MCTI/CNPq/MS-SCTIE-Decit nº 40/2012 – Pesquisa em Doenças Negligenciadas</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body bg-white">
                  <p class="card-text">
                     6. Título da pesquisa*: <input class="form-control-sm" type="text" name="q6">
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body bg-white">
                  <p class="card-text">
                     7. Data de início da pesquisa: <input class="form-control-sm" type="date" name="q7">
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body bg-white">
                  <p class="card-text">
                     8. Data de término da pesquisa: <input class="form-control-sm" type="date" name="q8">
                  </p>
               </div>
            </div>
         </div>

      </div>
   </div>

   <div class="container">
      <div class="row">
         <div class="col-12 mt-3 mb-3 text-center">
            <button type="submit" class="btn btn-outline-success">Próxima página</button>
         </div>
      </div>
   </div>
</form>