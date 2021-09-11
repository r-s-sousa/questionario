<?php $this->layout('_theme', ['title' => 'Termo - Uso de imagem e som']); ?>

<div class="container bg-white rounded-top">
   <div class="row pt-3 pb-3">
      <div class="col-md-12 text-center">
         <!-- TERMO DE IMAGEM E SOM -->
         <?= $this->insert('main/termos/uso-imagem'); ?>
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
</div>