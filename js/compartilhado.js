var content = document.querySelector('.conteudo');
var duplicate = content.cloneNode(true);
var contentBlurred = document.createElement('div');
contentBlurred.className = 'conteudo_blur';
contentBlurred.appendChild(duplicate);

var blur = document.querySelector('#blur');
blur.appendChild(contentBlurred);

$(function () {
	
	$(".conteudo_blur").css("margin-top", "-"+$(this).scrollTop()+"px");
	
	$(window).scroll(function () {
	
		$(".conteudo_blur").css("margin-top", "-"+$(this).scrollTop()+"px");

	});

});

$('.institucional').click(function(){
	
	
		$(this).parent().find('.sub_insti').show();
		$('.sub_insti').css('width', '150px');
		$('#fecha_menu').show();
	

		setTimeout(function(){      
			$('.sub_insti').css('height', '220px');
		}, 300);
	
		$('.sub_insti li').css('visibility', 'visible');
		setTimeout(function(){
			
			$('.sub_insti li').css('opacity', '1');
		}, 600);
		
		});


$('#fecha_menu').click(function(){
	$(this).hide();
	$('.sub_insti').css('height', '0px');
	$('.sub_insti li').css('opacity', '0');
	setTimeout(function(){
		
		$('.sub_insti').css('width', '0px');
		$('.sub_insti li').css('visibility', 'hidden');
    }, 300);
});

/*$('.btn_hist').click(function(){
	window.location.href = 'index.php';
	
	var topoHt = $('#cabecalho').height();
	
	$("html, body").animate({
                   scrollTop: $(".descricao").offset().top-topoHt
              }, 1000);
	
});

$('.btn_local').click(function(){
	var topoHt = $('#cabecalho').height();
	
	$("html, body").animate({
                  // scrollTop: $(".localizacao").offset().top-topoHt
              }, 1000);
	
});*/





