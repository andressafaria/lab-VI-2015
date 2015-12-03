<?php 
require_once "../require/class/ConDB.class.php";

$idpergunta=$_GET['id'];

//Consultando banco de dados
$crud = new CRUD();
//$lista=$crud->select(' * ',' faq ',' WHERE id=? ',array($idpergunta));

$select = mysql_query("select * from faq WHERE id= '".$idpergunta."'") or die(mysql_error());

while ($resultado = mysql_fetch_array($select)){
		$pergunta     		= $resultado["pergunta"];
		$resposta     		= $resultado["resposta"];	
}
?>

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sistema de FAQ</title>
	
	<link type="text/css" rel="stylesheet" href="../require/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="../require/font-awesome/css/font-awesome.min.css">
	
	<script type="text/javascript" src="../require/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../require/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="../require/js/login.js"></script>
	
	<script type="text/javascript" src="../require/js/faq.js"></script>
	<script type="text/javascript" src="../require/js/inserir.js"></script>

</head>
<body>

	<div class="container">

		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">

<form id="cadFaq" method="POST">
	
	<p>Editar perguntas e respostas ao Faq</p>
	<div>
		<label for="pergunta">Pergunta:</label> <textarea rows="4" cols="50" id="editPergunta"><?php echo $pergunta;?></textarea> 
	</div>
	<div>
		<label for="resposta">Resposta:</label> <textarea rows="4" cols="50" id="editResposta" ><?php echo $resposta;?></textarea>
	</div>
	<div>
		<button onclick="inserir()">Inserir</button>
	</div>
	<span></span>
</form>


			</div>
	
	</div>


	<span></span>
	</nav>

	<br>
	<br>

	<div class="container">
	
	<div class="page-header">
        <h1>Painel Administrativo</h1>
</div>

	<button class="btn btn-default" onclick="btnInserir()">Inseir</button>
	
	</div>

	<footer> </footer>
	</div>
	<!-- container da pagina -->	

</body>
</html>