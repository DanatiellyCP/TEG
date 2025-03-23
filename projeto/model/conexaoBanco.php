<?php

// Para o teste de senha ----------------------------------------
$servidor = "localhost";
$USUARIO = "root";
$SENHA = "";
$dbname = "work_group";
// criar a conecção
$conn = mysqli_connect($servidor, $USUARIO, $SENHA, $dbname);
// Para o teste de senha ----------------------------------------

    function X($alerta='0'){
      //conexão PDO
      try {
        //$pdo = new PDO('"mysql:dbname='.$dbname.';host='.$servidor.';", $USUARIO, $SENHA);
        $db = new PDO("mysql:dbname=work_group;host=localhost;", "root", "");
        //echo "Conectado";
        if ($alerta == '1') {
          echo("<script>alert('Conectado!');</script>");
        }
        return $pdo;
      
        } catch (PDOException $e) {
        echo "Erro com o banco de dados: ".$e->getMessage();
        }
        catch(Exception $e){
        echo "Erro Generico: ".$e->getMessage();
        }
    }
    

  //Função para inserir projeto 
  function inserirProjeto($nomeProjeto, $DescricaoProjeto, $StatusProjeto, $DtCriacaoProjeto, $UsuarioCProjeto ){
    $db = new PDO("mysql:dbname=work_group;host=localhost;", "root", "");
    $db->exec("INSERT INTO projetos(Nome, Descricao, Status, DtCriacao, UsuarioCriador) VALUES ('$nomeProjeto', '$DescricaoProjeto', '$StatusProjeto', '$DtCriacaoProjeto', '$UsuarioCProjeto')");
  } 

  // função para listar todos os projetos do banco
  function listarProjetos($alerta='0'){
    $db = new PDO("mysql:dbname=work_group;host=localhost;", "root", "");
    //$db = X($alerta);
    $dados = $db->query("select * from projetos"); // consulta ao banco
    return $dados;
  }

  // Função para deletar projeto
  function DeletarProjeto($codigoProjeto){
      $db = new PDO("mysql:dbname=work_group;host=localhost;", "root", "");
      $db->exec("DELETE FROM projetos WHERE codigo = $codigoProjeto");

  }

  function filtrarProjeto($CodigoProjeto){
    $db = new PDO("mysql:dbname=work_group;host=localhost;", "root", "");
    $dados = $db->query("select * from projetos WHERE codigo = $CodigoProjeto"); // consulta ao banco
    return $dados;

  }

  function editarProjeto($codigoProjeto, $nomeProjeto, $DescricaoProjeto){
      $db = new PDO("mysql:dbname=work_group;host=localhost;", "root", "");
      $db->exec("UPDATE projetos SET Nome = '$nomeProjeto', Descricao = '$DescricaoProjeto'  projetos WHERE codigo = $codigoProjeto");
    }

    


  //-------------------- Usuarios ----------------------------------------
   //Função para inserir Usuario 
   function inserirUsuario($nomeUsuario, $senhaUsuario, $emailUsuario){
    $db = new PDO("mysql:dbname=work_group;host=localhost;", "root", "");
    $db->exec("INSERT INTO usuarios(Nome, Senha, Email) VALUES ('$nomeUsuario', '$senhaUsuario', '$emailUsuario')");
  } 
  
  //----------------------------------------------------------------------


?>