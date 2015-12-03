$(document).ready(function(){
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: '../require/jp/getDados.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			
			var list = $('#listPerguntas');
	        
        	var line;
        	var tdIdFaq;
        	var tdFaqPergunta; 		   
        	var tdFaqResposta;
        	
        	var idPergunta;
        	var pergunta;
        	var resposta;
        	
        	for(var i = 0;i<dados.length;i++){
  
        		idPergunta = dados[i].id;
        		pergunta = dados[i].pergunta;
        		resposta = dados[i].resposta;
        		
        		
        		linePergunta		          = document.createElement("p");
        		lineResposta		          = document.createElement("p");
        		tdFaqPergunta                 = document.createElement("a");
        		tdFaqResposta                 = document.createElement("p");
        		
        		tdFaqPergunta.innerHTML 	      = dados[i].pergunta;
        		tdFaqResposta.innerHTML           = dados[i].resposta;
        		
        		linePergunta.appendChild(tdFaqPergunta);
            	lineResposta.appendChild(tdFaqResposta);
            	
            	list.append(linePergunta);
            	list.append(lineResposta);
            	list.append('<button class="btn btn-default" onclick="btnEditar('+idPergunta+')">Editar</button>', list.append('<button class="btn btn-default" onclick="btnDeletar('+idPergunta+')">Deletar</button>'))
            	list.append('<br/>');
            	list.append('<br/>');
            	list.append('<br/>');
            	
        	}
		}
	});
});

function btnInserir(){
	//alert('testando');
	window.location.href='inserir.php';
}

function btnDeletar(id){
	//alert('Tem certeza que desja deletar esta pergunta?');
	var url = '../require/jp/deleteDados.php';
	var txt;
	var r = confirm("Tem certeza que deseja excluir esta pergunta!");
	if (r == true) {
		$.ajax({
			type:'GET',		//Definimos o método HTTP usado
			dataType: 'html',	//Definimos o tipo de retorno
			url: url+"?id="+id+"",//Definindo o arquivo onde serão buscados os dados
			success: function(dados){
		        alert('deletado com sucesso!');
		        location.reload();
		    },
		    error: function(e) {
		        alert('Error: '+e);
		    }  
		});
	} else {
	    alert ("Cancelado pelo usuario!");
	}
}

function btnEditar(id){
	//alert('Tem certeza que desja deletar esta pergunta?');
	var url = 'editar.php';

	//alert('Editado com sucesso!');
	window.location.href=url+"?id="+id+"";
	
}

//function btnEditar(id){
//	//alert('Tem certeza que desja deletar esta pergunta?');
//	var url = 'editar.php';
//	var txt;
//		$.ajax({
//			type:'GET',		//Definimos o método HTTP usado
//			dataType: 'html',	//Definimos o tipo de retorno
//			url: url+"?id="+id+"",//Definindo o arquivo onde serão buscados os dados
//			success: function(dados){
//		        alert('Editado com sucesso!');
//		        window.location.href='admin/';
//		    },
//		    error: function(e) {
//		        alert('Error: '+e);
//		    }  
//		});
//}
