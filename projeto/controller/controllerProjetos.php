<?php
	// Tela de conrole de projetos
	include('../model/conexaoBanco.php');
	include('../model/classeProjetos.php');

	$PNome = '';
	$PDescricao = '';
	$editar = False; // controle de 
	

	
	if (isset($_POST["btnNovoProjeto"])){	// esse if testa os endereços das caixas de texto
		$nomeProj = $_POST['ProjetoNome'];
		$descricaoProj = $_POST['ProjetoDescricao'];
		$codProj = '2';
		//$nomeProj ='Teste 546';
		//$descricaoProj = 'Novo banco';
		$statusProj = 'OK';
		$dtCriacaoProj = date("Y-m-d H:i:s"); //hora atual
		$usuarioCriadorProj = '1';

		$NovoProjeto = new Projeto();

		$NovoProjeto->setCodigo($codProj);
		$NovoProjeto->setNome($nomeProj);
		$NovoProjeto->setDescricao($descricaoProj);
		$NovoProjeto->setStatus($statusProj);
		$NovoProjeto->setDtCriacao($dtCriacaoProj);
		$NovoProjeto->setUsuarioCriador($usuarioCriadorProj);
		
		inserirProjeto($NovoProjeto->getNome() , 
		$NovoProjeto->getDescricao() , 
		$NovoProjeto->getStatus() , 
		$NovoProjeto->getDtCriacao(), 
		(int)$NovoProjeto->getUsuarioCriador());

	}

	if (isset($_GET["Excluir"])){
		$id = $_GET["Excluir"]; 
		DeletarProjeto($id);
	}

	if (isset($_GET["Editar"])){
		$id = $_GET["Editar"]; 
		//continuar a aparte de editar o projeto
		$editar = True;
		$resultado = filtrarProjeto($id);
		$row = $resultado->fetch();
		$PNome = $row[1];
		$PDescricao = $row[2];  
	}

	if (isset($_GET["btnSalvarEdicao"])){
		$id = $_GET["Editar"]; 
		$nomeProj = $_POST['ProjetoNome'];
		$descricaoProj = $_POST['ProjetoDescricao'];
		editarProjeto($id, $nomeProj, $descricaoProj);
		//teste
		$resultado = filtrarProjeto($id);
		$row = $resultado->fetch();
		$PNome = $row[1];
		$PDescricao = $row[2];  
		
		/*echo ("<script>
        window.alert('Projeto Editado com Sucesso!')
        window.location.href='../view/telaProjetos.php';
        </script>");*/
	}
	
	
	function ExibirProjetos(){
		echo "Projetos";
		$dadosProjetos = listarProjetos('1');

	    echo <<<HTML
         <div>
         <table class="table table-bordered">
HTML;

    echo <<<HTML
            <tr>
              <td width="30">Código</td>
              <td width="100">Nome</td>
              <td width="100">Descrição</td>
              <td width="100">Status</td>
              <td width="100">Data de Criação</td>
              <td width="100">Usuario Criador</td>
              <td width="70">Atividades</td>
              <td width="70">Editar</td>
              <td width="70">Excluir</td>
            </tr>
HTML;

    while ($row = $dadosProjetos->fetch()) {
      echo <<<HTML
            <tr>
              <td WIDTH=30>$row[0]</td>
              <td WIDTH=100>$row[1]</td>
              <td WIDTH=100>$row[2]</td>
              <td WIDTH=100>$row[3]</td>
              <td WIDTH=100>$row[4]</td>
              <td WIDTH=100>$row[5]</td>

               <td> 
              	<a href="../view/telaAtividades.php?Atividade=$row[0]"
              		class = "btn btn-success btn">Atividades</a>
              		
              	</a> 
              </td>

              <td> 
              	<a href="../view/telaEditaProjetos.php?Editar=$row[0]"
              		class = "btn btn-info">Editar</a>
              	</a> 
              </td>

              <td> 
              	<a href="../view/telaProjetos.php?Excluir=$row[0]"
              		class = "btn btn-danger">Excluir</a>
              		
              	</a> 
              </td>

            </tr>
HTML;
  }
  echo <<<HTML
      </table>
    </div>
HTML;

	}
	/*$codProj = '2';
	//$nomeProj ='Teste 546';
	//$descricaoProj = 'Novo banco';
	$statusProj = 'OK';
	$dtCriacaoProj = '2020-08-07';
	$usuarioCriadorProj = '1';

	$NovoProjeto = new Projeto();

	$NovoProjeto->setCodigo($codProj);
	$NovoProjeto->setNome($nomeProj);
	$NovoProjeto->setDescricao($descricaoProj);
	$NovoProjeto->setStatus($statusProj);
	$NovoProjeto->setDtCriacao($dtCriacaoProj);
	$NovoProjeto->setUsuarioCriador($usuarioCriadorProj);

	inserirProjeto($NovoProjeto->getNome() , 
		$NovoProjeto->getDescricao() , 
		$NovoProjeto->getStatus() , 
		date("yyyy-mm-dd", $NovoProjeto->getDtCriacao()), 
		(int)$NovoProjeto->getUsuarioCriador());*/
	


		
	/*echo <<<HTML
	<pre>
HTML;
	
	print_r($NovoProjeto);
	
	echo <<<HTML
	<pre>
HTML;
 

	echo "OK !!!!";*/
?>