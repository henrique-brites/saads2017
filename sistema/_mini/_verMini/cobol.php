<?php
header("Content-type: text/html; charset=UTF-8");
session_start();
include_once("../../_conexao/config.php");
mysqli_set_charset($con, "utf8");
if (isset($_SESSION['user_session']) && isset($_SESSION['pwd_session'])){


$sql = "SELECT * from alunos_cursos WHERE cod_curso = 1  ORDER BY nome";
$consulta = mysqli_query($con, $sql);
$registros = mysqli_num_rows($consulta);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Sistema: Cobol</title>
	<link rel="stylesheet" type="text/css" href="../../_css/estilo.css">
	
	
</head>
<body>
<div class="container" id="con-colsulta">
	<nav>
		<ul class="menu">
			
			<a href="../../_consultas/consultas.php"><li>Consultas</li></a>
			<a href="../cad_mini.php"><li>Mini Curso</li></a>
			
			<br><br>
			
			<a href="cobol.php"><li>Cobol</li></a>
			<a href="postgre.php"><li>PostgreSQL</li></a>
			<a href="latex.php"><li>Latex</li></a>
			<a href="arduino1.php"><li>Arduino 1</li></a>
			<a href="unity.php"><li>Unity</li></a>
			<a href="arduino2.php"><li>Arduino 2</li></a>

		</ul>
	</nav>
	<section>
		<h1>Cobol</h1>
		<a href="?go=sair" id="btnSairCur"><input type="button"  value="Sair" class="btn"/></a>
		
		<?php
			if(isset($_SESSION['msgd'])){
                echo $_SESSION['msgd'];
                unset($_SESSION['msgd']);
                }
		if($registros > 0){
			
			print "$registros Inscritos.        <a href='_impre/impressao.php?btnImprCobol=Impressao' id='btn_sair'><input type='button' name='btnImprCobol' value='Impressao' class='btn'/></a>";
			

			print "<br>";
			

			echo "<table border=1>";
		echo "<tr><th>Nome</th><th>E-mail</th><th>CPF</th><th>Excluir</th></tr>";
		
               
		while($exibirRegistro = mysqli_fetch_array($consulta)) {

				$cod_aluno = $exibirRegistro[0];
				$nome = $exibirRegistro[1];
				$email = $exibirRegistro[2];
				$cpf = $exibirRegistro[3];
				


			echo "<tr>";
				
				echo "<td style= 'padding: 2px 10px 2px 20px'>$nome</td>";
				echo "<td style= 'padding: 2px 10px 2px 20px'>$email</td>";
				echo "<td style= 'padding: 2px 10px 2px 20px'>$cpf</td>";
				echo "<td style= 'padding: 2px 10px 2px 20px'> 
	
				<a href='deleta.php?id=$cod_aluno'>
				<input type='button' name='sim1' value='Deletar' class='btnS'/>	</a>
				
				</td>";
			echo "</tr>";
			

		}
		print "<br><br>"; 
		
		
				mysqli_close($con);
			
		}
		else{
		print "<br><br><h4>Nenhum Incrito.</h4>";
		
		}
		
		?>
		

		
		
	</section>
</div>
</body>
</html>






<?php 	
}

else{
echo "<meta http-equiv='refresh' content='0, url=../../index.php'>";
}


if(isset($_GET['go'])){
	if($_GET['go'] == "sair"){
		unset($_SESSION['user_session']);
		unset($_SESSION['pwd_session']);
		echo "<meta http-equiv='refresh' content='0, url=../../index.php'>";
	}
}
?>
















