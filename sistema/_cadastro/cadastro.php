<?php
header("Content-type: text/html; charset=UTF-8");
session_start();
if (!isset($_SESSION['user_session']) && !isset($_SESSION['pwd_session'])){ 
	
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Sistema: Cadastro</title>
	<script src="js/valform.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>
<body>
<div class="container">
	<nav>
		<ul class="menu">
			<a href="../index.php"><li>Login</li></a>
			<a href="../_mini/cad_mini.php"><li>Mini Curso</li></a>
		</ul>
	</nav>
	<section>
		<h1>Cadastro de Usuarios</h1>
		<br><br>

		<?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                }
                if(isset($_SESSION['msgemailuser'])){
                echo $_SESSION['msgemailuser'];
                unset($_SESSION['msgemailuser']);
                }
                if(isset($_SESSION['msgemail'])){
                echo $_SESSION['msgemail'];
                unset($_SESSION['msgemail']);
                }
                if(isset($_SESSION['msguser'])){
                echo $_SESSION['msguser'];
                unset($_SESSION['msguser']);
                }
                if(isset($_SESSION['msgcad'])){
                echo $_SESSION['msgcad'];
                unset($_SESSION['msgcad']);
            }
            ?>

		<form method="post" action="_cadUser/cadUser.php">

			Nome<br>
			<input type="text" name="nome" class="campo" placeholder="Nome Completo" x-moz-errormessage="Ops. Por favor, digite seu nome completo." title="Por favor, digite seu nome completo." minlength="4" maxlength="50" required autofocus oninvalid="setCustomValidity('Por favor, digite seu nome completo.')" onchange="try{setCustomValidity('')}catch(e){}"/><br>
			Email<br>
			<input type="email" name="email" class="campo" placeholder="E-mail" x-moz-errormessage="Ops. Digite um email valido. exemplo@exemplo.com" title="exemplo@exemplo.com" minlength="8" maxlength="50" required oninvalid="setCustomValidity('Digite um email valido. exemplo@exemplo.com')" onchange="try{setCustomValidity('')}catch(e){}"/><br>
			Usuario<br>
			<input type="text" name="user" class="campo"  placeholder="Usuario" maxlength="20" required><br>
			Senha<br>
			<input type="password" name="pwd"  class="campo" placeholder="Senha" maxlength="20" required><br>

			<br><br>

			<input type="reset" value="Limpar" class="btn">
			<input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn">
			

		</form>
	</section>
</div>
</body>
</html>
<?php
}
else{
    header("Location: ../_consultas/consultas.php");
}
?>