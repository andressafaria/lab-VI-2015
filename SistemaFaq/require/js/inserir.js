$(document).ready(function(){
	$('#inserir').click(function(){
		alert("entrou");
		var dados = $('#cadFaq').serialize();
		
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: '../require/jp/jpInsert.php',
			async:'true',
			data: dados,
			success: function(res){
				alert('foi');
				
			}
		});
	});
})