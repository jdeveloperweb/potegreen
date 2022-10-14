<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id 				= $_GET["id"];
$query = mysqli_query($conectar,"UPDATE user set status='Cancelado' WHERE id='$id'");
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
				
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=24'>
			
			";		   

		}

		?>
	</body>
</html>