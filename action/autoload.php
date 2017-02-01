<?php 
	function __autoload($classe){
		require_once '../classes/'.$classe.'.php';
	}

	$objConexao = new  conexao();
	$objAutenticacao = new autenticacao();
?>