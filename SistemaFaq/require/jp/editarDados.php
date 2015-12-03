<?php 
require_once "/../class/ConDB.class.php";

$idpergunta=$_POST['id'];
$pergunta=$_POST['pergunta'];
$resposta=$_POST['resposta'];

$crud=new CRUD();
$crud->delete('faq',' WHERE id=? ', array($idpergunta));



//print $idpergunta;

?>