<?php 
	session_start();
	include('head.php');
	include('../model/conexaoBanco.php');
	
	echo " Olá Bem vindo(a) ".$_SESSION['Nome']." ";
 
echo <<<HTML
	
	<h1> Usuário </h1>
	<br>
	<br>
	<LI>
		<a href="http://localhost/teg/projeto/view/telaProjetos.php">Projeto</a>
	</LI>
	
	<LI>
		<a href="http://localhost/teg/projeto/view/index.php">Sair</a>
	</LI>

HTML;
?>