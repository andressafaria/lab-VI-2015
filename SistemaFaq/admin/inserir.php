<?php require_once 'header.php';?>

<form action="javascript:void(0)">
	<div class="page-header">
			<h1>Inserir perguntas e respostas ao Faq</h1>
	</div>
	<div>
		<label for="pergunta">Pergunta:</label> <textarea required="required" rows="4" cols="50" id="pergunta"></textarea>
	</div>
	<div>
		<label for="resposta">Resposta:</label> <textarea  required="required" rows="4" cols="50" id="resposta"></textarea>
	</div>
	<div>
		<button class="btn btn-default" onclick="inserirFaq()">Inserir</button>
		<button class="btn btn-default" onclick="window.history.back();">Voltar</button>
	</div>
	<span></span>
</form>


<?php require_once '../footer.php';?>