<?= $this->layout('_theme', ['title' => $title]); ?>

<!-- HEADER -->
<?php
$this->start('navbar');
$this->insert('main/partials/navbar_termos');
$this->end();
?>
<!-- END_HEADER -->

<div id="termo1" class="container bg-white p-2">
   <div class="row mt-3 mb-3">
      <div class="col-md-12 text-center">
         <!-- TERMO DE CONSENTIMENTO -->
         <?= $this->insert('main/termos/consentimento'); ?>
      </div>
   </div>
</div>

<div id="termo2" class="d-none container bg-white p-2">
   <div class="row mt-3 mb-3">
      <div class="col-md-12 text-center">
         <!-- TERMO DE USO DE IMAGEM -->
         <?= $this->insert('main/termos/uso-imagem'); ?>
      </div>
   </div>
</div>
<div class="container">
   <div class="row bg-white rounded">
      <div class="col-md-12 text-center">
         <p style="margin-top: -40px;" class="ml-2 mr-2 ml-md-4 mr-md-4">
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

<div class="container">
   <div class="row">
      <div class="offset-3 col-6 text-center mt-3 mb-3">
         <a href="<?= $router->route('web.termoConsentimento'); ?>" class="btn btn-info">Página inicial</a>
      </div>
   </div>
</div>

<?= $this->start('scripts'); ?>
<script>
   function termoConsentimento() {
      $('#termo2').removeClass('d-none');
      $('#termo2').addClass('d-none');
      $('#termo1').removeClass('d-none');
      $('#btnConsentimento').addClass('bg-secondary');
      $('#btnImagemSom').removeClass('bg-secondary');
   }

   function termoUsoDeImagem() {
      $('#termo1').removeClass('d-none');
      $('#termo1').addClass('d-none');
      $('#termo2').removeClass('d-none');
      $('#btnImagemSom').addClass('bg-secondary');
      $('#btnConsentimento').removeClass('bg-secondary');
   }
</script>
<?= $this->end(); ?>
