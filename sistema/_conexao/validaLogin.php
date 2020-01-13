<?php
header("Content-type: text/html; charset=UTF-8");
session_start();

if (!isset($_SESSION['user_session']) && !isset($_SESSION['pwd_session'])){

	$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
	if($btnLogin){


				if (isset($_POST['user']) and isset($_POST['pwd']) != isset($_POST[''])){

						include_once("config.php");
						mysqli_set_charset($con, "utf8");
						$user = $_POST['user'];
						$pwd = MD5($_POST['pwd']);

						$query1 = mysqli_query($con,"SELECT * FROM administracao WHERE usuario='$user' and senha='$pwd'");
						$query2 = mysqli_query($con,"SELECT * FROM administracao WHERE usuario='$user'");
						$query3 = mysqli_query($con,"SELECT * FROM administracao WHERE senha='$pwd'");
			
							if($query1 -> num_rows == 1 ){
								
								$_SESSION['user_session'] = $user;
								$_SESSION['pwd_session'] = $pwd;

								mysqli_close($con);
								header("Location: ../_consultas/consultas.php");
							}
							elseif($query2 -> num_rows == 0 AND $query3 -> num_rows == 0){
								$_SESSION['msg'] = "<font color='red'>Usuario e Senha Incorretos.</font>";
								
								mysqli_close($con);
								header("Location: ../index.php");
							}
							elseif($query2 -> num_rows == 0){
								$_SESSION['msg'] = "<font color='red'>Usuario Não Cadastrado.</font>";
								
								mysqli_close($con);
								header("Location: ../index.php");
							}
							elseif($query2 -> num_rows == 1){
							
									if($query3 -> num_rows >= 1){
									$_SESSION['msg'] = "<font color='red'>Senha Errada.</font>";

									mysqli_close($con);
									header("Location: ../index.php");
									}
									else{
									$_SESSION['msg'] = "<font color='red'>Senha Não Cadastrada.</font>";

									mysqli_close($con);
									header("Location: ../index.php");
									}
							}
							
							else{
								$_SESSION['msg'] = "<font color='red'>Usuario e Senha Incorretos.</font>";

								mysqli_close($con);
								header("Location: ../index.php");
							}

				}
				else{
					$_SESSION['msg'] = "<font color='red'>Preencha todos os campos.</font>";

					header("Location: ../index.php");
				}	
	   			

	}
		
		else{
				echo "<meta http-equiv='refresh' content='0, url=../index.php'>";
		}
}

else{
		echo "<meta http-equiv='refresh' content='0, url=../consultas/consultas.php'>";
}

?>
