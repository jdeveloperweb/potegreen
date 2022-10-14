<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$email 				= $_POST["email"];
$senha 				= $_POST["senha"];
$nome 			= $_POST["nome"];
$telefone 			= $_POST["telefone"];
$dataini 			= $_POST["dataini"];
$status 	= $_POST["status"];
$plano 	= $_POST["plano"];
$query = mysqli_query($conectar,"INSERT INTO user (email, senha, username, telefone, dataini, perfil, avatar, status, plano) VALUES ('$email', '$senha', '$nome', '$telefone','$dataini', 'user','user.jpg', '$status','$plano')");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		<?php
		if (mysqli_affected_rows($conectar) != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://multiplagreen.com/painel/administrador.php?link=18'>
				<script type=\"text/javascript\">
					alert(\"Usuário cadastrado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://multiplagreen.com/painel/administrador.php?link=18'>
				<script type=\"text/javascript\">
					alert(\"Usuário não foi cadastrado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>