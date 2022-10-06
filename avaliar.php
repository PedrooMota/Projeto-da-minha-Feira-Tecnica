<?php
$idTrabalho = $_GET['idTrabalho'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Avaliar</title>
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
        
 

				<center><h1>Avaliação de Projetos!!</h1></center>	
	<main>		

		<div class="row">
		<div class="col-sm-12">
		
		<form method="GET" action="processar.php" enctype="multipart/form-data">
				<div class="field">
					<input type="hidden" name="idTrabalho"      value = "<?php echo $idTrabalho?>"><br>
					<label>Código do professor</label>
					<input type="text"    name="codigoProfessor" class="form-control">  
				</div>
				<div class="field">
					<label for="nota1">Nota Apresentação:</label>
					<select type="number" id="apresentacao" name="nota1" placeholder="Sua Nota do Projeto*"  class="form-control" required>
						<option value=""></option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div>

				<div class="field">
					<label for="nota2"> Nota Relevância:</label>
					<select type="number" id="relevancia" name="nota2" placeholder="Relevância do Projeto*"  class="form-control" required>
						<option value=""></option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div>
				<div class="field">
					<label for="nota3"> Nota Utilidade:</label>
					<select type="number" id="utilidade" name="nota3" placeholder="Utilidade do Projeto*"class="form-control" required>
							<option value=""></option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
					</select>
				</div>
				<div class="field">
					<h2>Quer deixar alguma observação? </h2>
					<textarea name="coment" class="form-control" cols="50" rows="8"></textarea>
				</div><br><br>
				<button type="submit" class="btn btn-primary btn-block">Enviar</button>
						
			</form>
		</div>
		</div>					
	</main>
    
</div>
    
</body>
</html>
