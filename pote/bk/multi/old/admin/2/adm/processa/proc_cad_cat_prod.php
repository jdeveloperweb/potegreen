<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$result 				= $_POST["result"];
$odd 				= $_POST["odd"];

$query = mysql_query("INSERT INTO categorias (result, odd,) VALUES ('$result', '$odd')");
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/loja/adm/administrativo.php?link=7'>
				<script type=\"text/javascript\">
					alert(\"Categoria de Produto cadastrado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/loja/adm/administrativo.php?link=7'>
				<script type=\"text/javascript\">
					alert(\"Categoria de produto não foi cadastrado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>