<?php

namespace Source\Support;

use Source\Models\Dado;
use Source\Models\Resposta;

/**
 * Suporte para classe Email
 */
class EmailSupport
{
   /**
    * Envia email para gabriela, informando que o usuário acabou o questionário
    *
    * @param Dado $obPesquisador
    * @return void
    */
   public static function enviaEmailParaCliente(Dado $obPesquisador): void
   {
      // mensagem a ser enviada para Gabriela
      $mensagem = "O pesquisador <b>$obPesquisador->nome</b> acabou de responder o questionário!";
      $email = new Email('Questionário', 'rafael_sousa2018@outlook.com', 'Rafael Sousa', 'Uma pessoa terminou de responder o questionário', $mensagem);
      $email->sendEmail();
   }

   /**
    * Envia email para pesquisador, informando as respostas
    *
    * @param Dado $obPesquisador
    * @param array $obRespostas
    * @return void
    */
   public static function enviaEmailParPesquisador(Dado $obPesquisador, array $obRespostas): void
   {
      $questoes = (new Respostas($obRespostas))->simplificarDadosRespostas();

      

      var_dump($questoes);
      
   }
}
