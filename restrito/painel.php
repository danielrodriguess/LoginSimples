<?php 
	session_start();
	if (!isset($_SESSION['usuario']) && !isset($_SESSION['senha'])){
		header("Location: http://localhost");	       
	}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Bem-vindo</title>
	</head>
	<body>
		<?php 
			print'Seja bem vindo: '.htmlentities($_SESSION['chuser'],ENT_QUOTES);
		?>
	</body>
</html>