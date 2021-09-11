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
            <!-- <input class="btn btn-outline-light mr-4" action="action" onclick="window.history.go(-1); return false;" type="submit" value="Anterior"> -->
            <a href="<?= $router->route('questionario.voltarPagina', ['page' => $page]); ?>" class="btn btn-outline-light mr-4">Anterior</a>

            <?php if (isset($botaoFinaliza)) : ?>
               <button type="submit" class="btn btn-outline-light">Enviar</button>
            <?php else : ?>
               <button type="submit" class="btn btn-outline-light">Próxima</button>
            <?php endif; ?>
         </div>
      </div>
   </div>
</form>

<?= $this->start('scripts'); ?>

<script>
   $(document).ready(function() {
      $.ajax({
         url: '<?= $router->route('questionario.getRespostas'); ?>',
         dataType: 'json',
         method: 'GET',
      }).done(function(result) {
         definirRespostas(result);
      })
   });

   function getNamesRadios() {
      var radios = ($('.radio'));
      var radios2 = ($('.radio2'));

      var names = [];

      for (radio of radios) {
         names[radio.name] = radio.name;
      }

      for (radio of radios2) {
         names[radio.name] = radio.name;
      }

      return names;
   }

   function definirRespostas(respostas) {
      //console.log(respostas);
      var radios = getNamesRadios();

      for (nameRadio in radios) {
         if (respostas[nameRadio]['resposta']) {
            $("input[name=" + nameRadio + "][value='" + respostas[nameRadio]['resposta'] + "']").trigger('click');
            $("input[name=" + nameRadio + "][value='" + respostas[nameRadio]['resposta'] + "']").prop('checked', true);
         }
      }
   }
</script>
<script src="<?= asset('js/layoutPergunta.js'); ?>"></script>
<?= $this->end(); ?>