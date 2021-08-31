<?php

namespace Source\Controllers;

use CoffeeCode\Router\Router;
use Source\Models\Resposta;

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

   /**
    * BLoco I
    *
    * @param Array $data
    * @return void
    */
   public function bloco(array $data)
   {
      switch ($data['page']) {
         case '1':
            echo $this->view->render("questionario/page1", ['title' => "Questionário Bloco I"]);
            break;
         case '2':
            echo $this->view->render("questionario/page2", ['title' => "Questionário Bloco I"]);
            break;
         case '3':
            echo $this->view->render("questionario/page3", ['title' => "Questionário Bloco I"]);
            break;
         default:
            echo $this->view->render("questionario/page4", ['title' => "Questionário Bloco I"]);
            break;
      }
   }


   /**
    * Recebe as respostas
    *
    * @param Array $data
    * @return void
    */
   public function salvarAndProximaPergunta(array $data): void
   {
      $data = filter_var_array($data, FILTER_SANITIZE_STRING);
      $blocoId = $data['blocoId'];
      $pagina = $data['page'] - 1;
      $dadaEmJson = json_encode($data);

      $idUsuario = $_SESSION['userId'];

      // Verifica se existe, caso exista apenas atualiza
      $obResposta = (new Resposta())->find('idUsuario = :id AND page = :page', ":id=$idUsuario&page=$pagina")->fetch();
      if (!$obResposta) $obResposta = new Resposta;

      $obResposta->idUsuario = $idUsuario;
      $obResposta->page = $pagina;
      $obResposta->bloco = $blocoId;
      $obResposta->respostas = $dadaEmJson;

      // Persiste os dados no banco de dados
      $obResposta->save();

      // Redireciona para a próxima pergunta
      $this->router->redirect('questionario.bloco', ['page' => $pagina + 1]);

      // Mata a aplicação
      return;
   }
}
