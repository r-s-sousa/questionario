<?php
$this->layout('_theme', ['title' => $title]);
$this->start('navbar');
$this->insert('main/partials/navbar');
$this->end();
?>

<form action="<?= $router->route('questionario.salvar'); ?>" method="post">
   <input type="hidden" name="blocoId" value="<?= $blocoId; ?>">
   <input type="hidden" name="page" value="<?= $page; ?>">

   <div class="container bg-white rounded">
      <div class="row pt-3">
         <div class="col-md-12 text-center">
            <h2><?= $title; ?></h2>
            <?php if (isset($subtitulo)) : ?>
               <h5><?= $subtitulo; ?></h5>
            <?php endif; ?>
         </div>
      </div>

      <?= $this->section('content'); ?>

      <div class="row mt-4 bg-secondary">
         <div class="col-12 mt-3 mb-3 text-center text-white">
            <button type="submit" class="btn btn-outline-light">Próxima página</button>
         </div>
      </div>
   </div>
</form>

<?= $this->start('scripts'); ?>

<script>
   // function mudou(id) {
   //    if (id == 10) {
   //       var qlForm = document.getElementById('questao10.1');
   //       var opSelecionada = $('input[name="q10"]:checked').attr("value");
   //    } else if (id == 11) {
   //       var qlForm = document.getElementById('questao11.1');
   //       var opSelecionada = $('input[name="q11"]:checked').attr("value");
   //    }
   //    if (opSelecionada == "Sim") {
   //       qlForm.classList.remove('d-none');
   //    } else {
   //       qlForm.classList.add('d-none');
   //    }
   // }

   function mudouRadioSecondaria(idRadio) {

      var inputForRadio = document.getElementById(idRadio + "_Outro");
      var opSelecionada = $('input[name="' + idRadio + '"]:checked').attr("value");

      if (opSelecionada == "Outro") {
         inputForRadio.disabled = false;
      } else {
         inputForRadio.disabled = true;
      }
   }
</script>

<?= $this->end(); ?>