<?php

namespace Source\Controllers;

// ENGINE PLATES

use CoffeeCode\Router\Router;
use League\Plates\Engine;
use Source\Models\Dado;

/**
 * Controlador das rotas iniciais
 */
class Web extends Controller
{
   /**
    * Construtor do controlador Web
    *
    * @param Router $router
    */
   public function __construct($router)
   {
      parent::__construct($router);
   }

   /**
    * Carrega o termo de consentimento
    *
    * @return void
    */
   public function termoConsentimento(): void
   {
      echo $this->view->render('main/termoConsentimento', [
         'title' => "Termo de Consentimento"
      ]);
   }

   /**
    * Página de termosDeServico
    *
    * @return void
    */
   public function termosDeServico(): void
   {
      echo $this->view->render('main/termos', [
         'title' => "Termo de Consentimento | " . SITE
      ]);
   }

   /**
    * Recebe a escolha inicial e redireciona o usuário pra página devida
    *
    * @param array $data
    * @return void
    */
   public function recebeEscolhaInicial(array $data): void
   {
      $data = filter_var($data['opcaoTermo'], FILTER_SANITIZE_STRING);

      if ($data == "false") {
         $this->router->redirect('web.finalizarPesquisa');
         return;
      }

      $this->router->redirect('web.participaraDaEntrevista');
   }

   /**
    * Página final da pesquisa
    *
    * @return void
    */
   public function finalizarPesquisa(): void
   {
      echo $this->view->render('main/finalizacao', [
         'title' => "Página final"
      ]);
   }

   /**
    * Página para verificar se quer participar da entrevista
    *
    * @return void
    */
   public function participaraDaEntrevista(): void
   {
      echo $this->view->render('main/situacaoEntrevista', [
         'title' => "Deseja participar da entrevista ?"
      ]);
   }

   /**
    * Recebe a escolha da entrevista e redireciona o usuário pra página devida
    *
    * @param array $data
    * @return void
    */
   public function recebeEscolhaEntrevista(array $data): void
   {
      $data = filter_var($data['opcaoEntrevista'], FILTER_SANITIZE_STRING);

      if ($data == "false") {
         $this->router->redirect('web.pegarDadosUsuario', ['aceitouTermo' => 0]);
         return;
      }

      $this->router->redirect('web.termoDeImagemSom');
   }

   /**
    * Carrega o termo de imagem e som
    * 
    * @return void
    */
   public function termoDeImagemSom(): void
   {
      echo $this->view->render('main/termoImagemSom', [
         'title' => "Termo de uso de imagem e som"
      ]);
   }

   /**
    * Recebe a escolha da entrevista e redireciona o usuário pra página devida
    *
    * @param array $data
    * @return void
    */
   public function recebeEscolhaImagemSom(array $data): void
   {
      $data = filter_var($data['opcaoTermo'], FILTER_SANITIZE_STRING);

      var_dump($data);
      die();

      if ($data == "false") {
         $this->router->redirect('web.pegarDadosUsuario', ['aceitouTermo' => 0]);
         return;
      }

      $this->router->redirect('web.pegarDadosUsuario', ['aceitouTermo' => 1]);
   }

   /**
    * Pega os dados do usuário para dar andamento a pesquisa
    *
    * @param array $data
    * @return void
    */
   public function pegarDadosUsuario(array $data): void
   {
      $data = filter_var($data['aceitouTermo'], FILTER_VALIDATE_INT);

      if ($data == 1) $data = 1;
      else $data = 0;

      echo $this->view->render('main/pegarDados', [
         'title' => "Preenche seus dados",
         'aceitouTermo' => $data
      ]);
   }

   /**
    * Recebe os dados do usuário e salva no banco de dados
    *
    * @param array $data
    * @return void
    */
   public function recebeDadosUsuario(array $data): void
   {
      $nome = filter_var($data['nome'], FILTER_SANITIZE_STRING);
      $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
      $telefone = filter_var($data['telefone'], FILTER_SANITIZE_STRING);
      $telefone = strlen($telefone) ? $telefone : null;

      $obDado = new Dado;
      $obDado->nome = $nome;
      $obDado->email = $email;
      $obDado->telefone = $telefone; // Opcional
      $obDado->termosAcepted_at = date('Y-m-d H:i:s');

      // depois de salvar os dados, redireciona para página de questões
      if(!$obDado->save()){
         echo "Error ao salvar dados no banco de dados";
         return;
      }

      echo "Parte do questionário nesse momento";
      
   }
}
