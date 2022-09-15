<?php
	include "../conexao.php";

	$matricula = $_POST['mat'];
	$selecao = $_POST['selec'];
	if($selecao == '0'){
		$sql2 = "UPDATE participantes SET presente = '1' WHERE matricula = '$matricula'";
		$resultado2 = mysqli_query($conn, $sql2);		
		header("location:../../entrada/tela_boas_vindas.php?mat=$matricula&&ufc=1");

	}else{
		$sql = "UPDATE participantes set presente = '1' WHERE responsavel = '$matricula' && matricula= '$selecao'";
		$resultado = mysqli_query($conn, $sql);

		$sql3 = "SELECT * FROM participantes WHERE responsavel = '$matricula' && matricula = '$selecao'"; 
		$resultado3 = mysqli_query($conn, $sql3);
		if(mysqli_num_rows($resultado3) == 0){
			header("location:../../entrada/tela_escolha.php?mat=$matricula&&erro=1");
		}else{
			header("location:../../entrada/tela_boas_vindas.php?mat=$matricula&&ufc=0&&selecao=$selecao");
		}

	}


	// header('location:../../entrada/tela_boas_vindas.php?ufc=0');

?>