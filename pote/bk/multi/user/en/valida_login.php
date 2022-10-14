<?php
session_start();
$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];
include_once("conexao.php");

$sql = "SELECT * FROM user WHERE email='$usuariot' AND senha='$senhat' LIMIT 1";
$result = mysqli_query($conectar,$sql);
$resultado = mysqli_fetch_assoc($result);

if(empty($resultado)){
	//Mensagem de Erro
	$_SESSION['loginErro'] = "Usuário ou senha Inválido";
	
	//Manda o usuario para a tela de login
    echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/user'>
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
	
	if($_SESSION['perfil'] == "user" and $_SESSION['status'] == "Ativo"){
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=administrador.php?link=1'>
				<script type=\"text/javascript\">
					alert(\" Vamos!!!\");
				</script>
			";	
	}elseif($_SESSION['perfil'] == "admin" and $_SESSION['status'] == "admin"){
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../painel/administrador.php?link=1'>
				<script type=\"text/javascript\">
					alert(\"Lets go!!!\");
				</script>
			";	
	}else{
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/user'>
				<script type=\"text/javascript\">
					alert(\"Ops...only members\");
				</script>
			";	
	}
}
?>
