<?php
	include "processamento/conexao.php";
	include "php_grid/phpGrid.php";
	$dg = new C_DataGrid("SELECT * FROM participantes");
	$dg ->enable_edit("FORM", "CRUD");
	$dg -> display();



?>