<!DOCTYPE html>
<html >
<head>
	
	<?php require 'compartilhado/head.php' ?>
	
  	<link rel="stylesheet" type="text/css" href="css/cursosStyle.css">
  	<title>Cursos</title>

</head>

	<body>		
		<div class="camada_popup_descricao">
			<div class="div_click">
				
				
			</div>
			<div class="blur_coordenador movimento">
			
			</div>
			<div class="info_coordenador movimento">
				<div class="div_fechar">
					<p class="btn_fechar_info">Fechar</p>
				<span class="span_fechar_info"></span>
					
				</div>
				<p class="titulo_coordenador">Coordenador</p>
				
				<ul class="ul_coordenador">
					
					<p class="mod">Presencial</p>
					<li class="li_coordenador">Nome aqui</li>
					<li class="li_email">E-mail aqui</li>
					
					<p class="mod ead">EAD</p>
					<li class="li_coordenador_ead ead">Nome ead</li>
					<li class="li_email_ead ead">E-mail ead</li>
				</ul>
				
			
			</div>
				
			
			<div class="popup_descricao">
								
				
				<div class="div_titulo_popup">
					<p class="letras_popup">Título Aqui</p>
					<hr/>
				</div>			
				
				<div class="div_imagem_popup">
				
				</div>			
				
				<div class="div_descricao">
					<div class="margem">


					</div>
				
				</div>
				
				
				
				<div class="rodape_descricao">
					
					<hr class="linha_rodape"/>
					
					<div class="div_coordenador">						
						<p class="txt">Coordenador do Curso</p>
						<div class="span_abs c">
							<span class="span_rodape"></span>
						</div>
					</div>

					<div class="div_grade">
						<p class="txt">Grade do Curso</p>
						<div class="span_abs g">
							<span class="span_rodape"></span>
						</div>
					</div>
				</div>	
			</div>		
			
		</div>
		
		
		
		<div class="container">
			
			<?php require 'compartilhado/cabecalho.php' ?>
			
			<div class="conteudo">

				<div class="box_cursos">

					<div class="cursos">
						<div class="blur-img ads"></div>
						<div class="letras">
							<p class="letra analise">A.D.S</p>	
						</div>				
						
						<div class="divDetalhes">
							<p class="aviso btnDetalhes" tabindex="0">Ver Detalhes</p>
							<span></span>

						</div>

						<div class="info">
							<p class="aviso duracao">Duração: 6 Semestres</p>
							<p class="aviso modalidade">Modalidade: Presencial</p>
						</div>

						<div class="sobrepor"></div>
					</div>

					<div class="cursos comex">
						<div class="blur-img comex"></div>
						<div class="letras">
							<p class="letra comer">Comércio Exterior</p>	
						</div>
						
						<div class="divDetalhes">
							<p class="aviso btnDetalhes" tabindex="1">Ver Detalhes</p>
							<span></span>
						</div>
						
						<div class="info">
							<p class="aviso duracao">Duração: 6 Semestres</p>
							<p class="aviso modalidade">Modalidade: Presencial</p>
						</div>

						<div class="sobrepor"></div>					
					</div>

					<div class="cursos gest">
						<div class="blur-img gest"></div>
						<div class="letras">
							<p class="letra gestao">Gestão Empresarial</p>
						</div>
						<div class="divDetalhes">
							<p class="aviso btnDetalhes" tabindex="2">Ver Detalhes</p>
							<span></span>
						</div>
						
						<div class="info">
							<p class="aviso duracao">Duração: 6 Semestres</p>
							<p class="aviso modalidade">Modalidade: Presencial, EAD</p>
						</div>
						
						<div class="sobrepor"></div>
					</div>

					<div class="cursos logist">		
					<div class="blur-img logist"></div>				
						<div class="letras">
							<p class="letra logistica">Logística</p>	
						</div>
									
						<div class="divDetalhes">
							<p class="aviso btnDetalhes" tabindex="3">Ver Detalhes</p>
							<span></span>
						</div>
						
						<div class="info">
							<p class="aviso duracao">Duração: 6 Semestres</p>
							<p class="aviso modalidade">Modalidade: Presencial</p>
						</div>
						
						<div class="sobrepor"></div>
					</div>

					<div class="cursos polimeros">
						<div class="blur-img polimeros"></div>
						<div class="letras">
							<p class="letra polim">Polímeros</p>
						</div>
						
						<div class="divDetalhes">
							<p class="aviso btnDetalhes" tabindex="4">Ver Detalhes</p>
							<span></span>
						</div>
						
						<div class="info">
							<p class="aviso duracao">Duração: 6 Semestres</p>
							<p class="aviso modalidade">Modalidade: Presencial</p>
						</div>
						
						<div class="sobrepor"></div>
					</div>
				</div>

				<?php require 'compartilhado/rodape.php' ?>
			</div>

	</div>
</body>	

<script src="js/YoEffect.js"></script>
<script src="js/cursos.js"></script>
<script src="js/compartilhado.js"></script>

</html>