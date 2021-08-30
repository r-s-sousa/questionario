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

<div class="container bg-white rounded" style="margin-top: 70px;">
   <div class="row pt-3 pb-3">
      <div class="col-md-12 text-center">
         <h2 class="mb-4">Questionário</h2>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> 1ª Pergunta
         </p>
      </div>
   </div>
</div>

<div class="container">
   <div class="row">
      <div class="col-md-12 mt-3">
         <form action="<?= $router->route('web.recebeEscolhaEntrevista'); ?>" method="post">
            <input type="radio" name="opcaoEntrevista" id="op1" value="true">
            <label for="op1"><b>Sim</b></label>
            <br>
            <input type="radio" name="opcaoEntrevista" id="op2" value="false" checked>
            <label for="op2"><b>Não</b></label>
            <br>
            <div class="text-center m-4">
               <button type="submit" class="btn btn-info">Prosseguir</button>
            </div>
         </form>
      </div>
   </div>
</div>

<?php $this->start('scripts'); ?>

<script>
   $(document).ready(function() {
      document.getElementById('home').classList.add('active');
   });
</script>

<?php $this->stop(); ?>