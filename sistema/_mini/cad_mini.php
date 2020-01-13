<?php
header("Content-type: text/html; charset=utf-8");

session_start();

include_once("../_conexao/config.php");
mysqli_set_charset($con, "utf8");

$vaga1 = 30;$vaga2 = 30;$vaga3 = 30;$vaga4 = 20;$vaga5 = 25;$vaga6 = 20;


$sql1 = "SELECT * from alunos_cursos WHERE  cod_curso = 1";
$qtd1 = mysqli_query($con, $sql1);
$curso1 = mysqli_num_rows($qtd1);

$sql2 = "SELECT * from alunos_cursos WHERE  cod_curso = 2";
$qtd2 = mysqli_query($con, $sql2);
$curso2 = mysqli_num_rows($qtd2);

$sql3 = "SELECT * from alunos_cursos WHERE  cod_curso = 3";
$qtd3 = mysqli_query($con, $sql3);
$curso3 = mysqli_num_rows($qtd3);

$sql4 = "SELECT * from alunos_cursos WHERE  cod_curso = 4";
$qtd4 = mysqli_query($con, $sql4);
$curso4 = mysqli_num_rows($qtd4);

$sql5 = "SELECT * from alunos_cursos WHERE  cod_curso = 5";
$qtd5 = mysqli_query($con, $sql5);
$curso5 = mysqli_num_rows($qtd5);

$sql6 = "SELECT * from alunos_cursos WHERE  cod_curso = 6";
$qtd6 = mysqli_query($con, $sql6);
$curso6 = mysqli_num_rows($qtd6);
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Sistema de Cadastro</title>
	<script src="js/valform.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>
<body>
<div class="container">
	<nav>
		<ul class="menu">
		<?php
		
		if (!isset($_SESSION['user_session']) && !isset($_SESSION['pwd_session'])){
		?>
			<a href="../index.php"><li>Login</li></a>
			<a href="../_cadastro/cadastro.php"><li>Cadastro</li></a>
		<?php
		}
		elseif (isset($_SESSION['user_session']) && isset($_SESSION['pwd_session'])){
		?>
			<a href="../_consultas/consultas.php"><li>Consultas</li></a>
			<a href="_verMini/inscritos.php"><li>Inscritos Mini Curso</li></a>
		<?php
		}
		
		?>
		</ul>
	</nav>
	<section>
		<h1>Cadastro Mini Curso</h1>
			<?php
		
		if (isset($_SESSION['user_session']) && isset($_SESSION['pwd_session'])){
		?>
			<a href="?go=sair" id="btnSairCur"><input type="button"  value="Sair" class="btn"/></a>
		<?php }	?>

		<br>

		<?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                }
                
            ?>

		<form method="post" action="_salva/salvaCad.php">

			Nome<br>
			<input type="text" name="nome" class="campo" placeholder="Nome Completo"  x-moz-errormessage="Ops. Por favor, digite seu nome completo." title="Por favor, digite seu nome completo." minlength="5" maxlength="50" required autofocus oninvalid="setCustomValidity('Por favor, digite seu nome completo.')" onchange="try{setCustomValidity('')}catch(e){}"/><br>
			Email<br>
			<input type="email" name="email" class="campo" placeholder="E-mail" x-moz-errormessage="Ops. Digite um email valido. exemplo@exemplo.com" title="exemplo@exemplo.com" minlength="8" maxlength="50" required oninvalid="setCustomValidity('Digite um email valido. exemplo@exemplo.com')" onchange="try{setCustomValidity('')}catch(e){}"/><br>
			Cpf<br>
			<input class="campo" id="failCpf" name="cpf" placeholder="CPF" x-moz-errormessage="Ops. CPF somente numeros." title="CPF somente numeros." minlength="11" maxlength="11" required="" onchange="faz()" type="text"><br>
			
			
			<?php if ($curso1 <= $vaga1 || $curso1 == NULL){?>
			<input type="radio" name="curso" value="1"> 19:10 as 21:50 - LAB 1 - Alex Valerio - Cobol <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php print"$curso1 inscritos"; ?></span><br>
			<?php }?>
			
				<?php if ($curso2 <= $vaga2 || $curso2 == NULL){?>
			<br><input type="radio" name="curso" value="2"> 19:10 as 21:50 - LAB 2 - Fabrizio Mello - PostgreSQL para desenvolvedores <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php print"$curso2 inscritos"; ?></span><br>
			<?php }?>

			<?php if ($curso3 <= $vaga3 || $curso3 == NULL){?>
			<br><input type="radio" name="curso" value="3"> 19:10 as 21:50 - LAB 3 - Simone Ferreira - Introducao ao LaTex <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php print"$curso3 inscritos"; ?></span><br>
			<?php }?>
			
		
			
			<?php if ($curso4 <= $vaga4 || $curso4 == NULL){?>
			<br><input type="radio" name="curso" value="4"> 19:10 as 20:30 - LAB 4 - Leandro Camargo - Intruducao ao Arduino <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php print"$curso4 inscritos"; ?></span><br>
			<?php }?>
			
			<?php if ($curso5 <= $vaga5 || $curso5 == NULL){?>
			<br><input type="radio" name="curso" value="5"> 19:10 as 21:50 - LAB 5 - Marcelo Siedler - Introducao a jogos com a engine Unity <span>&nbsp &nbsp &nbsp &nbsp &nbsp <?php print"$curso5 inscritos"; ?></span><br>
			<?php }?>
			
			<?php if ($curso6 <= $vaga6 || $curso6 == NULL){?>
			<br><input type="radio" name="curso" value="6"> 20:50 as 22:10 - LAB 4 - Leandro Camargo - Intruducao ao Arduino <span>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php print"$curso6 inscritos"; ?></span><br><br>
			<?php }?>

			<br>
			
			<input type="reset" value="Limpar" class="btn">
			<input type="submit" name="btnCadCurso" value="Confirmar" class="btn">
			

		</form>
	</section>
</div>
</body>
</html>

<?php
if(isset($_GET['go'])){
	if($_GET['go'] == "sair"){
		unset($_SESSION['user_session']);
		unset($_SESSION['pwd_session']);
		echo "<meta http-equiv='refresh' content='0, url=../index.php'>";
	}
}
?>