var content = document.querySelector('.camada_mapa');
var duplicate = content.cloneNode(true);
var contentBlurred = document.createElement('div');
contentBlurred.className = 'conteudo_mapa';
contentBlurred.appendChild(duplicate);

var blur = document.querySelector('.mapa_shadow');
blur.appendChild(contentBlurred);
$(function () {

	if($(window).scrollTop() < $(".fachada").height()-70)
		black();
	else
		white();
	
	$(window).scroll(function () {
	
		if($(this).scrollTop() < $(".fachada").height()-70){
			black();
		}else{
			white();
		}

	});

});

function black(){
	
	$("#blur").css("opacity", "0");
	$("#cor_cabecalho").css("background", "transparent");
	$("#cabecalho").css("box-shadow", "8px 0px 8px rgba(0,0,0,0)");
	$("#sub_menu li a").css("color", "#fff");
	$("#sub_menu li label").css("background", "url(img/lupa.png)");
	$("#sub_menu li label").css("background-size", "100%");
	$("#sub_menu li label").css("background-repeat", "no-repeat");
	$("#sub_menu li label").css("background-position", "center");
	$('.sub_insti').css('background', 'rgba(255,255,255,0.1)')


}

function white(){

	$("#blur").css("opacity", "1");
	$("#cor_cabecalho").css("background", "rgba(246,246,246,.6)");
	$("#cabecalho").css("box-shadow", "8px 0px 8px rgba(0,0,0,.2)");
	$("#sub_menu li a").css("color", "rgba(186, 48, 64, .8)");
	$("#sub_menu li label").css("background", "url(img/lupa_red.png)");
	$("#sub_menu li label").css("background-size", "100%");
	$("#sub_menu li label").css("background-repeat", "no-repeat");
	$("#sub_menu li label").css("background-position", "center");
	$('.sub_insti').css('background', 'rgba(235,235,235,0.6)')
	

}