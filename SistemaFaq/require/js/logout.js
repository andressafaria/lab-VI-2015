function fctLogout(){
	//alert('testando');
	
	$.post('require/jp/jpLogin.php',
			{
				email:$('#eLogin').val(),
				senha:$('#sLogin').val(),
			},function(res){
				if(isset($_SESSION['logado'])){
    // se você possui algum cookie relacionado com o login deve ser removido
    			session_destroy();
    			header("location:index.php");
    			exit();
};
			
			});
	
}
	