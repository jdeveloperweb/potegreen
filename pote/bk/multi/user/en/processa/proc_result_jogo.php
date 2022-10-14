<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id = $_GET['id'];
$conf= $_GET['status'];

 if($conf == '1') {
	 
$query = mysqli_query($conectar, "UPDATE jogosug set status = 'Vencida' WHERE id='$id'");

  } else if($conf == '2') {
	  
$query = mysqli_query($conectar, "UPDATE jogosug set status = 'Perdida' WHERE id='$id'");

  } else if($conf == '3') {
	  
$query = mysqli_query($conectar, "UPDATE jogosug set status = 'Anulado' WHERE id='$id'");

  } 


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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/user/administrador.php?link=9'>
				<script type=\"text/javascript\">
					alert(\"Avaliação de jogo cadastrada com sucesso!!! Vamos!!!\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/user/administrador.php?link=9'>
				<script type=\"text/javascript\">
					alert(\"Avaliação não processada.\");
				</script>
			";		   

		}

		?>
	</body>
</html>