<?php
header("Content-type: text/html; charset=UTF-8");
session_start();

if (isset($_SESSION['user_session']) && isset($_SESSION['pwd_session'])){

	include_once("../../../_conexao/config.php");
	mysqli_set_charset($con, "utf8");
	
	
	$btnImprCobol = filter_input(INPUT_GET, 'btnImprCobol', FILTER_SANITIZE_STRING);
	$btnImprLatex = filter_input(INPUT_GET, 'btnImprLatex', FILTER_SANITIZE_STRING);
	$btnImprPostgre = filter_input(INPUT_GET, 'btnImprPostgre', FILTER_SANITIZE_STRING);
	$btnImprArduino1 = filter_input(INPUT_GET, 'btnImrArduino1', FILTER_SANITIZE_STRING);
	$btnImprUnity = filter_input(INPUT_GET, 'btnImprUnity', FILTER_SANITIZE_STRING);
	$btnImprArduino2 = filter_input(INPUT_GET, 'btnImrArduino2', FILTER_SANITIZE_STRING);
	
	
	if($btnImprCobol){

	$sql = "SELECT * from alunos_cursos WHERE cod_curso = 1  ORDER BY nome";
	$consulta = mysqli_query($con, $sql);
	$registros = mysqli_num_rows($consulta);
	}

	elseif($btnImprLatex){
	$sql = "SELECT * from alunos_cursos WHERE cod_curso = 2  ORDER BY nome";
	$consulta = mysqli_query($con, $sql);
	$registros = mysqli_num_rows($consulta);
	}
	
	elseif($btnImprPostgre){
	$sql = "SELECT * from alunos_cursos WHERE cod_curso = 3  ORDER BY nome";
	$consulta = mysqli_query($con, $sql);
	$registros = mysqli_num_rows($consulta);
	}
	
	elseif($btnImprArduino1){
	$sql = "SELECT * from alunos_cursos WHERE cod_curso = 4  ORDER BY nome";
	$consulta = mysqli_query($con, $sql);
	$registros = mysqli_num_rows($consulta);
	}
	
	elseif($btnImprUnity){
	$sql = "SELECT * from alunos_cursos WHERE cod_curso = 5  ORDER BY nome";
	$consulta = mysqli_query($con, $sql);
	$registros = mysqli_num_rows($consulta);
	}

	elseif($btnImprArduino2){
	$sql = "SELECT * from alunos_cursos WHERE cod_curso = 6  ORDER BY nome";
	$consulta = mysqli_query($con, $sql);
	$registros = mysqli_num_rows($consulta);
	}
	

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Sistema: Imprime Curso</title>
	<link rel="stylesheet" type="text/css" href="../../../_css/cssImpre.css">
</head>
<body>
	<div id="impre">

		
			<a href="javascript:history.go(-1)" id="btn_voltar"><input type="button" value="Voltar" class="btn"/></a>


		<?php
		print "$registros Inscritos.";

		print "<br>";

		echo "<table border=1>";
		echo "<tr><th>Nome</th><th>E-mail</th><th>CPF</th></tr>";


		
		while($exibirRegistro = mysqli_fetch_array($consulta)) {

				
				$nome = $exibirRegistro[1];
				$email = $exibirRegistro[2];
				$cpf = $exibirRegistro[3];


			echo "<tr>";
				echo "<td style= 'padding: 2px 10px 2px 20px'>$nome</td>";
				echo "<td style= 'padding: 2px 10px 2px 20px'>$email</td>";
				echo "<td style= 'padding: 2px 10px 2px 20px'>$cpf</td>";
			echo "</tr>";	

		}
		print "<br><br>";

		mysqli_close($con);
		?>
		
</div>
</body>
</html>
<?php
}
else{
	echo "<meta http-equiv='refresh' content='0, url=../../../index.php'>";

}

?>

