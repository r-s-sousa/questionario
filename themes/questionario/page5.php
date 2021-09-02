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
   <input type="hidden" name="blocoId" value="2">
   <input type="hidden" name="page" value="6">

   <div class="container bg-white rounded" style="margin-top: 70px;">
      <div class="row pt-3 pb-3">
         <div class="col-md-12 text-left">
            <h2 class="mb-4 text-center">BLOCO II – AVANÇOS DO CONHECIMENTO</h2>
            <h6>As perguntas desse bloco são a respeito dos produtos/resultados gerados a partir dos resultados da pesquisa.</h6>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     14. Publicou artigos científicos em periódicos nacionais ou internacionais*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(14)" type="radio" name="q14" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(14)" type="radio" name="q14" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(14)" type="radio" name="q14" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(14)" type="radio" name="q14" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     15. Publicou livros*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(15)" type="radio" name="q15" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(15)" type="radio" name="q15" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(15)" type="radio" name="q15" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(15)" type="radio" name="q15" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4 d-none" id="questao15.1">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     15.1. Se sim, informe os títulos dos livros ou marque uma das opções*.
                     <br>
                     <label class="mt-2 ml-3"><input type="radio" name="q15.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q15.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Livros: <input type="text" class="form-control-sm" name="15.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     16. Publicou capítulos de livros*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(16)" type="radio" name="q16" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(16)" type="radio" name="q16" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(16)" type="radio" name="q16" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(16)" type="radio" name="q16" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4 d-none" id="questao16.1">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     16.1. Se sim, informe os títulos dos capítulos dos livros ou marque uma das opções*.
                     <br>
                     <label class="mt-2 ml-3"><input type="radio" name="q16.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q16.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Titulos: <input type="text" class="form-control-sm" name="16.1Outro"></label>
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

<?= $this->start('scripts'); ?>
<script>
   function mudou(id) {
      if (id == 14) {
         var qlForm = document.getElementById('questao14.1');
         var opSelecionada = $('input[name="q14"]:checked').attr("value");
      }
      if (id == 15) {
         var qlForm = document.getElementById('questao15.1');
         var opSelecionada = $('input[name="q15"]:checked').attr("value");
      }
      if (id == 16) {
         var qlForm = document.getElementById('questao16.1');
         var opSelecionada = $('input[name="q16"]:checked').attr("value");
      }
      if (opSelecionada == "Sim") {
         qlForm.classList.remove('d-none');
      } else {
         qlForm.classList.add('d-none');
      }
   }
</script>
<?= $this->end(); ?>