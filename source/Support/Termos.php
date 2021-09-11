<?php

namespace Source\Support;

use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * Helpers de Termos PDF
 */
class Termos
{
   private $obDompdf;
   private $termo;
   private $view;

   /**
    * Construtor do Helper de Termos
    *
    * @param Render $view
    */
   public function __construct($view)
   {
      $options = new Options();
      $options->set('enable_remote', 'true');
      $this->obDompdf = new Dompdf($options);
      $this->view = $view;
   }

   /**
    * Abre um arquivo local que já está baixado com o termo de imagem e som
    *
    * @return void
    */
   public function downloadTermoImagemSom(): void
   {
      header('Content-Description: File Transfer');
      header('Content-Type: application/force-download');
      header("Content-Disposition: attachment; filename=Termo-Imagem-Som.pdf");
      echo file_get_contents(dirname(__DIR__,2)."/themes/modelos/forPdf/imagem-som.pdf");
   }

   /**
    * Abre um arquivo local que já está baixado com o termo de consentimento
    *
    * @return void
    */
   public function downloadTermoConsentimento(): void
   {
      header('Content-Description: File Transfer');
      header('Content-Type: application/force-download');
      header("Content-Disposition: attachment; filename=Termo-Consentimento.pdf");
      echo file_get_contents(dirname(__DIR__,2)."/themes/modelos/forPdf/consentimento.pdf");
   }

   /**
    * Gera o pdf com o DOMPDF
    *
    * @return void
    */
   public function gerarPdfTermoConsentimento(): void
   {
      $this->termo = "consentimento";
      $html = $this->view->render('modelos/forPdf/consentimento');
      echo $html;
      die();
   }

   /**
    * Gera o PDF com o dompdf
    *
    * @return void
    */
   public function gerarPdfTermoImagemSom()
   {
      $this->termo = "imagem-som";
      $html = $this->view->render('modelos/forPdf/imagem-som');
      echo $html;
      die();
   }

   /**
    * Define o HTML do objeto dompdf
    *
    * @param string $html
    * @return void
    */
   private function setHtmlForPdfAndOpen(string $html): void
   {
      $this->obDompdf->loadHtml($html);
      $this->abrirNoNavegador();
   }

   /**
    * Responsável por renderizar e abrir no navegador
    *
    * @return void
    */
   private function abrirNoNavegador(): void
   {
      $this->obDompdf->render();
      $this->obDompdf->stream("Termo - $this->termo.pdf", ['Attachment' => false]);
   }
}
