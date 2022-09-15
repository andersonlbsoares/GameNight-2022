<?php
	session_start();
	if($_SESSION["validado"]!='1'){
		header('location:../login.php');
	}
?>