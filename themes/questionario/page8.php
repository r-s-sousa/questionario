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
   <input type="hidden" name="page" value="9">

   <div class="container bg-white rounded" style="margin-top: 70px;">
      <div class="row pt-3 pb-3">

         <div class="col-md-12 text-left">
            <h2 class="mb-4 text-center">BLOCO III – EQUIPE DA PESQUISA</h2>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     26. Publicou artigos completos, resumos expandidos ou resumo em anais de eventos científicos nacionais ou internacionais (congressos, simpósios, oficinas, seminários, etc)*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(26)" type="radio" name="q26" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(26)" type="radio" name="q26" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(26)" type="radio" name="q26" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(26)" type="radio" name="q26" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     26.1. Se sim, informe a quantidade ou marque uma das opções*.
                     <br>
                     <label class="ml-3"><input type="radio" name="q26.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q26.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="26.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     27. Apresentou trabalhos para divulgação dos resultados da pesquisa em eventos científicos (congressos, fóruns, simpósios, oficinas, seminários etc.)*:
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(27)" type="radio" name="q27" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(27)" type="radio" name="q27" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(27)" type="radio" name="q27" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(27)" type="radio" name="q27" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     27.1. Em quantos eventos científicos nacionais? Informe a quantidade ou marque uma das opções*.
                     <br>
                     <label class="ml-3"><input type="radio" name="q27.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q27.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="27.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     27.2. Em quantos eventos científicos internacionais? Informe a quantidade ou marque uma das opções*.
                     <br>
                     <label class="ml-3"><input type="radio" name="q27.2" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q27.2" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="27.2Outro"></label>
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