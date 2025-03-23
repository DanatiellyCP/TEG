<?php 
	//session_start();
	//include('../model/conexaoBanco.php');
	include('../controller/controllerProjetos.php');
	
	//echo " Olá Bem vindo ".$_SESSION['Nome']." ";

 //ExibirProjetos();
//$editar = False; // controle de 
echo <<<HTML

<!DOCTYPE html>
<html>
<head>
	<title>
		Projetos
	</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<style type="text/css">
		table, th, td {
			margin: 10px;
			border: 1px solid black;
			border-collapse: collapse;
			width: 800px;
			height: 30px;
			padding-left: 30px;
			padding-right: 20px;
		}
	</style>
</head>
<body>
	<br>
	<a href="http://localhost/teg/projeto/view/telaUsuario.php">Sair</a>
	<br>
	
	<br>
	<br>
	
	<table class="table table-bordered">
	<th>
	<form method="post" action="">
		<div class="form-group">
			Nome do Projeto: 
			<input type="text" name="ProjetoNome" value="$PNome">
			Descrição: 
			<input type="text" name="ProjetoDescricao" value="$PDescricao" > 
			<input type="submit" name="btnNovoProjeto" value="Criar" class="btn btn-success btn-lg">
		</div>
	</form>
	</th>
	</table>

	
</body>
</html>

HTML;
	
 //NovoProjeto();
 ExibirProjetos();

?>