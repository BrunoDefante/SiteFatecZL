<!doctype html>
<html>
<head>
	<?php require 'compartilhado/head.php' ?>
	<link rel="stylesheet" type="text/css" href="css/secretariaStyle.css">
<title>Faculdade de Tecnologia</title>
</head>

<body ondragstart='return false'>
	
	<div class="container">
		<?php require 'compartilhado/cabecalho.php' ?>
		<div class="conteudo">
			<div class="horarioAtendimento">
				<h1>HORÁRIO DE ATENDIMENTO</h1>
				<ul>
					<li>Manhã - 09h às 12h</li>
					<li>Tarde - 15h30 às 17h30</li>
					<li>Noite - 18h30 às 20h30</li>
				</ul>
			
			</div>
			
			<div class="solicitacao">
				<h1>SOLICITAÇÕES ONLINE</h1>
				<p>Solicitações online de documentação deverão ser solicitadas por e-mail: <b>fateczlsolicitacaodedocumento@gmail.com  <br></b>
					Os formulários deverão ser preenchidos, datados, assinados e escaneados.</p>
			
			</div>
			
			<div class="formularios_download">
				<h1>FORMULÁRIOS DA SECRETARIA (DOWLOAD)</h1>
				<div class="downloads">
					
					<div class="down left bom">
						<div class="shape bom">							
							<a >Formulário bilhete BOM (DOC)</a>
							<div class="btn_download"></div>
							<div class="tamanho_arquivo doc">
								<p>(143 KB)</p>
							</div>
							<div class="div_span">
								<span></span>
							</div>
						</div>
						
					</div>
					
					<div class="down right bilhete_unico">
						<div class="shape bilhete_unico">
							<a >Formulário Bilhete Único (DOC)</a>
							<div class="btn_download"></div>
							<div class="tamanho_arquivo doc">
								<p>(128 KB)</p>
							</div>
							<div class="div_span">
								<span></span>
							</div>
						</div>
						
					</div>
					
					<div class="down left req_coordenador">
						<div class="shape req_coordenador">
							<a >Requerimento ao coordenador (DOC)</a>
							<div class="btn_download"></div>
							<div class="tamanho_arquivo doc">
								<p>(126 KB)</p>
							</div>
							<div class="div_span">
								<span></span>
							</div>
						</div>
						
					</div>
					
					<div class="down right req_diretor">
						<div class="shape req_diretor">
							<a >Requerimento ao diretor(DOC)</a>
							<div class="btn_download"></div>
							<div class="tamanho_arquivo doc">
								<p>(113 KB)</p>
							</div>
							<div class="div_span">
								<span></span>
							</div>
						</div>
						
					</div>
					
					<div class="down left req_data_prova">
						<div class="shape req_data_prova">
							<a >Requerimento data de prova (DOC)</a>
							<div class="btn_download"></div>
							<div class="tamanho_arquivo doc">
								<p>(140 KB)</p>
							</div>
							<div class="div_span">
								<span></span>
							</div>
						</div>
						
					</div>
					
					<div class="down right req_global">
						<div class="shape req_global">
							<a >Requerimento Global (DOC)</a>
							<div class="btn_download"></div>
							<div class="tamanho_arquivo doc">
								<p>(5,74 MB)</p>
							</div>
							<div class="div_span">
								<span></span>
							</div>
						</div>
						
					</div>
					
					<div class="down left req_secretaria">
						<div class="shape req_secretaria">
							
							<a >Requerimento para a secretaria (DOC)</a>
							<div class="btn_download"></div>
							<div class="tamanho_arquivo doc">
								<p>(125 KB)</p>
							</div>
							<div class="div_span">
								<span></span>
							</div>
							
							
						</div>
						
					</div>
					
					<div class="down right req_documentos">
						<div class="shape req_documentos">
							<a >Requerimento solicitação de documentos (DOC)</a>
							<div class="btn_download"></div>
							<div class="tamanho_arquivo doc">
								<p>(144 KB)</p>
							</div>
							<div class="div_span">
								<span></span>
							</div>
						</div>
						
					</div>
					
					<div class="down left reg_unificado">
						<div class="shape reg_unificado">
							<a >Regimento Unificado (PDF)</a>
							<div class="btn_download"></div>
							<div class="tamanho_arquivo pdf">
								<p>(89 KB)</p>
							</div>
							<div class="div_span">
								<span></span>
							</div>
						</div>
						
					</div>
					
					<div class="down right graduacao">
						<div class="shape graduacao">
							<a >Regulamento de Graduação (PDF)</a>
							<div class="btn_download"></div>
							<div class="tamanho_arquivo pdf">
								<p>(97 KB)</p>
							</div>
							<div class="div_span">
								<span></span>
							</div>
						</div>
						
					</div>
					
					<div class="down left reg_resciplinar">
						<div class="shape reg_resciplinar">
							<a >Regime Disciplinar do Corpo Discente das FATECs (PDF)</a>
							<div class="btn_download"></div>
							<div class="tamanho_arquivo pdf">
								<p>(91 KB)</p>
							</div>
							<div class="div_span">
								<span></span>
							</div>
						</div>
						
					</div>		
				</div>
			</div>
			
			<div class="funcionarios">
				<h1>Funcionários</h1>
				<ul>
					<li><b>Camila Miranda</b> - Diretora Acadêmica</li>
					<li><b>Vera Lúcia</b> - Assistente</li>
					<li><b>Aline</b> - Auxiliar Administrativo</li>
					<li><b>Tatiane</b> - Auxiliar Administrativo</li>			
				</ul>
			</div>
			
			<div class="prazos">
				<h1>PRAZOS PARA ENTREGA DE DOCUMENTOS</h1>
				
				<div class="tabela">
					<div class="cabecalho_table">
						<div class="div_doc">
							<h2>DOCUMENTO</h2>
						
						</div>
						
						<div class="div_prazo">
							<h2>PRAZO (DIAS ÚTEIS)</h2>
							
						</div>
					</div>
					
					<table id="tabelaspec">
						<!--<tr>
						<th class="titulo">DOCUMENTO</th>
						<th class="titulo">PRAZO (DIAS ÚTEIS)</th>
						</tr>-->
						<tr>
							<td class="ce">Atestado de Matrícula</td>
							<td class="cd">3</td>
						</tr>
						<tr>
							<td class="ce">Atestado de Matrícula com disciplina e frequência</td>
							<td class="cd">3</td>
						</tr>
						<tr>
							<td class="ce">Carteira de Identidade Estudantil – 2ª via</td>
							<td class="cd">4</td>
						</tr>
						<tr>
							<td class="ce">Conteúdo Programático de disciplinas</td>
							<td class="cd">5</td>
						</tr>
						<tr>
							<td class="ce">Declarações em geral para ex-alunos</td>
							<td class="cd">3</td>
						</tr>
						<tr>
							<td class="ce">Histórico Escolar para Transferência</td>
							<td class="cd">5</td>
						</tr>
						<tr>
							<td class="ce">Histórico Escolar para aluno</td>
							<td class="cd">5</td>
						</tr>
						<tr>
							<td class="ce">Histórico Escolar para ex-aluno</td>
							<td class="cd">5</td>
						</tr>
						<tr>
							<td class="ce">Ofícios e Cartas de Apresentação</td>
							<td class="cd">5</td>
						</tr>
						<tr>
							<td class="ce">Outros</td>
							<td class="cd">10</td>
						</tr>
					</table>
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