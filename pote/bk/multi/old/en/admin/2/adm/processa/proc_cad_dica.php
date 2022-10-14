<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$dias 				= $_POST["dia"];
$dicas 				= $_POST["dica"];

$query = mysql_query("INSERT INTO dicas (dia, dicas) VALUES ('$dias', '$dicas')");
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://multiplagreen.com/admin/2/adm/administrativo.php?link=28'>
				<script type=\"text/javascript\">
					alert(\"Dica cadastrada com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://multiplagreen.com/admin/2/adm/administrativo.php?link=28'>
				<script type=\"text/javascript\">
					alert(\"Dica não foi cadastrada com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>