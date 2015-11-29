<?php
	class ValidaSenha{
		
		public function setValidaSenha($pass){
			
			if(strlen($pass)<1)
				return 'Informe a Senha';
			else 
// 			if(strlen($pass)>1)  //'/^[0-9a-z]{4,8}$/i'   !preg_match('/^[0-9a-z]$/i', $pass)
// 				return 'Senha inválida!';
// 			else
			return $pass;
		}
	}

	//$vs = new ValidaSenha();
	//var_dump($vs->setValidaSenha('123123'))
?>