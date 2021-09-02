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
   <input type="hidden" name="blocoId" value="4">
   <input type="hidden" name="page" value="10">

   <div class="container bg-white rounded" style="margin-top: 70px;">
      <div class="row pt-3 pb-3">
         <div class="col-md-12 text-left">
            <h2 class="mb-4 text-center">BLOCO IV – DIVULGAÇÃO DA PESQUISA</h2>
            <h6>As perguntas desse bloco são a respeito da sua participação ou de outros membros da equipe em eventos científicos (congressos, fóruns, simpósios, oficinas, seminários etc.) para divulgação dos resultados da sua pesquisa.</h6>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     28. Apresentou os resultados da pesquisa profissionais de saúde*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(28)" type="radio" name="q28" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(28)" type="radio" name="q28" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(28)" type="radio" name="q28" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(28)" type="radio" name="q28" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     28.1. Se sim, informe a quantidade ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input type="radio" name="q28.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q28.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="28.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     29. Apresentou os resultados da pesquisa para formuladores de políticas e tomadores de decisão em saúde*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(29)" type="radio" name="q29" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(29)" type="radio" name="q29" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(29)" type="radio" name="q29" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(29)" type="radio" name="q29" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     29.1. Se sim, informe a quantidade, ou marque uma das opções:
                     <br>
                     <label class="ml-3"><input type="radio" name="q29.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q29.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="29.1Outro"></label>
                  </p>
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
      </div>
   </div>
</form>