<?php
header("Content-type: text/html; charset=UTF-8");
session_start();


$btnCadCurso = filter_input(INPUT_POST, 'btnCadCurso', FILTER_SANITIZE_STRING);
if($btnCadCurso){


if (isset($_POST['nome']) and isset($_POST['email']) and isset($_POST['cpf']) and isset($_POST['curso']) == isset($_POST[''])){
	
	echo "<meta http-equiv='refresh' content='0, url=../cad_mini.php'>";
}else{

	//Chamando o arquivo php que faz a conexão com o banco.
	include_once("../../_conexao/config.php");
	mysqli_set_charset($con, "utf8");
	//Recebendo os dados do formulario.
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$curso = $_POST['curso'];


	//Comparando se as variaveis estão carregadas, Se os campos do formularios estiverem vasios ele retorna um alert para a pagina inicial.	
	if(empty($nome)){
		$_SESSION['msg'] = "<script>alert('Preencha todos os campos para se cadastrar.'); history.go(0);</script>";
		mysqli_close($con);
		header("Location: ../cad_mini.php");
	}elseif(empty($email)){
		$_SESSION['msg'] = "<script>alert('Preencha todos os campos para se cadastrar.'); history.go(0);</script>";
		mysqli_close($con);
		header("Location: ../cad_mini.php");
	}elseif(empty($cpf)){
		$_SESSION['msg'] = "<script>alert('Preencha todos os campos para se cadastrar.'); history.go(0);</script>";
		mysqli_close($con);
		header("Location: ../cad_mini.php");
	}elseif(empty($curso)){
		$_SESSION['msg'] = "<script>alert('Preencha todos os campos para se cadastrar.'); history.go(0);</script>";
		mysqli_close($con);
		header("Location: ../cad_mini.php");
	}else{
			//Procura no banco se o CPF e E-MAIL digitado não existe no banco se existir ele retorna uma linha para o CPF cadastrado e uma linha para o E-MAIL
			$query1 = mysqli_query($con,"SELECT * FROM alunos_cursos WHERE cpf = '$cpf'");
			$query2 = mysqli_query($con,"SELECT * FROM alunos_cursos WHERE email = '$email'");

			if($query1 -> num_rows == 1 and $query2 -> num_rows == 1){

				$_SESSION['msg'] = "<script>alert('E-MAIL e CPF já cadastrado!!!'); history.go(0);</script>";
				mysqli_close($con);
				header("Location: ../cad_mini.php");

			}elseif($query1 -> num_rows == 1){
			
				$_SESSION['msg'] = "<script>alert('CPF já cadastrado!!!'); history.go(0);</script>";
				mysqli_close($con);
				header("Location: ../cad_mini.php"); 
		
			}elseif($query2 -> num_rows == 1){
			
				$_SESSION['msg'] = "<script>alert('EMAIL já cadastrado!!!')history.go(0); history.go(0);</script>";
				mysqli_close($con);
				header("Location: ../cad_mini.php"); 

			}else{
				//Se não ouver erro, se todos os campos estiverem preenchidos e não tiver ninguém cadastrado com o mesmo cpf e email no banco é feito a gravação dos dados do formulario no banco.  
			//echo("insert into participantes (nome, email, inst, cpf) values ('$nome','$email','$inst', $cpf)");
		 	$sql = "insert into alunos_cursos (nome, email, cpf, cod_curso) values ('$nome', '$email', '$cpf', '$curso')";
			$salvar = mysqli_query($con, $sql);
				$_SESSION['msg'] = "<script>alert('Inscrição realizada com sucesso!!!'); history.go(0);</script>";
				
 

				mysqli_close($con);

				echo "<meta http-equiv='refresh' content='0, url=../cad_mini.php'>";

			}
	}	
		//mysqli_close($con);
}
}
//Se por algum motivo o formulario vier vazio ou tentarem acesar pelo terminal ele cai no ELSE que retoena para a pagina principal.
else{

	echo "<meta http-equiv='refresh' content='0, url=../cad_mini.php'>";
}

?>