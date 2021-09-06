<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Pergunta extends DataLayer
{
   public function __construct()
   {
      parent::__construct('perguntas', ['id', 'pergunta'], 'id', false);
   }
}