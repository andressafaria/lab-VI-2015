$(document).ready(function(){
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: 'require/jp/getDados.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			
			//if(dados!=null){
				//alert('contem dados');
			//}
			var table = $('#listFaq');
	        
        	var line;
        	var tdIdFaq;
        	var tdFaqPergunta; 		   
        	var tdFaqResposta;   
        	        	
        	for(var i = 0;i<dados.length;i++){
  
        		line		          = document.createElement("tr");
        		tdIdFaq 		      = document.createElement("td");
        		tdFaqPergunta         = document.createElement("td");
        		tdFaqResposta         = document.createElement("td");
        		         	
            	
        		tdIdFaq.innerHTML                 = dados[i].id;
        		tdFaqPergunta.innerHTML 	      = dados[i].pergunta;
        		tdFaqResposta.innerHTML           = dados[i].resposta;
            	
            	
            	line.appendChild(tdIdFaq);
            	line.appendChild(tdFaqPergunta);
            	line.appendChild(tdFaqResposta);
            	
            	table.append(line);
            
        	}
		}
	});
});
