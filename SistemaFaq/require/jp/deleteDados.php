<?php 
require_once "/../class/ConDB.class.php";

$idpergunta=$_GET['id'];

$crud=new CRUD();
$crud->delete('faq',' WHERE id=? ', array($idpergunta));



//print $idpergunta;

?>