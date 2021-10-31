<?php

namespace Source\Support;

use Source\Models\Dado;
use Source\Models\Resposta;

/**
 * Suporte para Controlador WEB
 */
class webSupport
{
   /**
    * Deleta os dados de um Dado usuário
    *
    * @param integer $idObUser
    * @return void
    */
   public static function deletarDadosUsuario(int $idObUser): void
   {
      // (new Dado)->findById($idObUser)->destroy();
      // self::deletarQuestoesUsuario($idObUser);

      // Limpa os dados do cookies
      setcookie('questionarioUserId');
      setcookie('questionarioEmail');
   }

   /**
    * Deleta todas as questões do usuário que quis desistir do formulário
    *
    * @param integer $idObUser
    * @return void
    */
   private static function deletarQuestoesUsuario(int $idObUser): void
   {
      $obRespostas = (new Resposta)->find('idUsuario = :iu', "iu=$idObUser")->fetch(true);

      if (!$obRespostas) {
         setMessage('error', "Todas respostas foram removidas!");
         return;
      }

      foreach ($obRespostas as $obResposta) {
         $obResposta->destroy();
      }

      return;
   }
}
