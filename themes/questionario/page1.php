<?php $this->layout('_theme', ['title' => $title]); $this->start('navbar'); $this->insert('main/partials/navbar'); $this->end(); ?>

<form action="<?= $router->route('questionario.salvar'); ?>" method="post">
   <input type="hidden" name="blocoId" value="1">
   <input type="hidden" name="page" value="2">
   
   <div class="container bg-white rounded" style="margin-top: 70px;">
      <div class="row pt-3 pb-3">
         <div class="col-md-12 text-left">
            <h2 class="mb-4 text-center">BLOCO I – INFORMAÇÕES GERAIS </h2>
            <div class="card">
               <div class="card-body bg-white">
                  <p class="card-text">
                     1. Nome do(a) coordenador(a) da pesquisa*: <input class="form-control-sm" type="text" name="q1">
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     2. Principal Grande Área de Atuação*:
                     <br>
                     <label class="mt-2 ml-3"><input type="radio" name="q2" value="Ciências Exatas e da Terra"> Ciências Exatas e da Terra</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q2" value="Engenharias"> Engenharias</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q2" value="Ciências Agrárias"> Ciências Agrárias</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q2" value="Ciências Humanas"> Ciências Humanas</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q2" value="Ciência Biológicas"> Ciência Biológicas</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q2" value="Ciências da Saúde"> Ciências Sociais Aplicadas</label>
                     <br>
                     <label class="ml-3"><input type="radio" name="q2" value="Linguística, Letras e Artes"> Linguística, Letras e Artes</label>
                     <br>
                     <label class="ml-3">Outras: <input class="form-control-sm" type="text" name="q2Outras"></label>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     3. Principal Subárea de Atuação: <input class="form-control-sm" type="text" name="q3">
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-4">
            <div class="card">
               <div class="card-body">
                  <p class="card-text">
                     4. Telefones para contato com DDD (preferencialmente celular)*: <input class="form-control-sm" type="text" name="q4">
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