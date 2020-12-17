<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12 logo-col">
				<img class="logo" src="<?php echo base_url('assets/imagens/logo.png')?>" >
			</div>
			<div class="col-lg-6 col-12">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nqi6a6y40S4" webkitallowfullscreen="1" mozallowfullscreen="1" allowfullscreen="1" frameborder="0" width="400px" height="260px"></iframe>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6 col-12">
				<div class="texto">
					<h2>
						Dê um up no seu inglês
						praticando as 60 frases 
						deste ebook, usadas 
						diarimente pelos nativos.
					</h2>
				</div>
				<!-- Formulário -->
				<form class="form-group" action="<?php echo site_url('geral/gravar') ?>" method="POST" >
					<!-- <label for="">Nome:</label><br> -->
					<input class="form-control" style="height: 4em; border-radius: 1em;" type="text" name="text_nome" placeholder="Coloque seu nome" required><br>

					<!-- <label for="">Telefone:</label><br> -->
					<input class="form-control" style="height: 4em; border-radius: 1em;" type="email" name="text_email" placeholder="Digite aqui seu melhor email" required><br><br>

					<input type="submit" style="height: 4em; border-radius: 1em;" class="btn botao btn-lg btn-block" value="QUERO RECEBER!">
				</form>
			</div>
			<div class="col-lg-6 col-12">
				<img class="foto" src="<?php echo base_url('assets/imagens/foto.png')?>" alt="">
			</div>
		</div>
	</div>
</body>
