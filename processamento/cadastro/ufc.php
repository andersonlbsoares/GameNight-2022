<?php
	include "../conexao.php";
	$nome = $_POST['nome']; 
	$matricula = $_POST['matricula'];
	$curso = $_POST['curso'];
echo $curso;
	$sql = "INSERT into participantes(nome,matricula,ufc,qntd_convidados,presente,curso) VALUES('$nome','$matricula','1','0','0','$curso')";
	$exe = mysqli_query($conn, $sql);

	header('location:../../cadastro/tela_cadastro.php?info=1');

?>