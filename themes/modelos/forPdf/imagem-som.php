<?php $this->layout('_theme', ['title' => 'Termo - Uso de imagem e som']); ?>

<div class="container bg-white rounded-top">
   <div class="row pt-3 pb-3">
      <div class="col-md-12 text-center">
         <!-- TERMO DE IMAGEM E SOM -->
         <?= $this->insert('main/termos/uso-imagem'); ?>

         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Ao clicar na opção abaixo “Declaro que autorizo, livre e espontaneamente, o uso para fins de pesquisa, nos termos acima descritos, da minha imagem e som de voz”, o (a) Sr. (a) concorda em participar da entrevista virtual e ter sua imagem e voz gravadas para a pesquisa. Caso não concorde em participar, clique na opção “Não autorizo a utilização da minha imagem e som de voz para fins da pesquisa”.
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
      <div class="col-md-12 mt-3 p3">
         <form action="<?= $router->route('web.recebeEscolhaImagemSom'); ?>" method="post">
            <label for="op1"><input type="radio" name="opcaoTermo" id="op1" value="true" checked> Declaro que autorizo, livre e espontaneamente, o uso para fins de pesquisa, nos termos acima descritos, da minha imagem e som de voz.</label>
            <br>
            <label for="op2"><input type="radio" name="opcaoTermo" id="op2" value="false"> Não autorizo a utilização da minha imagem e som de voz para fins da pesquisa.</label>
         </form>
      </div>
   </div>
</div>