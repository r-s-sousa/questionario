<?php

namespace Source\Support;

use Dompdf\Dompdf;
use Dompdf\Options;

class Termos
{
   private $obDompdf;
   private $termo;
   private $view;

   public function __construct($view)
   {
      $options = new Options();
      $options->set('enable_remote', 'true');
      $this->obDompdf = new Dompdf($options);
      $this->view = $view;
   }

   public function downloadTermoImagemSom()
   {
      header('Content-Description: File Transfer');
      header('Content-Type: application/force-download');
      header("Content-Disposition: attachment; filename=Termo-Imagem-Som.pdf");
      echo file_get_contents(dirname(__DIR__,2)."/themes/modelos/forPdf/imagem-som.pdf");
   }

   public function downloadTermoConsentimento()
   {
      header('Content-Description: File Transfer');
      header('Content-Type: application/force-download');
      header("Content-Disposition: attachment; filename=Termo-Consentimento.pdf");
      echo file_get_contents(dirname(__DIR__,2)."/themes/modelos/forPdf/consentimento.pdf");
   }

   public function gerarPdfTermoConsentimento()
   {
      $this->termo = "consentimento";
      $html = $this->view->render('modelos/forPdf/consentimento');
      echo $html;
      die();
   }

   public function gerarPdfTermoImagemSom()
   {
      $this->termo = "imagem-som";
      $html = $this->view->render('modelos/forPdf/imagem-som');
      echo $html;
      die();
   }

   private function setHtmlForPdfAndOpen(string $html)
   {
      $this->obDompdf->loadHtml($html);
      $this->abrirNoNavegador();
   }

   private function abrirNoNavegador()
   {
      $this->obDompdf->render();
      $this->obDompdf->stream("Termo - $this->termo.pdf", ['Attachment' => false]);
   }
}
