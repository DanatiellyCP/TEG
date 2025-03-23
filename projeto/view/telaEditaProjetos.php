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
	<style type="text/css"></style>
</head>
<body>
	<br>
	<a href="http://localhost/teg/projeto/view/telaProjetos.php">Voltar</a>
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
            <input type="submit" name="btnSalvarEdicao" value="Salvar" class="btn btn-info btn-lg">
		</div>
	</form>
	</th>
	</table>

	
</body>
</html>

HTML;
	

?>