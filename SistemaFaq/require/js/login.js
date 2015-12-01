function fctLogin(){
	//alert('testando');
	
	$.post('require/jp/jpLogin.php',
			{
				email:$('#eLogin').val(),
				senha:$('#sLogin').val(),
			},function(res){
				//alert(res);
				if(res)
					$('main form span').html(res);
				else
					//$('main form span').html('logado com sucesso');
					window.location.href='admin/';
				
			});
	
}
	