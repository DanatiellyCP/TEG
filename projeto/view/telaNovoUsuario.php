<?php 
include('head.php');
echo <<<HTML
	<h1>Cadastrar Novo Usuário</h1>

	<div class="form-group" style="margin: 25px 50px 75px;">
		<form method="post" action="../controller/controllerUsuarios.php">
			Nome: </br>
			<input type="text" class="form-control" name="nome" placeholder="nome"></br>
			E-mail: </br>
			<input type="text" class="form-control" name="email" placeholder="E-mail"></br>
			Senha: </br>
			<input type="text" class="form-control" name="novaSenha" placeholder="Crie uma senha"></br>
			</br>
			<div>
				<input type="submit" class="btn-success" name="btnCadUsuario" value="Cadastrar" class="" style="width: 100px;">
			</div>
		</form>
	</div>
HTML;
