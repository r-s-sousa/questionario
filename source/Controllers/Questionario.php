<?php

namespace Source\Controllers;

use CoffeeCode\Router\Router;

/**
 * Controlador do Questionário
 */
class Questionario extends Controller
{
   /**
    * Construtor do controlador de questionario
    *
    * @param Router $router
    */
   public function __construct(Router $router)
   {
      parent::__construct($router);

      // Verifica se realmente a pessoa seguiu os passos pra está aqui
      if (!verificaSeSessaoUsuarioExiste()) {
         setMessage('error', 'Você deve passar por <b>todos os passos</b> antes de tentar responder o questionário!');
         $this->router->redirect('web.termoConsentimento');
      }
   }

   /**
    * Página inicial dos questionário
    *
    * @return void
    */
   public function inicio(): void
   {
      echo $this->view->render("questionario/inicio", ['title' => "Questionário"]);
   }
}
