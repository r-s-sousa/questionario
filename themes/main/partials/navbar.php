<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
   <a class="navbar-brand" href="<?= $router->route("web.termoConsentimento") ?>">Pesquisa</a>
   <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
   </button> -->
   <!-- <div class="collapse navbar-collapse" id="navbarNav"> -->
      <ul class="navbar-nav ml-auto">
         <!-- <li class="nav-item" id="home">
            <a class="nav-link" href="<?= $router->route("web.home") ?>">Perguntas</a>
         </li> -->
         <li class="nav-item" id="about">
            <a class="nav-link" href="<?= $router->route("web.termos") ?>">Termos de privacidade</a>
         </li>
      </ul>
   <!-- </div> -->
</nav>