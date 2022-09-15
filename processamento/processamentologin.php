<?php
	include "conexao.php";

	$user = $_POST['user'];
	$pass = $_POST['pass'];


	$sql = "SELECT * FROM usuario WHERE user = '$user' && pass = '$pass'";
	$resultado = mysqli_query($conn, $sql);
	if(mysqli_num_rows($resultado)==1){
		session_start();
		$_SESSION["validado"]='1';
		header('location:../cadastro/tela_cadastro.php');
	
	}else{
		header('location:../login.php?error=1');

	}
?>