<?php
ob_start();
if( $_SESSION['usuarioAvatar'] == false){   ;
	//Mensagem de Erro
	$_SESSION['loginErro'] = "Área restrita para usuários cadastrados";
	
	//Manda o usuário para a tela de login
	echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/user'>
				<script type=\"text/javascript\">
					alert(\"Ops...área reservada\");
				</script>
			";
}