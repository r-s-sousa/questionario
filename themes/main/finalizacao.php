<?php $this->layout('_theme', ['title' => $title]); ?>

<!-- HEADER -->
<?php
$this->start('navbar');
$this->insert('main/partials/navbar');
$this->end();

?>
<!-- END_HEADER -->

<div class="container">
   <div class="row bg-white text-center rounded">
      <div class="col-md-12">
         <hr>
         <h1 class="p-5">Obrigada!</h1>
         <hr>
      </div>
   </div>
</div>
