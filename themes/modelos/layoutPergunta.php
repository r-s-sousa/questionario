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
<script src="<?= asset('js/layoutPergunta.js'); ?>"></script>
<?= $this->end(); ?>