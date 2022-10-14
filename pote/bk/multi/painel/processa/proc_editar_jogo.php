<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id = $_POST['id'];
$data= $_POST['data'];
$hora= $_POST['hora'];
$timea= $_POST['timea'];
$timeb= $_POST['timeb'];
$resultado= $_POST['resultado'];
$oddini= $_POST['oddini'];
$link= $_POST['link'];



$query = mysqli_query($conectar,"UPDATE jogosug set data ='$data', hora='$hora', timea='$timea', timeb='$timeb', resultado='$resultado', oddini='$oddini', link='$link' WHERE id='$id'");
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
					alert(\"Jogo editado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=7'>
				<script type=\"text/javascript\">
					alert(\"Ops... não conseguimos editar. Veja se falta algum dado e se persistir chame o Villa.\");
				</script>
			";		   

		}

		?>
	</body>
</html>