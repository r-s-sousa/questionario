<?php

namespace Source\Controllers;

use CoffeeCode\Router\Router;
use Source\Models\Dado;
use Source\Models\Resposta;
use Source\Support\DadoHelper;
use Source\Support\Email;
use Source\Support\EmailSupport;
use Source\Support\Termos;
use Source\Support\webSupport;
use stdClass;

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
    * Gera o PDF com o termo solicitado
    *
    * @param array $data
    * @return void
    */
   public function baixarTermo(array $data): void
   {
      $termo = filter_var($data['termo'], FILTER_SANITIZE_STRING);

      if ($termo == "consentimento") {
         (new Termos($this->view))->downloadTermoConsentimento();
         return;
      }

      (new Termos($this->view))->downloadTermoImagemSom();
   }

   /**
    * Carrega o termo de consentimento
    *
    * @return void
    */
   public function termoConsentimento(): void
   {
      $obUser = null;

      // Caso o usuário esteja na memória, redireciona para o questionário
      if (verificaSeSessaoUsuarioExiste()) {
         if (!isset($_GET['user_redirect'])) {
            $this->router->redirect('questionario.bloco', ['page' => 1]);
            return;
         }
         $obUser = (new Dado)->findById($_COOKIE['questionarioUserId']);
      }

      echo $this->view->render('main/termoConsentimento', [
         'title' => "Termo de Consentimento",
         'obUser' => $obUser
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

      $obUser = null;
      if (verificaSeSessaoUsuarioExiste()) $obUser = (new Dado)->findById($_COOKIE['questionarioUserId']);

      if ($data == "false") {
         // caso a pessoa não tivesse fazendo o questionário
         if (!$obUser) $this->router->redirect('web.finalizarPesquisa');

         // caso a pessoa estivesse fazendo o questionário mas mudou de ideia
         $this->router->redirect('web.finalizarPesquisa', ['user_redirect' => true]);

         return;
      }

      // Caso a pessoa esteja fazendo questionário pela primeira vez
      if (!$obUser) {
         $this->router->redirect('web.participaraDaEntrevista');
         return;
      }

      // Caso a pessoa esteja revendo os termos
      $this->router->redirect('web.participaraDaEntrevista', ['user_redirect' => true]);
   }

   /**
    * Página final da pesquisa
    *
    * @return void
    */
   public function finalizarPesquisa(): void
   {
      // Caso a pessoa tenha mudado de ideia, deleta os dados do pesquisador
      if (isset($_GET['user_redirect'])) webSupport::deletarDadosUsuario((int)$_COOKIE['questionarioUserId']);

      // Enviar email nesse momento caso a pessoa tenha terminado a pesquisa
      if (isset($_COOKIE['questionarioUserId'])) {
         $id = $_COOKIE['questionarioUserId'];

         // Dados do pesquisador
         $obPesquisador = (new Dado)->find('id = :id', "id=$id")->fetch();

         // Dados das respostas do pesquisador
         $obRespostas = (new Resposta)->find('idUsuario = :iu', "iu=$obPesquisador->id")->order('page')->fetch(true);

         // mensagem a informar para Gabriela que questionário foi finalizado
         EmailSupport::enviaEmailParaCliente($obPesquisador);

         // mensagem a ser enviada para Pesquisador
         EmailSupport::enviaEmailParaPesquisador($obPesquisador, $obRespostas, $this->view);

         // Limpa os dados do cookies
         setcookie('questionarioUserId');
         setcookie('questionarioEmail');
      }

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
      $entrevista = 0;

      if (isset($_GET['user_redirect'])) $entrevista = (new Dado)->findById($_COOKIE['questionarioUserId'])->termoUsoImagem;

      echo $this->view->render('main/situacaoEntrevista', [
         'title' => "Deseja participar da entrevista ?",
         'entrevista' => $entrevista
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
      
      $obUser = null;
      if (verificaSeSessaoUsuarioExiste()) $obUser = (new Dado)->findById($_COOKIE['questionarioUserId']);

      if ($data == "false") {
         if(!$obUser) { $this->router->redirect('web.pegarDadosUsuario', ['aceitouTermo' => 0]); return; }
         $this->router->redirect('web.pegarDadosUsuario', ['aceitouTermo' => 0, 'user_redirect' => true]);
         return;
      }

      // Se for usuário novo
      if(!$obUser){ $this->router->redirect('web.termoDeImagemSom'); return; }

      // Se for usuário existente
      $this->router->redirect('web.termoDeImagemSom', ['user_redirect' => true]);
   }

   /**
    * Carrega o termo de imagem e som
    * 
    * @return void
    */
   public function termoDeImagemSom(): void
   {
      $termoImagem = null;

      if (isset($_GET['user_redirect'])) $termoImagem = (new Dado)->findById($_COOKIE['questionarioUserId'])->termoUsoImagem;

      echo $this->view->render('main/termoImagemSom', [
         'title' => "Termo de uso de imagem e som",
         'termoImagem' => $termoImagem
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

      $obUser = null;
      if (verificaSeSessaoUsuarioExiste()) $obUser = (new Dado)->findById($_COOKIE['questionarioUserId']);

      if ($data == "false") {
         if(!$obUser) { $this->router->redirect('web.pegarDadosUsuario', ['aceitouTermo' => 0]); return; }
         $this->router->redirect('web.pegarDadosUsuario', ['aceitouTermo' => 0, 'user_redirect' => true]);
         return;
      }

      if(!$obUser) { $this->router->redirect('web.pegarDadosUsuario', ['aceitouTermo' => 1]); return; }
      $this->router->redirect('web.pegarDadosUsuario', ['aceitouTermo' => 1, 'user_redirect' => true]);
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

      $obUser = new stdClass;
      if (isset($_GET['user_redirect'])) $obUser = (new Dado)->findById($_COOKIE['questionarioUserId']);

      if ($data == 1) $data = 1;
      else $data = 0;

      echo $this->view->render('main/pegarDados', [
         'title' => "Preenche seus dados",
         'aceitouTermo' => $data,
         'obUser' => $obUser
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
      $obUser = null;
      if (verificaSeSessaoUsuarioExiste()) $obUser = (new Dado)->findById($_COOKIE['questionarioUserId']);

      // Recebe o DAO obDado a partir do que foi passado no formulário
      $obDado = (new DadoHelper($data, $obUser))->getObDado();

      // Se der error ao salvar ou atualizar
      if (!$obDado->save()) {
         setMessage('error', "<strong>Error</strong> ao salvar dados!");
         $this->router->redirect('web.pegarDadosUsuario', ['aceitouTermo' => $obDado->termoUsoImagem]);
         return;
      }

      // Limpa os dados do cookies
      setcookie('questionarioUserId');
      setcookie('questionarioEmail');

      // Define o cookies pra durar 24 horas
      setcookie('questionarioUserId', $obDado->id, (time() + (24 * 3600)));
      setcookie('questionarioEmail', base64_encode($obDado->email), (time() + (24 * 3600)));

      // depois de salvar os dados, redireciona para página de questões
      $this->router->redirect('questionario.inicio');
   }
}
