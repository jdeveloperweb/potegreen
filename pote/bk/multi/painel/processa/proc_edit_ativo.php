<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id 				= $_POST["id"];
$email 				= $_POST["email"];
$nome 				= $_POST["nome"];
$senha 			= $_POST["senha"];
$telefone 	= $_POST["telefone"];
$plano 	= $_POST["plano"];
$status 	= $_POST["status"];
$query = mysqli_query($conectar,"UPDATE user set username='$nome', plano='$plano', status='$status', email ='$email', senha = '$senha' WHERE id='$id'");
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=24'>
				<script type=\"text/javascript\">
					alert(\"Usuário editado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=24'>
				<script type=\"text/javascript\">
					alert(\"Usuário não foi editado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>