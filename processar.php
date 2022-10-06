<?
 session_start();


?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Processar</title>
    </head>
    <body>
    <?
    $caminhoServidor = "http://estanovale.hospedagemdesites.ws/professor/feira/";
    $caminhoArquivo = $caminhoServidor."listaTrabalhosAdm.php?idTrabalho=$idTrabalho";
    ?>
        
    </body>
    </html>

<?php
    include "conexao.php";
    $banco = new Notas();
    if(isset($_GET['nota1'])){
        // echo "entrou";
        //Variaveis para a Avaliação
        $Apresentacao = $_GET['nota1'];
        $Relevancia = $_GET['nota2'];
        $Utilidade = $_GET['nota3'];
        $comentario = strip_tags(str_replace(";","_", $_GET["coment"]));
        $codprofessor = strip_tags(str_replace(";","_", $_GET["codigoProfessor"]));
        if ($codprofessor == 'professor2022'){
            $codprofessor = strip_tags(str_replace(";","_", $_GET["codigoProfessor"]));
        }else{
            $codprofessor = null;
        }
        $idTrabalho = $_GET['idTrabalho'];

        
        $res = $banco->inserirNOTA($Apresentacao, $Relevancia, $Utilidade, $comentario, $codprofessor, $idTrabalho);
        // $res = $banco->nota();
    }

    
    
    if(isset($_GET['nome'])){

        //Váriaveis para o cadastro do Formulario

        $nome = strip_tags(str_replace(";","_", $_GET['nome']));
        $email = strip_tags(str_replace(";","_", $_GET['email']));
        $matricula = strip_tags(str_replace(";","_", $_GET['matricula']));
        $titulo = strip_tags(str_replace(";","_", $_GET['titulo']));
        $senha = strip_tags(str_replace(";","_", $_GET['senha']));
        $resumo = strip_tags(str_replace(";","_", $_GET['resumo']));
        $area = $_GET['area'];
        $turma = $_GET['turma'];
        header("Location:http://estanovale.hospedagemdesites.ws/professor/feira/listaTrabalhosAdm.php");
     
        $res = $banco->inserirALUNO($nome, $matricula, $turma, $email, $senha);
        $res = $banco->inserirTRABALHO($titulo, $resumo, $area);
        $res = $banco->inserirGRUPO($matricula, $titulo);   
          
    }

    

   