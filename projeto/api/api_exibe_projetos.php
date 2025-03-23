<?php
    // Tela que exibe em formato Json os projetos
    include('../model/conexaoBanco.php');
    include('../model/classeProjetos.php');

    $dados = array(); 
    $dadosProjetos = listarProjetos();
    while ($row = $dadosProjetos->fetch()) {
        $dados[] = array(
            'id' => $row[0],
            'nome' => $row[1],
            'descricao' => $row[2],
            'status' => $row[3],
            'dt_criacao' => $row[4],
            'user' => $row[5]
        );
    }
    echo <<<HTML
    <br>
HTML;
    echo json_encode($dados);
    





?>