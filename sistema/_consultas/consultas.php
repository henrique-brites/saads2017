<?php
header("Content-type: text/html; charset=UTF-8");
session_start();
include_once("../_conexao/config.php");
mysqli_set_charset($con, "utf8");
if (isset($_SESSION['user_session']) && isset($_SESSION['pwd_session'])){


$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "SELECT * from participantes WHERE cpf LIKE '%$filtro%' ORDER BY nome";
$consulta = mysqli_query($con, $sql);
$registros = mysqli_num_rows($consulta);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Consultas</title>
	<link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>
<body>
<div class="container" id="con-colsulta">
	<nav>
		<ul class="menu">

			<a href="../_mini/cad_mini.php"><li>Mini Curso</li></a>
			<a href="_lista/lista_presenca.php"><li>Lista de Presenca</li></a>
			

		</ul>
	</nav>
	<section>
		<h1>Inscritos</h1>
		

		<form method="get" action="">
			Filtrar por CPF: <input type="text" name="filtro" class="campo">
			<input type="submit" value="Pesquisar" class="btn"/>

			<a href="_impressao/impressao.php" id="btn_sair"><input type="button" name="btnImpr" value="Impressao" class="btn"/></a>

			<a href="?go=sair" id="btn_sair"><input type="button"  value="Sair" class="btn"/></a>
		
		</form>

		<?php
			if ($filtro != "") {
				print("Resultado da pesquisa com o CPF: <strong>$filtro</strong><br><br>");
			}
			
			print "$registros cadastro encontrados.";

			print "<br><br>";


			while($exibirRegistro = mysqli_fetch_array($consulta)) {

				$cod_parti = $exibirRegistro[0];
				$nome = $exibirRegistro[1];
				$email = $exibirRegistro[2];
				$cpf = $exibirRegistro[3];
				$inst = $exibirRegistro[4];
				
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
					
				print "<article class='mostudo'>";

					
					print "<b>Nome:</b> $nome<br>";
					print "<b>E-mail:</b> $email<br>";
					print "<b>Cpf:</b> $cpf<br>";
					print "<b>Instituição:</b> $inst<br>";
					
					
					?>
					<div>
						<form method="post" action="_confiPrese/confiPrese.php">
							<div id="confi">
								<div class="respo">
									<h5 id="h5">1º Dia</h5>
									<span>
										<input type="hidden" name="cod" value="<?php echo $cod_parti; ?>"/>
										<input type="submit" name="nao1" value="Nao" class="btnN"/>  
										<input type="submit" name="sim1" value="Sim" class="btnS"/> 
									</span>
								</div>
								
								<div class="respo">
									<h5 id="h5">2º Dia</h5>
									<span>
										<input type="hidden" name="cod" value="<?php echo $cod_parti; ?>"/>
										<input type="submit" name="nao2" value="Nao" class="btnN"/>  
										<input type="submit" name="sim2" value="Sim" class="btnS"/> 
									</span>
								</div>
								
								<div class="respo">
									<h5 id="h5">3º Dia</h5>
									<span>
										<input type="hidden" name="cod" value="<?php echo $cod_parti; ?>"/>
										<input type="submit" name="nao3" value="Nao" class="btnN"/>  
										<input type="submit" name="sim3" value="Sim" class="btnS"/> 
									</span>
								</div>
							</div>
						</form>
					</div>
						
						
					<?php
				
				
				
				print "</article><br>";		

				}
				print "<br><br>";
				mysqli_close($con);
			
				
		?>
		
	</section>
</div>
</body>
</html>






<?php 	
}

else{
echo "<meta http-equiv='refresh' content='0, url=../index.php'>";
}


if(isset($_GET['go'])){
	if($_GET['go'] == "sair"){
		unset($_SESSION['user_session']);
		unset($_SESSION['pwd_session']);
		echo "<meta http-equiv='refresh' content='0, url=../index.php'>";
	}
}
?>
















