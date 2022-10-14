<?php
session_start();
session_destroy();

//Remove todas as informações contidas na variaveis globais
unset($_SESSION['usuarioId'],
	$_SESSION['usuarioNome'] ,
	$_SESSION['usuarioNivelAcesso'],
	$_SESSION['usuarioSenha'],
	$_SESSION['dataIni'],
	$_SESSION['dataFim'],
	$_SESSION['plano']);

//redirecionar o usuário para a página de login
header("Location: index.php");
?>