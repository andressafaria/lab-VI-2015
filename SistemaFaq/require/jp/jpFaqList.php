<?php 

require_once "../class/ConDB.class.php";

extract($_POST)

$lgn=new insert();
print $lgn->setLogin($_POST['email'], $_POST['senha']);

?>