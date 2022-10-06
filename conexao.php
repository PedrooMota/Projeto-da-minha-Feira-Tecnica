<?php
//select Trabalho_idTrabalho, round(((avg(notaApresentacao) + avg(notaRelevancia) + avg(notaUtilidade)) /3),1) as media from avaliacao group by Trabalho_idTrabalho;
class Notas{
	private $servidor = "187.45.196.152";
	private $usuario = "estanovale2";
	private $senha = "feira@123";
	private $dbname = "estanovale2";
	private $con = null;

	function __construct(){	
			$this->con = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->dbname);
	}
	
	function inserirNOTA($Apresentacao, $Relevancia, $Utilidade, $comentario, $codprofessor, $idTrabalho){
		$comando = "insert into avaliacao (notaApresentacao, notaRelevancia, notaUtilidade, comentario, codProfessor, Trabalho_idTrabalho) values (".$Apresentacao.", ".$Relevancia.", ".$Utilidade.", '".$comentario."', '".$codprofessor."', ".$idTrabalho.");";
		$result = mysqli_query($this->con, $comando);

		header("Location:http://estanovale.hospedagemdesites.ws/professor/feira/final.php");
	}


	function inserirALUNO($nome, $matricula, $turma, $email, $senha){	
		$comando = "insert into aluno (nome, matricula, Turma_Turma, email, senha) values ('".$nome."', '".$matricula."','".$turma."', '".$email."', '".$senha."');";   
		$result = mysqli_query($this->con, $comando);

	}

	function inserirTRABALHO($titulo, $resumo, $area){
		$comando = "insert into trabalho (titulo, resumo, areaConhecimento_idareaConhecimento) values ('".$titulo."', '".$resumo."', '".$area."');";
		$result = mysqli_query($this->con, $comando);

	}

	function logar($email, $senha){
		$comando = "SELECT * FROM aluno WHERE email='$email';";
		$result = mysqli_query($this->con, $comando);

		while ($linha = $result->fetch_object()){
			$verificar = $linha->senha;
			if ($senha == $verificar){
				header("Location:http://estanovale.hospedagemdesites.ws/professor/feira/listaTrabalhosAdm.php");
			}else{
				echo $senha;
				return "Email ou senha incorretos";
			}
		}
	}
	
	function inserirGRUPO($matricula,  $titulo){
		$comando = "select idAluno from aluno where matricula = $matricula";
		$result = mysqli_query($this->con, $comando);
		
		while($linha = $result->fetch_object()){
			$idCAP = $linha->idAluno;	
		}

		$comando = "select idTrabalho from trabalho where titulo = '$titulo'";
		$result = mysqli_query($this->con, $comando);

		while($coluna = $result->fetch_object()){
			$idTitulo = $coluna->idTrabalho;
		}
		
		$comando = "insert into grupo (Trabalho_idTrabalho, Aluno_idAluno) values ('".$idTitulo."', '".$idCAP."');";
		$result = mysqli_query($this->con, $comando);

	
	}

	function graficoColuna(){
		$grafico = "";
		// $comando = "select * from trabalho";
		
		$comando = "select titulo, Trabalho_idTrabalho, round(((avg(notaApresentacao) + avg(notaRelevancia) + avg(notaUtilidade)) /3),1) as media from trabalho, avaliacao where trabalho.idTrabalho  =  avaliacao.Trabalho_idTrabalho  group by Trabalho_idTrabalho order by media desc; ";
		$result = mysqli_query($this->con, $comando);
		while($coluna = $result->fetch_object()){
			$idTitulo = $coluna->titulo;
			
			$media = $coluna->media;
			$grafico .= "{ name: '$idTitulo', value: $media },";
		   
		}
		echo "[".$grafico."];";      
	}

	function graficoPizza(){
		$graficoPizza = "";

		$comando = "select titulo, Trabalho_idTrabalho, round(((avg(notaApresentacao) + avg(notaRelevancia) + avg(notaUtilidade)) /3),1) as media from trabalho, avaliacao where trabalho.idTrabalho  =  avaliacao.Trabalho_idTrabalho  group by Trabalho_idTrabalho ;";
		$result = mysqli_query($this->con, $comando);

		$qtdMenor2 = 0;
		$qtdMenor4 = 0;
		$qtdMenor6 = 0;
		$qtdMenor8 = 0;
		$qtdMenor10 = 0;

		while($coluna = $result->fetch_object()){
			$media = $coluna->media;
			if ($media < 2){
				$qtdMenor2 += 1;
			}else if ($media < 4){
				$qtdMenor4 += 1;
			}else if ($media < 6){
				$qtdMenor6 += 1;
			}else if ($media < 8){
				$qtdMenor8 += 1;
			}else{
				$qtdMenor10 += 1;
			}
		}

		$graficoPizza = "[
			{ name: '0 e 2', y: $qtdMenor2 },
			{ name: '2 e 4', y: $qtdMenor4 },
			{ name: '4 e 6', y: $qtdMenor6 },
			{ name: '6 e 8', y: $qtdMenor8 },
			{ name: '8 e 10', y: $qtdMenor10 },
		];";

		echo $graficoPizza;
	}

	function gerarTabela(){
		$comando = "select titulo, Trabalho_idTrabalho, round(((avg(notaApresentacao) + avg(notaRelevancia) + avg(notaUtilidade)) /3),1) as media from trabalho, avaliacao where trabalho.idTrabalho  =  avaliacao.Trabalho_idTrabalho  group by Trabalho_idTrabalho order by media desc ;";
		$result = mysqli_query($this->con, $comando);

		$tabela = "<table border=2>";
		$cont = 1 ; 

while($coluna = $result->fetch_object()){   
	$titulo = $coluna->titulo;
    $media = $coluna->media;
    $tabela.="<tr>";
    $tabela.="<td>Projeto:$cont</td>" ;
    $tabela.="<td>$titulo</td>" ;
    $tabela.="<td>$media</td>" ;
	$tabela.="</tr>";
	$cont++; 
}

	echo "<center>".$tabela."</center>";
	}

		
}
		
?>