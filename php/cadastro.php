<?php
	session_start();
	ob_start();
	$btnCadUsuario = filter_input(INPUT_GET, 'btnCadUsuario', FILTER_SANITIZE_STRING);
	if($btnCadUsuario){


		if (isset($_GET['nome']) and isset($_GET['email']) and isset($_GET['cpf']) and isset($_GET['inst']) == isset($_GET[''])){
			
			echo "<meta http-equiv='refresh' content='0, url=test.html'>";
		}else{

			//Chamando o arquivo php que faz a conexão com o banco.
			include_once("config.php");
			//Recebendo os dados do formulario.
			$nome = $_GET['nome'];
			$email = $_GET['email'];
			$inst = $_GET['inst'];
			$cpf = $_GET['cpf'];

			$emailRemetente = "contato.saads@gmail.com";
			$assunto = "Confirmação de Inscrição - 1ª Semana Acadêmica do curso de Análise e Desenvolvimento de Sistemas- IFSUL";
			$mensagem = "   Olá,  $nome! 
			
				Este é um e-mail de confirmação de inscrição na 1ª Semana Acadêmica do curso de Tecnologia em Análise e Desenvolvimento de Sistemas que ocorrerá entre os dias 18 e 20 de outubro de 2017 no Instituto Federal de Educação, Ciência e Tecnologia Sul Riograndense - IFSul câmpus Bagé.
				
				Confira em nosso site !--LINK DO SITE--! a programação, lembrando que as inscrições nos minicursos serão realizadas no dia durante o evento. Fique atento pois os minicursos terão vagas limitas. Mais informações em breve!
				
				Qualquer dúvida, estamos à disposição, contamos com sua participação!
				
				
				-- 
				Comissão Organizadora do Evento.
				IFSul - Câmpus Bagé
				(53) 3247-3237";


			//Comparando se as variaveis estão carregadas, Se os campos do formularios estiverem vasios ele retorna um alert para a pagina inicial.	
			if(empty($nome)){
				$_SESSION['msg'] = "<script>alert('Preencha todos os campos para se cadastrar.'); history.go(0);</script>";
				mysqli_close($con);
				header("Location: ../index.php");
			}elseif(empty($email)){
				$_SESSION['msg'] = "<script>alert('Preencha todos os campos para se cadastrar.'); history.go(0);</script>";
				mysqli_close($con);
				header("Location: ../index.php");
			}elseif(empty($inst)){
				$_SESSION['msg'] = "<script>alert('Preencha todos os campos para se cadastrar.'); history.go(0);</script>";
				mysqli_close($con);
				header("Location: ../index.php");
			}elseif(empty($cpf)){
				$_SESSION['msg'] = "<script>alert('Preencha todos os campos para se cadastrar.'); history.go(0);</script>";
				mysqli_close($con);
				header("Location: ../index.php");
			}else{
					//Procura no banco se o CPF e E-MAIL digitado não existe no banco se existir ele retorna uma linha para o CPF cadastrado e uma linha para o E-MAIL
					$query1 = mysqli_query($con,"SELECT * FROM participantes WHERE cpf = '$cpf'");
					$query2 = mysqli_query($con,"SELECT * FROM participantes WHERE email = '$email'");

					if($query1 -> num_rows == 1 and $query2 -> num_rows == 1){

						$_SESSION['msgcpfemail'] = "<script>alert('E-MAIL e CPF já cadastrado!!!'); history.go(0);</script>";
						mysqli_close($con);
						header("Location: ../index.php");

					}elseif($query1 -> num_rows == 1){
					
						$_SESSION['msgcpf'] = "<script>alert('CPF já cadastrado!!!'); history.back();</script>";
						mysqli_close($con);
						header("Location: ../index.php"); 
				
					}elseif($query2 -> num_rows == 1){
					
						$_SESSION['msgemail'] = "<script>alert('EMAIL já cadastrado!!!'); history.back();</script>";
						mysqli_close($con);
						header("Location: ../index.php"); 

					}else{
						//Se não ouver erro, se todos os campos estiverem preenchidos e não tiver ninguém cadastrado com o mesmo cpf e email no banco é feito a gravação dos dados do formulario no banco.  
					//echo("insert into participantes (nome, email, inst, cpf) values ('$nome','$email','$inst', $cpf)");
				 	$sql = "insert into participantes (nome, email, cpf, inst) values ('$nome', '$email', '$cpf', '$inst')";
					$salvar = mysqli_query($con, $sql);
						$_SESSION['msgcad'] = "<script>alert('Inscrição realizada com sucesso!!!'); history.go(0);</script>";


						
						//Enviando o email 
						
						$to = "$email";
						$subject = "$assunto";
						$messagem = "$mensagem";


						$headrs = "Content-Type:text/html; charset=UTF-8\n";
					 	$headers .= "From: $emailRemetente\n";
					 	$headers .= "X-Sender: <sistema@tads.com.br>\n";
					 	$headers .= "X-Mailer: ".$_SERVER['REMOTE_ADDR']."\n";
					 	$headers .= "Return-Path: $emailRemetente\n";
					 	$headers .= "MIME-Version: 1.0\n";

						mail($to, $subject, $messagem, $headers);

						mysqli_close($con);
						echo "<meta http-equiv='refresh' content='0, url=../index.php'>";

					}
			}	
				mysqli_close($con);
		}
	}
	//Se por algum motivo o formulario vier vazio ou tentarem acesar pelo terminal ele cai no ELSE que retoena para a pagina principal.
	else{
		mysqli_close($con);
		echo "<meta http-equiv='refresh' content='0, url=../index.php'>";
	}
?>