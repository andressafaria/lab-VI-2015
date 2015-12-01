<?php

function __autoload($class) {require_once"{$class}.class.php";} //pega todas as classes php

abstract class ConDB{

	private $cnx;  // variavel com dados de conexao com o banco
	private function setConn()
	{
		return
		is_null($this->cnx)?  //só instancia se caso nao conter nada em $cnx
		        $this->cnx=new PDO("mysql:host=localhost;dbname=dbfaq","root","root"):
		        $this->cnx;
		
		       
	}			

	public function getConn(){
		return $this->setConn();
	}
}

//testes

//$crud = new CRUD;
//teste insert //$crud->insert('usuarios','nome=?, email=?, senha=?', array('andressa','andressa@faria.com','123')); 

//teste select 
//$sel=$crud->select('*','usuarios',' WHERE email=? && senha=? ',array('admin@univas.com.br', '202cb962ac59075b964b07152d234b70')); 
					//foreach ($sel as $reg) {
					//var_dump($reg);		
				//}

//teste update //$upd=$crud->update(
					//'usuarios','nome=?, email=?, senha=? WHERE id=?', 
					//array('andressa','andressa@univas.com','123',2)
				//);

// teste delete // $crud->delete('usuarios', 'WHERE id=?', array(8));

//teste email
//$vle=new ValidaEmail;
//var_dump($vle->setValidaEmail('jonathan@univas.com.br'));

//teste senha
//$vPass=new ValidaSenha();
//var_dump($vPass->setValidaSenha('1234'))

//teste login
//$lgn = new Login();
//var_dump($lgn->setLogin('admin@univas.com.br', '123'));

?>