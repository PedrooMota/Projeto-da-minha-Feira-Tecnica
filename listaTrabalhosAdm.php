<?php
$idTrabalho = $_GET['idTrabalho'];

?>

<?php
header('Content-Type: text/html; charset=utf-8');
include "conexao.php";

 $servidor = "187.45.196.152";
 $usuario = "estanovale2";
 $senha = "feira@123";
 $dbname = "estanovale2";

$con =  mysqli_connect($servidor, $usuario, $senha, $dbname);

$result  = $con->query("SELECT * FROM grupo join trabalho on grupo.Trabalho_idTrabalho = trabalho.idTrabalho join aluno on aluno.idAluno = grupo.Aluno_idAluno join turma on aluno.Turma_Turma = turma.idTurma order by turma.turma asc, aluno.nome asc;");
$tabela = "<table border=1>";
while($obj = $result->fetch_object()){   
    $idTrabalho = $obj->idTrabalho;
    $turma = $obj->turma;
    $nome = $obj->nome;
    $titulo = $obj->titulo;
    $tabela.="<tr>";
    $tabela.="<td>$nome</td>" ;
    $tabela.="<td>$titulo</td>" ;
    $tabela.="<td>$turma</td>" ;
    $tabela.="<td><a href = 'paginaQrTrabalho.php?idTrabalho=$idTrabalho&turma=$turma&titulo=$titulo'>Gerar QR Code </a></td>" ;  
    $tabela.="</tr>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListaTrabalhos</title>
</head>
<body>
    <?php 
    echo $tabela;
   
    ?>
</body>
</html>