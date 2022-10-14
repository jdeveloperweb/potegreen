<?php
session_start();
//Mensagem de Saída

	$_SESSION['logged_in'] = false;

	$_SESSION['loginErro'] = "Logout realizado com sucesso";		
	$_SESSION['usuarioId'] 			= "";
	$_SESSION['usuarioNome'] 		= "";
	$_SESSION['usuarioEmail'] 		= "";
	$_SESSION['bancaini'] 				= "";;
	$_SESSION['usuarioSenha'] 	= "";
	$_SESSION['bancaAtual'] 			= "";
	$_SESSION['perfil'] 					= "";
	$_SESSION['status'] 					= "";
	$_SESSION['dataini'] 				= "";
	$_SESSION['datafim'] 				= "";
	$_SESSION['plano'] 					= "";
	$_SESSION['usuarioAvatar']     = "";

// Apaga todas as variáveis da sessão
$_SESSION = array();

// Se é preciso matar a sessão, então os cookies de sessão também devem ser apagados.
// Nota: Isto destruirá a sessão, e não apenas os dados!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Por último, destrói a sessão
session_destroy();


//redirecionar o usuário para a página de login
echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/user/'>
				<script type=\"text/javascript\">
					alert(\"Logout realizado com sucesso\");
				</script>
			";	

?>