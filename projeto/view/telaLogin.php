<?php 
include('head.php');
echo <<<HTML
	<center>
		<div class="form-group" style="margin: 25px 50px 75px;">
			<form method="post" action="../controller/testaLogin.php">
				Usuário: </br>
				<input type="text" class="form-control" name="usuario" placeholder="Ususario" style="width: 200px;"></br>
				Senha: </br>
				<input type="password" class="form-control" name="senha" placeholder="Senha" style="width: 200px;"></br>
				</br>
				<div>
					<input type="submit" class="btn btn-primary" name="btnLogin" value="Acessar" class="" style="width: 100px;">
				</div>
			</form>
		</div>
	</center>
HTML;
