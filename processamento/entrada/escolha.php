<?php
	include "../conexao.php";

	$matricula = $_POST['matricula'];
	$sql = "SELECT * FROM participantes WHERE matricula = '$matricula' && ufc = '1'";
	echo $matricula;
	$resultado = mysqli_query($conn, $sql);	
	while($linha = mysqli_fetch_array($resultado)){
		if($linha['qntd_convidados']>'0'){
			header("location:../../entrada/tela_escolha.php?mat=$matricula");
		}
		else{
			$sql2 = "UPDATE participantes SET presente = '1' WHERE matricula = '$matricula'";
			$resultado2 = mysqli_query($conn, $sql2);	

			header("location:../../entrada/tela_boas_vindas.php?mat=$matricula&&ufc=1");

		}
	}

	if (mysqli_num_rows($resultado) == 0){
		header('location:../../entrada/tela_inicial.php?erro=1');
	}

?>