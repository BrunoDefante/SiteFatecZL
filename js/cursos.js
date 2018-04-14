var index;


	

$(".cursos").hover(function(){
	//alert($(this).find(".letra").css("margin-top"));
	$(this).find(".blur-img").css("-webkit-filter", "blur(35px)");
	$(this).find(".letra").css("margin-top", "5px");
	$(this).find(".letra").css("font-size", "26pt");
	$(this).find(".aviso").css("color", "#fff");
    }, function() {

    $(this).find(".sobrepor").css("background", "transparent");
    $(this).find(".letra").css("margin-top", "200px");
    $(this).find(".letra").css("font-size", "42pt");
    $(this).find(".blur-img").css("-webkit-filter", "blur(0px)");
    $(this).find(".aviso").css("color", "transparent");
    }
);



call_effect('.btnDetalhes', 'span');
call_effect('.txt', '.span_rodape');
call_effect('.btn_fechar_info', '.span_fechar_info');



$(".btnDetalhes").click(function(){	
	index = this.tabIndex;
	
	var vet_cursos = [
		{imagem: 'img/ads.jpg', 
		 titulo: 'A.D.S', 
		 detalhes: 'O Tecnólogo em Análise e Desenvolvimento de Sistemas analisa, projeta, documenta, especifica, testa, implanta e mantém sistemas computacionais de informação. Esse profissional trabalha, também, com ferramentas computacionais, equipamentos de informática e metodologia de projetos na produção de sistemas. Raciocínio lógico, emprego de linguagens de programação e de metodologias de construção de projetos, preocupação com a qualidade, usabilidade, robustez, integridade e segurança de programas computacionais são fundamentais à atuação desse profissional'},
		
		{imagem: 'img/comex.jpg', 
		 titulo: 'Comércio Exterior', 
		 detalhes:'O Tecnólogo em Comércio Exterior gerencia operações de comércio exterior, tais como: transações cambiais, despacho e legislação aduaneira, exportação, importação, contratos e logística internacional. Prospecta e pesquisa mercados, define plano de ação, negocia e executa operações legais, tributárias e cambiais inerentes ao processo de exportação e importação. Além disso, controla fluxos de embarque e desembarque de produtos, providencia documentos e identifica os melhores meios de transporte, de forma a otimizar os recursos financeiros e humanos para o comércio exterior.'},
		
		{imagem: 'img/gestao.jpg', 
		 titulo: 'Gestão Empresarial', 
		 detalhes:'Tecnólogo em Gestão Empresarial (Processos Gerenciais) elabora e implementa planos de negócios, utilizando métodos e técnicas de gestão na formação e organização empresarial especificamente nos processos de comercialização, suprimento, armazenamento, movimentação de materiais e no gerenciamento de recursos financeiros e humanos. A habilidade para lidar com pessoas, capacidade de comunicação, trabalho em equipe, liderança, negociação, busca de informações, tomada de decisão em contextos econômicos, políticos, culturais e sociais distintos, são requisitos importantes a esse profissional.'},
		
		{imagem: 'img/logistica.jpg', 
		 titulo: 'Logística', 
		 detalhes:'O Tecnólogo em Logística é o profissional especializado em armazenagem, distribuição e transporte. Atuando na área logística de uma organização, planeja e coordena a movimentação física e de informações sobre as operações multimodais e intermodais de transporte, incluindo o gerenciamento de pessoas para proporcionar fluxo otimizado ao longo da cadeia de suprimentos. Ele projeta e gerencia redes de distribuição e unidades logísticas, estabelecendo processos de compras, identificando fornecedores, negociando e estabelecendo padrões de recebimento, armazenamento, movimentação e embalagem de materiais. Ocupa-se ainda do inventário e gerenciamento estratégico de estoques, sistemas de abastecimento, programação, monitoramento do fluxo de pedidos, cálculo de custos de fretes e transbordos, sistemas de tráfego e gerenciamento de transportes urbano de carga e passageiros, que envolvam os modais rodoviário, ferroviário, aeroviário, dutoviário e aquaviário.'},
		
		{imagem: 'img/polimeros.jpg', 
		 titulo: 'Polímeros', 
		 detalhes:'O Tecnólogo em Polímeros é um profissional habilitado a atuar nos processos de transformação e síntese de materiais poliméricos, desenvolvimento de produtos em diferentes segmentos como, por exemplo, setor automotivo e de embalagens. Avalia o desempenho de equipamentos e processos, interpreta fluxogramas de processos, desenvolve métodos de análises laboratoriais para caracterização dos materiais poliméricos, tanto de materiais termoplásticos quanto termofixos. O monitoramento da qualidade e dos processos de reciclagem envolvidos; a identificação e acompanhamento das variáveis relevantes, considerando os aspectos ambientais, são também funções desse profissional.'}
	];
	
	
	 $(".camada_popup_descricao").show();
	
	setTimeout(function(){
        $(".camada_popup_descricao").css("opacity", "100");
		$("body").css("overflow", "hidden");
		
		$(".letras_popup").html(vet_cursos[index].titulo);
		
		$(".div_imagem_popup").css("background-image", "url(" + vet_cursos[index].imagem +")");
		$(".margem").html(vet_cursos[index].detalhes);
		
		$(".container").css("transition", "1s");
		$(".container").css("-webkit-filter", "blur(30px)");
		$(".container").css("background", "rgba(220, 220, 220, 0.7)");
		
		
    }, 600);
});

//retira a div descrições
$(".div_click").click(function(){
	$(".camada_popup_descricao").css("opacity", "0");	
	$(".container").css("-webkit-filter", "blur(0px)");
	$(".container").css("background", "transparent");
	
	setTimeout(function(){
		$(".camada_popup_descricao").hide();
		$("body").css("overflow", "auto");
		$('.movimento').css('opacity', '0');
		$('.movimento').css('display', 'none');
		$('.movimento').css('margin-top', '520px');
	}, 1000)
	
	
});

// atualiza a data do rodapé
hoje = new Date();
ano = hoje.getFullYear();
$(".direito").html(ano + " " + "© Todos os direitos reservados.")

//Realiza a cópia da div para poder fazer o efeito blur
var content = document.querySelector('.popup_descricao');
var duplicate = content.cloneNode(true);
var contentblurred = document.createElement('div');
contentblurred.className = 'copia_blur';
contentblurred.appendChild(duplicate);

var blur = document.querySelector('.blur_coordenador');
blur.appendChild(contentblurred);

var vet_coordenador = [
		{nome: 'Profº Especialista Luciano Francisco de Oliveira',  
		 email: 'f111ads@cps.sp.gov.br',
		 id: '0'},
		
		{nome: 'Profº. Doutor Carlos Alberto Di Lorenzo', 
		 email:'coord.comex.zl@fatec.sp.gov.br',
		 id: '1'},
		
		{nome: 'Profº Mestre José Abel de Andrade Baptista', 
		 email:'coord.empresarial@fatec.sp.gov.br',
		 nome_ead: 'Profª Especialista Valéria Rufino Maiellaro',
		 email_ead: 'gestao.ead@fatec.sp.gov.br',
		 id: '2'},
		
		{nome: 'Profº Mestre João Roberto Maiellaro', 
		 email:' f111logistica@cps.sp.gov.br',
		 id: '3'},
		
		{nome: 'Profº Doutor Danilo Marin Firmino', 
		 email:'f111polimeros@cps.sp.gov.br',
		 id: '4'}
		];

var vet_grade = [{link: 'grade/matriz_curricular_ADS.pdf'}, 
				 {link: 'grade/matriz_curricular_COMEX.pdf'}, 
				 {link: 'grade/matriz_curricular _GestãoEmpresarial.pdf'}, 
				 {link: 'grade/matriz_curricular_Logística.pdf'}, 
				 {link: 'grade/matriz_curricular_Polímeros.pdf'}
				];


$('.div_grade').click(function(){
	window.open(vet_grade[index].link, '_blank');
});

$(".div_coordenador").click(function(){
	
	//alert(index);
	
	$('.li_coordenador').html(vet_coordenador[index].nome);
	$('.li_email').html(vet_coordenador[index].email);
	
	if(index === 2){
		$('.ead').show();
		$('.li_coordenador_ead').html(vet_coordenador[index].nome_ead);
		$('.li_email_ead').html(vet_coordenador[index].email_ead);
	}else{
		$('.ead').hide();
	}
	
	$('.movimento').show();
	
	setTimeout(function(){
        $('.movimento').css('opacity', '100');
		$('.movimento').css('margin-top', '80px')
		
    }, 500);
		
});


$('.btn_fechar_info').click(function(){
	 $('.movimento').css('margin-top', '520px');
		
		
	setTimeout(function(){      
		$('.movimento').css('opacity', '0');
		$('.movimento').css('display', 'none');
    }, 500);
	
});

































