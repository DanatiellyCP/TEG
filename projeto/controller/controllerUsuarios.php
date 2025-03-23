<?php
    include('../model/conexaoBanco.php');
	include('../model/classeUsuarios.php');

    if (isset($_POST["btnCadUsuario"])){
        $eomeUsuario = $_POST['nome'];
        $emailUsuario = $_POST['email'];
        $senhaUsuario = $_POST['novaSenha'];

        $novoUsuario = new Usuario();
        $novoUsuario->setNome($eomeUsuario);
	    $novoUsuario->setEmail($emailUsuario);
	    $novoUsuario->setSenha($senhaUsuario);

        inserirUsuario($novoUsuario->getNome(), $novoUsuario->getSenha(), $novoUsuario->getEmail());
    
        echo ("<script>
        window.alert('Usuário cadastrado com Sucesso!')
        window.location.href='../view/index.php';
        </script>");

        
    }
?>