<?php
header("Content-type: text/html; charset=UTF-8");
session_start();
if (isset($_SESSION['user_session']) && isset($_SESSION['pwd_session'])){


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sistema: Inscritos</title>
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
			<br><br>
			<a href="?go=sair" id="btnSairCur"><input type="button"  value="Sair" class="btn"/></a>
			<br><br>
		
			<a href="cobol.php"><button type="button" class="btn">Cobol</button></a>
			<a href="postgre.php"><button type="button" class="btn">PostgreSQL</button></a>
			<a href="latex.php"><button type="button" class="btn">Latex</button></a>
			<a href="arduino1.php"><button type="button" class="btn">Arduino 1</button></a>
			<a href="unity.php"><button type="button" class="btn">Unity</button></a>
			<a href="arduino2.php"><button type="button" class="btn">Arduino 2</button></a>	
		
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
















