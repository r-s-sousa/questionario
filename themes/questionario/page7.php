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
   <input type="hidden" name="blocoId" value="3">
   <input type="hidden" name="page" value="8">

   <div class="container bg-white rounded" style="margin-top: 70px;">
      <div class="row pt-3 pb-3">
         <div class="col-md-12 text-left">
         <h2 class="mb-4 text-center">BLOCO III – EQUIPE DA PESQUISA</h2>
         </div>
         <!-- PÁGINA 7 -->

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     21. Participaram estudantes de iniciação científica*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(21)" type="radio" name="q21" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(21)" type="radio" name="q21" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(21)" type="radio" name="q21" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(21)" type="radio" name="q21" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     21.1. Quantos estudantes de iniciação científica participaram*? Informe a quantidade ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input type="radio" name="q21.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q21.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="21.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     21.2. Quantos relatórios de iniciação científica foram produzidos*? Informe a quantidade ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input type="radio" name="q21.2" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q21.2" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="21.2Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     22. Participaram estudantes de graduação para a realização de Trabalho de Conclusão de Curso (TCC)*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(22)" type="radio" name="q22" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(22)" type="radio" name="q22" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(22)" type="radio" name="q22" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(22)" type="radio" name="q22" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     22.1. Quantos estudantes de graduação participaram*? Informe a quantidade ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input type="radio" name="q22.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q22.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="22.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     22.2. Quantos Trabalhos de Conclusão de Curso foram produzidos*? Informe a quantidade ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input type="radio" name="q22.2" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q22.2" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="22.2Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     23. Participaram estudantes de especialização Lato Sensu *?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(23)" type="radio" name="q23" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(23)" type="radio" name="q23" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(23)" type="radio" name="q23" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(23)" type="radio" name="q23" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     23.1. Quantos estudantes de especialização Lato Sensu participaram*? Informe a quantidade ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input type="radio" name="q23.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q23.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="23.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     23.2. Quantos Trabalhos de Conclusão de Curso foram produzidos*? Informe a quantidade, ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input type="radio" name="q23.2" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q23.2" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="23.2Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     24. Participaram estudantes de mestrado*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(24)" type="radio" name="q24" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(24)" type="radio" name="q24" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(24)" type="radio" name="q24" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(24)" type="radio" name="q24" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     24.1. Quantos estudantes de mestrado participaram*? Informe a quantidade ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input type="radio" name="q24.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q24.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="24.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     24.2. Quantas dissertações foram produzidas*? Informe a quantidade ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input type="radio" name="q24.2" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q24.2" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="24.2Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     25. Participaram estudantes de mestrado*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(25)" type="radio" name="q25" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(25)" type="radio" name="q25" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(25)" type="radio" name="q25" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(25)" type="radio" name="q25" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     25.1. Quantos estudantes de doutorado participaram*? Informe a quantidade ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input type="radio" name="q25.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q25.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="25.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     25.2. Quantas teses foram apresentadas*? Informe a quantidade ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input type="radio" name="q25.2" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q25.2" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="25.2Outro"></label>
                  </p>
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