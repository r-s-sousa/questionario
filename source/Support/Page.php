<?php

namespace Source\Support;

use Source\Models\Resposta;

class Page
{
   /**
    * Retorna as respostas de uma determinada pagina
    *
    * @param integer $page
    * @return array|null
    */
   private function getResposForPages(int $page): ?array
   {
      $respostasFormatadas = null;
      $obRespostas = (new Resposta)->find('idUsuario = :iu && page = :page', "iu={$_COOKIE['questionarioUserId']}&page=$page")->fetch(true);
      if (is_array($obRespostas)) $respostasFormatadas = (new Respostas($obRespostas))->simplificarDadosRespostas();

      return $respostasFormatadas;
   }

   /**
    * Carrega a proxima página de perguntas
    *
    * @param integer $page
    * @param Engine $view
    * @return void
    */
   public function carregarProximaPagina(int $page, $view, $router): void
   {
      switch ($page) {
         case '1':
            echo $view->render("questionario/page1", [
               'title' => "BLOCO I – INFORMAÇÕES GERAIS",
               'page' => '1',
               'blocoId' => '1',
               'respostas' => $this->getResposForPages(1)
            ]);
            break;

         case '2':
            echo $view->render("questionario/page2", [
               'title' => "BLOCO I – INFORMAÇÕES GERAIS",
               'page' => '2',
               'blocoId' => '1',
               'respostas' => $this->getResposForPages(2)
            ]);
            break;

         case '3':
            echo $view->render("questionario/page3", [
               'title' => "BLOCO I – INFORMAÇÕES GERAIS",
               'page' => '3',
               'blocoId' => '1',
               'respostas' => $this->getResposForPages(3)
            ]);
            break;

         case '4':
            echo $view->render("questionario/page4", [
               'title' => "BLOCO I – INFORMAÇÕES GERAIS",
               'page' => '4',
               'blocoId' => '1',
               'respostas' => $this->getResposForPages(4)
            ]);
            break;

         case '5':
            echo $view->render("questionario/page5", [
               'title' => "BLOCO II – AVANÇOS DO CONHECIMENTO",
               'page' => '5',
               'blocoId' => '2',
               'respostas' => $this->getResposForPages(5)
            ]);
            break;

         case '6':
            echo $view->render("questionario/page6", [
               'title' => "BLOCO III – EQUIPE DA PESQUISA",
               'page' => '6',
               'blocoId' => '3',
               'respostas' => $this->getResposForPages(6)
            ]);
            break;

         case '7':
            echo $view->render("questionario/page7", [
               'title' => "BLOCO III – EQUIPE DA PESQUISA",
               'page' => '7',
               'blocoId' => '3',
               'respostas' => $this->getResposForPages(7)
            ]);
            break;

         case '8':
            echo $view->render("questionario/page8", [
               'title' => "BLOCO IV – DIVULGAÇÃO DA PESQUISA",
               'page' => '8',
               'blocoId' => '4',
               'respostas' => $this->getResposForPages(8)
            ]);
            break;

         case '9':
            echo $view->render("questionario/page9", [
               'title' => "BLOCO IV – DIVULGAÇÃO DA PESQUISA",
               'page' => '9',
               'blocoId' => '4',
               'respostas' => $this->getResposForPages(9)
            ]);
            break;

         case '10':
            echo $view->render("questionario/page10", [
               'title' => "BLOCO V – TOMADA DE DECISÃO INFORMADA",
               'page' => '10',
               'blocoId' => '5',
               'respostas' => $this->getResposForPages(10)
            ]);
            break;

         case '11':
            echo $view->render("questionario/page11", [
               'title' => "BLOCO V – TOMADA DE DECISÃO INFORMADA",
               'page' => '11',
               'blocoId' => '5',
               'respostas' => $this->getResposForPages(11)
            ]);
            break;

         case '12':
            echo $view->render("questionario/page12", [
               'title' => "BLOCO V – TOMADA DE DECISÃO INFORMADA",
               'page' => '12',
               'blocoId' => '5',
               'respostas' => $this->getResposForPages(12)
            ]);
            break;

         case '13':
            echo $view->render("questionario/page13", [
               'title' => "BLOCO VI – IMPACTOS NA SAÚDE",
               'page' => '13',
               'blocoId' => '5',
               'respostas' => $this->getResposForPages(13)
            ]);
            break;

         case '14':
            $router->redirect('web.finalizarPesquisa');
            break;

         default:
            echo $view->render("questionario/page1", [
               'title' => "BLOCO I – INFORMAÇÕES GERAIS",
               'page' => '1',
               'blocoId' => '1'
            ]);
            break;
      }
   }
}
