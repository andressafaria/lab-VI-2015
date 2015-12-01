function inserirFaq(){
	$.post('require/jp/jpFaqList.php',
			{
				pergunta:$('#pergunta').val(),
				resposta:$('#resposta').val(),
			},function(res){
				//alert(res);
				if(res)
					$('main form span').html(res);
				else
					$('main form span').html('Cadastrado com sucesso');
					window.location.href='admin/';
				
			});
	

}