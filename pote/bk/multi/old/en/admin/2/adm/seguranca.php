<?php
ob_start();
if(($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioNome'] == "") || ($_SESSION['usuarioNivelAcesso'] == "") || ($_SESSION['usuarioSenha'] == "")|| ($_SESSION['dataIni'] == "")|| ($_SESSION['dataFim'] == "")|| ($_SESSION['plano'] == "")){
	unset($_SESSION['usuarioId'],
	$_SESSION['usuarioNome'] ,
	$_SESSION['usuarioNivelAcesso'],
	$_SESSION['usuarioSenha'],
	$_SESSION['dataIni'],
	$_SESSION['dataFim'],
	$_SESSION['plano']);
	//Mensagem de Erro
	$_SESSION['loginErro'] = "Área restrita para usuários cadastrados";
	
	//Manda o usuário para a tela de login
	header("Location: index.php");
}