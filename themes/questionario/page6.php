<?php $this->layout('_theme', ['title' => $title]); ?>

<!-- HEADER -->
<?php
$this->start('navbar');
$this->insert('main/partials/navbar');
$this->end();
?>
<!-- END_HEADER -->

<form action="<?= $router->route('questionario.salvar'); ?>" method="post">
   <input type="hidden" name="blocoId" value="3">
   <input type="hidden" name="page" value="7">

   <div class="container bg-white rounded" style="margin-top: 70px;">
      <div class="row pt-3 pb-3">
         <div class="col-md-12 text-left">
            <h2 class="mb-4 text-center">BLOCO III – EQUIPE DA PESQUISA</h2>
            <h6>As perguntas desse bloco são relacionadas às pessoas que integravam a equipe responsável pela execução da pesquisa, parcerias institucionais estabelecidas e formação de recursos humanos.</h6>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     17. Quantos pessoas faziam parte da equipe de pesquisa*? Informe a quantidade ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input onchange="mudou(17)" type="radio" name="q17" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(17)" type="radio" name="q17" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="17Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     18. Na sua equipe tinham pesquisadores visitantes*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(18)" type="radio" name="q18" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(18)" type="radio" name="q18" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(18)" type="radio" name="q18" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(18)" type="radio" name="q18" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     18.1. Se sim, informe a quantidade de pesquisadores visitantes ou marque uma
                     <br>
                     <label class="ml-3"><input type="radio" name="q18.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q18.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="18.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     18.2. Se sim, informe a quantidade de pesquisadores visitantes ou marque uma
                     <br>
                     <label class="ml-3"><input type="radio" name="q18.2" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q18.2" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Instituições: <input type="text" class="form-control-sm" name="18.2Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     19. Na sua equipe tinham pesquisadores bolsistas de produtividade*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(19)" type="radio" name="q19" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(19)" type="radio" name="q19" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(19)" type="radio" name="q19" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(19)" type="radio" name="q19" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     19.1. Se sim, informe a quantidade de pesquisadores visitantes ou marque uma
                     <br>
                     <label class="ml-3"><input type="radio" name="q19.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q19.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="19.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     20. Na sua equipe tinham pesquisadores de pós-doutorado*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(20)" type="radio" name="q20" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(20)" type="radio" name="q20" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(20)" type="radio" name="q20" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(20)" type="radio" name="q20" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     20.1. Se sim, informe a quantidade ou marque uma das opções.
                     <br>
                     <label class="ml-3"><input type="radio" name="q20.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q20.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Quantidade: <input type="text" class="form-control-sm" name="20.1Outro"></label>
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