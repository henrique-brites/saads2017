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
			
			<a href="../consultas.php"><li>Consultas</li></a>
						
			<br><br>
			

		</ul>
	</nav>
	<section>
			<br><br>
			<a href="?go=sair" id="btnSairCur"><input type="button"  value="Sair" class="btn"/></a>
			<br><br>
		
			<a href="dia_um.php"><button type="button" class="btn">Primeri Dia </button></a>
			<a href="dia_tres.php"><button type="button" class="btn">Terceiro Dia</button></a>
			<a href="2_dias.php"><button type="button" class="btn">Primeiro e Terceiro Dia</button></a>
			<a href="mostra_tudo.php"><button type="button" class="btn">Mostra Tudo</button></a>
		
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
















