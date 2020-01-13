<?php
header("Content-type: text/html; charset=UTF-8");
session_start();

if (isset($_SESSION['user_session']) && isset($_SESSION['pwd_session'])){

	include_once("../../_conexao/config.php");
	mysqli_set_charset($con, "utf8");

	$btnSim1 = filter_input(INPUT_POST, 'sim1', FILTER_SANITIZE_STRING);	
	$btnSim2 = filter_input(INPUT_POST, 'sim2', FILTER_SANITIZE_STRING);	
	$btnSim3 = filter_input(INPUT_POST, 'sim3', FILTER_SANITIZE_STRING);
	$btnNao1 = filter_input(INPUT_POST, 'nao1', FILTER_SANITIZE_STRING);	
	$btnNao2 = filter_input(INPUT_POST, 'nao2', FILTER_SANITIZE_STRING);	
	$btnNao3 = filter_input(INPUT_POST, 'nao3', FILTER_SANITIZE_STRING);
	
	if($btnSim1){
		$id = $_POST['cod'];
		
			$sql = "UPDATE participantes SET dia_um = 'sim' WHERE cod_parti = '$id'";
					$query = mysqli_query($con, $sql);
			
			$_SESSION['msg'] = "<script>alert('Presenca confirmada no 1 Dia !!!'); history.go(0);</script>";
				
				header("Location: ../consultas.php");
	}
	
	elseif($btnSim2){
		$id = $_POST['cod'];
			
			$sql = "UPDATE participantes SET dia_dois = 'sim' WHERE cod_parti = '$id'";
					$query = mysqli_query($con, $sql);
			
			
			$_SESSION['msg'] = "<script>alert('Presenca confirmada no 2 Dia !!!'); history.go(0);</script>";
				
				header("Location: ../consultas.php");
	}
	
	elseif($btnSim3){
		$id = $_POST['cod'];
			
			$sql = "UPDATE participantes SET dia_tres = 'sim' WHERE cod_parti = '$id'";
					$query = mysqli_query($con, $sql);
			
			$_SESSION['msg'] = "<script>alert('Presenca confirmada no 3 Dia !!!'); history.go(0);</script>";
				
				header("Location: ../consultas.php");
	}
	
	elseif($btnNao1){
		$id = $_POST['cod'];
			
			$sql = "UPDATE participantes SET dia_um = 'nao' WHERE cod_parti = '$id'";
					$query = mysqli_query($con, $sql);
		
			
			$_SESSION['msg'] = "<script>alert('Presenca alterada para Nao!!!'); history.go(0);</script>";
				
				header("Location: ../consultas.php");
	}
	
	elseif($btnNao2){
		$id = $_POST['cod'];
			
			$sql = "UPDATE participantes SET dia_dois = 'nao' WHERE cod_parti = '$id'";
					$query = mysqli_query($con, $sql);
			
			
			$_SESSION['msg'] = "<script>alert('Presenca alterada para Nao!!!'); history.go(0);</script>";
				
				header("Location: ../consultas.php");
	}
	
	elseif($btnNao3){
		$id = $_POST['cod'];
			
			$sql = "UPDATE participantes SET dia_tres = 'nao' WHERE cod_parti = '$id'";
					$query = mysqli_query($con, $sql);
		
			$_SESSION['msg'] = "<script>alert('Presenca alterada para Nao!!!'); history.go(0);</script>";
				
				header("Location: ../consultas.php");
	}
	
	
	else{
	header("Location: ../../index.php");
 }
	
}
 
 else{
	header("Location: ../../index.php");
 }
 
?>

