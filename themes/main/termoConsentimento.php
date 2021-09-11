<?php $this->layout('_theme', ['title' => $title]); ?>

<!-- HEADER -->
<?php
$this->start('navbar');
$this->insert('main/partials/navbar');
$this->end();
?>
<!-- END_HEADER -->

<div class="container bg-white rounded-top">
   <div class="row pt-3 pb-3">
      <div class="col-md-12">
         <?= $this->insert('main/mensagem'); ?>
      </div>
      <div class="col-md-12 text-center">
         <!-- TERMO DE CONSENTIMENTO -->
         <?= $this->insert('main/termos/consentimento'); ?>

         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span>
            Ao clicar na opção “Declaro que concordo em participar da pesquisa”, o (a) sr. (a) concordará em participar desta pesquisa nos termos deste TCLE. Caso não concorde em participar, clique na opção “Não concordo em participar da pesquisa”
         </p>
      </div>
   </div>
</div>

<div class="container">
   <div class="row bg-white">
      <div class="container">
         <div class="col-md-12 text-center">
            <p class="ml-2 mr-2 ml-md-4 mr-md-4">
               <img style="margin-bottom: -57px;" src="<?= asset('imgs/assinatura.png'); ?>" class="img-fluid" width="300px" alt="Assinatura">
            </p>
            <p class="ml-2 mr-2 ml-md-4 mr-md-4">
               <b>
                  <br>
                  Gabriela Bardelini Tavares Melo
                  <br>
                  Pesquisadora Responsável
               </b>
            </p>
            <p class="font-italic text-left">
               <b>Endereço:</b> Programa de Pós-Graduação em Ciências e Tecnologias em Saúde. Faculdade de Ceilândia – Universidade de Brasília. Centro Metropolitano, conjunto A, lote 01, Brasília – DF. CEP: 72220-900 <br>
               <b>E-mail:</b> gabriela.btm@hotmail.com <br>
               <b>Telefone:</b> (61) 98361-3554
            </p>
         </div>
      </div>
   </div>
   <div class="row rounded-bottom" style="background-color: #cccccc;">
      <div class="col-md-12 mt-3">
         <form action="<?= $router->route('web.recebeEscolhaInicial'); ?>" method="post">
            <label><input type="radio" name="opcaoTermo" id="op1" value="true"> Declaro que <b>concordo</b> em participar da pesquisa.</label>
            <br>

            <label for="op2"><input type="radio" name="opcaoTermo" id="op2" value="false" checked> <b>Não concordo</b> em participar pesquisa.</label>
            <br>
            <div class="text-center m-4">
               <a class="btn btn-warning mr-3" target="_blanck" href="<?= $router->route('web.baixarTermo', ['termo'=>"consentimento"]); ?>">Baixar termo (pdf)</a>
               <button type="submit" class="btn btn-info">Prosseguir</button>
            </div>
         </form>
      </div>
   </div>
</div>
