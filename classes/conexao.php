<?php
	class conexao {
	private $host = 'localhost';	
	private $usuario = 'root';
	private $senha = '';
	private $banco = 'loginajax';
	private static $conexao;

	public function efetuaConexao(){
		try{
			if (!isset(self::$conexao)){
				self::$conexao = new PDO("mysql:host={$this->host}; dbname={$this->banco}", $this->usuario, $this->senha);
			}
		}catch(PDOExcrption $e){
			print 'Não foi possivel efetuar a conexão com a base de dados! <br>'.$e->getMessage();
		}
		return self::$conexao;
		}
	}
?>