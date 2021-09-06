<?php

namespace Source\Support;

use Source\Models\Dado;
use Source\Models\Pergunta;
use Source\Models\Resposta;
use Dompdf\Dompdf;

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
   public static function enviaEmailParPesquisador(Dado $obPesquisador, array $obRespostas, $view): void
   {
      $questoes = (new Respostas($obRespostas))->simplificarDadosRespostas();
      $questoesForPdf = self::getQuestoesWithPerguntas($questoes);

      $htmlForPdf = $view->render('modelos/emailModelo', ['perguntas' => $questoesForPdf]);

      // Salva o arquivo pdf
      self::savePdfWithHtml($htmlForPdf, $obPesquisador->id);

      // Envia email nesse momento
      $email = new Email(
         'Gabriela',
         $obPesquisador->email,
         $obPesquisador->nome,
         'Questionário',
         'Segue em anexo PDF com o questionário respondido',
         '',
         [dirname(__DIR__, 2) . "/themes/assets/questoes/questionario-$obPesquisador->id.pdf"]
      );

      $email->sendEmail();
      die();
   }

   /**
    * Obtém as questões completas, ou seja com o texto da pergunta
    *
    * @param array $questoes
    * @return array
    */
   private static function getQuestoesWithPerguntas(array $questoes): array
   {
      $questoesForPdf = [];

      foreach ($questoes as $pergunta => $resposta) {
         $textoPergunta = (new Pergunta)->find('id = :id', "id=$pergunta")->fetch()->pergunta;
         $textoPergunta = explode(" ", $textoPergunta);
         $textoPergunta[0] = $textoPergunta[0] . " - ";
         $textoPergunta = implode(" ", $textoPergunta);
         $textoResposta = $resposta['resposta'];
         $questoesForPdf[] = $textoPergunta . "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>R:" . $textoResposta . "</b>";
      }

      return $questoesForPdf;
   }

   /**
    * Salva o PDF com o html em um arquivo com id do pesquisador
    *
    * @param string $html
    * @param integer $id
    * @return void
    */
   private static function savePdfWithHtml(string $html, int $id): void
   {
      // instantiate and use the dompdf class
      $dompdf = new Dompdf();
      $dompdf->loadHtml($html);

      // Render the HTML as PDF
      $dompdf->render();

      //$dompdf->stream('teste.pdf', ['Attachment' => false]);

      // SALVA OS DADOS EM UM ARQUIVO
      file_put_contents(
         dirname(__DIR__, 2) . '/themes/assets/questoes/' . "questionario-$id.pdf",
         $dompdf->output()
      );
   }
}
