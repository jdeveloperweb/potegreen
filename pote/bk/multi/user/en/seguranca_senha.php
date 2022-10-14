<?php
ob_start();
if( @$_SESSION['usuarioEmail'] == false){   ;
	//Mensagem de Erro
	$_SESSION['loginErro'] = "Área restrita para usuários cadastrados";
	
	//Manda o usuário para a tela de login
	echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://wa.me/5553999466200'>
				<script type=\"text/javascript\">
					alert(\"Ops... Algo deu errado. Sua senha não foi cadastrada corretamente.\");
				</script>
			";
}