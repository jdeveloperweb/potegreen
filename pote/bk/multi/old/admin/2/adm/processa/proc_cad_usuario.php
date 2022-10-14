<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$email 				= $_POST["email"];
$senha 				= $_POST["senha"];
$dataini 			= $_POST["dataini"];
$datafim 			= $_POST["datafim"];
$status 	= $_POST["status"];
$plano 	= $_POST["plano"];
$query = mysql_query("INSERT INTO user (email, senha, dataini, datafim, status, plano) VALUES ('$email', '$senha', '$dataini', '$datafim', '$status','$plano')");
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://multiplagreen.com/admin/2/adm/administrativo.php?link=2'>
				<script type=\"text/javascript\">
					alert(\"Usuário cadastrado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://multiplagreen.com/admin/2/adm/administrativo.php?link=2'>
				<script type=\"text/javascript\">
					alert(\"Usuário não foi cadastrado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>