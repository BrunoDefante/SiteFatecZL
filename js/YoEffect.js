function call_effect(nome_componente, nome_span){
	$(nome_componente).hover(function(){
		$(this).parent().find(nome_span).css("margin-left", "0px");
		$(this).parent().find(nome_span).css("width","100%");
		$(this).parent().find(nome_span).css("height", "3px");
		
		}, function(){
			$(this).parent().find(nome_span).css("margin-left", "50%");
			$(this).parent().find(nome_span).css("width","0px");
			$(this).parent().find(nome_span).css("height", "0px");   
			
			}
	);
	
	
}



