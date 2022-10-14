<?php
ob_start();
if(($_SESSION['email'] == "") || ($_SESSION['senha'] == "") || ($_SESSION['status'] == "") || ($_SESSION['datafim'] == "")){
	unset($_SESSION['email'],			
		  $_SESSION['senha'], 		
		  $_SESSION['status'], 	
		  $_SESSION['datafim']);
	//Mensagem de Erro
	$_SESSION['loginErro'] = "Área restrita para assinantes";
	
	//Manda o usuário para a tela de login
	header("Location: planos.php");
}