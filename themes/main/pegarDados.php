<?php $this->layout('_theme', ['title' => $title]); ?>

<!-- HEADER -->
<?php
$this->start('navbar');
$this->insert('main/partials/navbar');
$this->end();
?>
<!-- END_HEADER -->

<div class="container bg-white rounded">
   <div class="row pt-3 pb-3">
      <div class="col-md-12 text-center">
         <h3 class="mb-2">Para dar início ao questionário, precisamos de alguns de seus dados!</h3>
      </div>
      <div class="col-md-12">
         <form action="<?= $router->route('web.recebeDadosUsuario'); ?>" method="post">
            <div class="row">
               <input type="hidden" name="aceitouTermo" value="<?= $aceitouTermo; ?>">
               <div class="col-md-12 mt-2">
                  <label for="nome">Seu nome: </label>
                  <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite seu nome" required autofocus>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-8 mt-2">
                        <label for="email">Seu email: </label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="email@email.com" required>
                     </div>
                     <div class="col-md-4 mt-2">
                        <label for="telefone">Seu telefone: </label>
                        <input class="form-control" type="text" name="telefone" id="telefone" placeholder="(61) 9.9999-9999" data-js="phone" required>
                     </div>
                  </div>
               </div>
               <div class="offset-2 col-8 mt-3">
                  <?= $this->insert('main/mensagem'); ?>
               </div>
               <div class="col-md-12 d-flex justify-content-center">
                  <button type="reset" class="btn btn-outline-success mr-2">Limpar campos</button>
                  <button type="submit" class="btn btn-outline-info">Ir para o questionário</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>

<?php $this->start('scripts'); ?>
<script src="<?= asset('js/masked.js'); ?>"></script>
<?php $this->stop(); ?>