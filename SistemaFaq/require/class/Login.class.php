<?php
	class Login{
		
		private $vem;
		private $vsh;
		private $cpt;
		private $crud;
		private $email;
		private $senha;
		private $log;
		private $dds;
		
		public function setLogin($email,$senha) {
			
			$this->vem=new ValidaEmail();
			$this->vsh=new ValidaSenha();
			$this->cpt=new Cripto();
			$this->crud=new CRUD();
			
			$this->email=$this->vem->setValidaEmail($email);
			$this->senha=$this->vsh->setValidaSenha($senha);
			
			$this->log=$this->senha==$senha?
			$this->crud->select(' id ',' usuarios ',' WHERE email=? && senha=? ',
								array($this->email,$this->senha)):
			FALSE;
			
			
			if($this->email!=$email){
				return $this->email;
			}else 
			
			if($this->senha!=$senha){
				return $this->senha;
			}
			else{
				
			
			if ($this->log && $this->log->rowCount()>0){
				
				foreach ($this->log as $this->dds){
					
					$_SESSION['logado']=$this->dds;
					//header('location:../../admin/index.php');
				}
				
			}else{
				return 'Acesso negado';
			}
			}
			
			//return $this->log->rowCount();
			
		}
	}
?>