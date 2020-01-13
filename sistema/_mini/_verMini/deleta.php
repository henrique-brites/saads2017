<?php
header("Content-type: text/html; charset=UTF-8");
session_start();
if (isset($_SESSION['user_session']) && isset($_SESSION['pwd_session'])){

	include_once("../../_conexao/config.php");
	mysqli_set_charset($con, "utf8");


   $id = $_GET['id'];
   $DelSql = "DELETE FROM alunos_cursos WHERE cod_aluno=$id";
   $res = mysqli_query($con, $DelSql);
   if($res){


   $_SESSION['msgd'] = "<script>alert('Excluido com sucesso.'); history.go();</script>";

	echo"<script>javascript:history.go(-1);</script>";


}else{
	$_SESSION['msgd'] = "<script>alert('Erro tente Novamente.'); history.go(0);</script>";
	echo"<script>javascript:history.go(-1);</script>";
}
}
else{
echo "<meta http-equiv='refresh' content='0, url=../../index.php'>";
}
?>