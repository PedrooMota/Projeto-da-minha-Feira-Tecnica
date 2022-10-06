<?php
require_once('libs/qrlib.php');
$idTrabalho = $_GET['idTrabalho'];
$caminhoServidor = "http://estanovale.hospedagemdesites.ws/professor/feira/";
$caminhoArquivo = $caminhoServidor."avaliar.php?idTrabalho=$idTrabalho";
//echo $caminhoArquivo;
QRcode::png($caminhoArquivo);

?>