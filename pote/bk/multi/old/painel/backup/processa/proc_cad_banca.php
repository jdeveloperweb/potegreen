<?php
session_start();
include_once("../conexao.php");


$id_user = $_SESSION['usuarioId'] ;
$bancaini =$_POST['banca']*100;

mysql_query("UPDATE user set bancaini ='$bancaini', bancaatual ='$bancaini' WHERE id='$id_user'");

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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=1'>
				<script type=\"text/javascript\">
					alert(\"Banca cadastrada com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=1'>
				<script type=\"text/javascript\">
					alert(\"Banca não cadastrada.\");
				</script>
			";		   

		}

		?>
	</body>
</html>