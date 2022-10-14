<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id = $_GET['id'];
$statusv= $_GET['status'];
echo "ID:".$id ;
echo "STATUS: ".$statusv;


  if($statusv == '1') {
	  $atualizastatus = "Vencida";

  } else if($statusv == '2') {
	  $atualizastatus = "Perdida";

  } else if($statusv == '3') {
	  $atualizastatus = "Pendente";

  } else {
	  $atualizastatus = "Em análise";

  }




$query = mysqli_query($conectar,"UPDATE multiplassug set status ='$atualizastatus' WHERE id='$id'");
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=15'>
				<script type=\"text/javascript\">
					alert(\"Múltipla cadastrada com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=15'>
				<script type=\"text/javascript\">
					alert(\"Ops... não conseguimos cadastrar. Veja se falta algum dado e se persistir chame o Villa.\");
				</script>
			";		   

		}

		?>
	</body>
</html>