<?php
header("Content-type: text/html; charset=UTF-8");
session_start();
ob_start();
if (!isset($_SESSION['user_session']) && !isset($_SESSION['pwd_session'])){
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
	if($btnCadUsuario){

		//Chamando o arquivo php que faz a conexão com o banco.
	include_once("../../_conexao/config.php");
	mysqli_set_charset($con, "utf8");

		//Recebendo os dados do formulario.
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$user = $_POST['user'];
	$pwd = MD5($_POST['pwd']);
	
	


	//Comparando se as variaveis estão carregadas, Se os campos do formularios estiverem vasios ele retorna um alert para a pagina inicial.	
	if(empty($nome)){
		$_SESSION['msg'] = "<font color='red'>Preencha todos os campos para se cadastrar.</font>";
		header("Location: ../cadastro.php");
	}elseif(empty($email)){
		$_SESSION['msg'] = "<font color='red'>Preencha todos os campos para se cadastrar.</font>";
		header("Location: ../cadastro.php");
	}elseif(empty($user)){
		$_SESSION['msg'] = "<font color='red'>Preencha todos os campos para se cadastrar.</font>";
		header("Location: ../cadastro.php");
	}elseif(empty($pwd)){
		$_SESSION['msg'] = "<font color='red'>Preencha todos os campos para se cadastrar.</font>";
		header("Location: ../cadastro.php");
	}else{



		//Procura no banco se o CPF e E-MAIL digitado não existe no banco se existir ele retorna uma linha para o CPF cadastrado e uma linha para o E-MAIL
			$query1 = mysqli_query($con,"SELECT * FROM administracao WHERE email = '$email'") or die("erro ao selecionar");
			$query2 = mysqli_query($con,"SELECT * FROM administracao WHERE usuario = '$user'") or die("erro ao selecionar");			
			

			if($query1 -> num_rows > 0 and $query2 -> num_rows > 0){

				$_SESSION['msgemailuser'] = "<font color='red'>E-MAIL e USUARIO já cadastrado!!!</font>";
				mysqli_close($con);	
				header("Location: ../cadastro.php");
				
				

			}elseif($query1 -> num_rows == 1){
			
				$_SESSION['msgemail'] = "<font color='red'>E-MAIL já cadastrado!!!</font>";
				mysqli_close($con);	
				header("Location: ../cadastro.php");
				
				 
			}elseif($query2 -> num_rows == 1){
			
				$_SESSION['msguser'] = "<font color='red'>USUARIO já cadastrado!!!</font>";
				mysqli_close($con);
				header("Location: ../cadastro.php"); 
				
				

			}else{

								
				//Se não ouver erro, se todos os campos estiverem preenchidos e não tiver ninguém cadastrado com o mesmo cpf e email no banco é feito a gravação dos dados do formulario no banco.  
			//echo("insert into usuarios (nome, email, inst, cpf) values ('$nome','$email','$inst', $cpf)");
			
		 	$sql = "INSERT INTO administracao (nome, email, usuario, senha) VALUES ('$nome', '$email', '$user', '$pwd')";
			$salvar = mysqli_query($con, $sql);
			$linhas = mysqli_affected_rows($con);
				if($linhas == 1){

					$_SESSION['msg'] = "<script>alert('Usuário cadastrado com sucesso!!!');</script>";
					mysqli_close($con);	
					
					header("Location: ../../index.php"); 
					

				}else{
					$_SESSION['msgcad'] = "<script>alert('ERRO USUARIO não cadastrado!!!'); history.go(0);</script>";
					mysqli_close($con);	
					echo "<meta http-equiv='refresh' content='0, url=cadastro.php'>";
			}
		}
}
			
}
//Se por algum motivo o formulario vier vazio ou tentarem acesar pelo terminal ele cai no ELSE que retoena para a pagina principal.
	else{
			echo "<meta http-equiv='refresh' content='0, url=../cadastro.php'>";
	}
}
else{
    header("Location: ../../_consultas/consultas.php");
}


?>



		
	
	
