<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Hoteis extends CI_Model{

		private $dados_hoteis;

		// =========================================================================
		// construtor
		function __construct() {

			parent::__construct();

			// dados do hotel
			$this->dados_hoteis = [
				// Hotel 1
				[
					'nome_hotel' => 'Hotel Maravilhoso 5*',
					'descricao' => 'Situado junto à praia com 500 quartos e serviço TI.',
					'imagem' => 'hotel_1.jpg'
				],
				// Hotel 2
				[
					'nome_hotel' => 'Hotel Esplendor 4*',
					'descricao' => 'Aqui come e bebe sem parar.',
					'imagem' => 'hotel_2.jpg'
				],
				// Hotel 3
				[
					'nome_hotel' => 'Hotel Grandioso 5*',
					'descricao' => 'Recepção aberta 24 horas por dia... e mais 3 horas à noite.',
					'imagem' => 'hotel_3.jpg'
				],
				// Hotel 4
				[
					'nome_hotel' => 'Hotel Espetáculo 5*',
					'descricao' => 'O melhor hotel do Mundo, ou talvez não',
					'imagem' => 'hotel_4.jpg'
				],
			];

		}

		// =========================================================================
		public function imagensHoteis() {
			
			//Retorna as imagens dos hoteis
			$imagens = [];
			foreach($this->dados_hoteis as $hotel) {
				array_push($imagens, $hotel['imagem']);
			}

			return $imagens;
		}

		public function dados_do_hotel($id) {
			// retorna os dados do hotel escolhido
			return $this->dados_hoteis[$id];
		}
	}

?>


