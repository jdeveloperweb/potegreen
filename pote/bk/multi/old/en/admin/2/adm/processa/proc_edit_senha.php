<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id 				= $_SESSION['usuarioId'];
$senha 			= $_POST['senha'];
$query = mysql_query("UPDATE user set  senha = '$senha' WHERE id='$id'");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		<?php
		if (mysql_affected_rows() != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://multiplagreen.com/login.php'>
				<script type=\"text/javascript\">
					alert(\"Senha alterada com sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://multiplagreen.com/usuario.php'>
				<script type=\"text/javascript\">
					alert(\"Não foi possível alterar sua senha.\");
				</script>
			";		   

		}

		?>
	</body>
</html>