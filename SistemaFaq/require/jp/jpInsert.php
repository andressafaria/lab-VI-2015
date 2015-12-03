<?php 
require_once "/../class/ConDB.class.php";

$pergunta=$_POST['pergunta'];
$resposta=$_POST['resposta'];

$crud=new CRUD();
$crud->insert('faq','pergunta=?, resposta=?', array($pergunta,$resposta));



print $pergunta;

?>