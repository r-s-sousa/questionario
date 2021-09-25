<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Link extends DataLayer
{
   public function __construct()
   {
      parent::__construct("pesquisadores_link", ['pesquisador', 'idLink', 'linkAcessado'], 'id', false);
   }

   private static function deletarPesquisadores(){
      $obPesquisadores = (new Link)->find()->fetch(true);
      foreach($obPesquisadores as $obPesquisador){
         $obPesquisador->destroy();
      }
   }

   public static function cadastrarPesquisadores()
   {
      // deleta os pesquisadores e cadastra-os novamente
      self::deletarPesquisadores();

      $pesquisadores = [
         'Álvaro Eduardo Eiras',
         'Amilcar Tanuri',
         'Aparecida Sadae Tanaka',
         'Carlos Alexandre Antunes De Brito',
         'Claire Fernandes Kubelka',
         'Cláudia Nunes Duarte Dos Santos',
         'Daniel Santos Mansur',
         'Denise Valle',
         'Helton Da Costa Santiago',
         'Jerson Lima Da Silva',
         'Joao Bosco Paraiso Da Silva',
         'Laura Helena Vega Gonzales Gil',
         'Luiz Felipe Leomil Coelho',
         'Marcelo Dias Baruffi',
         'Maria Da Glória Lima Cruz Teixeira',
         'Mauro Martins Teixeira',
         'Patrícia Brasil',
         'Paulo Filemon Paolucci Pimenta',
         'Salvatore Giovanni De Simone',
         'Selma Elaine Mazzetto',
         'Thiago Barros Correia Da Silva',
         'Wayner Vieira De Souza'
      ];

      foreach($pesquisadores as $key => $pesquisador){
         $obLink = new Link;
         $obLink->pesquisador = $pesquisador;
         $obLink->idLink = $key+1;
         $obLink->linkAcessado = 0;
         $obLink->save();
      }
   }
}
