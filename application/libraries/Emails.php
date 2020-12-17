<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Emails {

	// Configurações que podem ser alteradas
	public $MAIL_HOST = 'smtp.gmail.com';
	public $MAIL_PORT = '587';
	public $MAIL_USERNAME = 'ahaavila@gmail.com';
	public $MAIL_PASSWORD = '@ugusto123';
	public $MAIL_FROM = 'ahaavila@gmail.com';
	public $MAIL_REMETENTE = 'Lorena Brandão';
	public $DEBUG_MODE = 0;
	public $DESTINATARIO = '';
	
	// ====================================================================
	public function enviar($assunto, $mensagem, $destinatarios = []){
		require 'assets/phpmailer/src/Exception.php';
		require 'assets/phpmailer/src/PHPMailer.php';
		require 'assets/phpmailer/src/SMTP.php';

		$mail = new PHPMailer(true);
		$enviada = false;
		try {
			
			// Configuração do servidor
			$mail->SMTPDebug = $this->DEBUG_MODE;
			$mail->isSMTP();
			$mail->Host = $this->MAIL_HOST;
			$mail->SMTPAuth = true;
			$mail->Username = $this->MAIL_USERNAME;
			$mail->Password = $this->MAIL_PASSWORD;
			$mail->SMTPSecure = 'tls';
			$mail->Port = $this->MAIL_PORT;
			$mail->CharSet = "UTF-8";

			// Contas
			$mail->setFrom($this->MAIL_FROM, $this->MAIL_REMETENTE);

			// Adiciona o destinatário principal
			$mail->addAddress($this->DESTINATARIO);

			// Adiciona mais destinatários
			foreach ($destinatarios as $destinatario) {
				$mail->addAddress($destinatario);
			}

			// Attachments
			$mail->addAttachment('assets/arquivos/oi.pdf');
			$mail->addAttachment('assets/arquivos/Podcast1.mp4');    
			$mail->addAttachment('assets/arquivos/Podcast2.mp4');    
			$mail->addAttachment('assets/arquivos/Podcast3.mp4'); 

			// Conteúdo
			$mail->isHTML(true);
			$mail->Subject = $assunto;
			$mail->Body = $mensagem;

			// Envia o email
			$enviada = $mail->send();
			
		} catch (Exception $e) {
			$enviada = false . $mail->ErrorInfo;
		}

		return $enviada;
	}
	
}
