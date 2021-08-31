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
   <input type="hidden" name="page" value="4">

   <div class="container bg-white rounded" style="margin-top: 70px;">
      <div class="row pt-3 pb-3">
         <div class="col-md-12 text-left">
            <h2 class="mb-4 text-center">BLOCO I – INFORMAÇÕES GERAIS </h2>
         </div>

         <div class="col-md-12">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     9. Valor recebido no edital para execução da pesquisa (em reais – R$):
                     Informe o valor ou marque uma das opções.
                     <br>
                     <label class="mt-2 ml-3"><input type="radio" name="q9" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q9" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3">Valor R$:<input type="text" class="form-control-sm" name="q9Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     10. A pesquisa teve outras fontes de financiamento*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(10)" type="radio" name="q10" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(10)" type="radio" name="q10" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(10)" type="radio" name="q10" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(10)" type="radio" name="q10" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4 d-none" id="questao10.1">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     10.1. Se sim, qual foi o valor recebido por outras fontes de financiamento (em reais – R$)?
                     <br>
                     <label class="mt-2 ml-3"><input type="radio" name="q10.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q10.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Valor: R$<input type="text" class="form-control-sm" name="10.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     11. A partir dos resultados da sua pesquisa, foi possível o início de outras pesquisas que também receberam financiamento*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(11)" type="radio" name="q11" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(11)" type="radio" name="q11" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(11)" type="radio" name="q11" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(11)" type="radio" name="q11" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4 d-none" id="questao11.1">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     11.1. Se sim, quantas pesquisas? Informe a quantidade ou marque uma das opções.
                     <br>
                     <label class="mt-2 ml-3"><input type="radio" name="q11.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q11.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Qtd: <input type="text" class="form-control-sm" name="11.1Outro"></label>
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

      if (id == 10) {
         var qlForm = document.getElementById('questao10.1');
         var opSelecionada = $('input[name="q10"]:checked').attr("value");
      } else if (id == 11) {
         var qlForm = document.getElementById('questao11.1');
         var opSelecionada = $('input[name="q11"]:checked').attr("value");
      }
      if (opSelecionada == "Sim") {
         qlForm.classList.remove('d-none');
      } else {
         qlForm.classList.add('d-none');
      }
   }
</script>
<?= $this->end(); ?>