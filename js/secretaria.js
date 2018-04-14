// JavaScript Document

$('.formularios_download a').hover(function(){
	//call_effect('.shape a', 'span');
	
});
 
//realiza o download dos documentos
$('.down').click(function(){
	var index = $(this).index();
	var vet_documents = [{link:'documentos_secretaria/bilhete-bom---formulário.doc'},
						{link:'documentos_secretaria/bilhete unico - formulário.doc'},
						{link:'documentos_secretaria/Requerimento ao coordenador.doc'},
						{link:'documentos_secretaria/Requerimento ao Diretor.docx'},
						{link:'documentos_secretaria/Requerimento Data de Prova.doc'},
						{link:'documentos_secretaria/requerimento-global.doc'},
						{link:'documentos_secretaria/Requerimento Secretaria.doc'},
						{link:'documentos_secretaria/Requerimento- Solicitação de Documentos.doc'},
						{link:'documentos_secretaria/regimento_unificado.pdf'},
						{link:'documentos_secretaria/regulamento_de_graduacao.pdf'},
						{link:'documentos_secretaria/Deliberação CEETEPS 39_2017-12-14 (002).pdf'}
						];
	
	window.open(vet_documents[index].link, '_blank');
	
	
});


   
$('td').hover(function(){
	$(this).parent().find('.cd').css('background', '#dadada');
	$(this).parent().find('.ce').css('background', '#dadada');
}, function(){
	$('.cd').css('background', '#f5f5f5');
	$('.ce').css('background', '#f5f5f5');
});

