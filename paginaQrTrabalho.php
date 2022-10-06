<?php
require_once('libs/qrlib.php');
$idTrabalho = $_GET['idTrabalho'];
$turma = $_GET['turma'];
$nome = $_GET['nome'];
$titulo = $_GET['titulo'];
$caminhoServidor = "http://estanovale.hospedagemdesites.ws/professor/feira/";
$caminhoArquivo = $caminhoServidor."avaliar.php?idTrabalho=$idTrabalho";



?>
<html>

    <head>
    <link rel="stylesheet" href="style/estilofront.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="w3-row-padding">
        <header>
            <div class="w3-third"><img id="img1" src="img/univap.png"></div>
            <div class="w3-third"><img id="img2" src="img/info.jpg"></div>
        </header>
  
    </div>

    <div class="row">
        <div class="col-sm-12">
        <?php 

            echo "<h2 style='margin:auto; max-width: 400px; text-align:center;'>".$titulo."</h2>";
            
        ?>
        <br>
        <br>
        <br>
        <center><img src="gerarQr.php?idTrabalho=<?php echo $idTrabalho;?>"></center>

        <center><h3>QRCode do projeto</h3></center>

        </div>
    </div>

    </body>
</html>