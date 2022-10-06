<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/estilofront.css">
</head>
<body>

<div class="container">

   

    <div class="w3-row-padding">
        <header>
            <div class="w3-third"><img id="img1" src="img/univap.png"></div>
            <div class="w3-third"><img id="img2" src="img/info.jpg"></div>
        </header>
  
    </div><br><br>

      
                        <center><h1>Cadastro de projetos</h1></center>

    <div class="row">
        <div class="col-sm-12">
       

    <main>
      
       
       <form action="processar.php" method="GET" enctype="multipart/form-data">
           <div class="interface">

                   <div class="field">
                      
                           <label for="nome">Nome do Representante(Apenas nome de um integrante)</label>
                           <input type="text" id="nome" name="nome" required class="form-control">
                      
                   </div>

                   <div class="field">
                       
                           <label for="matricula">Número Matrícula</label>
                           <input type="text" id="matricula" name="matricula" required  class="form-control">
                       
                   </div>

                   <div class="field">
                       
                           <label for="email">E-mail</label>
                           <input type="text" id="email" name="email"  required  class="form-control">
                      
                   </div>

                   <div class="field">

                           <label for="senha">Senha</label>
                           <input type="password" id="senha" name="senha" required  class="form-control">
                   </div>

                   <div class="field">
                       <label for="area">Curso</label>
                       <select name="area" id="area"  class="form-control" required>
                            <option value=""></option>
                            <option value="1 ">Informática</option>
                            <option value="2">Química</option>
                            <option value="3">Eletrônica</option>
                            <option value="4">Administração</option>
                            <option value="5">Análises Clínicas</option>
                            <option value="6">Publicidade</option>
                       </select>
                   </div>

                   <div class="field">
                       <label for="turma">Turma</label>
                       <select name="turma" id="turma"  class="form-control" required>
                            <option value=""></option> 
                            <option value="1">1°Ano </option>
                            <option value="2">2°Ano </option>
                            <option value="3">3°Ano </option>
                       </select>
                   </div>               
             
           </div>

                        <h3>Já possui um cadastro?</h3>
                           <a href="login.php">Login </a>
                           <br>
                           <br>
               
             

                   <div class="field">
                       <label for="titulo">Titulo do Projeto</label>
                       <input type="text" name="titulo" placeholder="Digite o Titulo do Projeto"  class="form-control" required>
                   </div><br>

                   <div class="field">
                       <label for="resumo">Resumo do projeto</label>
                       <textarea type="text" name="resumo" cols="30" rows="10"  class="form-control" ></textarea>
                   </div><br>
                          

                        <hr>   
                       <button type="submit" id="cadastrar" class="btn btn-primary btn-block">Cadastrar</button>

           </div>        
       </form>
           
   </main>
    </div>

  </div>
</div>
    
</body>
</html>
