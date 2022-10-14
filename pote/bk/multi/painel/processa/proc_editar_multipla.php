<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id = $_POST['id'];
$descricao= $_POST['area'];
$status= $_POST['status'];
$oddtotal= $_POST['oddtotal'];
$retorno= $_POST['retorno'];
$data= $_POST['data'];

echo "ID = ".$id = $_POST['id'];
echo "DESC = ".$descricao= $_POST['area'];
echo "STA = ".$status= $_POST['status'];
echo "ODD = ".$oddtotal= $_POST['oddtotal'];
echo "RET = ".$retorno= $_POST['retorno'];
echo "DATA = ".$data= $_POST['data'];


$query = mysqli_query($conectar,"UPDATE multiplassug set status ='$status', descricao='$descricao', oddtotal='$oddtotal', retorno='$retorno', data='$data' WHERE id='$id'");
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=14'>
				<script type=\"text/javascript\">
					alert(\"Múltipla editada com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://multiplagreen.com/painel/administrador.php?link=14'>
				<script type=\"text/javascript\">
					alert(\"Ops... não conseguimos editar. Veja se falta algum dado e se persistir chame o Villa.\");
				</script>
			";		   

		}

		?>
	</body>
</html>