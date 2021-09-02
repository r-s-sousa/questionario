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
   <input type="hidden" name="blocoId" value="5">
   <input type="hidden" name="page" value="11">

   <div class="container bg-white rounded" style="margin-top: 70px;">
      <div class="row pt-3 pb-3">
         <div class="col-md-12 text-left">
            <h2 class="mb-4 text-center">BLOCO IV – DIVULGAÇÃO DA PESQUISA</h2>
            <h6>As perguntas desse são sobre a utilização dos resultados da sua pesquisa na tomada de decisão informada por evidências para a saúde, ou seja, a utilização dos resultados da pesquisa para elaboração de protocolos clínicos, manuais de saúde, políticas ou programas de saúde.</h6>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30. Os resultados da sua pesquisa ajudaram a formular, produzir ou foram citados em:
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(30)" type="radio" name="q30" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30)" type="radio" name="q30" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30)" type="radio" name="q30" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30)" type="radio" name="q30" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.1. Protocolos Clínicos*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(30.1)" type="radio" name="q30.1" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.1)" type="radio" name="q30.1" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.1)" type="radio" name="q30.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.1)" type="radio" name="q30.1" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.1.1. Se sim, informe os nomes dos protocolos ou marque uma das opções*.
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.1.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.1.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Nomes: <input type="text" class="form-control-sm" name="28.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.2. Manuais de saúde*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(30.2)" type="radio" name="q30.2" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.2)" type="radio" name="q30.2" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.2)" type="radio" name="q30.2" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.2)" type="radio" name="q30.2" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.2.1. Se sim, informe os nomes dos manuais ou marque uma das opções*.
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.2.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.2.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Nomes: <input type="text" class="form-control-sm" name="30.2.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>


         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.3. Diretrizes em saúde*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(30.3)" type="radio" name="q30.3" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.3)" type="radio" name="q30.3" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.3)" type="radio" name="q30.3" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.3)" type="radio" name="q30.3" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.3.1. Se sim, informe os nomes dos manuais ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.3.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.3.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Nomes: <input type="text" class="form-control-sm" name="30.3.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.4. Guias de Atenção à Saúde*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(30.4)" type="radio" name="q30.4" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.4)" type="radio" name="q30.4" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.4)" type="radio" name="q30.4" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.4)" type="radio" name="q30.4" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.4.1. Se sim, informe os nomes dos Guias de Atenção à Saúde ou marque uma das opções*.
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.4.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.4.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Nomes: <input type="text" class="form-control-sm" name="30.4.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.5. Portarias*? 
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(30.5)" type="radio" name="q30.5" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.5)" type="radio" name="q30.5" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.5)" type="radio" name="q30.5" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.5)" type="radio" name="q30.5" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.5.1. Se sim, informe os números e anos das Portarias ou marque uma das opções*. Informe a quantidade ou marque uma das opções:
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.5.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.5.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Nomes: <input type="text" class="form-control-sm" name="30.5.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.6. Programas de saúde*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(30.6)" type="radio" name="q30.6" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.6)" type="radio" name="q30.6" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.6)" type="radio" name="q30.6" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.6)" type="radio" name="q30.6" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.6.1. Se sim, informe os nomes dos Programas de Saúde ou marque uma das opções*.
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.6.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.6.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Nomes: <input type="text" class="form-control-sm" name="30.6.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.7. Políticas de saúde ou de outras áreas*: 
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(30.7)" type="radio" name="q30.7" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.7)" type="radio" name="q30.7" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.7)" type="radio" name="q30.7" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.7)" type="radio" name="q30.7" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.7.1. Se sim, informe os nomes das Políticas de Saúde ou marque uma das opções*.
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.7.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.7.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Nomes: <input type="text" class="form-control-sm" name="30.7.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.8. Materiais educativos/informativos para profissionais de saúde ou gestores de saúde*? 
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(30.8)" type="radio" name="q30.8" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.8)" type="radio" name="q30.8" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.8)" type="radio" name="q30.8" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.8)" type="radio" name="q30.8" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.8.1. Se sim, informe os nomes materiais educativos/informativos para profissionais de saúde ou gestores de saúde ou marque uma das opções*.
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.8.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.8.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Nomes: <input type="text" class="form-control-sm" name="30.8.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.9. Materiais educativos/informativos para população em geral*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(30.9)" type="radio" name="q30.9" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.9)" type="radio" name="q30.9" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.9)" type="radio" name="q30.9" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(30.9)" type="radio" name="q30.9" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     30.9.1. Se sim, informe os nomes dos materiais educativos/informativos para a população em geral ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.9.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q30.9.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Nomes: <input type="text" class="form-control-sm" name="30.9.1Outro"></label>
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