<?php
	include "../conexao.php";
	$nome = $_POST['nome']; 
	$matricula = $_POST['responsavel'];
	$cpf = $_POST['cpf'];

	$mat = explode (" -", $matricula);
	$matricula1 = $mat[0];


	$sql = "SELECT * FROM participantes WHERE matricula = '$matricula1'";
	$resultado = mysqli_query($conn, $sql);	
	while($linha = mysqli_fetch_array($resultado)){
		// echo $linha['nome'];
		$att = $linha['qntd_convidados']+1;
		$sql2 = "UPDATE participantes SET qntd_convidados = '$att' WHERE matricula = '$matricula1'";
		$sql3 = "INSERT INTO participantes(nome,matricula,ufc,responsavel,qntd_convidados,presente,cpf) VALUES('$nome', '$att','0','$matricula1','0','0','$cpf')";
		$resultado2 = mysqli_query($conn, $sql2);	
		$resultado3 = mysqli_query($conn, $sql3);	

	}

	header('location:../../cadastro/tela_cadastro.php?info=1');

?>