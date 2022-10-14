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
    echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel'>
				<script type=\"text/javascript\">
					alert(\"Ops...área reservada\");
				</script>
			";
}else{
	//Define os valores atribuidos na sessao do usuario
	$_SESSION['usuarioId'] 			= $resultado['id'];
	$_SESSION['usuarioNome'] 		= $resultado['username'];
	$_SESSION['usuarioEmail'] 		= $resultado['email'];
	$_SESSION['bancaini'] 				= $resultado['bancaini'];
	$_SESSION['usuarioSenha'] 	= $resultado['senha'];
	$_SESSION['bancaAtual'] 			= $resultado['bancaatual'];
	$_SESSION['perfil'] 					= $resultado['perfil'];
	$_SESSION['status'] 					= $resultado['status'];
	$_SESSION['dataini'] 				= $resultado['dataini'];
	$_SESSION['datafim'] 				= $resultado['datafim'];
	$_SESSION['plano'] 					= $resultado['plano'];
	$_SESSION['usuarioAvatar']     = $resultado['avatar'];
	$_SESSION['logged_in'] = true;
	
	if($_SESSION['perfil'] == "admin"){
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=1'>
				<script type=\"text/javascript\">
					alert(\" Vamos!!!\");
				</script>
			";	
	}else{
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel'>
				<script type=\"text/javascript\">
					alert(\"Ops...área reservada\");
				</script>
			";	
	}
}
?>
