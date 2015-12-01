<?php require_once '../header.php';?>

<form action="javascript:void(0)">
	<p>Inserir perguntas e respostas ao Faq</p>
	<div>
		<label for="pergunta">Pergunta:</label> <textarea rows="4" cols="50" id="pergunta"></textarea>
	</div>
	<div>
		<label for="resposta">Resposta:</label> <textarea rows="4" cols="50" id="resposta"></textarea>
	</div>
	<div>
		<button onclick="inserirFaq()">Inserir</button>
	</div>
	<span></span>
</form>


<?php require_once '../footer.php';?>