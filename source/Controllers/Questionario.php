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
    * Páginas
    *
    * @param Array $data
    * @return void
    */
   public function bloco(array $data)
   {
      switch ($data['page']) {

         case '1':
            echo $this->view->render("questionario/page1", [
               'title' => "BLOCO I – INFORMAÇÕES GERAIS",
               'page' => '1',
               'blocoId' => '1'
            ]);
            break;

         case '2':
            echo $this->view->render("questionario/page2", [
               'title' => "BLOCO I – INFORMAÇÕES GERAIS",
               'page' => '2',
               'blocoId' => '1'
            ]);
            break;

         case '3':
            echo $this->view->render("questionario/page3", [
               'title' => "BLOCO I – INFORMAÇÕES GERAIS",
               'page' => '3',
               'blocoId' => '1'
            ]);
            break;

         case '4':
            echo $this->view->render("questionario/page4", [
               'title' => "BLOCO I – INFORMAÇÕES GERAIS",
               'page' => '4',
               'blocoId' => '1'
            ]);
            break;

         case '5':
            echo $this->view->render("questionario/page5", [
               'title' => "BLOCO II – AVANÇOS DO CONHECIMENTO",
               'page' => '5',
               'blocoId' => '2'
            ]);
            break;

         case '6':
            echo $this->view->render("questionario/page6", [
               'title' => "BLOCO III – EQUIPE DA PESQUISA",
               'page' => '6',
               'blocoId' => '3'
            ]);
            break;

         case '7':
            echo $this->view->render("questionario/page7", [
               'title' => "BLOCO III – EQUIPE DA PESQUISA",
               'page' => '7',
               'blocoId' => '3'
            ]);
            break;

         case '8':
            echo $this->view->render("questionario/page8", [
               'title' => "BLOCO IV – DIVULGAÇÃO DA PESQUISA",
               'page' => '8',
               'blocoId' => '4'
            ]);
            break;

         case '9':
            echo $this->view->render("questionario/page9", [
               'title' => "BLOCO IV – DIVULGAÇÃO DA PESQUISA",
               'page' => '9',
               'blocoId' => '4'
            ]);
            break;

         case '10':
            echo $this->view->render("questionario/page10", [
               'title' => "BLOCO V – TOMADA DE DECISÃO INFORMADA",
               'page' => '10',
               'blocoId' => '5'
            ]);
            break;

         case '11':
            echo $this->view->render("questionario/page11", [
               'title' => "BLOCO V – TOMADA DE DECISÃO INFORMADA",
               'page' => '11',
               'blocoId' => '5'
            ]);
            break;

         case '12':
            echo $this->view->render("questionario/page12", [
               'title' => "BLOCO V – TOMADA DE DECISÃO INFORMADA",
               'page' => '12',
               'blocoId' => '5'
            ]);
            break;

         case '13':
            echo $this->view->render("questionario/page13", [
               'title' => "BLOCO VI – IMPACTOS NA SAÚDE",
               'page' => '13',
               'blocoId' => '5'
            ]);
            break;

         default:
            echo $this->view->render("questionario/page1", [
               'title' => "BLOCO I – INFORMAÇÕES GERAIS",
               'page' => '1',
               'blocoId' => '1'
            ]);
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
