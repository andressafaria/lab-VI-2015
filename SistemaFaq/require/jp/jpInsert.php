<?php 
require_once "/../class/ConDB.class.php";

$pergunta=$_POST['insertPergunta'];
$resposta=$_POST['insertResposta'];

echo $pergunta;
echo $resposta;

$crud=new CRUD();
$crud->insert('faq','pergunta=?, resposta=?', array($pergunta,$resposta));



//print $pergunta;

?>