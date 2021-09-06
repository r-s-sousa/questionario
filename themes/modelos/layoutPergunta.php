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
            <input class="btn btn-outline-light mr-4" action="action" onclick="window.history.go(-1); return false;" type="submit" value="Anterior">
            <button type="submit" class="btn btn-outline-light">Próxima</button>
         </div>
      </div>
   </div>
</form>

<?= $this->start('scripts'); ?>

<script>
   function mudou(id) {
      if (id == 10) {
         var qlForm = $('#questao10_1');
         var opSelecionada = $('input[name="q10"]:checked').attr("value");
      } else if (id == 11) {
         var qlForm = $('#questao11_1');
         var opSelecionada = $('input[name="q11"]:checked').attr("value");
      } else if (id == 12) {
         var qlForm = $('#questao12_1');
         var opSelecionada = $('input[name="q12"]:checked').attr("value");
      } else if (id == 14) {
         var qlForm = $('#questao14_1');
         var opSelecionada = $('input[name="q14"]:checked').attr("value");
      } else if (id == 15) {
         var qlForm = $('#questao15_1');
         var opSelecionada = $('input[name="q15"]:checked').attr("value");
      } else if (id == 16) {
         var qlForm = $('#questao16_1');
         var opSelecionada = $('input[name="q16"]:checked').attr("value");
      } else if (id == 18) {
         var qlForm = $('#questao18_1');
         var qlForm2 = $('#questao18_2');
         var opSelecionada = $('input[name="q18"]:checked').attr("value");
      } else if (id == 19) {
         var qlForm = $('#questao19_1');
         var opSelecionada = $('input[name="q19"]:checked').attr("value");
      } else if (id == 20) {
         var qlForm = $('#questao20_1');
         var opSelecionada = $('input[name="q20"]:checked').attr("value");
      } else if (id == 21) {
         var qlForm = $('#questao21_1');
         var qlForm2 = $('#questao21_2');
         var opSelecionada = $('input[name="q21"]:checked').attr("value");
      } else if (id == 22) {
         var qlForm = $('#questao22_1');
         var qlForm2 = $('#questao22_2');
         var opSelecionada = $('input[name="q22"]:checked').attr("value");
      } else if (id == 23) {
         var qlForm = $('#questao23_1');
         var qlForm2 = $('#questao23_2');
         var opSelecionada = $('input[name="q23"]:checked').attr("value");
      } else if (id == 24) {
         var qlForm = $('#questao24_1');
         var qlForm2 = $('#questao24_2');
         var opSelecionada = $('input[name="q24"]:checked').attr("value");
      } else if (id == 25) {
         var qlForm = $('#questao25_1');
         var qlForm2 = $('#questao25_2');
         var opSelecionada = $('input[name="q25"]:checked').attr("value");
      } else if (id == 26) {
         var qlForm = $('#questao26_1');
         var opSelecionada = $('input[name="q26"]:checked').attr("value");
      } else if (id == 27) {
         var qlForm = $('#questao27_1');
         var qlForm2 = $('#questao27_2');
         var opSelecionada = $('input[name="q27"]:checked').attr("value");
      } else if (id == 28) {
         var qlForm = $('#questao28_1');
         var opSelecionada = $('input[name="q28"]:checked').attr("value");
      } else if (id == 29) {
         var qlForm = $('#questao29_1');
         var opSelecionada = $('input[name="q29"]:checked').attr("value");
      } else if (id == 30_1) {
         var qlForm = $('#questao30_1_1');
         var opSelecionada = $('input[name="q30_1"]:checked').attr("value");
      } else if (id == 30_2) {
         var qlForm = $('#questao30_2_1');
         var opSelecionada = $('input[name="q30_2"]:checked').attr("value");
      } else if (id == 30_3) {
         var qlForm = $('#questao30_3_1');
         var opSelecionada = $('input[name="q30_3"]:checked').attr("value");
      } else if (id == 30_4) {
         var qlForm = $('#questao30_4_1');
         var opSelecionada = $('input[name="q30_4"]:checked').attr("value");
      } else if (id == 30_5) {
         var qlForm = $('#questao30_5_1');
         var opSelecionada = $('input[name="q30_5"]:checked').attr("value");
      } else if (id == 30_6) {
         var qlForm = $('#questao30_6_1');
         var opSelecionada = $('input[name="q30_6"]:checked').attr("value");
      } else if (id == 30_7) {
         var qlForm = $('#questao30_7_1');
         var opSelecionada = $('input[name="q30_7"]:checked').attr("value");
      } else if (id == 30_8) {
         var qlForm = $('#questao30_8_1');
         var opSelecionada = $('input[name="q30_8"]:checked').attr("value");
      } else if (id == 30_9) {
         var qlForm = $('#questao30_9_1');
         var opSelecionada = $('input[name="q30_9"]:checked').attr("value");
      } else if (id == 31) {
         var qlForm = $('#questao31_1');
         var opSelecionada = $('input[name="q31"]:checked').attr("value");
      } else if (id == 34) {
         var qlForm = $('#questao34_1');
         var opSelecionada = $('input[name="q34"]:checked').attr("value");
      } else if (id == 35) {
         var qlForm = $('#questao35_1');
         var opSelecionada = $('input[name="q35"]:checked').attr("value");
      }  else if (id == 36) {
         var qlForm = $('#questao36_1');
         var opSelecionada = $('input[name="q36"]:checked').attr("value");
      } else if (id == 37) {
         var qlForm = $('#questao37_1');
         var opSelecionada = $('input[name="q37"]:checked').attr("value");
      }

      if (opSelecionada == "Sim") {
         $(qlForm).find("*").prop('disabled', false);
         if(qlForm2!=null){
            $(qlForm2).find("*").prop('disabled', false);
            qlForm2.removeClass('d-none');   
         }
         qlForm.removeClass('d-none');
         
      } else {
         $(qlForm).find("*").prop('disabled', true);
         if(qlForm2!=null){
            $(qlForm2).find("*").prop('disabled', true);
            qlForm2.addClass('d-none');
         }
         qlForm.addClass('d-none');
      }
   }

   function mudouRadioSecondaria(idRadio) {
      var inputForRadio = document.getElementById(idRadio + "_Outro");
      var opSelecionada = $('input[name="' + idRadio + '"]:checked').attr("value");

      if (opSelecionada == "Outro") {
         inputForRadio.disabled = false;
      } else {
         inputForRadio.disabled = true;
      }
   }

   function opcoesOutrosEnableDisable() {
      var inputForRadio = document.getElementById('opcao1').checked;
      var campoParaSerAtivado = document.getElementById('opcao1Input');
      if (inputForRadio) {
         campoParaSerAtivado.disabled = false;
      } else {
         campoParaSerAtivado.disabled = true;
      }
   }
</script>

<?= $this->end(); ?>