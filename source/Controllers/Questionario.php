<?php

namespace Source\Controllers;

use CoffeeCode\Router\Router;
use Source\Models\Resposta;
use Source\Support\Page;
use Source\Support\Respostas;

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
    * AJAX - Retorna todas as respostas do usuário que está fazendo o questionário
    *
    * @return void
    */
   public function getRespostas(): void
   {
      $respostasFormatadas = null;
      $obRespostas = (new Resposta)->find('idUsuario = :iu', "iu={$_SESSION['userId']}")->fetch(true);
      if (is_array($obRespostas)) $respostasFormatadas = (new Respostas($obRespostas))->simplificarDadosRespostas();

      echo json_encode($respostasFormatadas);
      return;
   }

   /**
    * Volta para página anterior a parti da página atual
    *
    * @param array $data
    * @return void
    */
   public function voltarPagina(array $data): void
   {
      $page = filter_var($data['page'], FILTER_SANITIZE_STRING);
      if (($page - 1) > 0)  $page = $page - 1;
      $this->router->redirect('questionario.bloco', ['page' => $page]);
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
    * Páginas
    *
    * @param Array $data
    * @return void
    */
   public function bloco(array $data): void
   {
      $page = filter_var($data['page'], FILTER_SANITIZE_STRING);

      // Faz toda verificação e renderiza a proxima página de perguntas
      (new Page())->carregarProximaPagina($page, $this->view, $this->router);
   }


   /**
    * Recebe as respostas salva, e carrega proxima página
    *
    * @param Array $data
    * @return void
    */
   public function salvarAndProximaPergunta(array $data): void
   {
      $data = filter_var_array($data, FILTER_SANITIZE_STRING);
      $blocoId = $data['blocoId'];
      $pagina = $data['page'];
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
