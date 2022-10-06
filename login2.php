<?php
include "conexao.php";
$banco = new Notas();
$email = strip_tags(str_replace(";","_", $_GET['email']));
$senha = ($_GET['senha']);
$res = $banco->logar($email, $senha);
echo $res;
?>