<?php $this->layout('_theme', ['title' => $title]); ?>

<!-- HEADER -->
<?php
$this->start('navbar');
$this->insert('main/partials/navbar');
$this->end();
?>
<!-- END_HEADER -->

<form action="<?= $router->route('questionario.salvar'); ?>" method="post">
   <input type="hidden" name="blocoId" value="1">
   <input type="hidden" name="page" value="5">

   <div class="container bg-white rounded" style="margin-top: 70px;">
      <div class="row pt-3 pb-3">
         <div class="col-md-12 text-left">
            <h2 class="mb-4 text-center">BLOCO I – INFORMAÇÕES GERAIS </h2>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     12. Para execução da pesquisa, foram estabelecidas parcerias com outras instituições (qualquer tipo de instituição: ex. outras universidades, secretaria de saúde municipal, secretaria de saúde estadual)*?
                     <br>
                     <label class="mt-2 ml-3"><input onchange="mudou(12)" type="radio" name="q12" value="Sim"> Sim</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(12)" type="radio" name="q12" value="Não"> Não</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(12)" type="radio" name="q12" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input onchange="mudou(12)" type="radio" name="q12" value="Prefiro não responder"> Prefiro não responder</label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4 d-none" id="questao12.1">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     12.1. Se sim, liste as instituições parceiras ou marque uma das opções.
                     <br>
                     <label class="mt-2 ml-3"><input type="radio" name="q12.1" value="Não sei/Não lembro"> Não sei/Não lembro</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q12.1" value="Prefiro não responder"> Prefiro não responder</label>
                     <br>
                     <label class="ml-3"> Instituições: <input type="text" class="form-control-sm" name="12.1Outro"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     13. De acordo com as definições abaixo, como você classifica sua pesquisa*?
                     <br>
                     <label class="mt-2 ml-3"><input type="radio" name="q13" value="Pesquisa Biomédica – investigam mecanismos de saúde e doença. Buscam produzir conhecimento sobre desenvolvimento de métodos diagnóstico, tratamento, métodos de prevenção de agravos e doenças, com o objetivo de melhorar a qualidade de vida dos indivíduos."> Pesquisa Biomédica – investigam mecanismos de saúde e doença. Buscam produzir conhecimento sobre desenvolvimento de métodos diagnóstico, tratamento, métodos de prevenção de agravos e doenças, com o objetivo de melhorar a qualidade de vida dos indivíduos.</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q13" value="Pesquisa clínica – envolvem pacientes humanos com o objetivo de melhorar o diagnóstico e tratamento de doenças ou agravos."> Pesquisa clínica – envolvem pacientes humanos com o objetivo de melhorar o diagnóstico e tratamento de doenças ou agravos."</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q13" value="Pesquisa sobre serviços de saúde – tem como objetivo avaliar os sistema ou serviços de saúde em relação à organização, financiamento, acesso e custos da atenção à saúde."> Pesquisa sobre serviços de saúde – tem como objetivo avaliar os sistema ou serviços de saúde em relação à organização, financiamento, acesso e custos da atenção à saúde.</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q13" value="Pesquisa sobre população e saúde pública – investigam os determinantes de saúde de uma determinada população, com o intuito de propiciar melhoria da qualidade da saúde."> Pesquisa sobre população e saúde pública – investigam os determinantes de saúde de uma determinada população, com o intuito de propiciar melhoria da qualidade da saúde.</label>
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
      if (id == 12) {
         var qlForm = document.getElementById('questao12.1');
         var opSelecionada = $('input[name="q12"]:checked').attr("value");
      }
      if (opSelecionada == "Sim") {
         qlForm.classList.remove('d-none');
      } else {
         qlForm.classList.add('d-none');
      }
   }
</script>
<?= $this->end(); ?>