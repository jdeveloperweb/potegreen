<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id 				= $_GET["id"];

$query = "DELETE FROM multiplassug WHERE id='$id'";
$resultado = mysqli_query($conectar,$query);
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../administrador.php?link=15'>
				<script type=\"text/javascript\">
					alert(\"Múltipla apagada com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../administrador.php?link=15'>
				<script type=\"text/javascript\">
					alert(\"Múltipla não foi apagada com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>