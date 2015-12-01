<?php require_once '../header.php';?>

<form id="cadFaq">
	<span class="msg-cad"></span>
	<p>Inserir perguntas e respostas ao Faq</p>
	<div>
		<label for="pergunta">Pergunta:</label> <textarea rows="4" cols="50" id="insertPergunta"  placeholder="Insira a pergunta"></textarea> 
	</div>
	<div>
		<label for="resposta">Resposta:</label> <textarea rows="4" cols="50" id="insertResposta" placeholder="Insrira a resposta"></textarea>
	</div>
	<div>
		<button onclick="inserir()">Inserir</button>
	</div>
	<span></span>
</form>


<?php require_once '../footer.php';?>