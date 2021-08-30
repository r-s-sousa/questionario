<?php $this->layout('_theme', ['title' => $title]); ?>

<!-- HEADER -->
<?php
$this->start('navbar');
$this->insert('main/partials/navbar');
$this->end();
?>
<!-- END_HEADER -->

<div class="container" style="margin-top: 80px;">
   <div class="row bg-white text-center rounded">
      <div class="col-md-12">
         <h1 class="p-5">Obrigada!</h1>
      </div>
   </div>
</div>
