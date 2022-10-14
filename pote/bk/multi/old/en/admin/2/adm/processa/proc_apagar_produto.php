<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id 				= $_GET["id"];

$query = "DELETE FROM resultados WHERE id=$id";
$resultado = mysql_query($query);
$linhas = mysql_affected_rows();

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head><meta charset="euc-jp">
    
	</head>

	<body>
		<?php
		if (mysql_affected_rows() != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://multiplagreen.com/admin/2/adm/administrativo.php?link=10'>
				<script type=\"text/javascript\">
					alert(\"Produto apagado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://multiplagreen.com/admin/2/adm/administrativo.php?link=10'>
				<script type=\"text/javascript\">
					alert(\"Produto não foi apagado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>