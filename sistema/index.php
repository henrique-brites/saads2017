<?php
header("Content-type: text/html; charset=UTF-8");
session_start();
if (!isset($_SESSION['user_session']) && !isset($_SESSION['pwd_session'])){ 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Sistema: Login</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
<div class="container">
	<nav>
		<ul class="menu">
			<a href="_cadastro/cadastro.php"><li>Cadastro</li></a>
			<a href="_mini/cad_mini.php"><li>Mini Curso</li></a>
			
		</ul>
	</nav>
	<section>
		<h1>Login de Usuarios</h1>
		<br><br>

		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			
		?>

		<form method="post" action="_conexao/validaLogin.php">

			Usuario<br>
			<input type="text" name="user" class="campo" maxlength="20" required autofocus><br>
			Senha<br>
			<input type="password" name="pwd"  class="campo" maxlength="20" required><br>
			
			<br><br>
			
			<input type="reset" value="Limpar" class="btn">
			<input type="submit" name="btnLogin" value="Entrar" class="btn">
			


		</form>
	</section>
</div>
</body>
</html>

<?php
}
else{
    header("Location: _consultas/consultas.php");
}
?>
