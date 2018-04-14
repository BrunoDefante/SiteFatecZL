<!doctype html>
<html>
<head>
	<?php require 'compartilhado/head.php' ?>
	<link rel="stylesheet" type="text/css" href="css/bibliotecaStyle.css">
<title>Faculdade de Tecnologia</title>
</head>

<body ondragstart='return false'>
	
	<div class="container">
		<?php require 'compartilhado/cabecalho.php' ?>
		<div class="conteudo">
			<div class="emprestimos">
				<h1>Empréstimos</h1>
				<ul>
					<li>Empréstimo domiciliar (07 dias)</li>
					<li>Empréstimo local</li>
					<li>Empréstimo entre bibliotecas com instituições conveniadas (EEB)</li>
				</ul>
			
			
			</div>	
			
			<div class="reserva">
				<h1>Reserva</h1>
				<p><b>Deve ser feita no balcão de atendimento.</b> O usuário que fez a reserva será notificado por telefone, quando a obra estiver disponível. <b>O não comparecimento no prazo de 24 horas, libera a reserva para o próximo da lista.</b> Não havendo outros interessados, a obra retornará ao acervo.</p>
			</div>
			
			<div class="renovacao">
				<h1>Renovação</h1>
				<p><b>Deve ser feita pessoalmente no balcão do atendimento com o material em mãos.</b> Se houver reserva da obra a ser renovada ou atrasos de devolução e ausência de regularização de débitos não será possível a renovação.</p>
			</div>
			
			<div class="conforto">
				<h1>Conforto</h1>				
				<div class="icon_wifi"></div>
				
				<ul>
					<li>WI-FI</li>
					<li>Computadores para apoio à pesquisa</li>
					<li>Salas privativas para estudo</li>
					
				</ul>
			</div>
			
			<div class="cesta">
				<h1>Cesta(Circulação Especial com Sorteio Trazer e Apoiar)</h1>
				<p>Projeto de incentivo à leitura e estímulo à frequência dos usuários na Biblioteca e circulação pontual de livros. Sorteio semestral:</p>
				<ul>
					
					<li>1° semestre – cesta de Páscoa</li>
					<li>2° semestre – cesta de Natal</li>
					
				</ul>
			</div>
			
			<div class="social_biblioteca">
				<h1>Siga-nos nas redes sociais:</h1>
				<div class="btn_social">
					<a href="#" class="fb"><img src="img/icon/facebook-logo-button.png">Facebook </a>
					<a href="#" class="tw"><img src="img/icon/twitter-logo-button.png">Twitter </a>
				</div>
				
			</div>
		
			
			<?php require 'compartilhado/rodape.php' ?>
		</div>	
	</div>
	<script src="js/YoEffect.js"></script>
	<script src="js/secretaria.js"></script>
	<script src="js/compartilhado.js"></script>
</body>
</html>
