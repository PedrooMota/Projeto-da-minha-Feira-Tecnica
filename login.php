<?php 
    include "conexao.php";
    session_start();

    if(isset($_GET['a'])){
        if($_GET['a'] == 'logout'){
            session_destroy();
            header("Location: login.php");
            exit();
        }
    }    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/estilofront.css">
    <title>Logar</title>  
    
</head>
<body>
   
            <?php if(isset($_SESSION['idtrabalho'])): ?>
                <a href="perfil.php?a=logout">Sair</a>
                <div id="divimg">
                    <a href="perfil.php?id=<?php echo $_SESSION['idtrabalho']; ?>"></a>
                </div>
            <?php endif; ?>
        </div>
    </nav>

                    
    <div class="w3-row-padding">
        <header>
            <div class="w3-third"><img id="img1" src="img/univap.png"></div>
            <div class="w3-third"><img id="img2" src="img/info.jpg"></div>
        </header>
  
    </div><br><br>

                <center><h1>Login do Usuário</h1></center>

    <main>
        <div><br>
            <?php if(!isset($_SESSION['idtrabalho'])): ?>
                <div class="row">
                <div class="col-sm-12">
                    <form action="login2.php" method="get" autocomplete="on">
                        <div>
                            <label for="iemail">E-mail:</label>
                            <input type="email" name="email" id="iemail" autocomplete="email" class="form-control" required>
                        </div>
                        <div>
                            <label for="isenha">Senha:</label>
                            <input type="password" name="senha" id="isenha" class="form-control" required>
                        </div><br><br>
                        <button id="btncriar" type="submit" class="btn btn-primary btn-block">Login</button>
                    </form><br>

                </div>
                </div>

            <?php endif; ?>

        </div>
    </main>
</body>
</html>