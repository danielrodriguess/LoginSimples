<?php 
	class autenticacao extends conexao {	  
		private $usuario;
		private $senha;

		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}

		public function getUsuario(){
			return $this->usuario;
		}  

		public function getSenha(){
			return $this->senha;
		}

		public function autenticaUsuario(){
			$con = $this->efetuaConexao();
			$login = $con->prepare("SELECT * FROM usuarios WHERE BINARY user = ? AND pass = ?");
			$login->bindValue(1, $this->getUsuario(), PDO::PARAM_STR);
			$login->bindValue(2, $this->getSenha(), PDO::PARAM_STR);	
			$login->execute();
			if ($login->rowCount() == 1){
				session_start();
				$dados = $login->Fetch(PDO::FETCH_OBJ);
				$_SESSION['usuario'] = $dados->user;
				$_SESSION['senha'] = $dados->pass;							 
				return true;
			}else{
				return false;		 
			}
		}		  
	}
?>