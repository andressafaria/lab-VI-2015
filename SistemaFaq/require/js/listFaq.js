$(document).ready(function(){
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: 'require/jp/getDados.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			
			var faq = $('#faq');
	        
        	var line;
        	var tdIdFaq;
        	var tdFaqPergunta; 		   
        	var tdFaqResposta;
        	
        	for(var i = 0;i<dados.length;i++){
  
        		linePergunta		          = document.createElement("p");
        		lineResposta		          = document.createElement("p");
        		tdFaqPergunta                 = document.createElement("a");
        		tdFaqResposta                 = document.createElement("p");
        		
        		
        		
        		tdFaqPergunta.innerHTML 	      = dados[i].pergunta;
        		tdFaqResposta.innerHTML           = dados[i].resposta;
            	
            	
        		
        		linePergunta.appendChild(tdFaqPergunta);
            	lineResposta.appendChild(tdFaqResposta);
            	
            	faq.append(linePergunta);
            	faq.append(lineResposta);
            	faq.append('<br/>');
            	faq.append('<br/>');
            	
        	}
		}
	});
});
