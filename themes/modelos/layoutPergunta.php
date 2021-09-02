<?php
$this->layout('_theme', ['title' => $title]);
$this->start('navbar');
$this->insert('main/partials/navbar');
$this->end();
?>

<form action="<?= $router->route('questionario.salvar'); ?>" method="post">
   <input type="hidden" name="blocoId" value="1">
   <input type="hidden" name="page" value="4">

   <div class="container bg-white rounded" style="margin-top: 70px;">
      <div class="row pt-3">
         <div class="col-md-12 text-left">
            <h2 class="text-center"><?= $title; ?></h2>
         </div>
      </div>

      <?= $this->section('content'); ?>

      <div class="row">
         <div class="col-12 mt-3 mb-3 text-center">
            <button type="submit" class="btn btn-outline-success">Próxima página</button>
         </div>
      </div>
   </div>
</form>