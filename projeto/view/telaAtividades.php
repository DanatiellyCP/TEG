<?php 
	session_start();
	include('../model/conexaoBanco.php');
	
	echo " Olá Bem vindo ".$_SESSION['Nome']." ";
 
echo <<<HTML

<!DOCTYPE html>
<html>
<head>
	<title>
		Atividades
	</title>
</head>
<body>
	<H1>Cadastro de Atividades</H1>
	<br>
	<br>
	<LI>
		<a href="http://localhost/teg/projeto/view/telaProjetos.php">Voltar</a>
	</LI>

</body>
</html>

HTML;
?>