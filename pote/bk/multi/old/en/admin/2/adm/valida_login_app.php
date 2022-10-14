<?php
session_start();
$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];
include_once("conexao.php");

$result = mysql_query("SELECT * FROM user WHERE email='$usuariot' AND senha='$senhat' LIMIT 1");
$resultado = mysql_fetch_assoc($result);

if(empty($resultado)){
	//Mensagem de Erro
	$_SESSION['loginErro'] = "Usuário ou senha Inválido";
	
	//Manda o usuario para a tela de login
	header("Location: ../../../loginapp.php");
}else{
	//Define os valores atribuidos na sessao do usuario
	$_SESSION['usuarioId'] 			= $resultado['id'];
	$_SESSION['usuarioNome'] 		= $resultado['email'];
	$_SESSION['usuarioNivelAcesso'] = $resultado['status'];
	$_SESSION['usuarioSenha'] 		= $resultado['senha'];
	$_SESSION['dataIni'] 		= $resultado['dataini'];
	$_SESSION['dataFim'] 		= $resultado['datafim'];
	$_SESSION['plano'] 		= $resultado['plano'];
	
	if($_SESSION['usuarioNivelAcesso'] == "admin"){
		header("Location: administrativo.php");
	}else{
		header("Location: ../../../dicasapp.php");
	}
}
?>
