<?php

namespace Source\Controllers;

use CoffeeCode\Router\Router;
use Source\Models\Resposta;
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
    * Retorna todas as respostas do usuário que está fazendo o questionário
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
    * Retorna as respostas de uma determinada pagina
    *
    * @param integer $page
    * @return array|null
    */
   private function getResposForPages(int $page): ?array
   {
      $respostasFormatadas = null;
      $obRespostas = (new Resposta)->find('idUsuario = :iu && page = :page', "iu={$_SESSION['userId']}&page=$page")->fetch(true);
      if (is_array($obRespostas)) $respostasFormatadas = (new Respostas($obRespostas))->simplificarDadosRespostas();

      return $respostasFormatadas;
   }

   /**
    * Páginas
    *
    * @param Array $data
    * @return void
    */
   public function bloco(array $data): void
   {
      switch ($data['page']) {

         case '1':
            echo $this->view->render("questionario/page1", [
               'title' => "BLOCO I – INFORMAÇÕES GERAIS",
               'page' => '1',
               'blocoId' => '1',
               'respostas' => $this->getResposForPages(1)
            ]);
            break;

         case '2':
            echo $this->view->render("questionario/page2", [
               'title' => "BLOCO I – INFORMAÇÕES GERAIS",
               'page' => '2',
               'blocoId' => '1',
               'respostas' => $this->getResposForPages(2)
            ]);
            break;

         case '3':
            echo $this->view->render("questionario/page3", [
               'title' => "BLOCO I – INFORMAÇÕES GERAIS",
               'page' => '3',
               'blocoId' => '1',
               'respostas' => $this->getResposForPages(3)
            ]);
            break;

         case '4':
            echo $this->view->render("questionario/page4", [
               'title' => "BLOCO I – INFORMAÇÕES GERAIS",
               'page' => '4',
               'blocoId' => '1',
               'respostas' => $this->getResposForPages(4)
            ]);
            break;

         case '5':
            echo $this->view->render("questionario/page5", [
               'title' => "BLOCO II – AVANÇOS DO CONHECIMENTO",
               'page' => '5',
               'blocoId' => '2',
               'respostas' => $this->getResposForPages(5)
            ]);
            break;

         case '6':
            echo $this->view->render("questionario/page6", [
               'title' => "BLOCO III – EQUIPE DA PESQUISA",
               'page' => '6',
               'blocoId' => '3',
               'respostas' => $this->getResposForPages(6)
            ]);
            break;

         case '7':
            echo $this->view->render("questionario/page7", [
               'title' => "BLOCO III – EQUIPE DA PESQUISA",
               'page' => '7',
               'blocoId' => '3',
               'respostas' => $this->getResposForPages(7)
            ]);
            break;

         case '8':
            echo $this->view->render("questionario/page8", [
               'title' => "BLOCO IV – DIVULGAÇÃO DA PESQUISA",
               'page' => '8',
               'blocoId' => '4',
               'respostas' => $this->getResposForPages(8)
            ]);
            break;

         case '9':
            echo $this->view->render("questionario/page9", [
               'title' => "BLOCO IV – DIVULGAÇÃO DA PESQUISA",
               'page' => '9',
               'blocoId' => '4',
               'respostas' => $this->getResposForPages(9)
            ]);
            break;

         case '10':
            echo $this->view->render("questionario/page10", [
               'title' => "BLOCO V – TOMADA DE DECISÃO INFORMADA",
               'page' => '10',
               'blocoId' => '5',
               'respostas' => $this->getResposForPages(10)
            ]);
            break;

         case '11':
            echo $this->view->render("questionario/page11", [
               'title' => "BLOCO V – TOMADA DE DECISÃO INFORMADA",
               'page' => '11',
               'blocoId' => '5',
               'respostas' => $this->getResposForPages(11)
            ]);
            break;

         case '12':
            echo $this->view->render("questionario/page12", [
               'title' => "BLOCO V – TOMADA DE DECISÃO INFORMADA",
               'page' => '12',
               'blocoId' => '5',
               'respostas' => $this->getResposForPages(12)
            ]);
            break;

         case '13':
            echo $this->view->render("questionario/page13", [
               'title' => "BLOCO VI – IMPACTOS NA SAÚDE",
               'page' => '13',
               'blocoId' => '5',
               'respostas' => $this->getResposForPages(13)
            ]);
            break;

         case '14':
            $this->router->redirect('web.finalizarPesquisa');
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
