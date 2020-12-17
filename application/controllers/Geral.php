<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// =============================================================
class Geral extends CI_Controller {

	// ===========================================================
	public function index()
	{

		$this->load->view('layout/_header');
		$this->load->view('principal');
		$this->load->view('layout/_footer');
		
	}

	public function agradece(){
		$this->load->view('layout/_header');
		$this->load->view('agradecimento.php');
		$this->load->view('layout/_footer');
	}

	// ===========================================================
	public function gravar() {
		
		/////////////////// Gravando os dados num Banco de Dados ///////////////////	
		
		// Salvar os valores dos inputs em array
		$valores = [
			$this->input->post('text_nome'),
			$this->input->post('text_email'),
		];

		// Guardar os dados na base de dados
		$this->db->query('INSERT INTO cadastro (nome, email) VALUES (?,?)', $valores);

		////////////////////////////// Envio do Email //////////////////////////////

		// Carrego a library do phpmailer
		$this->load->library('phpmailer_lib');

		// Criando um objeto do tipo PHPMailer
		$mail = $this->phpmailer_lib->load();

		// Configurando o SMTP
		//$mail->SMTPDebug = 0;
		$mail->isSMTP();
		//$mail->Mailer = "smtp";
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->CharSet = "utf-8";
		$mail->Username = 'lorenabrandaosoueu@gmail.com';
		$mail->Password = 'lolo100401';
		$mail->SMTPSecure = 'tls';
		$mail->Port = "587";

		$nome = $this->input->post('text_nome');
		$email = $this->input->post('text_email');
	
		// Recipientes
		$mail->setFrom('lorenabrandaosoueu@gmail.com', 'LORENA BRANDÃO');
		$mail->addAddress($email);
		$mail->addAddress('lorenabrandaosoueu@gmail.com');

		// Email subject
		$mail->Subject = 'Muito obrigado por baixar o E-book  do Projeto One Sentence a Day';

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = "<p style='font-size: 20px; text-align: justify;'>Olá <b>$nome</b>, tudo bem? Aqui é Lorena Brandão.<br>
			É muito bom ter você por aqui! <br>
			<br>
			Estou te mandando este e-mail para lhe entregar o Ebook do Projeto 1 SENTENCE A DAY<br>
			e mais 3 podcasts com a pronúncia de todas as frases, para você praticar e praticar!<br>
			<br><br>
			Idealizei esse projeto com muito carinho pensando em você.<br> 
			Nele você encontra: <br>
			1. Algumas expressões especiais que os americanos usam o tempo todo; (Eu particularmente uso o tempo todo!)<br><br>
			2. Vários vocabulários e verbos para você soar mais como um falante nativo em inglês; <br><br>
			3. E idiomas comuns usados pelos americanos na vida real; <br><br>
			Seguindo o passo a passo que está no Ebook você vai levar seu inglês para outro nível,<br>
			aprendendo de um jeito mais fácil para crescer sua carreira profissional <br>
			e com certeza fazer aquela viagem ao exterior! <br><br>
			Segue abaixo 3 podcasts com a pronuncia de cada frase, para que você possa praticar muito:<br>
			Podcast 1: <a href='https://mcusercontent.com/40585a1b77ee73e99e4816064/files/1901a6ee-1b6d-456f-8bdd-109baa2758eb/Podcast1.mp4'>Clique para baixar o podcast1</a> <br>
			podcast 2: <a href='https://mcusercontent.com/40585a1b77ee73e99e4816064/files/3e87417b-5ffa-4cb1-8167-57108267e96d/Podcast2.mp4'>Clique para baixar o podcast2</a> <br>
			podcast 2: <a href='https://mcusercontent.com/40585a1b77ee73e99e4816064/files/929cfc0e-84a4-4c8a-976f-69cc128b8187/Podcast3.mp4'>Clique para baixar o podcast3</a> <br>
			<br>
			Espero que você goste! <br>
			E compartilhe comigo no Instagram <a href='https://www.instagram.com/lorenabrandaosoueu/'>@lorenabrandaosoueu</a> seu progresso.<br>
			É muito bacana te conhecer e também suas vitórias ao aprender inglês.<br>
			<br>
			Um grande abraço da sua Teacher, <br>
			Lorena Brandão
			</p>";

		$mail->Body = $mailContent;

		// Attachments
		$mail->addAttachment('assets/arquivos/one_sentence_a_day.pdf'); // Add attachments   

		// Send email
		if(!$mail->send()) {
			echo 'A mensagem não pode ser enviada!';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			redirect('geral/agradece');
		}
	}
}
