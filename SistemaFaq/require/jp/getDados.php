<?php

require_once "../class/ConDB.class.php";


//Consultando banco de dados
$crud = new CRUD();
$lista=$crud->select(' * ',' faq ',' ',array('')); 

//grava resultado no vetor
foreach ($lista as $reg) {
	$vetor[] = array_map('utf8_encode', $reg);
}



//Passando vetor em forma de json
echo json_encode($vetor);

?>