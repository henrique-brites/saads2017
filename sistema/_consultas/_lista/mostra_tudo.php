<?php
header("Content-type: text/html; charset=UTF-8");
session_start();

if (isset($_SESSION['user_session']) && isset($_SESSION['pwd_session'])){

	include_once("../../_conexao/config.php");
	mysqli_set_charset($con, "utf8");

$sql = "SELECT * from participantes ORDER BY nome";
$consulta = mysqli_query($con, $sql);
$registros = mysqli_num_rows($consulta);



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sistema de Consultas</title>
	<link rel="stylesheet" type="text/css" href="../../_css/cssImpre.css">
</head>
<body>
	<div id="impre">

		
			<a href="javascript:history.go(-1)" id="btn_voltar"><input type="button" value="Voltar" class="btn"/></a>


		<?php
		
		
		print "$registros Inscritos.";

		print "<br>";


		echo "<table border=1>";
		echo "<tr><th>Id</th><th>Nome</th><th>E-mail</th><th>CPF</th><th>Instituição</th><th>Primeiro Dia</th><th>Segundo Dia</th><th>Terceiro Dia</th></tr>";


		while($exibirRegistro = mysqli_fetch_array($consulta)) {

			$cod_parti = $exibirRegistro[0];
			$nome = $exibirRegistro[1];
			$email = $exibirRegistro[2];
			$cpf = $exibirRegistro[3];
			$inst = $exibirRegistro[4];
			$p1 = $exibirRegistro[5];
			$p2 = $exibirRegistro[6];
			$p3 = $exibirRegistro[7];


			echo "<tr>";
				echo "<td style= 'padding: 8px 10px 8px 20px'>$cod_parti</td>";
				echo "<td style= 'padding: 8px 10px 8px 20px'>$nome</td>";
				echo "<td style= 'padding: 8px 10px 8px 20px'>$email</td>";
				echo "<td style= 'padding: 8px 10px 8px 20px'>$cpf</td>";
				echo "<td style= 'padding: 8px 10px 8px 20px'>$inst</td>";
				echo "<td style= 'padding: 8px 10px 8px 20px'>$p1</td>";
				echo "<td style= 'padding: 8px 10px 8px 20px'>$p2</td>";
				echo "<td style= 'padding: 8px 10px 8px 20px'>$p3</td>";
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
	echo "<meta http-equiv='refresh' content='0, url=../../index.php'>";

}

?>

