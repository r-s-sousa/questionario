<?php

namespace Source\Support;

use PHPMailer\PHPMailer\PHPMailer;

/**
 * Classe para envio de email
 */
class Email
{
   /**
    * Objeto de MAIL da classe PHPMailer
    *
    * @var PHPMailer
    */
   private $mailObj;

   /**
    * Email do servidor
    *
    * @var string
    */
   private $fromEmail;

   /**
    * Senha do email do servidor
    *
    * @var string
    */
   private $fromPass;

   /**
    * Nome do email do servidor
    *
    * @var string
    */
   private $fromName;

   /**
    * Anexos do email
    *
    * @var array
    */
   private $attachs;

   /**
    * Usuário para autenticação
    *
    * @var string
    */
   private $username;

   /**
    * Mensagem para pessoa em HTML
    *
    * @var string
    */
   private $messageHtml;

   /**
    * Titulo da mensagem
    *
    * @var string
    */
   private $title;

   /**
    * Nome da pessoa que quer mandar o E-mail
    *
    * @var string
    */
   public $toName;

   /**
    * Email da pessoa que quer mandar o E-mail
    *
    * @var string
    */
   public $toEmail;

   /**
    * Função necessária para criar o Obj do tipo e-mail
    * 
    * @param string $fromName Nome que irá aparecer na caixa de quem recebeu
    * @param string $toEmail Endereço de Email do destinatário
    * @param string $toName Nome do destinatário
    * @param string $title
    * @param string $messageHtml
    * @param array $attachs Arquivos a serem enviados
    */
   public function __construct($fromName, $toEmail, $toName, $title, $messageHtml, $attachs = [])
   {
      // CONSTANTES DE CONFIGURAÇÃO DA CLASSE
      $this->fromEmail = 'alunodiferenciado@hotmail.com';
      $this->username = "apikey";
      $this->fromPass = "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";

      // ARGUMENTOS PASSADOS PELO USUÁRIOS
      $this->title = $title;
      $this->fromName = $fromName;
      $this->toName = $toName;
      $this->toEmail = $toEmail;
      $this->messageHtml = $messageHtml;
      $this->attachs = $attachs;

      $this->setObjMail();
   }

   /**
    * Configura o OBJ do tipo Email com nossas entradas
    *
    * @return void
    */
   private function setObjMail()
   {
      $this->mailObj = new PHPMAILER;
      $this->mailObj->isSMTP();

      $this->mailObj->isHTML(true);

      $this->mailObj->Host = 'smtp.sendgrid.net';
      $this->mailObj->Port = 587;
      $this->mailObj->SMTPAuth = true;

      $this->mailObj->Username = $this->username;
      $this->mailObj->Password = $this->fromPass;

      $this->setAttachs();
      $this->mailObj->setFrom($this->fromEmail, utf8_decode($this->fromName));
      $this->mailObj->addReplyTo($this->fromEmail, $this->fromName);

      $this->mailObj->addAddress($this->toEmail, $this->toName);

      $this->mailObj->Subject = utf8_decode($this->title);
      // $this->mailObj->msgHTML($this->messageHtml);
      $this->mailObj->Body = utf8_decode($this->messageHtml);
   }

   /**
    * Define os anexos válidos no Obj de Email
    *
    * @return void
    */
   private function setAttachs()
   {
      // OBTÉM OS ANEXOS VALIDOS
      $attachsValids = $this->validsAttachs();

      // ADICIONA TODOS ANEXOS VÁLIDOS
      if (count($attachsValids) > 0) {
         foreach ($attachsValids as $attach) {
            $this->mailObj->addAttachment($attach);
         }
      }
   }

   /**
    * Enviar o email com o obj da classe
    *
    * @param int $debug (0)- Dont's show info; (1)- Show Info; (2) - Show info; 
    * @return array ['resultado'] = true; ['info'] = 'error ao tentar enviar email para pessoa@email.com' ['message'] = 'mensagem de error ou de sucesso'
    */
   public function sendEmail($debug = 0)
   {
      $this->mailObj->SMTPDebug = $debug;

      // ENVIA O OBJ DE EMAIL CRIADO POR ESSA CLASSE
      if (!$this->mailObj->send()) {
         return ['resultado' => false, 'info' => "Error ao tentar enviar Email para: " . $this->toEmail, 'message' => 'Mailer Error: ' . $this->mailObj->ErrorInfo];
      } else {
         return ['resultado' => true, 'info' => "Sucesso ao enviar Email para: " . $this->toEmail, 'message' => "Email has been send"];
      }
   }

   /**
    * Valida se o arquivo passado está dentre as extensões permitidas
    *
    * @return bool
    */
   private function validsExtension($attach)
   {
      return true;
   }

   /**
    * Pega todos anexos válidos
    *
    * @return array
    */
   private function validsAttachs()
   {
      $validAttachs = [];

      // VERIFICA SE EXISTE ALGUM DADO DE ANEXO
      if (count($this->attachs) == 0) return [];

      // ITERA POR TODOS OS ARQUIVOS
      foreach ($this->attachs as $attach) {
         // VERIFICA SE O ARQUIVO NÃO EXISTE
         if (!file_exists($attach)) continue;

         // VERIFICA SE ESTÁ DENTRE AS EXTENSÕES VÁLIDAS
         if (!$this->validsExtension($attach)) continue;

         // CASO SEJA VALIDADO, ELE É ADICIONADO A LISTA DE ATTACHS
         $validAttachs[] = $attach;
      }

      // ANEXOS VÁLIDOS
      return $validAttachs;
   }
}
