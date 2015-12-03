function inserir(){
	alert('testando');
	
	$.post('../require/jp/jpInsert.php',
			{
				pergunta :$('#insertPergunta').val(),
				resposta :$('#insertResposta').val()
			},function(res){
				alert(res);
				if(res)
					$('div span').html(res);
				else
					//$('main form span').html('logado com sucesso');
					window.location.href='admin/';
				
			});
	
}
