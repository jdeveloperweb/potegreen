<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id 				= $_POST["id"];
$dia 				= $_POST["dia"];
$dicas 				= $_POST["dicas"];

$query = mysql_query("UPDATE dicas set dia ='$dia', dicas = '$dicas' WHERE id='$id'");
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
					alert(\"Dica editada com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://multiplagreen.com/admin/2/adm/administrativo.php?link=28'>
				<script type=\"text/javascript\">
					alert(\"Dica não foi editada com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>