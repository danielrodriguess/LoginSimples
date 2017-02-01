<?php    
	include 'autoload.php';
	$login = new autenticacao();
	$login->setUsuario($_POST['usuario']);
	$login->setSenha(substr(md5($_POST['senha']),4,16));
	if ($login->autenticaUsuario()){
		print 'Logado';
	}else{
		print 'Usuário ou senha incorreto';
	}
?>