<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id 				= $_GET["id"];

$query = "DELETE FROM jogosug WHERE id='$id'";
$resultado = mysqli_query($conectar, $query);
$linhas = mysqli_affected_rows($conectar);

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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=7'>
				<script type=\"text/javascript\">
					alert(\"Jogo bizulento apagado!!!!\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=7'>
				<script type=\"text/javascript\">
					alert(\"Ops... não apagamos o jogo... algo deu ruim\");
				</script>
			";		   

		}

		?>
	</body>
</html>