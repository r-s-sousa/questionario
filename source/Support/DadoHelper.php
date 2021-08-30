<?php

namespace Source\Support;

use Source\Models\Dado;

/**
 * Helper do DAO - Dado
 */
class DadoHelper
{
   /**
    * Objeto DAO - Dado
    *
    * @var Dado
    */
   private $obDado;

   /**
    * Array com dados recebidos do formulário
    *
    * @var array
    */
   private $data;

   /**
    * Construtor da classe DadoHelper
    *
    * @param array $data Array com dados recebidos do formulário
    */
   public function __construct(array $data)
   {
      $this->data = $data;
      $this->obDado = new Dado;

      // Define os detalhes do obDado
      $this->setDetalhes();
   }

   /**
    * Obtém o objeto DAO - Dado pronto
    *
    * @return Dado
    */
   public function getObDado(): Dado
   {
      return $this->obDado;
   }

   /**
    * Define os detalhes do obDado
    *
    * @return void
    */
   private function setDetalhes(): void
   {  
      // Dados do formulário
      $nome = filter_var($this->data['nome'], FILTER_SANITIZE_STRING);
      $email = filter_var($this->data['email'], FILTER_VALIDATE_EMAIL);
      $telefone = filter_var($this->data['telefone'], FILTER_SANITIZE_STRING);
      $telefone = strlen($telefone) ? $telefone : null;
      $aceitouTermo = (int)filter_var($this->data['aceitouTermo'], FILTER_SANITIZE_NUMBER_INT);

      // Detalhes do objeto
      $this->obDado->nome = $nome;
      $this->obDado->email = $email;
      $this->obDado->telefone = $telefone; // Opcional
      $this->obDado->termosAcepted_at = date('Y-m-d H:i:s');
      $this->obDado->termoUsoImagem = $aceitouTermo;
   }
}
